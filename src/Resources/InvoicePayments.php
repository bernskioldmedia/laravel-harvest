<?php

namespace BernskioldMedia\Harvest\Resources;

use BernskioldMedia\Harvest\Contracts\Resources\Createable;
use BernskioldMedia\Harvest\Contracts\Resources\Deleteable;
use BernskioldMedia\Harvest\Contracts\Resources\Readable;
use BernskioldMedia\Harvest\Contracts\Resources\RelatesToInvoice;
use BernskioldMedia\Harvest\Exceptions\InvalidParameters;

class InvoicePayments extends BaseResource
{
    use Readable;
    use Createable;
    use Deleteable;

    use RelatesToInvoice;

    protected function getEndpoint(): string
    {
        if ($this->invoiceId === 0) {
            throw InvalidParameters::relatedModelNotSpecified();
        }

        return "invoices/$this->invoiceId/payments";
    }
}
