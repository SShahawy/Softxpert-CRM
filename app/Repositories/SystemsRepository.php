<?php

namespace App\Repositories;

use App\Repositories\Interfaces\SystemsRepositoryInterface;
use App\Models\Systems;

class SystemsRepository implements SystemsRepositoryInterface
{

  public function allSystems()
  {
    return Systems::latest()->paginate(10);
  }

  public function storeSystem($data)
  {
    return Systems::create($data);
  }

  public function findSystem($id)
  {
    return Systems::find($id);
  }

  public function updateSystem($data, $id)
  {
    $systems = Systems::where('id', $id)->first();
    $systems->name = $data['name'];
    $systems->save();
  }

  public function destroySystem($id)
  {
    $systems = Systems::find($id);
    $systems->delete();
  }
}
