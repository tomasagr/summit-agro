<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddQuantyFieldToProductSolicitude extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('product_solicitude', function (Blueprint $table) {
            $table->double('quanty');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('product_solicitude', function (Blueprint $table) {
            $table->dropColumn('quanty');
        });
    }
}
