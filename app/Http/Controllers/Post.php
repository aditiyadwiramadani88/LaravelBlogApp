<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\PostModel;
use App\Models\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File; 

class Post extends Controller { 

    public function AllPost() { 
        return view('post.all_post', ['row' => PostModel::all()]); 
    }


    public function GetPost($slug) { 

        $row = PostModel::where('slug', $slug)->first();
        if(!$row) { 
            return response('page not fout', 404);
        }
        $this->VIewsData($slug);
        return view('post.get_post', ['row' => $row]);
    }

    public function CreatePost(Request $request) { 

        // check request method 
        if($request->isMethod("POST")) { 

            // validations
            $request->validate([
                'title' => ['required', 'min:4', 'max:50'],
                'content' => ['required', 'min:4'],
            ]);

            // get form data 
            $form_data = $request->only('title', 'content', 'time'); 
            $form_data['slug'] = Str::of($request->title.date(now()))->slug(); 
            $form_data['author'] = Auth::user()->name;
            $form_data['time'] = date("j,n,Y");

            // insert data 
            $user = PostModel::create($form_data);
            $user->save();
            
            // flash message and redirect 
            $request->session()->flash('success', 'sucess create post'); 
            return redirect('/admin/all_post');
        } 

        return view('post.create_post');

    }


    public function UpdatePost(Request $request, $slug) { 

        // get form data 
        $form_data = $request->only('title', 'content', 'time'); 
        $form_data['slug'] = Str::of($request->title.date(now()))->slug(); 
        $form_data['time'] = date("j-n-Y");

        // get data where slug 
        $post_model =  PostModel::where('slug', $slug);
        $first_data = $post_model->first(); 

        // check first data 
        if(!$first_data) { 
            $request->session()->flash('error', 'data not fout');
            return redirect('/admin/all_post');
        }
        
        // check request method PUT
        if($request->isMethod("PUT")) { 

            // validations
            $request->validate([
                'title' => ['required', 'min:4', 'max:50'],
                'content' => ['required', 'min:4'],
            ]);

                // update data 
                $post_model->update($form_data);

                 // flash message and redirect 
                $request->session()->flash('success', 'success update data');
                return redirect('/admin/all_post');
        }

        return view('post.update_post', ['row' => $first_data]);
    }

    public function DeletePost(Request $request, $slug) { 
        // get data where slug
        $post_model = PostModel::where('slug', $slug); 

        // check data 
        if(!$post_model->first()) { 
            $request->session()->flash('error', 'data not fout');
            return redirect('/all_post');
        }

        $post_model->delete(); 
        $request->session()->flash('success', 'success delete data'); 
        return redirect('/admin/all_post');
    
    }


    public function Upload(Request $request) {  


        $file = $request->file('image');
        $filename=strtotime(date('Y-m-d-H:isa')).$file->getClientOriginalName().'.jpg';
        $file->move('img/blog/', $filename);

        return response()->json(["success" => 1,"file" => ["url" => '/img/blog/'.$filename]]);
        
      

    }

    public function DeleteImg($file) { 
        File::delete('img/blog/'.$file);
        return response()->json(['status' => 'sucess delete file']);

    }

    private function VIewsData($slug) { 
        $data = View::where('slug_post', $slug);
        $first_data = $data->first();
        if(!$first_data) { 
            View::create(['slug_post' => $slug, 'total_views' => 1])->save();
        }else  { 
            $data->update(['total_views' => $first_data->total_views+1]);
        }
    }
    
}