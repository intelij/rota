<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Rotaschedule;
use Illuminate\Http\Request;
use Session;

class RotascheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $rotaschedule = Rotaschedule::where('slottype', '=', 'shift')->paginate(70);

        return view('rotaschedule.index', compact('rotaschedule'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('rotaschedule.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        Rotaschedule::create($requestData);

        Session::flash('flash_message', 'Rotaschedule added!');

        return redirect('rotaschedule');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $rotaschedule = Rotaschedule::findOrFail($id);

        return view('rotaschedule.show', compact('rotaschedule'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $rotaschedule = Rotaschedule::findOrFail($id);

        return view('rotaschedule.edit', compact('rotaschedule'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        
        $requestData = $request->all();
        
        $rotaschedule = Rotaschedule::findOrFail($id);
        $rotaschedule->update($requestData);

        Session::flash('flash_message', 'Rotaschedule updated!');

        return redirect('rotaschedule');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Rotaschedule::destroy($id);

        Session::flash('flash_message', 'Rotaschedule deleted!');

        return redirect('rotaschedule');
    }
}
