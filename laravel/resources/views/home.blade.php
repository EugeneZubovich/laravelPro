@extends('layouts.base')

@section('script')
    @parent
    <script src="{{asset('js/modal.js')}}"></script>
    @endsection

@section('styles')
    @parent
    <link href="{{asset('css/product_item.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/modal.css')}}">
    @endsection

@section('content')
    <div class="container">
        <div class="new_product_header"> Добавить новый товар</div>
        <div class="row">
            <div class="col-md-12">
                <form action="{{asset('home')}}" method="post" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <label for="exampleInputPassword1">Название</label>
                        <input type="text" name="name" class="form-control" id="exampleInputPassword1"
                               placeholder="Название">
                        @if ($errors->has('name'))
                            <span class="alert-danger">
                            <b>{{$errors->first('name')}}</b>
                        </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <?//TODO отобразить категории из таблицы каталога?>
                        <label for="exampleSelect1">Каталог</label>
                        <select class="form-control" name="catalog_id" id="exampleSelect1">
                            @foreach($catalog as $cat)
                                <option value="{{$cat->id}}">{{$cat->name}}</option>
                            @endforeach
                        </select>

                    </div>
                    <div class="form-group">
                        <label for="exampleTextarea">Описание</label>
                        <textarea class="form-control" name="description" id="exampleTextarea" rows="3"></textarea>
                        @if ($errors->has('description'))
                            <span class="alert-danger">
                            <b>{{$errors->first('description')}}</b>
                        </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Цена</label>
                        <input type="text" class="form-control" name="price" id="exampleInputPassword1"
                               placeholder="Цена">
                        @if ($errors->has('price'))
                            <span class="alert-danger">
                            <b>{{$errors->first('price')}}</b>
                        </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Изображение</label>
                        <input type="file" class="form-control-file" name="image1" id="exampleInputFile"
                               aria-describedby="fileHelp">
                        @if ($errors->has('image1'))
                            <span class="alert-danger">
                            <b>{{$errors->first('image1')}}</b>
                        </span>
                        @endif
                        <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text
                            for the above input. It's a bit lighter and easily wraps to a new line.
                        </small>
                    </div>
                    <fieldset class="form-group">
                        <legend>Статус</legend>
                        @foreach($productStatus as $st)
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="status_id" id="optionsRadios1"
                                           value="{{$st->id}}" checked>
                                    {{$st->name}}
                                </label>
                            </div>
                        @endforeach
                    </fieldset>
                    <button type="submit" class="btn btn-primary">Добавить</button>
                </form>

                <br><br>

                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Events</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($products as $pr)

                        <tr>
                            <td width="200px" style="vertical-align: middle">
                                <a href="" class="show_image" data-id = "{{$pr->id}}">
                                    <div class="product_item">
                                        @if ($pr->image)
                                            <img src="{{asset('uploads/small_'.$pr->image)}}" alt="{{$pr->name}}"
                                                 title="{{$pr->name}}">
                                        @else
                                            <img src="{{asset('assets/images/logo/logo-dark.png')}}" alt="{{$pr->name}}"
                                                 title="{{$pr->name}}">
                                        @endif
                                    </div>
                                </a>
                            </td>
                            <td style="vertical-align: middle">{{$pr->name}}</td>
                            <td style="vertical-align: middle">{{$pr->price}}</td>
                            <td style="vertical-align: middle">{{$pr->description}}</td>
                            <td style="vertical-align: middle">{{$pr->getProductStatus->name}}</td>
                            <td style="vertical-align: middle">
                                <form id="" action="{{ url('home' , $pr->id ) }}" method="POST">
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger">Delete item</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                <p align="center">
                    {!! $products->links() !!}
                </p>


            </div>
        </div>
    </div>
@endsection
@extends('layouts.modal')