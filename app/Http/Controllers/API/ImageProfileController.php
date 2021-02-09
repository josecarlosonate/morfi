<?php

namespace App\Http\Controllers\API;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Exception;

class ImageProfileController extends Controller
{
public function UploadProfile(Request $request, $id){
    if ($request->hasFile('file')){
        $file = $request->file('file');
        $filename = $file->getClientOriginalName();

        $filename = pathinfo($filename, PATHINFO_FILENAME);
        $name_File = str_replace(" ", "_", $filename);

        $extension = $file->getClientOriginalExtension();
        $picture = $id . '-perfil.' . $extension;
        $file->move(public_path('ProfileImage/'),$picture);
        $routeImage = public_path('ProfileImage/');
        $routeImage .= $picture;
        try{
            $User = User::find($id);
            $User->ImageProfile = $routeImage;
            $User->save();
        }catch(Exception $ex){
            $this->response->error = true;
            $this->response->message = "Error putImageProfile "+$ex->getMessage();
        }
        return response()->json(["mensaje" => $id]);
    }
    else{
        return response()->json(["mensaje" => "Error subiendo la imagen"]);
    }
}
}
