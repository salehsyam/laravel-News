<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['articles']= Article::with('user:id,name','category:id,name','tags:tags.id,name')
            ->paginate(20);

        return view('dashboard.articles.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['categories'] =Category::get(['id','name']);
        $data['tags'] = Tag::get(['id','name']);
        return view('dashboard.articles.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *       

     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $request->merge(['status' => $request->status ?'published' :'draft']);
        

        $articles=Article::create([
            'title' =>$request->title,
            'description' =>$request->description,
            'content' =>$request->post('content'),
            'image_path' =>$request->image->store('articles','public'),
            'category_id' =>$request->category_id,
            'features' =>$request->features,
            'status' =>$request->status,
            'user_id' =>Auth::id(),
        ]);

        if ($request->tags) {
            $articles->tags()->attach($request->tags);
        }
        session()->flash('success', 'Articles created successfully');
        return redirect(route('admin.articles.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        $data['article'] = $article;
        $data['categories'] =Category::get(['id','name']);
        $data['tags'] = Tag::get(['id','name']);
        return view('dashboard.articles.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $request->merge(['status' => $request->status ?'published' :'draft']);

        $data = $request->except(['image']);
        if ($request->hasFile('image')) {
            $image = $request->image->store('articles', 'public');
            Storage::disk('public')->delete($article->image_path);
            $data['image_path'] = $image;
        }
        if ($request->tags) {

            $article->tags()->sync($request->tags);
        }

        $article->update($data);
        return redirect()->route('admin.articles.index')
            ->with('success', 'Article updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article= Article::withTrashed()->where('id', $id)->first();
        if ($article->trashed()) {
            Storage::disk('public')->delete($article->image);
            $article->forceDelete();
            session()->flash('success', 'post trashed successfully');
            return redirect()->route('dashboard.posts.index');
        } else {
            $article->delete();

        }
        session()->flash('success', 'Article trashed successfully');
        return redirect()->route('admin.articles.index');
    }


    public function trashed() {

        $trashed = Article::onlyTrashed()->get();
        return view('admin.articles.trashed')->withPosts($trashed);
    }

    public function restore($id) {
        Article::withTrashed()->where('id', $id)->restore();
        session()->flash('success', 'post restored successfully');
        return redirect(route('admin.articles.index'));
    }

}
