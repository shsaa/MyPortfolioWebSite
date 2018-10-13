<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function showimage(request $request)
    {
        $this->validate($request, [
            'image' => 'image|required',
        ]);

        $ImageContent = $request->file('image');
        $temp = file_get_contents($ImageContent);
        $imagetype = $ImageContent->extension();
        $image = base64_encode($temp);

        $data = [
            'image' => $image,
            'imagetype' => $imagetype,
        ];
        return view('FunctionalityPages.TasksFunctionality')->with($data);
    }


    public function AjaxRequest(request $request)
    {
        $dataPassed = $request->name;

        if ($dataPassed == '') {
            $dataPassed = '<div class="alert alert-danger" role="alert">' . 'no data has been entered in box' . ' </div>';
        }
        echo 'This is Ajax Result from PHP file with the input value: ' . $dataPassed;
    }
}
