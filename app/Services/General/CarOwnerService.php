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
            // $query = new CarOwner;
            $gender = $filter->gender;
            $countries = $filter->countries;
            $colors = $filter->colors;

            $filtered_car_owners = CarOwner::whereBetween('car_model_year', [$filter->start_year, $filter->end_year])
                ->when($gender != '', function ($query) use ($gender) {
                    return $query->where('gender', $gender);
                })
                ->when(!empty($countries), function ($query) use ($countries) {
                    return $query->whereIn('country', $countries);
                })
                ->when(!empty($colors), function ($query) use ($colors) {
                    return $query->whereIn('car_color', $colors);
                })
                ->paginate(20);

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
