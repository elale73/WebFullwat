<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Item_Category', function (Blueprint $table) {

            $table->string('Code', 20);
            $table->string('Parent_Category', 20);
            $table->string('Description', 50);
            $table->integer('Indentation');
            $table->integer('Presentation_Order');
            $table->boolean('Has_Children');
            $table->boolean('Visible_in_Webshop');
            $table->integer('Sort_No_');
            $table->timestamps();

            $table->primary('Code');
            $table->engine = 'InnoDB';

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Item_Category');
    }
}
