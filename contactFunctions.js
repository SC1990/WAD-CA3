function hideOrShowSearchBox() {
  if (document.getElementById("searchBtn").innerHTML == "Search Contacts") {
    document.getElementById("searchBtn").innerHTML = "CLOSE";
    searchBox = document.getElementById("searchBox");
    searchBox.style.display = "block";
  } else if (document.getElementById("searchBtn").innerHTML == "CLOSE") {
    document.getElementById("searchBtn").innerHTML = "Search Contacts"
    searchBox = document.getElementById("searchBox");
    searchBox.style.display = "none";
  }
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
  
  if (document.getElementById("addCbutton").innerHTML == "Add Contact") {
    document.getElementById("addCbutton").innerHTML = "CLOSE";
    div = document.getElementById("addContact");
    div.style.display = "block";
  } 
  else if (document.getElementById("addCbutton").innerHTML == "CLOSE") {
    document.getElementById("addCbutton").innerHTML = "Add Contact"
    div = document.getElementById("addContact");
    div.style.display = "none";
  }

}


function editContact() {

  fetchContacts("editContact", "editContact");
    
  if (document.getElementById("editCbutton").innerHTML == "Edit Contact") {
    document.getElementById("editCbutton").innerHTML = "CLOSE";
    div = document.getElementById("editContact");
    div.style.display = "block";
  } 
  else if (document.getElementById("editCbutton").innerHTML == "CLOSE") {
    document.getElementById("editCbutton").innerHTML = "Edit Contact"
    div = document.getElementById("editContact");
    div.style.display = "none";
  }

}


function getAllContacts() {

  fetchContacts("allContacts", "viewContacts");
  
  if (document.getElementById("viewCbutton").innerHTML == "View All Contacts") {
    document.getElementById("viewCbutton").innerHTML = "CLOSE";
    div = document.getElementById("allContacts");
    div.style.display = "block";
  } 
  else if (document.getElementById("viewCbutton").innerHTML == "CLOSE") {
    document.getElementById("viewCbutton").innerHTML = "View All Contacts"
    div = document.getElementById("allContacts");
    div.style.display = "none";
  }
}


function deleteContact() {

  fetchContacts("deleteContactDiv", "deleteContact");
  
  if (document.getElementById("deleteCbutton").innerHTML == "Delete Contact") {
    document.getElementById("deleteCbutton").innerHTML = "CLOSE";
    div = document.getElementById("deleteContactDiv");
    div.style.display = "block";
  } 
  else if (document.getElementById("deleteCbutton").innerHTML == "CLOSE") {
    document.getElementById("deleteCbutton").innerHTML = "Delete Contact"
    div = document.getElementById("deleteContactDiv");
    div.style.display = "none";
  }

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