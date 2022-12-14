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
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->index();
            $table->string('last_name')->index();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('phone_code')->nullable();
            $table->string('phone')->nullable();
            $table->string('slug')->nullable();
            $table->string('timezone')->nullable();
            $table->string('device_type')->nullable()->default('web')->comment('web,ios,android');
            $table->text('device_token')->nullable();
            $table->boolean('status')->default(0)->comment('0-Deactive,1-Active');
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
        Schema::dropIfExists('admins');
    }
};
