<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;

class ImageController extends Controller
{
    public function uploadImage(Request $request)
    {
        $path = $request->path;

        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }

        $file = $request->file('file');

        $name = time().uniqid().'.'.trim($file->getClientOriginalExtension());

        $file->move($path, $name);

        return response()->json([
            'name'          => $name,
            'original_name' => $file->getClientOriginalName(),
        ]);
    }

    public function deleteImage(Request $request)
    {
        $filename = $request->get('filename');
        $filepath = $request->get('filepath');
        $deleteFromDB = $request->get('deleteFromDB');

        if (!empty($deleteFromDB)) {
            Image::where('name', $filename)->delete();
        }

        $path=$filepath.$filename;
        if (file_exists($path)) {
            File::delete($path);
        }
        return $filename;
    }
}
