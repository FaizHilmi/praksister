<?php

namespace App\Http\Controllers;

use App\Models\DataMobil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GetIdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function showbyId(Request $request){
        $id = $request->id;

        return DataMobil::find($id);
    }
}
