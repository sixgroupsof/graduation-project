<?php
namespace App\Http\Controllers;
use App\diary;
use Illuminate\Http\Request;
class CreateController extends Controller
{
    public function index(){
        return view('create');
    }

    public function save(Request $res){
        //报错未定义索引describe，需要添加迁移文件设置长度
        $data=$res->input('Diary');
        $diary=new diary();
        $id=uniqid();
        $diary->id=$id;
        $diary->thetheme=$data['thetheme'];
        $diary->describe=$data['describe'];
        $diary->expirationtime=$data['expirationtime'];
//        dd($diary);
        if($diary->save()){
            return redirect('create');
        }else{
            return redirect()->back();
        }

    }

}