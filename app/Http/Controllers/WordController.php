<?php

namespace App\Http\Controllers;

use App\Models\Word;
use Illuminate\Http\Request;

class WordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $words=Word::orderByDesc('id')->get();
        return view('admin.words.index',compact('words'));
    }
    function word($id){
        $l=\App\Models\Lenguage::find(1);
        $w=\App\Models\Word::find($id);

        if ($l->type==1){
            $s=$w->language_1;
        }else{
            $s=$w->language_2;
        }
        return $s;
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.words.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(['language_1'=>'required','language_2'=>'required']);
        Word::create($request->all());
        return redirect()->route('word.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Word $word)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Word $word)
    {
        return view('admin.words.edit',compact('word'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Word $word)
    {
        $request->validate(['language_1'=>'required','language_2'=>'required']);
        $word->update($request->all());
        return redirect()->route('word.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Word $word)
    {
        $word->delete();
        return back();
    }
}
