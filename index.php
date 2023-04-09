
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
  <title>AtHeart</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  
  <link rel="stylesheet" href="dist/css/custom.css">

  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/brands.min.css"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

        <style>
  .but.active1 {
    background: green;
    color: white;
  }
  .but1.active2 {
    background: blue;
    color: white;
  }
  .but:hover {
    background: green;
    color: white;
  }
 
  /* .but1:active {
    background: blue;
    color: white;
  } */
  .but1:hover {
    background: blue;
    color: white;
  }
  </style>

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>S</b>N</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>AtHeart </b></span>
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
        News Feed
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
            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">


                  <label for="">Post:</label>
                    <div>
                        <ul class="" style="padding-left : 20px ; cursor : pointer ; font-weight : 600;">
                            <li class="rescue" onclick="check_rescue()" id="rescue p-1">Emergency</li>
                            <li class="healing" onclick="check_healing()" id="healing p-1">Healing</li>
                        </ul>
                    </div>
                    <div class="rescue hidden">
                        <input type="text" name="title" value="rescue" style="width: 0px;"hidden><br>
                        <label for="">
                            <i class="fa-solid fa-location-dot"></i> Location:
                        </label>
                        <select name="location" id="location">
                            <option value="Quan1">Quan 1</option>
                            <option value="Quan2">Quan 2</option>
                            <option value="Quan3">Quan 3</option>
                            <option value="Quan4">Quan 4</option>
                            <option value="Quan5">Quan 5</option>
                            <option value="Quan6">Quan 6</option>
                            <option value="Quan7">Quan 7</option>
                            <option value="Quan8">Quan 8</option>
                            <option value="Quan9">Quan 9</option>
                            <option value="Quan10">Quan 10</option>
                            <option value="Quan11">Quan 11</option>
                            <option value="Quan12">Quan 12</option>
                            <option value="Quan_Binh_Thanh">Quan Binh Thanh</option>
                            <option value="Quan_Tan_Phu">Quan Tan Phu</option>
                            <option value="Quan_Tan_Bnh">Quan Tan Binh</option>
                        </select><br>
                        <label for="">Description:</label><br>
                        <textarea name="description" id="description" cols="30" rows="5" class="border-black border-2 p-2" placeholder="What's on your mind?"></textarea><br>
                        <!-- <div class="">
                            <label for="">Grant Permission:</label><br>
                            <select class="border-2 border-black" name="permission" id="permission">
                                <option value="none">None</option>
                                <option value="wards">Wards</option>
                                <option value="city">City</option>
                                <option value="central">Central</option>
                                <option value="youth_group">Youth Group</option>
                            </select>
                        </div>                     -->
                        <div class="">
                            <label for="">Time Limit:</label><br>
                            <input type="number" name="time" id="time" class="border-2 border-black w-12">
                            minute
                            <i class="fa-solid fa-clock p-1" style="padding: 2px"></i><br>  
                        </div><br>
                        <div class="">
                            <label for="">Green Point:</label><br>
                            <input type="number" name="green_point" id="green_point" class="border-2 border-black w-12"><i class="fa-solid fa-shield-heart p-1" style="padding : 2px"></i><br>  
                        </div>
                       
                        <label for="">Sub images:</label><br>
                        <input type="file" name="files[]" class="border-2 border-black" require multiple><br>
                        <div class="pull-right margin-r-5">
                          <button type="submit" name="submit_post1" class="btn btn-info">Post</button> -->
                          <!-- <label class="btn btn-warning">Image
                            <input type="file" name="image" id="ProfileImageBtn">
                          </label> -->
                        </div>
                    </div>
                    <div class="healing hidden">
                    <input type="text" name="title2" value="healing" class="w-0" hidden>
                    <label for="">
                        <i class="fa-solid fa-location-dot"></i> Location:
                    </label>
                        <select name="location2" id="location2">
                            <option value="Quan1">Quan 1</option>
                            <option value="Quan2">Quan 2</option>
                            <option value="Quan3">Quan 3</option>
                            <option value="Quan4">Quan 4</option>
                            <option value="Quan5">Quan 5</option>
                            <option value="Quan6">Quan 6</option>
                            <option value="Quan7">Quan 7</option>
                            <option value="Quan8">Quan 8</option>
                            <option value="Quan9">Quan 9</option>
                            <option value="Quan10">Quan 10</option>
                            <option value="Quan11">Quan 11</option>
                            <option value="Quan12">Quan 12</option>
                            <option value="Quan_Binh_Thanh">Quan Binh Thanh</option>
                            <option value="Quan_Tan_Phu">Quan Tan Phu</option>
                            <option value="Quan_Tan_Bnh">Quan Tan Binh</option>
                        </select><br>
                        <label for="">Description:</label><br>
                        <textarea name="description2" id="description2" cols="30" rows="5" class="border-black border-2 p-2" placeholder="What's on your mind?"></textarea><br>
                        <div class="">
                            <label for="">Grant Permission:</label><br>
                            <select class="border-2 border-black" name="permission2" id="permission2">
                                <option value="none">None</option>
                                <option value="wards">Wards</option>
                                <option value="city">City</option>
                                <option value="central">Central</option>
                                <option value="youth_group">Youth Group</option>
                            </select>                  
                        </div>        
                        <div class="">
                            <label for="">People:</label><br>
                            <input type="number" name="people2" id="people2" class="border-2 border-black w-12"><i class="fa-solid fa-person p-1" style="padding : 2px"></i><br>  
                        </div><br>
                        <div class="">
                            <label for="">Green Point:</label><br>
                            <input type="number" name="green_point2" id="green_point2" class="border-2 border-black w-12"><i class="fa-solid fa-shield-heart p-1" style="padding : 2px"></i><br>  
                        </div>                    
                        <label for="">Sub images:</label><br>
                        <input type="file" name="files[]" class="border-2 border-black" require multiple><br>
                        <div class="pull-right margin-r-5">
                          <button type="submit" name="submit_post2" class="btn btn-info">Post</button> -->
                          <!-- <label class="btn btn-warning">Image
                            <input type="file" name="image" id="ProfileImageBtn">
                          </label> -->
                        </div>
                 
                </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <div class="pull-right margin-r-5">
                  <!-- <button type="submit" name="submit_post" class="btn btn-info">Post</button> -->
                  <!-- <label class="btn btn-warning">Image
                    <input type="file" name="image" id="ProfileImageBtn">
                  </label> -->
                 
                </div>
                <div>
                  <?php if(isset($_SESSION['uploadError'])) { ?>
                    <p><?php echo $_SESSION['uploadError']; ?></p>
                  <?php unset($_SESSION['uploadError']); } ?>
                </div>
              </div>
              <!-- /.box-footer -->
            </form>

          </div>
          <?php
                if($_SERVER['REQUEST_METHOD'] === 'POST'){
                  if(isset($_POST['submit_post1'])){                  
                    $title = $_POST['title'];
                    $location = $_POST['location'];
                    $description = $_POST['description'];
                    $file_names = $_FILES['files']['name'];
                    $file_temps = $_FILES['files']['tmp_name'];
                    // $permission = $_POST['permission'];
                    $timelimit = $_POST['time'];
                    $green_point = $_POST['green_point'];
                    $sql_add= " INSERT INTO post (id_user,title,location,description,time_limit,green_point, status) VALUES ($_SESSION[id_user],'$title','$location','$description','$timelimit','$green_point', 'pending')";
                    $result_add_post = $conn->query($sql_add);
                    if(isset($_FILES["files"])) {
                      if($result_add_post){
                        $query = "SELECT * FROM post
                        ORDER BY id_post DESC LIMIT 1";
                        $result =$conn->query($query)->fetch_assoc();
                        $id_post = $result['id_post'];
                         foreach($file_names as $key => $element){
                          move_uploaded_file($file_temps[$key], "uploads/".$element);
                          $query = "INSERT INTO images (id_post, image_content)
                          VALUES ('$id_post', '$element')";
                          $result =$conn->query($query);
                      }
                    }
                  }
                    // echo('<meta http-equiv="refresh" content="0.5">');
                  }
                  if(isset($_POST['submit_post2'])){
                    $title = $_POST['title2'];
                    $location = $_POST['location2'];
                    $description = $_POST['description2'];
                    $permission = $_POST['permission2'];
                    $people = $_POST['people2'];
                    $file_names = $_FILES['files']['name'];
                    $file_temps = $_FILES['files']['tmp_name'];
                    $green_point = $_POST['green_point2'];
                    $sql_add= " INSERT INTO post (id_user,title,location,description,permission,people,green_point ) VALUES ($_SESSION[id_user],'$title','$location','$description','$permission','$people','$green_point')";
                    $result_add_post = $conn->query($sql_add);
                    if(isset($_FILES["files"])) {
                      if($result_add_post){
                        $query = "SELECT * FROM post
                        ORDER BY id_post DESC LIMIT 1";
                        $result =$conn->query($query)->fetch_assoc();
                        $id_post = $result['id_post'];
                         foreach($file_names as $key => $element){
                          move_uploaded_file($file_temps[$key], "uploads/".$element);
                          $query = "INSERT INTO images (id_post, image_content)
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

                $sql = "SELECT * FROM post INNER JOIN users WHERE post.id_user=users.id_user AND post.id_user='$_SESSION[id_user]' AND post.status='air' ORDER BY post.id_post DESC";
                $result = $conn->query($sql);

                if($result->num_rows > 0) {
                  $i = 0;
                  $enable = 0;
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
                            <span class="username"><a href="#"><?php echo $row['name'] . "   " . "('$row[point]')"; ?></a></span>
                            <span class="description">Shared publicly - <?php echo date('d-M-Y h:i a', strtotime($row['createdAt'])); ?></span>
                          </div>
                        </div>
                        <div class="box-body">
                        <?php
                          if($row['image'] != "") {
                            echo '<img class="img-responsive pad" src="uploads/'.$row['image'].'" alt="Photo">';
                          }
                        ?>
                          <div style="font-size: 20px;font-weight : 600; width: 100px;display: flex; padding:8px">
                              <div style="display:flex;background-color:green ; padding : 2px ; color:aliceblue;border-radius:5px ;font-size:smaller ; align-items: center;">Topic</div>
                              <div style="padding: 4px">
                                <?php echo $row['title']; ?>
                              </div>
                          </div>
                          <?php ?>
                          <p style="font-size: 18px;"><i class="fa-solid fa-location-dot" style="padding-right:2px"></i> <?php echo $row['location'];?></p>
                          <p><?php echo $row['description']; ?></p>
                          <?php $sql = "SELECT * FROM images WHERE images.id_post = '$row[id_post]'";
                            $result = $conn->query($sql);
                            if($result->num_rows > 0) {
                              echo('<div style="display:grid;grid-template-columns: 50% 50%;
                              grid-row: auto auto;
                              grid-column-gap: 1px;
                              grid-row-gap: 1px;">');
                              while($img =  $result->fetch_assoc()){
                                if ($img['image_content'] != ""){
                                  echo('<img class="img-responsive pad" src="uploads/' . $img['image_content']. '" alt="Photo" style="display:flex">');
                                }
                              }
                              echo("</div>");
                            } ?>
                          <button type="button" class="btn btn-default btn-xs"><i class="fa fa-share"></i> Share</button>
                          <?php
                          $sql1 = "SELECT * FROM post WHERE id_user='$_SESSION[id_user]' AND id_post='$row[id_post]'";
                          $result1 = $conn->query($sql1);
                          //from likes
                          if($result1->num_rows > 0) {
                            ?>
                            <button type="button" class="btn btn-default btn-xs" disabled><i class="fa fa-thumbs-o-up"></i> Like</button>

                            <?php
                          } else {
                            ?>
                               <button type="button" id="addLike" data-id="<?php echo $row['id_post']; ?>" class="btn btn-default btn-xs"><i class="fa fa-thumbs-o-up"></i> Like</button>
                            <?php
                          }
                          ?>
                          <form action="" method="POST">
                            <button type="submit" name="form_submit" style="cursor : pointer"><i class="fa-solid fa-handshake-angle"></i>Attend</button> 
                          </form>
                          <?php
                          if($enable == 0 && $_SERVER['REQUEST_METHOD'] === 'POST'){
                            if(isset($_POST['form_submit']))
                            {
                              $sql_add= " INSERT INTO group_volunteer (id_group ,id_user, name , active) VALUES ($row[id_post],$_SESSION[id_user],'group $row[id_post]' ,'1')";
                              $result_add = $conn->query($sql_add);
                              $enable = 1;
                              echo('<meta http-equiv="refresh" content="0.5">');
                            }
                          }
                          ?>
                          <?php
                          $sql2 = "SELECT * FROM post WHERE id_post='$row[id_post]'";
                           //from likes
                          $result2 = $conn->query($sql2);
                          $totalLikes = (int)$result2->num_rows; 
                          ?>  
                          <?php
                          $sql3 = "SELECT * FROM post WHERE id_post='$row[id_post]'";
                           //from comments
                          $result3 = $conn->query($sql3);
                          $totalComments = (int)$result3->num_rows;
                          ?>
                          <span class="pull-right text-muted commentBtn" onclick="toggleComments(<?php echo $i; ?>);"><?php echo $totalLikes; ?> likes - <?php echo $totalComments; ?> comments</span>
                        </div>
                        <!-- /.box-body -->
                        <div id="boxComment<?php echo $i; ?>" class="box-footer box-comments">
                        <?php
                          $sql4 = "SELECT * FROM post WHERE id_user='$_SESSION[id_user]' AND id_post='$row[id_post]'";
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
                  }
                }
                ?>
        </div>

        <div class="col-md-4">
          <!-- USERS LIST -->
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Location Filter</h3>
            </div>
            <div class="box-body" id="myBtnContainer">
              <button type="button" class="btn btn-outline-success but active1">
                All
              </button>
              <button type="button" class="btn btn-outline-success but">
                1 st District
              </button>
              <button type="button" class="btn btn-outline-success but">
                2 st District
              </button>
              <button type="button" class="btn btn-outline-success but">
                3 st District
              </button>
              <button type="button" class="btn btn-outline-success but">
                4 st District
              </button>
              <button type="button" class="btn btn-outline-success but">
                Thu Duc District
              </button>
              <button type="button" class="btn btn-outline-success but">
                Binh Thanh District
              </button>
            </div>
          </div>

          <!--/.box -->

          <!-- PRODUCT LIST -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Category filter</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body" id="myBtnContainer1">
              <button type="button" class="btn btn-outline-primary but1 active2">
                All
              </button>
              <button type="button1" class="btn btn-outline-primary but1">
                Environment
              </button>
              <button type="button1" class="btn btn-outline-primary but1">
                Creature
              </button>
              <button type="button1" class="btn btn-outline-primary but1">
                People
              </button>
            </div>
            <!-- /.box-body -->          
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
    <strong>Copyright &copy; 2016-2017 <a href="index.php">AtHeart</a>.</strong> All rights
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
  var btnContainer1 = document.getElementById("myBtnContainer1");
  var btns1 = btnContainer1.getElementsByClassName("but1");
  console.log(btns1.length);
  for (var i = 0; i < btns1.length; i++) {
    btns1[i].addEventListener("click", function(){
      var current = document.getElementsByClassName("active2");
      console.log(current[0]);
      current[0].classList.remove('active2');
      this.classList.add("active2");
    });
  }
</script>
<script>
  var btnContainer = document.getElementById("myBtnContainer");
  var btns = btnContainer.getElementsByClassName("but");
  for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function(){
      var current = document.getElementsByClassName("active1");
      console.log(current[0]);
      current[0].classList.remove('active1');
      this.classList.add("active1");
    });
  }

  function toggleComments(id) {
    $("#boxComment"+id).slideToggle("slow");
  }
</script>
<script>
        function check_rescue(){
            $('.healing').addClass('hidden');
            $('.rescue').removeClass('hidden');
        }
        function check_healing(){
            $('.healing').removeClass('hidden');
            $('.rescue').addClass('hidden');
        }
    </script>

</body>
</html>
