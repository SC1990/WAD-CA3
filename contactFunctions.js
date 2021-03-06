var harrypotter = 2;
function clearSearch() {
  document.getElementById("suggestion").innerHTML = "";
  var form = document.getElementById("searchBar");
  form.reset();
}

function searchContacts() {

  searchBox = document.getElementById("searchBox");
  searchBox.style.display = "block";
  //closeOpts(view);
  closeView(), closeAdd(), closeEdit(), closeDel(), closeComments(), closevv();

}



function showContactSuggestion(userInput) {
  //if input field is empty
  if (userInput.length === 0) {
    document.getElementById("suggestion").innerHTML = "";
    return;
  } else {
    var getContacts = new XMLHttpRequest();

    getContacts.onreadystatechange = function() {

      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("suggestion").innerHTML = this.responseText; // returns data as string
      }

    };

    getContacts.open("GET", "contactSearch.php?query=" + userInput, true);
    getContacts.send();
  }

}



function addContact() {

  fetchContacts("addContact", "addNewContact");


  div = document.getElementById("addContact");
  div.style.display = "block";
  closeSearch(), closeView(), closeEdit(), closeDel(), clearSearch(), closeComments(), closevv();
 
}


function editContact() {

  fetchContacts("editContact", "editContact");


  div = document.getElementById("editContact");
  div.style.display = "block";

  closeSearch(), closeView(), closeAdd(), closeDel(), clearSearch(), closeComments(), closevv();

}


function getAllContacts() {

  fetchContacts("allContacts", "viewContacts");


  div = document.getElementById("allContacts");
  div.style.display = "block";
  closeSearch(), closeAdd(), closeEdit(), closeDel(), clearSearch(), closeComments(), closevv();

}


function deleteContact() {

  fetchContacts("deleteContactDiv", "deleteContact");


  div = document.getElementById("deleteContactDiv");
  div.style.display = "block";
  closeSearch(), closeView(), closeAdd(), closeEdit(), closeComments(), clearSearch(), closevv();

  //btn = document.getElementById("deleteCbutton");
  // btn.onclick(alert("sjkbsb"));
}

function commentContact(){
  fetchContacts("commentsDiv", "commentServer");


  div = document.getElementById("commentsDiv");
  div.style.display = "block";
  closeSearch(), closeView(), closeAdd(), closeEdit(), clearSearch(), closeDel(), closevv();
}

function viewComFn(){
  fetchContacts("viewCommentsDiv", "viewcom");


  div = document.getElementById("viewCommentsDiv");
  div.style.display = "block";
  closeSearch(), closeView(), closeAdd(), closeEdit(), clearSearch(), closeDel(), closeComments();
}




function fetchContacts(divID, phpFile) {
  var getContacts = new XMLHttpRequest();

  //stores function to be called when readyState status changes
  getContacts.onreadystatechange = function() {

    if (this.readyState == 4 && this.status == 200) {
      document.getElementById(divID).innerHTML = this.responseText; // returns data as string

    }

  };

  var file = phpFile + ".php";

  getContacts.open("GET", file);
  getContacts.send();



}




function closeSearch() {
  ob = document.getElementById("searchBox");
  ob.style.display = "none";
}

function closeView() {
  ob = document.getElementById("allContacts");
  ob.style.display = "none";
}

function closeAdd() {
  ob = document.getElementById("addContact");
  ob.style.display = "none";
}

function closeEdit() {
  ob = document.getElementById("editContact");
  ob.style.display = "none";
}

function closeDel() {
  ob = document.getElementById("deleteContactDiv");
  ob.style.display = "none";
}

/*
function signOrLog(){
  var sign = document.getElementById("signdiv");
  var log = document.getElementById("logdiv");
  var loggedIn = "<?php echo $loggedIn ?>"; 
  if(loggedIn==true){
    sign.style.display = "none";
    log.style.display = "none";
  }
  else{
    sign.style.display = "block";
    log.style.display = "block";
  }
}
*/


function closeComments() {
  ob = document.getElementById("commentsDiv");
  ob.style.display = "none";
}

function closevv() {
  ob = document.getElementById("viewCommentsDiv");
  ob.style.display = "none";
}