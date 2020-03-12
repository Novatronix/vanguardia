@extends('layouts.app')
@section('content')
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">{{ $clases->id_clase}}</h1>
            <p class="lead">{{$clases->nombre_clase}}</p>
           
        </div>
    </div>

@ednsection