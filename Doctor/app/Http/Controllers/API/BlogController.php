<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BlogController extends Controller
{
    
    
    public function viewallblog()
    {
        $blog = Blog::all();
        return response()->json([
            'status'=>200,
            'blog'=>$blog,

        ]);


    }
    
    
    public function viewblog()
    {
        $blog = Blog::all();
        return response()->json([
            'status'=>200,
            'blog'=>$blog,

        ]);


    }


    public function editblog($id)
    {
        $blog = Blog::find($id);

        if($blog)
        {
            return response()->json([
                'status'=>200,
                'blog'=>$blog,
            ]);

        }

        else
        {
            return response()->json([
                'status'=>404,
                'message'=>'Blog Id Not Found ',
            ]);

        }

    }

    public function updateblog(Request $request,$id)
    {
        $validator= Validator::make($request->all(), [

            'title'=>'required|max:191',
            'date'=>'required',
            'description'=>'required|max:1000',

            
        ]);
        
        if($validator->fails())
         {
            return response()->json([
                'status'=>422,
                'errors'=>$validator->messages(),
            ]);

         }
         else
         {

                $blog = Blog::find($id);
                if($blog)
                {

                $blog->title=$request->input('title');
                $blog->date=$request->input('date');
                $blog->description=$request->input('description');
                $blog->save();

                return response()->json([
                    'status'=>200,
                    'message'=>'Blog Update Successfully',
                ]);
            }

            else
            {
                return response()->json([
                    'status'=>404,
                    'message'=>'Blog Id Not Found ',
                ]);

            }

        }
        
        


    }

    public function deleteblog($id)
    {
        $blog = Blog::find($id);
        if($blog)
        {
            $blog->delete();
            return response()->json([
                'status'=>200,
                'message'=>'Blog Deleted Successfully',
            ]);
        }
        else
        {
            return response()->json([
                'status'=>404,
                'message'=>'Blog Id Not Found ',
            ]);

        }

    }



    public function createblog(Request $request)
    {
        $validator= Validator::make($request->all(), [

            'title'=>'required|max:191',
            'date'=>'required',
            'description'=>'required|max:1000',

            
        ]);
        
        if($validator->fails())
         {
            return response()->json([
                'status'=>400,
                'errors'=>$validator->messages(),
            ]);

         }
         else
         {

                $blog = new Blog;

                $blog->title=$request->input('title');
                $blog->date=$request->input('date');
                $blog->description=$request->input('description');
                $blog->save();

                return response()->json([
                    'status'=>200,
                    'message'=>'Blog Create Successfully',
                ]);

        }


    }
}
