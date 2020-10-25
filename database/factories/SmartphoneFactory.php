<?php

namespace Database\Factories;

use App\Smartphone;
use Illuminate\Database\Eloquent\Factories\Factory;

$factory->define(Smartphone::class, function (Faker $faker){
    return [
        'nom' => $faker->name,
        'taille' => $faker->randomElement(['30,41cm', '25cm', '14,7cm']),
        'type_réseau' => $faker->randomElement(['3G', '4G', '5G']),
        'système' => $faker->randomElement(['IOS']),
        'connectique' => $faker->randomElement(['Apple']),
        'autonomie' => $faker->randomElement(['30 jours', '20 heures']),
        'caractéristique' => $faker->paragraph,
        'prix' => $faker->randomNumber($nbDigits = 4)
    ];
});