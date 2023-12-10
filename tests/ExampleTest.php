<?php

$faker = \Faker\Factory::create('es_CL');

it('can test', function () {
    expect(true)->toBeTrue();
});

it('can generate', function () use ($faker) {
    $rut = $faker->rut();

    expect(preg_match('/[\dkK-]/', $faker->rut()))->toBe(1);
});

it('can return vd number', function () {

    $dv = \Faker\Provider\es_CL\Person::getVd(99737415);

    expect($dv)->toBe('0');

    $dv = \Faker\Provider\es_CL\Person::getVd(22339845);

    expect($dv)->toBe('6');
});

it('can return vd k', function () {

    $dv = \Faker\Provider\es_CL\Person::getVd(77789188);

    expect($dv)->toBe('K');
});
