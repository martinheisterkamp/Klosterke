<?php
namespace App\Common; 

class Company
{
    public function __construct(
        private string $name,
        private string $description,
        private string $city,
    ) {}
}
