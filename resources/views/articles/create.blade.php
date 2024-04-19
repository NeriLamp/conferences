@extends('layouts.app')

@section('title','Aricle Cretion Form')

@section('content')
    <h4>Article creation form</h4>
    <div class="form-group">
    <form action="{{route('articles.store')}}" method="POST">
        @csrf
        @include('articles.partials.form')
        @if($errors->any())
            <div>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div ><input class="btn btn-primary" type="submit" value="Create"></div>
    </form>
    </div>
@endsection
<link rel="stylesheet" href="{{ mix('css/app.css') }}">

