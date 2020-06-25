@extends('admin.layout')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Меняем категорию</h3>
                </div>
                <div class="box-body">
                    {{Form::open(['route'=>['attribute.update', $data->id], 'method'=>'put', 'autocomplete' => 'off'])}}
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Название</label>
                            <input type="text" name="title" class="form-control" id="exampleInputEmail1" value="{{ $data->title }}">
                        </div>

                        <div class="form-group">
                            <img src="{{$product->getImage()}}" class="img-responsive" width="200" style="margin: 0 auto;">
                            <label for="exampleInputFile">Лицевая картинка jpeg jpg png (300x300)</label>
                            <input type="file" id="exampleInputFile" name="image">
                        </div>
                        <div class="form-group">
                            @if(isset($images))
                                @foreach ($images as $image)
                                <img src="/uploads/products/{{ $image->image }}" class="img-responsive" width="15%" style="display:inline-flex">
                                @endforeach
                            @endif
                            <label for="exampleInputFile">Выбор нескольких картинок (зажимая Ctrl) (300x300)</label>
                            <input type="file" id="exampleInputFile" name="images[]" multiple>
                        </div>

                        <div class="form-group">
                            <label>Категория</label>
                            {{Form::select('filter_id',
                             $filters,
                             $data->filter_id,
                             ['class' => 'form-control select2'])}}
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <button class="btn btn-default">Назад</button>
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