<?php 
require_once('../../private/initialize.php'); 
require_login();

?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <title>Remarkable Employee Page</title>
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
              <l1><a href="<?php echo url_for( '/staff/index.php'); ?>">Home</a></l1>
              <l1><a href="announcements.php">Announcements</a></l1>
              <l1><a href="images.php">Images</a></l1>
              <l1><a href="employee_list.php">Employees</a></l1>
              <l1><a href="<?php echo url_for('../public/logout.php'); ?>">Logout <?php echo $_SESSION['username']; ?></a></l1>
            </ul>
          </nav>
        </aside> 

        <article id="description">
        <div>
          <?php echo display_session_message(); ?>
            <h1>This is Your Employee Home</h1>
          </div>
          <hr>
          <div>
            <p>Enjoy your time while you're here.</p>
          </div>
        </article> 
      </main>
      <footer>
        &copy; <?php echo date('Y'); ?> Mechelle &#9774; Presnell &hearts;
      </footer>
    </div>
  </body>
</html>
<?php //db_disconnect($db); ?>
