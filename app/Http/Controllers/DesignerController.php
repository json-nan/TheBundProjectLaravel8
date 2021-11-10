<?php

namespace App\Http\Controllers;

use App\Models\Designer;
use App\Models\Tag;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DesignerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        return Inertia::render('Designers', [
            'tags' => Tag::all(),
            'designers' => Designer::with(['tags', 'portfolios', 'socialNetworks'])->inRandomOrder()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Designer $designer
     * @return \Illuminate\Http\Response
     */
    public function show(Designer $designer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Designer $designer
     * @return \Illuminate\Http\Response
     */
    public function edit(Designer $designer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Designer $designer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Designer $designer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Designer $designer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Designer $designer)
    {
        //
    }
}
