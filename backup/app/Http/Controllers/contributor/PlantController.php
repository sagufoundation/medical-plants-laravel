<?php

namespace App\Http\Controllers\contributor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PlantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return 'contributor/plant/index';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return 'contributor/plant/create';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return 'contributor/plant/store';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return 'contributor/plant/show';

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return 'contributor/plant/edit';
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        return 'contributor/plant/update';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return 'contributor/plant/destroy';
    }
}
