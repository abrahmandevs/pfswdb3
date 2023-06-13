function myValidation(){
	var name = document.forms['contactForm']['name'].value;
	var email = document.forms['contactForm']['email'].value;
	var phone = document.forms['contactForm']['phone'].value;
	var massage = document.forms['contactForm']['massage'].value;
				
	var error =[];
	if(name =='' || name.length <3){
		error[0]="Name must be at least 3 letters";
		document.getElementById('name-error').innerHTML = error[0];
	} else{
		document.getElementById('name-error').innerHTML = '';
	}
	if(email =='' || email.length <10){
		error[1]="Please Insert a Valid Email";
		document.getElementById('email-error').innerHTML = error[1];
	} else{
		document.getElementById('email-error').innerHTML = '';
	}
	if(phone =='' || phone.length <11 ){
		error[2]="Please insert a valid phone number";
		document.getElementById('phone-error').innerHTML = error[2];
	} else{
		document.getElementById('phone-error').innerHTML = '';
	}
	if(massage =='' || massage.length >150){
		error[3]="Massage Should be in 150 Letters";
		document.getElementById('massage-error').innerHTML = error[3];
	} else{
		document.getElementById('massage-error').innerHTML = '';
	}	
	if(error.length > 0){
		return false;
	}
	}
	function myFocus(x){
		x.style.background= "#ffffffd1";
	}
	function key(x){
		x.value = x.value.toUpperCase();
	}
	function upper(changeFont){
		changeFont.style.textTransform='capitalize';
	}
	function targeLength(x){
		var countLength=x.value.length;
		document.getElementById('showlength').innerHTML=countLength+'/150';
	}	
		

/* ========JQuery Strat========= */

$(document).ready(function(){
	/* ===== Menubar Active Start ===== */
	$('#main-menu').on('click', 'li',function(){
		$('#main-menu li.active').removeClass('active');
		$(this).addClass('active')
	});
	
	/* ===== Menubar Start ===== */
	$('#mobile-icon').click(function(){
		$('#main-menu ul').slideToggle(1000);
	});
	$(window).resize(function(){
		if($(window).width()> 375){
			$('#main-menu ul').show();
		}else{
			$('#main-menu ul').hide();
		}
	});
	/* ===== Upper Button Scroll Start ===== */
	$(window).scroll(function(){
		var x = $(window).scrollTop();
		if(x> 1100){
			$('#upper').fadeIn(1000);
		}else{
			$('#upper').fadeOut(1000);
		}	
	});
	$('#upper').click(function(){
		$('html').animate({scrollTop:0},1500);
	});
});