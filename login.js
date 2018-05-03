
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyBX0a0H-QJjTQvoqOx2-HY9VFZBttF9FTk",
    authDomain: "my-project-48849-mc.firebaseapp.com",
    databaseURL: "https://my-project-48849-mc.firebaseio.com",
    projectId: "my-project-48849-mc",
    storageBucket: "my-project-48849-mc.appspot.com",
    messagingSenderId: "612943497852"
  };
  firebase.initializeApp(config);
  var provider = new firebase.auth.GoogleAuthProvider();

  function logingoogle() {
    firebase.auth().signInWithPopup(provider).then(function(result) {

      var token = result.credential.accessToken;

      var user = result.user;
      var id= user.id;
      var name =user.name;
      var email =user.email;
      document.location.href="index.html";
    }).catch(function(error) {

      var errorCode = error.code;
      var errorMessage = error.message;

      var email = error.email;
      var credential = error.credential;
      // ...
      document.location.href="login.html";
    });
  }

  
