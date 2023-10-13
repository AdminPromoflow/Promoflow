// Define a class called Login
class Login {
  constructor() {
    const url = "../../controller/user-controller.php"; // Replace with your API endpoint URL




    // Initialize event listeners for the login button and password input field
    access.addEventListener("click", function () {
      if (loginClass.validateEmail() && loginClass.validatePassword()) {
        // Create an object with login data
        const data = {
          action: "login",
          email: emailLogin.value,     // Get email value from the first element in the 'vars' array
          password: passwordLogin.value  // Get password value from the second element in the 'vars' array
        };

        loginClass.makeAjaxRequestLogin(url, data);
      }
    });

    document.querySelector('#passwordLogin').addEventListener('keypress', function (e) {
      if (e.key === 'Enter') {
        if (loginClass.validateEmail() && loginClass.validatePassword()) {
          // Create an object with login data
          const data = {
            action: "login",
            email: emailLogin.value,     // Get email value from the first element in the 'vars' array
            password: passwordLogin.value  // Get password value from the second element in the 'vars' array
          };
          
          loginClass.makeAjaxRequestLogin(url, data);
        }
      }
    });

    // Hide the wrong password message and loading spinner initially
    wrongPassword.display = "none";
    spanLoading.display = "none";
  }

  // Email validation function
  validateEmail() {
    // Get the value of the email input and remove leading/trailing whitespace
    const email = emailLogin.value.trim();

    // Regular expression pattern to check for a valid email format
    const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

    if (!emailPattern.test(email)) {
      // If email doesn't match the pattern, show an error message
      emailLogin.style.border = "3px solid #8B0000";
      alert("Please enter a valid email");

      return false; // Validation fails
    }

    // Clear any previous error messages
    emailLogin.style.border = "3px solid transparent";
    return true; // Validation passes
  }

  // Password validation function
  validatePassword() {
    // Get the value of the password input and remove leading/trailing whitespace
    const password = passwordLogin.value.trim();

    if (password.length < 6) {
      // If the password is too short, show an error message
      passwordLogin.style.border = "3px solid #8B0000";
      alert("Password is too short");

      return false; // Validation fails
    }

    // Clear any previous error messages
    passwordLogin.style.border = "3px solid transparent";
    return true; // Validation passes
  }

  // Function to make the AJAX request
  makeAjaxRequestLogin(url, data) {
    // Make an AJAX request using the Fetch API
    fetch(url, {
      method: "POST", // HTTP POST method to send data
      headers: {
        "Content-Type": "application/json" // Indicate that you're sending JSON
      },
      body: JSON.stringify(data) // Convert the JSON object to a JSON string and send it
    })
      .then(response => {
        if (response.ok) {
          return response.json(); // Parse the JSON response
        }
        throw new Error("Network error.");
      })
      .then(data => {
        // Handle the response data
        alert(data); // You can customize this part based on the response
        if (data["COUNT(*)"] == 1) {
          window.open("../Dashboard/", "_self");
        } else {
          // If login fails, show the wrong password message and hide the loading spinner after a delay
          setTimeout(function () {
            // Code to be executed after a delay
          }, 3000); // 3000 milliseconds (3 seconds)
          wrongPassword.display = "block";
          spanLoading.display = "none";
        }
      })
      .catch(error => {
        console.error("Error:", error);
      });
  }
}

// Select DOM elements and initialize the Login class
var access = document.getElementById('access');
var emailLogin = document.getElementById('emailLogin');
var passwordLogin = document.getElementById('passwordLogin');
var wrongPassword = document.getElementById("wrongPassword").style;
var spanLoading = document.getElementById("spanLoading").style;

const loginClass = new Login();
