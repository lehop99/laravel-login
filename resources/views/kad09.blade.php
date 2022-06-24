@extends('layouts.kadapp2')
@section('title','課題09')
@section('title2','課題09 DB処理2')
@section('content')

{{$msg}}
<table border="0" id="btable">
    <form action="/kad09" method="post" enctype="multipart/form-data" class="iform">
        {!!csrf_field()!!} 
        
        <tr>
            <td> タイトル :</td>
            <td><input type="text" name="title" value="{{old('title')}}"></td>
        </tr>
        
        <tr>
            <td>コメント : </td>
            <td> <textarea rows="10" cols="40" name="message" value="{{old('message')}}"></textarea></td>
        </tr>
        
        <tr>
            <td>イメージ : </td>
            <td><input type="file" name="upfile" size="30">
                <!-- アップロードの最大容量は2M -->
             <input type="hidden" name="MAX_FILE_SIZE" value="2000000"> 
            </td>
        </tr>
        
        <tr><td colspan="2"><font size="2" color="#ff0000">*アップロードするファイルは２Ｍバイトまで></font></td></tr>
        
        
        <tr><td colspan="2">&nbsp;</td></tr>
        
        <tr><td colspan="2">&nbsp;</td></tr>
        
        <tr><td colspan="2"><input type='submit' name="sub" value="投稿" class="iform"></td></tr>
    </form> 
</table>
<br>
@if ($errors -> has('title'))
<p>ERROR : {{$errors -> first('title')}}</p>
@endif
@if ($errors-> has('message'))
<p>ERROR : {{$errors -> first('message') }} </p>
@endif
<p> <a href="/kad08">課題08へ</a></p>
@endsection

        
        
        

