<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    public function about() {
        return view('static_pages/about');
    }

    public function dealers() {
        return view('static_pages/dealers');
    }

    public function forArchitectors() {
        return view('static_pages/forArchitectors');
    }

    public function guaranteeService() {
        return view('static_pages/guaranteeService');
    }

    public function installment() {
        return view('static_pages/installment');
    }

    public function delivery() {
        return view('static_pages/delivery');
    }

    public function managers() {
        return view('static_pages/managers');
    }

    public function offerContract() {
        return view('static_pages/offerContract');
    }

    public function ourBrands() {
        return view('static_pages/ourBrands');
    }

    public function ourShops() {
        return view('static_pages/ourShops');
    }

    public function payment() {
        return view('static_pages/payment');
    }

    public function question() {
        return view('static_pages/question');
    }

    public function sertificates() {
        return view('static_pages/sertificates');
    }

    public function socialMedia() {
        return view('static_pages/socialMedia');
    }

    public function suppliers() {
        return view('static_pages/suppliers');
    }

    public function vacancy() {
        return view('static_pages/vacancy');
    }

    public function wearechoosen() {
        return view('static_pages/wearechoosen');
    }

    public function public_offer() {
        return view('static_pages/publicOffer');
    }

    public function catalogs() {
        return view('static_pages/catalogs');
    }

    public function ideasInnerBlock() {
        return view('static_pages/ideasInnerBlock');
    }

    public function projectsFlat() {
        return view('static_pages/projectsFlat');
    }

    public function virtualDesign() {
        return view('static_pages/virtualDesign');
    }

    public function ideas() {
        return view('static_pages/ideas');
    }

    public function ideasInner($name) {
        return view('static_pages/ideasInner/' . $name);
    }

}
