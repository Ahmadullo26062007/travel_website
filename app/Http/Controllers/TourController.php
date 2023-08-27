<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Country;
use App\Models\Image;
use App\Models\Tour;
use Illuminate\Http\Request;

class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tours = Tour::with('country')->orderByDesc('id')->get();
        return view('admin.tours.index', compact('tours'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $countries = Country::pluck('name', 'id');
        $categories = Category::pluck('name', 'id');
        return view('admin.tours.create', compact('categories', 'countries'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'comfor_description' => 'required',
            'city' => 'required',
            'country_id' => 'required',
            'category_id' => 'required',
            'price' => 'required',
            'price_type' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            'images' => 'required',
            'image' => 'required',
            'length' => 'required',
        ]);
        $data = $request->all();
        $file = $request->file('image');
        $image_name = uniqid() . $file->getClientOriginalName();
        $data['image'] = $image_name;
        $file->move(public_path('images/'), $image_name);
        $t = Tour::create([
            'title' => $request->title,
            'description' => $request->description,
            'comfor_description' => $request->comfor_description,
            'city' => $request->city,
            'country_id' => $request->country_id,
            'category_id' => $request->category_id,
            'price' => $request->price,
            'price_type' => $request->visa_type,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'length' => $request->length,
            'image' => $data['image']
        ]);
        if ($request->visa) {
            $t->update([
                'visa_type' => $request->visa_type,
                'visa' => $request->visa,]);
        }
        foreach ($request->images as $image) {
            $file = $image;
            $image_name = uniqid() . $file->getClientOriginalName();
            $i = new Image(['name' => $image_name]);
            $t->images()->save($i);
            $file->move(public_path('images'), $image_name);
        }
        return redirect()->route('tours.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tour $tour)
    {
        return view('admin.tours.show', compact('tour'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tour $tour)
    {
        $countries = Country::pluck('name', 'id');
        $categories = Category::pluck('name', 'id');
        return view('admin.tours.edit', compact('categories', 'countries', 'tour'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tour $tour)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'comfor_description' => 'required',
            'city' => 'required',
            'country_id' => 'required',
            'category_id' => 'required',
            'price' => 'required',
            'price_type' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            'length' => 'required',]);

        $tour->update([
            'title' => $request->title,
            'description' => $request->description,
            'comfor_description' => $request->comfor_description,
            'city' => $request->city,
            'country_id' => $request->country_id,
            'category_id' => $request->category_id,
            'price' => $request->price,
            'price_type' => $request->price_type,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'length' => $request->length,
        ]);

        if ($request->visa) {
            $tour->update([
                'visa_type' => $request->visa_type,
                'visa' => $request->visa,]);
        }
        if ($request->image && $tour->image) {
            unlink(public_path("images/$tour->image"));
            $data = $request->all();
            $file = $request->file('image');
            $image_name = uniqid() . $file->getClientOriginalName();
            $data['image'] = $image_name;
            $file->move(public_path('images/'), $image_name);
            $tour->update([
                'image' => $data['image']
            ]);
        }else{
            if ($request->image && !$tour->image){
                $data = $request->all();
                $file = $request->file('image');
                $image_name = uniqid() . $file->getClientOriginalName();
                $data['image'] = $image_name;
                $file->move(public_path('images/'), $image_name);
                $tour->update([
                    'image' => $data['image']
                ]);
            }
        }
        if ($request->images && $tour->images) {
            $tour->images()->delete();
            foreach ($request->images as $image) {
                $file = $image;
                $image_name = uniqid() . $file->getClientOriginalName();
                $i = new Image(['name' => $image_name]);
                $tour->images()->save($i);
                $file->move(public_path('images'), $image_name);
            }
        } else {
            if ($request->images && !$tour->images) {
                foreach ($request->images as $image) {
                    $file = $image;
                    $image_name = uniqid() . $file->getClientOriginalName();
                    $i = new Image(['name' => $image_name]);
                    $tour->images()->save($i);
                    $file->move(public_path('images'), $image_name);
                }
            }
        }
        return redirect()->route('tours.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tour $tour)
    {
        if ($tour->images) {
            $tour->images()->delete();
        } else {
            $tour->delete();
        }
        $tour->delete();
        return back();
    }
}
