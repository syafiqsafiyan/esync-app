<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->float('Price', 8, 2)->default(0.00);
            $table->float('UPC', 8, 2)->default(0.00);
            $table->integer('Status');
            $table->integer('Image');            
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
        Schema::dropIfExists('product');
    }
}
