<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = "usuario";

    private int $usuarioid;

    public function Get(mixed $attribute){

        return $this->{$attribute};
    }
}
