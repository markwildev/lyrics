<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * ["name","email","username","type","email_verified_at","password","status"]
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('username')->nullable();
            $table->string('type')->nullable()->default('admin');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('status')->nullable()->default('inactive');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
}
