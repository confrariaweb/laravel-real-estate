<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->foreignId('type_id')->constrained('property_types');
            $table->foreignId('user_id')->constrained();
            $table->string('title');
            $table->string('slug');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('property_feature', function (Blueprint $table) {
            $table->foreignId('feature_id')->constrained('property_features');
            $table->foreignId('property_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('property_feature');
        Schema::dropIfExists('properties');
    }
}
