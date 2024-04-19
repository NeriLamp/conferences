@extends('layouts.app')
@section('title','Aricle Cretion Form')
@section('content')
    <form action="{{route('articles.update',['article'=>$articles->id])}}" method="POST">
        @csrf
        @method('PUT')
        @include('articles.partials.form')
        <div><input type="submit" value="Update"></div>
    </form>
@endsection
