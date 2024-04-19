@extends('layouts.app')

@section('content')
    @auth
       <a href="{{route('articles.create')}}"><button type="button" class="creat_button">Create</button></a>
    @endauth
    @foreach($articles as $article)
        <h1>{{$article['title']}}</h1>
        <a href="{{ route('articles.show',['article'=> $article['id']])}}"><button type="button" class="view_button" id="button">View</button></a>
        <br>
        @auth
            <a href="{{route('articles.edit',['article'=> $article['id']])}}"><button type="button" class="edit_button">Edit</button></a>
           <form action="{{route('articles.destroy', ['article' => $article['id']]) }}" method="POST" class="delete-form">
                @csrf
                @method('DELETE')
                <button type="submit" class="delete_button" id="button">Delete</button>
            </form>
        @endauth
    @endforeach
@endsection
<script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
<link rel="stylesheet" href="{{ mix('css/app.css') }}">
<style>
    #button{

        display: inline-block;
        outline: 0;
        border:0;
        cursor: pointer;
        text-decoration: none;
        position: relative;
        color: #3b4351;
        background: #fff;
        line-height: 30px;
        border-radius: 20px;
        font-size: 20px;
        font-weight: 600;
        box-shadow: rgb(255, 198, 0) -2px -2px 0px 2px, rgb(107, 48, 201) 0px 0px 0px 4px, rgba(0, 0, 0, 0.05) 0px 0px 2px 7px;
        transition: all 0.2s;


    }
    #button:hover{
        box-shadow: rgb(107, 48, 201) -2px -2px 0px 2px, rgb(255, 198, 0) 0px 0px 0px 4px, rgba(0, 0, 0, 0.05) 0px 0px 2px 7px;
        transform: scale(1.01);
    }
</style>
