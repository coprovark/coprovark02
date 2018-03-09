@extends('layouts.main')

@section('title', 'Page Title')

@section('content')

<form action="/page12" method="post">
    <select name="select">
        <option value="TH">ไทย</option>
        <option value="CHI">จีน</option>
        <option value="LAO">ลาว</option>
    </select>
    
    รายละเอียด
    <textarea name="texarea"></textarea>
    
    
    <br><br>
    <input type="submit" value="send">
</form>
@endsection