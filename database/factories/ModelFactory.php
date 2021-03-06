<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
    ];
});

/**
 * Factory definition for model App\Siswa.
 */
$factory->define(App\Siswa::class, function ($faker) {
    return [
        'tanggallahir' => $faker->,key,
        'project_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Account.
 */
$factory->define(App\Account::class, function ($faker) {
    return [
        'statusactive' => $faker->,key,
        'siswa_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Matapelajaran.
 */
$factory->define(App\Matapelajaran::class, function ($faker) {
    return [
        'kela_id' => $faker->key,
        'sekolah_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Kelas.
 */
$factory->define(App\Kelas::class, function ($faker) {
    return [
        'idsekolah' => $faker->,key,
        'sekolah_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Sekolah.
 */
$factory->define(App\Sekolah::class, function ($faker) {
    return [
        'sekolah_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Guru.
 */
$factory->define(App\Guru::class, function ($faker) {
    return [
        'sekolah_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Task.
 */
$factory->define(App\Task::class, function ($faker) {
    return [
        'kela_id' => $faker->key,
        'sekolah_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Acarasekolah.
 */
$factory->define(App\Acarasekolah::class, function ($faker) {
    return [
        'kela_id' => $faker->key,
        'sekolah_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Task.
 */
$factory->define(App\Task::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Users.
 */
$factory->define(App\Users::class, function ($faker) {
    return [
        // Fields here
    ];
});

/**
 * Factory definition for model App\Rangkumannilai.
 */
$factory->define(App\Rangkumannilai::class, function ($faker) {
    return [
        'siswa_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Jadwalpelajaran.
 */
$factory->define(App\Jadwalpelajaran::class, function ($faker) {
    return [
        'kela_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Rekapabsen.
 */
$factory->define(App\Rekapabsen::class, function ($faker) {
    return [
        'project_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Rekapabsens.
 */
$factory->define(App\Rekapabsens::class, function ($faker) {
    return [
        'siswa_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Rekapabsens.
 */
$factory->define(App\Rekapabsens::class, function ($faker) {
    return [
        'siswa_id' => $faker->key,
    ];
});
