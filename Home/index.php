<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  </head>
  <body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <style media="screen">
      body{
        position: relative;
        margin: 0;
        padding: 0;
        background-color: #E0E5EA;
        font-family: 'Montserrat', sans-serif;
        font-family: 'Roboto', sans-serif;
      }
      .menuLogin{
        position: relative;
        height: 100px;
        width: 98%;
        left: 50%;
        transform: translateX(-50%);
        background: rgb(49,70,95);
        background: linear-gradient(90deg, rgba(49,70,95,1) 27%, rgba(141,151,163,1) 72%, rgba(252,251,252,1) 100%);
        margin: 20px 0;
        border-radius: 5px;
        box-shadow: 0px 0px 3px black;
      }
      .menuLogin h1{
        position: relative;
        color: white;
        top: 50%;
        transform: translateY(-50%);
        padding-left: 20px;
        margin: 0px;
      }
      .bodyLogin{
        position: relative;
        height: 80vh;
        width: 98%;
        left: 50%;
        transform: translateX(-50%);
        background-color: #2F4560;
        box-shadow: 0px 0px 3px #4A596D;
        margin: 20px 0;
        border-radius: 5px;
      }
      .boxLogin{
        position: relative;
        height: 400px;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
      }
      .boxLogin2{
        position: relative;
        width: 300px;
        height: 380px;
        box-shadow: 0px 0px 5px rgb(50,50,50);
      }
      .boxLogin2:first-child{
        border-top-left-radius: 10px;
        border-bottom-left-radius: 10px;
        background-color: #E0E5EA;
      }
      .boxLogin2:last-child{
        border-top-right-radius: 10px;
        border-bottom-right-radius: 10px;
        background: #205698;
      }
      .boxLogin2:last-child img{
        position: relative;
        width: 80%;
        left: 50%;
        transform: translateX(-50%);
        margin-top: 50px;
        filter: drop-shadow(3px 3px 8px rgb(50,50,50));
      }
      .boxLogin2:last-child h3{
        position: relative;
        text-align: center;
        padding: 15px;
        color: white;
        font-size: 0.9em;
        font-weight: 300;
      }
      .contentLogin{
        position: relative;
        padding: 10px;
        width: 90%;
        top: 45%;
        left: 50%;
        transform: translate(-50%, -50%);
      }
      .contentLogin h4{
        position: relative;
        text-align: left;
        padding-left: 15px;
        font-size: 0.9em;
        font-weight: 300;
        margin: 8px;
      }
      .contentLogin h5{
        position: relative;
        text-align: center;
        padding-left: 15px;
        font-size: 0.8em;
        font-weight: 300;
        margin: 8px;
        color: #5E2129;
      }
      .contentLogin h1{
        font-weight: 600;
        padding-left: 15px;
        color:  #212E3E;
      }
      .contentLogin input{
        position: relative;
        width: 70%;
        left: 50%;
        transform: translateX(-50%);
        margin: 0;
        height: 20px;
        border-radius: 5px;
      }
      .contactTitle{
        position: relative;
        padding: 5px;
        background-color: #2F4560;
        left: 50%;
        transform: translateX(-50%);
        margin-top: 20px;
        border-radius: 5px;
        width: 100px;
        cursor: pointer;
        box-shadow: 0px 0px 2px rgb(50,50,50);

      }
      .contactTitle:hover{
        background-color: #435267;
        transition: .4s;
      }
      .contactTitle h3{
        text-align: center;
        color: white;
        padding: 0;
        margin: 0;
        font-weight: 300;
      }
      a {
        all: none;
      }
      .menuLogin img{
        position: absolute;
        margin-right: 30px;
        height: 55%;
        right: 10px;
        top: 50%;
        transform: translateY(-50%);
        filter: drop-shadow(2px 2px 3px rgb(50,50,50));
      }
      .menuLogin h1{
        font-size: 3em;
        margin-left: 30px;
        font-weight: 400;
        text-shadow: 2px 2px 5px rgb(50,50,50);
      }



      @media screen and (max-width: 630px) {
        .boxLogin2:first-child{
          border-radius: 10px;
        }
        .boxLogin2:last-child{
          display: none;
        }
        .menuLogin img{
          height: 35%;
          margin-right: 10px;
        }
        .menuLogin h1{
          font-size: 1.5em;
          margin-left: 10px;
         }
         .boxLogin2{
           position: relative;
           width: 280px;
           height: 380px;
         }
      }
  /*    @media screen and (min-width: 480px) {

      }
      @media screen and (min-width: 768px) {

      }
      @media screen and (min-width: 1024px) {

      }

      @media screen and (min-width: 1200px) {

      }*/
      @media (orientation: landscape) and (max-width: 750px){
        .bodyLogin{
          position: relative;
          width: 98%;
          height: 150vh;
          left: 50%;
        }
      }
      .spanLoading{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: red;
        z-index: 10;
      }
      section .spanLoading span{
        position: absolute;
        height: 10px;
        width: 10px;
        background-color: #fff;
        border-radius: 50%;
        transform: rotate(calc(var(--i) *
        (360deg / 15))) translateY(35px);

        animation: animate 1.5s linear infinite;
        animation-delay: calc(var(--i) * .1s);
      }
      @keyframes animate{
        0%{
          opacity: 0.9;
        }
        100%{
          opacity: 0;
        }
      }

    </style>

    <section class="Login">
      <div  id="spanLoading" class="spanLoading ">
        <span style="--i:1;"></span>
        <span style="--i:2;"></span>
        <span style="--i:3;"></span>
        <span style="--i:4;"></span>
        <span style="--i:5;"></span>
        <span style="--i:6;"></span>
        <span style="--i:7;"></span>
        <span style="--i:8;"></span>
        <span style="--i:9;"></span>
        <span style="--i:10;"></span>
        <span style="--i:11;"></span>
        <span style="--i:12;"></span>
        <span style="--i:13;"></span>
        <span style="--i:14;"></span>
        <span style="--i:15;"></span>
      </div>
      <div class="menuLogin">
        <h1>Promoflow.</h1>
        <img src="Images/Logo.png" alt="">
      </div>
      <div class="bodyLogin">
        <div class="boxLogin">
          <div class="boxLogin2">
            <div class="contentLogin">
              <br>
              <h1>Log in</h1>
              <h4>Please provide your email and password to access the system.</h4>
              <br>
              <h4>Email:</h4>
              <input class="data" id="emailData" type="text" name="" >
              <h4>Password:</h4>
              <input class="data" id="passwordData" type="password" name="" >
              <div id="access" class="contactTitle">
                <h3>Access</h3>
              </div>
              <br>
              <h5 id="wrongPassword">The login credentials you entered are incorrect. Please try again</h5>
            </div>
          </div>
          <div class="boxLogin2">
            <img src="Images/IanLoginPIcture.png" alt="">
            <h3>Your product management interface is ready for you.</h3>
          </div>
        </div>
      </div>
    </section>


    <script type="text/javascript">
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

            var data = jQuery.parseJSON(data);
        //    alert(data["COUNT(*)"]);
            if (data["COUNT(*)"]==1) {
              window.open("../Dashboard/index.php", "_self");
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
    </script>

  </body>
</html>
