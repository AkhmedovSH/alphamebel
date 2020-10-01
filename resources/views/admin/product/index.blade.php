@extends('admin.layout')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->

        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="box">
                @include('admin.errors')
                <!-- /.box-header -->
                <div class="box-body">
                    <div style="display: flex; justify-content: space-between; margin-bottom:15px">
                        <a href="{{route('product.create')}}" class="btn btn-success">Добавить</a>
                        <form method="GET" action="/admin/search-product">
													@csrf
													<div style="display: flex;">
														<input class="form-control" type="text" name="title">
														<button type="submit" class="btn btn-success">Поиск</button>
													</div>
												</form>
                    </div>
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Название</th>
                            <th>Картинка</th>
                            <th>Действия</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->title}}</td>
                            <td>
                                <img src="{{ $item->getImage() }}" alt="" width="100">
                            </td>
                            <td><a href="{{route('product.edit', $item->id)}}" class="fa fa-pencil"></a>
                                {{Form::open(['route'=>['product.destroy', $item->id], 'method'=>'delete'])}}
                                <button onclick="return confirm('are you sure?')" type="submit" class="delete">
                                    <i class="fa fa-remove"></i>
                                </button>
                            {{Form::close()}}
                            </td>
                        </tr>
                        @endforeach
                        </tfoot>
                    </table>
                    {{$data->links()}}
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection