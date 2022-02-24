<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->integer('vendor_id')->nullable();
            $table->string('name_ar')->nullable();
            $table->string('slug')->nullable();
            $table->integer('category_id')->nullable();
            $table->string('tag')->nullable();
            $table->integer('color_id')->nullable();
            $table->integer('price')->nullable();
            $table->integer('discount_price')->nullable();
            $table->integer('active_price')->default(1);
            $table->longText('short_descriprion')->nullable();
            $table->longText('short_descriprion_ar')->nullable();
            $table->longText('long_description')->nullable();
            $table->longText('long_description_ar')->nullable();
            $table->longText('additional_info')->nullable();
            $table->longText('additional_info_ar')->nullable();
            $table->string('image')->nullable();
            $table->text('video')->nullable();
            $table->integer('status')->default(2);
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
        Schema::dropIfExists('products');
    }
}
