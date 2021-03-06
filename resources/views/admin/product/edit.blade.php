@extends('admin.layout')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->


        <!-- Main content -->
        <section class="content">
        {{Form::open([
            'route' => ['product.update', $data->id],
            'files' => true,
            'method' => 'put',
            'autocomplete' => "off"
        ])}}

            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Обновляем статью</h3>
                </div>
                @include('admin.errors')
                <div class="box-body">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Заголовок</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="title" value="{{$data->title}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Цена</label>    
                            <input type="number" class="form-control" id="exampleInputEmail1" name="price" value="{{$data->price}}">
                        </div>

                        <div style="display: flex; justify-content: space-between;">
                            <div class="form-group" style="width: 100%; margin-right: 15px">
                                <label for="exampleInputEmail1">Скидка (Не обязательно)</label>
                                <input type="number" class="form-control" id="exampleInputEmail1" name="sale" value="{{$data->sale}}">
                            </div>
                            <div class="form-group w-100" style="width: 100%">
                                <label for="exampleInputEmail1">Позиция</label>
                                <input type="number" class="form-control" id="exampleInputEmail1" name="position" value="{{$data->position}}">
                            </div>
												</div>
												
												<label>Распродажа</label><br>
												<input type="radio" id="no" name="sale_out" value="0" 
												@if($data->sale_out == 0)
												checked
												@endif
												>
												<label for="no">Нет</label>
												<input type="radio" id="yes" name="sale_out" value="1"
												@if($data->sale_out == 1)
												checked
												@endif>
												<label for="yes">Да</label>
												
                        <div class="form-group">
                            <img src="{{$data->getImage()}}" alt="" class="img-responsive" width="200">
                            <label for="exampleInputFile">Лицевая картинка</label>
                            <input type="file" id="exampleInputFile" name="image">
                        </div>
                        <div class="form-group">
                            @if($data->images != null)
                                <div style="display: flex; overflow: auto">
                                    @foreach (json_decode($data['images']) as $item)
                                        <img src="{{ asset('uploads/products/'). '/'. $item->image }}" class="img-responsive" width="100">
                                    @endforeach
                                </div>
                            @endif
                            <label for="exampleInputFile">Выбор нескольких картинок (зажимая Ctrl) (300x300)</label>
                            <input type="file" id="exampleInputFile" name="images[]" multiple>
                        </div>
                        <div class="form-group">
                            <label>Категория</label>
                            {{Form::select('category_id',
                                $categories,
                                $data->category_id,
                                ['class' => 'form-control select2'])
                            }}
                        </div>
                        <div class="form-group">
                            <label>Свойства</label>
                            {{Form::select('attribute_ids[]',
                             $attributes,
                             $selectedAttributes,
                             ['class' => 'form-control select2', 'multiple'])}}
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Примечание</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="note" value="{{$data->note}}">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Код продукта (Не обязательно)</label>
                            <input type="number" class="form-control" name="code" value="{{$data->code}}">
                        </div>
                        <div class="form-group">
                            <label>Ширина (Не обязательно)</label>
                            <input type="number" class="form-control" name="width" value="{{$data->width}}">
                        </div>
                        <div class="form-group">
                            <label>Высота (Не обязательно)</label>
                            <input type="number" class="form-control" name="height" value="{{$data->height}}">
                        </div>
                        <div class="form-group">
                            <label>Длина (Не обязательно)</label>
                            <input type="number" class="form-control" name="length" value="{{$data->length}}">
                        </div>
                        <div class="form-group">
                            @if($data->two_images != null)
                                <div style="display: flex; overflow: auto">
                                    @foreach (json_decode($data['two_images']) as $item)
                                        <img src="{{ asset('uploads/products/'). '/'. $item->image }}" class="img-responsive" width="100">
                                    @endforeach
                                </div>
                            @endif
                            <label for="exampleInputFile">Выбор 2 картинок (зажимая Ctrl)</label>
                            <input type="file" id="exampleInputFile" name="two_images[]" multiple>
                        </div>
                        <div class="form-group">
                            <label>Продукты относящиеся к коллекции</label>
                            {{Form::select('collection_product_ids[]',
                                $products,
                                $selectedProducts,
                                ['class' => 'form-control select2', 'multiple'])
                            }}
                        </div>

                        <div class="form-group">
                            <label>Если тип матраса то выбрать длину к которой она относиться</label>
                            {{Form::select('length_type_id',
                                array(null => 'Не обязательно') + $products_length_types,
                                $data->length_type_id,
                                ['class' => 'form-control select2'])
                            }}
												</div>
												
												<div class="form-group">
													<label>Нестандартные размеры матрасов относящиеся к этому матрасу</label>
													{{Form::select('mattress_product_ids[]',
															$products,
															$selectedMattressProducts,
															['class' => 'form-control select2', 'multiple'])
													}}
												</div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Полный текст </label>
                            <textarea name="description" id="my-editor" cols="30" rows="10" class="form-control">{{$data->description}}</textarea>
                        </div>
                    </div>

                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <button class="btn btn-warning pull-right">Изменить</button>
                </div>
                <!-- /.box-footer-->
            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection