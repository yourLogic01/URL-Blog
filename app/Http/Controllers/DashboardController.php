<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index() {
        $record = Post::select(DB::raw("count"), DB::raw("title as title_name"))
        ->where('user_id', auth()->user()->id)
        ->orderBy('count', 'desc')
        ->limit(10)
        ->get();
        $data = [];
        foreach( $record as $row) {
            $data['label'][] = $row->title_name;
            $data['data'][] = (int) $row->count;
        }
        $data['chart_data'] = json_encode($data);
        return view('dashboard.index', $data);
    }
}
