<?php

namespace BernskioldMedia\Harvest;

use Illuminate\Support\Facades\Http;

class HarvestClient extends ApiClient
{
    public function __construct(
        private string $accountId,
        private string $accessToken,
        private string $userAgent,
        private string $baseUrl
    ) {
        $this->request = Http::withToken($this->accessToken)
            ->withHeaders([
                'Harvest-Account-ID' => $this->accountId,
            ])
            ->withUserAgent($this->userAgent)
            ->baseUrl($this->baseUrl);
    }
}
