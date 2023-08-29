<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tickets=Ticket::orderByDesc('id')->get();
        return view('admin.tickets.index',compact('tickets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tickets.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'image'=>'required',
            'general'=>'required',
        ]);
        $data=$request->all();
        $file = $request->file('image');
        $image_name2 = uniqid() . $file->getClientOriginalName();
        $data['image'] = $image_name2;
        $file->move(public_path('../images/'), $image_name2);
        Ticket::create($data);
        return redirect()->route('ticket.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ticket $ticket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ticket $ticket)
    {
        return view('admin.tickets.edit',compact('ticket'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ticket $ticket)
    {
        $request->validate([
            'name'=>'required',
        ]);
        if ($request->image) {
            $data = $request->all();
            $file = $request->file('image');
            $image_name2 = uniqid() . $file->getClientOriginalName();
            $data['image'] = $image_name2;
            $file->move(public_path('../images/'), $image_name2);
            $ticket->update($data);
        }else{
            $ticket->update($request->all());
        }
        return redirect()->route('ticket.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ticket $ticket)
    {
        $ticket->delete();
        return back();
    }
}
