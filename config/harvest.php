<?php
// config for BernskioldMedia/LaravelHarvest
return [

    /**
     * The API key used for authenticating with the LaravelHarvest API.
     */
    'api_key' => env('HARVEST_API_KEY', ''),

    /**
     * The Account ID number from LaravelHarvest that you want to use.
     */
    'account_id' => env('HARVEST_ACCOUNT_ID', ''),

    /**
     * The user agent (application name) is sent through to
     * LaravelHarvest so that they can identify who requests come from.
     */
    'application_name' => env('HARVEST_APP_NAME', env('APP_NAME')),

    /**
     * The contact e-mail address for the application is required
     * so that LaravelHarvest can get in touch for any reason.
     */
    'application_email' => env('HARVEST_APP_EMAIL', ''),

    /**
     * The Base URL for the Harvest API including the version.
     * This package currently only supports V2 of the API.
     */
    'base_url' => env('HARVEST_API_URL', 'https://api.harvestapp.com/v2'),

];
