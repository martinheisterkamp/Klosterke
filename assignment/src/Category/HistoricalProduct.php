<?php

namespace App\Category;

class HistoricalProduct extends AbstractProduct
{
    protected int $quality_floor = 0;
    protected int $quality_ceiling = 80;
}
