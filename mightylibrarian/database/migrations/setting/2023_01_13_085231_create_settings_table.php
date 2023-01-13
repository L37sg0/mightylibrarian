<?php

use App\Models\Setting\ReturnDays;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Setting\Setting as Model;

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
            $table->enum(Model::FIELD_RETURN_DAYS, [
                ReturnDays::Week->value,
                ReturnDays::Two_Weeks->value,
                ReturnDays::Three_Weeks->value,
                ReturnDays::Month->value
            ]);
            $table->string(Model::FIELD_FINE);
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
