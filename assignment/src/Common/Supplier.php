<?php

namespace App\Common;

class Supplier
{
    public function __construct(
        private int $id,
        private string $name,
        private string $contact,
        private string $city
    ) {}
}
