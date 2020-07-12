<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use DB;
use Illuminate\Support\Facades\Storage;
//use DB for custom database query
//user DB;

class NewsController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth',['except'=>['index','show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // echo "Hello world";
        $news = DB::select('select * from news where status = "active" ORDER BY id desc');
        return view('admin.shownews')->with('news',$news);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*Validation in laravel*/
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'news_image' => 'image|nullable|max:1999',
            'date'=>'required',
            'source'=>'required'
        ]);

        //Handling the image file
        if($request->hasFile('news_image')){
            //Get filename with the extension
            $filenameWithExt = $request->file('news_image')->getClientOriginalName();

            //Get just filename and the information about the path
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            //Get just extension of the image
            $extension = $request->file('news_image')->getClientOriginalExtension();

            //Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;

            //Upload image
            $path = $request->file('news_image')->storeAs('public/news_images', $fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.jpg';
        }

        //creating object for news
        $news = new News;
        //taking the input value and passint to the news title part.
        //as in tinker
        $news->title = $request->input('title');
        $news->body = $request->input('body');
        $news->news_image = $fileNameToStore;
        $news->date = $request->input('date');
        $news->source = $request->input('source');
        $news->category = $request->input('category');

        //Saves the user id of the logged in user to the database
        $news->user_id = auth()->user()->id;

        $news->save();
        //redirecting with success in inc messages file and message
        return redirect ('/dashboard')->with('success', 'News Published');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $news = News::find($id);
        $suggestion = DB::select('select * from news ORDER BY id desc limit 4');
        return view('news.show',['news'=>$news, 'suggestion'=>$suggestion]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = News::find($id);
        //Checking for correct user
        if(auth()->user()->id !==$news->user_id){
            return redirect('/news')->with('error','Unauthorized page');    
        }
        return view('news.edit')->with('news',$news);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        /*Validation in laravel*/
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'news_image' => 'image|nullable|max:1999',
            'date'=>'required',
            'source'=>'required'
        ]);        

        //Handling the image file
        if($request->hasFile('news_image')){
            //Get filename with the extension
            $filenameWithExt = $request->file('news_image')->getClientOriginalName();

            //Get just filename and the information about the path
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);


            //Get just extension of the image
            $extension = $request->file('news_image')->getClientOriginalExtension();

            //Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;

            //Upload image
            $path = $request->file('news_image')->storeAs('/public/news_images', $fileNameToStore);
        }

        //creating object for news
        $news = News::find($id);
        //taking the input value and passint to the news title part.
        //as in tinker$news->title = $request->input('title');
        $news->body = $request->input('body');
        $news->date = $request->input('date');
        $news->source = $request->input('source');
        $news->category = $request->input('category');

        if($request->hasFile('news_image')){
            $news->news_image = $fileNameToStore;
        }

        $news->save();
        //redirecting with success in inc messages file and message
        return redirect ('/dashboard')->with('success', 'news Updated');
    }

    public function destroy($id)
    {
        $news = News::find($id);
        $news->status = 'disactive';
        $news->save();
        // $news->delete();
        return redirect ('/news')->with('error', 'News Removed');
    }

    public function removedNews(){
        $news = DB::select('select * from news where status = "disactive"');
        return view('admin.removednews',['news'=>$news]);
    }

    public function restoreNews($id)
    {

        echo "Hello world";
        // $news = News::find($id);
        // $news->status = 'active';
        // $news->save();
        // // $news->delete();
        // return redirect ('/news')->with('error', 'News Restored');
    }

}