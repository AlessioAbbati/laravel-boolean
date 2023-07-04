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
        Schema::create('travels', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->date('date');           // Il ricordo testuale dell'Esperienza
            $table->string('title', 50);    // Il titolo dell'Esperienza
            $table->text('text');           // Il ricordo testuale dell'Esperienza
            $table->text('image');          // Un'immagine associata all'Esperienza
            $table->string('country', 2);   // La nazione in cui è avvenuta l'Esperienza
            $table->string('city', 50);  // L'indirizzo presso cui è avvenuta l'Esperienza
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('travels');
    }
};
