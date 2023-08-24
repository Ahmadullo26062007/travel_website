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
        $tours=Tour::with('country')->get();
        return view('admin.tours.index',compact('tours'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $countries=Country::pluck('name','id');
        $categories=Category::pluck('name','id');
        return view('admin.tours.create',compact('categories','countries'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'city'=>'required',
            'country_id'=>'required',
            'category_id'=>'required',
            'price'=>'required',
            'price_type'=>'required',
            'start_time'=>'required',
            'end_time'=>'required',
            'image'=>'required',
        ],[
            'title.required'=>'Sayohat nomi kiritlmadi',
            'description.required'=>'Sayohat tavsifi kiritlmadi',
            'city.required'=>'Sayohat shaxri kiritlmadi',
            'country_id.required'=>'Sayohat davlati tanlanmadi',
            'category_id.required'=>'Sayohat turi tanlanmadi',
            'price.required'=>' Sayohat mabla\'i kiritilmadi',
            'price_type.required'=>' Mablag\' turi tanlanmadi',
            'start_time.required'=>'Boshlanish vaqti kiritilmadi',
            'end_time.required'=>'Tugash vaqti kiritlmadi',
            'image.required'=>'Rasm kiritlmadi',
        ]);
        $t= Tour::create($request->all());
        foreach ($request->image as $image) {
            $file = $image;
            $image_name = uniqid() . $file->getClientOriginalName();
            $i = new Image(['name' => $image_name]);
            $t->images()->save($i);
            $file->move(public_path('storage'), $image_name);
        }
        return redirect()->route('tours.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tour $tour)
    {
        return view('admin.tours.show',compact('tour'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tour $tour)
    {
        $countries=Country::pluck('name','id');
        $categories=Category::pluck('name','id');
        return view('admin.tours.edit',compact('categories','countries','tour'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tour $tour)
    {
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'city'=>'required',
            'country_id'=>'required',
            'category_id'=>'required',
            'price'=>'required',
            'price_type'=>'required',
            'start_time'=>'required',
            'end_time'=>'required',
            'image'=>'required',
        ],[
            'title.required'=>'Sayohat nomi kiritlmadi',
            'description.required'=>'Sayohat tavsifi kiritlmadi',
            'city.required'=>'Sayohat shaxri kiritlmadi',
            'country_id.required'=>'Sayohat davlati tanlanmadi',
            'category_id.required'=>'Sayohat turi tanlanmadi',
            'price.required'=>' Sayohat mabla\'i kiritilmadi',
            'price_type.required'=>' Mablag\' turi tanlanmadi',
            'start_time.required'=>'Boshlanish vaqti kiritilmadi',
            'end_time.required'=>'Tugash vaqti kiritlmadi',
            'image.required'=>'Rasm kiritlmadi',
        ]);
        $tour->update($request->all());
        if ($request->image && $tour->images) {
            $tour->images()->delete();
            foreach ($request->image as $image) {
                $file = $image;
                $image_name = uniqid() . $file->getClientOriginalName();
                $i = new Image(['name' => $image_name]);
                $tour->images()->save($i);
                $file->move(public_path('storage'), $image_name);
            }
        }else{
            if ($request->image && !$tour->images){
                foreach ($request->image as $image) {
                    $file = $image;
                    $image_name = uniqid() . $file->getClientOriginalName();
                    $i = new Image(['name' => $image_name]);
                    $tour->images()->save($i);
                    $file->move(public_path('storage'), $image_name);
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
        if ($tour->images){
            $tour->images()->delete();
        }else{
        $tour->delete();
        }
        $tour->delete();
        return back();
    }
}
