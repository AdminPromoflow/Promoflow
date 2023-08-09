<style media="screen">
    .containerItemsLevel1{
      position: relative;
      width: 100%;
    }
    .itemLevel1{
      position: relative;
      width: 100%;
      height: 40px;
      background-color: #2F4560;
      border: 1px solid black;
    }
    .itemLevel1 h3{
      position: relative;
      text-align: center;
      color: rgba(255, 255, 255, .9);
      top: 50%;
      transform: translateY(-50%);
      font-size: 1em;
      font-weight: 400;
    }
    .openToggleSubitemLevel1{
      position: absolute;
      width: 40px;
      height: 100%;
      top: 0px;
      right: 0px;
    }
    .buttonPlusLevel1 {
      position: absolute;
      width: 25px;
      height: 21px;
      top:50%;
      right:10px;
      transform: translateY(-50%);
      cursor: pointer;
      }
    .buttonLessLevel1{
      position: absolute;
      width: 25px;
      height: 11px;
      top:50%;
      right: 10px;
      transform: translateY(-50%);
      cursor: pointer;
      display: none;
      }



      .containerItemLevel2{
        position: relative;
        width: 100%;
      }
      .itemLevel2{
        position: relative;
        width: 100%;
        padding: 4px;
        background-color: #A0AAB7;
        border: 1px solid black;
      }
      .itemLevel2 h3{
        position: relative;
        text-align: left;
        width: 80%;
        left: 50%;
        transform: translateX(-50%);
        color: rgba(255, 255, 255, .8);
        font-size: 1em;
        font-weight: 300;
        overflow-x: scroll;
      }
      .openToggleSubitemLevel2{
        position: absolute;
        width: 30px;
        height: 100%;
        top: 0px;
        right: 10px;
      }
      .buttonPlusLevel2 {
        position: absolute;
        width: 14px;
        height: 15px;
        top:50%;
        right:10px;
        transform: translateY(-50%);
        cursor: pointer;
        }
      .buttonLessLevel2{
        position: absolute;
        width: 14px;
        height: 15px;
        top:50%;
        right: 10px;
        transform: translateY(-50%);
        cursor: pointer;
        display: none;
        }
      .lyricsL2{
        color: black;
      }
</style>
<div class="containerTableW3P">
  <div id="containerCustomers" class="containerCenterTable">

  </div>
</div>
<script type="text/javascript">
function getCustomers(){
  var containerCustomers = document.getElementById("containerCustomers");
  $.ajax( "../App/Controller/Controller2.php", {
         type: 'post',
         async: false,
         data: {
           module: "getCustomers"               },
         success: function(data){
          var data = jQuery.parseJSON(data);
          containerCustomers.innerHTML  = "";
          createCustomers(data["customer"]["name"]);
        var i = 0;
          for(let key in data["customer"]) {
          createCustomersContent(key, data["customer"][key], i)
          i++;
          }
          }
        })
}

function createCustomers(nameCustomer){
  var containerCustomers = document.getElementById("containerCustomers");

  containerCustomers.innerHTML +=
  '<div class="containerItemsLevel1">' +
    '<div class="itemLevel1">' +
      '<h3>Customer: '+ nameCustomer +'</h3>' +
      '<div class="openToggleSubitemLevel1"  >' +
        '<img  class="buttonPlusLevel1"src="../2-2-Orders/Images/mas.png" alt="">' +
        '<img  class="buttonLessLevel1"src="../2-2-Orders/Images/menos.png" alt="">' +
      '</div>' +
    '</div>' +
    '<div class="containersItemLevel2">' +
    '</div>' +
  '</div>'
  ;
}


function createCustomersContent(name, contentName, noDivCustomersContent){
  var containersItemLevel2 = document.querySelectorAll(".containersItemLevel2");

  containersItemLevel2[0].innerHTML +=
  '<div class="containerItemsLevel2">' +
    '<div class="itemLevel2">' +
      '<h3><strong class:"lyricsL2">'+name +': </strong>'+ contentName +'</h3>' +
    '</div>' +
  '</div>'
  ;
}




</script>
