<?php

namespace App\Http\Controllers;

use App\User;
use App\click\ClickData;
use App\ClickTransaction;
use App\TransactionsHistory;
use Illuminate\Http\Request;


class ClickController extends Controller
{

    private $reqData = [];
    private $user; // init into validateData()


    public function click(Request $request){
        if(strlen($request['merchant_trans_id']) <= 13){
            $user = User::where('name', $request['merchant_trans_id'])->first();
            if($user == null) {
                $new_user = User::create([
                    'name' => $request['merchant_trans_id'],
                ]);
                $new_user->save();
            }
        }
        
        if ($request->action == 0) {
            $this->reqData = $request->all();
            $this->validateData();
            $this->prepare();

        }elseif($request->action == 1){
            $this->reqData = $request->all();
            $this->validateData();
            $this->complete();
        }else{
            return [
                'error_code' => -3,
            ];
        }
    }

    public function prepare(){
        $checkExists = ClickTransaction::where('click_trans_id', $this->reqData['click_trans_id'])->first();

        if ($checkExists !== NULL) {

            if ($checkExists->status == ClickTransaction::STATUS_CANCEL) {
                //Transaction cancelled
                return die(json_encode(ClickData::getMessage('9')));
            } //Already paid
            else return die(json_encode(ClickData::getMessage('4')));
        }

        //Error in request from click
        if (!$this->reqData['error'] == 0) die(json_encode(ClickData::getMessage('8')));

        $newTransaction = new ClickTransaction;
        $newTransaction->user_phone        = $this->reqData['merchant_trans_id'];
        $newTransaction->click_trans_id = $this->reqData['click_trans_id'];
        $newTransaction->service_id     = $this->reqData['service_id'];
        $newTransaction->amount         = $this->reqData['amount'];
        $newTransaction->sign_time      = $this->reqData['sign_time'];
        $newTransaction->click_paydoc_id = $this->reqData['click_paydoc_id'];
        $newTransaction->create_time    = time();
        $newTransaction->error_note    = $this->reqData['error_note'];
        $newTransaction->status         = ClickTransaction::STATUS_INACTIVE;
        $newTransaction->save();

        $merchant_prepare_id = $newTransaction->id;
        $return_array = array(
            'click_trans_id' => $this->reqData['click_trans_id'],        // ID Click Trans
            'merchant_trans_id' => $this->reqData['merchant_trans_id'],  // ID платежа в биллинге Поставщика
            'merchant_prepare_id' => $merchant_prepare_id                // ID платежа для подтверждения
        );
        $result = array_merge(ClickData::getMessage('0'), $return_array);
        die(json_encode($result));

        // other case report: Unknown Error
        //die(json_encode(1));
    }

    public function complete(){

        if (empty($this->reqData['merchant_prepare_id'])) die(json_encode(ClickData::getMessage('8')));
        // --------------------------------------------------------------------------- Start trasaction DB

        $transaction = ClickTransaction::where(
            [
                ['id', '=', $this->reqData['merchant_prepare_id']],
                ['user_phone', '=', $this->reqData['merchant_trans_id']],
                ['click_trans_id', '=', $this->reqData['click_trans_id']],
                ['click_paydoc_id', '=', $this->reqData['click_paydoc_id']],
                ['service_id', '=', $this->reqData['service_id']]
            ])->first();

        if ($transaction !== NULL) {

            if ($this->reqData['error'] == 0) {

                if ($this->reqData['amount'] == $transaction->amount) {

                    if ($transaction->status == ClickTransaction::STATUS_INACTIVE) {
                        $transaction->status = ClickTransaction::STATUS_ACTIVE;
                        $transaction->save();
                        $return_array = [
                            'click_trans_id' => $transaction->click_trans_id,
                            'merchant_trans_id' => $transaction->user_phone,
                            'merchant_confirm_id' => $transaction->id,
                        ];
                        $result = array_merge(ClickData::getMessage('0'), $return_array);
                        die(json_encode($result));
                    } elseif ($transaction->status == ClickTransaction::STATUS_CANCEL) {
                        //"Transaction cancelled"
                        die(json_encode(ClickData::getMessage('9')));
                    } elseif ($transaction->status == ClickTransaction::STATUS_ACTIVE) {
                        die(json_encode(ClickData::getMessage('4')));
                    } else die(json_encode(ClickData::getMessage('n')));
                } else {
                    if ($transaction->status == ClickTransaction::STATUS_INACTIVE)
                        //$transaction->delete();
                        //"Incorrect parameter amount"
                        die(json_encode(ClickData::getMessage('2')));
                }
            } elseif ($this->reqData['error'] < 0) {
                if ($this->reqData['error'] == -5017) {           // "Transaction cancelled"
                    if ($transaction->status != ClickTransaction::STATUS_ACTIVE) {
                        $transaction->status = ClickTransaction::STATUS_CANCEL;
                        $transaction->error_note = $this->reqData['error_note'];
                        //created by me to show transactions history for user
                        // TransactionsHistory::create([
                        //     'user_phone' => $transaction->user_phone,
                        //     'amount' => -$transaction->amount,
                        //     'description' => 'To\'lov bekor qilindi',
                        //     'paid' => 'Click'
                        // ]);
                        // $transaction->save();
                        // $user = User::find($transaction->user_id);
                        // $user->money -= $transaction->amount;
                        // $user->save();
                        die(json_encode(ClickData::getMessage('9')));

                    } else die(json_encode(ClickData::getMessage('n')));
                } elseif ($this->reqData['error'] == -1 && $transaction->status == ClickTransaction::STATUS_ACTIVE) {
                    die(json_encode(ClickData::getMessage('4')));
                } else die(json_encode(ClickData::getMessage('n')));
            } // error > 0
            else {
                die(json_encode(ClickData::getMessage('n')));
            }
        } // Transaction is null
        else {
            // Transaction does not exist
            die(json_encode(ClickData::getMessage('6')));
        }
//        echo "Hello from Complete // ";
        print_r(ClickData::getMessage(0));
        // var_dump(ClickData::$messages);
    }


    public function validateData(){

        if ((!isset($this->reqData['click_trans_id'])) ||
            (!isset($this->reqData['service_id'])) ||
            (!isset($this->reqData['click_paydoc_id'])) ||
            (!isset($this->reqData['merchant_trans_id'])) ||
            (!isset($this->reqData['amount'])) ||
            (!isset($this->reqData['action'])) ||
            (!isset($this->reqData['sign_time'])) ||
            (!isset($this->reqData['sign_string'])) ||
            (!isset($this->reqData['error']))
        ) {
            die(json_encode(ClickData::getMessage('n')));
        }

        $sign_string_veryfied = md5(
            $this->reqData['click_trans_id'] .
            $this->reqData['service_id'] .
            ClickData::SECRET_KEY .
            $this->reqData['merchant_trans_id'] .
            (($this->reqData['action'] == 1) ? $this->reqData['merchant_prepare_id'] : '') .
            $this->reqData['amount'] .
            $this->reqData['action'] .
            $this->reqData['sign_time']
        );

        //dd($sign_string_veryfied, $this->reqData['sign_string']);

        if ($this->reqData['sign_string'] != $sign_string_veryfied) {
        //if ($this->reqData['sign_string'] != "60169ed9bedf35268e30f7edcede5358") {
            die(json_encode(ClickData::getMessage('1')));
        }
        // Check Actions: Action not found
        if (!in_array($this->reqData['action'], [0, 1])) die(json_encode(ClickData::getMessage('3')));
        // Check sum: Incorrect parameter amount
        if (($this->reqData['amount'] < ClickData::MIN_AMOUNT) || ($this->reqData['amount'] > ClickData::MAX_AMOUNT)) {
            die(json_encode(ClickData::getMessage('2')));
        }
        //
        $this->user = User::where('name', $this->reqData['merchant_trans_id'])->first();
        //die(json_encode($this->user));
        if ($this->user === NULL) {
            // User does not exist
            die(json_encode(ClickData::getMessage('5')));
        }
    }

}
