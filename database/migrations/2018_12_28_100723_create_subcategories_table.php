<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubcategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subcat_products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cod_subcategoria');
            $table->integer('categoria_id')->unsigned();
            $table->string('des_subcategoria');
            $table->timestamps();

            //Relaciones
            $table->foreign('categoria_id')->references('id')->on('cat_products')
            //    ->onDelete('cascade') // de momento no lo incluimos porque no queremos que borre todos
            //    ->onUpdate('cascade') // los productos cuando se borre una categoría
                // Aunque en la parte de Update, quizá si nos interese que lo actualice
            ;


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subcat_products');
    }
}
