<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exhibition;
use App\Models\ExhibitionImage;

class exhibitionController extends Controller
{
    public function create()
    {
        return view('exhibition.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Name' => 'required|string|min:2|max:255|regex:/^[a-zA-Z\s]*$/',
            'Bio' => 'required|string|min:10',
            'Date' => 'required|date_format:Y-m-d',
            'Venue' => 'required|string|min:2|max:255',
            'images' => 'required|array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $exhibition = new Exhibition();
        $exhibition->Name = $request->Name;
        $exhibition->Bio = $request->Bio;
        $exhibition->Date = $request->Date;
        $exhibition->Venue = $request->Venue;
        $exhibition->save();

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('images'), $imageName);
                $imagePath = 'images/' . $imageName;

                $exhibitionImage = new ExhibitionImage();
                $exhibitionImage->exhibition_id = $exhibition->id;
                $exhibitionImage->image_path = $imagePath;
                $exhibitionImage->save();
            }
        }

        return redirect()->route('exhibition.index');
    }

    public function index()
    {
        $data = Exhibition::all();
        return view('exhibition.index', compact('data'));
    }

    public function destroy(string $id)
    {
        $exhibition = Exhibition::findOrFail($id);
        $exhibition->images()->delete(); // Delete associated images
        $exhibition->delete();
        return back();
    }

    public function showexhibition($id)
    {
        $exhibition = Exhibition::with('images')->findOrFail($id);
        return view('exhibition.exhibition_details', ['exhibition' => $exhibition]);
    }
}