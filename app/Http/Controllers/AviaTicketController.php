<?php

namespace App\Http\Controllers;

use App\Http\Requests\AviaTicketRequest;
use App\Repositories\CityRepository;
use App\Services\AviaTicketService;
use Illuminate\Http\Request;

class AviaTicketController extends Controller
{
    private CityRepository $cityRepository;
    private AviaTicketService $aviaTicketService;
    public function __construct(
        CityRepository $cityRepository,
        AviaTicketService $aviaTicketService
    )
    {
        $this->cityRepository = $cityRepository;
        $this->aviaTicketService = $aviaTicketService;
    }

    public function index(){
        $cities = $this->cityRepository->getAll();
        return view('avia-ticket/index')->with([
            'cities' => $cities
        ]);
    }
    public function find(AviaTicketRequest $request){
        $data = $request->validated();
        dd($this->aviaTicketService->getTickets($data['departure_city'], $data['arrival_city'], $data['departure_date']));
    }
}
