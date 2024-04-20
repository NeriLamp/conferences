@extends('layouts.app')

@section('title','Aricle Cretion Form')

@section('content')
    <div class="article-text">Article creation form</div>
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
<script type="text/javascript" src="{{ mix('js/app.js') }}"></script>


