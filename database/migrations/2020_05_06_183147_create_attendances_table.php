<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendances', function (Blueprint $table) {
            $table->bigIncrements('id');
				$table->string('name');
				$table->string('nic')->unique();
				$table->string('designation')->nullable();
				$table->string('email')->unique();							
				$table->string('address')->nullable();
				$table->date('doj')->nullable();
				$table->string('basicSalary')->nullable();
				$table->string('photo')->nullable();
				$table->bigInteger('created_by')->unsigned()->index()->nullable();
				$table->foreign('created_by')->references('id')->on('users')->onDelete('set null');
				$table->bigInteger('updated_by')->unsigned()->index()->nullable();
				$table->foreign('updated_by')->references('id')->on('users')->onDelete('set null');	
				$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendances');
    }
}
