<?php

namespace App\Http\Controllers;

use App\Models\Tevekenyseg;
use Illuminate\Http\Request;

class TevekenysegController extends Controller
{
    public function index()
    {
        return Tevekenyseg::all();
    }

    public function store(Request $request)
    {
        $record = new Tevekenyseg();
        $record->fill($request->all());
        $record->save();
    }

    public function show(string $id)
    {
        return Tevekenyseg::find($id);
    }

    public function update(Request $request, string $id)
    {
        $record = Tevekenyseg::find($id);
        $record->fill($request->all());
        $record->save();
    }

    public function delete(string $id)
    {
        Tevekenyseg::find($id)->delete();
    }
}
