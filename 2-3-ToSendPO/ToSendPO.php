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
        color: white;
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
                <h3 >1. Data No*:</h3>
                <input id="" type="text" name="" value="">
              </div>
              <div class="itemContentToSendPO">
                <h3 >2. Customer:</h3>
                <input id="" type="text" name="" value="">
              </div>
              <div class="itemContentToSendPO">
                <h3 >3. Print Ref*:</h3>
                <input id="" type="text" name="" value="">
              </div>
              <div class="itemContentToSendPO">
                <h3 >4. Project:</h3>
                <input id="" type="text" name="" value="">
              </div>
              <div class="itemContentToSendPO">
                <h3 >5. Qty*:</h3>
                <input id="" type="text" name="" value="">
              </div>
              <div class="itemContentToSendPO">
                <h3 >6. Supplier:</h3>
                <input id="" type="text" name="" value="">
              </div>
              <div class="itemContentToSendPO">
                <h3 >7. C-Order Date:</h3>
                <input id="" type="text" name="" value="">
              </div>
              <div class="itemContentToSendPO">
                <h3 >8. PO Sent:</h3>
                <input id="" type="text" name="" value="">
              </div>
              <div class="itemContentToSendPO">
                <h3 >9. Approval Sent:</h3>
                <input id="" type="text" name="" value="">
              </div>
              <div class="itemContentToSendPO">
                <h3 >10. Despatch Date:</h3>
                <input id="" type="text" name="" value="">
              </div>
              <div class="itemContentToSendPO">
                <h3 >11. C-DUE DATE:</h3>
                <input id="" type="text" name="" value="">
              </div>
              <div class="itemContentToSendPO">
                <h3 >12. Artwork Pre Approved?:</h3>
                <input id="" type="text" name="" value="">
              </div>
              <div class="itemContentToSendPO">
                <h3 >13. C- Artwork:</h3>
                <input id="" type="text" name="" value="">
              </div>
              <div class="itemContentToSendPO">
                <h3 >14. C-Artwork Visual:</h3>
                <input id="" type="text" name="" value="">
              </div>
              <div class="itemContentToSendPO">
                <h3 >15. C-Approved PDF:</h3>
                <input id="" type="text" name="" value="">
              </div>
              <div class="itemContentToSendPO">
                <h3 >16. C-Approved Visual:</h3>
                <input id="" type="text" name="" value="">
              </div>
              <div class="itemContentToSendPO">
                <h3 >20. Box No:</h3>
                <input id="" type="text" name="" value="">
              </div>
              <div class="itemContentToSendPO">
                <h3 >21. Act-Despatch Date:</h3>
                <input id="" type="text" name="" value="">
              </div>
              <div class="itemContentToSendPO">
                <h3 >22. UK-Tracking No:</h3>
                <input id="" type="text" name="" value="">
              </div>
              <div class="itemContentToSendPO">
                <h3 >23. Delivered Date:</h3>
                <input id="" type="text" name="" value="">
              </div>
              <div class="itemContentToSendPO">
                <h3 >24. Nett sale*:</h3>
                <input id="" type="text" name="" value="">
              </div>
              <div class="itemContentToSendPO">
                <h3 >25. Customer Reference 1*:</h3>
                <input id="" type="text" name="" value="">
              </div>
              <div class="itemContentToSendPO">
                <h3 >26. S-Ref:</h3>
                <input id="" type="text" name="" value="">
              </div>
              <div class="itemContentToSendPO">
                <h3 >27. S-Email:</h3>
                <input id="" type="text" name="" value="">
              </div>
              <div class="itemContentToSendPO">
                <h3 >28. Item:</h3>
                <input id="" type="text" name="" value="">
              </div>
              <div class="itemContentToSendPO">
                <h3 >29. Size:</h3>
                <input id="" type="text" name="" value="">
              </div>
              <div class="itemContentToSendPO">
                <h3 >30. Material:</h3>
                <input id="" type="text" name="" value="">
              </div>
              <div class="itemContentToSendPO">
                <h3 >31. Weigth/Thickness/Capacity:</h3>
                <input id="" type="text" name="" value="">
              </div>
              <div class="itemContentToSendPO">
                <h3 >32. Print:</h3>
                <input id="" type="text" name="" value="">
              </div>
              <div class="itemContentToSendPO">
                <h3 >33. Coverage:</h3>
                <input id="" type="text" name="" value="">
              </div>
              <div class="itemContentToSendPO">
                <h3 >34: Print Style:</h3>
                <input id="" type="text" name="" value="">
              </div>
              <div class="itemContentToSendPO">
                <h3 >35. Finish 1:</h3>
                <input id="" type="text" name="" value="">
              </div>
              <div class="itemContentToSendPO">
                <h3 >36. Finish 2:</h3>
                <input id="" type="text" name="" value="">
              </div>
              <div class="itemContentToSendPO">
                <h3 >37. Finish 3:</h3>
                <input id="" type="text" name="" value="">
              </div>
              <div class="itemContentToSendPO">
                <h3 >38. Service Level:</h3>
                <input id="" type="text" name="" value="">
              </div>
              <div class="itemContentToSendPO">
                <h3 >39. Status*:</h3>
                <input id="" type="text" name="" value="">
              </div>
              <div class="itemContentToSendPO">
                <h3 >40. Notes:</h3>
                <input id="" type="text" name="" value="">
              </div>
              <div class="itemContentToSendPO">
                <h3 >41: Note:</h3>
                <input id="" type="text" name="" value="">
              </div>
              <div class="itemContentToSendPO">
                <h3 >42. Company Name:</h3>
                <input id="" type="text" name="" value="">
              </div>
              <div class="itemContentToSendPO">
                <h3 >43. Attn:</h3>
                <input id="" type="text" name="" value="">
              </div>
              <div class="itemContentToSendPO">
                <h3 >44. Tel:</h3>
                <input id="" type="text" name="" value="">
              </div>
              <div class="itemContentToSendPO">
                <h3 >45. Email:</h3>
                <input id="" type="text" name="" value="">
              </div>
              <div class="itemContentToSendPO">
                <h3 >46. Delivery Address:</h3>
                <input id="" type="text" name="" value="">
              </div>
              <div class="itemContentToSendPO">
                <h3 >47. UK-Track link:</h3>
                <input id="" type="text" name="" value="">
              </div>
              <div class="itemContentToSendPO">
                <h3 >48: Delivery Image:</h3>
                <input id="" type="text" name="" value="">
              </div>
              <div class="itemContentToSendPO">
                <h3 >49. Product Image:</h3>
                <input id="" type="text" name="" value="">
              </div>
              <div class="itemContentToSendPO">
                <h3 >50. Not Sure:</h3>
                <input id="" type="text" name="" value="">
              </div>
              <div class="itemContentToSendPO">
                <h3 >51. PO Received:</h3>
                <input id="" type="text" name="" value="">
              </div>

            </div>
        </div>
      </div>
  </div>
</div>
<script type="text/javascript">
//var test = document.getElementById('test');
  function getToSendPO(){
    $.ajax( "../App/Controller/Controller2.php", {
           type: 'post',
           async: false,
           data: {
             module: "getToSendPOOrders"
                   },
           success: function(data){
             console.log(data);
    //         test.value = "hola";

            }
          })
  }



</script>
