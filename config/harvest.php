<?php
// config for BernskioldMedia/Harvest
return [

    /**
     * The API key used for authenticating with the Harvest API.
     */
    'api_key' => env('HARVEST_API_KEY', ''),

    /**
     * The Account ID number from Harvest that you want to use.
     */
    'account_id' => env('HARVEST_ACCOUNT_ID', ''),

    /**
     * The user agent (application name) is sent through to
     * Harvest so that they can identify who requests come from.
     */
    'application_name' => env('HARVEST_APP_NAME', env('APP_NAME')),

    /**
     * The contact e-mail address for the application is required
     * so that Harvest can get in touch for any reason.
     */
    'application_email' => env('HARVEST_APP_EMAIL', ''),

    /**
     * The Base URL for the Harvest API including the version.
     * This package currently only supports V2 of the API.
     */
    'base_url' => env('HARVEST_API_URL', 'https://api.harvestapp.com/v2'),

    /**
     * We support the undocumented API from Forecast
     * which is a "companion" app to Harvest.
     */
    'forecast' => [

        /**
         * The Account ID number from Forecast that you want to use.
         */
        'account_id' => env('FORECAST_ACCOUNT_ID', ''),

        /**
         * The Base URL for the Harvest API including the version.
         * This package currently only supports V2 of the API.
         */
        'base_url' => env('FORECAST_API_URL', 'https://api.forecastapp.com'),

    ],

];
