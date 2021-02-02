<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist = Note::where('user_id', Auth::id())->get();
        return view('home.user_note',['datalist' => $datalist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $datalist = Category::with('children')->get();
        if($request->file('image')!= null) {
            $datalist->image = Storage::putFile('images', $request->file('image'));
        }
        if($request->file('file')!=null){
            $datalist->file = storage::putfile('files',$request->file('file'));
        }
        return view ('home.user_note_add',['datalist' =>$datalist]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Note();

        $data -> title = $request->input('title');
        $data->keywords = $request->input('keywords');
        $data->description = $request->input('description');
        $data->slug = $request->input('slug');
        $data->status = $request->input('status');
        $data->category_id = $request->input('category_id');
        $data->detail = $request->input('detail');
        if($request->file('image')!= null) {
            $data->image = Storage::putFile('images', $request->file('image'));
        }
        if($request->file('file')!=null){
            $data->file = storage::putfile('files',$request->file('file'));
        }
        $data->user_id = Auth::id();


        $data->save();
        return redirect()->route('user_note')->with('success','Note Added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function show(Note $note)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function edit(Note $note,$id)
    {
        $data = Note::find($id);
        $datalist = Category::with('children')->get();

        return view('home.user_note_edit',['data'=>$data,'datalist' =>$datalist]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Note $note,$id)
    {
        $data = Note::find($id);

        $data->title = $request->input('title');
        $data->keywords = $request->input('keywords');
        $data->description = $request->input('description');
        $data->slug = $request->input('slug');
        $data->status = $request->input('status');
        $data->category_id = $request->input('category_id');
        $data->detail = $request->input('detail');
        $data->user_id = Auth::id();

        if($request->file('image')!= null) {
            $data->image = Storage::putFile('images', $request->file('image'));
        }
        if($request->file('file')!=null){
            $data->file = storage::putfile('files',$request->file('file'));
        }

        $data->save();
        return redirect() -> route('user_note')->with('success','Note Added Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Note  $note
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Note $note,$id)
    {
        DB::table('notes')->where('id','=',$id)->delete();
        return redirect() -> route('user_note')->with('success','Note Added Successfully!');
    }
}
