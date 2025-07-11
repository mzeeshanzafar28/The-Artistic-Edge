<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\Artist;
use App\Models\ArtistImage;
use App\Models\Exhibition;

class UserController extends Controller
{
    public function home(){
        $data = Artist::with('images')->get();
        $exhibitions = Exhibition::all();
        return view('homepage.home', compact('data','exhibitions'));
    }
    
    public function about(){
        $data = Artist::with('images')->get();
        return view('homepage.about');
    }
    
    public function artist(){
        $data = Artist::with('images')->get();
        return view('homepage.artist', compact('data'));
    }
    
    public function exhibitions(){
        $exhibitions = Exhibition::all();
        return view('homepage.exhibitions' ,compact('exhibitions'));
    }
    
    public function contactus(){
        return view('homepage.contactus');
    }
    
    public function storemessage(Request $request)
    {
        $data = new Message();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->message = $request->message;
        $data->save();
        return back();
    }
    
    public function main()
    {
        $data = Artist::with('images')->get();
        $exhibitions = Exhibition::all();
        return view('main', compact('data', 'exhibitions'));
    }
    
    public function Blog(){
        return view('homepage.blogs');
    }
    
    public function showmessage(){
        $messages = Message::all();
        return view('homepage.messages' ,compact('messages'));
    }
}