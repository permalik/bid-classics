<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Classic;
use App\Models\Condition;
use App\Models\Make;
use App\Models\Sale;
use App\Models\Seller;
use App\Models\State;
use App\Models\Username;
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

    protected array $years = [
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

        foreach($this->years as $year) { Year::create($year); }

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
            'price' => '46937.45',
            'sell_by_date' => date('2023-11-07'),
            'is_sold' => false,
            'mileage' => '135902',
            'image' => '1960.chevrolet.impala.jpeg',
        ]);

        Vehicle::create([
            'vin_id' => '2',
            'year_id' => '1',
            'make_id' => '3',
            'classic_id' => '4',
            'condition_id' => '3',
            'price' => 29375.23,
            'sell_by_date' => date('2023-11-08'),
            'is_sold' => false,
            'mileage' => '82753',
            'image' => '1960.austin_healey.3000.jpeg',
        ]);

        Vehicle::create([
            'vin_id' => '3',
            'year_id' => '1',
            'make_id' => '20',
            'classic_id' => '28',
            'condition_id' => '1',
            'price' => 83856.27,
            'sell_by_date' => date('2023-11-12'),
            'is_sold' => false,
            'mileage' => '67593',
            'image' => '1960.packard.hawk.png',
        ]);

        Vehicle::create([
            'vin_id' => '4',
            'year_id' => '2',
            'make_id' => '11',
            'classic_id' => '47',
            'condition_id' => '2',
            'price' => 72462.43,
            'sell_by_date' => date('2023-11-18'),
            'is_sold' => false,
            'mileage' => '198364',
            'image' => '1961.ford.thunderbird.jpeg',
        ]);

        Vehicle::create([
            'vin_id' => '5',
            'year_id' => '2',
            'make_id' => '12',
            'classic_id' => '23',
            'condition_id' => '1',
            'price' => 38267.74,
            'sell_by_date' => date('2023-11-14'),
            'is_sold' => false,
            'mileage' => '93827',
            'image' => '1961.jaguar.etype.jpeg',
        ]);

        Vehicle::create([
            'vin_id' => '6',
            'year_id' => '2',
            'make_id' => '7',
            'classic_id' => '18',
            'condition_id' => '3',
            'price' => 37524.28,
            'sell_by_date' => date('2023-11-21'),
            'is_sold' => false,
            'mileage' => '57293',
            'image' => '1961.chevrolet.corvette.jpeg',
        ]);

        Vehicle::create([
            'vin_id' => '7',
            'year_id' => '3',
            'make_id' => '5',
            'classic_id' => '44',
            'condition_id' => '2',
            'price' => 33464.76,
            'sell_by_date' => date('2023-11-08'),
            'is_sold' => false,
            'mileage' => '14835',
            'image' => '1962.buick.skylark.jpeg',
        ]);

        Vehicle::create([
            'vin_id' => '8',
            'year_id' => '3',
            'make_id' => '1',
            'classic_id' => '25',
            'condition_id' => '1',
            'price' => 43872.73,
            'sell_by_date' => date('2023-11-24'),
            'is_sold' => false,
            'mileage' => '239418',
            'image' => '1962.alfa_romeo.giulietta.jpeg',
        ]);

        Vehicle::create([
            'vin_id' => '9',
            'year_id' => '3',
            'make_id' => '18',
            'classic_id' => '39',
            'condition_id' => '3',
            'price' => 50276.35,
            'sell_by_date' => date('2023-11-19'),
            'is_sold' => false,
            'mileage' => '93284',
            'image' => '1962.nash.rambler.jpeg',
        ]);

        Vehicle::create([
            'vin_id' => '10',
            'year_id' => '4',
            'make_id' => '9',
            'classic_id' => '38',
            'condition_id' => '2',
            'price' => 23937.43,
            'sell_by_date' => date('2023-11-30'),
            'is_sold' => false,
            'mileage' => '183627',
            'image' => '1963.dodge.polara.jpeg',
        ]);

        Vehicle::create([
            'vin_id' => '11',
            'year_id' => '4',
            'make_id' => '10',
            'classic_id' => '6',
            'condition_id' => '1',
            'price' => 87253.37,
            'sell_by_date' => date('2023-11-13'),
            'is_sold' => false,
            'mileage' => '72834',
            'image' => '1963.fiat.500.jpeg',
        ]);

        Vehicle::create([
            'vin_id' => '12',
            'year_id' => '4',
            'make_id' => '13',
            'classic_id' => '32',
            'condition_id' => '3',
            'price' => 25783.58,
            'sell_by_date' => date('2023-11-15'),
            'is_sold' => false,
            'mileage' => '51934',
            'image' => '1963.willys.jeep.wagoneer.jpeg',
        ]);

        Vehicle::create([
            'vin_id' => '13',
            'year_id' => '5',
            'make_id' => '21',
            'classic_id' => '11',
            'condition_id' => '2',
            'price' => 36927.86,
            'sell_by_date' => date('2023-11-23'),
            'is_sold' => false,
            'mileage' => '76342',
            'image' => '1964.plymouth.barracuda.jpeg',
        ]);

        Vehicle::create([
            'vin_id' => '14',
            'year_id' => '5',
            'make_id' => '16',
            'classic_id' => '3',
            'condition_id' => '1',
            'price' => 45769.37,
            'sell_by_date' => date('2023-11-13'),
            'is_sold' => false,
            'mileage' => '124863',
            'image' => '1964.mercedes_benz.230sl.jpeg',
        ]);

        Vehicle::create([
            'vin_id' => '15',
            'year_id' => '5',
            'make_id' => '2',
            'classic_id' => '40',
            'condition_id' => '3',
            'price' => 83673.25,
            'sell_by_date' => date('2023-11-04'),
            'is_sold' => false,
            'mileage' => '61327',
            'image' => '1964.rambler.american.jpeg',
        ]);

        Vehicle::create([
            'vin_id' => '16',
            'year_id' => '6',
            'make_id' => '6',
            'classic_id' => '22',
            'condition_id' => '2',
            'price' => 24845.74,
            'sell_by_date' => date('2023-11-03'),
            'is_sold' => false,
            'mileage' => '28947',
            'image' => '1965.cadillac.deville.jpg',
        ]);

        Vehicle::create([
            'vin_id' => '17',
            'year_id' => '6',
            'make_id' => '4',
            'classic_id' => '2',
            'condition_id' => '1',
            'price' => 36486.98,
            'sell_by_date' => date('2023-11-14'),
            'is_sold' => false,
            'mileage' => '92384',
            'image' => '1965.bmw.1800ti.jpeg',
        ]);

        Vehicle::create([
            'vin_id' => '18',
            'year_id' => '6',
            'make_id' => '2',
            'classic_id' => '9',
            'condition_id' => '3',
            'price' => 34536.25,
            'sell_by_date' => date('2023-11-06'),
            'is_sold' => false,
            'mileage' => '78932',
            'image' => '1965.amc.ambassador.jpeg',
        ]);

        Vehicle::create([
            'vin_id' => '19',
            'year_id' => '7',
            'make_id' => '22',
            'classic_id' => '26',
            'condition_id' => '2',
            'price' => 62846.36,
            'sell_by_date' => date('2023-11-26'),
            'is_sold' => false,
            'mileage' => '52134',
            'image' => '1966.pontiac.gto.jpeg',
        ]);

        Vehicle::create([
            'vin_id' => '20',
            'year_id' => '7',
            'make_id' => '23',
            'classic_id' => '7',
            'condition_id' => '1',
            'price' => 71234.89,
            'sell_by_date' => date('2023-11-12'),
            'is_sold' => false,
            'mileage' => '18374',
            'image' => '1966.porche.911.jpeg',
        ]);

        Vehicle::create([
            'vin_id' => '21',
            'year_id' => '7',
            'make_id' => '15',
            'classic_id' => '35',
            'condition_id' => '3',
            'price' => 45123.67,
            'sell_by_date' => date('2023-11-25'),
            'is_sold' => false,
            'mileage' => '217483',
            'image' => '1966.mg.midget.jpeg',
        ]);

        Vehicle::create([
            'vin_id' => '22',
            'year_id' => '8',
            'make_id' => '19',
            'classic_id' => '5',
            'condition_id' => '2',
            'price' => 46937.45,
            'sell_by_date' => date('2023-11-14'),
            'is_sold' => false,
            'mileage' => '92834',
            'image' => '1967.oldsmobile.442.jpeg',
        ]);

        Vehicle::create([
            'vin_id' => '23',
            'year_id' => '8',
            'make_id' => '27',
            'classic_id' => '12',
            'condition_id' => '1',
            'price' => 65243.12,
            'sell_by_date' => date('2023-11-10'),
            'is_sold' => false,
            'mileage' => '62834',
            'image' => '1967.volkswagon.beetle.jpeg',
        ]);

        Vehicle::create([
            'vin_id' => '24',
            'year_id' => '8',
            'make_id' => '26',
            'classic_id' => '49',
            'condition_id' => '3',
            'price' => 53128.75,
            'sell_by_date' => date('2023-11-20'),
            'is_sold' => false,
            'mileage' => '48192',
            'image' => '1967.triumph.tr4a.jpeg',
        ]);

        Vehicle::create([
            'vin_id' => '25',
            'year_id' => '9',
            'make_id' => '8',
            'classic_id' => '37',
            'condition_id' => '2',
            'price' => 37982.34,
            'sell_by_date' => date('2023-11-05'),
            'is_sold' => false,
            'mileage' => '14853',
            'image' => '1968.chrysler.newport.jpeg',
        ]);

        Vehicle::create([
            'vin_id' => '26',
            'year_id' => '9',
            'make_id' => '28',
            'classic_id' => '1',
            'condition_id' => '1',
            'price' => 89271.23,
            'sell_by_date' => date('2023-11-18'),
            'is_sold' => false,
            'mileage' => '109384',
            'image' => '1968.volvo.1800.jpeg',
        ]);

        Vehicle::create([
            'vin_id' => '27',
            'year_id' => '9',
            'make_id' => '3',
            'classic_id' => '46',
            'condition_id' => '3',
            'price' => 76832.10,
            'sell_by_date' => date('2023-11-01'),
            'is_sold' => false,
            'mileage' => '72834',
            'image' => '1968.austin_healey.sprite.jpeg',
        ]);

        Vehicle::create([
            'vin_id' => '28',
            'year_id' => '10',
            'make_id' => '17',
            'classic_id' => '19',
            'condition_id' => '2',
            'price' => 29534.65,
            'sell_by_date' => date('2023-11-27'),
            'is_sold' => false,
            'mileage' => '43928',
            'image' => '1969.mercury.cougar.jpeg',
        ]);

        Vehicle::create([
            'vin_id' => '29',
            'year_id' => '10',
            'make_id' => '24',
            'classic_id' => '8',
            'condition_id' => '1',
            'price' => 62394.76,
            'sell_by_date' => date('2023-11-16'),
            'is_sold' => false,
            'mileage' => '29834',
            'image' => '1969.saab.99.jpeg',
        ]);

        Vehicle::create([
            'vin_id' => '30',
            'year_id' => '10',
            'make_id' => '12',
            'classic_id' => '50',
            'condition_id' => '3',
            'price' => 45872.90,
            'sell_by_date' => date('2023-11-09'),
            'is_sold' => false,
            'mileage' => '69172',
            'image' => '1969.jaguar.xke.jpeg',
        ]);

        Vehicle::create([
            'vin_id' => '31',
            'year_id' => '11',
            'make_id' => '14',
            'classic_id' => '17',
            'condition_id' => '2',
            'price' => 72618.43,
            'sell_by_date' => date('2023-11-30'),
            'is_sold' => false,
            'mileage' => '83927',
            'image' => '1970.lincoln.continental.jpeg',
        ]);

        Vehicle::create([
            'vin_id' => '32',
            'year_id' => '11',
            'make_id' => '7',
            'classic_id' => '13',
            'condition_id' => '1',
            'price' => 58092.56,
            'sell_by_date' => date('2023-11-22'),
            'is_sold' => false,
            'mileage' => '54239',
            'image' => '1970.chevrolet.camaro.jpeg',
        ]);

        Vehicle::create([
            'vin_id' => '33',
            'year_id' => '12',
            'make_id' => '25',
            'classic_id' => '10',
            'condition_id' => '3',
            'price' => 61938.27,
            'sell_by_date' => date('2023-11-03'),
            'is_sold' => false,
            'mileage' => '79283',
            'image' => '1971.studebaker.avanti.jpeg',
        ]);

        Vehicle::create([
            'vin_id' => '34',
            'year_id' => '12',
            'make_id' => '11',
            'classic_id' => '36',
            'condition_id' => '2',
            'price' => 49823.21,
            'sell_by_date' => date('2023-11-29'),
            'is_sold' => false,
            'mileage' => '34872',
            'image' => '1971.ford.mustang.boss_351.jpeg',
        ]);

        Vehicle::create([
            'vin_id' => '35',
            'year_id' => '13',
            'make_id' => '20',
            'classic_id' => '16',
            'condition_id' => '1',
            'price' => 37982.56,
            'sell_by_date' => date('2023-11-26'),
            'is_sold' => false,
            'mileage' => '42837',
            'image' => '1972.ford.maverick.jpeg',
        ]);

        Vehicle::create([
            'vin_id' => '36',
            'year_id' => '13',
            'make_id' => '5',
            'classic_id' => '43',
            'condition_id' => '3',
            'price' => 64729.32,
            'sell_by_date' => date('2023-11-08'),
            'is_sold' => false,
            'mileage' => '92384',
            'image' => '1972.buick.riviera.jpeg',
        ]);

        Vehicle::create([
            'vin_id' => '37',
            'year_id' => '14',
            'make_id' => '2',
            'classic_id' => '30',
            'condition_id' => '2',
            'price' => 82913.45,
            'sell_by_date' => date('2023-11-07'),
            'is_sold' => false,
            'mileage' => '58234',
            'image' => '1973.amc.javelin.jpeg',
        ]);

        Vehicle::create([
            'vin_id' => '38',
            'year_id' => '14',
            'make_id' => '9',
            'classic_id' => '15',
            'condition_id' => '1',
            'price' => 29538.92,
            'sell_by_date' => date('2023-11-23'),
            'is_sold' => false,
            'mileage' => '28734',
            'image' => '1973.dodge.charger.jpeg',
        ]);

        Vehicle::create([
            'vin_id' => '39',
            'year_id' => '15',
            'make_id' => '9',
            'classic_id' => '14',
            'condition_id' => '3',
            'price' => 72613.84,
            'sell_by_date' => date('2023-11-15'),
            'is_sold' => false,
            'mileage' => '34892',
            'image' => '1974.dodge.challenger.jpeg',
        ]);

        Vehicle::create([
            'vin_id' => '40',
            'year_id' => '15',
            'make_id' => '21',
            'classic_id' => '42',
            'condition_id' => '2',
            'price' => 53498.76,
            'sell_by_date' => date('2023-11-13'),
            'is_sold' => false,
            'mileage' => '18293',
            'image' => '1974.plymouth.roadrunner.jpeg',
        ]);

        Vehicle::create([
            'vin_id' => '41',
            'year_id' => '16',
            'make_id' => '13',
            'classic_id' => '31',
            'condition_id' => '1',
            'price' => 62391.28,
            'sell_by_date' => date('2023-11-11'),
            'is_sold' => false,
            'mileage' => '23948',
            'image' => '1975.jeep.cj5.jpeg',
        ]);

        Vehicle::create([
            'vin_id' => '42',
            'year_id' => '16',
            'make_id' => '6',
            'classic_id' => '24',
            'condition_id' => '3',
            'price' => 81923.45,
            'sell_by_date' => date('2023-11-21'),
            'is_sold' => false,
            'mileage' => '47182',
            'image' => '1975.cadillac.fleetwood.brougham.jpeg',
        ]);

        Vehicle::create([
            'vin_id' => '43',
            'year_id' => '17',
            'make_id' => '2',
            'classic_id' => '41',
            'condition_id' => '2',
            'price' => 29534.62,
            'sell_by_date' => date('2023-11-02'),
            'is_sold' => false,
            'mileage' => '92374',
            'image' => '1976.amc.rambler.matador.jpeg',
        ]);

        Vehicle::create([
            'vin_id' => '44',
            'year_id' => '17',
            'make_id' => '22',
            'classic_id' => '48',
            'condition_id' => '1',
            'price' => 64728.93,
            'sell_by_date' => date('2023-11-17'),
            'is_sold' => false,
            'mileage' => '28374',
            'image' => '1976.pontiac.transam.jpeg',
        ]);

        Vehicle::create([
            'vin_id' => '45',
            'year_id' => '18',
            'make_id' => '2',
            'classic_id' => '27',
            'condition_id' => '3',
            'price' => 72615.38,
            'sell_by_date' => date('2023-11-24'),
            'is_sold' => false,
            'mileage' => '49281',
            'image' => '1977.amc.gremlin.jpeg',
        ]);

        Vehicle::create([
            'vin_id' => '46',
            'year_id' => '18',
            'make_id' => '19',
            'classic_id' => '21',
            'condition_id' => '2',
            'price' => 53497.89,
            'sell_by_date' => date('2023-11-06'),
            'is_sold' => false,
            'mileage' => '14853',
            'image' => '1977.oldsmobile.cutlass.supreme.jpeg',
        ]);

        Vehicle::create([
            'vin_id' => '47',
            'year_id' => '19',
            'make_id' => '15',
            'classic_id' => '33',
            'condition_id' => '1',
            'price' => 81924.95,
            'sell_by_date' => date('2023-11-04'),
            'is_sold' => false,
            'mileage' => '128374',
            'image' => '1978.mg.mgb.jpeg',
        ]);

        Vehicle::create([
            'vin_id' => '48',
            'year_id' => '19',
            'make_id' => '8',
            'classic_id' => '20',
            'condition_id' => '3',
            'price' => 62395.87,
            'sell_by_date' => date('2023-11-28'),
            'is_sold' => false,
            'mileage' => '72834',
            'image' => '1978.chrystler.cordoba.jpeg',
        ]);

        Vehicle::create([
            'vin_id' => '49',
            'year_id' => '20',
            'make_id' => '26',
            'classic_id' => '45',
            'condition_id' => '2',
            'price' => 29536.47,
            'sell_by_date' => date('2023-11-19'),
            'is_sold' => false,
            'mileage' => '43928',
            'image' => '1979.triumph.spitfire.jpeg',
        ]);

        Vehicle::create([
            'vin_id' => '50',
            'year_id' => '20',
            'make_id' => '17',
            'classic_id' => '34',
            'condition_id' => '1',
            'price' => 72619.23,
            'sell_by_date' => date('2023-11-03'),
            'is_sold' => false,
            'mileage' => '69172',
            'image' => '1979.dodge.magnum.jpeg',
        ]);

        Seller::create([
            'last_name' => 'Rodriguez',
            'first_name' => 'Maria',
        ]);

        Seller::create([
            'last_name' => 'Kim',
            'first_name' => 'Ahmed',
        ]);

        Seller::create([
            'last_name' => 'Patel',
            'first_name' => 'Elena',
        ]);

        Seller::create([
            'last_name' => 'Johnson',
            'first_name' => 'Malikov',
        ]);

        Seller::create([
            'last_name' => 'Nguyen',
            'first_name' => 'Isabella',
        ]);

        Seller::create([
            'last_name' => 'Smith',
            'first_name' => 'Amirah',
        ]);

        Seller::create([
            'last_name' => 'Williams',
            'first_name' => 'Aiden',
        ]);

        Seller::create([
            'last_name' => 'Lee',
            'first_name' => 'Sofia',
        ]);

        Seller::create([
            'last_name' => 'Chavez',
            'first_name' => 'Leandro',
        ]);

        Seller::create([
            'last_name' => 'Nakamura',
            'first_name' => 'Mei',
        ]);
    }
}
