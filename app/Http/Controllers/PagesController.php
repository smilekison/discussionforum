<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\User;
use DB;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::where('status', '=', 'active')->Paginate(2);
        return view('pages.index',['news'=>$news]);
    }

    public function about(){
        $title = 'ABOUT PAGE!!';
        return view('pages.about')->with('title',$title);

    }

    public function services(){
        $data = array(
            'title'=>'Services',
            'services' => ['First Page Banner Ad','Gold Offer with yearly subscription','Latest news online']
        );
        return view('pages.services')->with($data);
    }

    public function nepal()
    {
        $news = News::where('category', '=', 'Nepal')->Paginate(3);
        return view('pages.nepal')->with('news',$news);
    }

    public function education(){
        $news = News::where('category', '=', 'education')->Paginate(3);
        return view('pages.education')->with('news',$news);
    }

    public function sports()
    {
        $news = News::where('category', '=', 'sports')->Paginate(3);
        return view('pages.sports')->with('news',$news);
    }


    public function json()
    {
        // echo "Json page opening";
        $news = News::all();
        return $news->toJson();
    }
}
