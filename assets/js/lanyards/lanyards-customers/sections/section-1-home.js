class LanyardCustomers {
  constructor() {
    menuClass.changePathImageOpenLogin(2);
    const url = "../../../controller/lanyards/lanyard-curtomers-controller.php";
    const data = {
      action: "getAllLanyardCustomers"
    };
    this.makeAjaxRequestGetAllLanyardCustomers(url, data);
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

        // The code inside this function will run when the request is complete
        var objetoJSON = JSON.parse(data);

        this.creteCustomers(objetoJSON);
        const circleImgCustomer = document.querySelectorAll('circleImgCustomer');

        this.getRandomColor(circleImgCustomer);

      })
      .catch(error => {
        console.error("Error:", error);
      });
  }

  creteCustomers(data){

    listCustomers.innerHTML = "";

    for (var i = 0; i < data.length; i++) {

      listCustomers.innerHTML = listCustomers.innerHTML +

      '<div class="customerBox">'+

        '<div class="imgCustomer">'+
          '<div class="circleImgCustomer">'+

          '</div>'+
        '</div>'+

        '<div class="nameCustomer">'+
          '<p>'+data[i]["nameUser"]+'</p>'+
        '</div>'+

        '<div class="emailCustomer">'+
          '<p>'+data[i]["emailUser"]+'</p>'+
        '</div>'+

      '</div>';


    }

  }
  getRandomColor(circleImgCustomer) {
    alert(circleImgCustomer.length);

    for (var i = 0; i < circleImgCustomer.length; i++) {
      alert("circleImgCustomer[i].style.color");

    }
  const letters = '0123456789ABCDEF';
  let color = '#';
  for (let i = 0; i < 6; i++) {
    color += letters[Math.floor(Math.random() * 16)];
  }
  return color;
}

}
var listCustomers = document.getElementById("listCustomers");

const lanyardCustomersClass = new LanyardCustomers();
