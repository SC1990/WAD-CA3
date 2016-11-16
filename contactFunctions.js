function addContact() {


  //create new XMLHttpRequest object
  //with this - can update parts of web page without reloading whole page
  //requests data from server
  var getContacts = new XMLHttpRequest();

  //stores function to be called when readyState status changes
  getContacts.onreadystatechange = function() {
    //readyState holds status of XMLHttpRequest object
    //4 = request finished and response is ready
    //status 200 = 'ok', status 404 = 'not found'
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("addContact").innerHTML = this.responseText; // returns data as string
      document.getElementById("addCbutton").innerHTML = "CLOSE";
    }

  };

  //send request to addNewContact.php file on server 
  getContacts.open("GET", "addNewContact.php");
  getContacts.send();



  //temporary solution to close contacts div
  document.getElementById("addCbutton").onclick = function closeContacts() {
    location.reload();
  };

}


function showContactSuggestion(userInput) {
  //if input field is empty
  if (userInput.length === 0) {
    document.getElementById("suggestion").innerHTML = "";
    return;
  } 
  else {
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

function showSearchBox() {
    searchBox = document.getElementById("searchBox");
    searchBox.style.display = "block";
}





function editContact() {

  //create new XMLHttpRequest object
  //with this - can update parts of web page without reloading whole page
  //requests data from server
  var getContacts = new XMLHttpRequest();

  //stores function to be called when readyState status changes
  getContacts.onreadystatechange = function() {
    //readyState holds status of XMLHttpRequest object
    //4 = request finished and response is ready
    //status 200 = 'ok', status 404 = 'not found'
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("editContact").innerHTML = this.responseText; // returns data as string
      document.getElementById("editCbutton").innerHTML = "CLOSE";
    }

  };

  //send request to editContact.php file on server 
  getContacts.open("GET", "editContact.php");
  getContacts.send();



  //temporary solution to close contacts div
  document.getElementById("editCbutton").onclick = function closeContacts() {
    location.reload();
  };
}




function getAllContacts() {


  //create new XMLHttpRequest object
  //with this - can update parts of web page without reloading whole page
  //requests data from server
  var getContacts = new XMLHttpRequest();

  //stores function to be called when readyState status changes
  getContacts.onreadystatechange = function() {
    //readyState holds status of XMLHttpRequest object
    //4 = request finished and response is ready
    //status 200 = 'ok', status 404 = 'not found'
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("allContacts").innerHTML = this.responseText; // returns data as string
      document.getElementById("viewCbutton").innerHTML = "CLOSE";
    }

  };

  //send request to viewContacts.php file on server 
  getContacts.open("GET", "viewContacts.php");
  getContacts.send();

  //temporary solution to close contacts div
  document.getElementById("viewCbutton").onclick = function closeContacts() {
    location.reload();
  };
}


function deleteContact() {

  //fetchContacts(deleteContactDiv, deleteCbutton, deleteContact)




  var getContacts = new XMLHttpRequest();


  getContacts.onreadystatechange = function() {

    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("deleteContactDiv").innerHTML = this.responseText; // returns data as string
      document.getElementById("deleteCbutton").innerHTML = "CLOSE";
    }

  };


  getContacts.open("GET", "deleteContact.php");
  getContacts.send();

  //temporary solution to close contacts div
  document.getElementById("deleteCbutton").onclick = function closeContacts() {
    location.reload();
  };



}





function fetchContacts(divID, actionBtn, phpFile) {
  var getContacts = new XMLHttpRequest();

  //stores function to be called when readyState status changes
  getContacts.onreadystatechange = function() {
    //readyState holds status of XMLHttpRequest object
    //4 = request finished and response is ready
    //status 200 = 'ok', status 404 = 'not found'
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("divID").innerHTML = this.responseText; // returns data as string
      document.getElementById("actionBtn").innerHTML = "CLOSE";
    }

  };

  var file = phpFile + ".php";

  getContacts.open("GET", file);
  getContacts.send();

  //temporary solution to close contacts div
  document.getElementById("actionBtn").onclick = function closeContacts() {
    location.reload();
  };

/*develop functions to store faq data in JSON*/

}