<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

abstract class BaseModel extends Model
{
    public function nullIfBlank($field){
        return trim($field) !== '' ? $field : null;
    }

    public function zeroIfBlank($field){
        return trim($field) !== '' ? $field : 0;
    }
}
