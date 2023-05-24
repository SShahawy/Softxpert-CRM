<?php

namespace App\Repositories\Interfaces;

interface EntityRepositoryInterface
{

  public function allEntities();
  public function storeEntity($data);
  public function findEntity($id);
  public function updateEntity($data, $id);
  public function destroyEntity($id);
}
