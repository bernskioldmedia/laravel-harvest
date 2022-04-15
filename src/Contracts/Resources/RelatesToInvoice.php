<?php

namespace BernskioldMedia\Harvest\Contracts\Resources;

trait RelatesToInvoice
{

    public int $invoiceId = 0;

    public function invoice(int $invoiceId): static
    {
        $this->invoiceId = $invoiceId;

        return $this;
    }

}
