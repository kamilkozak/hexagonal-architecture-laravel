<?php

namespace Src\Room\Domain\Services;

use Src\Room\Domain\Contracts\DataTransferObjects\RoomDto;
use Src\Room\Domain\Contracts\Exceptions\RoomNotFoundException;
use Src\Room\Domain\Contracts\RoomRepository;
use Src\Room\Domain\Contracts\RoomService as RoomServiceContract;

class RoomService implements RoomServiceContract
{
    public function __construct(private RoomRepository $roomRepository)
    {
    }

    /**
     * @throws RoomNotFoundException
     */
    public function getRoomById(int $id): RoomDto
    {
        $room = $this->roomRepository->findRoomById($id);

        if (! $room) {
            throw new RoomNotFoundException($id);
        }

        return new RoomDto(
            $room->id,
            $room->price,
        );
    }
}
