<?php

namespace App\Repositories\Interfaces;

interface AttributeDataRepositoryInterface
{

  public function allAttributesData();
  public function storeAttributeData($data);
  public function findAttributeData($id);
  public function updateAttributeData($data, $id);
  public function destroyAttributeData($id);
}
