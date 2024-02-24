// Create an instance of the Menu class to handle menu functionality
menuClass.changePathImageOpenLogin(1);
//var test = document.getElementById('test');
  function getToSendPO(){
    var containersItemsContentToSendPO = document.getElementById("containersItemsContentToSendPO");

    $.ajax( "../../controller/W3P/W3P_appsheet/appsheet.php", {
           type: 'post',
           async: false,
           data: {
             module: "getToSendPOOrders"
                   },
           success: function(data){
             containersItemsContentToSendPO.innerHTML = "";

             var data = jQuery.parseJSON(data);
            for (var i = 0; i < data.length; i++) { // Create each orders
               createToSendPOOrders(data[i]["id"], data[i]["created_date"], i);
             }
            }
          })
  }



  function createToSendPOOrders(idOrder, date, noDivOrder){
    var containersItemsContentToSendPO = document.getElementById("containersItemsContentToSendPO");

    containersItemsContentToSendPO.innerHTML +=
    '<div class="containerItemsToSendPO">' +
      '<div class="itemToSendPO">' +
        '<h3>Order: '+ date +'</h3>' +
        '<div class="openToggleSubitemToSendPO" onclick="showAppsheetContent(\'' + noDivOrder  + '\');" >' +
          '<img  class="buttonPlusToSendPO"src="../../assets/img/W3P_appsheet/sections/section-1-home/mas.png" alt="">' +
          '<img  class="buttonLessToSendPO"src="../../assets/img/W3P_appsheet/sections/section-1-home/menos.png" alt="">' +
        '</div>' +
      '</div>' +
      '<div class="containersItemContentToSendPO">' +
      '</div>' +
    '</div>'
    ;


    getToSendPOContent(idOrder, noDivOrder);

    showAppsheetContent(noDivOrder); //Show all the jobs
    showAppsheetContent(noDivOrder); //Hide all jobs --> we have twice this function of hide all
  }

  function showAppsheetContent(noDivOrder){


    const buttonPlusOrder =  document.querySelectorAll(".buttonPlusToSendPO");
    const buttonLessOrder =  document.querySelectorAll(".buttonLessToSendPO");
      const containersItemContentToSendPO =  document.querySelectorAll(".containersItemContentToSendPO");

      containersItemContentToSendPO[noDivOrder].innerHTML = '';



    /*if (buttonPlusOrder[noDivOrder].style.display == "none" ) {
      buttonPlusOrder[noDivOrder].style.display = "block";
      buttonLessOrder[noDivOrder].style.display = "none";
      containersItemContentToSendPO[noDivOrder].style.display = "none";

    }else {
      buttonPlusOrder[noDivOrder].style.display = "none";
      buttonLessOrder[noDivOrder].style.display = "block";
      containersItemContentToSendPO[noDivOrder].style.display = "block";
    }*/
  }

  var dataContentToSentPO;
  function getToSendPOContent(idOrder, noDivOrder){
    const containersItemContentToSendPO =  document.querySelectorAll(".containersItemContentToSendPO");



      $.ajax( "../../controller/W3P/W3P_appsheet/appsheet.php", {
             type: 'post',
             async: false,
             data: {
               module: "getToSendPOContent",
               idOrder: idOrder
                   },
             success: function(data){
            //   alert(data);

              dataContentToSentPO = jQuery.parseJSON(data);
              containersItemContentToSendPO[noDivOrder].innerHTML = '';

                 createToSendPOContent(noDivOrder, dataContentToSentPO);

              }
            })
  }

  function createToSendPOContent(noDivOrder, dataContentToSentPO){
    const containersItemContentToSendPO =  document.querySelectorAll(".containersItemContentToSendPO");

    containersItemsContentToSendPO.innerHTML +=
    '<div class="containerItemsContentToSendPO">'+
        '<div class="itemContentToSendPO">'+
          '<h3 >1. Data No*:</h3>'+
          '<input class="DataNo" type="text" name="" value="'+dataContentToSentPO[0]["data_no"]+'">'+
        '</div>'+
        '<div class="itemContentToSendPO">'+
          '<h3 >2. Customer:</h3>'+
          '<input class="Customer" type="text" name="" value="W3P">'+
         '</div>'+
        '<div class="itemContentToSendPO">'+
          '<h3 >3. Print Ref*:</h3>'+
          '<input class="PrintRef" type="text" name="" value="">'+
        '</div>'+
        '<div class="itemContentToSendPO">'+
          '<h3 >4. Project:</h3>'+
          '<input class="Project" type="text" name="" value="'+dataContentToSentPO[0]["name"]+'">'+
        '</div>'+
        '<div class="itemContentToSendPO">'+
          '<h3 >5. Qty*: </h3>'+
          '<input class="Qty" type="text" name="" value="'+dataContentToSentPO[0]["qty"]+'">'+
        '</div>'+
        '<div class="itemContentToSendPO">'+
          '<h3 >6. Supplier:</h3>'+
          '<input class="Supplier" type="text" name="" value="">'+
        '</div>'+
        '<div class="itemContentToSendPO">'+
          '<h3 >7. C-Order Date:</h3>'+
          '<input class="OrderDate" type="text" name="" value="">'+
        '</div>'+
        '<div class="itemContentToSendPO">'+
          '<h3 >8. PO Sent:</h3>'+
          '<input class="POSent" type="text" name="" value="">'+
        '</div>'+
        '<div class="itemContentToSendPO">'+
          '<h3 >9. Approval Sent:</h3>'+
          '<input class="ApprovalSent" type="text" name="" value="">'+
        '</div>'+
        '<div class="itemContentToSendPO">'+
          '<h3 >10. Despatch Date:</h3>'+
          '<input class="DespatchDate" type="text" name="" value="">'+
        '</div>'+
        '<div class="itemContentToSendPO">'+
          '<h3 >11. C-DUE DATE:</h3>'+
          '<input class="DUEDATE" type="text" name="" value="">'+
        '</div>'+
        '<div class="itemContentToSendPO">'+
          '<h3 >12. Artwork Pre Approved?:</h3>'+
          '<input class="ArtworkPreApproved" type="text" name="" value="">'+
        '</div>'+
        '<div class="itemContentToSendPO">'+
          '<h3 >13. C- Artwork:</h3>'+
          '<input class="Artwork" type="text" name="" value="">'+
        '</div>'+
        '<div class="itemContentToSendPO">'+
          '<h3 >14. C-Artwork Visual:</h3>'+
          '<input class="ArtworkVisual" type="text" name="" value="">'+
        '</div>'+
        '<div class="itemContentToSendPO">'+
          '<h3 >15. C-Approved PDF:</h3>'+
          '<input class="ApprovedPDF" type="text" name="" value="">'+
        '</div>'+
        '<div class="itemContentToSendPO">'+
          '<h3 >16. C-Approved Visual:</h3>'+
          '<input class="ApprovedVisual" type="text" name="" value="">'+
        '</div>'+
        '<div class="itemContentToSendPO">'+
          '<h3 >20. Box No:</h3>'+
          '<input class="BoxNo" type="text" name="" value="">'+
        '</div>'+
        '<div class="itemContentToSendPO">'+
          '<h3 >21. Act-Despatch Date:</h3>'+
          '<input class="DespatchDate" type="text" name="" value="">'+
        '</div>'+
        '<div class="itemContentToSendPO">'+
          '<h3 >22. UK-Tracking No:</h3>'+
          '<input class="TrackingNo" type="text" name="" value="">'+
        '</div>'+
        '<div class="itemContentToSendPO">'+
          '<h3 >23. Delivered Date:</h3>'+
          '<input class="DeliveredDate" type="text" name="" value="">'+
        '</div>'+
        '<div class="itemContentToSendPO">'+
          '<h3 >24. Nett sale*:</h3>'+
          '<input class="Nettsale" type="text" name="" value="">'+
        '</div>'+
        '<div class="itemContentToSendPO">'+
          '<h3 >25. Customer Reference 1*:</h3>'+
          '<input class="CustomerReference1" type="text" name="" value="">'+
        '</div>'+
        '<div class="itemContentToSendPO">'+
          '<h3 >26. S-Ref:</h3>'+
          '<input class="Ref" type="text" name="" value="">'+
        '</div>'+
        '<div class="itemContentToSendPO">'+
          '<h3 >27. S-Email:</h3>'+
          '<input class="Email" type="text" name="" value="">'+
        '</div>'+
        '<div class="itemContentToSendPO">'+
          '<h3 >28. Item:</h3>'+
          '<input class="Item" type="text" name="" value="">'+
        '</div>'+
        '<div class="itemContentToSendPO">'+
          '<h3 >29. Size:</h3>'+
          '<input class="Size" type="text" name="" value="">'+
        '</div>'+
        '<div class="itemContentToSendPO">'+
          '<h3 >30. Material:</h3>'+
          '<input class="Material" type="text" name="" value="">'+
        '</div>'+
        '<div class="itemContentToSendPO">'+
          '<h3 >31. Weigth/Thickness/Capacity:</h3>'+
          '<input class="Weigth" type="text" name="" value="">'+
        '</div>'+
        '<div class="itemContentToSendPO">'+
          '<h3 >32. Print:</h3>'+
          '<input class="Print" type="text" name="" value="">'+
        '</div>'+
        '<div class="itemContentToSendPO">'+
          '<h3 >33. Coverage:</h3>'+
          '<input class="Coverage" type="text" name="" value="">'+
        '</div>'+
        '<div class="itemContentToSendPO">'+
          '<h3 >34: Print Style:</h3>'+
          '<input class="PrintStyle" type="text" name="" value="">'+
        '</div>'+
        '<div class="itemContentToSendPO">'+
          '<h3 >35. Finish 1:</h3>'+
          '<input class="Finish1" type="text" name="" value="">'+
        '</div>'+
        '<div class="itemContentToSendPO">'+
          '<h3 >36. Finish 2:</h3>'+
          '<input class="Finish2" type="text" name="" value="">'+
        '</div>'+
        '<div class="itemContentToSendPO">'+
          '<h3 >37. Finish 3:</h3>'+
          '<input class="Finish3" type="text" name="" value="">'+
        '</div>'+
        '<div class="itemContentToSendPO">'+
          '<h3 >38. Service Level:</h3>'+
          '<input class="ServiceLevel" type="text" name="" value="">'+
        '</div>'+
        '<div class="itemContentToSendPO">'+
          '<h3 >39. Status*:</h3>'+
          '<input class="Status" type="text" name="" value="">'+
        '</div>'+
        '<div class="itemContentToSendPO">'+
          '<h3 >40. Notes:</h3>'+
          '<input class="Notes" type="text" name="" value="">'+
        '</div>'+
        '<div class="itemContentToSendPO">'+
          '<h3 >41: Note:</h3>'+
          '<input class="Note" type="text" name="" value="">'+
        '</div>'+
        '<div class="itemContentToSendPO">'+
          '<h3 >42. Company Name:</h3>'+
          '<input class="CompanyName" type="text" name="" value="">'+
        '</div>'+
        '<div class="itemContentToSendPO">'+
          '<h3 >43. Attn:</h3>'+
          '<input class="Attn" type="text" name="" value="">'+
        '</div>'+
        '<div class="itemContentToSendPO">'+
          '<h3 >44. Tel:</h3>'+
          '<input class="Tel" type="text" name="" value="">'+
        '</div>'+
        '<div class="itemContentToSendPO">'+
          '<h3 >45. Email:</h3>'+
          '<input class="Email" type="text" name="" value="">'+
        '</div>'+
        '<div class="itemContentToSendPO">'+
          '<h3 >46. Delivery Address:</h3>'+
          '<input class="DeliveryAddress" type="text" name="" value="">'+
        '</div>'+
        '<div class="itemContentToSendPO">'+
          '<h3 >47. UK-Track link:</h3>'+
          '<input class="Tracklink" type="text" name="" value="">'+
        '</div>'+
        '<div class="itemContentToSendPO">'+
          '<h3 >48: Delivery Image:</h3>'+
          '<input class="DeliveryImage" type="text" name="" value="">'+
        '</div>'+
        '<div class="itemContentToSendPO">'+
          '<h3 >49. Product Image:</h3>'+
          '<input class="ProductImage" type="text" name="" value="">'+
        '</div>'+
        '<div class="itemContentToSendPO">'+
          '<h3 >50. Not Sure:</h3>'+
          '<input class="NotSure" type="text" name="" value="">'+
        '</div>'+
        '<div class="itemContentToSendPO">'+
          '<h3 >51. PO Received:</h3>'+
          '<input class="POReceived" type="text" name="" value="">'+
        '</div>'+

      '</div>'
    ;

  }



getToSendPO();
