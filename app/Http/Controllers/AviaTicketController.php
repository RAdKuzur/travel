<?php

namespace App\Http\Controllers;

use App\Http\Requests\AviaTicketRequest;
use App\Repositories\CityRepository;
use Illuminate\Http\Request;

class AviaTicketController extends Controller
{
    private CityRepository $cityRepository;
    public function __construct(
        CityRepository $cityRepository
    )
    {
        $this->cityRepository = $cityRepository;
    }

    public function index(){
        $cities = $this->cityRepository->getAll();
        return view('avia-ticket/index')->with([
            'cities' => $cities
        ]);
    }
    public function find(AviaTicketRequest $request){

    }
}
