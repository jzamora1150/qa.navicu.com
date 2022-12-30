$("document").ready(function(){
   $("body").on("click", ".result-link", function(e){
    window.location.href = $(this).data("url");
   })
   
   if($("#autocomplete").length > 0){
    // console.log("aqui");
    $.request("SearchHandler::onAutoComplete", {
      success: function(response){
          let suggestion = $.map(response, function (item) {
             
              return { value: item.value, data: { category: item.icon, id: item.id } }; 
          });

          //<i class="far fa-compass"></i>
          $('.autocomplete').devbridgeAutocomplete({
              lookup: suggestion,
              minChars: 1,
              onSelect: function (suggestion) {
                  //console.log(suggestion);
                  $("#main-search #criteria-container").html("<input type='hidden' name='criteria' value='"+suggestion.value+"'>"+
                  "<input type='hidden' name='search_type' value='"+suggestion.data.category+"'>"+
                  "<input type='hidden' name='search_id' value='"+suggestion.data.id+"'>");
              },
              showNoSuggestionNotice: true,
              noSuggestionNotice: 'Sorry, no matching results',
              groupBy: 'category',
              onSearchComplete: function(query, suggestions){
                  var categories = $("body").find(".autocomplete-group");

                  $.each( categories, function( index, category ){
                      var currentText = $(category).text();
                      $(category).text("");
                      switch (currentText.trim()) {
                          
                          case "Hoteles":
                              $(category).append("<i class='far fa-building'></i> "+currentText);
                              break;
                          case "Ciudades":
                              $(category).append("<i class='fas fa-map-marker-alt'></i> "+currentText);
                              break;
                          case "Lugares":
                              $(category).append("<i class='fas fa-monument'></i> "+currentText);
                              break;
                      }
                  });     
              }
          });
      }
  });
   }
   

    if($("#clock").length > 0){
    
      var date = $("#created_at").data("date");
      
      date = date.replace("a. m.", "am");
      date = date.replace("p. m.", "pm");
      
      $("#clock").countdown(date, function(event) {
          $(this).html(event.strftime('%Hh %Mm %Ss'));
      });
    }
    
    
    $('#payment-method-select').select2({
      minimumResultsForSearch: Infinity
    });
    

    var inputs = document.getElementsByClassName('calendar-input');
    if ( inputs.length > 1) {
    //   console.log(inputs.length);
      for (let index = 0; index < inputs.length; index++) {
        new HotelDatepicker(inputs[index],{
          format: 'DD-MM-YYYY',
          separator:' to ',
          startDate: new Date(),
          showTopbar: false,
          
        });
        
      }
      
    }else{
      console.log("no tengo");
    }
    

    $(".main-search").on("submit", function(e){
        e.preventDefault();
        var form = $(this).serializeArray();
        var data = convertToObject(form);
        var message = validateSearch(data); 

        if (message !="") {
          toastr.error(message, 'Espera!',{
            "positionClass": "toast-bottom-right",
          });

          return false;
        }
        $(this).request("SearchHandler::onSearch");
    });

    $("#filter-form").on("submit", function(e){
      e.preventDefault();

  
      var filterFields = $(this).serializeArray();
      var arFilterFields = convertToObject(filterFields);

      var searchFields = $("#main-search").serializeArray();
      var arSearchFields = convertToObject(searchFields);

      $.each(arSearchFields, function( index, value ) {
        //console.log( index + ": " + value );
        arFilterFields[index] = value;
      });

      //console.log(arFilterFields);

      //var params = $.merge($.merge([], arFilterFields), arSearchFields);


      $.request("SearchHandler::onFilter", {

        data: arFilterFields

      });

    });

    $("body").on("click", ".currency-item", function(e){

        e.preventDefault();
        $.request("CurrencyHandler::onChangeCurrency", {
          data: {
            "id": $(this).data("id")
          },
          "update":{
              "main-header": "#main-header-container"
          },
          "complete":function(){
            $('.dropdown-toggle').dropdown()
          }
        })
      });

      $(document).on("mousedown", ".autocomplete-suggestion", e => {
        $(e.target).click();
      });


      $(document).on("scroll", function(){

        var searchBox = $("#banner-searchbox");
        var footer = $(".rt-site-footer");
        var footerOffset = footer.offset();
        
        if (searchBox.length > 0) {
          var offset = searchBox.offset();
         

         

          if (window.pageYOffset >= offset.top && (footerOffset.top > window.pageYOffset+600))  {
              $("#sidebar").addClass("stickybar").removeClass("col-md-3");
              

              $("#results-container").removeClass("col-md-12").addClass("col-md-9 offset-md-3");
            } else {
              $("#sidebar").removeClass("stickybar");
              $("#sidebar").addClass("col-md-3");

              $("#results-container").addClass("col-md-12").removeClass("offset-md-3");
          }
          //console.log(offset.top);
        }
        
      });
      
      $("#subscribe-form").on("submit", function(e){
        e.preventDefault();
        var form = $(this).serializeArray();
        var data = convertToObject(form);

        var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        var errorMessage ="";

        if(data["email"]==="" || !data["email"].match(mailformat)){
            errorMessage+="*Ingresa un email válido <br>";
        }
        
  
        if(errorMessage !==""){
          toastr.error(errorMessage, 'Espera!',{
            "positionClass": "toast-bottom-right",
          });

          return false;
        }

        
        $(this).request("formSubscribe::onAddSubscriber", {
            success: function(response){
              
              swal({
                title: '¡Gracias por suscribirte!',
                text: 'Ahora estarás al tanto de todos nuestros servicios',
                button:true,
              });
                
            },
            error: function(response){
               
              swal({
                  icon: 'warning',
                  title: '¡UPS!',
                  text: 'Parece que ha ocurrido un error, intenta nuevamente',
                  button:true,
              });
            }
        });
      });


      $("#contact-form").on("submit", function(e){
        e.preventDefault();
        var form = $(this).serializeArray();
        var data = convertToObject(form);
        var message = validateContactForm(data);

        if(message !==""){
          toastr.error(message, 'Espera!',{
            "positionClass": "toast-bottom-right",
          });

        }else{
          
          $(this).request("contactForm::onFormSend", {
            success: function(response){
              console.log(response);
              this.success(response);
            },
            error: function(response){
              this.success(response);
            }
          });

        } 
      });

      $("#close-terms-button").on("click", function(e){
        $('.custom-control-input').prop('checked', true)
      });

});

if($(".tiny-slider").length > 0){
  var slider = tns({
    "container": ".tiny-slider",
    "preventScrollOnTouch": 'auto',
    "items": 1,
    "edgePadding": 20,
    "loop": false,
    "mouseDrag": true,
    "speed": 400,
    "controls": false,
    "arrowKeys": false,
    "nav": false,
    "swipeAngle": false,
  });
}

if($(".testimonials-mobile-container").length > 0){
  var slider = tns({
    "container": ".testimonials-mobile-container",
    "preventScrollOnTouch": 'auto',
    "items": 1,
    "loop": false,
    "mouseDrag": true,
    "speed": 400,
    "controls": true,
    "arrowKeys": true,
    "nav": false,
    "swipeAngle": false,
    "controlsText": ["←", "→"]
  });
}





function validateSearch(data){
  var errorMessage ="";

  if(typeof data["criteria"] === "undefined" 
      || typeof data["search_type"] === "undefined" 
      || typeof data["criteria"] === "undefined"){

      errorMessage+="*Elige un destino válido para realizar tu busqueda";
  }

  if(typeof data["dates"] === "undefined" || data["dates"] ===""){
    errorMessage+="*Elige las fechas para tu estadía";
  }
  return errorMessage;
}

function validateContactForm(data){
  var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  var errorMessage ="";

  if(data["name"]===""){
    errorMessage+="*Tu nombre es obligatorio <br>";
  }

  if(data["email"]==="" || !data["email"].match(mailformat)){
      errorMessage+="*Ingresa un email válido <br>";
  }

  if(data["message"]==="" ||  data["message"].lenght <4){
    errorMessage+="*Tu mensaje debe tener al menos 4 caracteres <br>";
  }

  if(typeof data["terms"] === 'undefined'){
    errorMessage+="*Debes aceptar los términos y condiciones <br>";
  }

  return errorMessage;
}

function convertToObject(array){
  var obj = {};
  array.forEach(element => {

    if(typeof obj[element.name] === 'undefined'){
      obj[element.name] = element.value;
    }else{
      //if (Array.isArray(obj[element.name])) {
        //console.log("soy array");
        //obj[element.name].push(element.value);
      //}else{
        
        var arTemp = [obj[element.name]];
        arTemp.push(element.value);
        obj[element.name] = arTemp;
        
     // }
      
    }
      
      
  });
  return obj;
}


$(document).on('ajaxSetup', function(event, context) {
  // Enable AJAX handling of Flash messages on all AJAX requests
  context.options.flash = true

  // Enable the StripeLoadIndicator on all AJAX requests
  context.options.loading = $.oc.stripeLoadIndicator

  // Handle Error Messages by triggering a flashMsg of type error
  context.options.handleErrorMessage = function(message) {
      $.oc.flashMsg({ text: message, class: 'error' })
  }

  // Handle Flash Messages by triggering a flashMsg of the message type
  context.options.handleFlashMessage = function(message, type) {
      $.oc.flashMsg({ text: message, class: type })
  }
})