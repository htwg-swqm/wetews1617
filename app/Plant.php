<?php
/**
 * Created by PhpStorm.
 * User: meiglspe
 * Date: 19/09/16
 * Time: 10:22
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plant extends Model
{
    private $description;

    private $plantLocation;

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getPlantLocation()
    {
        return $this->plantLocation;
    }

    /**
     * @param mixed $plantLocation
     */
    public function setPlantLocation($plantLocation)
    {
        $this->plantLocation = $plantLocation;
    }
}