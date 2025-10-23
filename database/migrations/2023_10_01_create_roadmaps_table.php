<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('roadmaps', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('case_id');
            $table->json('steps');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('roadmaps');
    }
};
