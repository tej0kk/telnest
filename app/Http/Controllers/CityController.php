<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index()
    {
        return view('city.index');
    }

    public function create()
    {
        return 'ini adalah halaman untuk menampilkan formulir menambah data baru';
    }

    public function store(Request $request)
    {
        //
    }

    public function show(City $city)
    {
        //
    }

    public function edit(City $city)
    {
        //
    }

    public function update(Request $request, City $city)
    {
        //
    }

    public function destroy(City $city)
    {
        //
    }
}
