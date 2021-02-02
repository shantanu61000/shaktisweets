$(document).ready(function(){
    //colapse the nav when button is clicked and open the modal
    $("#login-btn").click(() =>{ 
        $("#navbar-content").removeClass("show");
        $(".content").addClass("blur");
        //disable modal to collapse when clicked outside the modal dialog
        $("#login-modal").modal({
             backdrop:'static',
             keyboard:false                
         });
     });
     //remove the blur effect in the background
     $(".close").click(() => {
         console.log("modal clicked");
         if($(".content").hasClass("blur")){
             $(".content").removeClass("blur");
         }

     });

     //floating labels
     $("label.down").click(function(){
         $(this).next().focus();
     });

     $("input.form-control").focus(function(){
         $(this).prev().removeClass("down");
             $(this).prev().addClass("up");
         
     });
 
     $("input.form-control").blur(function(){                 
         if($(this).val() == ""){
             $(this).prev().removeClass("up");
             $(this).prev().addClass("down");
         }
         else{
             $(this).prev().addClass("up");
             $(this).prev().removeClass("down");
         }

     });

     //floating label end
     $("#phone").keyup(() => {
        if($("#phone").val() == ""){
            $(".otp-sent-msg").text("Please enter the phone number");
        }
        else{
            $(".otp-sent-msg").text("");
        }   
     });

     $(".get-otp-btn").click(() => {
         if($("#phone").val() == ""){
             $(".otp-sent-msg").text("Please enter the phone number");
         }
         else{
            $(".get-otp-spinner").removeClass("d-none");
            sendOTP()
         }         
        
    });
 });