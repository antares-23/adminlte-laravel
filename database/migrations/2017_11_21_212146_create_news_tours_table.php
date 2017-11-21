<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            //
            $table->increments('id');
            $table->string('name');
            $table->string('url');
            $table->integer('status')->default(1);
            $table->date('date_start');
            $table->date('date_end')->nullable();

            $table->integer('subdomain_id')->unsigned();
            $table->foreign('subdomain_id')->references('id')->on('subdomains');
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
        Schema::table('tours', function (Blueprint $table) {
            //
        });
    }
}
