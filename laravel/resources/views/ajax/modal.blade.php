<?php
/**
 * Created by PhpStorm.
 * User: teacher
 * Date: 05.04.2019
 * Time: 14:31
 */
//TODO прописать условия и логику

?>

<div style="width: 100%; height: auto; text-align: center">
    <p>
        <a href="{{asset('/catalog/'.$obj->catalog->id)}}">{{$obj->catalog->name}}</a>
    </p>
    @if($obj->image == '')
        <img style="width: 480px" src="{{asset('assets/images/logo/logo-dark.png')}}" alt="">
    @else
        <img style="width: 480px" src="{{asset('/uploads/'.$obj->image)}}" alt="">
    @endif

</div>

