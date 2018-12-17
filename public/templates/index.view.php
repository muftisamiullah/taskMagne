<?php $GLOBALS['msg']= 'Your blog has been added. Thank You!';
?>
<link rel="stylesheet" href="style.css" type="text/css">
<span class="ph-title">
    <img class="responsive" src="imgs/img2.jpg">
<div class="centered"><strong>Write a new Blog</strong></div>
</span>
<div><br>
    <div class="row">
        <div class="col-lg-3 col-sm-3 col-xs-3">
        </div>
        <div class="col-lg-6 col-sm-6 col-xs-6">
            <!-- <div class="container"> -->
                <h5><strong>Write a new Blog</strong></h5>
                    <form method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" id="inputEmail4" placeholder="Name" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="title" id="inputAddress" placeholder="Title" required>
                        </div>
             
                        <div class="form-group">
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="body" rows="10" placeholder="Write your blog here" required></textarea>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary float-right">Submit</button><br>
                        <?php 
                            if (isset($_POST['submit'])) {
                                    echo $GLOBALS['msg'];
                                }
                            ?>
                    </form>
            <!-- </div>        -->
        </div>
        <div class="col-lg-3 col-sm-3 col-xs-3">       
        </div>
    </div>
</div>