<?php

namespace BernskioldMedia\Harvest;

class Forecast
{
    public function __construct(
        public ForecastClient $client,
    ) {
    }

}
