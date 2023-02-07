<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\LikePost;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [ 
            'file' => 'mimes:jpg,jpeg,png|max:2048', 
        ], [  
            'file.mimes' => 'File harus / jpg / jpeg / png ',
            'file.max' => 'File maksimal berukuran 2MB', 
        ]);
        if ($validator->fails()) {
            $msg = "";
            foreach ($validator->messages()->all() as $message) {
                $msg .= $message . ". ";
            }
            return back()->with('statusT', $msg)->withInput($request->input());
        } else {
            $post = new Post();
            $post->caption = $request->caption;
            $post->tanggal= date('Y-m-d'); 
            $post->user_id = Auth::user()->id;
            $post->save();
                $tujuan_upload = 'post/' . $post->id ;
            
                $file_upload = $request->file('file');
                $f_post = 'post' . date('Y-m-d ') . rand(100,999) . ' - ' . $file_upload->getClientOriginalName(); 
                $file_upload->move($tujuan_upload, $f_post);
                $post->file_ig=$tujuan_upload . '/' . $f_post;
                $post->save();   
            session()->put('status', 'Post ditambahkan! ' ); 
            return redirect()->back();
        }
    }

    public function comment_page(Request $request)
    {
        $id = $request->id;
        $post = Post::find($id);
        $comment = Comment::where('post_id',$id)->get();
        return view('post.comment',compact('post','comment','id'));
    }

    public function comment_store(Request $request)
    {
        $comment = new Comment();
        $comment->comment = $request->comment;
        $comment->user_id = $request->user_id;
        $comment->post_id = $request->post_id;
        $comment->tanggal = date('Y-m-d h:i:s' );
        $comment->save();
        session()->put('status', 'Comment ditambahkan! ' ); 
        return redirect()->back();
    }

    public function like_post(Request $request)
    {
        $id = $request->id;
        $user_id = Auth::user()->id;
        $like = 0;
        $count = LikePost::where('post_id',$id)->where('user_id',$user_id)->count();
        if($count==0){
            $like = new LikePost();
            $like->user_id=  $user_id;
            $like->post_id = $id;
            $like->save();
            echo 'success like';
        }else{
            $like = LikePost::where('post_id',$id)->where('user_id',$user_id)->first();
            $like->delete();
            echo 'success Unlike';
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}