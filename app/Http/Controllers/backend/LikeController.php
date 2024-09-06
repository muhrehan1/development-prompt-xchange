<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Likes;
use Illuminate\Support\Facades\DB;

class LikeController extends Controller
{
    public function add_remove_like(Request $request){

        $user_ID  = $request->input('user_id');
        $post_ID  = $request->input('post_id');
        $item_type = $request->input('item_type');

        $data_like_check  = Likes::where('user_id',$user_ID)
            ->where('post_id',$post_ID)
            ->where('item_type',$item_type)
            ->first();

        if (!$data_like_check){

            $create_like = new Likes();
            $create_like->user_id = $user_ID;
            $create_like->post_id = $post_ID;
            $create_like->item_type = $item_type;
            $create_like->liked = 'heart';
            $create_like->save();

            return response()->json(data:['liked' => 'heart'], status: 200);

        } else if ($data_like_check){
            if ($data_like_check->liked === 'heart'){

                $update_like = $data_like_check->update(['liked' => 'disheart']);
                return response()->json(data: ['liked' => "disheart"], status: 201);

            }else if($data_like_check->liked === 'disheart'){

                $update_like = $data_like_check->update(['liked' => 'heart']);
                return response()->json(data: ['liked' => "heart"], status: 201);
            }


        }

    }
}
