 <div class="container-fluid" id="contact" style="margin-top:40px;">
 <h1 style="text-align:center; color:black;"><u><b> Contact Info </b></u></h1>
 	<div class="row" >
 		<div class="col-sm-5 col-xs-12" style="margin-top:60px;">
 			<p style="color:#b37700;font-size:17px;margin-left:80px;"> <span class="glyphicon glyphicon-phone"> &nbsp; </span> <b>+91-9876543210 </b></p>
				<p style="color:#b37700;font-size:17px;margin-left:80px;"> <span class="glyphicon glyphicon-phone"> &nbsp; </span><b>+91-9123456780 </b></p>
				<p style="color:#b37700;font-size:17px;margin-left:80px;"> <span class="glyphicon glyphicon-envelope"> &nbsp; </span><b> abcd@gmail.com </b></p>
				<p style="color:#b37700;font-size:17px;margin-left:80px;"> <span class="glyphicon glyphicon-home"> &nbsp; </span> <b> Lashkar Gwalior, Madhya Pradesh, INDIA </b></p>
				<p style="color:#b37700;margin-left:100px;font-size:17px;"> <b>Gwalior, Madhya Pradesh</b></p>
				<p style="color:#b37700;margin-left:100px;font-size:17px;"> <b>012345 </b></p><hr>
				<p style="color:#b37700;margin-left:100px;font-size:17px;"> <b>Mon - Sat : 10AM to 5PM </b></p>
				<p style="color:#b37700;margin-left:100px;font-size:17px;"> <b>Sunday By Appointement </b></p>
				<br>
				<a  data-toggle="modal" data-target="#myModal"><button class="btn btn-lg" style="margin-left:100px;background-color: #b37700;color:black">Inquiry</button></a>
 		</div>

 		<div class="col-sm-7 col-xs-12" style="margin-top:80px;">
 			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3579.4691731136677!2d78.16823131450556!3d26.21394079613253!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3976b771a042c3ab%3A0xef13ad0f47394b38!2sDigiMonk+-+Web+Development+%7C+Digital+Marketing+Institute+%26+Agency!5e0!3m2!1sen!2sin!4v1539682741454" width="90%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
 		</div>
 	</div>
 </div>



 <!-- Modal -->	
	<div class="modal fade" id="myModal" role="dialog">
	    <div class="modal-dialog modal-md">
	      <div class="modal-content">
	        <div class="modal-header" style="background-color:#b37700">
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	          <h4 class="modal-title" style="color:white;font-weight: bold;text-align: center;font-style: italic">Inquiry Now</h4>
	        </div>
	        <form method="POST" action="save-booking.php">
	        <div class="modal-body">
	        <label for="name"></label>
				<input type="text" class="form-control input-lg" placeholder="Enter Name" name="name"  required>
				
				<label for="email"></label>
				<input type="email"  class="form-control input-lg" placeholder="Enter Email" name="email"  required>

				<label for="subject"></label>
				<input type="text"  class="form-control input-lg" placeholder="Subject" name="contact"  required>

				<label for="textarea"></label>
				<input type="textarea"  class="form-control input-lg" placeholder="Your Message" name="email"  style=" height:120px;" required>

			 </div>

			  <div class="modal-footer">
				<button type="submit" name="save" class="btn btn-lg btn-warning" style="background-color:#b37700;">Submit</button>
	        </div>

	        </form>
	      </div>
	    </div>
	  </div>