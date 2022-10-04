<?php

namespace Src\Room\Domain\Contracts\DataTransferObjects;

class RoomDto
{
    public function __construct(
        public readonly int $id,
        public readonly int $price,
    )
    {
    }
}
