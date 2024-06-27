<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    use HasFactory;
    protected $table = 'articulos';
    protected $primaryKey = 'id';

    protected $fillable = [
		'id',  'nombre', 'description', 'precio', 'cantidad', 'User_Id'
	];

}
