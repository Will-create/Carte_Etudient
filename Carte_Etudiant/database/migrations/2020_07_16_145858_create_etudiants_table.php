<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtudiantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etudiants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom');
            $table->string('prenom');
            $table->string('date_naiss');
            $table->string('matricule');
            $table->string('adresse');
            $table->string('image');
            $table->unsignedBigInteger('filiere_id')->index();
            $table->unsignedBigInteger('niveau_id')->index();
            $table->unsignedBigInteger('nationalite_id')->index();
            $table->unsignedBigInteger('tuteur_id')->index();
<<<<<<< HEAD
            $table->unsignedBigInteger('promotion_id')->index();
=======
            $table->unsignedBigInteger('annee_id')->index();
>>>>>>> 3cd9ed74e098d9e8336adc20c56cfd5375e38020
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
        Schema::dropIfExists('etudiants');
    }
}
