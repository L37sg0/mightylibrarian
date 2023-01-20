<?php

namespace App\Http\Controllers;

interface Menu
{
    public const ITEMS = [
        [
            "route" => "dashboard",
            "label" => "Dashboard"
        ],
        [
            "route" => "dashboard.author.list",
            "label" => "Authors"
        ],
        [
            "route" => "dashboard.book.list",
            "label" => "Books"
        ],
        [
            "route" => "dashboard.book-issue.list",
            "label" => "Book Issues"
        ],
        [
            "route" => "dashboard.category.list",
            "label" => "Categories"
        ],
        [
            "route" => "dashboard.publisher.list",
            "label" => "Publishers"
        ],
        [
            "route" => "dashboard.report.list",
            "label" => "Reports"
        ],
        [
           "route" => "dashboard.student.list",
           "label" => "Students"
        ],
        [
            "route" => "dashboard.setting.list",
            "label" => "Settings"
        ]
    ];
}
