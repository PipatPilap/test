<?php include 'header.php'; ?>

    <script type="text/javascript" src="js/app.js"></script>
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i> HOMEPAGE</h3>

          </div>
        </div>
        <div class="row">
        <div class="col-lg-9 col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">


              </div>
              <div class="panel-body">
                <div class="container">
                  <div class="container">

                    <h1>Firebase-InputData</h1>
                    <br/>
                    <div class="form-group">


                    <label for="usr">Name:</label>
                    <input type="email" placeholder="Enter your name" class="form-control" id="uname" name="" value=" ">
                    </div>
                    <div class="form-group">
                    <label for="sub">Subject:</label>
                    <input type="subject" placeholder="Enter your Subject" class="form-control" id="subject" name="" value="">
                    </div>
                    <div class="form-group">
                    <label for="link">link:</label>
                    <input type="link" placeholder="Enter your link" class="form-control" id="link" name="" value="">
                  </div>
                  <button id="submitbtn" type="button" name="save" class="btn btn-primary" onclick="SaveonClick()">Save</button>
                  &nbsp;&nbsp;&nbsp;&nbsp;

              </div>

              </div>
              </div>

            </div>

          </div>
          <div class="col-md-3" >

            <div class="social-box facebook" id="DAT">
              <i class="fa fa-clock-o fa-6x" ></i>
              <span id="date_time"></span>
                <script type="text/javascript" class="date_time">window.onload = date_time('date_time')</script>

            </div>

          </div>
  </section>
</section>
</body>
</html>
