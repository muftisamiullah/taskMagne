<?php
require 'templates/header.php';
require 'templates/blogs.view.php';
require 'database/config.php';

  try  {
    $connection = new PDO($dsn, $username, $password);
    $sql = "SELECT * FROM blogs ORDER BY id DESC";
    $statement = $connection->prepare($sql);
    $statement->execute();
    $blogs = $statement->fetchAll();
  } 
  catch(PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
  }
?>
<br><br>
<?php foreach ($blogs as $row) : ?>
<div class="card"> 
        <div class="card text-center" style="margin-left:10px;margin-right:10px;">
          <div class="card-header">
            <strong><?php echo($row["title"]); ?></strong>
          </div>
          <div class="card-body">
           <p class="card-text"><?php echo($row["body"]); ?></p>
          </div>
          <div class="card-footer text-muted">
            <strong><?php echo($row["posted_by"]); ?></strong> posted at <?php echo($row["time"]); ?>
          </div>
        </div>
        <div><hr>
<?php endforeach; ?>

<?php
require 'templates/footer.php';?>