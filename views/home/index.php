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
      button{
        position: relative;
        padding: 5px;
        background-color: #2F4560;
        height: 35px;
        border-radius: 5px;
        width: 100px;
        cursor: pointer;
        box-shadow: 0px 0px 2px rgb(50,50,50);
        text-align: center;
        color: white;
        margin: 10px;
        font-weight: 300;
        font-size: 1.2em;

      }
        button:hover{
        background-color: #435267;
        transition: .4s;
      }
      h1, h2, h3, h4, h5{
        padding: 0;
        margin: 0;

      }



      .bodyLogin{
        position: relative;
        height: 80vh;
        width: 98%;
        left: 50%;
        transform: translateX(-50%);
        background: #2F4560;;
        margin: 20px 0;
        border-radius: 5px;
      }
      .boxLogin{
        position: relative;
        height: 60vh;

        min-width: 600px;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);

        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
        flex-direction: row;
      }
      .boxLogin2{
        position: relative;
        width: 300px;
        height: 100%;
        background-color: orange;
      }
      .boxLogin2:first-child{
        border-top-left-radius: 10px;
        border-bottom-left-radius: 10px;
        background-color: #E0E5EA;
      }
      .boxLogin2:last-child{
        border-top-right-radius: 10px;
        border-bottom-right-radius: 10px;
        background-color: #2F4560;

      }
      .boxLogin2:last-child img{
        position: relative;
        width: 80%;
        left: 50%;
        transform: translateX(-50%);
        margin-top: 50px;
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
      .bodyLogin h1 {
        color: white;
        padding-left: 55px;
        margin: 2px;
        font-weight: 300;
        font-size: 1em;
      }


      @media screen and (min-width: 480px) {

      }
      @media screen and (min-width: 768px) {

      }
      @media screen and (min-width: 1024px) {

      }
      @media screen and (min-width: 1200px) {

      }





      .itemsLogout{
        padding: 5px;
        background-color: gold;
        cursor: pointer;
        margin: 3px 0;
        background-color: rgba(33, 46, 63, 1);
      }
      .itemsLogout h3{
        margin: 0;
        padding: 0;
        text-align: center;
        color: white;
        font-weight: 300;
        color: rgba(240, 250, 240, 1);
      }
      .itemsLogout:hover {
        background-color: rgba(33, 46, 63, .7);
      }
      .itemsLogout:active {
        background-color: rgba(33, 46, 63, 1);
      }

      .items:nth-child(odd) {
        background-color: rgba(33, 46, 63, 1);
      }
      .items:nth-child(even) {
        background-color: rgba(109, 114, 126, 1);
      }


      .items:nth-child(odd):hover {
        background-color: rgba(33, 46, 63, .7);
      }
      .items:nth-child(even):hover {
        background-color: rgba(109, 114, 126, .7);
      }


      .items:nth-child(odd):active {
        background-color: rgba(33, 46, 63, 1);
      }
      .items:nth-child(even):active {
        background-color: rgba(109, 114, 126, 1);
      }
      .items h3{
        margin: 0;
        padding: 0;
        text-align: center;
        color: white;
        font-weight: 300;
        color: rgba(240, 250, 240, 1);
      }

      .navigateTable{
        position: relative;
        padding-top: 50px;
        left: 50%;
        transform: translateX(-50%);
        padding: 7px;
        width: 80%;
        background-color: rgba(139, 144, 156, .5);
        border-radius: 5px;
        max-width: 400px;

        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        flex-direction: row;
        align-items: center;
      }
      .navigateTable img{
        height: 30px;
        cursor: pointer;
        filter: drop-shadow(0px 0px 0px grey);
        transition: .4s;
      }
      .navigateTable img:hover{
        filter: drop-shadow(0px 0px 1px #2F4560);
      }
      .navigateTable img:active{
        filter: drop-shadow(0px 0px 0px #2F4560);
      }
      .navigateTable img:first-child{
        transform: rotateY(180deg);
      }
      .textNavigatorTable{
        width: 60%;
        display: none;
      }
      .textNavigatorTable h3{
        margin: 0;
        padding: 4px;
        font-weight: 600;
        font-size: 1em;
        color: rgba(210, 220, 234, 1);
        text-align: center;
      }
      .containerTableW3P{
        position: relative;
        display: none;
        padding: 5px;
        background-color: rgba(139, 144, 156, .5);
        width: 80%;
        height: calc(100% - 150px);
        left: 50%;
        transform: translateX(-50%);
        border-radius: 5px;
        overflow: scroll;
      }
      .containerTableW3P::-webkit-scrollbar {
      width: 1.5em;
      }
      .containerTableW3P::-webkit-scrollbar-track {
      box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
      }
      .containerTableW3P::-webkit-scrollbar-thumb {
      background:rgba(47, 69, 96, 1);
      border: 1px solid black;
    }
      .containerTableW3P table{
        position: relative;

      /*  left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);*/
      }
      .containerTableW3P th{
        background-color: rgba(202, 108, 46,1);
        color: white;
        padding: 7px;
      }
      .containerTableW3P td{
        border: 1px solid black;
        background-color: rgba(210, 220, 234,1);
        padding: 4px;
      }
      .containerCenterTable{
        position: relative;
        width: 280px;
        border-radius: 5px;
        overflow: hidden;
        margin-top: 13px;
        left: 50%;
        transform: translateX(-50%);
      }

    </style>

    <?php include "../../views/global/menu.php" ?>


    <?php //include "../1-ClientsManager/ClientsManager.php" ?>
    <?php //include "../2-W3P/W3P.php" ?>


    <script src="../../public/js/global/menu.js" type="text/javascript">

    </script>
  </body>
</html>
