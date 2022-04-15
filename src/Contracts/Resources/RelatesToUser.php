<?php

namespace BernskioldMedia\Harvest\Contracts\Resources;

trait RelatesToUser
{
    public int $userId = 0;

    public function user(int $userId): static
    {
        $this->userId = $userId;

        return $this;
    }
}
