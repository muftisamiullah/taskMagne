<?php
require 'templates/header.php';
?>

<link rel="stylesheet" href="style.css" type="text/css">
<span class="container">
    <img class="responsive" src="imgs/img2.jpg">
<div class="centered"><strong>Log In</strong></div>
</span>

<div>
    <br>
<div class="row">
<div class="col-sm-3">
            
            </div>
        <div class="col-sm-6">
        <div class="forming">
                <h5><strong>Log In to view the Blog</strong></h5>
                            <form>
                            <!-- <div class="form-row"> -->
                               
                                <div class="form-group">
                                <!-- <label for="inputEmail4">Email</label> -->
                                <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                                </div>
                            
                            
                            <div class="form-group">
                                <!-- <label for="inputAddress">Company</label> -->
                                <input type="text" class="form-control" id="inputAddress" placeholder="Company">
                            </div>
                            </div> 
                            <!-- </div> -->
                            
                            <button type="submit" class="btn btn-primary float-right">Log In</button>
                            <br>
                            </form>
                            <br>
        </div>
        <div class="col-sm-3">
            
</div>
        </div>
</div>

<?php
require 'templates/footer.php';
?>
    








