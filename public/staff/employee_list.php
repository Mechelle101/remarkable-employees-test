<?php 
require_once('../../private/initialize.php'); 
require_login();

?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <title>Remarkable Employee List Page</title>
    <link href="../stylesheets/public-styles.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>

  <body>
    <div id="main-content">
      <header>
        <a href="<?php echo url_for('staff/index.php'); ?>"><img src="../images/ppl-logo.png" alt="circle logo" width="100" height="100"></a>
        <div id="header-content">
          <h1>Remarkable Employees</h1>
          <h4>Where We Come Together As A Team</h4>
        </div>
        <div id="user-info">
          <p>Welcome <?php echo $_SESSION['username']; ?></p>
          <p>You are logged in as - <?php echo $_SESSION['user_level']; ?></p>
        </div>
      </header>

      <main id="page-content">
        <aside id="navigation">
          <nav id="main-nav">
            <ul>
              <l1><a href="index.php">Home</a></l1>
              <l1><a href="announcements.php">Announcements</a></l1>
              <l1><a href="images.php">Images</a></l1>
              <l1><a href="employee_list.php">Employees</a></l1>
              <l1><a href="<?php echo url_for('../public/logout.php'); ?>">Logout <?php echo $_SESSION['username']; ?></a></l1>
            </ul>
          </nav>
        </aside>

        <article id="description">
          <div>
            <div class="action">
             <h1>User: <?php echo $_SESSION['username']; ?></h1> 
            </div>
            <?php
            $employee_set = find_only_employees();
            // $employee_set = find_all_employees();
            ?>
          </div>
          <hr>
          <div>
          <table class="list">
            <tr>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Email</th>
              <th>Employee/Admin</th>
              <th>Department</th>
              <th>View</th>
            </tr>

            <?php while($employee = mysqli_fetch_assoc($employee_set)) { ?>
              <tr>
                <!-- <td><?php echo h($employee['employee_id']); ?></td> -->
                <td><?php echo h($employee['first_name']); ?></td>
                <td><?php echo h($employee['last_name']);?></td>
                <td><?php echo h($employee['email']); ?></td>
                <td><?php echo h($employee['user_level']); ?></td>
                <td><?php echo h($employee['department_initial']); ?></td>
                <td><a class="action" href="<?php echo url_for('/staff/show.php?employee_id=' . h(u($employee['employee_id']))); ?>">View</a></td>
              </tr>
            <?php } ?>
  	      </table>

          <?php
            mysqli_free_result($employee_set);
          ?>

        </article> 
      </main>
        
    <!-- PAGE FOOTER -->
      <footer>      
        <!-- After moving this to a shared footer file add code to close the database -->
        &copy; <?php echo date('Y'); ?> Mechelle &#9774; Presnell &hearts;
      </footer> 
    </div>
  </body>
</html>
<?php //db_disconnect($db); ?>
