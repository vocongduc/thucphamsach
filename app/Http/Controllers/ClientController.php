<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ClientController extends Controller
{
    //tuyendung
    public function tuyendung(){
        $data['recruitment'] = DB::table('recruitments')->orderBy('id','desc')->paginate(8);
        return view('page.tuyenDung',$data);
    }
//    tin tuc
    public function tintuc()
    {
        $data['news'] = DB::table('news')->orderBy('id','desc')->paginate(5);
        return view('page.tintuc',$data);
    }
    public function thucdon()
    {
        $data['menu'] = DB::table('menu')->orderBy('id','desc')->paginate(5);
        return view('page.thucDon',$data);
    }
}
