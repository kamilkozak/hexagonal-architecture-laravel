<?php

namespace Src\Room\Infrastructure\Repositories;

use Src\Room\Domain\Contracts\RoomRepository as RoomRepositoryContract;
use Src\Room\Domain\Models\Room;

class RoomRepository implements RoomRepositoryContract
{
    public function findRoomById(int $id): ?Room
    {
        return Room::find($id);
    }
}
