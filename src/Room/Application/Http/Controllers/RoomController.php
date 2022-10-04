<?php

namespace Src\Room\Application\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Src\Room\Application\Http\Resources\RoomResource;
use Src\Room\Domain\Models\Room;

class RoomController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        $products = Room::paginate(10);

        return RoomResource::collection($products);
    }
}
