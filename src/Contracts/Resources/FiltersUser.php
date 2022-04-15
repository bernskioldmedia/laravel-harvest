<?php

namespace BernskioldMedia\Harvest\Contracts\Resources;

trait FiltersUser
{
    public function user(int $userId): static
    {
        $this->query['user_id'] = $userId;

        return $this;
    }
}
