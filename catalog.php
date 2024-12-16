<?php
/* 50 quality is too little to show that, with 10 days remaining (5*2=10) + 5 days remaining (5*3=15) an increment of 25 will happen for wines.
* In the assignment description, it is said that the pub only uses high quality products...
* Therefore I picked the max quality of 50 and added 25 for it in case a wine starts with the "given max quality".
*/

$minQuality = 0;
$maxQuality = 75;
$givenMaxQuality = 50; 

$products = array(
    array(
        "id" => 1,
        "name" => "La Trappe Puur",
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
        "name" => "La Trappe Witte Trappist",
        "quality" => 30,
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
        "name" => "La Trappe Blond",
        "quality" => 35,
        "decay" => array(
            "default" => 1,
            "expired" => 2
        ),
        "categoryId" => 1,
        "subcategoryId" => 3,
        "supplierId" => 1
    ),
    array(
        "id" => 4,
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
        "id" => 5,
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
        "id" => 6,
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
                "name" => "Amber"
            ),
            array(
                "id" => 3,
                "name" => "Bock"
            ),
            array(
                "id" => 4,
                "name" => "White"
            ),
            array(
                "id" => 5,
                "name" => "Blonde"
            ),
            array(
                "id" => 6,
                "name" => "Triple"
            ),
            array(
                "id" => 7,
                "name" => "Quadruple"
            ),
            array(
                "id" => 8,
                "name" => "IPA"
            ),
            array(
                "id" => 9,
                "name" => "Pilsner"
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