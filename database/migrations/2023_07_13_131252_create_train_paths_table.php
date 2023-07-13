<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('train_paths', function (Blueprint $table) {
            $table->id();

            $table -> string('azienda', 64);
            $table -> string('stazione_di_partenza', 64);
            $table -> string('stazione_di_arrivo', 64);
            $table -> time('orario_di_partenza');
            $table -> time('orario_di_arrivo');
            $table -> string('codice_treno', 255) -> unique();
            $table -> integer('numero_carrozze');
            $table -> boolean('is_in_orario') -> default(true);
            $table -> boolean('is_cancellato') -> default(false);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('train_paths');
    }
};
