<style media="screen">
    .containerItemsToSendPO{
      position: relative;
      width: 100%;
    }
    .itemToSendPO{
      position: relative;
      width: 100%;
      height: 40px;
      background-color: #2F4560;
      border: 1px solid black;
    }
    .itemToSendPO h3{
      position: relative;
      text-align: center;
      color: rgba(255, 255, 255, .9);
      top: 50%;
      transform: translateY(-50%);
      font-size: 1em;
      font-weight: 400;
    }
    .openToggleSubitemToSendPO{
      position: absolute;
      width: 40px;
      height: 100%;
      top: 0px;
      right: 0px;
    }
    .buttonPlusToSendPO {
      position: absolute;
      width: 25px;
      height: 21px;
      top:50%;
      right:10px;
      transform: translateY(-50%);
      cursor: pointer;
      }
    .buttonLessToSendPO{
      position: absolute;
      width: 25px;
      height: 11px;
      top:50%;
      right: 10px;
      transform: translateY(-50%);
      cursor: pointer;
      display: none;
      }


      .containerItemContentToSendPO{
        position: relative;
        width: 100%;
      }
      .itemContentToSendPO{
        position: relative;
        width: 100%;
        padding: 4px;
        background-color: #7B899A;
        border: 1px solid black;
      }
      .itemContentToSendPO h3{
        position: relative;
        text-align: center;
        width: 85%;
        left: 50%;
        transform: translateX(-50%);
        color: rgba(255, 255, 255, .8);
        font-size: 1em;
        font-weight: 300;
      }
      .itemContentToSendPO input{
        position: relative;
        text-align: center;
        width: 85%;
        left: 50%;
        background-color: #66768A;
        transform: translateX(-50%);
        color: black;
        font-size: 1em;
        font-weight: 300;
        margin: 5px 0px;
        border: 2px solid #26384F;
      }
      .openToggleSubitemContentToSendPO{
        position: absolute;
        width: 30px;
        height: 100%;
        right: 10px;
        top: 0px;
      }
      .buttonPlusContentToSendPO {
        position: absolute;
        width: 15px;
        height: 21px;
        top:50%;
        right:10px;
        transform: translateY(-50%);
        cursor: pointer;
        }
      .buttonLessContentToSendPO{
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
</style>
<div class="containerTableW3P">
  <div id="containerCustomers" class="containerCenterTable">
    <div class="containerItemsToSendPO">
        <div class="itemToSendPO">
          <h3>Order date</h3>
          <div class="openToggleSubitemToSendPO" onclick="showCategories(\ + noDivToSendPO  + \);" >
            <img  class="buttonPlusToSendPO"src="../2-2-Orders/Images/mas.png" alt="">
            <img  class="buttonLessToSendPO"src="../2-2-Orders/Images/menos.png" alt="">
          </div>
        </div>
        <div class="containersItemsContentToSendPO">
          <div class="containerItemsContentToSendPO">
              <div class="itemContentToSendPO">
                <h3>1. Code</h3>
                <input type="text" name="" value="">

              </div>
              <div class="containersItemGroup">
              </div>
            </div>
        </div>
      </div>
  </div>
</div>
<script type="text/javascript">
  function getToSendPO(){
    $.ajax( "../App/Controller/Controller2.php", {
           type: 'post',
           async: false,
           data: {
             module: "getToSendPO"
                   },
           success: function(data){
             console.log(data);


            }
          })
  }



</script>
