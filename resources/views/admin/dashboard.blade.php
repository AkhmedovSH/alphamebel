@extends('admin.layout')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Статистика
        </h1>
        
    </section>
    <!-- Main content -->
    <section class="content">
    {{Form::open([
        'route' => ['credit.update', $data->id],
        'method' => 'put',
        'autocomplete' => 'off'
        ])}}

    <div class="box-body">
        <div class="col-md-4" >
            <div class="form-group" style="margin-right:4px">
                <label>Кредит</label>
                <input type="text" class="form-control" name="credit" value="{{ $data->credit }}">
            </div>
            <div class="form-group">
                <label>Месяцы (1-12)</label>
                <input type="number" class="form-control" name="month" value="{{ $data->month }}">
            </div>
            <button type="submit" class="btn btn-success">Изменить</button>
        </div>
        <br>
    </div>

    {{Form::close()}}
    </section>
    <!-- /.content -->
</div>
@endsection