<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddVisibleFullwatToItemCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Item_Category', function (Blueprint $table) {
            $table->integer('Visible_Fullwat')->nullable()->after('Sort_No_');
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
            $table->dropColumn('Visible_Fullwat');
        });
    }
}
