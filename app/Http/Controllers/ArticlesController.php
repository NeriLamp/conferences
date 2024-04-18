<?php

namespace App\Http\Controllers;

use App\Models\Article;
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

    public function index(): View
    {
        return view('articles.index', ['articles'=> $this->articles]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return \view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    /*public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'title'=>'required|min:5|max:20',
            'content'=>'required|min:10'
        ]);
        //$validated = $request->validate();
        $article = new Article();
        $article->title = $request->input('title');
        $article->content = $request->input('content');
        $article->save();

        return redirect()->route('articles.show',['article' => $article->id]);
    }*/
    public function store(StoreArticleRequest $request,Article $article): RedirectResponse
    {
$validated =$request-> validated();
        $article->title = $validated['title'];
        $article->content =  $validated['content'];
        $article->save();
        $request->session()->flash('status','Articlecreated');
 return  redirect()->route('articles.show',['article'=> $article->id]);
    }

    /**
     * Display the specified resource.
     */
    /*public function show(string $id)
    {
        //
    }*/
    public function show(int $id): View
    {
        abort_if(!isset($this->articles[$id]), 404);

        return \view('articles.show',['article' => $this->articles[$id]]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function any()
    {
        return $this->count() > 0;
    }
}
