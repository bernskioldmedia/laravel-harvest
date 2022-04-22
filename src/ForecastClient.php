<?php

namespace BernskioldMedia\Harvest;

use Illuminate\Support\Facades\Http;

class ForecastClient extends ApiClient
{
    public function __construct(
        private string $accountId,
        private string $accessToken,
        private string $userAgent,
        private string $baseUrl
    ) {
        $this->request = Http::withToken($this->accessToken)
            ->withHeaders([
                'Forecast-Account-ID' => $this->accountId,
            ])
            ->withUserAgent($this->userAgent)
            ->baseUrl('https://api.forecastapp.com');
    }
}
