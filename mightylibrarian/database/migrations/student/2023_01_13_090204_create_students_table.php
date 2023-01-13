<?php

use App\Models\Globals;
use App\Models\Student\Gender;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Student\Student as Model;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(Model::TABLE_NAME, function (Blueprint $table) {
            $table->id();
            $table->string(Model::FIELD_NAME);
            $table->timestamp(Model::FIELD_DATE_OF_BIRTH);
            $table->enum(
                Model::FIELD_GENDER,
                array_column(Gender::cases(), Globals::ENUM_FIELD_VALUE)
            );
            $table->string(Model::FIELD_EMAIL);
            $table->string(Model::FIELD_PHONE);
            $table->json(Model::FIELD_ADDRESS);
            $table->string(Model::FIELD_CLASS);
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
        Schema::dropIfExists(Model::TABLE_NAME);
    }
};
