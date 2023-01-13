<?php

use App\Models\Author\Author;
use App\Models\Book\Status;
use App\Models\Category\Category;
use App\Models\Globals;
use App\Models\Publisher\Publisher;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Book\Book as Model;

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
            $table->foreignId(Model::FIELD_CATEGORY_ID)->constrained(Category::TABLE_NAME);
            $table->foreignId(Model::FIELD_AUTHOR_ID)->nullable()->constrained(Author::TABLE_NAME)
                ->onDelete(Globals::ON_DELETE_CASCADE);
            $table->foreignId(Model::FIELD_PUBLISHER_ID)->nullable()->constrained(Publisher::TABLE_NAME)
                ->onDelete(Globals::ON_DELETE_CASCADE);
            $table->enum(Model::FIELD_STATUS,
                [Status::Available->value, Status::Issued->value])->default(Status::Available->value);
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
