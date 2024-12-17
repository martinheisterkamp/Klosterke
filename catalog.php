<?php
$minQuality = 0;
$maxQuality = 50;
$qualityBBQ = 80; // BBQ has a static quality of 80

$products = array(
    array(
        "id" => 1,
        "name" => "Franziskaner",
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
        "id" => 2,
        "name" => "La Trappe Blond",
        "quality" => 35,
        "decay" => array(
            "default" => 1
        ),
        "categoryId" => 1,
        "subcategoryId" => 3,
        "supplierId" => 2
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
        "categoryId" => 2,
        "subcategoryId" => 1,
        "supplierId" => 3
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
        "supplierId" => 3
    ),
    array(
        "id" => 5,
        "name" => "Nostradamus' Foresight Burger",
        "quality" => $maxQuality,
        "categoryId" => 3,
        "subcategoryId" => 1,
        "supplierId" => 4
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
            array(
                "id" => 8,
                "name" => "Amber"
            ),
            array(
                "id" => 9,
                "name" => "Bock"
            )
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
        "name" => "Franziskaner-Brauerei",
        "contact" => "info@franziskaner-weissbier.de",
        "city" => "München"
    ),
    array(
        "id" => 2,
        "name" => "Brouwerij de Koningshoeven",
        "contact" => "info@latrappe.nl",
        "city" => "Berkel-Enschot"
    ),
    array(
        "id" => 3,
        "name" => "La Bodega",
        "contact" => "info@labodega.nl",
        "city" => "Tilburg",
    ),
    array(
        "id" => 4,
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
