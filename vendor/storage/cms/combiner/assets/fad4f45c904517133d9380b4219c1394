$("document").ready(function(){
   
    
    $(".hotel-room-form").on("submit", function(e){
        e.preventDefault();
        var roomId = $(this).data("roomid");
        console.log(roomId);
        $(this).request("HotelPage::onLoadRoomPrices", {
            /*
            "update":{
                "modals/booking-room-modal": "#modal-body-container"
            },
            "complete":function(){
              $('#room-booking-modal').modal("show");
            }*/
            
            "update":{
                "modals/booking-room-modal": "#modal-body-container",
                "hotel/room-form": "#room-"+roomId+"-container"
            },
            "complete":function(){
              //$('#room-booking-modal').modal("show");
              $("#room-"+roomId+"-right-side").addClass("bottom-bordered");
            }
            
        });
    });

    $("body").on("change", ".room-modal-select", function(){

       var paxId = $("#modal-pax-select").val();
       var regimeCode = $("#modal-regime-select").val();

       $(".regime-info").addClass("d-none");
       $("#room-modal-regime-info-"+regimeCode).removeClass("d-none");

       $(".room-modal-price").addClass("d-none");

       $("#room-modal-price-"+paxId+"-"+regimeCode).removeClass("d-none");

    });

    $("body").on("click", ".remove-from-cart", function(e){
        e.preventDefault();

        var type = $(this).data("type");

        if(type == "room"){
            var code = $(this).data("code");
            var arCode = code.split("-");
            var data = {
                "type": type,
                "hotel_id": arCode[0],
                "room_index": arCode[1],
        
            }
        }else{
            var code = $(this).data("code");
            var data = {
                "type": type,
                "index": code
            }
        }

        

        $.request("CartHandler::onRemove", {
            data: data,
            update:{
                "modals/cart-body": "#cart-body-container",
                "main-header": "#main-header-container",
                "cart/cart-list": "#cart-list-container",
                "cart/cart-total": '.cart-total-container'
            }
            
        }).then(()=>{
            $(".main-header").addClass("rt-sticky-active fadeInDown animated");
        });
    })


    $("body").on("submit", "#hotel-dates-form", function(e){
        
        e.preventDefault();
        var form = $(this).serializeArray();
        var data = convertToObject(form);
        var errorMessage ="";
        if(typeof data["dates"] === "undefined" || data["dates"] ===""){
            errorMessage+="*Elige las fechas para tu estadía";
        }
        
        if (errorMessage !== "") {
            toastr.error(errorMessage, 'Espera!',{
                "positionClass": "toast-bottom-right",

              });

              return false;
        }

        $(this).request("HotelPage::onChangeDates");
    });

    $("body").on("submit", ".room-modal-form", function(e){
        e.preventDefault();
        $(this).request("CartHandler::onAddRoom",{
            data: {
                dates: $("#calendar-input").val()
            },
            update:{
                "modals/cart-body": "#cart-body-container",
                "main-header": "#main-header-container",
                "cart/cart-total": '.cart-total-container'
            }
        }).then(function(){
            $("#room-booking-modal").modal("hide");
            $("#cart-side-modal").modal("show");
        });
    });

    $("body").on("submit", ".room-form", function(e){
        e.preventDefault();
        $(this).request("CartHandler::onAddRoom",{
            data: {
                dates: $("#calendar-input").val()
            },
            update:{
                "modals/cart-body": "#cart-body-container",
                "main-header": "#main-header-container",
                "cart/cart-total": '.cart-total-container'
            }
        }).then(function(){
            $("#room-booking-modal").modal("hide");
            $("#cart-side-modal").modal("show");
        });
    });

    

    $("#booking-form").on("submit", function(e){
        e.preventDefault();

        var form = $(this).serializeArray();
        var data = convertToObject(form);
        var message = validateBookingForm(data); 
        
        if (message !== ""){
            toastr.error(message, 'Espera!',{
                "positionClass": "toast-bottom-right",

            });
            return false;
        }
        
        $(this).request("CartHandler::onBook", {
            success: function(response){
                if (response.status == "success") {
                    if (response.model == "Compra") {
                        //window.location.href="http://localhost/navicu/compra/"+response.code;
                          window.location.href="https://navicu.com/compra/"+response.code;
                         // window.location.href="https://uat.navicu.com/compra/"+response.code;
                    }else{
                        // window.location.href="http://localhost/navicu/reservacion/"+response.code;
                           window.location.href="https://navicu.com/reservacion/"+response.code;
                        // window.location.href="https://uat.navicu.com/reservacion/"+response.code;

                    }

                }else{
                    console.log(response);
                    toastr.warning(response.message, 'Espera!',{
                        "positionClass": "toast-bottom-right",

                      });
                    
                }
                
            }
        });
            
            
    });

    $("#payment-method-select").on("change", function(){
        var code = $(this).val();
        console.log(code);
        $(".payment-info").addClass("d-none");
        $("#"+code+"-container").removeClass("d-none");
    });

    $(".payment-form").on("submit", function(e){
        e.preventDefault();
        $(this).request("PaymentMethodsHandler::onCreatePayment",{
            success: function(response) {
                if (response.status ==="success") {
                    swal({
                        title: '¡Pago recibido!',
                        text: 'Gracias por realizar tu compra con nosotros',
                        
                        }).then(function(){
                            window.scrollTo(0, 0);
                            location.reload();
                        });
                }else{
                    showError(response.message);
                }
                
              },
              error: function(response){
                showError(response.message);
              }
        });
    });

    $('#payment-form').on('submit', function(e){
       
        var request = $(this).payStripe();
        
        request.then(function(response){
        var respuesta = JSON.parse(response.result);
        //console.log("respuesta", respuesta);
        if(respuesta.status === "succeeded"){
            //abre aqui
            var alerta_stripe = swal({
              title: 'Hemos procesado su pago correctamente, ',
              text: 'Espere mientras registramos su compra',
              closeOnEsc:false,
              allowEnterKey: false,
              allowOutsideClick: false,
              button:true,
              timer: 3000,
              }).then( response => {
                var data = {
                  "reference": respuesta["reference"],
                  "type": respuesta["type"],
                  "payment_method_id": 1,
                  "id": respuesta["object_id"],
                  "type": respuesta["object_type"],
                  "status_id": 1
                } 
                console.log(data);
                $.request('PaymentMethodsHandler::onCreatePayment', {
                    data: data,
                    success: function(response) {
                      swal({
                        title: '¡Proceso Completado!',
                        content: 'Gracias por realizar tu compra con nosotros',
                        
                        }).then(function(){
                            location.reload();
                        });
                      
                    },
                    error: function(response){
                      console.log(response);
                      showError(response.message);
                    }
                });
          });
            //termina aqui
            
        }else{
            console.log(respuesta);
            
            } 
        });
        e.preventDefault();
      });
    
    $("#tour-form .pax-control").on("change", function(e){

        

        var maxCapacity = parseInt($("#adult-select option:last").val());
  
        var selectionCapacity = parseInt($("#adult-select").val())+parseInt($("#kid-select").val());
        
        if(selectionCapacity > maxCapacity){

            var value = $(this).val();
            var newValue = maxCapacity-parseInt(value);
            
            if($(this).attr("id")=="adult-select"){
                $("#kid-select").val(newValue+"");
            }else{
                $("#adult-select").val(newValue+"");
            }
        }

        var priceCodeSelector = "price-"+$("#adult-select").val()+"-"+$("#kid-select").val();

        $(".price-element").addClass("d-none").removeClass("d-flex");

        $("#"+priceCodeSelector).addClass("d-flex").removeClass("d-none");
        //ACTUALIZO EL TEXTO DEL PRECIO TOTAL

        var priceSelector = "#price-"+$("#adult-select").val()+"-"+$("#kid-select").val();
        var refPrice = $(priceSelector+" .amount").data("ref");
        var quantity = $("#tour-quantity").val();

        var newText = parseFloat(refPrice)*(quantity);

        updateTourPriceText(priceSelector, newText);
    });
    $("#tour-form .tour-quantity, #upselling-form .tour-quantity").on("click", function(e){
        
        var value = parseInt($("#tour-quantity-value").text());

        if($("#upselling-form").length > 0){
            if($(".single-datepicker").val() == ""){
                return false;
            }
            $(".pax-control").trigger("change");

            var adultsPrice = $("#upselling-prices-container #a-price").val();
            var kidsPrice = $("#upselling-prices-container #k-price").val();

            var totalPrice = parseFloat(parseInt($("#kid-select").val())*parseFloat(kidsPrice))+(parseInt($("#adult-select").val())*parseFloat(adultsPrice));
            
            var priceSelector = "#upselling-prices-container";
            var refPrice = totalPrice;

            //var refPrice = $(priceSelector+" .amount").data("ref");
            

        }else if($("#tour-form").length>0){

            var priceSelector = "#price-"+$("#adult-select").val()+"-"+$("#kid-select").val();
            var refPrice = $(priceSelector+" .amount").data("ref");

        }



        if($(this).data("action")=="add"){
            //console.log("1");            

            $("#tour-quantity-value").text(value+1);
            $("#tour-quantity").val(value+1);

            var newText = parseFloat(refPrice)*(value+1);
            updateTourPriceText(priceSelector, newText);


        }else if($(this).data("action")=="subs"){
            //console.log("2");
            if(value>1){
                $("#tour-quantity-value").text(value-1);
                $("#tour-quantity").val(value-1);
                
                var newText = parseFloat(refPrice)*(value-1);
                updateTourPriceText(priceSelector, newText);
               
            }
            
        }else{
           // console.log("3");
            var newText = parseFloat(refPrice)*(parseInt($("#tour-quantity").val()));
            updateTourPriceText(priceSelector, newText);
        }
        //tour-quantity-value
        e.preventDefault();
    });

    $("#tour-form").on("submit", function(e){
        e.preventDefault();
        $(this).request("CartHandler::onAddTour", {
            update:{
                "modals/cart-body": "#cart-body-container",
                "main-header": "#main-header-container"
            }
        }).then(()=>{
            $(".main-header").addClass("rt-sticky-active fadeInDown animated");
            $("#cart-side-modal").modal("show");
        });
    })

    $("#upselling-form .pax-control").on("change", function(){

        var maxCapacity = parseInt($("#adult-select option:last").val());
        var selectionCapacity = parseInt($("#adult-select").val())+parseInt($("#kid-select").val());
        var kidsPrice = $("#k-price").val();
        var adultsPrice = $("#a-price").val();
        //alert(adultsPrice);
        if(adultsPrice == null || adultsPrice == ""){
            return false;
        }
        if(selectionCapacity > maxCapacity){

            var value = $(this).val();
            var newValue = maxCapacity-parseInt(value);
            
            if($(this).attr("id")=="adult-select"){
                $("#kid-select").val(newValue+"");
            }else{
                $("#adult-select").val(newValue+"");
            }
        }

        var quantity =  $("#tour-quantity").val();

        var totalPrice = parseFloat(parseInt($("#kid-select").val())*parseFloat(kidsPrice))+(parseInt($("#adult-select").val())*parseFloat(adultsPrice));
        
        //console.log(adultsPrice);

        var quantityTotalPrice = totalPrice*quantity;

        var totalPriceFormatted = Math.round((quantityTotalPrice + Number.EPSILON) * 100) / 100;
        //console.log(totalPriceFormatted);

        $(".amount").text(""+totalPriceFormatted);
       
    });

    $(".single-datepicker").datetimepicker({
        "format": "DD-MM-YYYY",
        useCurrent: false,
        minDate: new Date(),
        //inline: true,
        //sideBySide: true,
        //keepOpen: true,
        //debug: true
      });
    
      $(".single-datepicker").on("dp.change", function (e) {
        $(this).request("UpsellingPage::onLoadPrices", {
            data:{
               dates: e.date.format("DD-MM-YYYY")
            } ,
            update:{
                "tour/upselling-price": "#upselling-prices-container",
            }
        }).then(()=>{
            $("#upselling-form .pax-control").trigger("change");
            $(".tour-quantity").trigger("click");
        })
        //$('#datetimepicker7').data("DateTimePicker").minDate(e.date);
    });

    $("#upselling-form").on("submit", function(e){
        e.preventDefault();

        $(this).request("CartHandler::onAddUpselling", {
            update:{
                "modals/cart-body": "#cart-body-container",
                "main-header": "#main-header-container"
            }
        }).then(()=>{
            $(".main-header").addClass("rt-sticky-active fadeInDown animated");
            $("#cart-side-modal").modal("show");
        });
        
    });

});






//room-booking-modal


/*
var form = $(this).serializeArray();
var data = convertToObject(form);
var message = validateRegister(data); 

*/

Number.prototype.countDecimals = function () {
    if(Math.floor(this.valueOf()) === this.valueOf()) return 0;
    return this.toString().split(".")[1].length || 0; 
}

function updateTourPriceText(selector, newText){
    
    if(newText.countDecimals() > 2){
        //console.log("mucho");
        newText = parseFloat(newText.toFixed(2))
    }

    $(selector+" .amount").text(newText);

}



function showError(message){
    console.log("dentro de error:"+message);
    swal({
      icon: 'warning',
      title: '¡UPS, ha ocurrido algo inesperado!',
      text: 'Codigo de error:'+message,
      button:true,
    }).then(()=>{
      location.reload();
    });
  }


function validateBookingForm(data){
    var errorMessage ="";

    if(data["name"]===""){
        errorMessage+="*Tu nombre es obligatorio <br>";
    }
    
    if(data["email"]===""){
        errorMessage+="*Tu email es obligatorio <br>";
    }

    if(data["phone"]==="" && data["phone"].length < 7){
        errorMessage+="*Tu telefono es obligatorio y debe tener al menos 8 caracteres <br>";
    }
    
    if(data["document_type"] == ""){
        errorMessage+="*Elige un tipo de documento<br>";
    }

    if(data["document"] =="" || data["document"].lenght <4 || (/^[0-9]*$/g).test(data["document"]) == false){
        errorMessage+="*Tu documento debe tener al menos 4 caracteres y ser sólo números<br>";
    }

    if(typeof data["terms"] === 'undefined'){
        errorMessage+="*Debes aceptar los términos y condiciones <br>";
      }
         
    return errorMessage;
}