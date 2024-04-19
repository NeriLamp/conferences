<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateArticleRequest;
use App\Models\Article;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Http\Requests\StoreArticleRequest;
class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected  array $articles =[
        1=>[
           'title'=>'First article',
           'content'=>'Lorem ipsum dolor'
        ],
        2=>[
            'title'=>'Second article',
            'content'=> 'Aut ducimus enim in'
        ]
    ];

    public function index(Article $article):View
    {
        return view('articles.index', ['articles'=> $article->all()]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreArticleRequest $request,Article $article): RedirectResponse
    {
        $validated =$request-> validated();
        $articles = $article->create($validated);
        $request->session()->flash('status','Article created');
 return  redirect()->route('articles.show',['article'=> $articles->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id): View
    {


        return view('articles.show', ['articles' => Article::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|Factory|Application
    {
        $article= Article::findOrFail($id);
       return view('articles.edit', ['articles'=>$article]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateArticleRequest $request,  $id): RedirectResponse
    {
        $article= Article::findOrFail($id);
        $validated = $request->validated();
        $article->update($validated);

        $request->session()->flash('status', 'Updated');
        return redirect()->route('articles.show',['article'=>$article->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id): RedirectResponse
    {
        $article =(new Article)->findOrFail($id);
        $article->delete();

        session()->flash('status', 'Deleted');
        return redirect()->route('articles.index');
    }

    public function any(): bool
    {
        return $this->count() > 0;
    }

    public function __construct()
    {
        $this->middleware('auth')->except('index','show');
    }
}
