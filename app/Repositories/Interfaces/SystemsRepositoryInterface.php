<?php

namespace App\Repositories\Interfaces;

interface SystemsRepositoryInterface
{

  public function allSystems();
  public function storeSystem($data);
  public function findSystem($id);
  public function updateSystem($data, $id);
  public function destroySystem($id);
}
