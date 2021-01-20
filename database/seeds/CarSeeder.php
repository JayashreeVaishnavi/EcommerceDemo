<?php

use App\Model\CarCompany;
use App\Model\CarModel;
use App\Model\Year;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        $cars = [
            0 => [
                0 => '1909',
                1 => 'Ford',
                2 => 'Model T',
            ],
            1 => [
                0 => '1954',
                1 => 'Chevrolet',
                2 => 'Corvette',
            ],
            2 => [
                0 => '1954',
                1 => 'Chevrolet',
                2 => 'Corvette',
            ],
            3 => [
                0 => '1955',
                1 => 'Chevrolet',
                2 => 'Corvette',
            ],
            4 => [
                0 => '1959',
                1 => 'BMW',
                2 => '600',
            ],
            5 => [
                0 => '1960',
                1 => 'Chevrolet',
                2 => 'Corvette',
            ],
            6 => [
                0 => '1962',
                1 => 'Pontiac',
                2 => 'Grand Prix',
            ],
            7 => [
                0 => '1963',
                1 => 'Ford',
                2 => 'E-Series',
            ],
            8 => [
                0 => '1963',
                1 => 'Austin',
                2 => 'Mini Cooper S',
            ],
            9 => [
                0 => '1964',
                1 => 'Pontiac',
                2 => 'GTO',
            ],
            10 => [
                0 => '1965',
                1 => 'Volkswagen',
                2 => 'Beetle',
            ],
            11 => [
                0 => '1965',
                1 => 'Pontiac',
                2 => 'Tempest',
            ],
            12 => [
                0 => '1968',
                1 => 'Pontiac',
                2 => 'GTO',
            ],
            13 => [
                0 => '1970',
                1 => 'Porsche',
                2 => '914',
            ],
            14 => [
                0 => '1971',
                1 => 'Chevrolet',
                2 => 'Vega',
            ],
            15 => [
                0 => '1971',
                1 => 'Ford',
                2 => 'Mustang',
            ],
            16 => [
                0 => '1972',
                1 => 'Ford',
                2 => 'Thunderbird',
            ],
            17 => [
                0 => '1973',
                1 => 'Chevrolet',
                2 => 'Camaro',
            ],
            18 => [
                0 => '1976',
                1 => 'Plymouth',
                2 => 'Volare',
            ],
            19 => [
                0 => '1976',
                1 => 'Volkswagen',
                2 => 'Golf',
            ],
            20 => [
                0 => '1977',
                1 => 'Mercedes-Benz',
                2 => 'W123',
            ],
            21 => [
                0 => '1978',
                1 => 'Chevrolet',
                2 => 'Camaro',
            ],
            22 => [
                0 => '1980',
                1 => 'Pontiac',
                2 => 'Grand Prix',
            ],
            23 => [
                0 => '1980',
                1 => 'Ford',
                2 => 'Thunderbird',
            ],
            24 => [
                0 => '1980',
                1 => 'Chevrolet',
                2 => 'Camaro',
            ],
            25 => [
                0 => '1981',
                1 => 'Pontiac',
                2 => 'Grand Prix',
            ],
            26 => [
                0 => '1983',
                1 => 'Mazda',
                2 => 'RX-7',
            ],
            27 => [
                0 => '1984',
                1 => 'Ford',
                2 => 'Bronco II',
            ],
            28 => [
                0 => '1984',
                1 => 'Mercury',
                2 => 'Lynx',
            ],
            29 => [
                0 => '1984',
                1 => 'Ford',
                2 => 'Bronco',
            ],
            30 => [
                0 => '1984',
                1 => 'Ford',
                2 => 'Tempo',
            ],
            31 => [
                0 => '1984',
                1 => 'Volkswagen',
                2 => 'Vanagon',
            ],
            32 => [
                0 => '1984',
                1 => 'Pontiac',
                2 => '6000',
            ],
            33 => [
                0 => '1984',
                1 => 'Volkswagen',
                2 => 'Vanagon',
            ],
            34 => [
                0 => '1984',
                1 => 'Mercedes-Benz',
                2 => 'SL-Class',
            ],
            35 => [
                0 => '1984',
                1 => 'Mitsubishi',
                2 => 'Pajero',
            ],
            36 => [
                0 => '1984',
                1 => 'Toyota',
                2 => 'Celica',
            ],
            37 => [
                0 => '1984',
                1 => 'Mercury',
                2 => 'Cougar',
            ],
            38 => [
                0 => '1985',
                1 => 'Porsche',
                2 => '928',
            ],
            39 => [
                0 => '1985',
                1 => 'Mercury',
                2 => 'Lynx',
            ],
            40 => [
                0 => '1985',
                1 => 'Ford',
                2 => 'Tempo',
            ],
            41 => [
                0 => '1985',
                1 => 'Honda',
                2 => 'Prelude',
            ],
            42 => [
                0 => '1985',
                1 => 'Mercury',
                2 => 'Topaz',
            ],
            43 => [
                0 => '1985',
                1 => 'Ford',
                2 => 'Escort',
            ],
            44 => [
                0 => '1985',
                1 => 'Ford',
                2 => 'F-Series',
            ],
            45 => [
                0 => '1985',
                1 => 'Pontiac',
                2 => '6000',
            ],
            46 => [
                0 => '1985',
                1 => 'Maserati',
                2 => 'Biturbo',
            ],
            47 => [
                0 => '1985',
                1 => 'Pontiac',
                2 => 'Parisienne',
            ],
            48 => [
                0 => '1986',
                1 => 'Porsche',
                2 => '928',
            ],
            49 => [
                0 => '1986',
                1 => 'Mitsubishi',
                2 => 'Cordia',
            ],
            50 => [
                0 => '1986',
                1 => 'Pontiac',
                2 => 'Firebird Trans Am',
            ],
            51 => [
                0 => '1986',
                1 => 'Ford',
                2 => 'Bronco II',
            ],
            52 => [
                0 => '1986',
                1 => 'Maserati',
                2 => 'Biturbo',
            ],
            53 => [
                0 => '1986',
                1 => 'Mercury',
                2 => 'Grand Marquis',
            ],
            54 => [
                0 => '1986',
                1 => 'Suzuki',
                2 => 'SJ',
            ],
            55 => [
                0 => '1986',
                1 => 'Audi',
                2 => '5000CS Quattro',
            ],
            56 => [
                0 => '1986',
                1 => 'Maserati',
                2 => 'Biturbo',
            ],
            57 => [
                0 => '1986',
                1 => 'Chevrolet',
                2 => 'Corvette',
            ],
            58 => [
                0 => '1986',
                1 => 'Volkswagen',
                2 => 'Jetta',
            ],
            59 => [
                0 => '1986',
                1 => 'Ford',
                2 => 'Bronco',
            ],
            60 => [
                0 => '1986',
                1 => 'Ford',
                2 => 'Escort',
            ],
            61 => [
                0 => '1986',
                1 => 'Volkswagen',
                2 => 'Golf',
            ],
            62 => [
                0 => '1986',
                1 => 'Mercury',
                2 => 'Lynx',
            ],
            63 => [
                0 => '1986',
                1 => 'Pontiac',
                2 => 'Firebird',
            ],
            64 => [
                0 => '1987',
                1 => 'Toyota',
                2 => 'MR2',
            ],
            65 => [
                0 => '1987',
                1 => 'Mitsubishi',
                2 => 'Pajero',
            ],
            66 => [
                0 => '1987',
                1 => 'Ford',
                2 => 'Thunderbird',
            ],
            67 => [
                0 => '1987',
                1 => 'Chevrolet',
                2 => 'Corvette',
            ],
            68 => [
                0 => '1987',
                1 => 'Volkswagen',
                2 => 'Fox',
            ],
            69 => [
                0 => '1987',
                1 => 'Acura',
                2 => 'Legend',
            ],
            70 => [
                0 => '1987',
                1 => 'Subaru',
                2 => 'XT',
            ],
            71 => [
                0 => '1987',
                1 => 'Mercury',
                2 => 'Grand Marquis',
            ],
            72 => [
                0 => '1987',
                1 => 'Audi',
                2 => '4000CS Quattro',
            ],
            73 => [
                0 => '1987',
                1 => 'Ford',
                2 => 'Thunderbird',
            ],
            74 => [
                0 => '1988',
                1 => 'Subaru',
                2 => 'XT',
            ],
            75 => [
                0 => '1988',
                1 => 'Ford',
                2 => 'Thunderbird',
            ],
            76 => [
                0 => '1988',
                1 => 'Mazda',
                2 => 'RX-7',
            ],
            77 => [
                0 => '1988',
                1 => 'Volkswagen',
                2 => 'Cabriolet',
            ],
            78 => [
                0 => '1988',
                1 => 'Mazda',
                2 => 'RX-7',
            ],
            79 => [
                0 => '1988',
                1 => 'Porsche',
                2 => '928',
            ],
            80 => [
                0 => '1988',
                1 => 'Pontiac',
                2 => 'Grand Am',
            ],
            81 => [
                0 => '1988',
                1 => 'Subaru',
                2 => 'XT',
            ],
            82 => [
                0 => '1988',
                1 => 'Mercedes-Benz',
                2 => 'E-Class',
            ],
            83 => [
                0 => '1988',
                1 => 'Ford',
                2 => 'Thunderbird',
            ],
            84 => [
                0 => '1988',
                1 => 'Pontiac',
                2 => 'LeMans',
            ],
            85 => [
                0 => '1988',
                1 => 'Volkswagen',
                2 => 'Scirocco',
            ],
            86 => [
                0 => '1989',
                1 => 'Lexus',
                2 => 'ES',
            ],
            87 => [
                0 => '1989',
                1 => 'Ford',
                2 => 'Probe',
            ],
            88 => [
                0 => '1989',
                1 => 'Dodge',
                2 => 'Colt',
            ],
            89 => [
                0 => '1989',
                1 => 'Saab',
                2 => '9000',
            ],
            90 => [
                0 => '1989',
                1 => 'Pontiac',
                2 => 'Firebird',
            ],
            91 => [
                0 => '1989',
                1 => 'Ford',
                2 => 'Courier',
            ],
            92 => [
                0 => '1989',
                1 => 'Ford',
                2 => 'Mustang',
            ],
            93 => [
                0 => '1989',
                1 => 'Chevrolet',
                2 => 'Corvette',
            ],
            94 => [
                0 => '1989',
                1 => 'Buick',
                2 => 'LeSabre',
            ],
            95 => [
                0 => '1989',
                1 => 'Volkswagen',
                2 => 'Type 2',
            ],
            96 => [
                0 => '1989',
                1 => 'Ford',
                2 => 'Bronco II',
            ],
            97 => [
                0 => '1990',
                1 => 'Ford',
                2 => 'Ranger',
            ],
            98 => [
                0 => '1990',
                1 => 'Mitsubishi',
                2 => 'L300',
            ],
            99 => [
                0 => '1990',
                1 => 'Buick',
                2 => 'Century',
            ],
            100 => [
                0 => '1990',
                1 => 'Mercury',
                2 => 'Cougar',
            ],
            101 => [
                0 => '1990',
                1 => 'Subaru',
                2 => 'XT',
            ],
            102 => [
                0 => '1990',
                1 => 'Buick',
                2 => 'Reatta',
            ],
            103 => [
                0 => '1990',
                1 => 'Pontiac',
                2 => 'Turbo Firefly',
            ],
            104 => [
                0 => '1990',
                1 => 'Suzuki',
                2 => 'Sidekick',
            ],
            105 => [
                0 => '1990',
                1 => 'Pontiac',
                2 => 'Grand Prix Turbo',
            ],
            106 => [
                0 => '1990',
                1 => 'Mercedes-Benz',
                2 => 'SL-Class',
            ],
            107 => [
                0 => '1990',
                1 => 'Mitsubishi',
                2 => 'Galant',
            ],
            108 => [
                0 => '1990',
                1 => 'Mitsubishi',
                2 => 'Eclipse',
            ],
            109 => [
                0 => '1990',
                1 => 'Pontiac',
                2 => 'Firefly',
            ],
            110 => [
                0 => '1990',
                1 => 'Porsche',
                2 => '911',
            ],
            111 => [
                0 => '1990',
                1 => 'Volkswagen',
                2 => 'Jetta',
            ],
            112 => [
                0 => '1990',
                1 => 'Ford',
                2 => 'E-Series',
            ],
            113 => [
                0 => '1990',
                1 => 'Volkswagen',
                2 => 'GTI',
            ],
            114 => [
                0 => '1990',
                1 => 'Mazda',
                2 => 'B-Series',
            ],
            115 => [
                0 => '1990',
                1 => 'Lincoln',
                2 => 'Continental Mark VII',
            ],
            116 => [
                0 => '1990',
                1 => 'Ford',
                2 => 'Festiva',
            ],
            117 => [
                0 => '1991',
                1 => 'Subaru',
                2 => 'Justy',
            ],
            118 => [
                0 => '1991',
                1 => 'Buick',
                2 => 'Coachbuilder',
            ],
            119 => [
                0 => '1991',
                1 => 'Buick',
                2 => 'Century',
            ],
            120 => [
                0 => '1991',
                1 => 'Mitsubishi',
                2 => 'Pajero',
            ],
            121 => [
                0 => '1991',
                1 => 'Audi',
                2 => '80',
            ],
            122 => [
                0 => '1991',
                1 => 'Land Rover',
                2 => 'Sterling',
            ],
            123 => [
                0 => '1991',
                1 => 'Eagle',
                2 => 'Talon',
            ],
            124 => [
                0 => '1991',
                1 => 'Pontiac',
                2 => 'Firebird',
            ],
            125 => [
                0 => '1991',
                1 => 'Suzuki',
                2 => 'Sidekick',
            ],
            126 => [
                0 => '1991',
                1 => 'Suzuki',
                2 => 'Sidekick',
            ],
            127 => [
                0 => '1991',
                1 => 'Saab',
                2 => '900',
            ],
            128 => [
                0 => '1991',
                1 => 'Ford',
                2 => 'Festiva',
            ],
            129 => [
                0 => '1991',
                1 => 'Maserati',
                2 => 'Spyder',
            ],
            130 => [
                0 => '1991',
                1 => 'Buick',
                2 => 'Park Avenue',
            ],
            131 => [
                0 => '1992',
                1 => 'Plymouth',
                2 => 'Grand Voyager',
            ],
            132 => [
                0 => '1992',
                1 => 'Ford',
                2 => 'Explorer',
            ],
            133 => [
                0 => '1992',
                1 => 'Mercedes-Benz',
                2 => '600SEL',
            ],
            134 => [
                0 => '1992',
                1 => 'Dodge',
                2 => 'Shadow',
            ],
            135 => [
                0 => '1992',
                1 => 'Mitsubishi',
                2 => 'Precis',
            ],
            136 => [
                0 => '1992',
                1 => 'Subaru',
                2 => 'SVX',
            ],
            137 => [
                0 => '1992',
                1 => 'Plymouth',
                2 => 'Acclaim',
            ],
            138 => [
                0 => '1992',
                1 => 'Pontiac',
                2 => 'Sunbird',
            ],
            139 => [
                0 => '1992',
                1 => 'Jeep',
                2 => 'Wrangler',
            ],
            140 => [
                0 => '1992',
                1 => 'Acura',
                2 => 'NSX',
            ],
            141 => [
                0 => '1992',
                1 => 'Acura',
                2 => 'Vigor',
            ],
            142 => [
                0 => '1992',
                1 => 'Dodge',
                2 => 'D250 Club',
            ],
            143 => [
                0 => '1992',
                1 => 'Dodge',
                2 => 'D350 Club',
            ],
            144 => [
                0 => '1992',
                1 => 'Lamborghini',
                2 => 'Diablo',
            ],
            145 => [
                0 => '1992',
                1 => 'Chevrolet',
                2 => 'Caprice',
            ],
            146 => [
                0 => '1992',
                1 => 'Ford',
                2 => 'Explorer',
            ],
            147 => [
                0 => '1992',
                1 => 'Mercury',
                2 => 'Cougar',
            ],
            148 => [
                0 => '1992',
                1 => 'Ford',
                2 => 'Taurus',
            ],
            149 => [
                0 => '1992',
                1 => 'Toyota',
                2 => 'Celica',
            ],
            150 => [
                0 => '1992',
                1 => 'Toyota',
                2 => 'Cressida',
            ],
            151 => [
                0 => '1992',
                1 => 'Nissan',
                2 => 'Sentra',
            ],
            152 => [
                0 => '1992',
                1 => 'Ford',
                2 => 'Festiva',
            ],
            153 => [
                0 => '1992',
                1 => 'Volkswagen',
                2 => 'Eurovan',
            ],
            154 => [
                0 => '1992',
                1 => 'Chevrolet',
                2 => 'Sportvan G20',
            ],
            155 => [
                0 => '1992',
                1 => 'Buick',
                2 => 'Coachbuilder',
            ],
            156 => [
                0 => '1992',
                1 => 'Dodge',
                2 => 'Dakota Club',
            ],
            157 => [
                0 => '1992',
                1 => 'Mercedes-Benz',
                2 => 'E-Class',
            ],
            158 => [
                0 => '1992',
                1 => 'Cadillac',
                2 => 'Brougham',
            ],
            159 => [
                0 => '1992',
                1 => 'Mercury',
                2 => 'Grand Marquis',
            ],
            160 => [
                0 => '1992',
                1 => 'Audi',
                2 => '100',
            ],
            161 => [
                0 => '1992',
                1 => 'Mercedes-Benz',
                2 => '300D',
            ],
            162 => [
                0 => '1992',
                1 => 'Mercedes-Benz',
                2 => 'SL-Class',
            ],
            163 => [
                0 => '1992',
                1 => 'Audi',
                2 => 'Quattro',
            ],
            164 => [
                0 => '1992',
                1 => 'Ford',
                2 => 'Crown Victoria',
            ],
            165 => [
                0 => '1992',
                1 => 'Daihatsu',
                2 => 'Charade',
            ],
            166 => [
                0 => '1992',
                1 => 'Lamborghini',
                2 => 'Diablo',
            ],
            167 => [
                0 => '1992',
                1 => 'Ford',
                2 => 'F350',
            ],
            168 => [
                0 => '1992',
                1 => 'Chevrolet',
                2 => 'S10',
            ],
            169 => [
                0 => '1992',
                1 => 'Infiniti',
                2 => 'M',
            ],
            170 => [
                0 => '1992',
                1 => 'Chevrolet',
                2 => 'Sportvan G30',
            ],
            171 => [
                0 => '1992',
                1 => 'Chrysler',
                2 => 'LeBaron',
            ],
            172 => [
                0 => '1992',
                1 => 'Alfa Romeo',
                2 => '164',
            ],
            173 => [
                0 => '1992',
                1 => 'Dodge',
                2 => 'D250',
            ],
            174 => [
                0 => '1992',
                1 => 'Mazda',
                2 => 'RX-7',
            ],
            175 => [
                0 => '1992',
                1 => 'Chevrolet',
                2 => 'G-Series G20',
            ],
            176 => [
                0 => '1992',
                1 => 'Mercury',
                2 => 'Grand Marquis',
            ],
            177 => [
                0 => '1992',
                1 => 'Pontiac',
                2 => 'Bonneville',
            ],
            178 => [
                0 => '1992',
                1 => 'Chevrolet',
                2 => 'Sportvan G10',
            ],
            179 => [
                0 => '1992',
                1 => 'GMC',
                2 => '3500',
            ],
            180 => [
                0 => '1992',
                1 => 'Audi',
                2 => 'V8',
            ],
            181 => [
                0 => '1992',
                1 => 'Geo',
                2 => 'Prizm',
            ],
            182 => [
                0 => '1993',
                1 => 'Subaru',
                2 => 'Legacy',
            ],
            183 => [
                0 => '1993',
                1 => 'Mazda',
                2 => 'MX-5',
            ],
            184 => [
                0 => '1993',
                1 => 'Saab',
                2 => '9000',
            ],
            185 => [
                0 => '1993',
                1 => 'GMC',
                2 => 'Suburban 2500',
            ],
            186 => [
                0 => '1993',
                1 => 'Volkswagen',
                2 => 'GTI',
            ],
            187 => [
                0 => '1993',
                1 => 'BMW',
                2 => '3 Series',
            ],
            188 => [
                0 => '1993',
                1 => 'Mitsubishi',
                2 => 'RVR',
            ],
            189 => [
                0 => '1993',
                1 => 'Buick',
                2 => 'Century',
            ],
            190 => [
                0 => '1993',
                1 => 'Dodge',
                2 => 'Grand Caravan',
            ],
            191 => [
                0 => '1993',
                1 => 'Oldsmobile',
                2 => 'Silhouette',
            ],
            192 => [
                0 => '1993',
                1 => 'Dodge',
                2 => 'Ram Wagon B150',
            ],
            193 => [
                0 => '1993',
                1 => 'Toyota',
                2 => '4Runner',
            ],
            194 => [
                0 => '1993',
                1 => 'GMC',
                2 => 'Rally Wagon 2500',
            ],
            195 => [
                0 => '1993',
                1 => 'Mitsubishi',
                2 => 'Truck',
            ],
            196 => [
                0 => '1993',
                1 => 'Subaru',
                2 => 'Legacy',
            ],
            197 => [
                0 => '1993',
                1 => 'Mercury',
                2 => 'Tracer',
            ],
            198 => [
                0 => '1993',
                1 => 'BMW',
                2 => '8 Series',
            ],
            199 => [
                0 => '1993',
                1 => 'Mitsubishi',
                2 => 'Montero',
            ],
            200 => [
                0 => '1993',
                1 => 'Mazda',
                2 => 'RX-7',
            ],
            201 => [
                0 => '1993',
                1 => 'Porsche',
                2 => '928',
            ],
            202 => [
                0 => '1993',
                1 => 'Suzuki',
                2 => 'Swift',
            ],
            203 => [
                0 => '1993',
                1 => 'Mitsubishi',
                2 => 'Mighty Max',
            ],
            204 => [
                0 => '1993',
                1 => 'Plymouth',
                2 => 'Acclaim',
            ],
            205 => [
                0 => '1993',
                1 => 'Mercedes-Benz',
                2 => '300SE',
            ],
            206 => [
                0 => '1993',
                1 => 'Mitsubishi',
                2 => 'Mirage',
            ],
            207 => [
                0 => '1993',
                1 => 'Alfa Romeo',
                2 => '164',
            ],
            208 => [
                0 => '1993',
                1 => 'Chevrolet',
                2 => 'Camaro',
            ],
            209 => [
                0 => '1993',
                1 => 'Nissan',
                2 => 'Pathfinder',
            ],
            210 => [
                0 => '1993',
                1 => 'Acura',
                2 => 'Integra',
            ],
            211 => [
                0 => '1993',
                1 => 'Mercedes-Benz',
                2 => '600SL',
            ],
            212 => [
                0 => '1993',
                1 => 'Cadillac',
                2 => 'DeVille',
            ],
            213 => [
                0 => '1993',
                1 => 'Dodge',
                2 => 'Dakota Club',
            ],
            214 => [
                0 => '1993',
                1 => 'GMC',
                2 => 'Jimmy',
            ],
            215 => [
                0 => '1993',
                1 => 'Land Rover',
                2 => 'Range Rover',
            ],
            216 => [
                0 => '1993',
                1 => 'GMC',
                2 => '2500 Club Coupe',
            ],
            217 => [
                0 => '1993',
                1 => 'Lincoln',
                2 => 'Town Car',
            ],
            218 => [
                0 => '1993',
                1 => 'Dodge',
                2 => 'Ram Wagon B150',
            ],
            219 => [
                0 => '1993',
                1 => 'Mazda',
                2 => 'B-Series',
            ],
            220 => [
                0 => '1993',
                1 => 'Mitsubishi',
                2 => 'Eclipse',
            ],
            221 => [
                0 => '1993',
                1 => 'Plymouth',
                2 => 'Acclaim',
            ],
            222 => [
                0 => '1993',
                1 => 'Volvo',
                2 => '940',
            ],
            223 => [
                0 => '1993',
                1 => 'Mercedes-Benz',
                2 => '300D',
            ],
            224 => [
                0 => '1994',
                1 => 'GMC',
                2 => 'Yukon',
            ],
            225 => [
                0 => '1994',
                1 => 'Honda',
                2 => 'Civic',
            ],
            226 => [
                0 => '1994',
                1 => 'Volkswagen',
                2 => 'Jetta',
            ],
            227 => [
                0 => '1994',
                1 => 'Buick',
                2 => 'Regal',
            ],
            228 => [
                0 => '1994',
                1 => 'Plymouth',
                2 => 'Sundance',
            ],
            229 => [
                0 => '1994',
                1 => 'Honda',
                2 => 'Passport',
            ],
            230 => [
                0 => '1994',
                1 => 'Dodge',
                2 => 'Ram Van B350',
            ],
            231 => [
                0 => '1994',
                1 => 'Land Rover',
                2 => 'Defender',
            ],
            232 => [
                0 => '1994',
                1 => 'GMC',
                2 => 'Rally Wagon 2500',
            ],
            233 => [
                0 => '1994',
                1 => 'Chrysler',
                2 => 'Town & Country',
            ],
            234 => [
                0 => '1994',
                1 => 'Nissan',
                2 => 'Sentra',
            ],
            235 => [
                0 => '1994',
                1 => 'Hyundai',
                2 => 'Excel',
            ],
            236 => [
                0 => '1994',
                1 => 'Infiniti',
                2 => 'Q',
            ],
            237 => [
                0 => '1994',
                1 => 'Oldsmobile',
                2 => '98',
            ],
            238 => [
                0 => '1994',
                1 => 'Dodge',
                2 => 'Dakota Club',
            ],
            239 => [
                0 => '1994',
                1 => 'Chrysler',
                2 => 'New Yorker',
            ],
            240 => [
                0 => '1994',
                1 => 'Mercedes-Benz',
                2 => 'SL-Class',
            ],
            241 => [
                0 => '1994',
                1 => 'GMC',
                2 => 'Suburban 1500',
            ],
            242 => [
                0 => '1994',
                1 => 'Chevrolet',
                2 => 'Corvette',
            ],
            243 => [
                0 => '1994',
                1 => 'Nissan',
                2 => 'Quest',
            ],
            244 => [
                0 => '1994',
                1 => 'Plymouth',
                2 => 'Sundance',
            ],
            245 => [
                0 => '1994',
                1 => 'Lexus',
                2 => 'SC',
            ],
            246 => [
                0 => '1994',
                1 => 'Lexus',
                2 => 'ES',
            ],
            247 => [
                0 => '1994',
                1 => 'Buick',
                2 => 'LeSabre',
            ],
            248 => [
                0 => '1994',
                1 => 'Dodge',
                2 => 'Ram Wagon B150',
            ],
            249 => [
                0 => '1994',
                1 => 'Mitsubishi',
                2 => 'RVR',
            ],
            250 => [
                0 => '1994',
                1 => 'Mitsubishi',
                2 => 'Mighty Max',
            ],
            251 => [
                0 => '1994',
                1 => 'Mitsubishi',
                2 => 'Mighty Max Macro',
            ],
            252 => [
                0 => '1994',
                1 => 'Audi',
                2 => 'riolet',
            ],
            253 => [
                0 => '1994',
                1 => 'Chevrolet',
                2 => '1500',
            ],
            254 => [
                0 => '1994',
                1 => 'Ford',
                2 => 'Taurus',
            ],
            255 => [
                0 => '1995',
                1 => 'Ford',
                2 => 'Probe',
            ],
            256 => [
                0 => '1995',
                1 => 'Toyota',
                2 => 'Camry',
            ],
            257 => [
                0 => '1995',
                1 => 'Chevrolet',
                2 => 'Astro',
            ],
            258 => [
                0 => '1995',
                1 => 'Porsche',
                2 => '928',
            ],
            259 => [
                0 => '1995',
                1 => 'Volkswagen',
                2 => 'Jetta',
            ],
            260 => [
                0 => '1995',
                1 => 'Dodge',
                2 => 'Viper',
            ],
            261 => [
                0 => '1995',
                1 => 'Dodge',
                2 => 'Caravan',
            ],
            262 => [
                0 => '1995',
                1 => 'Dodge',
                2 => 'Ram 1500',
            ],
            263 => [
                0 => '1995',
                1 => 'Ford',
                2 => 'F150',
            ],
            264 => [
                0 => '1995',
                1 => 'Mercury',
                2 => 'Sable',
            ],
            265 => [
                0 => '1995',
                1 => 'Mazda',
                2 => 'MX-6',
            ],
            266 => [
                0 => '1995',
                1 => 'Ford',
                2 => 'F250',
            ],
            267 => [
                0 => '1995',
                1 => 'BMW',
                2 => '7 Series',
            ],
            268 => [
                0 => '1995',
                1 => 'Dodge',
                2 => 'Dakota',
            ],
            269 => [
                0 => '1995',
                1 => 'Oldsmobile',
                2 => 'Cutlass Supreme',
            ],
            270 => [
                0 => '1995',
                1 => 'Dodge',
                2 => 'Dakota',
            ],
            271 => [
                0 => '1995',
                1 => 'Chevrolet',
                2 => 'Sportvan G30',
            ],
            272 => [
                0 => '1995',
                1 => 'GMC',
                2 => 'Sonoma Club Coupe',
            ],
            273 => [
                0 => '1995',
                1 => 'Mercedes-Benz',
                2 => 'SL-Class',
            ],
            274 => [
                0 => '1995',
                1 => 'Ford',
                2 => 'Mustang',
            ],
            275 => [
                0 => '1995',
                1 => 'Suzuki',
                2 => 'Esteem',
            ],
            276 => [
                0 => '1995',
                1 => 'Chevrolet',
                2 => 'Sportvan G30',
            ],
            277 => [
                0 => '1995',
                1 => 'Chrysler',
                2 => 'LHS',
            ],
            278 => [
                0 => '1995',
                1 => 'Land Rover',
                2 => 'Range Rover',
            ],
            279 => [
                0 => '1995',
                1 => 'Chrysler',
                2 => 'Cirrus',
            ],
            280 => [
                0 => '1995',
                1 => 'Lamborghini',
                2 => 'Diablo',
            ],
            281 => [
                0 => '1995',
                1 => 'Chrysler',
                2 => 'Concorde',
            ],
            282 => [
                0 => '1995',
                1 => 'Nissan',
                2 => 'Pathfinder',
            ],
            283 => [
                0 => '1995',
                1 => 'Lexus',
                2 => 'ES',
            ],
            284 => [
                0 => '1995',
                1 => 'Mercedes-Benz',
                2 => 'SL-Class',
            ],
            285 => [
                0 => '1995',
                1 => 'Dodge',
                2 => 'Avenger',
            ],
            286 => [
                0 => '1995',
                1 => 'Dodge',
                2 => 'Stealth',
            ],
            287 => [
                0 => '1995',
                1 => 'BMW',
                2 => '8 Series',
            ],
            288 => [
                0 => '1996',
                1 => 'Audi',
                2 => 'A4',
            ],
            289 => [
                0 => '1996',
                1 => 'Nissan',
                2 => 'Maxima',
            ],
            290 => [
                0 => '1996',
                1 => 'Lexus',
                2 => 'LX',
            ],
            291 => [
                0 => '1996',
                1 => 'Lincoln',
                2 => 'Mark VIII',
            ],
            292 => [
                0 => '1996',
                1 => 'Saturn',
                2 => 'S-Series',
            ],
            293 => [
                0 => '1996',
                1 => 'Dodge',
                2 => 'Ram 1500',
            ],
            294 => [
                0 => '1996',
                1 => 'Infiniti',
                2 => 'I',
            ],
            295 => [
                0 => '1996',
                1 => 'Kia',
                2 => 'Sportage',
            ],
            296 => [
                0 => '1996',
                1 => 'Plymouth',
                2 => 'Breeze',
            ],
            297 => [
                0 => '1996',
                1 => 'Toyota',
                2 => 'Supra',
            ],
            298 => [
                0 => '1996',
                1 => 'Chevrolet',
                2 => 'Cavalier',
            ],
            299 => [
                0 => '1996',
                1 => 'Mazda',
                2 => 'B-Series Plus',
            ],
            300 => [
                0 => '1996',
                1 => 'Mitsubishi',
                2 => 'Pajero',
            ],
            301 => [
                0 => '1996',
                1 => 'Volkswagen',
                2 => 'Cabriolet',
            ],
            302 => [
                0 => '1996',
                1 => 'Nissan',
                2 => '300ZX',
            ],
            303 => [
                0 => '1996',
                1 => 'Oldsmobile',
                2 => 'Achieva',
            ],
            304 => [
                0 => '1996',
                1 => 'Dodge',
                2 => 'Stratus',
            ],
            305 => [
                0 => '1996',
                1 => 'Chrysler',
                2 => 'LHS',
            ],
            306 => [
                0 => '1996',
                1 => 'Chevrolet',
                2 => 'Suburban 1500',
            ],
            307 => [
                0 => '1996',
                1 => 'Mercury',
                2 => 'Mystique',
            ],
            308 => [
                0 => '1996',
                1 => 'Nissan',
                2 => '200SX',
            ],
            309 => [
                0 => '1996',
                1 => 'Chevrolet',
                2 => 'Blazer',
            ],
            310 => [
                0 => '1996',
                1 => 'Mercedes-Benz',
                2 => 'C-Class',
            ],
            311 => [
                0 => '1996',
                1 => 'GMC',
                2 => 'Savana 1500',
            ],
            312 => [
                0 => '1996',
                1 => 'Toyota',
                2 => 'Celica',
            ],
            313 => [
                0 => '1996',
                1 => 'Ford',
                2 => 'Econoline E150',
            ],
            314 => [
                0 => '1996',
                1 => 'Honda',
                2 => 'Civic',
            ],
            315 => [
                0 => '1996',
                1 => 'Volkswagen',
                2 => 'Jetta',
            ],
            316 => [
                0 => '1996',
                1 => 'Nissan',
                2 => '200SX',
            ],
            317 => [
                0 => '1996',
                1 => 'GMC',
                2 => 'Savana 1500',
            ],
            318 => [
                0 => '1996',
                1 => 'Nissan',
                2 => '240SX',
            ],
            319 => [
                0 => '1996',
                1 => 'Audi',
                2 => 'A6',
            ],
            320 => [
                0 => '1996',
                1 => 'Ford',
                2 => 'Explorer',
            ],
            321 => [
                0 => '1996',
                1 => 'Pontiac',
                2 => 'Bonneville',
            ],
            322 => [
                0 => '1996',
                1 => 'Ford',
                2 => 'Taurus',
            ],
            323 => [
                0 => '1996',
                1 => 'Chevrolet',
                2 => 'Express 1500',
            ],
            324 => [
                0 => '1997',
                1 => 'Chevrolet',
                2 => 'Cavalier',
            ],
            325 => [
                0 => '1997',
                1 => 'Chevrolet',
                2 => 'Express 1500',
            ],
            326 => [
                0 => '1997',
                1 => 'Ford',
                2 => 'F-Series',
            ],
            327 => [
                0 => '1997',
                1 => 'Dodge',
                2 => 'Ram Van 1500',
            ],
            328 => [
                0 => '1997',
                1 => 'BMW',
                2 => '8 Series',
            ],
            329 => [
                0 => '1997',
                1 => 'Buick',
                2 => 'LeSabre',
            ],
            330 => [
                0 => '1997',
                1 => 'Acura',
                2 => 'SLX',
            ],
            331 => [
                0 => '1997',
                1 => 'Mercury',
                2 => 'Mountaineer',
            ],
            332 => [
                0 => '1997',
                1 => 'Suzuki',
                2 => 'Esteem',
            ],
            333 => [
                0 => '1997',
                1 => 'Infiniti',
                2 => 'Q',
            ],
            334 => [
                0 => '1997',
                1 => 'Mazda',
                2 => '626',
            ],
            335 => [
                0 => '1997',
                1 => 'Hyundai',
                2 => 'Sonata',
            ],
            336 => [
                0 => '1997',
                1 => 'Dodge',
                2 => 'Viper',
            ],
            337 => [
                0 => '1997',
                1 => 'Saab',
                2 => '900',
            ],
            338 => [
                0 => '1997',
                1 => 'BMW',
                2 => '5 Series',
            ],
            339 => [
                0 => '1997',
                1 => 'Eagle',
                2 => 'Talon',
            ],
            340 => [
                0 => '1997',
                1 => 'Dodge',
                2 => 'Ram Van 1500',
            ],
            341 => [
                0 => '1997',
                1 => 'Audi',
                2 => 'A8',
            ],
            342 => [
                0 => '1997',
                1 => 'Chrysler',
                2 => 'Concorde',
            ],
            343 => [
                0 => '1997',
                1 => 'Ford',
                2 => 'Expedition',
            ],
            344 => [
                0 => '1997',
                1 => 'Isuzu',
                2 => 'Trooper',
            ],
            345 => [
                0 => '1997',
                1 => 'Chrysler',
                2 => 'Sebring',
            ],
            346 => [
                0 => '1997',
                1 => 'GMC',
                2 => 'Safari',
            ],
            347 => [
                0 => '1997',
                1 => 'Chevrolet',
                2 => 'G-Series 2500',
            ],
            348 => [
                0 => '1997',
                1 => 'Mazda',
                2 => 'MX-6',
            ],
            349 => [
                0 => '1997',
                1 => 'Dodge',
                2 => 'Ram Van 1500',
            ],
            350 => [
                0 => '1997',
                1 => 'Plymouth',
                2 => 'Voyager',
            ],
            351 => [
                0 => '1997',
                1 => 'Ford',
                2 => 'Aerostar',
            ],
            352 => [
                0 => '1997',
                1 => 'Land Rover',
                2 => 'Range Rover',
            ],
            353 => [
                0 => '1997',
                1 => 'Mitsubishi',
                2 => 'Challenger',
            ],
            354 => [
                0 => '1997',
                1 => 'Jeep',
                2 => 'Grand Cherokee',
            ],
            355 => [
                0 => '1997',
                1 => 'Honda',
                2 => 'Passport',
            ],
            356 => [
                0 => '1997',
                1 => 'Eagle',
                2 => 'Vision',
            ],
            357 => [
                0 => '1997',
                1 => 'Toyota',
                2 => 'Tercel',
            ],
            358 => [
                0 => '1997',
                1 => 'Saab',
                2 => '900',
            ],
            359 => [
                0 => '1997',
                1 => 'Dodge',
                2 => 'Ram 1500 Club',
            ],
            360 => [
                0 => '1997',
                1 => 'Toyota',
                2 => '4Runner',
            ],
            361 => [
                0 => '1997',
                1 => 'Chevrolet',
                2 => 'G-Series 3500',
            ],
            362 => [
                0 => '1997',
                1 => 'GMC',
                2 => 'Sonoma',
            ],
            363 => [
                0 => '1997',
                1 => 'Dodge',
                2 => 'Ram 2500 Club',
            ],
            364 => [
                0 => '1997',
                1 => 'Dodge',
                2 => 'Intrepid',
            ],
            365 => [
                0 => '1997',
                1 => 'Saab',
                2 => '9000',
            ],
            366 => [
                0 => '1998',
                1 => 'Chrysler',
                2 => 'Sebring',
            ],
            367 => [
                0 => '1998',
                1 => 'Dodge',
                2 => 'Ram 1500 Club',
            ],
            368 => [
                0 => '1998',
                1 => 'Toyota',
                2 => 'Land Cruiser',
            ],
            369 => [
                0 => '1998',
                1 => 'Mercury',
                2 => 'Mountaineer',
            ],
            370 => [
                0 => '1998',
                1 => 'Infiniti',
                2 => 'I',
            ],
            371 => [
                0 => '1998',
                1 => 'Dodge',
                2 => 'Ram Van 3500',
            ],
            372 => [
                0 => '1998',
                1 => 'Honda',
                2 => 'Odyssey',
            ],
            373 => [
                0 => '1998',
                1 => 'Mazda',
                2 => 'MPV',
            ],
            374 => [
                0 => '1998',
                1 => 'Cadillac',
                2 => 'Seville',
            ],
            375 => [
                0 => '1998',
                1 => 'Mercury',
                2 => 'Sable',
            ],
            376 => [
                0 => '1998',
                1 => 'Suzuki',
                2 => 'Sidekick',
            ],
            377 => [
                0 => '1998',
                1 => 'Ford',
                2 => 'Crown Victoria',
            ],
            378 => [
                0 => '1998',
                1 => 'Mazda',
                2 => 'Millenia',
            ],
            379 => [
                0 => '1998',
                1 => 'Plymouth',
                2 => 'Breeze',
            ],
            380 => [
                0 => '1998',
                1 => 'Toyota',
                2 => 'RAV4',
            ],
            381 => [
                0 => '1998',
                1 => 'Ford',
                2 => 'F150',
            ],
            382 => [
                0 => '1998',
                1 => 'Ford',
                2 => 'Explorer',
            ],
            383 => [
                0 => '1998',
                1 => 'Chevrolet',
                2 => 'Express 1500',
            ],
            384 => [
                0 => '1998',
                1 => 'Nissan',
                2 => 'Pathfinder',
            ],
            385 => [
                0 => '1998',
                1 => 'GMC',
                2 => 'Sonoma Club Coupe',
            ],
            386 => [
                0 => '1998',
                1 => 'Dodge',
                2 => 'Intrepid',
            ],
            387 => [
                0 => '1998',
                1 => 'Infiniti',
                2 => 'Q',
            ],
            388 => [
                0 => '1998',
                1 => 'Mitsubishi',
                2 => 'Mirage',
            ],
            389 => [
                0 => '1998',
                1 => 'GMC',
                2 => 'Savana 2500',
            ],
            390 => [
                0 => '1998',
                1 => 'Chevrolet',
                2 => 'Lumina',
            ],
            391 => [
                0 => '1998',
                1 => 'Ford',
                2 => 'Expedition',
            ],
            392 => [
                0 => '1999',
                1 => 'Mitsubishi',
                2 => 'Mirage',
            ],
            393 => [
                0 => '1999',
                1 => 'Audi',
                2 => 'A8',
            ],
            394 => [
                0 => '1999',
                1 => 'BMW',
                2 => '7 Series',
            ],
            395 => [
                0 => '1999',
                1 => 'Chevrolet',
                2 => 'Silverado 2500',
            ],
            396 => [
                0 => '1999',
                1 => 'BMW',
                2 => '3 Series',
            ],
            397 => [
                0 => '1999',
                1 => 'Ford',
                2 => 'Escort',
            ],
            398 => [
                0 => '1999',
                1 => 'Cadillac',
                2 => 'Catera',
            ],
            399 => [
                0 => '1999',
                1 => 'Chevrolet',
                2 => 'Tahoe',
            ],
            400 => [
                0 => '1999',
                1 => 'Oldsmobile',
                2 => 'Aurora',
            ],
            401 => [
                0 => '1999',
                1 => 'Suzuki',
                2 => 'Esteem',
            ],
            402 => [
                0 => '1999',
                1 => 'Oldsmobile',
                2 => 'Bravada',
            ],
            403 => [
                0 => '1999',
                1 => 'Honda',
                2 => 'CR-V',
            ],
            404 => [
                0 => '1999',
                1 => 'Ford',
                2 => 'Crown Victoria',
            ],
            405 => [
                0 => '1999',
                1 => 'Dodge',
                2 => 'Ram 3500',
            ],
            406 => [
                0 => '1999',
                1 => 'Mercedes-Benz',
                2 => 'E-Class',
            ],
            407 => [
                0 => '1999',
                1 => 'Honda',
                2 => 'Prelude',
            ],
            408 => [
                0 => '1999',
                1 => 'Dodge',
                2 => 'Neon',
            ],
            409 => [
                0 => '1999',
                1 => 'Oldsmobile',
                2 => 'Cutlass',
            ],
            410 => [
                0 => '1999',
                1 => 'Audi',
                2 => 'A6',
            ],
            411 => [
                0 => '1999',
                1 => 'GMC',
                2 => 'Suburban 2500',
            ],
            412 => [
                0 => '1999',
                1 => 'Chevrolet',
                2 => 'Blazer',
            ],
            413 => [
                0 => '1999',
                1 => 'Ford',
                2 => 'Expedition',
            ],
            414 => [
                0 => '1999',
                1 => 'Buick',
                2 => 'Park Avenue',
            ],
            415 => [
                0 => '1999',
                1 => 'Honda',
                2 => 'Passport',
            ],
            416 => [
                0 => '1999',
                1 => 'Ford',
                2 => 'Escort',
            ],
            417 => [
                0 => '1999',
                1 => 'GMC',
                2 => '1500 Club Coupe',
            ],
            418 => [
                0 => '1999',
                1 => 'Lotus',
                2 => 'Esprit',
            ],
            419 => [
                0 => '1999',
                1 => 'Kia',
                2 => 'Sephia',
            ],
            420 => [
                0 => '1999',
                1 => 'Volvo',
                2 => 'S70',
            ],
            421 => [
                0 => '1999',
                1 => 'Oldsmobile',
                2 => 'Alero',
            ],
            422 => [
                0 => '1999',
                1 => 'Toyota',
                2 => 'Tacoma',
            ],
            423 => [
                0 => '1999',
                1 => 'Land Rover',
                2 => 'Range Rover',
            ],
            424 => [
                0 => '1999',
                1 => 'Saab',
                2 => '9000',
            ],
            425 => [
                0 => '1999',
                1 => 'Chevrolet',
                2 => 'Silverado',
            ],
            426 => [
                0 => '1999',
                1 => 'Mitsubishi',
                2 => 'Diamante',
            ],
            427 => [
                0 => '1999',
                1 => 'GMC',
                2 => 'Jimmy',
            ],
            428 => [
                0 => '2000',
                1 => 'Mitsubishi',
                2 => 'Montero',
            ],
            429 => [
                0 => '2000',
                1 => 'Lincoln',
                2 => 'Continental',
            ],
            430 => [
                0 => '2000',
                1 => 'Lamborghini',
                2 => 'Diablo',
            ],
            431 => [
                0 => '2000',
                1 => 'Isuzu',
                2 => 'Amigo',
            ],
            432 => [
                0 => '2000',
                1 => 'Volkswagen',
                2 => 'Golf',
            ],
            433 => [
                0 => '2000',
                1 => 'Volkswagen',
                2 => 'Eurovan',
            ],
            434 => [
                0 => '2000',
                1 => 'Subaru',
                2 => 'Impreza',
            ],
            435 => [
                0 => '2000',
                1 => 'Plymouth',
                2 => 'Grand Voyager',
            ],
            436 => [
                0 => '2000',
                1 => 'Volvo',
                2 => 'S40',
            ],
            437 => [
                0 => '2000',
                1 => 'Buick',
                2 => 'Century',
            ],
            438 => [
                0 => '2000',
                1 => 'GMC',
                2 => 'Yukon',
            ],
            439 => [
                0 => '2000',
                1 => 'GMC',
                2 => 'Sierra 3500',
            ],
            440 => [
                0 => '2000',
                1 => 'Cadillac',
                2 => 'Eldorado',
            ],
            441 => [
                0 => '2000',
                1 => 'Ford',
                2 => 'F150',
            ],
            442 => [
                0 => '2000',
                1 => 'GMC',
                2 => 'Yukon Denali',
            ],
            443 => [
                0 => '2000',
                1 => 'Chrysler',
                2 => 'Concorde',
            ],
            444 => [
                0 => '2000',
                1 => 'Toyota',
                2 => 'Camry',
            ],
            445 => [
                0 => '2000',
                1 => 'GMC',
                2 => 'Safari',
            ],
            446 => [
                0 => '2000',
                1 => 'Saturn',
                2 => 'S-Series',
            ],
            447 => [
                0 => '2000',
                1 => 'Audi',
                2 => 'A8',
            ],
            448 => [
                0 => '2000',
                1 => 'Kia',
                2 => 'Sportage',
            ],
            449 => [
                0 => '2000',
                1 => 'Nissan',
                2 => 'Altima',
            ],
            450 => [
                0 => '2000',
                1 => 'GMC',
                2 => 'Yukon Denali',
            ],
            451 => [
                0 => '2000',
                1 => 'BMW',
                2 => 'Z3',
            ],
            452 => [
                0 => '2000',
                1 => 'Lincoln',
                2 => 'Town Car',
            ],
            453 => [
                0 => '2000',
                1 => 'Mazda',
                2 => 'MPV',
            ],
            454 => [
                0 => '2000',
                1 => 'Subaru',
                2 => 'Forester',
            ],
            455 => [
                0 => '2000',
                1 => 'Infiniti',
                2 => 'Q',
            ],
            456 => [
                0 => '2000',
                1 => 'Subaru',
                2 => 'Legacy',
            ],
            457 => [
                0 => '2000',
                1 => 'Buick',
                2 => 'Century',
            ],
            458 => [
                0 => '2000',
                1 => 'Hyundai',
                2 => 'Elantra',
            ],
            459 => [
                0 => '2000',
                1 => 'Isuzu',
                2 => 'Hombre',
            ],
            460 => [
                0 => '2000',
                1 => 'Chevrolet',
                2 => 'Blazer',
            ],
            461 => [
                0 => '2001',
                1 => 'Nissan',
                2 => 'Pathfinder',
            ],
            462 => [
                0 => '2001',
                1 => 'Chevrolet',
                2 => 'Silverado',
            ],
            463 => [
                0 => '2001',
                1 => 'Isuzu',
                2 => 'Rodeo',
            ],
            464 => [
                0 => '2001',
                1 => 'Chrysler',
                2 => 'Voyager',
            ],
            465 => [
                0 => '2001',
                1 => 'Pontiac',
                2 => 'Sunfire',
            ],
            466 => [
                0 => '2001',
                1 => 'Nissan',
                2 => 'Pathfinder',
            ],
            467 => [
                0 => '2001',
                1 => 'Acura',
                2 => 'RL',
            ],
            468 => [
                0 => '2001',
                1 => 'Chrysler',
                2 => 'Sebring',
            ],
            469 => [
                0 => '2001',
                1 => 'Honda',
                2 => 'Odyssey',
            ],
            470 => [
                0 => '2001',
                1 => 'Ford',
                2 => 'F350',
            ],
            471 => [
                0 => '2001',
                1 => 'Daewoo',
                2 => 'Nubira',
            ],
            472 => [
                0 => '2001',
                1 => 'Toyota',
                2 => 'Tacoma',
            ],
            473 => [
                0 => '2001',
                1 => 'Volkswagen',
                2 => 'GTI',
            ],
            474 => [
                0 => '2001',
                1 => 'Mazda',
                2 => 'Protege',
            ],
            475 => [
                0 => '2001',
                1 => 'Mazda',
                2 => 'Protege',
            ],
            476 => [
                0 => '2001',
                1 => 'Chevrolet',
                2 => 'Silverado',
            ],
            477 => [
                0 => '2001',
                1 => 'Chevrolet',
                2 => 'Astro',
            ],
            478 => [
                0 => '2001',
                1 => 'Plymouth',
                2 => 'Neon',
            ],
            479 => [
                0 => '2001',
                1 => 'GMC',
                2 => 'Savana 3500',
            ],
            480 => [
                0 => '2001',
                1 => 'BMW',
                2 => 'M3',
            ],
            481 => [
                0 => '2001',
                1 => 'Mitsubishi',
                2 => 'Diamante',
            ],
            482 => [
                0 => '2001',
                1 => 'Isuzu',
                2 => 'Trooper',
            ],
            483 => [
                0 => '2001',
                1 => 'Chevrolet',
                2 => 'Express 1500',
            ],
            484 => [
                0 => '2001',
                1 => 'Nissan',
                2 => 'Sentra',
            ],
            485 => [
                0 => '2001',
                1 => 'Hyundai',
                2 => 'Accent',
            ],
            486 => [
                0 => '2001',
                1 => 'Lincoln',
                2 => 'Continental',
            ],
            487 => [
                0 => '2001',
                1 => 'Mercury',
                2 => 'Cougar',
            ],
            488 => [
                0 => '2001',
                1 => 'Lexus',
                2 => 'LX',
            ],
            489 => [
                0 => '2001',
                1 => 'Pontiac',
                2 => 'Montana',
            ],
            490 => [
                0 => '2001',
                1 => 'Audi',
                2 => 'A4',
            ],
            491 => [
                0 => '2001',
                1 => 'Mercedes-Benz',
                2 => 'M-Class',
            ],
            492 => [
                0 => '2001',
                1 => 'Chevrolet',
                2 => 'Prizm',
            ],
            493 => [
                0 => '2001',
                1 => 'Dodge',
                2 => 'Dakota',
            ],
            494 => [
                0 => '2001',
                1 => 'Lexus',
                2 => 'ES',
            ],
            495 => [
                0 => '2001',
                1 => 'Subaru',
                2 => 'Forester',
            ],
            496 => [
                0 => '2001',
                1 => 'Audi',
                2 => 'A6',
            ],
            497 => [
                0 => '2001',
                1 => 'Saturn',
                2 => 'S-Series',
            ],
            498 => [
                0 => '2001',
                1 => 'Hyundai',
                2 => 'Sonata',
            ],
            499 => [
                0 => '2002',
                1 => 'Toyota',
                2 => '4Runner',
            ],
            500 => [
                0 => '2002',
                1 => 'Dodge',
                2 => 'Ram 1500',
            ],
            501 => [
                0 => '2002',
                1 => 'BMW',
                2 => '3 Series',
            ],
            502 => [
                0 => '2002',
                1 => 'Chevrolet',
                2 => 'Astro',
            ],
            503 => [
                0 => '2002',
                1 => 'Buick',
                2 => 'Park Avenue',
            ],
            504 => [
                0 => '2002',
                1 => 'Ford',
                2 => 'F-Series',
            ],
            505 => [
                0 => '2002',
                1 => 'GMC',
                2 => 'Sonoma',
            ],
            506 => [
                0 => '2002',
                1 => 'Audi',
                2 => 'A6',
            ],
            507 => [
                0 => '2002',
                1 => 'Ford',
                2 => 'Econoline E150',
            ],
            508 => [
                0 => '2002',
                1 => 'Ford',
                2 => 'Mustang',
            ],
            509 => [
                0 => '2002',
                1 => 'Mitsubishi',
                2 => 'Lancer',
            ],
            510 => [
                0 => '2002',
                1 => 'Subaru',
                2 => 'Outback Sport',
            ],
            511 => [
                0 => '2002',
                1 => 'Chevrolet',
                2 => 'Astro',
            ],
            512 => [
                0 => '2002',
                1 => 'GMC',
                2 => 'Yukon XL 1500',
            ],
            513 => [
                0 => '2002',
                1 => 'Audi',
                2 => 'S8',
            ],
            514 => [
                0 => '2002',
                1 => 'Audi',
                2 => 'S8',
            ],
            515 => [
                0 => '2002',
                1 => 'Nissan',
                2 => 'Xterra',
            ],
            516 => [
                0 => '2002',
                1 => 'Chrysler',
                2 => 'Sebring',
            ],
            517 => [
                0 => '2002',
                1 => 'Toyota',
                2 => 'Tacoma',
            ],
            518 => [
                0 => '2002',
                1 => 'Isuzu',
                2 => 'Trooper',
            ],
            519 => [
                0 => '2002',
                1 => 'Dodge',
                2 => 'Grand Caravan',
            ],
            520 => [
                0 => '2002',
                1 => 'Pontiac',
                2 => 'Firebird',
            ],
            521 => [
                0 => '2002',
                1 => 'Dodge',
                2 => 'Intrepid',
            ],
            522 => [
                0 => '2002',
                1 => 'Honda',
                2 => 'S2000',
            ],
            523 => [
                0 => '2002',
                1 => 'Mercedes-Benz',
                2 => 'G-Class',
            ],
            524 => [
                0 => '2002',
                1 => 'Suzuki',
                2 => 'Grand Vitara',
            ],
            525 => [
                0 => '2002',
                1 => 'Ford',
                2 => 'Crown Victoria',
            ],
            526 => [
                0 => '2002',
                1 => 'Chevrolet',
                2 => 'Silverado 1500',
            ],
            527 => [
                0 => '2002',
                1 => 'Lincoln',
                2 => 'Town Car',
            ],
            528 => [
                0 => '2002',
                1 => 'Mazda',
                2 => '626',
            ],
            529 => [
                0 => '2002',
                1 => 'Mercedes-Benz',
                2 => 'G-Class',
            ],
            530 => [
                0 => '2002',
                1 => 'BMW',
                2 => 'Z8',
            ],
            531 => [
                0 => '2002',
                1 => 'Jaguar',
                2 => 'S-Type',
            ],
            532 => [
                0 => '2002',
                1 => 'BMW',
                2 => '530',
            ],
            533 => [
                0 => '2002',
                1 => 'Chevrolet',
                2 => 'Monte Carlo',
            ],
            534 => [
                0 => '2002',
                1 => 'Isuzu',
                2 => 'Trooper',
            ],
            535 => [
                0 => '2002',
                1 => 'Lincoln',
                2 => 'Continental',
            ],
            536 => [
                0 => '2002',
                1 => 'Ford',
                2 => 'F-Series',
            ],
            537 => [
                0 => '2002',
                1 => 'Honda',
                2 => 'Passport',
            ],
            538 => [
                0 => '2002',
                1 => 'Chevrolet',
                2 => 'Tahoe',
            ],
            539 => [
                0 => '2003',
                1 => 'Chevrolet',
                2 => 'SSR',
            ],
            540 => [
                0 => '2003',
                1 => 'Mazda',
                2 => 'B-Series Plus',
            ],
            541 => [
                0 => '2003',
                1 => 'Saturn',
                2 => 'Ion',
            ],
            542 => [
                0 => '2003',
                1 => 'Jaguar',
                2 => 'S-Type',
            ],
            543 => [
                0 => '2003',
                1 => 'Jaguar',
                2 => 'XJ Series',
            ],
            544 => [
                0 => '2003',
                1 => 'Ford',
                2 => 'F350',
            ],
            545 => [
                0 => '2003',
                1 => 'GMC',
                2 => 'Yukon XL 2500',
            ],
            546 => [
                0 => '2003',
                1 => 'Chevrolet',
                2 => 'Impala',
            ],
            547 => [
                0 => '2003',
                1 => 'Honda',
                2 => 'Element',
            ],
            548 => [
                0 => '2003',
                1 => 'Acura',
                2 => 'CL',
            ],
            549 => [
                0 => '2003',
                1 => 'Lexus',
                2 => 'LX',
            ],
            550 => [
                0 => '2003',
                1 => 'Ford',
                2 => 'Escort ZX2',
            ],
            551 => [
                0 => '2003',
                1 => 'Porsche',
                2 => '911',
            ],
            552 => [
                0 => '2003',
                1 => 'Kia',
                2 => 'Rio',
            ],
            553 => [
                0 => '2003',
                1 => 'Subaru',
                2 => 'Outback',
            ],
            554 => [
                0 => '2003',
                1 => 'Volkswagen',
                2 => 'Touareg',
            ],
            555 => [
                0 => '2003',
                1 => 'Ford',
                2 => 'Thunderbird',
            ],
            556 => [
                0 => '2003',
                1 => 'Ford',
                2 => 'Expedition',
            ],
            557 => [
                0 => '2003',
                1 => 'Ford',
                2 => 'E150',
            ],
            558 => [
                0 => '2003',
                1 => 'Dodge',
                2 => 'Durango',
            ],
            559 => [
                0 => '2003',
                1 => 'Nissan',
                2 => 'Maxima',
            ],
            560 => [
                0 => '2003',
                1 => 'Mercedes-Benz',
                2 => 'SL-Class',
            ],
            561 => [
                0 => '2003',
                1 => 'Cadillac',
                2 => 'CTS',
            ],
            562 => [
                0 => '2003',
                1 => 'Mercedes-Benz',
                2 => 'E-Class',
            ],
            563 => [
                0 => '2003',
                1 => 'Lexus',
                2 => 'IS',
            ],
            564 => [
                0 => '2003',
                1 => 'Lincoln',
                2 => 'Aviator',
            ],
            565 => [
                0 => '2003',
                1 => 'Lexus',
                2 => 'IS',
            ],
            566 => [
                0 => '2003',
                1 => 'Ford',
                2 => 'Explorer Sport Trac',
            ],
            567 => [
                0 => '2003',
                1 => 'Toyota',
                2 => 'Corolla',
            ],
            568 => [
                0 => '2003',
                1 => 'Ford',
                2 => 'Thunderbird',
            ],
            569 => [
                0 => '2003',
                1 => 'Ford',
                2 => 'Freestar',
            ],
            570 => [
                0 => '2003',
                1 => 'Ford',
                2 => 'Explorer',
            ],
            571 => [
                0 => '2003',
                1 => 'Chevrolet',
                2 => 'Venture',
            ],
            572 => [
                0 => '2003',
                1 => 'Land Rover',
                2 => 'Range Rover',
            ],
            573 => [
                0 => '2003',
                1 => 'Buick',
                2 => 'Regal',
            ],
            574 => [
                0 => '2003',
                1 => 'Lexus',
                2 => 'SC',
            ],
            575 => [
                0 => '2003',
                1 => 'Acura',
                2 => 'MDX',
            ],
            576 => [
                0 => '2003',
                1 => 'Toyota',
                2 => 'Highlander',
            ],
            577 => [
                0 => '2003',
                1 => 'Toyota',
                2 => 'Highlander',
            ],
            578 => [
                0 => '2004',
                1 => 'Subaru',
                2 => 'Legacy',
            ],
            579 => [
                0 => '2004',
                1 => 'Lexus',
                2 => 'IS',
            ],
            580 => [
                0 => '2004',
                1 => 'Suzuki',
                2 => 'Grand Vitara',
            ],
            581 => [
                0 => '2004',
                1 => 'Volvo',
                2 => 'S60',
            ],
            582 => [
                0 => '2004',
                1 => 'Oldsmobile',
                2 => 'Silhouette',
            ],
            583 => [
                0 => '2004',
                1 => 'Ford',
                2 => 'F350',
            ],
            584 => [
                0 => '2004',
                1 => 'BMW',
                2 => '525',
            ],
            585 => [
                0 => '2004',
                1 => 'Volkswagen',
                2 => 'Golf',
            ],
            586 => [
                0 => '2004',
                1 => 'Isuzu',
                2 => 'Ascender',
            ],
            587 => [
                0 => '2004',
                1 => 'Mercedes-Benz',
                2 => 'SL-Class',
            ],
            588 => [
                0 => '2004',
                1 => 'BMW',
                2 => '3 Series',
            ],
            589 => [
                0 => '2004',
                1 => 'Lincoln',
                2 => 'Town Car',
            ],
            590 => [
                0 => '2004',
                1 => 'Lexus',
                2 => 'GS',
            ],
            591 => [
                0 => '2004',
                1 => 'Nissan',
                2 => 'Xterra',
            ],
            592 => [
                0 => '2004',
                1 => 'Chevrolet',
                2 => 'Silverado 1500',
            ],
            593 => [
                0 => '2004',
                1 => 'Acura',
                2 => 'TL',
            ],
            594 => [
                0 => '2004',
                1 => 'Chevrolet',
                2 => 'Tahoe',
            ],
            595 => [
                0 => '2004',
                1 => 'Buick',
                2 => 'Century',
            ],
            596 => [
                0 => '2004',
                1 => 'Chevrolet',
                2 => 'Suburban 1500',
            ],
            597 => [
                0 => '2004',
                1 => 'Spyker',
                2 => 'C8 Spyder',
            ],
            598 => [
                0 => '2004',
                1 => 'Lexus',
                2 => 'GX',
            ],
            599 => [
                0 => '2004',
                1 => 'GMC',
                2 => 'Yukon XL 1500',
            ],
            600 => [
                0 => '2004',
                1 => 'Toyota',
                2 => 'Celica',
            ],
            601 => [
                0 => '2004',
                1 => 'Lexus',
                2 => 'ES',
            ],
            602 => [
                0 => '2004',
                1 => 'Ford',
                2 => 'E350',
            ],
            603 => [
                0 => '2004',
                1 => 'Lexus',
                2 => 'IS',
            ],
            604 => [
                0 => '2004',
                1 => 'Volkswagen',
                2 => 'Golf',
            ],
            605 => [
                0 => '2004',
                1 => 'Acura',
                2 => 'RSX',
            ],
            606 => [
                0 => '2004',
                1 => 'Infiniti',
                2 => 'FX',
            ],
            607 => [
                0 => '2004',
                1 => 'Buick',
                2 => 'Regal',
            ],
            608 => [
                0 => '2004',
                1 => 'Honda',
                2 => 'Civic',
            ],
            609 => [
                0 => '2004',
                1 => 'Jeep',
                2 => 'Wrangler',
            ],
            610 => [
                0 => '2004',
                1 => 'Ford',
                2 => 'E350',
            ],
            611 => [
                0 => '2004',
                1 => 'Jeep',
                2 => 'Wrangler',
            ],
            612 => [
                0 => '2004',
                1 => 'Ford',
                2 => 'E250',
            ],
            613 => [
                0 => '2004',
                1 => 'Chevrolet',
                2 => 'Classic',
            ],
            614 => [
                0 => '2004',
                1 => 'Ford',
                2 => 'F350',
            ],
            615 => [
                0 => '2004',
                1 => 'Ford',
                2 => 'Explorer',
            ],
            616 => [
                0 => '2004',
                1 => 'Toyota',
                2 => 'Prius',
            ],
            617 => [
                0 => '2005',
                1 => 'Scion',
                2 => 'tC',
            ],
            618 => [
                0 => '2005',
                1 => 'Dodge',
                2 => 'Ram 3500',
            ],
            619 => [
                0 => '2005',
                1 => 'Chevrolet',
                2 => 'Astro',
            ],
            620 => [
                0 => '2005',
                1 => 'Honda',
                2 => 'Civic',
            ],
            621 => [
                0 => '2005',
                1 => 'Buick',
                2 => 'Rainier',
            ],
            622 => [
                0 => '2005',
                1 => 'Mazda',
                2 => 'Tribute',
            ],
            623 => [
                0 => '2005',
                1 => 'Toyota',
                2 => 'Highlander',
            ],
            624 => [
                0 => '2005',
                1 => 'Mercury',
                2 => 'Mountaineer',
            ],
            625 => [
                0 => '2005',
                1 => 'BMW',
                2 => '645',
            ],
            626 => [
                0 => '2005',
                1 => 'Kia',
                2 => 'Amanti',
            ],
            627 => [
                0 => '2005',
                1 => 'Mercedes-Benz',
                2 => 'SLR McLaren',
            ],
            628 => [
                0 => '2005',
                1 => 'Toyota',
                2 => 'RAV4',
            ],
            629 => [
                0 => '2005',
                1 => 'BMW',
                2 => 'M3',
            ],
            630 => [
                0 => '2005',
                1 => 'GMC',
                2 => 'Envoy XUV',
            ],
            631 => [
                0 => '2005',
                1 => 'Rolls-Royce',
                2 => 'Phantom',
            ],
            632 => [
                0 => '2005',
                1 => 'Infiniti',
                2 => 'QX',
            ],
            633 => [
                0 => '2005',
                1 => 'Maybach',
                2 => '62',
            ],
            634 => [
                0 => '2005',
                1 => 'Audi',
                2 => 'A8',
            ],
            635 => [
                0 => '2005',
                1 => 'Chevrolet',
                2 => 'Blazer',
            ],
            636 => [
                0 => '2005',
                1 => 'Mercedes-Benz',
                2 => 'CLK-Class',
            ],
            637 => [
                0 => '2005',
                1 => 'Hummer',
                2 => 'H2',
            ],
            638 => [
                0 => '2005',
                1 => 'Ford',
                2 => 'Five Hundred',
            ],
            639 => [
                0 => '2005',
                1 => 'Dodge',
                2 => 'Magnum',
            ],
            640 => [
                0 => '2005',
                1 => 'Mercury',
                2 => 'Monterey',
            ],
            641 => [
                0 => '2005',
                1 => 'Nissan',
                2 => '350Z',
            ],
            642 => [
                0 => '2005',
                1 => 'Dodge',
                2 => 'Ram 1500',
            ],
            643 => [
                0 => '2005',
                1 => 'Buick',
                2 => 'LeSabre',
            ],
            644 => [
                0 => '2005',
                1 => 'Ford',
                2 => 'F350',
            ],
            645 => [
                0 => '2005',
                1 => 'Jaguar',
                2 => 'X-Type',
            ],
            646 => [
                0 => '2005',
                1 => 'Mercedes-Benz',
                2 => 'SLK-Class',
            ],
            647 => [
                0 => '2005',
                1 => 'Jaguar',
                2 => 'X-Type',
            ],
            648 => [
                0 => '2005',
                1 => 'GMC',
                2 => 'Sierra 2500',
            ],
            649 => [
                0 => '2005',
                1 => 'Chevrolet',
                2 => 'Express 3500',
            ],
            650 => [
                0 => '2005',
                1 => 'Saab',
                2 => '9-Mar',
            ],
            651 => [
                0 => '2005',
                1 => 'Mercury',
                2 => 'Sable',
            ],
            652 => [
                0 => '2005',
                1 => 'Scion',
                2 => 'xB',
            ],
            653 => [
                0 => '2005',
                1 => 'Buick',
                2 => 'LaCrosse',
            ],
            654 => [
                0 => '2005',
                1 => 'Toyota',
                2 => 'Matrix',
            ],
            655 => [
                0 => '2005',
                1 => 'Honda',
                2 => 'Civic Si',
            ],
            656 => [
                0 => '2005',
                1 => 'GMC',
                2 => 'Yukon XL 1500',
            ],
            657 => [
                0 => '2005',
                1 => 'BMW',
                2 => '645',
            ],
            658 => [
                0 => '2005',
                1 => 'Toyota',
                2 => 'MR2',
            ],
            659 => [
                0 => '2006',
                1 => 'Volvo',
                2 => 'V50',
            ],
            660 => [
                0 => '2006',
                1 => 'BMW',
                2 => '5 Series',
            ],
            661 => [
                0 => '2006',
                1 => 'BMW',
                2 => '325',
            ],
            662 => [
                0 => '2006',
                1 => 'Mercedes-Benz',
                2 => 'SL65 AMG',
            ],
            663 => [
                0 => '2006',
                1 => 'Ford',
                2 => 'Taurus',
            ],
            664 => [
                0 => '2006',
                1 => 'Mitsubishi',
                2 => 'Galant',
            ],
            665 => [
                0 => '2006',
                1 => 'MINI',
                2 => 'Cooper',
            ],
            666 => [
                0 => '2006',
                1 => 'Aston Martin',
                2 => 'DB9 Volante',
            ],
            667 => [
                0 => '2006',
                1 => 'Ford',
                2 => 'Escape',
            ],
            668 => [
                0 => '2006',
                1 => 'Infiniti',
                2 => 'M',
            ],
            669 => [
                0 => '2006',
                1 => 'Cadillac',
                2 => 'XLR-V',
            ],
            670 => [
                0 => '2006',
                1 => 'Mazda',
                2 => 'B-Series',
            ],
            671 => [
                0 => '2006',
                1 => 'Ferrari',
                2 => 'F430',
            ],
            672 => [
                0 => '2006',
                1 => 'BMW',
                2 => '530',
            ],
            673 => [
                0 => '2006',
                1 => 'BMW',
                2 => 'M6',
            ],
            674 => [
                0 => '2006',
                1 => 'Kia',
                2 => 'Amanti',
            ],
            675 => [
                0 => '2006',
                1 => 'Infiniti',
                2 => 'FX',
            ],
            676 => [
                0 => '2006',
                1 => 'Suzuki',
                2 => 'XL7',
            ],
            677 => [
                0 => '2006',
                1 => 'Hummer',
                2 => 'H2 SUT',
            ],
            678 => [
                0 => '2006',
                1 => 'GMC',
                2 => 'Sierra 2500HD',
            ],
            679 => [
                0 => '2006',
                1 => 'Ford',
                2 => 'F-250 Super Duty',
            ],
            680 => [
                0 => '2006',
                1 => 'Audi',
                2 => 'A4',
            ],
            681 => [
                0 => '2006',
                1 => 'Chevrolet',
                2 => 'Equinox',
            ],
            682 => [
                0 => '2006',
                1 => 'Honda',
                2 => 'Pilot',
            ],
            683 => [
                0 => '2006',
                1 => 'Subaru',
                2 => 'B9 Tribeca',
            ],
            684 => [
                0 => '2006',
                1 => 'Ford',
                2 => 'Five Hundred',
            ],
            685 => [
                0 => '2006',
                1 => 'GMC',
                2 => 'Sierra 1500',
            ],
            686 => [
                0 => '2006',
                1 => 'Hyundai',
                2 => 'Tucson',
            ],
            687 => [
                0 => '2006',
                1 => 'Chrysler',
                2 => '300',
            ],
            688 => [
                0 => '2006',
                1 => 'Toyota',
                2 => 'Prius',
            ],
            689 => [
                0 => '2006',
                1 => 'Nissan',
                2 => 'Quest',
            ],
            690 => [
                0 => '2006',
                1 => 'Dodge',
                2 => 'Dakota Club',
            ],
            691 => [
                0 => '2006',
                1 => 'Pontiac',
                2 => 'G6',
            ],
            692 => [
                0 => '2006',
                1 => 'Mercedes-Benz',
                2 => 'CL-Class',
            ],
            693 => [
                0 => '2006',
                1 => 'GMC',
                2 => 'Sierra 3500HD',
            ],
            694 => [
                0 => '2006',
                1 => 'Volvo',
                2 => 'S60',
            ],
            695 => [
                0 => '2006',
                1 => 'Chrysler',
                2 => 'PT Cruiser',
            ],
            696 => [
                0 => '2006',
                1 => 'Kia',
                2 => 'Spectra',
            ],
            697 => [
                0 => '2006',
                1 => 'Pontiac',
                2 => 'Solstice',
            ],
            698 => [
                0 => '2006',
                1 => 'Suzuki',
                2 => 'Daewoo Magnus',
            ],
            699 => [
                0 => '2006',
                1 => 'Chevrolet',
                2 => 'Avalanche 2500',
            ],
            700 => [
                0 => '2006',
                1 => 'Honda',
                2 => 'Pilot',
            ],
            701 => [
                0 => '2006',
                1 => 'Volvo',
                2 => 'S60',
            ],
            702 => [
                0 => '2006',
                1 => 'BMW',
                2 => 'M Roadster',
            ],
            703 => [
                0 => '2006',
                1 => 'Toyota',
                2 => 'Land Cruiser',
            ],
            704 => [
                0 => '2006',
                1 => 'Chrysler',
                2 => 'Town & Country',
            ],
            705 => [
                0 => '2006',
                1 => 'Pontiac',
                2 => 'Montana',
            ],
            706 => [
                0 => '2006',
                1 => 'Lamborghini',
                2 => 'Gallardo',
            ],
            707 => [
                0 => '2006',
                1 => 'Infiniti',
                2 => 'G',
            ],
            708 => [
                0 => '2006',
                1 => 'Mazda',
                2 => 'Mazda3',
            ],
            709 => [
                0 => '2006',
                1 => 'Mercedes-Benz',
                2 => 'CLS-Class',
            ],
            710 => [
                0 => '2006',
                1 => 'Scion',
                2 => 'tC',
            ],
            711 => [
                0 => '2006',
                1 => 'Ford',
                2 => 'Expedition',
            ],
            712 => [
                0 => '2006',
                1 => 'Acura',
                2 => 'MDX',
            ],
            713 => [
                0 => '2007',
                1 => 'Chrysler',
                2 => 'Town & Country',
            ],
            714 => [
                0 => '2007',
                1 => 'Volkswagen',
                2 => 'New Beetle',
            ],
            715 => [
                0 => '2007',
                1 => 'Mercedes-Benz',
                2 => 'CLK-Class',
            ],
            716 => [
                0 => '2007',
                1 => 'Toyota',
                2 => 'Solara',
            ],
            717 => [
                0 => '2007',
                1 => 'Ferrari',
                2 => 'F430',
            ],
            718 => [
                0 => '2007',
                1 => 'Mazda',
                2 => 'Mazda5',
            ],
            719 => [
                0 => '2007',
                1 => 'Chevrolet',
                2 => 'Tahoe',
            ],
            720 => [
                0 => '2007',
                1 => 'Pontiac',
                2 => 'Vibe',
            ],
            721 => [
                0 => '2007',
                1 => 'Mercedes-Benz',
                2 => 'C-Class',
            ],
            722 => [
                0 => '2007',
                1 => 'Honda',
                2 => 'Civic',
            ],
            723 => [
                0 => '2007',
                1 => 'Chevrolet',
                2 => 'Colorado',
            ],
            724 => [
                0 => '2007',
                1 => 'Chrysler',
                2 => 'Pacifica',
            ],
            725 => [
                0 => '2007',
                1 => 'Mercury',
                2 => 'Grand Marquis',
            ],
            726 => [
                0 => '2007',
                1 => 'Ford',
                2 => 'Five Hundred',
            ],
            727 => [
                0 => '2007',
                1 => 'Hummer',
                2 => 'H3',
            ],
            728 => [
                0 => '2007',
                1 => 'Ford',
                2 => 'F150',
            ],
            729 => [
                0 => '2007',
                1 => 'Honda',
                2 => 'Ridgeline',
            ],
            730 => [
                0 => '2007',
                1 => 'Porsche',
                2 => '911',
            ],
            731 => [
                0 => '2007',
                1 => 'Mitsubishi',
                2 => 'Galant',
            ],
            732 => [
                0 => '2007',
                1 => 'Volvo',
                2 => 'S40',
            ],
            733 => [
                0 => '2007',
                1 => 'Audi',
                2 => 'A8',
            ],
            734 => [
                0 => '2007',
                1 => 'Honda',
                2 => 'Odyssey',
            ],
            735 => [
                0 => '2007',
                1 => 'Volkswagen',
                2 => 'Eos',
            ],
            736 => [
                0 => '2007',
                1 => 'Toyota',
                2 => 'Sequoia',
            ],
            737 => [
                0 => '2007',
                1 => 'Mitsubishi',
                2 => 'Endeavor',
            ],
            738 => [
                0 => '2007',
                1 => 'Volvo',
                2 => 'V50',
            ],
            739 => [
                0 => '2007',
                1 => 'Nissan',
                2 => 'Pathfinder',
            ],
            740 => [
                0 => '2007',
                1 => 'GMC',
                2 => 'Yukon',
            ],
            741 => [
                0 => '2007',
                1 => 'Nissan',
                2 => 'Quest',
            ],
            742 => [
                0 => '2007',
                1 => 'Volkswagen',
                2 => 'New Beetle',
            ],
            743 => [
                0 => '2007',
                1 => 'Audi',
                2 => 'A3',
            ],
            744 => [
                0 => '2007',
                1 => 'Cadillac',
                2 => 'Escalade',
            ],
            745 => [
                0 => '2007',
                1 => 'Pontiac',
                2 => 'Grand Prix',
            ],
            746 => [
                0 => '2007',
                1 => 'GMC',
                2 => 'Yukon XL 2500',
            ],
            747 => [
                0 => '2007',
                1 => 'Dodge',
                2 => 'Nitro',
            ],
            748 => [
                0 => '2007',
                1 => 'Hyundai',
                2 => 'Elantra',
            ],
            749 => [
                0 => '2007',
                1 => 'Foose',
                2 => 'Hemisfear',
            ],
            750 => [
                0 => '2007',
                1 => 'Ford',
                2 => 'Edge',
            ],
            751 => [
                0 => '2007',
                1 => 'Ford',
                2 => 'Ranger',
            ],
            752 => [
                0 => '2007',
                1 => 'Dodge',
                2 => 'Ram',
            ],
            753 => [
                0 => '2007',
                1 => 'Chevrolet',
                2 => 'Equinox',
            ],
            754 => [
                0 => '2007',
                1 => 'Chevrolet',
                2 => 'Equinox',
            ],
            755 => [
                0 => '2007',
                1 => 'Bentley',
                2 => 'Arnage',
            ],
            756 => [
                0 => '2007',
                1 => 'Ford',
                2 => 'Fusion',
            ],
            757 => [
                0 => '2007',
                1 => 'Mazda',
                2 => 'B-Series',
            ],
            758 => [
                0 => '2007',
                1 => 'Lincoln',
                2 => 'Navigator',
            ],
            759 => [
                0 => '2007',
                1 => 'Chrysler',
                2 => '300',
            ],
            760 => [
                0 => '2008',
                1 => 'Audi',
                2 => 'A8',
            ],
            761 => [
                0 => '2008',
                1 => 'Audi',
                2 => 'A8',
            ],
            762 => [
                0 => '2008',
                1 => 'Porsche',
                2 => 'Boxster',
            ],
            763 => [
                0 => '2008',
                1 => 'Pontiac',
                2 => 'Torrent',
            ],
            764 => [
                0 => '2008',
                1 => 'Ford',
                2 => 'Escape',
            ],
            765 => [
                0 => '2008',
                1 => 'Lexus',
                2 => 'GS',
            ],
            766 => [
                0 => '2008',
                1 => 'Nissan',
                2 => 'Sentra',
            ],
            767 => [
                0 => '2008',
                1 => 'Volvo',
                2 => 'C30',
            ],
            768 => [
                0 => '2008',
                1 => 'Cadillac',
                2 => 'STS',
            ],
            769 => [
                0 => '2008',
                1 => 'Chevrolet',
                2 => 'Silverado 1500',
            ],
            770 => [
                0 => '2008',
                1 => 'GMC',
                2 => 'Yukon',
            ],
            771 => [
                0 => '2008',
                1 => 'Audi',
                2 => 'TT',
            ],
            772 => [
                0 => '2008',
                1 => 'Mazda',
                2 => 'Mazda3',
            ],
            773 => [
                0 => '2008',
                1 => 'Ford',
                2 => 'Fusion',
            ],
            774 => [
                0 => '2008',
                1 => 'Nissan',
                2 => 'Titan',
            ],
            775 => [
                0 => '2008',
                1 => 'Mercedes-Benz',
                2 => 'S-Class',
            ],
            776 => [
                0 => '2008',
                1 => 'Dodge',
                2 => 'Nitro',
            ],
            777 => [
                0 => '2008',
                1 => 'Subaru',
                2 => 'Legacy',
            ],
            778 => [
                0 => '2008',
                1 => 'Lexus',
                2 => 'GX',
            ],
            779 => [
                0 => '2008',
                1 => 'Lexus',
                2 => 'LS',
            ],
            780 => [
                0 => '2008',
                1 => 'Mercedes-Benz',
                2 => 'R-Class',
            ],
            781 => [
                0 => '2008',
                1 => 'GMC',
                2 => 'Savana 3500',
            ],
            782 => [
                0 => '2008',
                1 => 'Mazda',
                2 => 'Miata MX-5',
            ],
            783 => [
                0 => '2008',
                1 => 'Chevrolet',
                2 => 'Suburban 2500',
            ],
            784 => [
                0 => '2008',
                1 => 'Mitsubishi',
                2 => 'Lancer',
            ],
            785 => [
                0 => '2008',
                1 => 'Hyundai',
                2 => 'Elantra',
            ],
            786 => [
                0 => '2008',
                1 => 'Audi',
                2 => 'RS4',
            ],
            787 => [
                0 => '2008',
                1 => 'Cadillac',
                2 => 'Escalade ESV',
            ],
            788 => [
                0 => '2008',
                1 => 'BMW',
                2 => 'X3',
            ],
            789 => [
                0 => '2008',
                1 => 'Chevrolet',
                2 => 'Uplander',
            ],
            790 => [
                0 => '2008',
                1 => 'Jaguar',
                2 => 'X-Type',
            ],
            791 => [
                0 => '2008',
                1 => 'Porsche',
                2 => 'Cayenne',
            ],
            792 => [
                0 => '2008',
                1 => 'GMC',
                2 => 'Yukon',
            ],
            793 => [
                0 => '2008',
                1 => 'Panoz',
                2 => 'Esperante',
            ],
            794 => [
                0 => '2008',
                1 => 'BMW',
                2 => '1 Series',
            ],
            795 => [
                0 => '2008',
                1 => 'Ford',
                2 => 'Fusion',
            ],
            796 => [
                0 => '2008',
                1 => 'Jaguar',
                2 => 'XJ',
            ],
            797 => [
                0 => '2008',
                1 => 'Mercedes-Benz',
                2 => 'C-Class',
            ],
            798 => [
                0 => '2008',
                1 => 'Ford',
                2 => 'E150',
            ],
            799 => [
                0 => '2008',
                1 => 'Mercedes-Benz',
                2 => 'S-Class',
            ],
            800 => [
                0 => '2008',
                1 => 'Audi',
                2 => 'S4',
            ],
            801 => [
                0 => '2008',
                1 => 'Lexus',
                2 => 'IS',
            ],
            802 => [
                0 => '2008',
                1 => 'Volkswagen',
                2 => 'Rabbit',
            ],
            803 => [
                0 => '2008',
                1 => 'MINI',
                2 => 'Clubman',
            ],
            804 => [
                0 => '2008',
                1 => 'Land Rover',
                2 => 'Discovery',
            ],
            805 => [
                0 => '2008',
                1 => 'Chevrolet',
                2 => 'Colorado',
            ],
            806 => [
                0 => '2008',
                1 => 'Lexus',
                2 => 'IS',
            ],
            807 => [
                0 => '2008',
                1 => 'Dodge',
                2 => 'Magnum',
            ],
            808 => [
                0 => '2008',
                1 => 'Lamborghini',
                2 => 'MurciÃ©lago LP640',
            ],
            809 => [
                0 => '2008',
                1 => 'Lincoln',
                2 => 'Mark LT',
            ],
            810 => [
                0 => '2008',
                1 => 'Ford',
                2 => 'Explorer Sport Trac',
            ],
            811 => [
                0 => '2008',
                1 => 'Dodge',
                2 => 'Nitro',
            ],
            812 => [
                0 => '2008',
                1 => 'Honda',
                2 => 'S2000',
            ],
            813 => [
                0 => '2008',
                1 => 'Toyota',
                2 => 'Avalon',
            ],
            814 => [
                0 => '2008',
                1 => 'Hyundai',
                2 => 'Tiburon',
            ],
            815 => [
                0 => '2008',
                1 => 'Chevrolet',
                2 => 'Silverado',
            ],
            816 => [
                0 => '2008',
                1 => 'Mazda',
                2 => 'Tribute',
            ],
            817 => [
                0 => '2008',
                1 => 'Ford',
                2 => 'E150',
            ],
            818 => [
                0 => '2009',
                1 => 'GMC',
                2 => 'Sierra',
            ],
            819 => [
                0 => '2009',
                1 => 'Chrysler',
                2 => 'PT Cruiser',
            ],
            820 => [
                0 => '2009',
                1 => 'Volkswagen',
                2 => 'Routan',
            ],
            821 => [
                0 => '2009',
                1 => 'Volvo',
                2 => 'C70',
            ],
            822 => [
                0 => '2009',
                1 => 'Volvo',
                2 => 'XC60',
            ],
            823 => [
                0 => '2009',
                1 => 'Nissan',
                2 => 'Maxima',
            ],
            824 => [
                0 => '2009',
                1 => 'Infiniti',
                2 => 'G37',
            ],
            825 => [
                0 => '2009',
                1 => 'Land Rover',
                2 => 'Range Rover',
            ],
            826 => [
                0 => '2009',
                1 => 'Audi',
                2 => 'S8',
            ],
            827 => [
                0 => '2009',
                1 => 'Honda',
                2 => 'Fit',
            ],
            828 => [
                0 => '2009',
                1 => 'Aston Martin',
                2 => 'DBS',
            ],
            829 => [
                0 => '2009',
                1 => 'Mercedes-Benz',
                2 => 'CLS-Class',
            ],
            830 => [
                0 => '2009',
                1 => 'BMW',
                2 => '6 Series',
            ],
            831 => [
                0 => '2009',
                1 => 'Infiniti',
                2 => 'G',
            ],
            832 => [
                0 => '2009',
                1 => 'GMC',
                2 => 'Envoy',
            ],
            833 => [
                0 => '2009',
                1 => 'Ford',
                2 => 'E250',
            ],
            834 => [
                0 => '2009',
                1 => 'Subaru',
                2 => 'Forester',
            ],
            835 => [
                0 => '2009',
                1 => 'Volvo',
                2 => 'C30',
            ],
            836 => [
                0 => '2009',
                1 => 'Chevrolet',
                2 => 'Traverse',
            ],
            837 => [
                0 => '2009',
                1 => 'Nissan',
                2 => 'Murano',
            ],
            838 => [
                0 => '2009',
                1 => 'Pontiac',
                2 => 'G6',
            ],
            839 => [
                0 => '2009',
                1 => 'Subaru',
                2 => 'Impreza',
            ],
            840 => [
                0 => '2009',
                1 => 'Hummer',
                2 => 'H2',
            ],
            841 => [
                0 => '2009',
                1 => 'Chevrolet',
                2 => 'Suburban',
            ],
            842 => [
                0 => '2009',
                1 => 'Cadillac',
                2 => 'CTS-V',
            ],
            843 => [
                0 => '2009',
                1 => 'Porsche',
                2 => 'Boxster',
            ],
            844 => [
                0 => '2009',
                1 => 'Rolls-Royce',
                2 => 'Phantom',
            ],
            845 => [
                0 => '2009',
                1 => 'Nissan',
                2 => 'Murano',
            ],
            846 => [
                0 => '2009',
                1 => 'Maserati',
                2 => 'GranTurismo',
            ],
            847 => [
                0 => '2009',
                1 => 'Maybach',
                2 => 'Landaulet',
            ],
            848 => [
                0 => '2009',
                1 => 'Infiniti',
                2 => 'QX',
            ],
            849 => [
                0 => '2009',
                1 => 'Dodge',
                2 => 'Ram',
            ],
            850 => [
                0 => '2009',
                1 => 'Mitsubishi',
                2 => 'Galant',
            ],
            851 => [
                0 => '2009',
                1 => 'Volvo',
                2 => 'XC60',
            ],
            852 => [
                0 => '2009',
                1 => 'Mazda',
                2 => 'Mazdaspeed 3',
            ],
            853 => [
                0 => '2009',
                1 => 'Saab',
                2 => '9-7X',
            ],
            854 => [
                0 => '2009',
                1 => 'BMW',
                2 => 'Z4',
            ],
            855 => [
                0 => '2009',
                1 => 'Volkswagen',
                2 => 'Routan',
            ],
            856 => [
                0 => '2009',
                1 => 'Porsche',
                2 => '911',
            ],
            857 => [
                0 => '2009',
                1 => 'Mercedes-Benz',
                2 => 'S-Class',
            ],
            858 => [
                0 => '2009',
                1 => 'Lexus',
                2 => 'SC',
            ],
            859 => [
                0 => '2009',
                1 => 'Ford',
                2 => 'F450',
            ],
            860 => [
                0 => '2009',
                1 => 'Chrysler',
                2 => 'PT Cruiser',
            ],
            861 => [
                0 => '2009',
                1 => 'Nissan',
                2 => '350Z',
            ],
            862 => [
                0 => '2010',
                1 => 'Jaguar',
                2 => 'XF',
            ],
            863 => [
                0 => '2010',
                1 => 'Scion',
                2 => 'tC',
            ],
            864 => [
                0 => '2010',
                1 => 'Volkswagen',
                2 => 'Passat',
            ],
            865 => [
                0 => '2010',
                1 => 'Chevrolet',
                2 => 'Suburban',
            ],
            866 => [
                0 => '2010',
                1 => 'Ford',
                2 => 'F350',
            ],
            867 => [
                0 => '2010',
                1 => 'Buick',
                2 => 'Lucerne',
            ],
            868 => [
                0 => '2010',
                1 => 'Lexus',
                2 => 'GS',
            ],
            869 => [
                0 => '2010',
                1 => 'Toyota',
                2 => 'Tundra',
            ],
            870 => [
                0 => '2010',
                1 => 'Ford',
                2 => 'F450',
            ],
            871 => [
                0 => '2010',
                1 => 'BMW',
                2 => 'M3',
            ],
            872 => [
                0 => '2010',
                1 => 'Land Rover',
                2 => 'Discovery',
            ],
            873 => [
                0 => '2010',
                1 => 'Chevrolet',
                2 => 'Malibu',
            ],
            874 => [
                0 => '2010',
                1 => 'Hyundai',
                2 => 'Azera',
            ],
            875 => [
                0 => '2010',
                1 => 'Chevrolet',
                2 => 'Malibu',
            ],
            876 => [
                0 => '2010',
                1 => 'Land Rover',
                2 => 'Range Rover Sport',
            ],
            877 => [
                0 => '2010',
                1 => 'Suzuki',
                2 => 'Equator',
            ],
            878 => [
                0 => '2010',
                1 => 'Hyundai',
                2 => 'Accent',
            ],
            879 => [
                0 => '2010',
                1 => 'Porsche',
                2 => 'Boxster',
            ],
            880 => [
                0 => '2010',
                1 => 'Jeep',
                2 => 'Grand Cherokee',
            ],
            881 => [
                0 => '2010',
                1 => 'Honda',
                2 => 'Odyssey',
            ],
            882 => [
                0 => '2010',
                1 => 'Mercedes-Benz',
                2 => 'CLS-Class',
            ],
            883 => [
                0 => '2010',
                1 => 'Cadillac',
                2 => 'CTS-V',
            ],
            884 => [
                0 => '2010',
                1 => 'Volvo',
                2 => 'S40',
            ],
            885 => [
                0 => '2010',
                1 => 'Dodge',
                2 => 'Ram 2500',
            ],
            886 => [
                0 => '2010',
                1 => 'Kia',
                2 => 'Optima',
            ],
            887 => [
                0 => '2010',
                1 => 'Chevrolet',
                2 => 'Silverado 1500',
            ],
            888 => [
                0 => '2010',
                1 => 'Audi',
                2 => 'TT',
            ],
            889 => [
                0 => '2010',
                1 => 'Subaru',
                2 => 'Impreza WRX',
            ],
            890 => [
                0 => '2010',
                1 => 'Toyota',
                2 => 'Land Cruiser',
            ],
            891 => [
                0 => '2010',
                1 => 'Porsche',
                2 => 'Cayenne',
            ],
            892 => [
                0 => '2010',
                1 => 'Dodge',
                2 => 'Caliber',
            ],
            893 => [
                0 => '2010',
                1 => 'Volvo',
                2 => 'S40',
            ],
            894 => [
                0 => '2010',
                1 => 'Mercedes-Benz',
                2 => 'R-Class',
            ],
            895 => [
                0 => '2010',
                1 => 'Cadillac',
                2 => 'CTS-V',
            ],
            896 => [
                0 => '2010',
                1 => 'Ferrari',
                2 => 'California',
            ],
            897 => [
                0 => '2010',
                1 => 'Chevrolet',
                2 => 'Aveo',
            ],
            898 => [
                0 => '2010',
                1 => 'Toyota',
                2 => 'Sienna',
            ],
            899 => [
                0 => '2010',
                1 => 'Audi',
                2 => 'Q5',
            ],
            900 => [
                0 => '2010',
                1 => 'Subaru',
                2 => 'Impreza WRX',
            ],
            901 => [
                0 => '2010',
                1 => 'Mazda',
                2 => 'CX-9',
            ],
            902 => [
                0 => '2010',
                1 => 'Toyota',
                2 => 'Camry Hybrid',
            ],
            903 => [
                0 => '2010',
                1 => 'Ford',
                2 => 'F-Series Super Duty',
            ],
            904 => [
                0 => '2010',
                1 => 'Volkswagen',
                2 => 'CC',
            ],
            905 => [
                0 => '2010',
                1 => 'Bentley',
                2 => 'Continental GT',
            ],
            906 => [
                0 => '2010',
                1 => 'BMW',
                2 => 'M5',
            ],
            907 => [
                0 => '2010',
                1 => 'Hummer',
                2 => 'H3T',
            ],
            908 => [
                0 => '2010',
                1 => 'Ford',
                2 => 'Focus',
            ],
            909 => [
                0 => '2011',
                1 => 'Audi',
                2 => 'A3',
            ],
            910 => [
                0 => '2011',
                1 => 'Ford',
                2 => 'Fusion',
            ],
            911 => [
                0 => '2011',
                1 => 'MINI',
                2 => 'Countryman',
            ],
            912 => [
                0 => '2011',
                1 => 'GMC',
                2 => 'Sierra 3500',
            ],
            913 => [
                0 => '2011',
                1 => 'GMC',
                2 => 'Terrain',
            ],
            914 => [
                0 => '2011',
                1 => 'Dodge',
                2 => 'Challenger',
            ],
            915 => [
                0 => '2011',
                1 => 'Lincoln',
                2 => 'Navigator L',
            ],
            916 => [
                0 => '2011',
                1 => 'Chevrolet',
                2 => 'Tahoe',
            ],
            917 => [
                0 => '2011',
                1 => 'Maybach',
                2 => '57',
            ],
            918 => [
                0 => '2011',
                1 => 'Mitsubishi',
                2 => 'Eclipse',
            ],
            919 => [
                0 => '2011',
                1 => 'Subaru',
                2 => 'Legacy',
            ],
            920 => [
                0 => '2011',
                1 => 'Lotus',
                2 => 'Exige',
            ],
            921 => [
                0 => '2011',
                1 => 'Porsche',
                2 => 'Cayenne',
            ],
            922 => [
                0 => '2011',
                1 => 'Ford',
                2 => 'F-Series Super Duty',
            ],
            923 => [
                0 => '2011',
                1 => 'BMW',
                2 => 'M3',
            ],
            924 => [
                0 => '2011',
                1 => 'Ford',
                2 => 'Taurus',
            ],
            925 => [
                0 => '2011',
                1 => 'Ford',
                2 => 'E-Series',
            ],
            926 => [
                0 => '2011',
                1 => 'Nissan',
                2 => 'Quest',
            ],
            927 => [
                0 => '2011',
                1 => 'Hyundai',
                2 => 'Sonata',
            ],
            928 => [
                0 => '2011',
                1 => 'Maserati',
                2 => 'GranTurismo',
            ],
            929 => [
                0 => '2011',
                1 => 'Volvo',
                2 => 'C30',
            ],
            930 => [
                0 => '2011',
                1 => 'Toyota',
                2 => 'Matrix',
            ],
            931 => [
                0 => '2011',
                1 => 'Honda',
                2 => 'CR-V',
            ],
            932 => [
                0 => '2011',
                1 => 'Dodge',
                2 => 'Dakota',
            ],
            933 => [
                0 => '2011',
                1 => 'Subaru',
                2 => 'Outback',
            ],
            934 => [
                0 => '2011',
                1 => 'Ram',
                2 => '2500',
            ],
            935 => [
                0 => '2011',
                1 => 'Cadillac',
                2 => 'Escalade ESV',
            ],
            936 => [
                0 => '2011',
                1 => 'Ford',
                2 => 'F-Series Super Duty',
            ],
            937 => [
                0 => '2011',
                1 => 'Hyundai',
                2 => 'Santa Fe',
            ],
            938 => [
                0 => '2011',
                1 => 'Nissan',
                2 => 'Altima',
            ],
            939 => [
                0 => '2011',
                1 => 'Ford',
                2 => 'F-Series',
            ],
            940 => [
                0 => '2011',
                1 => 'Aston Martin',
                2 => 'Vantage',
            ],
            941 => [
                0 => '2011',
                1 => 'Chevrolet',
                2 => 'Camaro',
            ],
            942 => [
                0 => '2011',
                1 => 'Toyota',
                2 => 'Tacoma',
            ],
            943 => [
                0 => '2011',
                1 => 'GMC',
                2 => 'Savana 3500',
            ],
            944 => [
                0 => '2011',
                1 => 'Chevrolet',
                2 => 'Silverado 2500',
            ],
            945 => [
                0 => '2011',
                1 => 'Lincoln',
                2 => 'MKT',
            ],
            946 => [
                0 => '2011',
                1 => 'Ford',
                2 => 'Edge',
            ],
            947 => [
                0 => '2011',
                1 => 'Dodge',
                2 => 'Charger',
            ],
            948 => [
                0 => '2011',
                1 => 'Porsche',
                2 => 'Panamera',
            ],
            949 => [
                0 => '2012',
                1 => 'Lamborghini',
                2 => 'Gallardo',
            ],
            950 => [
                0 => '2012',
                1 => 'Nissan',
                2 => '370Z',
            ],
            951 => [
                0 => '2012',
                1 => 'Hyundai',
                2 => 'Elantra',
            ],
            952 => [
                0 => '2012',
                1 => 'Ford',
                2 => 'F350',
            ],
            953 => [
                0 => '2012',
                1 => 'Lexus',
                2 => 'LS',
            ],
            954 => [
                0 => '2012',
                1 => 'GMC',
                2 => 'Acadia',
            ],
            955 => [
                0 => '2012',
                1 => 'Jeep',
                2 => 'Liberty',
            ],
            956 => [
                0 => '2012',
                1 => 'Jaguar',
                2 => 'XF',
            ],
            957 => [
                0 => '2012',
                1 => 'Lincoln',
                2 => 'MKS',
            ],
            958 => [
                0 => '2012',
                1 => 'Volkswagen',
                2 => 'Tiguan',
            ],
            959 => [
                0 => '2012',
                1 => 'Volvo',
                2 => 'XC70',
            ],
            960 => [
                0 => '2012',
                1 => 'Ford',
                2 => 'Flex',
            ],
            961 => [
                0 => '2012',
                1 => 'Nissan',
                2 => 'Sentra',
            ],
            962 => [
                0 => '2012',
                1 => 'Volvo',
                2 => 'XC70',
            ],
            963 => [
                0 => '2012',
                1 => 'GMC',
                2 => 'Yukon XL 2500',
            ],
            964 => [
                0 => '2012',
                1 => 'BMW',
                2 => '5 Series',
            ],
            965 => [
                0 => '2012',
                1 => 'Ram',
                2 => 'C/V',
            ],
            966 => [
                0 => '2012',
                1 => 'Chevrolet',
                2 => 'Avalanche',
            ],
            967 => [
                0 => '2012',
                1 => 'Hyundai',
                2 => 'Genesis',
            ],
            968 => [
                0 => '2012',
                1 => 'BMW',
                2 => '6 Series',
            ],
            969 => [
                0 => '2012',
                1 => 'Nissan',
                2 => 'Murano',
            ],
            970 => [
                0 => '2012',
                1 => 'Lexus',
                2 => 'HS',
            ],
            971 => [
                0 => '2012',
                1 => 'Toyota',
                2 => 'Avalon',
            ],
            972 => [
                0 => '2012',
                1 => 'Toyota',
                2 => 'Highlander',
            ],
            973 => [
                0 => '2012',
                1 => 'Lincoln',
                2 => 'MKZ',
            ],
            974 => [
                0 => '2012',
                1 => 'Dodge',
                2 => 'Caravan',
            ],
            975 => [
                0 => '2012',
                1 => 'Mazda',
                2 => 'MX-5',
            ],
            976 => [
                0 => '2012',
                1 => 'Infiniti',
                2 => 'EX',
            ],
            977 => [
                0 => '2012',
                1 => 'Lexus',
                2 => 'RX Hybrid',
            ],
            978 => [
                0 => '2012',
                1 => 'Nissan',
                2 => 'Maxima',
            ],
            979 => [
                0 => '2012',
                1 => 'BMW',
                2 => '1 Series',
            ],
            980 => [
                0 => '2012',
                1 => 'Ford',
                2 => 'Fusion',
            ],
            981 => [
                0 => '2012',
                1 => 'Ferrari',
                2 => '458 Italia',
            ],
            982 => [
                0 => '2012',
                1 => 'Cadillac',
                2 => 'Escalade EXT',
            ],
            983 => [
                0 => '2012',
                1 => 'BMW',
                2 => '1 Series',
            ],
            984 => [
                0 => '2012',
                1 => 'GMC',
                2 => 'Sierra',
            ],
            985 => [
                0 => '2012',
                1 => 'Dodge',
                2 => 'Durango',
            ],
            986 => [
                0 => '2012',
                1 => 'Chrysler',
                2 => 'Town & Country',
            ],
            987 => [
                0 => '2012',
                1 => 'Tesla',
                2 => 'Roadster',
            ],
            988 => [
                0 => '2012',
                1 => 'Buick',
                2 => 'Enclave',
            ],
            989 => [
                0 => '2012',
                1 => 'Honda',
                2 => 'Ridgeline',
            ],
            990 => [
                0 => '2012',
                1 => 'Toyota',
                2 => 'FJ Cruiser',
            ],
            991 => [
                0 => '2012',
                1 => 'Hyundai',
                2 => 'Santa Fe',
            ],
            992 => [
                0 => '2012',
                1 => 'Acura',
                2 => 'MDX',
            ],
            993 => [
                0 => '2012',
                1 => 'Mitsubishi',
                2 => 'Lancer',
            ],
            994 => [
                0 => '2013',
                1 => 'Porsche',
                2 => '911',
            ],
            995 => [
                0 => '2013',
                1 => 'Volvo',
                2 => 'S60',
            ],
            996 => [
                0 => '2013',
                1 => 'Infiniti',
                2 => 'JX',
            ],
            997 => [
                0 => '2013',
                1 => 'Lexus',
                2 => 'GS',
            ],
            998 => [
                0 => '2013',
                1 => 'GMC',
                2 => 'Sierra 1500',
            ],
            999 => [
                0 => '2013',
                1 => 'BMW',
                2 => 'X5',
            ],
        ];
        foreach ($cars as $car) {
            $year = Year::updateOrCreate(['years' => $car[0]], ['years' => $car[0]]);
            $company = CarCompany::updateOrCreate(['name' => $car[1], 'year_id' => $year->id], ['name' => $car[1], 'year_id' => $year->id]);
            CarModel::create([
                'car_company_id' => $company->id,
                'year_id' => $year->id,
                'name' => $car[2],
                'features' => json_encode($faker->sentences()),
                'price' => $faker->numberBetween(100000, 1000000),
            ]);
        }
    }
}
