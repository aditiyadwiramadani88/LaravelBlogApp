<?php

namespace App\Http\Controllers;

use App\Models\CommentModel;
use App\Models\PostModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Comment extends Controller{

    public function CreateComment(Request $request) { 
        $request->validate([ 
            'comment'   => ['required']
        ]);

        $get_form = $request->only('post_slug', 'comment');
        $get_form['name'] = Auth::user()->name;
        $get_form['email'] = Auth::user()->email;

        if(!PostModel::where('slug',$get_form['post_slug'])->first()) { 
            $request->session()->flash('error', 'errors data not fout');
            return redirect()->back();
        }
        CommentModel::create($get_form)->save(); 
        $request->session()->flash('success', 'Sucess Your comment ');
        return redirect()->back();
        

    }
}
