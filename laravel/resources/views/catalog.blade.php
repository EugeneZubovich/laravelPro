@extends('layouts.base')

@section('content')
    <div class="container">
        <div class="col-md-12">
            @foreach($cats as $cat)
                <p>
                    <span>Название каталога: {{$cat->name}} </span> <span>Описание каталога: {{$cat->description}}</span>

                </p>
                @endforeach
        </div>
    </div>
@endsection