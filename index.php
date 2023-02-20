<?php
require_once('database.php');

// Get Missions
$queryMissions = 'SELECT * FROM missions';
$statement = $db->prepare($queryMissions);
$statement->execute();
$missions = $statement->fetchAll();
$statement->closeCursor();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <title>Starter Template · Bootstrap v5.0</title>
    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="mystyle.css" rel="stylesheet">
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Eighth navbar example">
      <div class="container">
        <a class="navbar-brand" href="index.html">Site Title</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
  
        <div class="collapse navbar-collapse" id="navbarsExample07">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          </ul>
          <span class="d-flex">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="contact-form.html">Contact Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="page-2.html">Page 2</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="page-3.html">Page 3</a>
              </li>
            </ul>
          </span>
        </div>
      </div>
    </nav>

<main class="container">
  <div class="starter-template text-center">
    <h1>Matt's NASA Database</h1>
    <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
    
    <h1>Missions List</h1>
    <section>
        <!-- display a table of NASA Missions -->
        <table>
            <tr>
                <th>Mission Program</th>
                <th>Mission Name</th>
                <th>Mission Type</th>
                <th>Delete</th>
            </tr>

            <?php foreach ($missions as $mission) : ?>
            <tr>
                <td><?php echo $mission['program_name']; ?></td>
                <td><?php echo $mission['mission_name']; ?></td>
                <td class="right"><?php echo $mission['mission_type']; ?></td>
                <td><form action="delete_mission.php" method="post">
                    <input type="hidden" name="mission_id"
                           value="<?php echo $mission['mission_id']; ?>">
                    <input type="submit" value="Delete">
                </form></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </section>
  </div>

</main><!-- /.container -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <footer>
    <p>&copy; <?php echo date("Y"); ?> Product Manager, Inc.</p>
</footer>
  </body>
</html>
