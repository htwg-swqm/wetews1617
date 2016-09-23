<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Species extends Model
{
    protected $fillable = array('latin_name', 'german_name', 'description', 'site', 'care');

    public function images()
    {
        return $this->hasMany('App\SpeciesImage');
    }

    public function getShortDescription()
    {
        return substr($this->description, 0, 60);
    }

    public function scopeFilterbyRequest($query, Request $request)
    {
        if ($request->has('german_name')) {
            $query->where("german_name", "like", "%$request->german_name%");
        }
        if ($request->has('latin_name')) {
            $query->where("latin_name", "like", "%$request->latin_name%");
        }
        if ($request->has('description')) {
            $query->where("description", "like", "%$request->description%");
        }
        return $query;
    }
}
