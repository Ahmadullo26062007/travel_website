<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $countries = Country::all();
        return view('admin.countries.index', compact('countries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.countries.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'flag' => 'required',
            'image' => 'required',
        ], [
            'name.required' => 'Davlat nomi yozilmadi',
            'flag.required' => 'Davlat bayrog\'i tanlanmadi',
            'image.required' => '=Rasim tanlanmadi',
        ]);
        $data = $request->all();
        $file = $request->file('flag');
        $image_name = uniqid() . $file->getClientOriginalName();
        $data['flag'] = $image_name;
        $file->move(public_path('images/'), $image_name);
        $file = $request->file('image');
        $image_name2 = uniqid() . $file->getClientOriginalName();
        $data['image'] = $image_name2;
        $file->move(public_path('images/'), $image_name2);
        Country::create([
            'name' => $data['name'],
            'flag' => $data['flag'],
            'image' => $data['image'],
        ]);
        return redirect()->route('countries_admin.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Country $country)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $country = Country::find($id);
        return view('admin.countries.edit', compact('country'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
        ], [
            'name.required' => 'Davlat nomi yozilmadi',
        ]);
        $country = Country::find($id);
        $data = $request->all();


        if (!$request->flag && !$request->image) {
            $country->update([
                'name' => $data['name'],
            ]);
        } else {
            if ($request->flag) {
                $file = $request->file('flag');
                $image_name = uniqid() . $file->getClientOriginalName();
                $data['flag'] = $image_name;
                $file->move(public_path('images/'), $image_name);
                $country->update([
                    'name' => $data['name'],
                    'flag' => $data['flag']
                ]);
            }
            if ($request->image) {
                $file2 = $request->file('image');
                $image_name2 = uniqid() . $file2->getClientOriginalName();
                $data['image'] = $image_name2;
                $file2->move(public_path('images/'), $image_name2);
                $country->update([
                    'name' => $data['name'],
                    'image' => $data['image']
                ]);
            }
            return redirect()->route('countries_admin.index');
        }
        return redirect()->route('countries_admin.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $country = Country::find($id);
        $country->delete();
        return back();
    }
}
