<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TrainPath>
 */
class TrainPathFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'azienda' => fake() -> company(),
            'stazione_di_partenza' => fake() -> randomElement([
                'Crispiano', 'Statte', 'Taranto', 'Bari', 'Martina Franca', 'Brindisi', 'Lecce'
            ]),
            'stazione_di_arrivo' => fake() -> randomElement([
                'Mottola', 'Tamburi', 'Grottaglie', 'Polignano', 'Massafra', 'Roma', 'Bologna'
            ]),
            'orario_di_partenza' => fake() -> time(),
            'orario_di_arrivo' => fake() -> time(),
            'codice_treno' => fake() -> swiftBicNumber(),
            'numero_carrozze' => fake() -> numberBetween(5, 45),
            'is_in_orario' => fake() -> boolean(),
            'is_cancellato' => fake() -> boolean(),
        ];
    }
}

// $table -> string('azienda', 64);
// $table -> string('stazione_di_partenza', 64);
// $table -> string('stazione_di_arrivo', 64);
// $table -> time('orario_di_partenza');
// $table -> time('orario_di_arrivo');
// $table -> string('codice_treno', 10) -> unique();
// $table -> integer('numero_carrozze');
// $table -> boolean('is_in_orario') -> default(true);
// $table -> boolean('is_cancellato') -> default(false);
