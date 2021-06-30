<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Item', function (Blueprint $table) {
            $table->string('No_', 20);
            $table->string('Description', 50);
            $table->string('Description_2', 50)->nullable();
            $table->string('Base_Unit_of_Measure', 10);
            $table->string('Item_Disc_Group', 20)->nullable();
            $table->boolean('Allow_Invoice_Disc_');
            $table->float('Unit_Cost', 12, 6);
            $table->float('Net_Weight', 12, 6);
            $table->float('Inventory');
            $table->string('Item_Category_Code', 20)->nullable();
            $table->string('EAN13', 20)->nullable();
            $table->string('Marca', 30)->nullable();
            $table->boolean('Visible_in_Webshop');
            $table->timestamps();

            $table->primary('No_');
            $table->foreign('Item_Category_Code')->references('Code')->on('Item_Category');
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
        Schema::dropIfExists('Item');
    }
}
