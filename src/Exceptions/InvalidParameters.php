<?php

namespace BernskioldMedia\Harvest\Exceptions;

use Exception;

class InvalidParameters extends Exception
{

    public static function relatedModelNotSpecified(): static
    {
        return new static('There was no related object ID specified. You must provide a related object ID before calling this endpoint.');
    }

}
