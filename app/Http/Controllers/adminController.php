<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artist;
use App\Models\User;

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\File;

class adminController extends Controller
{
    public function create()
    {
        $user=User::all();
        return view ('artist.create',compact('user'));
    }
    public function store(Request $request){
       
            // Check if a user with the authenticated user's ID already exists
    $existingArtist = Artist::where('user_id', auth()->id())->first();

    if ($existingArtist) {
        // Artist already exists for this user, return with error message
        return redirect()->back()->with('error', 'You have already submitted the form.');
    }
     $data = new Artist();
        $data->user_id =$request->user_id;
        $data->Name = $request->Name;
        $data->Bio = $request->Bio;
    
        // Upload image1
        if ($request->hasFile('image1')) {
            $image1 = $request->file('image1');
            $imageName1 = time() . '_image1.' . $image1->getClientOriginalExtension();
            $image1->move(public_path('images'), $imageName1);
            $data->image1 = 'images/' . $imageName1;
        }
    
        // Upload image2
        if ($request->hasFile('image2')) {
            $image2 = $request->file('image2');
            $imageName2 = time() . '_image2.' . $image2->getClientOriginalExtension();
            $image2->move(public_path('images'), $imageName2);
            $data->image2 = 'images/' . $imageName2;
        }
    
        // Upload image3
        if ($request->hasFile('image3')) {
            $image3 = $request->file('image3');
            $imageName3 = time() . '_image3.' . $image3->getClientOriginalExtension();
            $image3->move(public_path('images'), $imageName3);
            $data->image3 = 'images/' . $imageName3;
        }
        $data->save();
        return redirect()->route('artist.index')->with('success', 'Artist details submitted successfully.');
    }
        
    public function index()
    {
        $data= Artist::all();
        return view ('artist.index', compact('data'));
    }
    public function edit(string $id)
    {
        $data=Artist::find($id);
        return view('artist.edit',compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = Artist::findOrFail($id);
        $data->Name = $request->Name;
        $data->Bio = $request->Bio;
    
        // Update image1
        if ($request->hasFile('image1')) {
            $image1 = $request->file('image1');
            $imageName1 = time() . '_image1.' . $image1->getClientOriginalExtension();
            $image1->move(public_path('images'), $imageName1);
            $data->image1 = 'images/' . $imageName1;
        }
    
        // Update image2
        if ($request->hasFile('image2')) {
            $image2 = $request->file('image2');
            $imageName2 = time() . '_image2.' . $image2->getClientOriginalExtension();
            $image2->move(public_path('images'), $imageName2);
            $data->image2 = 'images/' . $imageName2;
        }
    
        // Update image3
        if ($request->hasFile('image3')) {
            $image3 = $request->file('image3');
            $imageName3 = time() . '_image3.' . $image3->getClientOriginalExtension();
            $image3->move(public_path('images'), $imageName3);
            $data->image3 = 'images/' . $imageName3;
        }
    
        $data->save();
        return redirect()->route('artist.index');
    }
    
public function destroy(string $id)
    {
        $data= Artist::find($id);
        $data->delete();
        return back();
}
public function show($id)
{
    $artist = Artist::findOrFail($id);
    return view('artist.artist_details', ['artist' => $artist]);
}

}