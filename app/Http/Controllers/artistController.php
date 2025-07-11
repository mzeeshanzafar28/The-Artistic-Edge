<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artist;
use App\Models\ArtistImage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class artistController extends Controller
{
    protected function getCountries()
    {
        return [
            'United States', 'Canada', 'United Kingdom', 'Australia', 'India', 'Pakistan', 'Germany', 'France', 'Brazil', 'Japan',
            'China', 'South Africa', 'Mexico', 'Italy', 'Spain', 'Russia', 'South Korea', 'Nigeria', 'Argentina', 'Egypt'
        ];
    }

    public function create()
    {
        $countries = $this->getCountries();
        return view('artist.create', compact('countries'));
    }

    public function store(Request $request)
    {
        if (auth()->user()->artist) {
            return redirect()->route('main')->with('error', 'You already have an artist profile.');
        }

        $countries = $this->getCountries();
        $validator = Validator::make($request->all(), [
            'Name' => 'required|string|min:2|max:255|regex:/^[a-zA-Z\s]*$/',
            'Bio' => 'required|string|min:10|max:500',
            'Contact' => 'required|string|regex:/^\+?[1-9]\d{1,14}$/',
            'Email' => 'required|email|max:500',
            'Country' => 'required|string|in:' . implode(',', $countries),
            'Address' => 'required|string|min:10|max:500',
            'profile_image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'images.*' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'comments.*' => 'required|string|min:2|max:255',
            'prices.*' => 'required|numeric|min:0',
            'years.*' => 'nullable|integer|digits:4',
            'prints.*' => 'nullable|string|max:255',
            'print_sizes.*' => 'nullable|string|max:255',
            'editions.*' => 'nullable|string|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Store profile image
        $profileImagePath = $request->file('profile_image')->store('public/images');

        $artist = Artist::create([
            'user_id' => auth()->id(),
            'Name' => $request->Name,
            'Bio' => $request->Bio,
            'Contact' => $request->Contact,
            'Email' => $request->Email,
            'Country' => $request->Country,
            'Address' => $request->Address,
            'profile_image' => str_replace('public/', 'storage/', $profileImagePath),
        ]);

        // Store artwork images
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $key => $image) {
                $imagePath = $image->store('public/images');

                ArtistImage::create([
                    'artist_id' => $artist->id,
                    'image_path' => str_replace('public/', 'storage/', $imagePath),
                    'comment' => $request->comments[$key],
                    'price' => $request->prices[$key],
                    'year' => $request->years[$key] ?? null,
                    'print' => $request->prints[$key] ?? null,
                    'print_size' => $request->print_sizes[$key] ?? null,
                    'edition' => $request->editions[$key] ?? null,
                ]);
            }
        }

        return redirect()->route('main')->with('success', 'Artist profile created successfully.');
    }

    public function index()
    {
        $data = Artist::with('images')->get();
        return view('artist.index', compact('data'));
    }

    public function edit(string $id)
    {
        $artist = Artist::with('images')->findOrFail($id);
        $countries = $this->getCountries();
        return view('artist.edit', compact('artist', 'countries'));
    }

    public function update(Request $request, $id)
    {
        $countries = $this->getCountries();
        $validator = Validator::make($request->all(), [
            'Name' => 'required|string|min:2|max:255|regex:/^[a-zA-Z\s]*$/',
            'Bio' => 'required|string|min:10|max:500',
            'Contact' => 'required|string|regex:/^\+?[1-9]\d{1,14}$/',
            'Email' => 'required|email|max:500',
            'Country' => 'required|string|in:' . implode(',', $countries),
            'Address' => 'required|string|min:10|max:500',
            'profile_image' => 'sometimes|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'new_images.*' => 'sometimes|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'existing_comments.*' => 'sometimes|string|min:2|max:255',
            'existing_prices.*' => 'sometimes|numeric|min:0',
            'existing_years.*' => 'nullable|integer|digits:4',
            'existing_prints.*' => 'nullable|string|max:255',
            'existing_print_sizes.*' => 'nullable|string|max:255',
            'existing_editions.*' => 'nullable|string|max:255',
            'new_comments.*' => 'nullable|string|min:2|max:255',
            'new_prices.*' => 'nullable|numeric|min:0',
            'new_years.*' => 'nullable|integer|digits:4',
            'new_prints.*' => 'nullable|string|max:255',
            'new_print_sizes.*' => 'nullable|string|max:255',
            'new_editions.*' => 'nullable|string|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $artist = Artist::findOrFail($id);

        // Update basic artist info
        $artist->update([
            'Name' => $request->Name,
            'Bio' => $request->Bio,
            'Contact' => $request->Contact,
            'Email' => $request->Email,
            'Country' => $request->Country,
            'Address' => $request->Address,
        ]);

        // Update profile image if provided
        if ($request->hasFile('profile_image')) {
            // Delete old image if exists
            if ($artist->profile_image) {
                Storage::delete(str_replace('storage/', 'public/', $artist->profile_image));
            }
            $profileImagePath = $request->file('profile_image')->store('public/images');
            $artist->update(['profile_image' => str_replace('public/', 'storage/', $profileImagePath)]);
        }

        // Update existing images
        if ($request->existing_image_ids) {
            foreach ($request->existing_image_ids as $key => $imageId) {
                $image = ArtistImage::find($imageId);
                if ($image) {
                    $image->update([
                        'comment' => $request->existing_comments[$key],
                        'price' => $request->existing_prices[$key],
                        'year' => $request->existing_years[$key] ?? null,
                        'print' => $request->existing_prints[$key] ?? null,
                        'print_size' => $request->existing_print_sizes[$key] ?? null,
                        'edition' => $request->existing_editions[$key] ?? null,
                    ]);
                }
            }
        }

        // Add new images
        if ($request->hasFile('new_images')) {
            foreach ($request->file('new_images') as $key => $image) {
                if ($image) {
                    $imagePath = $image->store('public/images');
                    ArtistImage::create([
                        'artist_id' => $artist->id,
                        'image_path' => str_replace('public/', 'storage/', $imagePath),
                        'comment' => data_get($request->new_comments, $key, null),
                        'price' => data_get($request->new_prices, $key, null),
                        'year' => data_get($request->new_years, $key, null),
                        'print' => data_get($request->new_prints, $key, null),
                        'print_size' => data_get($request->new_print_sizes, $key, null),
                        'edition' => data_get($request->new_editions, $key, null),
                    ]);
                }
            }
        }

        return redirect()->route('main')->with('success', 'Artist profile updated successfully.');
    }

    public function destroy(string $id)
    {
        $artist = Artist::findOrFail($id);
        // Delete images
        foreach ($artist->images as $image) {
            Storage::delete(str_replace('storage/', 'public/', $image->image_path));
        }
        if ($artist->profile_image) {
            Storage::delete(str_replace('storage/', 'public/', $artist->profile_image));
        }
        $artist->images()->delete();
        $artist->delete();
        return back()->with('success', 'Artist deleted successfully.');
    }

    public function show($id)
    {
        $artist = Artist::with(['images' => function ($query) {
            $query->latest();
        }])->findOrFail($id);
        return view('artist.artist_details', compact('artist'));
    }

    public function deleteImage($imageId)
    {
        $image = ArtistImage::findOrFail($imageId);
        Storage::delete(str_replace('storage/', 'public/', $image->image_path));
        $image->delete();
        return response()->json(['success' => true]);
    }
}
