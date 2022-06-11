<?php

namespace App\Repositories\Interfaces;

interface BoilerRoomExpendituresRepositoryInterface
{
    public function getExpendituresByMunicipality($municipality, $startYear, $endYear, $types);

    public function getTotalExpendituresForBoilerRoom($boilerRoom, $startYear, $endYear, $types);

    public function getTotalExpendituresByCategory($municipality, $startYear, $endYear, $types);
}
