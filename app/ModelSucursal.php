<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelSucursal extends Model
{
    protected $table="sucursales";
    protected $primaryKey="id_sucursal";

    protected $fillable=["Nombre","Direccion","CP","Ciudad","Telefono"];
    

}
