@extends('layouts.main')
@section('title','สมัครสมาชิก')
@section('content')


<form action="/form_register_save" method="post">






                         
                                    <label>ID</label>
                                    <input type="text" class="form-control" name="id" placeholder="ID">
                              
                            
                            <br>
                           
                                    <label>Username</label>
                                    <input type="text" class="form-control" name="user5" placeholder="Username">
                               
                                    <br>
                       
                                <label>password</label>
                                <input type="password" class="form-control" name="password" placeholder="password">
                                <br>
                                
                                <label>status</label>
                                <select name="status" class="form-control">
                                        <option>1</option>
                                        <option>2</option>
                                </select>
                        <br>


                        <button type="submit" class="btn btn-primary">ส่งค่า</button>
                        
                        
</form>


@endsection