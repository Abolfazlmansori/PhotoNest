<?php

namespace App\Http\Controllers\Gallery;

use App\Http\Controllers\Controller;
use App\Models\Picture;
use App\Models\User;
use Illuminate\Http\Request;

class galleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pictures = Picture::all();
        return view('Gallery.pages.showPictures', compact('pictures'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Gallery.pages.addPictures');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // نام و پسوند فایل
        $name =time()." ".$request->image_name->getClientOriginalName();
        // پسوند فایل
        $extension = $request->image_name->getClientOriginalExtension();
        // فقط اسم فایل
        $only_name = pathinfo($name, PATHINFO_FILENAME);
        // نام فایل به صورت هش شده
        $hash_name = $request->image_name->hashName();
        $request->image_name->storeAs('images',$hash_name);

        $data = $request->all();
        $data['image_name'] = $hash_name;
        Picture::query()->create($data);
        return redirect()->route('gallery.pictures');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $picture = Picture::query()->findOrFail($id);
        $imagePath = public_path('images/'.$picture->image_name);
        if(file_exists($imagePath)){
            unlink($imagePath);
        }
        $picture->delete();
        return redirect()->route('gallery.pictures');
    }
}
