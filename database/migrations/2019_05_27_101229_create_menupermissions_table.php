<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenupermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menupermissions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('assigned_by');
            $table->string('assigned_to');
            $table->string('role_id');
            $table->string('contact_view');
            $table->string('contact_edit');
            $table->string('User_view');
            $table->string('User_edit');
            $table->string('User_delete');
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
        Schema::dropIfExists('menupermissions');
    }
}
