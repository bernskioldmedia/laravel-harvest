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
            ->baseUrl($this->baseUrl);
    }

    public static function fromConfig(array $config): static
    {
        $userAgent = $config['application_name'].' <'.$config['application_email'].'>';

        return (new static($config['forecast']['account_id'], $config['api_key'], $userAgent,
            $config['forecast']['base_url']));
    }
}
