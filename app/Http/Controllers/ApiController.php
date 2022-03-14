<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\CommentMantu;
use Carbon\Carbon;
use DB,Session,Str,Validator,Auth,Hash;

class ApiController extends Controller
{
    public function comment(Request $request)
    {
        $data = Comment::insert([
            'client_id' => 1,
            'present' => $request->present,
            'name' => $request->name,
            'message' => $request->message,
            'created_at' => Carbon::now()
        ]);
        if ($data) {
            return response()->json([
                'code' => 200,
                'bata' => $data
            ]);
        }
    }
    
    public function comment_mantu(Request $request)
    {
        $data = CommentMantu::insert([
            'client_id' => 1,
            'present' => $request->present,
            'name' => $request->name,
            'message' => $request->message,
            'created_at' => Carbon::now()
        ]);
        if ($data) {
            return response()->json([
                'code' => 200,
                'bata' => $data
            ]);
        }
    }
}
