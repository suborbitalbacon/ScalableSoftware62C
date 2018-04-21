<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRelationsToRestaurantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('restaurants', function (Blueprint $table) {
            $table->unsignedInteger('country_id')->after('seats');
            $table->unsignedInteger('category_id')->after('country_id');

            $table->foreign('country_id')->references('id')->on('countries');
            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('restaurants', function (Blueprint $table) {
            $table->dropForeign(['country_id']);
            $table->dropForeign(['category_id']);
            $table->dropColumn(['country_id', 'category_id']);
        });
    }
}
