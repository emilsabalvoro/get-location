<?php

namespace App\Interfaces;

interface LocationRepositoryInterface
{
    public function getData($name, $latitude, $longitude);
}