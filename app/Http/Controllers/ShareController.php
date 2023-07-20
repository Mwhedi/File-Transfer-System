<?php

namespace App\Http\Controllers;

use App\Models\Share;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ShareController extends Controller
{

    public function index()
    {
        return View('uploadimage');
    }

    public function showfiles()
    {
        $data = Share::all();
        $i = 1;
        return View('filesuploaded', compact('data','i'));
    }

    public function download(Request $request,$file)
    {
        return response()->download(public_path('assets/'.$file));
    }

    public function store(Request $request)
    {
        $data = new Share();
        $file = $request->file;
        $filename = time().'.'.$file->getClientOriginalExtension();
        $request->file->move('assets',$filename);
        $data->file=$filename;
        $data->name=$request->filename;
        $data->description=$request->description;
        $data->save();
        return redirect()->back();

    }

    public function destroy($id)
    {
        Share::destroy($id);
        return redirect()->back();
    }
}
