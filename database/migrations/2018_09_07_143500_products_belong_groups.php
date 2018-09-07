<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProductsBelongGroups extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_belong_groups', function (Blueprint $table) {
            $table->unsignedInteger('fk_product');
            $table->unsignedInteger('fk_group');
            $table->foreign('fk_product')->references('id')->on('products');
            $table->foreign('fk_group')->references('id')->on('groups');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products_belong_groups');
    }
}
