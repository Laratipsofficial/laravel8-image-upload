<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageUploadController extends Controller
{
    public function store(Request $request)
    {
        $imageFullName = $request->file('image')->getClientOriginalName();

        $request->file('image')->storeAs('images', $imageFullName);

        $image = new Image();
        $image->image = $imageFullName;
        $image->save();

        return response()->json([
            'message' => 'Image Successfully Uploaded.',
            'images' => Image::get(),
        ]);
    }
}
