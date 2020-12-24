<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use phpDocumentor\Reflection\Types\Resource_;

class ImageUploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
//    public function imageUpload()
//    {
//        return view('/');
//    }
//
//    /**
//     * Display a listing of the resource.
//     *
//     * @return \Illuminate\Http\Response
//     */
//    public function imageUploadPost(Request $request)
//    {
////        $request->validate([
////            'photos' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
////        ]);
//
//        $imageName = time().'.'.$request->image;
//
//        $request->photos->move(public_path('images'), $imageName);
//
//        return back()
//            ->with('success','You have successfully upload image.')
//            ->with('image',$imageName);
//
//    }
    public function upload(Request $request)
    {
        $path = $request->file('image')->store('uploads','public');
        return view('/',['path'=>$path]);

    }
}
