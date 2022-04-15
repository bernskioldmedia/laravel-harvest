<?php

namespace BernskioldMedia\Harvest\Resources;

use BernskioldMedia\Harvest\Contracts\Resources\Createable;
use BernskioldMedia\Harvest\Contracts\Resources\Deleteable;
use BernskioldMedia\Harvest\Contracts\Resources\Readable;
use BernskioldMedia\Harvest\Contracts\Resources\Updateable;

class EstimateItemCategory extends BaseResource
{
    use Readable;
    use Createable;
    use Updateable;
    use Deleteable;

    protected function getEndpoint(): string
    {
        return 'estimate_item_categories';
    }
}
