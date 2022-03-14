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

    public function lala()
    {
        $path1 = public_path('img/client/gallery/pot/');
        $pot = \File::files($path1);
        
        $path2 = public_path('img/client/gallery/land/');
        $land = \File::files($path2);
        
        return view('client.client_view',compact('pot','land'))->with('comment', Comment::all());
    }
    
    public function lala_mantu()
    {
        $path1 = public_path('img/client/gallery/pot/');
        $pot = \File::files($path1);
        
        $path2 = public_path('img/client/gallery/land/');
        $land = \File::files($path2);
        
        return view('client.lala_mantu',compact('pot','land'))->with('comment', CommentMantu::all());
    }
    
    public function client_view()
    {
        $path1 = public_path('img/client/gallery/pot/');
        $pot = \File::files($path1);
        
        $path2 = public_path('img/client/gallery/land/');
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
