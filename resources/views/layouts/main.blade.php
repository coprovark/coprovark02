<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="css/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">SB Admin v2.0</a>
            </div>
            <!-- /.navbar-header -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        
                        <li>
                            <a href="tables.html"><i class="fa fa-table fa-fw"></i> Register</a>
                        </li>
                        <li>
                            <a href="tables.html"><i class="fa fa-table fa-fw"></i> Login</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Register</h1>

                    <!-- @yield('content') -->


<!-- 
                        <form>
                            <div class="form-group">
                              <label for="exampleInputEmail1">Email address</label>
                              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1">Password</label>
                              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputFile">File input</label>
                              <input type="file" id="exampleInputFile">
                              <p class="help-block">Example block-level help text here.</p>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox"> Check me out
                              </label>
                            </div>
                            <button type="submit" class="btn btn-default">Submit</button>
                          </form> -->





                          <form method="post" class="form-inline">
                            
                            <b>Name-Surname</b>
                            <br>
                            <select name="select">
                                <option value="นาย">Mr.</option>
                                <option value="นาง">Mrs</option>
                                <option value="น.ส.">Miss</option>
                            </select>
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text"  class="form-control" id="name" placeholder="Prayut">-
                                <label for="surname">Surname</label>
                                <input type="text"  class="form-control" id="surname" placeholder="Chuntocha"> 
                            </div>
                            <!-- <input type="text" name="name">-<input type="text" name="surname"> -->
                            <br>
                           
                            <b>Gender</b> 
                            <br>
                            <div class="radio">
                                <label>
                                  <input type="radio" name="sex" id="male" value="M" aria-label="male"><b>male</b>
                                  <input type="radio" name="sex" id="female" value="F" aria-label="female"><b>female</b>
                                  <input type="radio" name="sex" id="etc" value="E" aria-label="etc">
                                </label>
                              </div>
                              <label for="etc">etc...</label>
                                <input type="text"  class="form-control" id="etc" placeholder="...">
                            <!-- <input type="radio" name="radio" value="m"> male <br>
                            <input type="radio" name="radio" value="f"> female <br>
                            <input type="radio" name="radio" value="etc"> etc...
                            <input type="text" name="gender-etc"> -->
                            <br>
                            
                            <b>Tell.</b> 
                            <br>
                            <label for="name">Name</label>
                            <input type="text" placeholder=0811111111 size="10" maxlength=10  class="form-control" id="name" placeholder="0811111111">
                            <!-- <input type="text" placeholder=0811111111 size="10" maxlength=10 name="tel"> -->
                            <br>
                            
                            
                            <b>Address</b> 
                            <br>
                            <textarea class="form-control" rows="3"></textarea>
                            <!-- <textarea name="texarea"></textarea> -->
                            <br>
                            
                            <b>E-mail</b> 
                            <br>
                            <label for="email">email</label>
                            <input type="text" class="form-control" id="email" placeholder="example@email.com">
                            <!-- <input type="text" name="email"> -->
                            <br>

                            <b>Three size</b>
                            <br>
                            <label for="หน้าอก">หน้าอก</label>
                            <input type="text" size="3" maxlength=3 class="form-control" id="หน้าอก" placeholder="90">
                            <label for="เอว">เอว</label>
                            <input type="text" size="3" maxlength=3 class="form-control" id="เอว" placeholder="45">
                            <label for="สะโพก">สะโพก</label>
                            <input type="text" size="3" maxlength=3 class="form-control" id="สะโพก" placeholder="80">
                            <!-- <input type="text" size="3" maxlength=3 name="หน้าอก">- 
                            <input type="text" size="3" maxlength=3 name="เอว">- 
                            <input type="text" size="3" maxlength=3 name="สะโพก">  -->
                            <br>

                            <b>Like</b>
                            <br>
                            <div class="checkbox">
                                <label>
                                  <input type="checkbox" id="checkbox1" value="ทักกี้" aria-label="ทักษิณ">ทักษิณ
                                  <input type="checkbox" id="checkbox1" value="ปู" aria-label="ยิ่งลักษณ์">ยิ่งลักษณ์
                                  <input type="checkbox" id="checkbox1" value="ตู่" aria-label="บิ๊กตู่">บิ๊กตู่
                                  <input type="checkbox" id="checkbox1" value="ป้อม" aria-label="บิ๊กป้อม">บิ๊กป้อม
                                </label>
                            </div>

                            <!-- <input type="checkbox" name="checkbox1" value="ทักกี้"> ทักษิณ
                            <input type="checkbox" name="checkbox2" value="อีปู"> ยิ่งลักษณ์
                            <input type="checkbox" name="checkbox1" value="ปลายู้ด"> บิ๊กตู่
                            <input type="checkbox" name="checkbox1" value="นาฬิกาเรือนเพื่อนตาย"> บิ๊กป้อม -->
                            <br>

                            <b>Province</b>
                            <br>
                            <select multiple class="form-control" name="province">
                                <option value="" selected>--------- Select province ---------</option>
                                <option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
                                <option value="กระบี่">กระบี่ </option>
                                <option value="กาญจนบุรี">กาญจนบุรี </option>
                                <option value="กาฬสินธุ์">กาฬสินธุ์ </option>
                                <option value="กำแพงเพชร">กำแพงเพชร </option>
                                <option value="ขอนแก่น">ขอนแก่น</option>
                                <option value="จันทบุรี">จันทบุรี</option>
                                <option value="ฉะเชิงเทรา">ฉะเชิงเทรา </option>
                                <option value="ชัยนาท">ชัยนาท </option>
                                <option value="ชัยภูมิ">ชัยภูมิ </option>
                                <option value="ชุมพร">ชุมพร </option>
                                <option value="ชลบุรี">ชลบุรี </option>
                                <option value="เชียงใหม่">เชียงใหม่ </option>
                                <option value="เชียงราย">เชียงราย </option>
                                <option value="ตรัง">ตรัง </option>
                                <option value="ตราด">ตราด </option>
                                <option value="ตาก">ตาก </option>
                                <option value="นครนายก">นครนายก </option>
                                <option value="นครปฐม">นครปฐม </option>
                                <option value="นครพนม">นครพนม </option>
                                <option value="นครราชสีมา">นครราชสีมา </option>
                                <option value="นครศรีธรรมราช">นครศรีธรรมราช </option>
                                <option value="นครสวรรค์">นครสวรรค์ </option>
                                <option value="นราธิวาส">นราธิวาส </option>
                                <option value="น่าน">น่าน </option>
                                <option value="นนทบุรี">นนทบุรี </option>
                                <option value="บึงกาฬ">บึงกาฬ</option>
                                <option value="บุรีรัมย์">บุรีรัมย์</option>
                                <option value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์ </option>
                                <option value="ปทุมธานี">ปทุมธานี </option>
                                <option value="ปราจีนบุรี">ปราจีนบุรี </option>
                                <option value="ปัตตานี">ปัตตานี </option>
                                <option value="พะเยา">พะเยา </option>
                                <option value="พระนครศรีอยุธยา">พระนครศรีอยุธยา </option>
                                <option value="พังงา">พังงา </option>
                                <option value="พิจิตร">พิจิตร </option>
                                <option value="พิษณุโลก">พิษณุโลก </option>
                                <option value="เพชรบุรี">เพชรบุรี </option>
                                <option value="เพชรบูรณ์">เพชรบูรณ์ </option>
                                <option value="แพร่">แพร่ </option>
                                <option value="พัทลุง">พัทลุง </option>
                                <option value="ภูเก็ต">ภูเก็ต </option>
                                <option value="มหาสารคาม">มหาสารคาม </option>
                                <option value="มุกดาหาร">มุกดาหาร </option>
                                <option value="แม่ฮ่องสอน">แม่ฮ่องสอน </option>
                                <option value="ยโสธร">ยโสธร </option>
                                <option value="ยะลา">ยะลา </option>
                                <option value="ร้อยเอ็ด">ร้อยเอ็ด </option>
                                <option value="ระนอง">ระนอง </option>
                                <option value="ระยอง">ระยอง </option>
                                <option value="ราชบุรี">ราชบุรี</option>
                                <option value="ลพบุรี">ลพบุรี </option>
                                <option value="ลำปาง">ลำปาง </option>
                                <option value="ลำพูน">ลำพูน </option>
                                <option value="เลย">เลย </option>
                                <option value="ศรีสะเกษ">ศรีสะเกษ</option>
                                <option value="สกลนคร">สกลนคร</option>
                                <option value="สงขลา">สงขลา </option>
                                <option value="สมุทรสาคร">สมุทรสาคร </option>
                                <option value="สมุทรปราการ">สมุทรปราการ </option>
                                <option value="สมุทรสงคราม">สมุทรสงคราม </option>
                                <option value="สระแก้ว">สระแก้ว </option>
                                <option value="สระบุรี">สระบุรี </option>
                                <option value="สิงห์บุรี">สิงห์บุรี </option>
                                <option value="สุโขทัย">สุโขทัย </option>
                                <option value="สุพรรณบุรี">สุพรรณบุรี </option>
                                <option value="สุราษฎร์ธานี">สุราษฎร์ธานี </option>
                                <option value="สุรินทร์">สุรินทร์ </option>
                                <option value="สตูล">สตูล </option>
                                <option value="หนองคาย">หนองคาย </option>
                                <option value="หนองบัวลำภู">หนองบัวลำภู </option>
                                <option value="อำนาจเจริญ">อำนาจเจริญ </option>
                                <option value="อุดรธานี">อุดรธานี </option>
                                <option value="อุตรดิตถ์">อุตรดิตถ์ </option>
                                <option value="อุทัยธานี">อุทัยธานี </option>
                                <option value="อุบลราชธานี">อุบลราชธานี</option>
                                <option value="อ่างทอง">อ่างทอง </option>
                                </select> <br>
                          
                          <br>
                          <label for="user">user</label>
                          <br>
                            <input type="text" size="15" maxlength=153 class="form-control" id="user" placeholder="user">
                          <!-- <input type="text" name=" user"> -->
                          <br>

                          
                          <label for="password">password</label>
                          <br>
                            <input type="password" size="15" maxlength=3 class="form-control" id="password" placeholder="password">
                          <!-- <input type="password" name="password"> -->
                          <br>
                          <label for="repassword">repassword</label>
                          <br>
                            <input type="password" size="15" maxlength=3 class="form-control" id="repassword" placeholder="repassword">
                          <!-- Repassword <br>
                          <input type="password" name="repassword"> -->
                          <br>
                          <br>
                        </div>
                        <button type="submit" class="btn btn-default">Send</button>
                        <!-- <input type="submit" value="send"> -->
                        <br>
                        <button type="reset" class="btn btn-default">Reset</button>  
                        <!-- <input type="reset" value="reset">                     -->
                            
                         
                        </form
                        





                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="css/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="css/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>

</body>

</html>
