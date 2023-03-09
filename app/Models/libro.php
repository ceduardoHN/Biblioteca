<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class libro extends Model
{
    use HasFactory;
    protected $table="libro";
    protected $primaryKey="ISBN";
    public $incrementing=false;
    public $timestamps=false;
}
