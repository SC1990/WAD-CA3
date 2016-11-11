/* Function to print all contacts */
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

      //send request to index.php file on server 
      getContacts.open("GET", "viewContacts.php");
      getContacts.send();

      //temporary solution to close contacts div
      document.getElementById("viewCbutton").onclick = function closeContacts() {
        location.reload();
      };
}