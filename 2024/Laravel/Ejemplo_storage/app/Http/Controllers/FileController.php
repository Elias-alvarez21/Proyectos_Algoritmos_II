<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('files');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $name = $request->file('archivo')->getClientOriginalName();
        //$path = $request->file('archivo')->store('sounds');
        //$path = $request->file('archivo')->store('foto','public');

        //$path = Storage::putFile("", $request->file('archivo'));
        //$path = Storage::putFileAs("", $request->file('archivo'), 'TEST.png');
        $path = Storage::disk('public')->putFile('public', $request->file('archivo'));//'modelo' del tema storage

       $newFile = new File();//modelo, migracion 
       $newFile->filename = $name;
       $newFile->path = $path;
       $newFile->userId = 1;
       $newFile->save();
       return view('files');



    }

    /**
     * Display the specified resource.
     */
    public function show($name)
    {
        return view('projector', ['name' => $name]);
    }

   public function image($name) {
      //  $path = storage_path('app/private/'.$name);
       // return response()->file($path);

       //return Storage::get($path);

       return Storage::disk('')->get($name);
   }


    public function edit(File $file)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, File $file)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($filename)
    {
        Storage::disk('')->delete($filename);
        $this->image($filename);
     }




}
