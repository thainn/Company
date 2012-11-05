/***************************/
//@Author: Adrian "yEnS" Mato Gondelle & Ivan Guardado Castro
//@website: www.yensdesign.com
//@email: yensamg@gmail.com
//@license: Feel free to use it, but keep this credits please!					
/***************************/

$(document).ready(function(){
	//global vars
	var form = $("#customForm");
	var fullname = $("#fullname");
	var fullnameInfo = $("#fullnameInfo");
	var email = $("#email");
	var emailInfo = $("#emailInfo");
	var phone = $("#phone");
	var phoneInfo = $("#phoneInfo");
	var year = $("#year");
	var yearInfo = $("#yearInfo");
	var message = $("#message");
	var messageInfo = $("#messageInfo");
	//On blur
	fullname.blur(validateFullName);
	email.blur(validateEmail);
	phone.blur(validatephone);
	year.blur(validateyear);
        
        message.blur(validateMessageOn);
        
      //  message.blur(validateMessageOn);
        
	//On key press
	fullname.keyup(validateFullName);
        email.blur(validateEmail);
	phone.keyup(validatephone);
	year.keyup(validateyear);
        message.keyup(validateyear);
	//message.keyup(validateMessageOn);
        
	//On Submitting
	form.submit(function(){
		if( validateFullName() &  validatephone() & validateyear() & validateEmail() & validateMessageOn() )
			return true
		else
			return false;
	});
        
        
        
        
	//validation functions
	function validateEmail(){
		//testing regular expression
		var a = $("#email").val();
		var filter = /^[a-zA-Z0-9]+[a-zA-Z0-9_.-]+[a-zA-Z0-9_-]+@[a-zA-Z0-9]+[a-zA-Z0-9.-]+[a-zA-Z0-9]+.[a-z]{2,4}$/;
		//if it's valid email
		if(filter.test(a)){
			email.removeClass("error");
			emailInfo.text("");
			emailInfo.removeClass("error");
			return true;
		}
		//if it's NOT valid
		else{
			email.addClass("error");
			emailInfo.text("Không Đúng định dạng Email");
			emailInfo.addClass("error");
			return false;
		}
	}
	function validateFullName(){
		//if it's NOT valid
		if(fullname.val().length < 4){
			fullname.addClass("error");
			fullnameInfo.text("Họ tên phải ít nhất 5 kí tự");
			fullnameInfo.addClass("error");
                       validateMessage();
			return false;
		}
              
		//if it's valid
		else{
			fullname.removeClass("error");
			fullnameInfo.text("");
			fullnameInfo.removeClass("error");
                         validateMessage();
			return true;
		}
	}
	function validatephone(){
            
		var a = $("#phone").val();
               var number= /^-?(?:\d+|\d{1,3}(?:,\d{3})+)(?:\.\d+)?$/;
		if(phone.val().length <8){
			phone.addClass("error");
			phoneInfo.text("Phone ít nhất 9 kí tự");
			phoneInfo.addClass("error");
			return false;
		}
                else  if(number.test(a)){
                   phone.addClass("error");
			phoneInfo.text("");
			phoneInfo.addClass("error");
			return false;
                }
                
		
		else{			
			phone.removeClass("error");
			phoneInfo.text("Phone chứa toàn kí tự số");
			phoneInfo.removeClass("error");
			return true;
		}
	}
	function validateyear(){
            
		var a = $("#year").val();
		 var number= /^-?(?:\d+|\d{1,3}(?:,\d{3})+)(?:\.\d+)?$/;
                   validateMessageOn();
                   if(number.test(a))
                            {
                            phone.addClass("error");
                            yearInfo.text("");
                            yearInfo.addClass("error");
                          //  return true;
                            }
                            else
                             {
                            phone.addClass("error");
                            yearInfo.text("Năm Sinh chứa toàn kí tự số");
                            yearInfo.addClass("error");
                             return false;
                             }
                    if(year.val().length >4){
			year.addClass("error");
			yearInfo.text("Year tối đa là 4 kí tự");
			yearInfo.addClass("error");
			return false;
                    }
                        else{
                                year.removeClass("error");
                                yearInfo.text("");
                                yearInfo.removeClass("error");
                         if(year.val().length <4){
			year.addClass("error");
			yearInfo.text("Year  ít là 4 kí tự");
			yearInfo.addClass("error");
			return false;
                    }
                    else
                        {
                                year.removeClass("error");
                                yearInfo.text("");
                                yearInfo.removeClass("error");
                               
                        }
                      
                       return true;
                       
               
		
	}
	
        
        function validateMessageOn(){
		//if it's NOT valid
		 if(message.val().length <10){
		
			//message.addClass("error");
                       messageInfo.text("message phải ít nhất 10 kí tự");
			//messageInfo.addClass("error");
			return false;
		}
		else{
			//message.removeClass("error");
			messageInfo.text("");
			//messageInfo.removeClass("error");
			return true;
		}
	}
        
        
        }
});