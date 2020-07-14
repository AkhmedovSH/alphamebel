@extends('admin.layout')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->

        <!-- Main content -->
        <section class="content">
        {{Form::open([
           'route' =>'product.store',
           'files' => true,
           'autocomplete' => "off"
        ])}}
            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Добавляем статью</h3>
                </div>
                @include('admin.errors')
                <div class="box-body">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Заголовок</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="title" value="{{old('title')}}" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Цена</label>
                            <input type="number" class="form-control" id="exampleInputEmail1" name="price" value="{{old('price')}}" required>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Скидка (Не обязательно)</label>
                            <input type="number" class="form-control" id="exampleInputEmail1" name="sale" value="{{old('sale')}}">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputFile">Лицевая картинка jpeg jpg png</label>
                            <input type="file" id="exampleInputFile" name="image">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Выбор нескольких картинок (зажимая Ctrl)</label>
                            <input type="file" id="exampleInputFile" name="images[]" multiple>
                        </div>
                        <div class="form-group">
                            <label>Категория</label>
                            {{Form::select('category_id',
                                $categories,
                                null,
                                ['class' => 'form-control select2'])
                            }}
                        </div>
                        <div class="form-group">
                            <label>Свойства</label>
                            {{Form::select('attribute_ids[]',
                                $attributes,
                                null,
                                ['class' => 'form-control select2', 'multiple'])
                            }}
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Примечание (Не обязательно)</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="note" value="{{old('price')}}">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Код продукта (Не обязательно)</label>
                            <input type="number" class="form-control" name="code" value="{{old('code')}}">
                        </div>
                        <div class="form-group">
                            <label>Ширина (Не обязательно)</label>
                            <input type="number" class="form-control" name="width" value="{{old('width')}}">
                        </div>
                        <div class="form-group">
                            <label>Высота (Не обязательно)</label>
                            <input type="number" class="form-control" name="height" value="{{old('height')}}">
                        </div>
                        <div class="form-group">
                            <label>Длина (Не обязательно)</label>
                            <input type="number" class="form-control" name="length" value="{{old('length')}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Выбор 2 картинок (зажимая Ctrl)</label>
                            <input type="file" id="exampleInputFile" name="two_images[]" multiple>
                        </div>
                    </div>

                    <div class="col-md-12">
                        
                        <div class="form-group">
                            <label for="exampleInputEmail1">Полный текст</label>
                            <textarea name="description" id="my-editor" cols="30" rows="10" class="form-control">{{ old('content') }}</textarea>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <button class="btn btn-success pull-right">Добавить</button>
                </div>
                <!-- /.box-footer-->
            </div>
            <!-- /.box -->
            {{Form::close()}}
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection