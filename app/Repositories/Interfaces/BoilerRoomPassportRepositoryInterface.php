<?php

namespace App\Repositories\Interfaces;

interface BoilerRoomPassportRepositoryInterface
{
    public function getTitlePageInformation($boilerRoomId);

    public function getTechSpecPageInformation($boilerRoomId);

    public function getHeatingNetworkPageInformation($boilerRoomId);
}
