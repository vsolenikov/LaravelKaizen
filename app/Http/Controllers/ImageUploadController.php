<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use phpDocumentor\Reflection\Types\Resource_;
use Illuminate\Http\Response;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Resources;
use App\Idea;
use App\User;
use App\Http\Controllers;

class ImageUploadController extends Controller
{

    public function imageUpload()
    {
        return view('imageUpload');
    }


    public function imageUploadPost(Request $request)
    {
        dd();
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$request->image->extension();

        $request->image->move(public_path('images'), $imageName);

        return back()
            ->with('success','You have successfully upload image.')
            ->with('image',$imageName);

    }


//        public function upload(Request $request)
//        {
//           $path = $request->file('image')->store('uploads','public');
//           return view('/',['path'=>$path]);
//
//        }
}
