<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\EntityRepositoryInterface;
use App\Models\Entities;
use App\Models\Systems;
use Illuminate\Http\Request;

class EntityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $entityRepository;

    public function __construct(EntityRepositoryInterface $entityRepository)
    {
        $this->entityRepository = $entityRepository;
    }

    public function index()
    {
        $entities =  $this->entityRepository->allEntities();

        return view('entities.index', compact('entities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $systems = Systems::all();
        return view('entities.create', compact('systems'));
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
            'system_id' => 'required',
        ]);

        $this->entityRepository->storeEntity($data);

        return redirect()->route('entities.index')->with('message', 'Entity Created Successfully');
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
        $entity = $this->entityRepository->findEntity($id);

        return view('entities.edit', compact('entity'));
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

        $this->entityRepository->updateEntity($request->all(), $id);

        return redirect()->route('entities.index')->with('message', 'Entity Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->entityRepository->destroyEntity($id);

        return redirect()->route('entities.index')->with('status', 'Entity Delete Successfully');
    }
}
