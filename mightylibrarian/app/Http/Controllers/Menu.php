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
            "route" => "dashboard.authors.list",
            "label" => "Authors"
        ],
        [
            "route" => "categories",
            "label" => "Categories"
        ],
        [
            "route" => "publishers",
            "label" => "Publishers"
        ],
        [
            "route" => "books",
            "label" => "Books"
        ],
        [
            "route" => "book-issues",
            "label" => "Book Issues"
        ],
        [
           "route" => "students",
           "label" => "Students"
        ],
        [
            "route" => "reports",
            "label" => "Reports"
        ],
        [
            "route" => "settings",
            "label" => "Settings"
        ]
    ];
}
