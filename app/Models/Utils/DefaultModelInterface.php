<?php

namespace App\Models\Utils;

interface DefaultModelInterface
{
    public function getPrimaryKey(): string;
    public static function resource(): string;
}
