var access = document.getElementById('access');
var data = document.getElementsByClassName('data');

var wrongPassword = document.getElementById("wrongPassword").style;

wrongPassword.display = "none";

var spanLoading = document.getElementById("spanLoading").style;
spanLoading.display = "none";


access.addEventListener("click", function(){
  login();
})

document.querySelector('#passwordData').addEventListener('keypress', function (e) {
    if (e.key === 'Enter') {
      login();
    }
});

function login(){
  spanLoading.display = "block";
      $.ajax( "../App/Controller/Controller2.php", {
      type: 'post',
      async: false,
      data: {
        module: "loginUser",
        email: data[0].value,
        password: data[1].value
      },
      success: function(data){
      //  alert(data);

        var data = jQuery.parseJSON(data);
    //    alert(data["COUNT(*)"]);
        if (data["COUNT(*)"]==1) {
          window.open("../Dashboard/", "_self");
        }
        else{
          setTimeout(function() {
              //your code to be executed after 1 second
          }, 3);
          wrongPassword.display = "block";
          spanLoading.display = "none";
        }
     }
    }
  )
}    var access = document.getElementById('access');
    var data = document.getElementsByClassName('data');

    var wrongPassword = document.getElementById("wrongPassword").style;

    wrongPassword.display = "none";

    var spanLoading = document.getElementById("spanLoading").style;
    spanLoading.display = "none";


    access.addEventListener("click", function(){
      login();
    })

    document.querySelector('#passwordData').addEventListener('keypress', function (e) {
        if (e.key === 'Enter') {
          login();
        }
    });

    function login(){
      spanLoading.display = "block";
          $.ajax( "../App/Controller/Controller2.php", {
          type: 'post',
          async: false,
          data: {
            module: "loginUser",
            email: data[0].value,
            password: data[1].value
          },
          success: function(data){
          //  alert(data);

            var data = jQuery.parseJSON(data);
        //    alert(data["COUNT(*)"]);
            if (data["COUNT(*)"]==1) {
              window.open("../Dashboard/", "_self");
            }
            else{
              setTimeout(function() {
                  //your code to be executed after 1 second
              }, 3);
              wrongPassword.display = "block";
              spanLoading.display = "none";
            }
         }
        }
      )
    }
