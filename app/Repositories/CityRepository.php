<?php

namespace App\Repositories;

use App\Models\City;

class CityRepository
{
    public function get($id)
    {
        return City::find($id);
    }
    public function getAll(){
        return City::all();
    }
    public function getByCountryId($id){
        return City::where(['country_id' => $id])->get();
    }
}
