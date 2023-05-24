<?php

namespace App\Repositories;

use App\Repositories\Interfaces\AttributeDataRepositoryInterface;
use App\Models\Attributes;
use App\Models\AttributeData;

class AttributeDataRepository implements AttributeDataRepositoryInterface
{

  public function allAttributesData()
  {
    return AttributeData::latest()->paginate(10);
  }

  public function storeAttributeData($data)
  {
    return AttributeData::create($data);
  }

  public function findAttributeData($id)
  {
    return AttributeData::find($id);
  }

  public function updateAttributeData($data, $id)
  {
    $attribute = AttributeData::where('id', $id)->first();
    $attribute->name = $data['name'];
    $attribute->save();
  }

  public function destroyAttributeData($id)
  {
    $attribute = AttributeData::find($id);
    $attribute->delete();
  }
}
