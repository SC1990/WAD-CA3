function closeBtn(button) {
  document.getElementById(button).innerHTML = "CLOSE";
  document.getElementById(button).onclick = function closeContacts() {
    location.reload();
  };
}

function showSearchBox() {
  searchBox = document.getElementById("searchBox");
  searchBox.style.display = "block";
  closeBtn("searchBtn");
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



function addContact() {

  fetchContacts("addContact", "addNewContact");
  closeBtn("addCbutton");

}


function editContact() {
  
  fetchContacts("editContact", "editContact");
  closeBtn("editCbutton");

}


function getAllContacts() {

  fetchContacts("allContacts", "viewContacts");
  closeBtn("viewCbutton");
}


function deleteContact() {
  
  fetchContacts("deleteContactDiv", "deleteContact");
  closeBtn("deleteCbutton");

}





function fetchContacts(divID, phpFile) {
  var getContacts = new XMLHttpRequest();

  //stores function to be called when readyState status changes
  getContacts.onreadystatechange = function() {
  
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById(divID).innerHTML = this.responseText; // returns data as string
      //document.getElementById(actionBtn).innerHTML = "CLOSE";
    }

  };

  var file = phpFile + ".php";

  getContacts.open("GET", file);
  getContacts.send();



}

/*
function createContactsTable(xml) {
  var xmlDoc = xml.responseXML;
  var table = "<tr><th>Name</th><th>Email</th></tr>";
  var x = xmlDoc.getElementsByTagName("contact");
  for (var i = 0; i < x.length; i++) {
    table += "<tr><td>" +
      x[i].getElementsByTagName("name")[0].childNodes[0].nodeValue +
      "</td><td>" + "<br>" +
      x[i].getElementsByTagName("email")[0].childNodes[0].nodeValue +
      "</td></tr>";
  }
  document.getElementById("allContacts").innerHTML = table;
}


function getAllContacts() {

  var getContacts = new XMLHttpRequest();

  //stores function to be called when readyState status changes
  getContacts.onreadystatechange = function() {

    if (this.readyState == 4 && this.status == 200) {
      createContactsTable(this);
    }

  };



  getContacts.open("GET", "contacts.xml");
  getContacts.send();
  closeBtn("viewCbutton");
}
*/