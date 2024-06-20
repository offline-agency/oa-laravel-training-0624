<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    protected $connection = 'oa_laravel_training_two';

    public function up()
    {
        Schema::connection($this->connection)->create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('description');

            $table->unsignedBigInteger('contact_id');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::connection($this->connection)->dropIfExists('profiles');
    }
}
