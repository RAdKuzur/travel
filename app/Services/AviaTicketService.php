<?php

namespace App\Services;

class AviaTicketService
{
    public const URL_CHEAP_TOKEN = 'https://api.travelpayouts.com/v1/prices/cheap?';
    private ApiService $apiService;
    public function __construct(
        ApiService $apiService
    )
    {
        $this->apiService = $apiService;
    }
    public function getTickets($departureCity, $arrivalCity, $date){
        $response = $this->apiService->get(self::URL_CHEAP_TOKEN, [
            'origin' => $departureCity,
            'destination' => $arrivalCity,
            'depart_date' => $date
        ], [
            'x-access-token' => $_ENV['AVIASALES_API_TOKEN']
        ]);
        return $response;
    }
}
