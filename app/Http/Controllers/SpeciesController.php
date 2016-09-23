<?php
/**
 * Created by PhpStorm.
 * User: meiglspe
 * Date: 23/09/16
 * Time: 10:16
 */

namespace App\Http\Controllers;

use App\Species;
use Illuminate\Http\Request;

class SpeciesController extends Controller
{
    public function show($id)
    {
        $data = Species::find($id);
        return view('species', ['data' => $data]);
    }

    public function search(Request $request)
    {
        $search_fields = $request;
        $search_result = Species::filterByRequest($request)->get();
        return view('species_search')->with('list', $search_result)->with('search_fields', $search_fields);
    }
}