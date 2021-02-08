<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ImageProfileController extends Controller
{
public function UploadProfile(Request $request, $id){
    if ($request->hasFile('file')){
        $file = $request->file('file');
        $filename = $file->getClientOriginalName();

        $filename = pathinfo($filename, PATHINFO_FILENAME);
        $name_File = str_replace(" ", "_", $filename);

        $extension = $file->getClientOriginalExtension();
        $picture = $id . '-' . $name_File . '.' . $extension;
        $file->move(public_path('ProfileImage/'),$picture);

        return response()->json(["mensaje" => "Foto de perfil actualizada correctamente"]);
    }
    else{
        return response()->json(["mensaje" => "Error subiendo la imagen"]);
    }
}
}
