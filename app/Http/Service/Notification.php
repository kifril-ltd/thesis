<?php

namespace App\Http\Service;

use JetBrains\PhpStorm\ArrayShape;
use JetBrains\PhpStorm\Pure;

class Notification
{
    private string $type;
    private string $caption;
    private string $text;

    public function __construct(string $text, string $caption = '', string $type = '')
    {
        $this->type = $type;
        $this->caption = $caption;
        $this->text = $text;
    }

    #[Pure] #[ArrayShape(["type" => "string", "caption" => "string", "text" => "string"])] public function
    toArray(): array
    {
        return [
            "type" => $this->getType(),
            "caption" => $this->getCaption(),
            "text" => $this->getText(),
        ];
    }

    /**
     * @return string
     */
    public function getCaption(): string
    {
        return $this->caption;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
}
