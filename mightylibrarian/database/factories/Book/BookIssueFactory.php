<?php

namespace Database\Factories\Book;

use App\Models\Book\BookIssue;
use App\Models\Globals;
use App\Models\Setting\ReturnDays;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookIssueFactory extends Factory
{
    protected $model = BookIssue::class;

    /**
     * @return array|mixed[]
     */
    public function definition()
    {
        $issueStatus = random_int(0, 1);
        $returnDays = array_column(ReturnDays::cases(), Globals::ENUM_FIELD_VALUE)[random_int(0, 3)];

        return [
            BookIssue::FIELD_STUDENT_ID     => random_int(1, 19),
            BookIssue::FIELD_BOOK_ID        => random_int(1, 10),
            BookIssue::FIELD_ISSUE_DATE     => Carbon::today()->format(Globals::DATE_FORMAT_YMD),
            BookIssue::FIELD_RETURN_DATE    => Carbon::today()->addDays($returnDays)->format(Globals::DATE_FORMAT_YMD),
            BookIssue::FIELD_ISSUE_STATUS   => $issueStatus,
            BookIssue::FIELD_RETURN_DAY     => ($issueStatus !== 0) ? Carbon::today()->addDays(random_int(1, 50))->format(Globals::DATE_FORMAT_YMD) : null,
        ];
    }
}
