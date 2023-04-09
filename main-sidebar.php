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
          <p style="width:130px; overflow:hidden;"><?php echo $name; ?></p>
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
        <li>
          <a href="index.php">
            <i class="fa fa-newspaper-o"></i> <span>News Feed</span>
          </a>
        </li>
        <?php
          if ($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'organization'){
            echo('<li>
            <a href="pending.php">
              <i class="fa fa-check"></i> <span>Pending Posts</span>
            </a>
          </li>');
          }
        ?>
        <li>
          <a href="fundList.php">
            <i class="fa fa-money"></i> <span>Raise Fund</span>
          </a>
        </li>
        <li>
          <a href="checkout.php">
            <i class="fa fa-flag"></i> <span>My Activity</span>
          </a>
        </li>
        <li>
          <a href="feedbackFund.php">
            <i class="fa fa-rotate-right"></i> <span>My Crowfunding</span>
          </a>
        </li>
        <!-- <li>
          <a href="messages.php">
            <i class="fa fa-wechat"></i> <span>Messages</span>
          </a>
        </li> -->
        <li>
          <a href="group.php">
          <i class="fa-sharp fa-solid fa-people-group" style="padding-right: 5px;"></i><span>Group</span>
          </a>
        </li>
        <li>
          <a href="events.php">
            <i class="fa fa-calendar"></i> <span>Events</span>
          </a>
        </li>
        <li>
          <a href="gift.php">
            <i class="fa fa-gift"></i> <span>Gifts</span>
          </a>
        </li>
        <!-- <li>
          <a href="photos.php">
            <i class="fa  fa-file-photo-o"></i> <span>Photos</span>
          </a>
        </li> -->
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>