<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Classic;
use App\Models\Condition;
use App\Models\Make;
use App\Models\Sale;
use App\Models\State;
use App\Models\Vehicle;
use App\Models\Vin;
use App\Models\Year;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    protected array $vins = [
        ['identifier' => 'A3B2D9F1G8H6J45'],
        ['identifier' => 'L7M0N2P4Q9R1S37'],
        ['identifier' => 'U5V8W3Y1Z7A9B29'],
        ['identifier' => 'C4D7E0F2G5H8I36'],
        ['identifier' => 'K9L1M4N7O0P3Q68'],
        ['identifier' => 'STU5V8W1Y4Z9A97'],
        ['identifier' => 'B2C4D7E0F2G5HI3J'],
        ['identifier' => 'J6K9L1M4N7O0P36'],
        ['identifier' => 'R8S5TU3V6W1Y4A79'],
        ['identifier' => 'Z9A3B2D9F1G8H6J'],
        ['identifier' => 'I0K2L7M0N2P4Q9R1'],
        ['identifier' => 'STU5V8W1Y4Z9A98'],
        ['identifier' => 'A9B2C4D7E0F2G5HI'],
        ['identifier' => 'J6K9L1M4N7O0P37'],
        ['identifier' => 'R8S5TU3V6W1Y4A76'],
        ['identifier' => 'Z9A3B2D9F1G8H6J5'],
        ['identifier' => 'I0K2L7M0N2P4Q9R12'],
        ['identifier' => 'STU5V8W1Y4Z9A99'],
        ['identifier' => 'B2C4D7E0F2G5HI34'],
        ['identifier' => 'K9L1M4N7O0P3Q69'],
        ['identifier' => 'C4D7E0F2G5HI3J67'],
        ['identifier' => 'L7M0N2P4Q9R1S3T6'],
        ['identifier' => 'U5V8W3Y1Z7A9B28'],
        ['identifier' => 'A3B2D9F1G8H6J43'],
        ['identifier' => 'I0K2L7M0N2P4Q9R10'],
        ['identifier' => 'STU5V8W1Y4Z9A96'],
        ['identifier' => 'B2C4D7E0F2G5HI32'],
        ['identifier' => 'K9L1M4N7O0P3Q67'],
        ['identifier' => 'R8S5TU3V6W1Y4A75'],
        ['identifier' => 'Z9A3B2D9F1G8H6J41'],
        ['identifier' => 'I0K2L7M0N2P4Q9R19'],
        ['identifier' => 'STU5V8W1Y4Z9A95'],
        ['identifier' => 'B2C4D7E0F2G5HI3J5'],
        ['identifier' => 'K9L1M4N7O0P3Q66'],
        ['identifier' => 'C4D7E0F2G5HI3J68'],
        ['identifier' => 'L7M0N2P4Q9R1S3T67'],
        ['identifier' => 'U5V8W3Y1Z7A9B27'],
        ['identifier' => 'A3B2D9F1G8H6J44'],
        ['identifier' => 'I0K2L7M0N2P4Q9R18'],
        ['identifier' => 'STU5V8W1Y4Z9A94'],
        ['identifier' => 'B2C4D7E0F2G5HI33'],
        ['identifier' => 'K9L1M4N7O0P3Q65'],
        ['identifier' => 'R8S5TU3V6W1Y4A74'],
        ['identifier' => 'Z9A3B2D9F1G8H6J42'],
        ['identifier' => 'I0K2L7M0N2P4Q9R17'],
        ['identifier' => 'STU5V8W1Y4Z9A93'],
        ['identifier' => 'B2C4D7E0F2G5HI31'],
        ['identifier' => 'K9L1M4N7O0P3Q64'],
        ['identifier' => 'C4D7E0F2G5HI3J69'],
        ['identifier' => 'L7M0N2P4Q9R1S3T68'],
    ];

    protected array $names = [
        ['name' => '1960'],
        ['name' => '1961'],
        ['name' => '1962'],
        ['name' => '1963'],
        ['name' => '1964'],
        ['name' => '1965'],
        ['name' => '1966'],
        ['name' => '1967'],
        ['name' => '1968'],
        ['name' => '1969'],
        ['name' => '1970'],
        ['name' => '1971'],
        ['name' => '1972'],
        ['name' => '1973'],
        ['name' => '1974'],
        ['name' => '1975'],
        ['name' => '1976'],
        ['name' => '1977'],
        ['name' => '1978'],
        ['name' => '1979']
    ];

    protected array $makes = [
        ['name' => 'Alfa Romeo'],
        ['name' => 'AMC'],
        ['name' => 'Austin-Healey'],
        ['name' => 'BMW'],
        ['name' => 'Buick'],
        ['name' => 'Cadillac'],
        ['name' => 'Chevrolet'],
        ['name' => 'Chrysler'],
        ['name' => 'Dodge'],
        ['name' => 'Fiat'],
        ['name' => 'Ford'],
        ['name' => 'Jaguar'],
        ['name' => 'Jeep'],
        ['name' => 'Lincoln'],
        ['name' => 'MG'],
        ['name' => 'Mercedes-Benz'],
        ['name' => 'Mercury'],
        ['name' => 'Nash'],
        ['name' => 'Oldsmobile'],
        ['name' => 'Packard'],
        ['name' => 'Plymouth'],
        ['name' => 'Pontiac'],
        ['name' => 'Porsche'],
        ['name' => 'Saab'],
        ['name' => 'Studebaker'],
        ['name' => 'Triumph'],
        ['name' => 'Volkswagen'],
        ['name' => 'Volvo']
    ];

    protected array $classics = [
        ['name' => '1800'],
        ['name' => '1800ti'],
        ['name' => '230SL'],
        ['name' => '3000'],
        ['name' => '442'],
        ['name' => '500'],
        ['name' => '911'],
        ['name' => '99'],
        ['name' => 'Ambassador'],
        ['name' => 'Avanti'],
        ['name' => 'Barracuda'],
        ['name' => 'Beetle'],
        ['name' => 'Camaro'],
        ['name' => 'Challenger'],
        ['name' => 'Charger'],
        ['name' => 'Clipper'],
        ['name' => 'Continental'],
        ['name' => 'Corvette'],
        ['name' => 'Cougar'],
        ['name' => 'Cordoba'],
        ['name' => 'Cutlass Supreme'],
        ['name' => 'DeVille'],
        ['name' => 'E-Type'],
        ['name' => 'Fleetwood Brougham'],
        ['name' => 'Giulietta'],
        ['name' => 'GTO'],
        ['name' => 'Gremlin'],
        ['name' => 'Hawk'],
        ['name' => 'Impala'],
        ['name' => 'Javelin'],
        ['name' => 'CJ-5'],
        ['name' => 'Wagoneer'],
        ['name' => 'MGB'],
        ['name' => 'Marquis'],
        ['name' => 'Midget'],
        ['name' => 'Mustang Boss 351'],
        ['name' => 'Newport'],
        ['name' => 'Polara'],
        ['name' => 'Rambler'],
        ['name' => 'Rambler American'],
        ['name' => 'Rambler Matador'],
        ['name' => 'Road Runner'],
        ['name' => 'Riviera'],
        ['name' => 'Skylark'],
        ['name' => 'Spitfire'],
        ['name' => 'Sprite'],
        ['name' => 'Thunderbird'],
        ['name' => 'Trans Am'],
        ['name' => 'TR4A'],
        ['name' => 'XKE']
    ];


    public function run(): void
    {
        foreach($this->vins as $vin) { Vin::create($vin); }

        foreach($this->names as $year) { Year::create($year); }

        foreach($this->makes as $make) { Make::create($make); }

        foreach($this->classics as $classic) { Classic::create($classic); }

        Condition::create(['name' => 'good']);
        Condition::create(['name' => 'fair']);
        Condition::create(['name' => 'bad']);

        Vehicle::create([
            'vin_id' => '1',
            'year_id' => '1',
            'make_id' => '7',
            'classic_id' => '29',
            'condition_id' => '3',
            'mileage' => '135902'
        ]);

        Vehicle::create([
            'vin_id' => '2',
            'year_id' => '1',
            'make_id' => '3',
            'classic_id' => '4',
            'condition_id' => '3',
            'mileage' => '82753'
        ]);

        Vehicle::create([
            'vin_id' => '3',
            'year_id' => '1',
            'make_id' => '20',
            'classic_id' => '28',
            'condition_id' => '1',
            'mileage' => '67593'
        ]);

        Vehicle::create([
            'vin_id' => '4',
            'year_id' => '2',
            'make_id' => '11',
            'classic_id' => '47',
            'condition_id' => '2',
            'mileage' => '198364'
        ]);

        Vehicle::create([
            'vin_id' => '5',
            'year_id' => '2',
            'make_id' => '12',
            'classic_id' => '23',
            'condition_id' => '1',
            'mileage' => '93827'
        ]);

        Vehicle::create([
            'vin_id' => '6',
            'year_id' => '2',
            'make_id' => '7',
            'classic_id' => '18',
            'condition_id' => '3',
            'mileage' => '57293'
        ]);

        Vehicle::create([
            'vin_id' => '7',
            'year_id' => '3',
            'make_id' => '5',
            'classic_id' => '44',
            'condition_id' => '2',
            'mileage' => '14835'
        ]);

        Vehicle::create([
            'vin_id' => '8',
            'year_id' => '3',
            'make_id' => '1',
            'classic_id' => '25',
            'condition_id' => '1',
            'mileage' => '239418'
        ]);

        Vehicle::create([
            'vin_id' => '9',
            'year_id' => '3',
            'make_id' => '18',
            'classic_id' => '39',
            'condition_id' => '3',
            'mileage' => '93284'
        ]);

        Vehicle::create([
            'vin_id' => '10',
            'year_id' => '4',
            'make_id' => '9',
            'classic_id' => '38',
            'condition_id' => '2',
            'mileage' => '183627'
        ]);

        Vehicle::create([
            'vin_id' => '11',
            'year_id' => '4',
            'make_id' => '10',
            'classic_id' => '6',
            'condition_id' => '1',
            'mileage' => '72834'
        ]);

        Vehicle::create([
            'vin_id' => '12',
            'year_id' => '4',
            'make_id' => '13',
            'classic_id' => '32',
            'condition_id' => '3',
            'mileage' => '51934'
        ]);

        Vehicle::create([
            'vin_id' => '13',
            'year_id' => '5',
            'make_id' => '21',
            'classic_id' => '11',
            'condition_id' => '2',
            'mileage' => '76342'
        ]);

        Vehicle::create([
            'vin_id' => '14',
            'year_id' => '5',
            'make_id' => '16',
            'classic_id' => '3',
            'condition_id' => '1',
            'mileage' => '124863'
        ]);

        Vehicle::create([
            'vin_id' => '15',
            'year_id' => '5',
            'make_id' => '2',
            'classic_id' => '40',
            'condition_id' => '3',
            'mileage' => '61327'
        ]);

        Vehicle::create([
            'vin_id' => '16',
            'year_id' => '6',
            'make_id' => '6',
            'classic_id' => '22',
            'condition_id' => '2',
            'mileage' => '28947'
        ]);

        Vehicle::create([
            'vin_id' => '17',
            'year_id' => '6',
            'make_id' => '4',
            'classic_id' => '2',
            'condition_id' => '1',
            'mileage' => '92384'
        ]);

        Vehicle::create([
            'vin_id' => '18',
            'year_id' => '6',
            'make_id' => '2',
            'classic_id' => '9',
            'condition_id' => '3',
            'mileage' => '78932'
        ]);

        Vehicle::create([
            'vin_id' => '19',
            'year_id' => '7',
            'make_id' => '22',
            'classic_id' => '26',
            'condition_id' => '2',
            'mileage' => '52134'
        ]);

        Vehicle::create([
            'vin_id' => '20',
            'year_id' => '7',
            'make_id' => '23',
            'classic_id' => '7',
            'condition_id' => '1',
            'mileage' => '18374'
        ]);

        Vehicle::create([
            'vin_id' => '21',
            'year_id' => '7',
            'make_id' => '15',
            'classic_id' => '35',
            'condition_id' => '3',
            'mileage' => '217483'
        ]);

        Vehicle::create([
            'vin_id' => '22',
            'year_id' => '8',
            'make_id' => '19',
            'classic_id' => '5',
            'condition_id' => '2',
            'mileage' => '92834'
        ]);

        Vehicle::create([
            'vin_id' => '23',
            'year_id' => '8',
            'make_id' => '27',
            'classic_id' => '12',
            'condition_id' => '1',
            'mileage' => '62834'
        ]);

        Vehicle::create([
            'vin_id' => '24',
            'year_id' => '8',
            'make_id' => '26',
            'classic_id' => '49',
            'condition_id' => '3',
            'mileage' => '48192'
        ]);

        Vehicle::create([
            'vin_id' => '25',
            'year_id' => '9',
            'make_id' => '8',
            'classic_id' => '37',
            'condition_id' => '2',
            'mileage' => '14853'
        ]);

        Vehicle::create([
            'vin_id' => '26',
            'year_id' => '9',
            'make_id' => '28',
            'classic_id' => '1',
            'condition_id' => '1',
            'mileage' => '109384'
        ]);

        Vehicle::create([
            'vin_id' => '27',
            'year_id' => '9',
            'make_id' => '3',
            'classic_id' => '46',
            'condition_id' => '3',
            'mileage' => '72834'
        ]);

        Vehicle::create([
            'vin_id' => '28',
            'year_id' => '10',
            'make_id' => '17',
            'classic_id' => '19',
            'condition_id' => '2',
            'mileage' => '43928'
        ]);

        Vehicle::create([
            'vin_id' => '29',
            'year_id' => '10',
            'make_id' => '24',
            'classic_id' => '8',
            'condition_id' => '1',
            'mileage' => '29834'
        ]);

        Vehicle::create([
            'vin_id' => '30',
            'year_id' => '10',
            'make_id' => '12',
            'classic_id' => '50',
            'condition_id' => '3',
            'mileage' => '69172'
        ]);

        Vehicle::create([
            'vin_id' => '31',
            'year_id' => '11',
            'make_id' => '14',
            'classic_id' => '17',
            'condition_id' => '2',
            'mileage' => '83927'
        ]);

        Vehicle::create([
            'vin_id' => '32',
            'year_id' => '11',
            'make_id' => '7',
            'classic_id' => '13',
            'condition_id' => '1',
            'mileage' => '54239'
        ]);

        Vehicle::create([
            'vin_id' => '33',
            'year_id' => '12',
            'make_id' => '25',
            'classic_id' => '10',
            'condition_id' => '3',
            'mileage' => '79283'
        ]);

        Vehicle::create([
            'vin_id' => '34',
            'year_id' => '12',
            'make_id' => '11',
            'classic_id' => '36',
            'condition_id' => '2',
            'mileage' => '34872'
        ]);

        Vehicle::create([
            'vin_id' => '35',
            'year_id' => '13',
            'make_id' => '20',
            'classic_id' => '16',
            'condition_id' => '1',
            'mileage' => '42837'
        ]);

        Vehicle::create([
            'vin_id' => '36',
            'year_id' => '13',
            'make_id' => '5',
            'classic_id' => '43',
            'condition_id' => '3',
            'mileage' => '92384'
        ]);

        Vehicle::create([
            'vin_id' => '37',
            'year_id' => '14',
            'make_id' => '2',
            'classic_id' => '30',
            'condition_id' => '2',
            'mileage' => '58234'
        ]);

        Vehicle::create([
            'vin_id' => '38',
            'year_id' => '14',
            'make_id' => '9',
            'classic_id' => '15',
            'condition_id' => '1',
            'mileage' => '28734'
        ]);

        Vehicle::create([
            'vin_id' => '39',
            'year_id' => '15',
            'make_id' => '9',
            'classic_id' => '14',
            'condition_id' => '3',
            'mileage' => '34892'
        ]);

        Vehicle::create([
            'vin_id' => '40',
            'year_id' => '15',
            'make_id' => '21',
            'classic_id' => '42',
            'condition_id' => '2',
            'mileage' => '18293'
        ]);

        Vehicle::create([
            'vin_id' => '41',
            'year_id' => '16',
            'make_id' => '13',
            'classic_id' => '31',
            'condition_id' => '1',
            'mileage' => '23948'
        ]);

        Vehicle::create([
            'vin_id' => '42',
            'year_id' => '16',
            'make_id' => '6',
            'classic_id' => '24',
            'condition_id' => '3',
            'mileage' => '47182'
        ]);

        Vehicle::create([
            'vin_id' => '43',
            'year_id' => '17',
            'make_id' => '2',
            'classic_id' => '41',
            'condition_id' => '2',
            'mileage' => '92374'
        ]);

        Vehicle::create([
            'vin_id' => '44',
            'year_id' => '17',
            'make_id' => '22',
            'classic_id' => '48',
            'condition_id' => '1',
            'mileage' => '28374'
        ]);

        Vehicle::create([
            'vin_id' => '45',
            'year_id' => '18',
            'make_id' => '2',
            'classic_id' => '27',
            'condition_id' => '3',
            'mileage' => '49281'
        ]);

        Vehicle::create([
            'vin_id' => '46',
            'year_id' => '18',
            'make_id' => '19',
            'classic_id' => '21',
            'condition_id' => '2',
            'mileage' => '14853'
        ]);

        Vehicle::create([
            'vin_id' => '47',
            'year_id' => '19',
            'make_id' => '15',
            'classic_id' => '33',
            'condition_id' => '1',
            'mileage' => '128374'
        ]);

        Vehicle::create([
            'vin_id' => '48',
            'year_id' => '19',
            'make_id' => '8',
            'classic_id' => '20',
            'condition_id' => '3',
            'mileage' => '72834'
        ]);

        Vehicle::create([
            'vin_id' => '49',
            'year_id' => '20',
            'make_id' => '26',
            'classic_id' => '45',
            'condition_id' => '2',
            'mileage' => '43928'
        ]);

        Vehicle::create([
            'vin_id' => '50',
            'year_id' => '20',
            'make_id' => '17',
            'classic_id' => '34',
            'condition_id' => '1',
            'mileage' => '69172'
        ]);

        Sale::create([
            'vehicle_id' => '1',
            'sell_by_date' => date(' 2023-11-07'),
            'asking_price' => 46937.45,
            'is_sold' => false
        ]);

        Sale::create([
            'vehicle_id' => '2',
            'sell_by_date' => date(' 2023-11-08'),
            'asking_price' => 29375.23,
            'is_sold' => false
        ]);

        Sale::create([
            'vehicle_id' => '3',
            'sell_by_date' => date(' 2023-11-12'),
            'asking_price' => 83856.27,
            'is_sold' => false
        ]);

        Sale::create([
            'vehicle_id' => '4',
            'sell_by_date' => date(' 2023-11-18'),
            'asking_price' => 72462.43,
            'is_sold' => false
        ]);

        Sale::create([
            'vehicle_id' => '5',
            'sell_by_date' => date(' 2023-11-14'),
            'asking_price' => 38267.74,
            'is_sold' => false
        ]);

        Sale::create([
            'vehicle_id' => '6',
            'sell_by_date' => date(' 2023-11-21'),
            'asking_price' => 37524.28,
            'is_sold' => false
        ]);

        Sale::create([
            'vehicle_id' => '7',
            'sell_by_date' => date(' 2023-11-08'),
            'asking_price' => 33464.76,
            'is_sold' => false
        ]);

        Sale::create([
            'vehicle_id' => '8',
            'sell_by_date' => date(' 2023-11-24'),
            'asking_price' => 43872.73,
            'is_sold' => false
        ]);

        Sale::create([
            'vehicle_id' => '9',
            'sell_by_date' => date(' 2023-11-19'),
            'asking_price' => 50276.35,
            'is_sold' => false
        ]);

        Sale::create([
            'vehicle_id' => '10',
            'sell_by_date' => date(' 2023-11-30'),
            'asking_price' => 23937.43,
            'is_sold' => false
        ]);

        Sale::create([
            'vehicle_id' => '11',
            'sell_by_date' => date(' 2023-11-13'),
            'asking_price' => 87253.37,
            'is_sold' => false
        ]);

        Sale::create([
            'vehicle_id' => '12',
            'sell_by_date' => date(' 2023-11-15'),
            'asking_price' => 25783.58,
            'is_sold' => false
        ]);

        Sale::create([
            'vehicle_id' => '13',
            'sell_by_date' => date(' 2023-11-23'),
            'asking_price' => 36927.86,
            'is_sold' => false
        ]);

        Sale::create([
            'vehicle_id' => '14',
            'sell_by_date' => date(' 2023-11-13'),
            'asking_price' => 45769.37,
            'is_sold' => false
        ]);

        Sale::create([
            'vehicle_id' => '15',
            'sell_by_date' => date(' 2023-11-04'),
            'asking_price' => 83673.25,
            'is_sold' => false
        ]);

        Sale::create([
            'vehicle_id' => '16',
            'sell_by_date' => date(' 2023-11-03'),
            'asking_price' => 24845.74,
            'is_sold' => false
        ]);

        Sale::create([
            'vehicle_id' => '17',
            'sell_by_date' => date(' 2023-11-14'),
            'asking_price' => 36486.98,
            'is_sold' => false
        ]);

        Sale::create([
            'vehicle_id' => '18',
            'sell_by_date' => date(' 2023-11-06'),
            'asking_price' => 34536.25,
            'is_sold' => false
        ]);

        Sale::create([
            'vehicle_id' => '19',
            'sell_by_date' => date(' 2023-11-26'),
            'asking_price' => 62846.36,
            'is_sold' => false
        ]);

        Sale::create([
            'vehicle_id' => '20',
            'sell_by_date' => date('2023-11-12'),
            'asking_price' => 71234.89,
            'is_sold' => false
        ]);

        Sale::create([
            'vehicle_id' => '21',
            'sell_by_date' => date('2023-11-25'),
            'asking_price' => 45123.67,
            'is_sold' => false
        ]);

        Sale::create([
            'vehicle_id' => '22',
            'sell_by_date' => date('2023-11-14'),
            'asking_price' => 46937.45,
            'is_sold' => false
        ]);

        Sale::create([
            'vehicle_id' => '23',
            'sell_by_date' => date('2023-11-10'),
            'asking_price' => 65243.12,
            'is_sold' => false
        ]);

        Sale::create([
            'vehicle_id' => '24',
            'sell_by_date' => date('2023-11-20'),
            'asking_price' => 53128.75,
            'is_sold' => false
        ]);

        Sale::create([
            'vehicle_id' => '25',
            'sell_by_date' => date('2023-11-05'),
            'asking_price' => 37982.34,
            'is_sold' => false
        ]);

        Sale::create([
            'vehicle_id' => '26',
            'sell_by_date' => date('2023-11-18'),
            'asking_price' => 89271.23,
            'is_sold' => false
        ]);

        Sale::create([
            'vehicle_id' => '27',
            'sell_by_date' => date('2023-11-01'),
            'asking_price' => 76832.10,
            'is_sold' => false
        ]);

        Sale::create([
            'vehicle_id' => '28',
            'sell_by_date' => date('2023-11-27'),
            'asking_price' => 29534.65,
            'is_sold' => false
        ]);

        Sale::create([
            'vehicle_id' => '29',
            'sell_by_date' => date('2023-11-16'),
            'asking_price' => 62394.76,
            'is_sold' => false
        ]);

        Sale::create([
            'vehicle_id' => '30',
            'sell_by_date' => date('2023-11-09'),
            'asking_price' => 45872.90,
            'is_sold' => false
        ]);

        Sale::create([
            'vehicle_id' => '31',
            'sell_by_date' => date('2023-11-30'),
            'asking_price' => 72618.43,
            'is_sold' => false
        ]);

        Sale::create([
            'vehicle_id' => '32',
            'sell_by_date' => date('2023-11-22'),
            'asking_price' => 58092.56,
            'is_sold' => false
        ]);

        Sale::create([
            'vehicle_id' => '33',
            'sell_by_date' => date('2023-11-03'),
            'asking_price' => 61938.27,
            'is_sold' => false
        ]);

        Sale::create([
            'vehicle_id' => '34',
            'sell_by_date' => date('2023-11-29'),
            'asking_price' => 49823.21,
            'is_sold' => false
        ]);

        Sale::create([
            'vehicle_id' => '35',
            'sell_by_date' => date('2023-11-26'),
            'asking_price' => 37982.56,
            'is_sold' => false
        ]);

        Sale::create([
            'vehicle_id' => '36',
            'sell_by_date' => date('2023-11-08'),
            'asking_price' => 64729.32,
            'is_sold' => false
        ]);

        Sale::create([
            'vehicle_id' => '37',
            'sell_by_date' => date('2023-11-07'),
            'asking_price' => 82913.45,
            'is_sold' => false
        ]);

        Sale::create([
            'vehicle_id' => '38',
            'sell_by_date' => date('2023-11-23'),
            'asking_price' => 29538.92,
            'is_sold' => false
        ]);

        Sale::create([
            'vehicle_id' => '39',
            'sell_by_date' => date('2023-11-15'),
            'asking_price' => 72613.84,
            'is_sold' => false
        ]);

        Sale::create([
            'vehicle_id' => '40',
            'sell_by_date' => date('2023-11-13'),
            'asking_price' => 53498.76,
            'is_sold' => false
        ]);

        Sale::create([
            'vehicle_id' => '41',
            'sell_by_date' => date('2023-11-11'),
            'asking_price' => 62391.28,
            'is_sold' => false
        ]);

        Sale::create([
            'vehicle_id' => '42',
            'sell_by_date' => date('2023-11-21'),
            'asking_price' => 81923.45,
            'is_sold' => false
        ]);

        Sale::create([
            'vehicle_id' => '43',
            'sell_by_date' => date('2023-11-02'),
            'asking_price' => 29534.62,
            'is_sold' => false
        ]);

        Sale::create([
            'vehicle_id' => '44',
            'sell_by_date' => date('2023-11-17'),
            'asking_price' => 64728.93,
            'is_sold' => false
        ]);

        Sale::create([
            'vehicle_id' => '45',
            'sell_by_date' => date('2023-11-24'),
            'asking_price' => 72615.38,
            'is_sold' => false
        ]);

        Sale::create([
            'vehicle_id' => '46',
            'sell_by_date' => date('2023-11-06'),
            'asking_price' => 53497.89,
            'is_sold' => false
        ]);

        Sale::create([
            'vehicle_id' => '47',
            'sell_by_date' => date('2023-11-04'),
            'asking_price' => 81924.95,
            'is_sold' => false
        ]);

        Sale::create([
            'vehicle_id' => '48',
            'sell_by_date' => date('2023-11-28'),
            'asking_price' => 62395.87,
            'is_sold' => false
        ]);

        Sale::create([
            'vehicle_id' => '49',
            'sell_by_date' => date('2023-11-19'),
            'asking_price' => 29536.47,
            'is_sold' => false
        ]);

        Sale::create([
            'vehicle_id' => '50',
            'sell_by_date' => date('2023-11-03'),
            'asking_price' => 72619.23,
            'is_sold' => false
        ]);

        State::create(['name' => 'Alabama']);
        State::create(['name' => 'Alaska']);
        State::create(['name' => 'Arizona']);
        State::create(['name' => 'Arkansas']);
        State::create(['name' => 'California']);
        State::create(['name' => 'Colorado']);
        State::create(['name' => 'Connecticut']);
        State::create(['name' => 'Delaware']);
        State::create(['name' => 'Florida']);
        State::create(['name' => 'Georgia']);
        State::create(['name' => 'Hawaii']);
        State::create(['name' => 'Idaho']);
        State::create(['name' => 'Illinois']);
        State::create(['name' => 'Indiana']);
        State::create(['name' => 'Iowa']);
        State::create(['name' => 'Kansas']);
        State::create(['name' => 'Kentucky']);
        State::create(['name' => 'Louisiana']);
        State::create(['name' => 'Maine']);
        State::create(['name' => 'Maryland']);
        State::create(['name' => 'Massachusetts']);
        State::create(['name' => 'Michigan']);
        State::create(['name' => 'Minnesota']);
        State::create(['name' => 'Mississippi']);
        State::create(['name' => 'Missouri']);
        State::create(['name' => 'Montana']);
        State::create(['name' => 'Nebraska']);
        State::create(['name' => 'Nevada']);
        State::create(['name' => 'New Hampshire']);
        State::create(['name' => 'New Jersey']);
        State::create(['name' => 'New Mexico']);
        State::create(['name' => 'New York']);
        State::create(['name' => 'North Carolina']);
        State::create(['name' => 'North Dakota']);
        State::create(['name' => 'Ohio']);
        State::create(['name' => 'Oklahoma']);
        State::create(['name' => 'Oregon']);
        State::create(['name' => 'Pennsylvania']);
        State::create(['name' => 'Rhode Island']);
        State::create(['name' => 'South Carolina']);
        State::create(['name' => 'South Dakota']);
        State::create(['name' => 'Tennessee']);
        State::create(['name' => 'Texas']);
        State::create(['name' => 'Utah']);
        State::create(['name' => 'Vermont']);
        State::create(['name' => 'Virginia']);
        State::create(['name' => 'Washington']);
        State::create(['name' => 'West Virginia']);
        State::create(['name' => 'Wisconsin']);
        State::create(['name' => 'Wyoming']);

    }
}
