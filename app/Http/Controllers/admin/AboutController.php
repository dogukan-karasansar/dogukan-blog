<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = About::latest()->first();

        return response()->json(['message' => 'başarılı', 'data' => $about]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'image' => 'required|image|mimes:png,jpg,jpeg',
        ]);

        if(isset($validate['image'])) {
            $url = Config::get('app.url');
            $path = $url.$request->image->store('images', 'public');
        }

        $about = About::create([
            'title' => $request->title,
            'image' => $path,
            'description' => $request->description,
            'tag' => $request->tag
        ]);

        return response()->json(['message' => 'Kayıt Başarılı', 'data' => $about], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'image' => 'image|mimes:png,jpg,jpeg',
            'title' => 'required',
        ]);

        if(isset($validate['image'])) {
            $url = Config::get('app.url');
            $path = $url.$request->image->store('images', 'public');
            $request->image = $path;
        }



        $about = About::findOrFail($id);
        /* $about->title = $request->title;
        $about->description = $request->description;
        $about->image = $request->image;
        $about->tag = $request->tag;*/
        $about->update([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $request->image,
            'tag' => $request->tag
         ]);

        return response()->json(['data' => $about], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
