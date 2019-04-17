@extends('layouts.base')

@section('content')
<div class="container">
    <div class="col-md-12">

        <p>
            <span>Название каталога: {{$obj->name}} </span> <span>Описание каталога: {{$obj->description}}</span>

        </p>

    </div>
</div>
@endsection