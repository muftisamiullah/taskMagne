<?php
require 'templates/header.php';?>
<link rel="stylesheet" href="style.css" type="text/css">
<span class="container">
    <img class="responsive" src="imgs/img4.jpg">
<div class="centered"><strong>Contact</strong></div>
</span>

<div>
    <br>
<div class="row">
        <div class="col-sm-6">
        <div class="forming">
                <h5><strong>Thank you for visiting Maqne Q Advertising.<br>
                Please complete the form below and we will be in touch shortly.</strong></h5>
                            <form>
                            <div class="form-row">
                            <div class="form-group col-md-6">
                                <!-- <label for="inputNamel4">Name</label> -->
                                <input type="text" class="form-control" id="inputEmail4" placeholder="Name">
                                </div>
                                <div class="form-group col-md-6">
                                <!-- <label for="inputEmail4">Email</label> -->
                                <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                                </div>
                            
                            <div class="form-group col-md-6">
                                <!-- <label for="inputAddress">Phone</label> -->
                                <input type="text" class="form-control" id="inputAddress" placeholder="Phone no">
                            </div>
                            <div class="form-group col-md-6">
                                <!-- <label for="inputAddress">Company</label> -->
                                <input type="text" class="form-control" id="inputAddress" placeholder="Company">
                            </div>
                            </div> 
                            </div>
                            <div class="form-group">
                                <!-- <label for="exampleFormControlTextarea1">Example textarea</label> -->
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Message"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary float-right">Send</button>
                            <br>
                            </form>
                            <br>
        </div>
        <div class="col-sm-6">
        <?php 
        include "map/myMap.html";
        ?>

        </div>
        </div>
        </div>
<?php
require 'templates/footer.php';?>
