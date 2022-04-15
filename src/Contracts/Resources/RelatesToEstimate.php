<?php

namespace BernskioldMedia\Harvest\Contracts\Resources;

trait RelatesToEstimate
{

    public int $estimateId = 0;

    public function estimate(int $estimateId): static
    {
        $this->estimateId = $estimateId;

        return $this;
    }

}
