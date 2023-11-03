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
        Schema::create('notifictions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('message');
            $table->unsignedBigInteger('admin_Id');
            $table->foreign('admin_Id')->references('id')->on('admins')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->string('object_type');
            $table->unsignedBigInteger('object_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notifictions');
    }
};
