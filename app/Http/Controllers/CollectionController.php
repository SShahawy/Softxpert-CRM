<?php

namespace App\Http\Controllers;

use App\Models\Attributes;
use App\Models\dataTypes;
use App\Models\Entities;
use App\Models\EntityData;
use App\Models\Systems;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CollectionController extends Controller
{
    public function index()
    {

        $data = DB::table('systems')
            ->join('entities', 'systems.id', '=', 'entities.system_id')
            ->join('attributes', 'entities.id', '=', 'attributes.entities_id')
            ->join('entity_data', 'attributes.entities_id', '=', 'entity_data.entity_id')
            ->selectRaw('*,attributes.name as att_name, entities.name as entity_name,systems.name as name')
            ->paginate(15);
        // dd($data);

        return view('collect', compact('data'));
    }
}
