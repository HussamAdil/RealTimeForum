<?php

namespace App\Http\Controllers;

use App\Model\Like;
use Illuminate\Http\Request;
use App\Model\Reply;

class LikeController extends Controller
{ 

    public function likeIt(Reply $reply)
    {
       return  $reply->like()->create(
            [
            //    'user_id' => auth()->user()->id
                     'user_id' => '1'
                ]
        );
    }
    public function unLikeIt(Reply $reply)
    {
     $reply->like()->where(
            // 'user_id' => auth()->user()->id 
            'user_id' , 1)->first()->delete();
            return response('delete' , 200);
    }
}