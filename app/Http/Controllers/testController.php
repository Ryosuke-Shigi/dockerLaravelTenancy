<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ZipArchive;
use Storage;
//S3 StreamWrapper
//use Aws\S3\S3Client;

class testController extends Controller
{
    //
    public function view01(REQUEST $request){
        return view('test.view01');
    }

    //
    public function zipUp(REQUEST $request){

/*         //dump($request->websight);
        $zip = new ZipArchive;
        //$awsWrapper = S3Client;
        if($zip->open($request->file('websight'))==true){
            $zip->extractTo(storage_path('app/temp'));
            $name=pathinfo($request->file('websight')->getClientOriginalName(),PATHINFO_FILENAME);
            dump($name);
            $webAws=Storage::disk('s3')->put($name,'app/temp');
            Storage::deleteDirectory('app/temp');
            dump($webAws);
        } */
        return redirect()->route('test.view01');
    }
}
