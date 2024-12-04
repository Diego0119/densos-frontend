<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Region;
use App\Models\Attribute;
use DB;
use App\Models\Commune;
use App\Models\Notice;
use App\Models\AttributeValue;



class UploadNoticeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

}
