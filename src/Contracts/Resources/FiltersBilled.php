<?php

namespace BernskioldMedia\Harvest\Contracts\Resources;

trait FiltersBilled
{

    public function onlyBilled(bool $billed = true): static
    {
        $this->query['is_billed'] = $billed;

        return $this;
    }

    public function onlyUnbilled(): static
    {
        $this->query['is_billed'] = false;

        return $this;
    }

}
