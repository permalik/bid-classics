<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Vin;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    protected array $identifiers = [
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



    public function run(): void
    {
        foreach($this->identifiers as $identifier) { Vin::create($identifier); }
    }
}
