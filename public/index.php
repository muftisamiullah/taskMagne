<?php
require 'templates/header.php';
require 'templates/index.view.php';
require 'database/config.php';
// $GLOBALS['msg']= 'Your blog has been added. Thank You!';

if (isset($_POST['submit'])) {
    try  {
    date_default_timezone_set('Asia/Calcutta');
    $date = date('m/d/Y h:i:s a', time());
    
    $connection = new PDO($dsn, $username, $password, $options);
    
    $sql = "INSERT INTO blogs (posted_by,title,body) VALUES(:name, :title, :body)";
    $statement = $connection->prepare($sql);
    $statement->bindParam(":name", $_POST['name'], PDO::PARAM_STR);
    $statement->bindParam(":title", $_POST['title'], PDO::PARAM_STR);
    $statement->bindParam(":body",$_POST['body'], PDO::PARAM_STR);

    $statement->execute();
    // echo $GLOBALS['msg'];
    }
    catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}
require 'templates/footer.php';
?>