<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUrlToItemCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Item_Category', function (Blueprint $table) {
            $table->string('Url')->nullable()->unique()->after('Visible_Fullwat');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Item_Category', function (Blueprint $table) {
            $table->dropColumn('Url');
        });
    }
}
