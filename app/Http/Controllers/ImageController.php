<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($note_id)
    {
        $data = Note::find($note_id);
        $images = DB::table('images')->where('note_id','=',$note_id)->get();

        return view('home.user_note_image_add',['data'=>$data, 'images' => $images]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request,$note_id)
    {
        $data = new Image;

        $data -> title = $request->input('title');
        $data-> note_id = $note_id;

        if($request->file('image')!= null) {
            $data->image = Storage::putFile('images', $request->file('image'));
        }

        $data->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Image $image,$id,$note_id)
    {
        DB::table('images')->where('id','=',$id)->delete();
        return redirect() -> back();
    }
}
