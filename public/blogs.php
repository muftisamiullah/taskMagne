<?php
require 'templates/header.php';
require 'templates/blogs.view.php';
require 'database/config.php';

  try  {
    $connection = new PDO($dsn, $username, $password);
    $sql = "SELECT * FROM blogs";
    $statement = $connection->prepare($sql);
    $statement->execute();
    $blogs = $statement->fetchAll();
  } 
  catch(PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
  }
?>

<?php foreach ($blogs as $row) : ?>
        <div class="card text-center">
          <div class="card-header">
            <strong><?php echo($row["title"]); ?></strong>
          </div>
          <div class="card-body">
           <p class="card-text"><?php echo($row["body"]); ?></p>
          </div>
          <div class="card-footer text-muted">
            <?php echo($row["posted_by"]); ?> Posted on <?php echo($row["time"]); ?>
          </div>
        </div><hr>
<?php endforeach; ?>

<?php
require 'templates/footer.php';?>