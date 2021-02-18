<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAthletesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('athletes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->enum('difficulty',['profi','amateur']);
            $table->string('age_category');
            $table->char('first_name',100);
            $table->char('surname',100);
            $table->date('birth_date');
            $table->string('nacionality');
            $table->char('sport_team',100);
            $table->string('tel_number');
            $table->string('email');
            $table->boolean('experienced');
            $table->boolean('race_agreement');
            $table->boolean('gdpr_agreement');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('athletes');
    }
}
