<?php

namespace App\Http\Controllers;

use App\Model\Like;
use Illuminate\Http\Request;
use App\Model\Reply;

class LikeController extends Controller
{ 
    public function __construct()
    {
        $this->middleware('JWT');
    }

    public function likeIt(Reply $reply)
    {
       return  $reply->like()->create(
            [
               'user_id' => auth()->id()
                      
                ]
        );
    }
    public function unLikeIt(Reply $reply)
    {
     $reply->like()->where(
             'user_id' , auth()->id() )->first()->delete();
            return response('delete' , 200);
    }
}