<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\CommentMantu;
use Carbon\Carbon;
use DB,Session,Str,Validator,Auth,Hash;

class ClientController extends Controller
{
    public function index()
    {
        return view('client.home') ;
    }

    public function lena()
    {
        $path1 = public_path('img/client/gallery/pot/lena/');
        $pot = \File::files($path1);
        
        $path2 = public_path('img/client/gallery/land/lena/');
        $land = \File::files($path2);
        
        $comment = Comment::where('client_id', 2)->get();
        return view('client.lena',compact('pot','land','comment'));
    }
    
    public function lala()
    {
        $path1 = public_path('img/client/gallery/pot/lala/');
        $pot = \File::files($path1);
        
        $path2 = public_path('img/client/gallery/land/lala/');
        $land = \File::files($path2);

        $comment = Comment::where('client_id', 1)->get();
        return view('client.lala',compact('pot','land','comment'));
    }
    
    public function lala_mantu()
    {
        $path1 = public_path('img/client/gallery/pot/lala/');
        $pot = \File::files($path1);
        
        $path2 = public_path('img/client/gallery/land/lala/');
        $land = \File::files($path2);
        
        return view('client.lala_mantu',compact('pot','land'))->with('comment', CommentMantu::all());
    }
    
    public function client_view()
    {
        $path1 = public_path('img/client/gallery/pot/lala/');
        $pot = \File::files($path1);
        
        $path2 = public_path('img/client/gallery/land/lala/');
        $land = \File::files($path2);
        
        return view('client.client_view',compact('pot','land'))->with('comment', Comment::all());
    }

    public function comment(Request $request)
    {
        $valid = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => ['required','confirmed'],
        ]);
        if ($valid->fails()) {
            
        }
    }
}
