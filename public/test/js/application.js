
  $(document).ready(function() {
    $('#signArea').signaturePad({drawOnly:true, drawBezierCurves:true, lineTop:90});
  });

  $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
  });



  $("#persal_no").hide();


   function payment_method_func(){
     var payment = $("#payment_method").val();
     if(payment == "persal"){
        $("#persal_no").show();
     }else{
        $("#persal_no").hide();
     }
   }



   function getDob(idNumber) {
      var Year = idNumber.substring(0, 2);
      var Month = idNumber.substring(2, 4);
      var Day = idNumber.substring(4, 6);

      var cutoff = (new Date()).getFullYear() - 2000;

      var dob = (Year > cutoff ? '19' : '20') + Year + '-' + Month + '-' + Day;

      return dob;
   }




   function id__number(){

       var id_number = $("#id_number").val();
     var correct = true;




     // get first 6 digits as a valid date
     var tempDate = new Date(id_number.substring(0, 2), id_number.substring(2, 4) - 1, id_number.substring(4, 6));

     var id_date = tempDate.getDate();
     var id_month = tempDate.getMonth();
     var id_year = tempDate.getFullYear();

     var fullDate = getDob(id_number);

     function isNumber(n) {
         return !isNaN(parseFloat(n)) && isFinite(n);
     }

     // get the gender
     var genderCode = id_number.substring(6, 10);
     var gender = parseInt(genderCode) < 5000 ? "Female" : "Male";

     // get country ID for citzenship
     var citzenship = parseInt(id_number.substring(10, 11)) == 0 ? "Yes" : "No";

     // apply Luhn formula for check-digits
     var tempTotal = 0;
     var checkSum = 0;
     var multiplier = 1;
     for (var i = 0; i < 13; ++i) {
         tempTotal = parseInt(id_number.charAt(i)) * multiplier;
         if (tempTotal > 9) {
             tempTotal = parseInt(tempTotal.toString().charAt(0)) + parseInt(tempTotal.toString().charAt(1));
         }
         checkSum = checkSum + tempTotal;
         multiplier = (multiplier % 2 == 0) ? 1 : 2;
     }

     if(id_number.length == 0){

         document.getElementById("dob").value = "";

     }
     if (id_number.length != 13 || !isNumber(id_number)) {
        $("#id_number-feedback").html("<div class='alert alert-warning'>Please input a valid ID number</div>");


    }
    else if (!((tempDate.getYear() == id_number.substring(0, 2)) && (id_month == id_number.substring(2, 4) - 1) && (id_date == id_number.substring(4, 6)))) {
        $("#id_number-feedback").html("<div class='alert alert-warning'>Please input a valid ID number</div>");


    }
    else if ((checkSum % 10) != 0) {
        $("#id_number-feedback").html("<div style='color:red;'>Please input a valid ID number</div>");


    }else{
       $("#id_number-feedback").html("<div style='color:red;'></div>");
       document.getElementById("dob").value = getDob(id_number);
    }
   }

 function heh(){
     console.log("okayu");
     html2canvas([document.getElementById('sign-pad')], {
       onrendered: function (canvas) {
          var form_rate = "";
         var radioButtons = document.getElementsByName("group1");
     for(var i = 0; i < radioButtons.length; i++)
     {
         if(radioButtons[i].checked == true)
         {
             form_rate =  radioButtons[i].value;

         }
     }



         var canvas_img_data = canvas.toDataURL('image/png');
         var img_data = canvas_img_data.replace(/^data:image\/(png|jpg);base64,/, "");

          var  title = $("#title").val();
          var  tel_number = $("#tel_number").val();
          var cell_number = $("#cell_number").val();
          var tel_number_2 = $("#tel_number_2").val();
          var cell_number_2 = $("#cell_number_2").val();
          var email_address = $("#email_address").val();


           var  id_number = $("#id_number").val();
            var  dob = $("#dob").val();
             var  gender = $("#gender").val();
              var  fname = $("#fname").val();
               var  lname = $("#lname").val();
                var  language = $("#language").val();
                 var  marital_status = $("#marital_status").val();
                  var  nod = $("#nod").val();

              var  physical_address = $("#physical_address").val();
               var  physical_code = $("#physical_code").val();
                var  physical_address_2 = $("#physical_address_2").val();
                 var  physical_code_2 = $("#physical_code_2").val();
                  var  physical_address_code = $("#physical_address_code").val();
                   var  physical_code_code = $("#physical_code_code").val();

              var  employee_name = $("#employee_name").val();
               var  persal_salary_no = $("#persal_salary_no").val();
                var  division = $("#division").val();
                 var  wasps_region = $("#wasps_region").val();
                  var  province = $("#province").val();
                   var  date_commence_in_position = $("#date_commence_in_position").val();
                    var  work_physical_address = $("#work_physical_address").val();
                     var  building_name = $("#building_name").val();
                      var  street_name = $("#street_name").val();
                       var  code = $("#code").val();

                var  payment_method = $("#payment_method").val();
                var persal_no = $("#persal_no").val();
                 var  Frequency = $("#Frequency").val();
                  var  account_holder = $("#account_holder").val();
                   var  bank_name = $("#bank_name").val();
                    var  branch_name = $("#branch_name").val();
                     var  branch_code = $("#branch_code").val();
                      var  account_number = $("#account_number").val();
                       var  account_type = $("#account_type").val();
                        var  deduction_date = $("#deduction_date").val();

                        console.log(form_rate);

                         var to = $("#to").val();
                         var ii = $("#ii").val();
                          var  signed_at = $("#signed_at").val();
                           var  on_this = $("#on_this").val();
                            var  day_of = $("#day_of").val();
                             var  year = $("#year").val();



                             $.ajax({
                   						url: "{{ route('application.form')}}",
                   						data: { canvas_img_data:canvas_img_data, img_data:img_data, title : title, id_number: id_number, dob: dob, gender: gender, fname: fname, lname: lname, language: language, marital_status: marital_status, nod: nod, physical_address: physical_address, physical_code: physical_code, physical_address_2: physical_address_2
                               , physical_code_2: physical_code_2, physical_address_code: physical_address_code, physical_code_code, employee_name: employee_name, persal_salary_no :persal_salary_no , division : division ,  wasps_region :wasps_region , province :province , date_commence_in_position : date_commence_in_position ,
                             work_physical_address : work_physical_address , building_name : building_name , street_name : street_name , code : code , payment_method : payment_method , persal_no : persal_no, Frequency : Frequency , account_holder : account_holder , bank_name : bank_name, branch_name : branch_name, branch_code : branch_code, account_number : account_number, account_type : account_type, deduction_date : deduction_date,
                           to: to, ii: ii ,  signed_at : signed_at, on_this : on_this ,  day_of : day_of, year :year, tel_number: tel_number , cell_number: cell_number, tel_number_2: tel_number_2, cell_number_2: cell_number_2, email_address: email_address, form_rate: form_rate },
                   						type: 'post',
                   						success: function (response) {
                                 if(response == "Success"){
                                    window.location = '/success';
                                 }
                   						},error: function(data){
                                  var errors = data.responseJSON;

                             $.each(errors, function(key,message){
                               console.log(message);

                             });



                               }
                   					});
       }
     });
 }



 document.getElementById("persal_no").value = " ";



   var currentTab = 0; // Current tab is set to be the first tab (0)
   showTab(currentTab); // Display the current tab

   function showTab(n) {
     // This function will display the specified tab of the form...
     var x = document.getElementsByClassName("tab");
     x[n].style.display = "block";
     //... and fix the Previous/Next buttons:
     if (n == 0) {
       document.getElementById("prevBtn").style.display = "none";
     } else {
       document.getElementById("prevBtn").style.display = "inline";
     }
     if (n == (x.length - 1)) {
       $("#nextBtn").hide();
       $("#prevBtn").hide();

       $("#shouldsubmit").html("  <button type='button' class='btn btn-success' id='prevBtn' onclick='nextPrev(-1)'>Previous</button> <button type='button' id='btnSaveSign' onclick='heh()' class='btn btn-success' >Submit</button>");
     } else {
       $("#nextBtn").show();
         $("#prevBtn").show();

       $("#shouldsubmit").html("");
       document.getElementById("nextBtn").innerHTML = "Next";
     }
     //... and run a function that will display the correct step indicator:
     fixStepIndicator(n)
   }


   function nextPrev(n) {
     // This function will figure out which tab to display
     var x = document.getElementsByClassName("tab");
     // Exit the function if any field in the current tab is invalid:
     if (n == 1 && !validateForm()) return false;
     // Hide the current tab:
     x[currentTab].style.display = "none";
     // Increase or decrease the current tab by 1:
     currentTab = currentTab + n;
     // if you have reached the end of the form...
     if (currentTab >= x.length) {
       // ... the form gets submitted:
       document.getElementById("regForm").submit();
       return false;
     }
     // Otherwise, display the correct tab:
     showTab(currentTab);
   }

   function validateForm() {
     // This function deals with validation of the form fields
     var x, y, i, valid = true;
     x = document.getElementsByClassName("tab");
     y = x[currentTab].getElementsByTagName("input");
     // A loop that checks every input field in the current tab:
     for (i = 0; i < y.length; i++) {
       // If a field is empty...
       if (y[i].value == "") {
         // add an "invalid" class to the field:
         y[i].className += " invalid";
         // and set the current valid status to false
         valid = false;
       }
     }
     // If the valid status is true, mark the step as finished and valid:
     if (valid) {
       document.getElementsByClassName("step")[currentTab].className += " finish";
     }
     return valid; // return the valid status
   }

   function fixStepIndicator(n) {
     // This function removes the "active" class of all steps...
     var i, x = document.getElementsByClassName("step");
     for (i = 0; i < x.length; i++) {
       x[i].className = x[i].className.replace(" active", "");
     }
     //... and adds the "active" class on the current step:
     x[n].className += " active";
   }
