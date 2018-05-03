function SaveonClick() {

var name = document.getElementById('uname');
var subject = document.getElementById('subject');
var link = document.getElementById('link');


insertData(name.value,subject.value,link.value)

/*alert(name.value);
alert(subject.value);
alert(link.value);*/
}
window.onload=function() {
 var firebaseRef=firebase.database().ref("Web/USER");
 firebaseRef.once('value').then(function (datasSnapshot) {
 console.log(datasSnapshot.val());
 });
}

function insertData(name,subject,link) {
  var firebaseRef=firebase.database().ref("Web/USER");
    firebaseRef.push({
      uname :name,
      subject:subject,
      link:link

    });
  alert("insert Success");
    console.log("insert Success");
}

    var txt_title,txt_content,txt_img ='';
    var config = {
      apiKey: "AIzaSyBX0a0H-QJjTQvoqOx2-HY9VFZBttF9FTk",
      authDomain: "my-project-48849-mc.firebaseapp.com",
      databaseURL: "https://my-project-48849-mc.firebaseio.com",
      projectId: "my-project-48849-mc",
      storageBucket: "my-project-48849-mc.appspot.com",
      messagingSenderId: "612943497852"
    };
    firebase.initializeApp(config);
    var database = firebase.database();
    database.ref("Web/").once('child_added', function(snapshot){
          if(snapshot.exists()){
              var content = '';
              snapshot.forEach(function(data){
                  var val = data.val();
                  console.log("row",data.val());
                  console.log("title",data.getKey());

                  content +='<tr>';
                  content += '<td>' + data.getKey() + '</td>';
                  content += '<td>' + val.uname  + '</td>';
                  content += '<td>' + val.subject  + '</td>';
                  content += '<td><a href="'+val.link+'" target="_blank"> Click for Preview</a></td>';
                  content += '</tr>';

              });
              var theDiv = document.getElementById("ex-table");
              theDiv.innerHTML += content;
              //$('#ex-table').append(content);
          }
    });
