<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notice;
use App\Models\User;
use App\Models\Commune;
use App\Models\Category;
use App\Models\Region;
use App\Models\Attribute;
use App\Models\HighlightedNotice;
use DB;
use App\Models\AttributeValue;
use Carbon\Carbon;

class NoticeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->only(['uploadNotice', 'store']);
    }
    public function index()
    {


    }
    public function uploadNotice()
    {

        $categories = Category::select('id', 'name')->get();
        $regions = Region::select('id', 'name')->get();
        $attributes = Attribute::select('id', 'name', 'type')->get();
        $category_attribute = DB::table('category_attribute')->get();
        $communes = Commune::select('id', 'name', 'region_id')->get();

        return view(
            'upload_notice.index',
            data: [
                'categories' => $categories,
                'regions' => $regions,
                'attributes' => $attributes,
                'category_attribute' => $category_attribute,
                'communes' => $communes,
            ]
        );
    }

    public function showNotice($noticeId)
    {
        $notice = Notice::where('id', $noticeId)->first();
        $user = User::where('id', $notice->user_id)->first();
        $commune = Commune::where('id', $notice->commune_id)->first();
        $attributes = DB::table('attribute_values')
            ->join('attributes', 'attribute_values.attribute_id', '=', 'attributes.id')
            ->where('attribute_values.notice_id', $noticeId)
            ->select('attributes.name as name', 'attribute_values.value as value', 'attributes.type as type')
            ->get();
        $notice->increment('views');
        $related_notices = Notice::where('category_id', $notice->category_id)
            ->where('id', '!=', $notice->id)
            ->whereRaw('LOWER(title) LIKE ?', ['%' . strtolower($notice->title) . '%'])
            ->take(10)
            ->get();

        // dd($related_notices);
        return view('notice-details.index', [
            'notice' => $notice,
            'user' => $user,
            'commune' => $commune,
            'attributes' => $attributes,
            'related_notices' => $related_notices,
        ]);

    }
}
