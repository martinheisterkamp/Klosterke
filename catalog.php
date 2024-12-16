<?php
$minQuality = 0;
$maxQuality = 50;

$products = array(
    array(
        "id" => 1,
        "name" => "Beer",
        "quality" => 30,
        "decay" => array(
            "default" => 1,
            "expired" => 2
        ),
        "categoryId" => 1,
        "subcategoryId" => 1,
        "supplierId" => 1
    ),
    array(
        "id" => 2,
        "name" => "Abbey beer",
        "quality" => 35,
        "decay" => array(
            "default" => 1,
            "expired" => 2
        ),
        "categoryId" => 1,
        "subcategoryId" => 2,
        "supplierId" => 1
    ),
    array(
        "id" => 3,
        "name" => "Merlot",
        "quality" => 40,
        "flourish" => array(
            "default" => -1,
            "daysRemaining" => array(
                10 => -2,
                5 => -3
            )
        ),
        "categoryId" => 1,
        "subcategoryId" => 1,
        "supplierId" => 2
    ),
    array(
        "id" => 4,
        "name" => "Chardonnay",
        "quality" => 35,
        "flourish" => array(
            "default" => -1,
            "daysRemaining" => array(
                10 => -2,
                5 => -3
            )
        ),
        "categoryId" => 2,
        "subcategoryId" => 2,
        "supplierId" => 2
    ),
    array(
        "id" => 5,
        "name" => "Nostradamus' Foresight Burger",
        "quality" => $maxQuality,
        "categoryId" => 3,
        "subcategoryId" => 1,
        "supplierId" => 3
    )
);

$categories = array(
    array(
        "id" => 1,
        "type" => "Decaying",
        "subcategories" => array(
            array(
                "id" => 1,
                "name" => "Beer"
            ),
            array(
                "id" => 2,
                "name" => "Abbey beer"
            ),
        )
    ),
    array(
        "id" => 2,
        "type" => "Flourishing",
        "subcategories" => array(
            array(
                "id" => 1,
                "name" => "Red wine"
            ),
            array(
                "id" => 2,
                "name" => "White wine"
            ),
        )
    ),
    array(
        "id" => 3,
        "type" => "Historical",
        "subcategories" => array(
            array(
                "id" => 1,
                "name" => "BBQ"
            )
        )
    )
);

$suppliers = array(
    array(
        "id" => 1,
        "name" => "Brouwerij Bravoure",
        "contact" => "info@bravoure.nl",
        "city" => "Etten-Leur"
    ),
    array(
        "id" => 2,
        "name" => "La Bodega",
        "contact" => "info@labodega.nl",
        "city" => "Tilburg",
    ),
    array(
        "id" => 3,
        "name" => "Heyde Hoeve",
        "contact" => "info@heydehoeve.nl",
        "city" => "Nuenen"
    )
);

$company = array(
    "name" => "Herberg 't Klosterke",
    "city" => "Den Hout",
    "description" => "Traditional Dutch pub"
);