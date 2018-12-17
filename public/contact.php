<?php
require 'templates/header.php';?>
<link rel="stylesheet" href="style.css" type="text/css">
<span class="ph-title">
    <img class="responsive" src="imgs/img4.jpg">
    <div class="centered"><strong>Contact</strong></div>
</span>

<div><br>
    <div class="row">
        <div class="col-sm-6">
            <div class="container">
                     <form>
                          <h5><strong>Thank you for visiting Maqne Q Advertising.<br>
                             Please complete the form below and we will be in touch shortly.</strong></h5>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="inputEmail4" placeholder="Name" required>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" id="inputEmail4" placeholder="Email" required>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="inputAddress" placeholder="Phone no" required>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="inputAddress" placeholder="Company" required>
                            </div>
                        </div> 
                        <div class="form-group">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Message" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary float-right">Send</button>
                    </form>
            </div>
                        
        </div>
        <div class="col-sm-6">
            <div class="container">
                <?php include "map/myMap.html";?>
            </div>
        </div>
    </div>
</div>


<div style="background:#D3D3D3;"><br><br>
    <h3 style="padding-left:6%;">Q Advertising Head Office</h3>
    <p style="padding-left:6%;"><br>
     (07) 5455 0250<br><br>

    info@qadvertising.com.au<br>
<br>
    59 Duporth Ave<br>
    Maroochydore, QLD 4558</p>
    <br><br><br><br>
</div>
<?php
require 'templates/footer.php';?>