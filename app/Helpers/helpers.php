<?php

use App\Models\Attributes;
use App\Models\Systems;
use App\Models\Entities;
use App\Models\EntityData;
use App\Models\dataTypes;

function dataTypeTranslator($type)
{
  switch ($type) {
    case 1:
      return 'text';
      break;
    case 2:
      return 'number';
      break;
    case 3:
      return 'number';
      break;
    case 4:
      return 'date';
      break;
  }
}
function isRole($role)
{
  if ($role == '1')
    return 'Admin';
  else
    return "Operator";
}
