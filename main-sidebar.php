<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <?php 
                $sql = "SELECT * FROM users WHERE id_user='$_SESSION[id_user]'";
                $result = $conn->query($sql);
                if($result->num_rows > 0) {
                  $row = $result->fetch_assoc();
                  if($row['profileimage'] != '') {
                    echo '<img src="uploads/profile/'.$row['profileimage'].'" class="img-circle" alt="User Image">';
                  } else {
                    echo '<img src="dist/img/avatar5.png" class="img-circle" alt="User Image">';
                  }
                }
                ?>
        </div>
        <div class="pull-left info">
          <p><?php echo $name; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu  -->
      <ul class="sidebar-menu" data-widget="tree">
        <li>
          <a href="profile.php">
            <i class="fa fa-user-o"></i> <span>Profile</span>
          </a>
        </li>
        <li class="active">
          <a href="index.php">
            <i class="fa fa-newspaper-o"></i> <span>News Feed</span>
          </a>
        </li>
        <?php
          if ($_SESSION['role'] == 'admin'){
            echo('<li class="active">
            <a href="pending.php">
              <i class="fa fa-newspaper-o"></i> <span>Pending Posts</span>
            </a>
          </li>');
          }
        ?>
        <li>
          <a href="checkout.php">
            <i class="fa fa-flag"></i> <span>My Activity</span>
          </a>
        </li>
        <li>
          <a href="messages.php">
            <i class="fa fa-wechat"></i> <span>Messages</span>
          </a>
        </li>
        <li>
          <a href="friends.php">
            <i class="fa fa-users"></i> <span>Friends</span>
          </a>
        </li>
        <li>
          <a href="pages.php">
          <i class="fa-light fa-user-group"></i><span>Group</span>
          </a>
        </li>
        <li>
          <a href="events.php">
            <i class="fa fa-calendar"></i> <span>Events</span>
          </a>
        </li>
        <li>
          <a href="photos.php">
            <i class="fa  fa-file-photo-o"></i> <span>Photos</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>