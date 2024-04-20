@extends('layouts.app')
@section('title','Aricle Cretion Form')
@section('content')
    <form action="{{route('articles.update',['article'=>$articles->id])}}" method="POST">
        @csrf
        @method('PUT')
        @include('articles.partials.form')
        <div><input class="btn btn-primary" type="submit" value="Update"></div>
    </form>
@endsection
<script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
<link rel="stylesheet" href="{{ mix('css/app.css') }}">
