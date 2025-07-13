<?php

namespace App\Repositories;

use App\Models\Country;

class CountryRepository
{
    public function get($id){
        return Country::find($id);
    }
    public function getAll(){
        return Country::all();
    }
}
