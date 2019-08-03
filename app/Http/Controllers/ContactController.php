<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\View;


class ContactController extends Controller
{
    public function __construct(){
        $mess = DB::table('contacts')->count();
        view()->share('mess', $mess);
        $contact = DB::table('contacts')->orderBy('id', 'DESC')->get();
        view()->share('contact', $contact);
    }
    //list
    public function index()
    {
        $contact = DB::table('contacts')->get();
        return view('admin.pages.contact.index',compact('contact'));
    }
    //delete
    public function destroy($id)
    {
        DB::table('contacts')->where('id',$id)->delete();
        return redirect()->back()->with('thongbao','Đã xóa.');
    }
    //add
    public function create(){
        return view('page.lienHe');
    }
    public function store(Request $request){
        // dd('lol me nos');
        $this->validate($request, [
            'fullname' => 'required|min:3',
            'email' => 'required',
            'phone' => 'required|min:8|max:12',
            'title'=>'required|min:3',
            'content' => 'required|min:3',

        ], [
            'title.required' => 'Tiêu đề không được xác định',
            'title.min'=>'Tiêu đề phải hơn 3 kí tự',
            'content.required' => 'Nội dung không được xác định',
            'content.min'=>'Nội dung phải hơn 3 kí tự',
            'phone.required' => 'SĐT không được xác định',
            'phone.min'=>'SĐT phải hơn 8 kí tự',
            'phone.max'=>'SĐT phải ít hơn 12 kí tự',
            'email.required' => 'Email không được xác định',
            'fullname.required' => 'Họ tên không được xác định',
            'fullname.min' => 'Họ tên phải hơn 3 kí tự'

        ]);

        DB::table('contacts')->insert([
            'title' => $request->title,
            'fullname' => $request->fullname,
            'email' => $request->email,
            'phone' => $request->phone,
            'content' => $request->content,
            'created_at' => now()
        ]);
        return redirect()->back()->with('thongbao','Đăng kí gửi liên hệ thành công.');
    }
}
