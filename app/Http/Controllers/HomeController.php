<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Message;
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
        return view('home.index',['setting'=>$setting]);
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
