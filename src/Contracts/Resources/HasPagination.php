<?php

namespace BernskioldMedia\Harvest\Contracts\Resources;

trait HasPagination
{

    public function page(int $page): static
    {
        $this->query['page'] = $page;

        return $this;
    }

    public function perPage(int $perPage): static
    {
        $this->query['per_page'] = $perPage;

        return $this;
    }

}
