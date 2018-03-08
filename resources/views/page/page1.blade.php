@extends('layouts.main')

@section('title', 'Page Title')

@section('content')

    

<form action="/page" method="post">
    Name
    <br>

    <input type="text" name="name">
    <br>
    Like
    <br>

    <input type="checkbox" name="checkbox1" value="Cofee"> Cofee
    <input type="checkbox" name="checkbox2" value="Tea"> Tea
    <br>

    Gender
    <br>

    <input type="radio" name="radio" value="male"> male
    <input type="radio" name="radio" value="female"> female

    <input type="hidden" name="hidden" value="1101">
    
    <br><br>
    <input type="submit" value="send">
</form

<h2>แสดงค่า</h2>
ชื่อ = {{ $NAME }} <br>
รหัส = {{ $ID }} <br>
เพศ = {{ $GEN }} <br>
ชอบ = {{ $LIKE }} <br>

@endsection