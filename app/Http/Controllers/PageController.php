<?php

namespace App\Http\Controllers;

use App\Services\General\CarOwnerService;

class PageController extends Controller
{
    public function getIndex()
    {
        try {
            $data = CarOwnerService::initialize();
        } catch (\Throwable $th) {
            throw $th;
        }

        return view('screens.welcome', $data);
    }

    public function getFilterPage($filter_id)
    {
        try {
            $data = CarOwnerService::filter($filter_id);
        } catch (\Throwable $th) {
            throw $th;
        }

        return view('screens.welcome', $data);

    }
}
