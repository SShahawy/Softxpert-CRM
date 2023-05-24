<?php

namespace App\Http\Controllers;

use App\Models\Entities;
use App\Models\Systems;
use App\Repositories\Interfaces\AttributeRepositoryInterface;
use App\Models\Attributes;
use App\Models\dataTypes;
use Illuminate\Http\Request;

class AttributeController extends Controller
{
    private $attributeRepository;

    public function __construct(AttributeRepositoryInterface $attributeRepository)
    {
        $this->attributeRepository = $attributeRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $attributes =  $this->attributeRepository->allAttributes();
        $systems = Systems::all();

        return view('attributes.index', compact('attributes', 'systems'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $systems = Systems::all();
        $entities = Entities::all();
        $attributes = Attributes::all();
        $datatypes = dataTypes::all();
        return view('attributes.create', compact('systems', 'entities', 'attributes', 'datatypes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'entities_id' => 'required',
            'datatype_id' => 'required',
        ]);
        $this->attributeRepository->storeAttribute($data);

        return redirect()->route('attributes.index')->with('message', 'Attribute Created Successfully');
    }

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
        $attribute = $this->attributeRepository->findAttribute($id);

        return view('attributes.edit', compact('attribute'));
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
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $this->attributeRepository->updateAttribute($request->all(), $id);

        return redirect()->route('attributes.index')->with('message', 'Attribute Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->attributeRepository->destroyAttribute($id);


        return redirect()->route('attributes.index')->with('status', 'Attribute Delete Successfully');
    }
}
