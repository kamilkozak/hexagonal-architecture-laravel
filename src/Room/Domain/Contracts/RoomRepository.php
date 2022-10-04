<?php

namespace Src\Room\Domain\Contracts;

use Src\Room\Domain\Models\Room;

interface RoomRepository
{
    public function findRoomById(int $id): ?Room;
}
