<!-- Contact Us -->
<section id="contact" class="bg-light" style="background-image: url(images/background01.png); background-attachment: fixed; background-repeat: no-repeat; background-size: cover;">
	<div class="container">
		<div class="text-center">
			<h6 class="text-primary mb-0 fw-normal">Find Me</h6>
			<h1 class="text-uppercase text-dark mb-5 " >contact me now</h1>
		</div> 
		<form class="row" name="contactForm" onsubmit="if(confirm('Do You Want To Submit This ?')){ if(myValidation() == false) {return false;} } else{event.preventDefault(); return false; }">
			<div class="col-sm-6" >
				<div class="form-group mb-2">
					<input class="form-control bg-transparent border-dark" type="text" name="name" placeholder="Enter Your Name" onfocus="Focus(this)"> 
					<span id="nameError"></span>
				</div>
				<div class="form-group mb-2">
					<input class="form-control bg-transparent border-dark"  type="email" name="email" placeholder="Enter Your Email" onfocus="Focus(this)"> 
					<span id="emailError"></span>
				</div>
				<div class="form-group mb-2">
					<input class="form-control bg-transparent border-dark"  type="text" name="phone"  placeholder="Enter Your Number" onfocus="Focus(this)">
					<span id="phoneError"></span>
				</div> 
			</div>
			<div class="col-sm-6">
				<div class="form-group">
					<textarea class="form-control bg-transparent border-dark" rows="5"  name="message" placeholder="Type Your Message" onfocus="Focus(this)"></textarea>
					<span id="messageError"></span>
				</div>
			</div>
			<div class="my-3 text-center w-100">
				<button type="submit" class="btn btn-lg btn-primary " id="sub-btn">submit</button>
			</div>
		</form>
		<!-- address -->
		<div class="row mt-5 text-center text-white" id="address">
			<div class="col-sm-4 col-">
				<h1 class="text-primary mb-3 " ><i class="far fa-map"></i></h1>
				<p class="text-black">Address <br> Jatrabari Dhaka</p>
			</div>
			<div class="col-sm-4 col-6">
				<h1 class="text-primary mb-3 " ><i class="far fa-envelope"></i></h1>
				<p class="text-black">Email <br> alamin@gmail.com</p>
			</div>
			<div class="col-sm-4 col-6">
				<h1 class="text-primary mb-3 " ><i class="fas fa-mobile-alt"></i></h1> 
				<p class="text-black">Phone <br> 01575136768</p>
			</div>
		</div>
	</div>
</section>