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
        Schema::create('realestate_properties', function (Blueprint $table) {
            $table->id();
            $table->foreignId('type_id')->constrained('realestate_properties_types');
            $table->foreignId('user_id')->constrained('users');
            $table->string('code');
            $table->string('title');
            $table->string('slug');
            $table->text('description')->nullable();
            $table->json('options')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('realestate_property_business', function (Blueprint $table) {
            $table->foreignId('business_id')->constrained('realestate_properties_business');
            $table->foreignId('property_id')->constrained('realestate_properties');
        });

        Schema::create('realestate_property_feature', function (Blueprint $table) {
            $table->foreignId('feature_id')->constrained('realestate_properties_features');
            $table->foreignId('property_id')->constrained('realestate_properties');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('realestate_property_feature');
        Schema::dropIfExists('realestate_property_business');
        Schema::dropIfExists('realestate_properties');
    }
}
