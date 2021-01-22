<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        DB::table('categories')->insert([
            ['name'=>'Industrial'],
            ['name'=>'Management'],
            ['name'=>'Construction'],
            ['name'=>'Beauty and Wellness'],
            ['name'=>'Sales'],
            ['name'=>'Food and Beverages'],
            ['name'=>'Hospitality'],
            ['name'=>'Cleaning and Maintenance'],
            ['name'=>'Households'],
            ['name'=>'Safety and Security'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
