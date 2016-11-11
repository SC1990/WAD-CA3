/* Function to print all contacts */
function addContact() {


      //create new XMLHttpRequest object
      //with this - can update parts of web page without reloading whole page
      //requests data from server
      var addNewContact = new XMLHttpRequest();

      //stores function to be called when readyState status changes
      addNewContact.onreadystatechange = function() {
        //readyState holds status of XMLHttpRequest object
        //4 = request finished and response is ready
        //status 200 = 'ok', status 404 = 'not found'
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("addContacts").innerHTML = this.responseText; // returns data as string
          document.getElementById("addCbutton").innerHTML = "CLOSE";
        }

      };

      //send request to index.php file on server 
      addNewContact.open("GET", "addNewContact.php");
      addNewContact.send();
  
      
      
      //temporary solution to close contacts div
      document.getElementById("addCbutton").onclick = function closeContacts() {
        location.reload();
      };
      
}