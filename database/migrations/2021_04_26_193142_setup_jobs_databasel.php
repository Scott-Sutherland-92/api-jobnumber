<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SetupJobsDatabasel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("job_number");
            $table->string('job_title');
            $table->string('job_status');
        });

        Schema::dropIfExists('job_number');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');

        Schema::create('job_number', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("job_number");
            $table->string('job_title');
            $table->string('job_status');
        });
    }
}
