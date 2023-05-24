<?php

namespace App\Repositories;

use App\Repositories\Interfaces\AttributeRepositoryInterface;
use App\Models\Attributes;

class AttributeRepository implements AttributeRepositoryInterface
{

  public function allAttributes()
  {
    return Attributes::latest()->paginate(10);
  }

  public function storeAttribute($data)
  {
    return Attributes::create($data);
  }

  public function findAttribute($id)
  {
    return Attributes::find($id);
  }

  public function updateAttribute($data, $id)
  {
    $attribute = Attributes::where('id', $id)->first();
    $attribute->name = $data['name'];
    $attribute->save();
  }

  public function destroyAttribute($id)
  {
    $attribute = Attributes::find($id);
    $attribute->delete();
  }
}
