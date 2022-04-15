<?php

namespace BernskioldMedia\Harvest;

use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Facades\Http;

class HarvestClient
{
    public PendingRequest $request;

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

    public static function fromConfig(array $config): static
    {
        $userAgent = $config['application_name'].' <'.$config['application_email'].'>';

        return (new static($config['account_id'], $config['api_key'], $userAgent, $config['base_url']));
    }

    public function get(string $endpoint, array $query = []): object
    {
        return $this->request
            ->get($endpoint, $query)
            ->throw()
            ->object();
    }

    public function post(string $endpoint, array $data = []): object
    {
        return $this->request
            ->post($endpoint, $data)
            ->throw()
            ->object();
    }

    public function patch(string $endpoint, array $data = []): object
    {
        return $this->request
            ->patch($endpoint, $data)
            ->throw()
            ->object();
    }

    public function delete(string $endpoint, array $data = []): bool
    {
        return $this->request
            ->delete($endpoint, $data)
            ->throw()
            ->ok();
    }
}
