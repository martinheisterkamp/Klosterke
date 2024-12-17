<?php
/* 50 quality is too little to show that, when whine flourishes, the quality will increase by 25 when it flourishes in the last 10 days.
* In the assignment description, it is said that the pub only uses high quality products...
* Therefore I will allow high quality wine to increment past 50, to show the effects of flourishing.
*/

$minQuality = 0;
$maxQuality = 80; // BBQ has a static quality of 80

$products = array(
    array(
        "id" => 1,
        "name" => "La Trappe Puur",
        "quality" => 30,
        "decay" => array(
            "default" => 1,
            "expired" => 2
        ),
        "categoryId" => 2,
        "subcategoryId" => 1,
        "supplierId" => 1
    ),
    array(
        "id" => 2,
        "name" => "La Trappe Blond",
        "quality" => 35,
        "decay" => array(
            "default" => 1
        ),
        "categoryId" => 1,
        "subcategoryId" => 3,
        "supplierId" => 1
    ),
    array(
        "id" => 3,
        "name" => "Merlot",
        "quality" => 40,
        "flourish" => array(
            "default" => 1,
            "daysRemaining" => array(
                10 => 2,
                5 => 3
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
            "default" => 1,
            "daysRemaining" => array(
                10 => 2,
                5 => 3
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
                "name" => "Brown"
            ),
            array(
                "id" => 2,
                "name" => "White"
            ),
            array(
                "id" => 3,
                "name" => "Blonde"
            ),
            array(
                "id" => 4,
                "name" => "Triple"
            ),
            array(
                "id" => 5,
                "name" => "Quadruple"
            ),
            array(
                "id" => 6,
                "name" => "IPA"
            ),
            array(
                "id" => 7,
                "name" => "Pilsner"
            ),
        )
    ),
    array(
        "id" => 2,
        "type" => "Quickly decaying",
        "subcategories" => array(
            array(
                "id" => 1,
                "name" => "Amber"
            ),
            array(
                "id" => 2,
                "name" => "Bock"
            )
        )
    ),
    array(
        "id" => 3,
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
        "id" => 4,
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
        "name" => "Brouwerij de Koningshoeven",
        "contact" => "info@latrappe.nl",
        "city" => "Berkel-Enschot"
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
    "description" => "Traditional Dutch pub",
    "city" => "Den Hout"
);
