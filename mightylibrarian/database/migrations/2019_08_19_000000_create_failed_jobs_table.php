<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\FailedJob as Model;

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
            $table->string(Model::FIELD_UUID)->unique();
            $table->text(Model::FIELD_CONNECTION);
            $table->text(Model::FIELD_QUEUE);
            $table->longText(Model::FIELD_PAYLOAD);
            $table->longText(Model::FIELD_EXCEPTION);
            $table->timestamp(Model::FIELD_FAILED_AT)->useCurrent();
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
