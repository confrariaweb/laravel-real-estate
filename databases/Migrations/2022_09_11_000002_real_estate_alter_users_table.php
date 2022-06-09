<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RealEstateAlterUsersTable extends Migration
{
    /**
     * Run the Migrations.
     *
     * @return void
     */
    public function up()
    {

        if (Schema::hasTable('users') && !Schema::hasColumn('users', 'account_id')) {
            Schema::table('users', function (Blueprint $table) {
                $table->foreignId('account_id')->nullable()->after('id')->constrained('accounts')->onUpdate('cascade')->onDelete('cascade');
            });
        }

    }

    /**
     * Reverse the Migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('account_id');
        });
    }
}
