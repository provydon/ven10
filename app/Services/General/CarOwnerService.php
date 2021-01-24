<?php

namespace App\Services\General;

use App\Helpers\API;
use App\Models\CarOwner;

class CarOwnerService
{

    public static function initialize()
    {
        $data['filters'] = self::getFitters();
        $data['car_owners'] = CarOwner::paginate(20);
        $data['filter_id'] = null;
        $data['selected_filter'] = null;
        return $data;
    }

    public static function filter(int $filter_id)
    {
        $filters = self::getFitters();
        $filter = null;
        $filtered_car_owners = [];

        foreach ($filters as $key => $value) {
            if ($value->id == $filter_id) {
                $filter = $value;
            }
        }

        if ($filter) {
            $query = new CarOwner;

            $query->whereBetween('car_model_year', [$filter->start_year, $filter->end_year]);

            if ($filter->gender != '') {
                $query->where('gender', $filter->gender);
            }

            if (!empty($filter->countries)) {
                $query->whereIn('country', $filter->countries);
            }

            if (!empty($filter->colors)) {
                $query->whereIn('car_color', $filter->colors);
            }

            $query->paginate(20);

            $filtered_car_owners = $query;
        } else {
            abort(404, "Selected Filter does not or no longer exists in Ven10 Assessment Filter Api");
        }

        // dd($filter);

        $data['filters'] = self::getFitters();
        $data['car_owners'] = $filtered_car_owners;
        $data['filter_id'] = $filter_id;
        $data['selected_filter'] = $filter;

        return $data;
    }

    public static function getFitters()
    {
        $filters = [];

        try {
            $filters = API::get("https://ven10.co/assessment/filter.json");
        } catch (\Throwable $th) {
            throw $th;
        }

        return $filters;
    }
}

return new CarOwnerService;
