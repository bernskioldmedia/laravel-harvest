<?php

namespace BernskioldMedia\Harvest\Exceptions;

use Exception;

class InvalidConfiguration extends Exception
{

    public static function noApiKey(): static
    {
        return new static('No Harvest API key set. You must set HARVEST_API_KEY for the Harvest API to work.');
    }

    public static function noAccountId(): static
    {
        return new static('No Harvest Account ID set. You must set HARVEST_ACCOUNT_ID for the Harvest API to work.');
    }

    public static function noApplicationEmail(): static
    {
        return new static('No application email set. You must set HARVEST_APP_EMAIL when using the Harvest API so that Harvest can get in touch if necessary.');
    }

    public static function noApplicationName(): static
    {
        return new static('No application name provided. The HARVEST_APP_NAME variable must not be empty when using the Harvest API.');
    }

    public static function emptyBaseUrl(): static
    {
        return new static('The Harvest base url was empty. Please make sure that HARVEST_API_URL is a valid and non-empty URL string.');
    }

}
