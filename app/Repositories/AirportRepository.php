<?php

namespace App\Repositories;

use App\Models\Airport;

class AirportRepository
{
    public function get($id)
    {
        return Airport::find($id);
    }
    public function getAll(){
        return Airport::all();
    }
    public function getByCode($code)
    {
        return Airport::where(['code' => $code])->get();
    }
    public function getByCity($cityId)
    {
        return Airport::where(['city_id' => $cityId])->get();
    }
}
