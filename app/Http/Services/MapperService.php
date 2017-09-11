<?php

namespace App\Http\Services;


use Cornford\Googlmapper\Mapper;

class MapperService
{
    /**
     * @var gPoint
     */
    private $mapper;
    /**
     * @var ConvertUTM
     */
    private $convertUTM;

    public function __construct(Mapper $mapper, ConvertUTM $convertUTM)
    {
        $this->mapper = $mapper;
        $this->convertUTM = $convertUTM;
    }

    public function index($lat,$long){

        $coords = $this->convertUTM->index($lat,$long);
        $this->mapper->setKey('AIzaSyDCztHZCW57oPkGtBEBfibUeGDiwCaCnsg');
        $this->mapper->map($coords['lat'], $coords['long']);

    }

}