// Define a class called Login
class Login {
  constructor() {
    // Initialize event listeners for login button and password input field
    access.addEventListener("click", function () {
      loginClass.login();
    });

    document.querySelector('#passwordData').addEventListener('keypress', function (e) {
      if (e.key === 'Enter') {
        loginClass.login();
      }
    });

    // Hide the wrong password message and loading spinner initially
    wrongPassword.display = "none";
    spanLoading.display = "none";
  }

  // Method to handle the login process
  login() {
    // Display the loading spinner
    spanLoading.display = "block";

    // Make an AJAX request to the server
    $.ajax("../App/Controller/Controller2.php", {
      type: 'post',
      async: false,
      data: {
        module: "loginUser",
        email: data[0].value,
        password: data[1].value
      },
      success: function (data) {
        // Parse the response data as JSON
        var data = jQuery.parseJSON(data);

        // Check if login is successful
        if (data["COUNT(*)"] == 1) {
          window.open("../Dashboard/", "_self");
        } else {
          // If login fails, show wrong password message, and hide the loading spinner after a delay
          setTimeout(function () {
            // Your code to be executed after a delay
          }, 3000); // 3000 milliseconds (3 seconds)
          wrongPassword.display = "block";
          spanLoading.display = "none";
        }
      }
    });
  }
}

// Select DOM elements and initialize the Login class
var access = document.getElementById('access');
var data = document.getElementsByClassName('data');
var wrongPassword = document.getElementById("wrongPassword").style;
var spanLoading = document.getElementById("spanLoading").style;

const loginClass = new Login();
