<?php

namespace BernskioldMedia\Harvest\Resources;

use BernskioldMedia\Harvest\Contracts\Resources\Createable;
use BernskioldMedia\Harvest\Contracts\Resources\Deleteable;
use BernskioldMedia\Harvest\Contracts\Resources\FiltersByDates;
use BernskioldMedia\Harvest\Contracts\Resources\FiltersClient;
use BernskioldMedia\Harvest\Contracts\Resources\FiltersProject;
use BernskioldMedia\Harvest\Contracts\Resources\Readable;
use BernskioldMedia\Harvest\Contracts\Resources\Updateable;
use BernskioldMedia\Harvest\Contracts\Resources\WithInvoiceStates;

class Invoice extends BaseResource
{
    use Readable;
    use Createable;
    use Updateable;
    use Deleteable;

    use FiltersClient;
    use FiltersProject;
    use FiltersByDates;
    use WithInvoiceStates;

    /**
     * Marks a draft invoice as sent.
     */
    public function send(int $invoiceId): object
    {
        return $this->client->post($this->getEndpoint()."/$invoiceId/messages", [
            'event_type' => 'send',
        ]);
    }

    /**
     * Marks the invoice as closed.
     */
    public function close(int $invoiceId): object
    {
        return $this->client->post($this->getEndpoint()."/$invoiceId/messages", [
            'event_type' => 'close',
        ]);
    }

    /**
     * Re-opens a closed invoice and marks it as open.
     */
    public function reopen(int $invoiceId): object
    {
        return $this->client->post($this->getEndpoint()."/$invoiceId/messages", [
            'event_type' => 're-open',
        ]);
    }

    /**
     * Marks an open invoice as draft.
     */
    public function makeDraft(int $invoiceId): object
    {
        return $this->client->post($this->getEndpoint()."/$invoiceId/messages", [
            'event_type' => 'draft',
        ]);
    }

    protected function getEndpoint(): string
    {
        return 'invoices';
    }
}
