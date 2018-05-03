<?php include 'header.php'; ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Firebase Test</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/app.js"></script>
  </head>
  <body>

<div class="container">
  <div class="">
    <h1>Firebase-Realtime</h1>
    <br/>
    <div class="form-group">
    <label for="usr">Name:</label>
    <input type="email" placeholder="Enter your name" class="form-control" id="names" name="" value="">
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




<script src="https://www.gstatic.com/firebasejs/4.9.1/firebase.js"></script>
<script>
  var config = {
    apiKey: "AIzaSyBX0a0H-QJjTQvoqOx2-HY9VFZBttF9FTk",
    authDomain: "my-project-48849-mc.firebaseapp.com",
    databaseURL: "https://my-project-48849-mc.firebaseio.com",
    projectId: "my-project-48849-mc",
    storageBucket: "my-project-48849-mc.appspot.com",
    messagingSenderId: "612943497852"
  };
  firebase.initializeApp(config);
</script>
  </body>
</html>
