<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Arbol extends Model
{
    protected $table = 'arboles';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    public function species()
    {
        return $this->belongsTo('App\Models\Especie', 'especie_id');
    }

    public function records()
    {
        return $this->hasMany('App\Models\Registro', 'arbol_id')->orderBy('fecha_creacion', 'desc');
    }
}
