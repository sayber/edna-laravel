<?php


namespace Edna\Services;


use Edna\Collections\EdnaImOutMessageCollection;
use Illuminate\Support\Facades\Http;

class EdnaSendMessageService
{
    public function send(EdnaImOutMessageCollection $collection)
    {
        $http = Http::withHeaders([
            'X-API-KEY' => config('edna.apikey')
        ])->post(config('edna.uri').'/imOutMessage', $collection->toArray());

        dd($http->status(), $http->json());

    }

}
