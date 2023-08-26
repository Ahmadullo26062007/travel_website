<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Visa;
use Illuminate\Http\Request;

class VisaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $visas=Visa::with('country')->get();
        return view('admin.visa.index',compact('visas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $countries=Country::pluck('name','id');
        return view('admin.visa.create',compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'country_id'=>'required',
            'price'=>'required',
            'price_type'=>'required',
            'visa_time'=>'required',
            'description'=>'required'
        ]);
        Visa::create($request->all());
        return redirect()->route('visa.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Visa $visa)
    {
        return view('admin.visa.show',compact('visa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Visa $visa)
    {
        $countries=Country::pluck('name','id');
        return view('admin.visa.edit',compact('countries','visa'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Visa $visa)
    {
        $request->validate([
            'country_id'=>'required',
            'price'=>'required',
            'price_type'=>'required',
            'visa_time'=>'required',
            'description'=>'required'
        ]);
        $visa->update($request->all());
        return redirect()->route('visa.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Visa $visa)
    {
        $visa->delete();
        return back();
    }
}
