<?php

namespace App\Repositories;

use App\Repositories\Interfaces\EntityRepositoryInterface;
use App\Models\Entities;

class EntityRepository implements EntityRepositoryInterface
{

  public function allEntities()
  {
    return Entities::latest()->paginate(10);
  }

  public function storeEntity($data)
  {
    return Entities::create($data);
  }

  public function findEntity($id)
  {
    return Entities::find($id);
  }

  public function updateEntity($data, $id)
  {
    $entity = Entities::where('id', $id)->first();
    $entity->name = $data['name'];
    $entity->save();
  }

  public function destroyEntity($id)
  {
    $entity = Entities::find($id);
    $entity->delete();
  }
}
