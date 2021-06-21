<?php

namespace App\Http\Controllers;

use App\Libraries\View;

class ProductController {

    public function index()
    {
        return View::render('product.view', [
            'name' => 'Nina Aurora',
            'nog_een_array' => [
                'apple',
                'banana',
            ]
        ]);
    }
}