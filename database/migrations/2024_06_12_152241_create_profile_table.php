<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    protected $connection = 'oa_laravel_training_two';

    public function up(): void
    {
        Schema::connection($this->connection)->create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('description');

            $table->unsignedBigInteger('user_id');
            $table->index('user_id');
            $table->foreign('user_id')
                ->references('id')
                ->on('oa_laravel_training_one.users');


            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::connection($this->connection)->dropIfExists('profiles');
    }
};

