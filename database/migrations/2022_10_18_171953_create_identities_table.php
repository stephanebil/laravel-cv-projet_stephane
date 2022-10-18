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
        Schema::create('identities', function (Blueprint $table) {
            $table->id();
            $table->string('firstName')->default('Stephane');
            $table->string('lastName')->default('Bilella');
            $table->string('address')->default('12 rue des Lilas');
            $table->string('city')->default('Oissel');
            $table->string('zip_code')->default('76350');
            $table->string('tel')->default('06 48 34 75 56');
            $table->string('email')->default('stephanebilella@yahoo.fr')->unique();
            $table->string('about')->default('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam');
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
        Schema::dropIfExists('identities');
    }
};
