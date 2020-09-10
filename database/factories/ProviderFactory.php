<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Provider;
use Faker\Generator as Faker;

$factory->define(Provider::class, function (Faker $faker) {
    return [
        'ruc'=>mt_rand(100000000000,500000000000),
        'sansion_obras_inconclusas'=>mt_rand(0,1),
        'familiares_dentro_municipalidad'=>mt_rand(0,1),
        'familiares_congresistas'=>mt_rand(0,1),
        'registrado_proveedor_estado'=>mt_rand(0,1),
        'rubro'=>$faker->randomElement(['construccion','obras','tecnologia'])
    ];
});
