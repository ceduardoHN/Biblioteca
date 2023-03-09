<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class autor extends Model
{
    use HasFactory;
    protected $table="autor";
    protected $primaryKey="codAutor";
    protected $fillable=["codAutor","nombre","apellido","fechaNacimiento"];
    public $incrementing=false;
    public $timestamps=false;
}
