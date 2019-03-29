@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form action="{{asset('home')}}" method="post">
                {!! csrf_field() !!}
                <div class="form-group">
                    <label for="exampleInputPassword1">Название</label>
                    <input type="text" name="name" class="form-control" id="exampleInputPassword1" placeholder="Название">
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
                    <input type="text" class="form-control" name="price" id="exampleInputPassword1" placeholder="Цена">
                    @if ($errors->has('price'))
                        <span class="alert-danger">
                            <b>{{$errors->first('price')}}</b>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Изображение</label>
                    <input type="file" class="form-control-file" name="image" id="exampleInputFile" aria-describedby="fileHelp">
                    <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                </div>
                <fieldset class="form-group">
                    <legend>Статус</legend>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="status" id="optionsRadios1" value="1" checked>
                            Много: есть в наличии
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="status" id="optionsRadios2" value="2">
                            Мало: есть в наличии
                        </label>
                    </div>
                    <div class="form-check disabled">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="status" id="optionsRadios3" value="3">
                            Нет в наличии
                        </label>
                    </div>
                </fieldset>
                <button type="submit" class="btn btn-primary">Добавить</button>
            </form>

        </div>
    </div>
</div>
@endsection
