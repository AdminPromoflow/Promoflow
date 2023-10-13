// Define a class called Users
class Users {
  constructor() {
    const url = "../../controller/user-controller.php";

    // Initialize event listeners for the login button and password input field
    access.addEventListener("click", function () {
      if (usersClass.validateEmail() && usersClass.validatePassword()) {
        const data = {
          action: "login",
          email: emailLogin.value,
          password: passwordLogin.value
        };
        usersClass.makeAjaxRequestLogin(url, data);
      }
    });

    document.querySelector('#passwordLogin').addEventListener('keypress', function (e) {
      if (e.key === 'Enter') {
        if (usersClass.validateEmail() && usersClass.validatePassword()) {
          const data = {
            action: "login",
            email: emailLogin.value,
            password: passwordLogin.value
          };
          usersClass.makeAjaxRequestLogin(url, data);
        }
      }
    });

    // Hide the wrong password message and loading spinner initially
    wrongPassword.display = "none";
    spanLoading.display = "none";
  }

  // Email validation function
  validateEmail() {
    const email = emailLogin.value.trim();
    const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

    if (!emailPattern.test(email)) {
      emailLogin.style.border = "3px solid #8B0000";
      alert("Please enter a valid email");
      return false; // Validation fails
    }

    emailLogin.style.border = "3px solid transparent";
    return true; // Validation passes
  }

  // Password validation function
  validatePassword() {
    const password = passwordLogin.value.trim();

    if (password.length < 6) {
      passwordLogin.style.border = "3px solid #8B0000";
      alert("Password is too short");
      return false; // Validation fails
    }

    passwordLogin.style.border = "3px solid transparent";
    return true; // Validation passes
  }

  // Function to make the AJAX request
  makeAjaxRequestLogin(url, data) {
    fetch(url, {
      method: "POST",
      headers: {
        "Content-Type": "application/json"
      },
      body: JSON.stringify(data)
    })
      .then(response => {
        if (response.ok) {
          return response.json();
        }
        throw new Error("Network error.");
      })
      .then(data => {
        alert(data);
        /*if (data["COUNT(*)"] == 1) {
          window.open("../Dashboard/", "_self");
        } else {
          setTimeout(function () {
            // Code to be executed after a delay
          }, 3000);
          wrongPassword.display = "block";
          spanLoading.display = "none";
        }*/
      })
      .catch(error => {
        console.error("Error:", error);
      });
  }
}

// Select DOM elements and initialize the Users class
var access = document.getElementById('access');
var emailLogin = document.getElementById('emailLogin');
var passwordLogin = document.getElementById('passwordLogin');
var wrongPassword = document.getElementById("wrongPassword").style;
var spanLoading = document.getElementById("spanLoading").style;

const usersClass = new Users();
