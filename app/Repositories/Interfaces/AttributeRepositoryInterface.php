<?php

namespace App\Repositories\Interfaces;

interface AttributeRepositoryInterface
{

  public function allAttributes();
  public function storeAttribute($data);
  public function findAttribute($id);
  public function updateAttribute($data, $id);
  public function destroyAttribute($id);
}
