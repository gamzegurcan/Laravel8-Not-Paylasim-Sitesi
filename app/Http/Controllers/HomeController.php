<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Image;
use App\Models\Message;
use App\Models\Note;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{

    public static function categorylist(){
        return Category::where('parent_id', '=', 0)->with('children')->get();
    }

    public static function getsetting(){
        return Setting::first();
    }

    public function index()
    {
        $setting=Setting::first();
        $slider= Note::select('id','title','image','detail','file')->limit(4)->inRandomOrder()->get();
        $latest= Note::select('id','title','detail','image','file')->limit(6)->orderByDesc('id')->get();
        $notes= Note::select('id','title','image')->limit(3)->inRandomOrder()->get();
        $data= [
            'setting'=>$setting,
            'slider'=>$slider,
            'latest'=>$latest,
            'notes'=>$notes,
            'page'=>'home'
        ];

        return view('home.index',$data);
    }

    public function note($id){

        $data = Note::find($id);
        $datalist = Image::where('note_id',$id)->get();
        /*$reviews = \App\Models\Review::where('content_id',$id)->get();*/

        return view('home.note_detail',['data' => $data,'datalist' => $datalist]);
    }


    public function about(){
        $setting=Setting::first();
        return View ('home.about',['setting'=>$setting]);
    }

    public function fag(){

        return View ('home.about');
    }

    public function references(){
        $setting=Setting::first();
        return View ('home.references',['setting'=>$setting]);
    }

    public function contact(){
        $setting=Setting::first();
        return View ('home.contact',['setting'=>$setting]);
    }

    public function sendmessage(Request $request){
        $data = new Message();

        $data -> name = $request->input('name');
        $data-> email = $request->input('email');
        $data-> phone = $request->input('phone');
        $data-> subject = $request->input('subject');
        $data-> message = $request->input('message');

        $data->save();
        return redirect()->route('contact')->with('success','Mesajınız iletilmiştir, Teşekkür ederiz..');
    }

    public function categorynotes($id){

        $datalist = Note::where('category_id',$id)->get();
        $data = Category::find($id);
        return view('home.category_notes',['data'=>$data,'datalist'=>$datalist]);

    }

    public function login(){
        return view('admin.login');
    }

    public function loginCheck(Request $request){

        if($request->isMethod('post')){
            $credentials = $request->only('email','password');
            if(Auth::attempt($credentials)){
                $request->session()->regenerate();

                return redirect()->intended('admin');
            }

            return back()-> withErrors([
                'email' => 'The provided credentials do not match our records',
            ]);
        }else{
            return view('admin.login');
        }
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect( '/');
    }

}
