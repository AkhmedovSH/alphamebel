@extends('admin.layout')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Меняем Слайдер</h3>
                </div>
                <div class="box-body">
                    {{Form::open(['route'=>['slider.update', $item->id], 'method'=>'put', 'files' => true, 'autocomplete' => 'off'])}}
                    <div class="box-body">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Заголовок 2-3 слово</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="title" value="{{ $item->title }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Описание 5-10 слов</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="description" value="{{ $item->description }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Ссылка пример: https://www.google.com/</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="url" value="{{ $item->url }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Лицевая картинка формат jpg png jpeg</label>
                                <img src="{{ $item->getImage() }}" alt="" class="img-responsive" width="200">
                                <input type="file" id="exampleInputFile" name="image">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <button class="btn btn-warning pull-right">Изменить</button>
                </div>
                <!-- /.box-footer-->
                {{Form::close()}}
            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection