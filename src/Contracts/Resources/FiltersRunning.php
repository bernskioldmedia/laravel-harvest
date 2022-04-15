<?php

namespace BernskioldMedia\Harvest\Contracts\Resources;

trait FiltersRunning
{
    public function running(bool $running = true): static
    {
        $this->query['is_running'] = $running ? 'true' : 'false';

        return $this;
    }

    public function notRunning(): static
    {
        $this->query['is_running'] = 'false';

        return $this;
    }
}
