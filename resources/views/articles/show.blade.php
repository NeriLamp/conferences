@extends('layouts.app')

@section('content')
    <h1>{{$articles['title']}}</h1>
    <p>{{$articles['content']}}</p>
    <p>{{$articles['dateTime']}}</p>
    <p>{{$articles['address']}}</p>
@endsection
