<?php

namespace App\Services;

class AviaTicketService
{

    private ApiService $apiService;
    public function __construct(
        ApiService $apiService
    )
    {
        $this->apiService = $apiService;
    }
    public function getTickets($departureCity, $arrivalCity, $date){
    }
}
