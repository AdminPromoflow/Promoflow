<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Promoflow</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500&family=Roboto:wght@100;300;400&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="../../public/css/global/menu.css">
  </head>
  <body>

    <style media="screen">
      body{
        position: relative;
        margin: 0;
        padding: 0;
        background-color: #E0E5EA;
        font-family: 'Montserrat', sans-serif;
        font-family: 'Roboto', sans-serif;
      }


    </style>

    <?php include "../../views/global/menu.php" ?>

    <style media="screen">
    .bodyLogin{
      position: relative;
      height: 80vh;
      width: 98%;
      left: 50%;
      transform: translateX(-50%);
      background: #2F4560;
      margin: 20px 0;
      border-radius: 5px;
    }
    .titleBodyLogin{
      position: relative;
      color: white;
      text-align: center;
      font-weight: 300;
      padding: 15px;
    }
    .containerUsersManagerBottoms{
      position: relative;
      background-color: rgba(210, 220, 234, .3);
      border-radius: 5px;
      left: 50%;
      width: 300px;
      border-radius: 1px solid black;
      transform: translateX(-50%);
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
    }
    .itemUsersManager{
      position: relative;
      min-width: 10px;
      width: 15%;
      padding: 0px;
      height: 40px;
      margin: 15px;
      cursor: pointer;
    }
    .itemUsersManager img{
      position: relative;
      height: 100%;
      left: 50%;
      top: 30%;
      transform: translate(-50%, -50%);
      filter: drop-shadow(1px 1px 2px black);
      transition: .6s;
    }
    .itemUsersManager:hover > img{
      filter: drop-shadow(1px 1px 3px black);
    }
    .itemUsersManager img:active{
      filter: drop-shadow(1px 1px 2px black);
    }
    .itemUsersManager h3{
      position: absolute;
      bottom: -10px;
      margin: 0;
      padding: 0;
      font-weight: 300;
      font-size: .9em;
      padding-left: 5px;
      transition: font-weight .6;
    }
    .itemUsersManager:hover > h3{
      font-weight: 500;
    }
    .itemUsersManager:active > h3{
      font-weight: 300;
    }
    </style>
    <section class="bodyLogin">
      <h2 class="titleBodyLogin">Clients Manager</h2>
      <div class="containerUsersManagerBottoms">

        <div class="itemUsersManager">
          <img src="../1-ClientsManager/Images/create.png" alt="">
          <h3>Create</h3>
        </div>

        <div class="itemUsersManager" id="openRead">
          <img src="../1-ClientsManager/Images/Read.png" alt="">
          <h3>Read</h3>
        </div>

        <div class="itemUsersManager" id="openUpdate">
          <img src="../1-ClientsManager/Images/update.png" alt="">
          <h3>Update</h3>
        </div>

        <div class="itemUsersManager" id="openDelete">
          <img src="../1-ClientsManager/Images/DeleteIcon.png" alt="">
          <h3>Delete</h3>
        </div>

      </div>


    <?php //include "../1-ClientsManager/ClientsManager.php" ?>
    <?php //include "../2-W3P/W3P.php" ?>


    <script src="../../public/js/global/menu.js" type="text/javascript">

    </script>
  </body>
</html>
