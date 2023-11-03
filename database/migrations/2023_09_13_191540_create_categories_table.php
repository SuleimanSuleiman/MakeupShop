<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('desc');
            $table->longText('title');
            $table->boolean('active')->default(true);
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('main_categories')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->integer('offer_id')->unsigned()->nullable();
            $table->foreign('offer_id')->references('id')->on('offers')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};