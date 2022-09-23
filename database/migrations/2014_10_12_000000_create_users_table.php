<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('name_last',100)->nullable();
            $table->string('nick',100)->unique()->nullable()->index();
            $table->string('dni',26)->nullable()->defaultValue(0);
            $table->string('email',100)->unique()->nullable();
            $table->string('avatar')->nullable();
            $table->ipAddress('visitor')->nullable();
            $table->boolean('active')->nullable()->default(1);
            $table->boolean('ban')->nullable()->default(0);
            $table->integer('pkban')->nullable();
            $table->integer('pkrole')->nullable();
            $table->string('pro',4)->default('free')->nullable();
            $table->timestamp('expiret')->nullable();
            $table->integer('creditos')->nullable()->default(0);
            $table->integer('creditos_ant')->nullable()->default(0);
            $table->timestamp('ult_buy')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('provider_id')->nullable();
            $table->string('provider')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
