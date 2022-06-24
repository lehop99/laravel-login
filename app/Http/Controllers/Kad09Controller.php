<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;

use App\Models\Bcontent;

use Illuminate\Support\Facades\DB;

class Kad09Controller extends Controller
{
    public function index() 
    {
        return view ('kad09',['msg' => '']);
        
    }
    public function post(Request $request)
    {
        //validation rules 
        $rules = [
            'title' => 'required',
            'message' => 'required',
        ];
        //validation messages 
        $messages = [
            'title.required' => 'タイトルを入力してください',
            'message.required' => 'メッセージを入力して下さい',
        ];
        
        //バリデーションの実行
        $validator = Validator::make($request->all(),$rules,$messages);
        
        //エラーがあるときの処理
        if($validator->fails()) {
            return redirect('/kad09') -> withErrors($validator)->withInput();
        }
        
        //フォームのデータを取得
        $title = $request -> title;
        $message = $request -> message;
        
        //改行処理
            $message = str_replace("\r\n",'\n',$message);
            $message = str_replace("\r", "\n", $message);
            $message = str_replace("\n","<br>", $message);
            
            
        //日付の取得
        $write_time = date("Y-m-d");
        
        //ファイルのアップロード
       list($message,$upmessage) = $this->fileup($request, $message);
       
       //データベースの更新
       $content = new Bcontent();
       $content -> title = $title;
       $content -> contents = $message;
       $content -> tm = $write_time;
      
      DB::transaction(function()use($content){ 
       $content->save(); //データバースへ追加
      });
       
       return view ('kad09', ['msg' => '投稿が完了しました']);
       
    }
    
    function fileUp($request, $message)
    {
        //アップロード先の指定
        $updir = "./images/";
        
        //ファイルのアップロード
        if ( $request -> file('upfile')) {
            if ($request -> file('upfile') -> isValid()) {
                //ファイル名の取得
                
                $fname = $request->file('upfile') -> getClientOriginalName();
                
                $request-> file('upfile') -> move($updir,$fname);
                $upmessage = $fname. 'をアップロードしました';
                
                //イメージタグの生成
                
                $message .= $this -> createTag($fname);
            } 
            }else {
                $upmessage = 'ファイルアップロード失敗';
                
            
        }
            
            //戻り値を配列で返す
            return array($message,$upmessage);
            
    }
    
    //イメージ表示のための処理
    function createTag($fname) {
         $message = "<div class=\"img\"><img src=\"/images/{$fname}\" width=120 height=120>
            </div><br>";
          return $message;
    }
}
