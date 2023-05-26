<?php

namespace App\Http\Controllers;

use App\Models\Attributes;
use App\Repositories\Interfaces\SystemsRepositoryInterface;
use App\Models\Systems;
use Illuminate\Http\Request;

class SystemController extends Controller
{
    private $systemRepository;

    public function __construct(SystemsRepositoryInterface $systemRepository)
    {
        $this->systemRepository = $systemRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $systems =  $this->systemRepository->allSystems();

        return view('systems.index', compact('systems'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('systems.create');
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
        ]);

        $this->systemRepository->storeSystem($data);

        return redirect()->route('systems.index')->with('message', 'System Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $system = $this->systemRepository->findSystem($id); // Finding system using ID
        $attributes = Attributes::where('entities_id', $system->id)->get(); // Getting Attributes that has the same id as the searched system
        return view('systems.show', compact('system', 'attributes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $system = $this->systemRepository->findSystem($id);

        return view('systems.edit', compact('system'));
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

        $this->systemRepository->updateSystem($request->all(), $id);

        return redirect()->route('systems.index')->with('message', 'System Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->systemRepository->destroySystem($id);

        return redirect()->route('systems.index')->with('status', 'System Delete Successfully');
    }
}
