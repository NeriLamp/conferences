@extends('layouts.app')

@section('content')
    @auth
       <a href="{{route('articles.create')}}"><button type="button" class="creat_button" id="button">Create</button></a>
    @endauth
    @foreach($articles as $article)
        <div class="card">
        <h1>{{$article['title']}}</h1>
         <div class="content">{{$article['content']}}</div>
            <div class="button-container">
        <a href="{{ route('articles.show',['article'=> $article['id']])}}"><button type="button" class="view_button" id="button">View</button></a>
        <br>
        @auth
            <a href="{{route('articles.edit',['article'=> $article['id']])}}"><button type="button" class="edit_button" id="button">Edit</button></a>
           <form action="{{route('articles.destroy', ['article' => $article['id']]) }}" method="POST" class="delete-form">
                @csrf
                @method('DELETE')
                <button type="submit" class="delete_button" id="button">Delete</button>
            </form>
        @endauth
            </div>
        </div>
    @endforeach
@endsection
<script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
<link rel="stylesheet" href="{{ mix('css/app.css') }}">

