<?php

namespace App\Category;

class FlourishingProduct extends AbstractProduct
{

    public function tick(int $amount = 1): void
    {
        for ($i = 0; $i < $amount; $i++) {
            parent::tick();

            /* Quality of wine increases normally */
            if($this->expires_in > 10) $this->quality += 1;

            /* Quality of wine increases by two every day, when there are 10 days left */
            if ($this->expires_in <= 10 && $this->expires_in >= 6) $this->quality += 2;

            /* Quality of wine increases by three every day, when there are 5 days left */
            if ($this->expires_in <= 5 && $this->expires_in >= 1) $this->quality += 3;

            /* Quality of wine tanks after expired */
            if($this->expires_in <= 0) {
                $this->quality = $this->quality_floor;
            }
        }

        $this->assertQuality();
    }
}
