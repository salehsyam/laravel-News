<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Database\Query\Builder;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
            $data['category']=Category::get(['id','name']);
          
            return view('index',$data);
    }




    public function article_details($slug){

       $data['article'] = Article::with('category:id,name','tags:id,name','user:id,name')->where('slug','=',$slug)->first();
        $data['categories']=Category::withCount('articles')->get(['id','name']);
        $data['tags']= Tag::get(['id','name']);

        return view('frontend.article_details',$data);
    }
}
