<style media="screen">
  .containerItemsCategory{
    position: relative;
    width: 100%;
  }
  .itemCategory{
    position: relative;
    width: 100%;
    height: 40px;
    background-color: #2F4560;
    border: 1px solid black;
  }
  .itemCategory h3{
    position: relative;
    text-align: center;
    color: rgba(255, 255, 255, .9);
    top: 50%;
    transform: translateY(-50%);
    font-size: 1em;
    font-weight: 400;
  }
  .openToggleSubitemCategory{
    position: absolute;
    width: 40px;
    height: 100%;
    top: 0px;
    right: 0px;
  }
  .buttonPlusCategory {
    position: absolute;
    width: 25px;
    height: 21px;
    top:50%;
    right:10px;
    transform: translateY(-50%);
    cursor: pointer;
    }
  .buttonLessCategory{
    position: absolute;
    width: 25px;
    height: 11px;
    top:50%;
    right: 10px;
    transform: translateY(-50%);
    cursor: pointer;
    display: none;
    }





    .containerItemGroup{
      position: relative;
      width: 100%;
    }
    .itemGroup{
      position: relative;
      width: 100%;
      padding: 4px;
      background-color: #55677D;
      border: 1px solid black;
    }
    .itemGroup h3{
      position: relative;
      text-align: center;
      width: 85%;
      left: 50%;
      transform: translateX(-50%);
      color: rgba(255, 255, 255, .8);
      font-size: 1em;
      font-weight: 400;
    }
    .openToggleSubitemGroup{
      position: absolute;
      width: 30px;
      height: 100%;
      top: 0px;
      right: 10px;
    }
    .buttonLessGroup{
      position: absolute;
      width: 17px;
      height: 11px;
      top:50%;
      right: 10px;
      transform: translateY(-50%);
      cursor: pointer;
      display: none;
      }
    .buttonPlusGroup {
      position: absolute;
      width: 17px;
      height: 21px;
      top:50%;
      right:10px;
      transform: translateY(-50%);
      cursor: pointer;
      }




      .containerItemProduct{
        position: relative;
        width: 100%;
      }
      .itemProduct{
        position: relative;
        width: 100%;
        padding: 4px;
        background-color: #7B899A;
        border: 1px solid black;
      }
      .itemProduct h3{
        position: relative;
        text-align: center;
        width: 85%;
        left: 50%;
        transform: translateX(-50%);
        color: rgba(255, 255, 255, .8);
        font-size: 1em;
        font-weight: 300;
      }
      .openToggleSubitemProduct{
        position: absolute;
        width: 30px;
        height: 100%;
        right: 10px;
        top: 0px;
      }
      .buttonPlusProduct {
        position: absolute;
        width: 15px;
        height: 21px;
        top:50%;
        right:10px;
        transform: translateY(-50%);
        cursor: pointer;
        }
      .buttonLessProduct{
        position: absolute;
        width: 15px;
        height: 11px;
        top:50%;
        right: 10px;
        transform: translateY(-50%);
        cursor: pointer;
        display: none;
        }
        .blueColor{
          font-weight: 500;
          color: #2F4560;
          font-size: 1.1em;
        }







        .containerItemProductContent{
          position: relative;
          width: 100%;
        }
        .itemProductContent{
          position: relative;
          width: 100%;
          padding: 4px;
          background-color: #A0AAB7;
          border: 1px solid black;
        }
        .itemProductContent h3{
          position: relative;
          text-align: center;
          width: 80%;
          left: 50%;
          transform: translateX(-50%);
          color: rgba(255, 255, 255, .8);
          font-size: 1em;
          font-weight: 300;
          overflow-x: scroll;
        }
        .openToggleSubitemProductContent{
          position: absolute;
          width: 30px;
          height: 100%;
          top: 0px;
          right: 10px;
        }
        .buttonPlusProductContent {
          position: absolute;
          width: 14px;
          height: 15px;
          top:50%;
          right:10px;
          transform: translateY(-50%);
          cursor: pointer;
          }
        .buttonLessProductContent{
          position: absolute;
          width: 14px;
          height: 15px;
          top:50%;
          right: 10px;
          transform: translateY(-50%);
          cursor: pointer;
          display: none;
          }


          .blackColor{
          color: #CFD4DA;
          }

</style>
<!--  Table 1  -->
<!--<button class="exampleAPI" id="requestProductsExample" type="button" name="button" >Request products</button>-->
<div class="containerTableW3P">
  <div id="containerProducts"  class="containerCenterTable">

  <!--  <div class="containerItemsCategory">
      <div class="itemCategory">
        <h3>Category:  Bags </h3>
        <div class="openToggleSubitemCategory"  >
          <img  class="buttonPlusCategory"src="../2-2-Orders/Images/mas.png" alt="">
          <img  class="buttonLessCategory"src="../2-2-Orders/Images/menos.png" alt="">
        </div>
      </div>
      <div class="containersItemGroup">
        <div class="containerItemGroup">
          <div class="itemGroup">
            <h3>Group:  small bags </h3>
            <div class="openToggleSubitemGroup"   >
              <img  class="buttonPlusGroup"src="../2-2-Orders/Images/mas.png" alt="">
              <img  class="buttonLessGroup"src="../2-2-Orders/Images/menos.png" alt="">
            </div>
          </div>
          <div class="containersItemsProducts">
              <div class="containerItemProduct">
                <div class="itemProduct">
                  <h3>  <strong class="blueColor">Product: </strong>   Blue bag </h3>
                  <div class="openToggleSubitemProduct" >
                   <img  class="buttonPlusProduct"src="../2-2-Orders/Images/mas.png" alt="">
                   <img  class="buttonLessProduct"src="../2-2-Orders/Images/menos.png" alt="">
                 </div>
                </div>
                <div class="containersItemsProductContent">


                  <div class="containerItemProductContent">
                    <div class="itemProductContent">
                      <h3>Size   :  23cm </h3>
                      <div class="openToggleSubitemProductContent" >
                       <img  class="buttonPlusProductContent"src="../2-2-Orders/Images/mas.png" alt="">
                       <img  class="buttonLessProductContent"src="../2-2-Orders/Images/menos.png" alt="">
                     </div>
                    </div>
                    <div class="containersItemsProductContentL3">
                    </div>
                  </div>

                </div>
              </div>
          </div>
        </div>
      </div>
    </div>-->


  <!--  <div class="containerItemsCategory">
        <div class="itemCategory">
          <h3>Category:  Bags </h3>
          <div class="openToggleSubitemCategory"  >
            <img  class="buttonPlusCategory"src="../2-2-Orders/Images/mas.png" alt="">
            <img  class="buttonLessCategory"src="../2-2-Orders/Images/menos.png" alt="">
          </div>
        </div>
        <div class="containersItemGroup">
        </div>
      </div>-->




  </div>


</div>
<script type="text/javascript">
getCategories();
/*----------------------  Get Categories from Database  -----------------------*/

  function getCategories(){
    var containerProducts = document.getElementById("containerProducts");

    $.ajax( "../App/Controller/Controller2.php", {
           type: 'post',
           async: false,
           data: {
             module: "getCategories"
                   },
           success: function(data){
            containerProducts.innerHTML =  "";
            var data = jQuery.parseJSON(data);
            for (var i = 0; i < data.length; i++) {
              createCategories(data[i]["code"], data[i]["name"], i);
            }
            }
          })
  }


/*---------------------------  Create categories  ----------------------------*/

  function createCategories(code, name, noDivCategory) {
    var containerProducts = document.getElementById("containerProducts");
    name  = name.replace("Category", "");
    containerProducts.innerHTML +=
    '<div class="containerItemsCategory">'+
        '<div class="itemCategory">'+
          '<h3> '+ name +'</h3>'+
          '<div class="openToggleSubitemCategory"  >'+
            '<img  class="buttonPlusGroup"src="../2-2-Orders/Images/mas.png" alt="">'+
            '<img  class="buttonLessCategory"src="../2-2-Orders/Images/menos.png" alt="">'+
          '</div>'+
        '</div>'+
        '<div class="containersItemGroup">'+
        '</div>'+
      '</div>';

      getGroups(code, noDivCategory);

  }


/*--------------------------------  Get groups  ------------------------------*/

  function getGroups(code, noDivCategory){
    const containersItemGroup = document.querySelectorAll(".containersItemGroup");
    $.ajax( "../App/Controller/Controller2.php", {
           type: 'post',
           async: false,
           data: {
             module: "getGroups",
             id: code
                   },
           success: function(data){
             alert(containersItemGroup.length);
            containersItemGroup[noDivCategory].innerHTML =  '';
            var data = jQuery.parseJSON(data);
            for (var i = 0; i < data.length; i++) {
              createGroups(data[i]["code"], data[i]["name"], noDivCategory);
            }
            }
          })
          }



      function createGroups(codeG, nameG, noDivCategory) {

        const containersItemGroup = document.querySelectorAll(".containersItemGroup");
    containersItemGroup[noDivCategory].innerHTML +=

        '<div class="containerItemGroup">'+
            '<div class="itemGroup">'+
              '<h3> '+ nameG +'</h3>'+
              '<div class="openToggleSubitemGroup"  >'+
                '<img  class="buttonPlusCategory"src="../2-2-Orders/Images/mas.png" alt="">'+
                '<img  class="buttonLessGroup"src="../2-2-Orders/Images/menos.png" alt="">'+
              '</div>'+
            '</div>'+
            '<div class="containersItemProduct">'+
            '</div>'+
          '</div>';

      //  alert(codeG + nameG + noDivCategory);


        }
</script>
