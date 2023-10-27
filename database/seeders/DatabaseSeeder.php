<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Classic;
use App\Models\Condition;
use App\Models\Make;
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

    }
}
