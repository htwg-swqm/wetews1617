<?php
/**
 * Created by PhpStorm.
 * User: meiglspe
 * Date: 19/09/16
 * Time: 10:23
 */

namespace App;


class PlantLocation
{
    private $description;

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

}