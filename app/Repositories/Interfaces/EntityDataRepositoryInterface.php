<?php

namespace App\Repositories\Interfaces;

interface EntityDataRepositoryInterface
{

  public function allEntitiesData();
  public function storeEntityData($data);
  public function findEntityData($id);
  public function updateEntityData($data, $id);
  public function destroyEntityData($id);
}
