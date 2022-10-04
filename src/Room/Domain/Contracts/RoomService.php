<?php

namespace Src\Room\Domain\Contracts;

use Src\Room\Domain\Contracts\DataTransferObjects\RoomDto;

interface RoomService
{
    public function getRoomById(int $id): RoomDto;
}
