<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\evaluations;
use App\Models\commentaire;
use App\Models\statconn;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChartController extends Controller
{
    public function index1(){
        $data=User::select(DB::raw('COUNT(*) as count'))
        ->whereYear('created_at',date('Y'))
        ->groupBy(DB::raw('Month(created_at)'))
        ->pluck('count');
        $data1=commentaire::select(DB::raw('COUNT(*) as count'))
        ->whereYear('created_at',date('Y'))
        ->groupBy(DB::raw('Month(created_at)'))
        ->pluck('count');
        $data2=statconn::select(DB::raw('COUNT(*) as count'))
        ->whereYear('created_at',date('Y'))
        ->groupBy(DB::raw('Month(created_at)'))
        ->pluck('count');
        $data3[0]=evaluations::where('content',1)->get()->count();
        $data3[1]=evaluations::where('content',2)->get()->count();
        $data3[2]=evaluations::where('content',3)->get()->count();
        $data3[3]=evaluations::where('content',4)->get()->count();
        $data3[4]=evaluations::where('content',5)->get()->count();
        $data3[5]=evaluations::where('content',6)->get()->count();
        $data3[6]=evaluations::where('content',7)->get()->count();
        $data3[7]=evaluations::where('content',8)->get()->count();
        $data3[8]=evaluations::where('content',9)->get()->count();
        $data3[9]=evaluations::where('content',10)->get()->count();
        return view('statistiques1',['data'=>$data,'data1'=>$data1,'data2'=>$data2,'data3'=>$data3]);
    }
}

