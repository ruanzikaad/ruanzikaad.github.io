<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CopyController extends Controller
{
    public function copy($path){

        $parts = explode(separator: '/'. $path);
        $parts[0] = $parts[0] . '-2';

        $adjustedPath = implode(separator: "/", $parts);
        $localPath = public_path($adjustedPath);

        if(File::exists(localPath)){

            dd(...vars: "estou aqui!");


        }else{
            $response =  Http::get(url:"https://m.pg-nmga.com/{$path}");
            dd($adjustedPath);

        }



    }
}
