<?php

use App\Models\Book\Book;
use App\Models\Book\IssueStatus;
use App\Models\Globals;
use App\Models\Student\Student;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Book\BookIssue as Model;

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
            $table->foreignId(Model::FIELD_STUDENT_ID)->constrained(Student::TABLE_NAME)
                ->onDelete(Globals::ON_DELETE_CASCADE);
            $table->foreignId(Model::FIELD_BOOK_ID)->constrained(Book::TABLE_NAME);
            $table->timestamp(Model::FIELD_ISSUE_DATE);
            $table->timestamp(Model::FIELD_RETURN_DATE);
            $table->enum(
                Model::FIELD_ISSUE_STATUS,
                array_column(IssueStatus::cases(), Globals::ENUM_FIELD_VALUE)
            );
            $table->timestamp(Model::FIELD_RETURN_DAY)->nullable();
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
