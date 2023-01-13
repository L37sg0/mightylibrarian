<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\PersonalAccessToken as Model;

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
            $table->morphs(Model::FIELD_TOKENABLE);
            $table->string(Model::FIELD_NAME);
            $table->string(Model::FIELD_TOKEN, 64)->unique();
            $table->text(Model::FIELD_ABILITIES)->nullable();
            $table->timestamp(Model::FIELD_LAST_USED_AT)->nullable();
            $table->timestamp(Model::FIELD_EXPIRES_AT)->nullable();
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
