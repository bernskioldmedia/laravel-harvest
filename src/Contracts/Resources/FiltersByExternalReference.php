<?php

namespace BernskioldMedia\Harvest\Contracts\Resources;

trait FiltersByExternalReference
{
    public function externalReference(string $reference): static
    {
        $this->query['external_reference_id'] = $reference;

        return $this;
    }
}
