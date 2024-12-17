<?php

namespace App\Category;

class DecayingProduct extends AbstractProduct
{
    private int $initial_decay_rate = 1;
    protected int $expired_decay_rate = 1;

    public function tick(int $amount = 1): void
    {
        for ($i = 0; $i < $amount; $i++) {
            parent::tick();

            if ($this->expires_in < 1) {
                $this->quality -= $this->expired_decay_rate;
            } else {
                $this->quality -= $this->initial_decay_rate;
            }
        }

        $this->assertQuality();
    }
}
