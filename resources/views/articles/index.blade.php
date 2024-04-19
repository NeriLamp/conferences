@extends('layouts.app')

@section('content')
    @auth
       <a href="{{route('articles.create')}}"><button type="button" class="creat_button">Create</button></a>
    @endauth
    @foreach($articles as $article)
        <h1>{{$article['title']}}</h1>
        <a href="{{ route('articles.show',['article'=> $article['id']])}}"><button type="button" class="view_button">View</button></a>
        <br>
        @auth
            <a href="{{route('articles.edit',['article'=> $article['id']])}}"><button type="button" class="edit_button">Edit</button></a>
            <form action="{{route('articles.destroy', ['article' => $article['id']]) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="delete_button">Delete</button>
            </form>
        @endauth
    @endforeach
@endsection
