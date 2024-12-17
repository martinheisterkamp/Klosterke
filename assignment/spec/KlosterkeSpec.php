<?php

use App\Product\Beer\Blonde\LaTrappeBlond;
use App\Product\Wine\Red\Merlot;
use App\Product\Wine\White\Chardonnay;

describe('Klosterke', function () {

    context('Beers', function () {
        context('La Trappe Blond', function () {
            it('should show normal decay', function () {
                $item = new LaTrappeBlond(expires_in: 15, quality: 35);

                $item->tick();

                expect($item->expires_in)->toBe(14);
                expect($item->quality)->toBe(34);
            });

            it('should show normal decay after expiry date', function () {
                $item = new LaTrappeBlond(expires_in: 1, quality: 35);

                $item->tick(2);

                expect($item->expires_in)->toBe(-1);
                expect($item->quality)->toBe(33);
            });
        });
    });

    context('Wines', function () {

        context('Red Wine', function () {
            it('should show normal flourish', function () {
                $item = new Merlot(expires_in: 15, quality: 35);

                $item->tick();

                expect($item->expires_in)->toBe(14);
                expect($item->quality)->toBe(36);
            });

            it('should show 10-day flourish', function () {
                $item = new Merlot(expires_in: 10, quality: 35);

                $item->tick();

                expect($item->expires_in)->toBe(9);
                expect($item->quality)->toBe(37);
            });

            it('should show 5-day flourish', function () {
                $item = new Merlot(expires_in: 5, quality: 35);

                $item->tick();

                expect($item->expires_in)->toBe(4);
                expect($item->quality)->toBe(38);
            });

            it('should show 5-day flourish, accounting for max quality', function () {
                $item = new Merlot(expires_in: 5, quality: 48);

                $item->tick();

                expect($item->expires_in)->toBe(4);
                expect($item->quality)->toBe(50);
            });

            it('should show a negative number for expiry date and consistent quality', function () {
                $item = new Merlot(expires_in: 5, quality: 48);

                $item->tick(7);

                expect($item->expires_in)->toBe(-2);
                expect($item->quality)->toBe(0);
            });
        });

        context('White Wine', function () {
            it('should show normal flourish of quality', function () {
                $item = new Chardonnay(expires_in: 15, quality: 25);

                $item->tick(amount: 4);

                expect($item->expires_in)->toBe(11);
                expect($item->quality)->toBe(29);
            });

            it('should show 6 days of 10-day flourish', function () {
                $item = new Chardonnay(expires_in: 12, quality: 25);

                $item->tick(amount: 6);

                expect($item->expires_in)->toBe(6);
                expect($item->quality)->toBe(36);
            });

            it('should show some 5-day flourish and some 10-day flourish', function () {
                $item = new Chardonnay(expires_in: 12, quality: 25);

                $item->tick(amount: 9);

                expect($item->expires_in)->toBe(3);
                expect($item->quality)->toBe(45);
            });
        });
    });

    context('BBQ', function () {});
});
