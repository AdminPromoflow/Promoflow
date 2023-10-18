class LanyardCustomers {
  constructor() {
    menuClass.changePathImageOpenLogin(2);
    const url = "../../../controller/lanyards/lanyard-curtomers-controller.php";
    const data = {
      action: "getAllLanyardCustomers"
    };
    lanyardCustomersClass.makeAjaxRequestGetAllLanyardCustomers(url, data);
  }
  // Function to make the AJAX request
  makeAjaxRequestGetAllLanyardCustomers(url, data) {
    // Make the request using the Fetch API
    fetch(url, {
      method: "POST", // HTTP POST method to send data
      headers: {
        "Content-Type": "application/json" // Indicate that you're sending JSON
      },
      body: JSON.stringify(data) // Convert the JSON object to a JSON string and send it
    })
      .then(response => {
        if (response.ok) {
          return response.text(); // or response.json() if you expect a JSON response
        }
        throw new Error("Network error.");
      })
      .then(data => {
        alert(data);
        // The code inside this function will run when the request is complete
        var objetoJSON = JSON.parse(data);

      })
      .catch(error => {
        console.error("Error:", error);
      });
  }
}

const lanyardCustomersClass = new LanyardCustomers();
