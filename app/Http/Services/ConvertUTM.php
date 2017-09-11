<?php

namespace App\Http\Services;

class ConvertUTM
{

    private $gPoint;

    public function __construct(gPoint $gPoint)
    {
        $this->gPoint = $gPoint;
    }

    public function index($leste,$norte){
        $point = $this->gPoint;
        $point->setUTM($leste,$norte,23);
        $point->convertTMtoLL();
        $lat = $point->lat() - 0.0003;;
        $long = $point->long() - 0.0004;
        return ['lat'=>$lat,'long'=>$long];
    }

}