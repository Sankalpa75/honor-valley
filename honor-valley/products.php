<div class="page">
    <div class="container">
        <div class="row">
            <div class="inner-cont">
                <div class="container" style="text-align:center; margin-bottom: 40px;">
                    <h4 class="heading">Our Products</h4>
                </div>
                <div class="col-sm-3">
                    <div class="box">
                        <img src="images/s1.png" class="img-responsive center-block" alt=""> <br>
                        <h3>Banana <span class="price">$12</span></h3>
                        <button class="button2" type="button" data-toggle="modal" data-target="#myModal"> Order Now</button>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="box">
                        <img src="images/s2.png" class="img-responsive center-block" alt=""> <br>
                        <h3>Apple <span class="price">$12</span></h3>
                        <button class="button2" type="button" data-toggle="modal" data-target="#myModal"> Order Now</button>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="box">
                        <img src="images/s3.png" class="img-responsive center-block" alt=""> <br>
                        <h3>Kiwi <span class="price">$12</span></h3>
                        <button class="button2" type="button" data-toggle="modal" data-target="#myModal"> Order Now</button>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="box">
                        <img src="images/s4.png" class="img-responsive center-block" alt=""> <br>
                        <h3>Pomegranate <span class="price">$12</span></h3>
                        <button class="button2" type="button" data-toggle="modal" data-target="#myModal"> Order Now</button>
                    </div>
                </div>

                <div class="clearfix"></div> <br><br>

                <div class="col-sm-3">
                    <div class="box">
                        <img src="images/s5.png" class="img-responsive center-block" alt=""> <br>
                        <h3>Coconut <span class="price">$12</span></h3>
                        <button class="button2" type="button" data-toggle="modal" data-target="#myModal"> Order Now</button>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="box">
                        <img src="images/s6.png" class="img-responsive center-block" alt=""> <br>
                        <h3>Grapes <span class="price">$12</span></h3>
                        <button class="button2" type="button" data-toggle="modal" data-target="#myModal"> Order Now</button>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="box">
                        <img src="images/s7.png" class="img-responsive center-block" alt=""> <br>
                        <h3>Pineapple <span class="price">$12</span></h3>
                        <button class="button2" type="button" data-toggle="modal" data-target="#myModal"> Order Now</button>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="box">
                        <img src="images/s8.png" class="img-responsive center-block" alt=""> <br>
                        <h3>Orange <span class="price">$12</span></h3>
                        <button class="button2" type="button" data-toggle="modal" data-target="#myModal"> Order Now</button>
                    </div>
                </div>

                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<!--welcome-->

<!-- Modal Pop up -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Send Us Your Details.</h4>
            </div>
            <div class="modal-body">
                <div id="ask">
                    <form method="post" id="reg-form" action="./quote_send" autocomplete="off">
                        <div class="form-group col-md-12">
                            <input type="text" class="input-text " name="txt_fname" id="lname" placeholder="Name" required />
                        </div>

                        <div class="form-group col-md-12">
                            <input type="text" class="input-text" name="txt_email" id="lname" placeholder="Email" required />
                        </div>

                        <div class="form-group col-md-6">
                            <input type="text" class="input-text" name="txt_phone" id="lname" placeholder="Phone" required />
                        </div>

                        <div class="form-group col-md-6">
                            <input type="text" class="input-text" name="txt_address" id="lname" placeholder="Address" required />
                        </div>

                        <div class="form-group col-md-12">
                            <textarea placeholder="Message" rows="5" name="txt_message" class="input-textarea"></textarea>
                        </div>                      

                        <div class="col-md-12" >
                            <a href="./"><button class="button1" style="margin: 0 auto; display: block;">Electronic Fund Transfer</button></a>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </div>
</div>