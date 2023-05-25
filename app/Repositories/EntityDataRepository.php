<?php

namespace App\Repositories;

use App\Repositories\Interfaces\EntityDataRepositoryInterface;
use App\Models\Entities;
use App\Models\EntityData;

class EntityDataRepository implements EntityDataRepositoryInterface
{

  public function allEntitiesData()
  {
    return EntityData::latest()->paginate(10);
  }

  public function storeEntityData($data)
  {
    return EntityData::create($data);
  }

  public function findEntityData($id)
  {
    return EntityData::find($id);
  }

  public function updateEntityData($data, $id)
  {
    $entity = EntityData::where('id', $id)->first();
    $entity->name = $data['name'];
    $entity->save();
  }

  public function destroyEntityData($id)
  {
    $entity = EntityData::find($id);
    $entity->delete();
  }
}
