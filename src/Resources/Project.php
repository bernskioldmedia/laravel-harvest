<?php

namespace BernskioldMedia\Harvest\Resources;

use BernskioldMedia\Harvest\Contracts\Resources\Createable;
use BernskioldMedia\Harvest\Contracts\Resources\Deleteable;
use BernskioldMedia\Harvest\Contracts\Resources\FiltersActive;
use BernskioldMedia\Harvest\Contracts\Resources\FiltersClient;
use BernskioldMedia\Harvest\Contracts\Resources\Readable;
use BernskioldMedia\Harvest\Contracts\Resources\Updateable;

class Project extends BaseResource
{
    use Readable;
    use Createable;
    use Updateable;
    use Deleteable;

    use FiltersActive;
    use FiltersClient;

    public function users(int $projectId): object
    {
        return $this->client->get($this->getEndpoint().'/'.$projectId.'/user_assignments', $this->query);
    }

    public function user(int $projectId, int $userId): object
    {
        return $this->client->get($this->getEndpoint().'/'.$projectId.'/user_assignments/'.$userId, $this->query);
    }

    public function addUser(int $projectId, array $data): object
    {
        return $this->client->post($this->getEndpoint().'/'.$projectId.'/user_assignments', $data);
    }

    public function updateUser(int $projectId, int $userId, array $data): object
    {
        return $this->client->patch($this->getEndpoint().'/'.$projectId.'/user_assignments/'.$userId, $data);
    }

    public function removeUser(int $projectId, int $userId): bool
    {
        return $this->client->delete($this->getEndpoint().'/'.$projectId.'/user_assignments/'.$userId);
    }

    protected function getEndpoint(): string
    {
        return 'projects';
    }
}
