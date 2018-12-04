<?php
require 'templates/header.php';
require 'index.view.php';
require 'database/config.php';

if (isset($_POST['submit'])) {
    try  {
    date_default_timezone_set('Asia/Calcutta');
    $date = date('m/d/Y h:i:s a', time());
    
    $connection = new PDO($dsn, $username, $password, $options);
    // if($connection->connect_error)
    //     die("connection failed" . $conn->connect_error);

    // $sql = "INSERT INTO blogs (posted_by, title, body, time) VALUES (?,?,?,?)";
    // $statement = $connection->prepare($sql);

    // if(!$statement)
    //     echo "false";

    // $statement->bind_param("sssi", $_POST['name'], $_POST['title'], $_POST['body'], $date);
    // $statement->execute();
    // echo "successfully Added";
    $new_blog = array(
        "name"  => $_POST['name'],
        "title" => $_POST['title'],
        "body"  => $_POST['body'],
        "time"  => $date,
      );
    $sql = "INSERT INTO blogs (posted_by,title,body,time) VALUES (?,?,?,?)";
    $statement = $connection->prepare($sql);
    $statement->bind_param("sss",$_POST['name'],$_POST['title'],$_POST['body']);
    $statement=$connection->prepare($sql);
    $statement->execute($new_blog);
    echo "Your blog has been added. Thank You!";
    }
    catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}
require 'templates/footer.php';
?>