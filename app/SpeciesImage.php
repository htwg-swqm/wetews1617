<?php
/**
 * Created by PhpStorm.
 * User: meiglspe
 * Date: 23/09/16
 * Time: 14:43
 */

namespace App;

use Illuminate\Database\Eloquent\Model;


class SpeciesImage extends Model
{
    protected $fillable = array('url','species_id');

    protected $table = "species_images";

    public function species() {
        return $this->belongsTo('Species');
    }
}