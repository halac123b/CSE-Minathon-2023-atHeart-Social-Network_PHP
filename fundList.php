
<?php

session_start();

if(empty($_SESSION['id_user'])) {
  header("Location: login.php");
  exit();
}

require_once("db.php");

$name = "";

$sql = "SELECT * FROM users WHERE id_user='$_SESSION[id_user]'";
$result = $conn->query($sql);

if($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $name = $row['name'];
  }
}

$_SESSION['callFrom'] = "index.php";

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Social Network</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  <link rel="stylesheet" href="dist/css/custom.css">


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>S</b>N</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Social </b>Network</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        AdminLTE Design Team
                        <small><i class="fa fa-clock-o"></i> 2 hours</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Developers
                        <small><i class="fa fa-clock-o"></i> Today</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Sales Department
                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Reviewers
                        <small><i class="fa fa-clock-o"></i> 2 days</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                      page and may cause design problems
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-red"></i> 5 new members joined
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> You changed your username
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <?php 
                $sql = "SELECT * FROM users WHERE id_user='$_SESSION[id_user]'";
                $result = $conn->query($sql);
                if($result->num_rows > 0) {
                  $row = $result->fetch_assoc();
                  if($row['profileimage'] != '') {
                    echo '<img src="uploads/profile/'.$row['profileimage'].'" class="img-circle" alt="User Image" style="width: 25px; height: 25px;">';
                  } else {
                     echo '<img src="dist/img/avatar5.png" class="img-circle" alt="User Image" style="width: 25px; height: 25px;">';
                  }
                }
                ?>
              <span class="hidden-xs"><?php echo $name; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  <?php echo $name; ?>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>

    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <?php
    require_once("main-sidebar.php");
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <section class="content-header">
      <h1>
        FUND RAISING
      </h1>
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-8 col-sm-6 col-xs-12">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Wall</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <button onclick="checkStart()">Send a crowfund program</button>
            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
            <div class="fundForm hidden">
                    <!-- <label for="">
                        <i class="fa-solid fa-location-dot"></i> Location:
                    </label> -->
                        <label for="">Description:</label><br>
                        <textarea name="description2" id="description2" cols="30" rows="5" class="border-black border-2 p-2" placeholder="What's on your mind?"></textarea><br>
                        <!-- <div class="">
                            <label for="">Grant Permission:</label><br>
                            <select class="border-2 border-black" name="permission2" id="permission2">
                                <option value="none">None</option>
                                <option value="wards">Wards</option>
                                <option value="city">City</option>
                                <option value="central">Central</option>
                                <option value="youth_group">Youth Group</option>
                            </select>
                        </div> -->
                        <div class="">
                            <label for="">Target money (VND):</label><br>
                            <input type="number" name="target" id="people2" class="border-2 border-black w-12"><i class="fa-solid fa-person p-1" style="padding : 2px"></i><br>  
                        </div><br>
                        </label>
                        <label for="">Plan to use the money:</label><br>
                        <textarea name="plan" id="plan" cols="30" rows="5" class="border-black border-2 p-2" placeholder="Your plan"></textarea><br>
                        <!-- <div class="">
                            <label for="">Green Point:</label><br>
                            <input type="number" name="green_point2" id="green_point2" class="border-2 border-black w-12"><i class="fa-solid fa-shield-heart p-1" style="padding : 2px"></i><br>  
                        </div> -->
                        <label for="">Proof images:</label><br>
                        <input type="file" name="files[]" class="border-2 border-black" require multiple><br>
                        <button type="submit" name="submit_post2" class="btn btn-info">Post</button>
                </div>
              </form>
          </div>
          <?php
            if($_SERVER['REQUEST_METHOD'] === 'POST'){
              if(isset($_POST['submit_post2'])){
                //$location = $_POST['location2'];
                $description = $_POST['description2'];
                $plan = $_POST['plan'];
                // $permission = $_POST['permission2'];
                $target = $_POST['target'];
                $file_names = $_FILES['files']['name'];
                $file_temps = $_FILES['files']['tmp_name'];
                $sql_add= " INSERT INTO fund (id_user,description,target, plan, status) VALUES ($_SESSION[id_user],'$description','$target', '$plan', 'air')";
                $result_add_post = $conn->query($sql_add);
                if(isset($_FILES["files"])) {
                  if($result_add_post){
                    $query = "SELECT * FROM fund
                    ORDER BY id_post DESC LIMIT 1";
                    $result =$conn->query($query)->fetch_assoc();
                    $id_post = $result['id_post'];
                     foreach($file_names as $key => $element){
                      move_uploaded_file($file_temps[$key], "uploads/post/".$element);
                      $query = "INSERT INTO images_fund (id_post, image_content)
                      VALUES ('$id_post', '$element')";
                      $result =$conn->query($query);
                  }
                }
              }
                // echo('<meta http-equiv="refresh" content="0.5">');
              }
            }
          ?>

          <?php
                $sql = "SELECT * FROM fund INNER JOIN users WHERE fund.id_user=users.id_user AND fund.status='air' ORDER BY fund.id_post DESC";
                $result = $conn->query($sql);
                if($result->num_rows > 0) {
                  $i = 0;
                  $enable = 0;
                  $num = 0;
                  while($row =  $result->fetch_assoc()) {
                    $i++;
                    ?>
                      <!-- Box Comment -->
                      <div class="box box-widget">
                        <div class="box-header with-border">
                          <div class="user-block">
                            <?php
                          if($row['profileimage'] != '') {
                            echo '<img src="uploads/profile/'.$row['profileimage'].'" class="img-circle img-bordered-sm" alt="User Image">';
                          } else {
                             echo '<img src="dist/img/avatar5.png" class="img-circle img-bordered-sm" alt="User Image">';
                          }
                        ?>
                            <span class="username">
                              <a href="#"><?php echo $row['name'] . "   " . " - $row[point]"; ?>
                                <i class="fa-solid fa-shield-heart"></i>
                              </a>
                            </span>
                            <span class="description">Shared publicly - <?php echo date('d-M-Y h:i a', strtotime($row['createdAt'])); ?></span>
                          </div>
                        </div>
                        <div class="box-body">
                          <?php $sql = "SELECT * FROM images_fund WHERE images_fund.id_post = '$row[id_post]'";
                          $result = $conn->query($sql);
                          if($result->num_rows > 0) {
                            echo('<div style="display:grid;grid-template-columns: 50% 50%;
                            grid-row: auto auto;
                            grid-column-gap: 1px;
                            grid-row-gap: 1px;">');
                            while($img =  $result->fetch_assoc()){
                              if ($img['image_content'] != ""){
                                echo('<img class="img-responsive pad" src="uploads/post/' . $img['image_content']. '" alt="Photo" style="display:flex">');
                              }
                            }
                            echo("</div>");
                          } ?>

                          <p style='font-size:20px;'><?php echo $row['description']; ?></p>
                          <p style="font-size">Target: <?php echo $row['target']; ?>VNĐ</p>
                          <p style='font-size:20px;'><strong>Plan:</strong> We promise to use your money to do the good thing as first you want it to be:<br> <?php echo $row['plan']; ?></p>
                          <label for="file">Funding progress:</label><br>
                          <progress style="background-color: green; width:100%; border-radius:50px;" id="file" value="<?php echo("$row[current]");?>" max="<?php echo("$row[target]");?>"> <?php echo("$row[current] / $row[target]");?>% </progress> <br>
                          <button type="button" class="btn btn-default btn-xs" onclick="showDialog(<?php echo($num);?>)"><i class="fa fa-money"></i>&nbsp;&nbsp;Donate</button><br>
                          <form action="" method="POST" id="donateBtn<?php echo($num);?>" style="display:none;">
                            <input type="text" name="money">
                            <input type="submit" name="btnAccept" value="Accept" class="btn btn-default btn-xs">
                          </form>
                          <script>
                            function showDialog(num){
                              if (document.getElementById('donateBtn' + num).style.display == 'none'){
                                document.getElementById('donateBtn' + num).style.display = 'block';
                              }
                              else {
                                document.getElementById('donateBtn' + num).style.display = 'none';
                              }
                            }
                          </script>
                          <?php
                            if ($row["report"] != ""){
                              echo("<p1 style='font-size:20px;'><strong>Deploy process:</strong> Thanks to your contribution, we have done some good things to our community:<br>
                              $row[report]</p1>");
                            }
                          ?>
                          <?php $sql = "SELECT * FROM image_feedback WHERE image_feedback.id_post = '$row[id_post]'";
                          $result = $conn->query($sql);
                          if($result->num_rows > 0) {
                            echo('<div style="display:grid;grid-template-columns: 50% 50%;
                            grid-row: auto auto;
                            grid-column-gap: 1px;
                            grid-row-gap: 1px;">');
                            while($img =  $result->fetch_assoc()){
                              if ($img['image_content'] != ""){
                                echo('<img class="img-responsive pad" src="uploads/post/' . $img['image_content']. '" alt="Photo" style="display:flex">');
                              }
                            }
                            echo("</div>");
                          } ?>
                          <?php
                          if ($enable == 0 && $_SERVER['REQUEST_METHOD'] === 'POST'){
                            // Something posted
                            if (isset($_POST['btnAccept'])) {
                              $sql1 = "UPDATE fund SET current = current + '$_POST[money]' WHERE fund.id_post = '$row[id_post]'";
                              $result1 = $conn->query($sql1);
                              $star = intval($_POST['money'] / 10000);
                              $sql1 = "UPDATE users SET point = point + '$_POST[money]' / 10000 WHERE users.id_user = '$_SESSION[id_user]'";
                              $result1 = $conn->query($sql1);
                              echo("<script>alert('Thank you very much for your contribution, you gain $star". " Point for our gratefulness <3');
                              window.location.href='fundList.php'</script>");
                              $enable = 1;
                              // echo("<script>
                              //   alert('Thank you very much for your contribution, you gain for our gratefulness <3');</script>");
                            }
                          }
                          ?>
                          <?php
                          $sql2 = "SELECT * FROM fund WHERE id_post='$row[id_post]'";
                           //from likes
                          $result2 = $conn->query($sql2);
                          $totalLikes = (int)$result2->num_rows;
                          ?>
                          <?php
                          $sql3 = "SELECT * FROM fund WHERE id_post='$row[id_post]'";
                           //from comments
                          $result3 = $conn->query($sql3);
                          $totalComments = (int)$result3->num_rows;
                          ?>
                          <span class="pull-right text-muted commentBtn" onclick="toggleComments(<?php echo $i; ?>);"><?php echo $totalLikes; ?> likes - <?php echo $totalComments; ?> comments</span>
                        </div>
                        <!-- /.box-body -->
                        <div id="boxComment<?php echo $i; ?>" class="box-footer box-comments">
                        <?php
                          $sql4 = "SELECT * FROM fund WHERE id_user='$_SESSION[id_user]' AND id_post='$row[id_post]'";
                          //from comments
                          $result4 = $conn->query($sql4);

                          if($result4->num_rows > 0) {
                            while($row4 = $result4->fetch_assoc()) {
                              $sql5 = "SELECT * FROM users WHERE id_user='$row4[id_user]'";
                              $result5 = $conn->query($sql5);
                              if($result5->num_rows > 0) {
                                $row5 = $result5->fetch_assoc();
                              }
                          ?>

                          <div class="box-comment">
                          <?php
                              if($row5['profileimage'] != "") {
                                echo '<img class="img-circle img-sm" src="uploads/profile/'.$row5['profileimage'].'" alt="Photo">';
                              }
                            ?>
                            <div class="comment-text">
                                  <span class="username">
                                    <?php echo $row5['name']; ?>
                                    <span class="text-muted pull-right"><?php echo date('d-M-Y h:i a', strtotime($row4['createdAt'])); ?></span>
                                  </span>
                              <?php echo $row4['comment']; ?>
                            </div>
                          </div>

                          <?php
                          }
                        }
                        ?>


                        </div>
                        <!-- /.box-footer -->
                        <div class="box-footer">
                          <form action="#" method="post">
                          <?php
                              if($row['profileimage'] != "") {
                                echo '<img class="img-responsive img-circle img-sm" src="uploads/profile/'.$row['profileimage'].'" alt="Photo">';
                              }
                            ?>
                            <!-- .img-push is used to add margin to elements next to floating images -->
                            <div class="img-push">
                              <input type="text" id="addcomment" data-id="<?php echo $row['id_post']; ?>" class="form-control input-sm" onkeypress="checkInput(event);" placeholder="Press enter to post comment">
                            </div>
                          </form>
                        </div>
                        <!-- /.box-footer -->
                      </div>
                      <!-- /.box -->
                    <?php
                    $num += 1;
                  }
                }
                ?>
        </div>
        <div class="col-md-4">
          <!-- USERS LIST -->
          <!-- PRODUCT LIST -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">News</h3>

            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <ul class="products-list product-list-in-box">
                <li class="item">
                  <div class="product-img">
                    <img src="dist/img/default-50x50.gif" alt="Product Image">
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">#Trồng rừng
                      <span class="label label-warning pull-right text-green">123 Green Point</span></a>
                    <span class="product-description">
                          Team ABC đã trồng 123 cây xanh tại Củ Chi.
                        </span>
                  </div>
                </li>
                <!-- /.item -->
                <li class="item">
                  <div class="product-img">
                    <img src="dist/img/default-50x50.gif" alt="Product Image">
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">#Đổi sách cũ lấy cây.
                      <span class="label label-warning pull-right text-green">100 Green Point</span></a>
                    <span class="product-description">
                          Buổi hội chợ môi trường đổi sách lấy cây xanh vừa </span> 
                          <span class="product-description">  được team CYCLE tổ chức thành công.
                        </span>
                  </div>
                </li>
                <!-- /.item -->
                <li class="item">
                  <div class="product-img">
                    <img src="dist/img/default-50x50.gif" alt="Product Image">
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">#Giải cứu kênh rạch <span
                        class="label label-danger pull-right text-green">500 Green Point</span></a>
                    <span class="product-description">
                          Kênh nước đen đã được team ABC giải cứu!!!
                        </span>
                  </div>
                </li>
                <!-- /.item -->
                <li class="item">
                  <div class="product-img">
                    <img src="dist/img/default-50x50.gif" alt="Product Image">
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">#Giải cứu động vật.
                      <span class="label label-info pull-right">90 Point</span></a>
                    <span class="product-description">
                          Team 4fun đã giải cứu thành công 2 cá thể khỉ quý hiếm bị bắt.
                        </span>
                  </div>
                </li>
                <!-- /.item -->
              </ul>
            </div>
            <!-- /.box-body -->
            <div class="box-footer text-center">
              <a href="javascript:void(0)" class="uppercase">View All Pages</a>
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->


        </div>

            <!-- /.box-footer -->
          </div>
          <!-- /.box -->


        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0.0
    </div>
    <strong><a href="index.php">AtHeart</a>.</strong> All rights
    reserved.
  </footer>

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>

<script>
  $("#addLike").on("click", function() {
    var id_post = $(this).attr("data-id");
    $.post("addlike.php", {id:id_post}).done(function(data) {
      var result = $.trim(data);
      if(result == "ok") {
        location.reload();
      }
    });
  });
</script>
<script>
  function checkInput(e) {

    //13 means enter
    if(e.keyCode === 13) {
      var id_post = $("#addcomment").attr("data-id");
      var comment = $("#addcomment").val();
      $.post("addcomment.php", {id:id_post, comment:comment}).done(function(data) {
        var result = $.trim(data);
        if(result == "ok") {
          location.reload();
        }
      });
    }
  }
</script>

<script>
  function toggleComments(id) {
    $("#boxComment"+id).slideToggle("slow");
  }
</script>
<script>
        function checkStart(){
            $('.fundForm').removeClass('hidden');
        }
    </script>
</body>
</html>
