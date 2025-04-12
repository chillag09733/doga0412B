<?php

namespace App\Http\Controllers;

use App\Models\Kategoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriaController extends Controller
{
    public function index()
    {
        return Kategoria::all();
    }

    public function store(Request $request)
    {
        $record = new Kategoria();
        $record->fill($request->all());
        $record->save();
    }

    public function show(string $id)
    {
        return Kategoria::find($id);
    }

    public function update(Request $request, string $id)
    {
        $record = Kategoria::find($id);
        $record->fill($request->all());
        $record->save();
    }

    public function delete(string $id)
    {
        Kategoria::find($id)->delete();
    }

    public function getKategoriaId($katId)
    {
        $sql = "
        SELECT tevekenysegs.id, tevekenysegs.kat_id, tevekenysegs.tev_nev, tevekenysegs.allapot, kategorias.katnev
        FROM tevekenysegs
        JOIN kategorias ON tevekenysegs.kat_id = kategorias.id
        WHERE kategorias.id = :katId;";

        $tevekenysegs = DB::select($sql, ['katId' => $katId]);

        return response()->json([
            'tevekenysegs' => $tevekenysegs
        ]);
    }
}
