<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Country;
use App\Models\Department;
use Illuminate\Http\Request;

class LocationController extends Controller
{
     public function departments($countryId)
    {
        
        return Department::where('country_id', $countryId)
        ->orderBy('name')
        ->get([
                'id as geonameId',
                'name'
        ]);
    }

    public function cities($departmentId)
    {
        return City::where('department_id', $departmentId)
        ->orderBy('name')
        ->get([
                'id as geonameId',
                'name'
        ]);
    }

    public function countries()
    {
        return response()->json([
            'geonames' => Country::select('country_id as geonameId')
                ->distinct()
                ->get()
        ]);
    }

    public function city($cityId)
    {
        return City::where('id', $cityId)
        ->orderBy('name')
        ->get([
                'id as geonameId',
                'name',
              
        ]);
    }
}
