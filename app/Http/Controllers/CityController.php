<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index()
    {
        $cities = City::all(); // select * from city
        return view('city.index', compact('cities'));
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
