<?php

namespace App\Http\Controllers;

use App\Models\Attributes;
use App\Models\Entities;
use App\Models\EntityData;
use App\Models\Systems;
use App\Repositories\Interfaces\EntityDataRepositoryInterface;
use Illuminate\Http\Request;

class EntityDataController extends Controller
{
    private $entityDataRepository;

    public function __construct(EntityDataRepositoryInterface $entityDataRepository)
    {
        $this->entityDataRepository = $entityDataRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entity_data =  $this->entityDataRepository->allEntitiesData();
        $systems = Systems::all();

        return view('entities_data.index', compact('entity_data', 'systems'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $attributes = Attributes::where('entities_id', $id)->get();
        $systems = Systems::all();
        $entities = Entities::all();
        return view('entities_data.create', compact('systems', 'entities', 'attributes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = [];
        for ($i = 1; $i <= max(array_keys($request->data)); $i++) {
            // dd($request->data[$i]);
            $entitydt = new EntityData();
            $entitydt->data = $request->data[$i];
            $entitydt->entity_id = $request->entityid[$i];
            $entitydt->attribute_id = $request->attribute[$i];
            $entitydt->save();
        }



        return redirect()->route('entity_data.index')->with('message', 'Entity Data Created Successfully');
    }
    // public function loadEntityDataByEntity()
    // {
    //     $inputs = request()->all();
    //     $entity_id = $inputs['entity_id'];
    //     if ($entity_id) {
    //         $fields = Attributes::where('entities_id', $entity_id)->get();
    //         return response()->json([
    //             'result' => 'success',
    //             'msg' => '',
    //             'fields' => $this->view('entities_data._ajax_entity_data', compact('fields')),
    //         ], 200);
    //     }
    //     // dd($inputs);
    // }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
