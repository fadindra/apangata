<?php

namespace App\Http\Controllers\Setting;

use App\Http\Controllers\Controller;
use App\Models\Setting\FiscalYear;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function fiscal_year()
    {
        return view('setting.fiscal_year_add');
    }
}
