CREATE DATABASE `afvalophaalservice`;

USE `afvalophaalservice`;


CREATE TABLE `afvalsoort`(
    itemid MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    soort VARCHAR(120) NOT NULL,
    gewicht FLOAT NOT NULL,
    startprijs DECIMAL NOT NULL,
    prijs_per_kub DECIMAL NOT NULL,
    extra VARCHAR(20)
);


USE `afvalophaalservice`;



INSERT INTO
    `afvalsoort` (
        `soort`,
        `gewicht`,
        `startprijs`,
        `prijs_per_kub`,
        `extra`
    )
values
    (
        'los afval',
        1,
        125,
        49,
        ""
    ),
    (
        '2 zitsbank',
        1,
        125,
        49,
        ""
    ),
    (
        '3-4 zitsbank',
        2,
        125,
        49,
        ""
    ),
    (
        'fauteuil',
        0.5,
        125,
        49,
        ""
    ),
    (
        'eetkamerstoel',
        0.17,
        125,
        49,
        ""
    ),
    (
        'eetkamertafel',
        1,
        125,
        49,
        ""
    ),
    (
        'grote kast',
        2,
        125,
        49,
        ""
    ),
    (
        'kleine kast',
        1,
        125,
        49,
        ""
    ),
    (
        'bureau',
        1,
        125,
        49,
        ""
    ),
    (
        'bureaustoel',
        0.17,
        125,
        49,
        ""
    ),
    (
        '1 persoons bed',
        0.5,
        150,
        74,
        "per stuk"
    ),
    (
        '2 persoons bed',
        1,
        175,
        99,
        "per stuk"
    ),
    (
        'boxspring',
        2,
        220,
        220,
        "per stuk"
    ),
    (
        '1 persoons matras',
        0.17,
        125,
        49,
        ""
    ),
    (
        '2 persoons matras',
        0.25,
        135,
        59,
        ""
    ),
    (
        'witgoed',
        0.5,
        125,
        49,
        ""
    ),
    (
        'amerikaanse koelkast',
        2.5,
        150,
        150,
        "per stuk"
    ),
    (
        'verhuisdoos',
        0.083,
        125,
        49,
        ""
    ),
    (
        'vuilniszak',
        0.083,
        125,
        49,
        ""
    ),
    (
        'hoekbank',
        3,
        125,
        49,
        "of 4-5 zitsbank"
        );

;
