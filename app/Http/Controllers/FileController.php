<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function putFile()
    {
        // $validatedData = $request->validate([
        //                     'photo' => 'required',
        //                     ]);
        
        $file = $request->file('photo');

        ($file->getClientSize() > $thresholdSize) ? $this->splitFile() : true;

        
    }

    public function splitFile()
    {
        
    }
}
