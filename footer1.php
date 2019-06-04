<div class="container-fluid" id="footer" style="margin-top:40px;background-color:#0d0d0d;">
		
		<div class="row">
			
			<div class="col-md-4 col-xs-12"><br>
				<img src="image\a.png" height="50px" width="50px" style="margin-left:70px"><br><br>
				<h3 style="color:white;margin-top:20px;margin-left:60px;">Blog </h3>
				<br>
				<p style="color:#b37700;margin-left:60px;">PAINLESS ROOT CANAL TREATEMENT (RCT OR ROOT CANAL SURGERY) GWALIOR, MADHYA PRADESH, INDIA</p><br>
				 <span style="margin-left:60px;"><u>Details ></u></span>
			</div>
			
			<div class="col-md-4 col-xs-12">
		
				<p style="color:#b37700;margin-top:180px;margin-left:60px;">Best Dental Clinic for Dental Work or Teeth in Gwalior.</p>
				<span style="margin-left:60px;"><u>Details ></u></span>

			</div>
			
			<div class="col-md-4 col-xs-12"><br><br><br>
				<a href="about.php"><h4 style="color:#b37700;font-size:17px;float:right;margin-right:200px;"> About Us </h4></a>
				<a href="gallery.php"><h4 style="color:#b37700;font-size:17px;float:right;margin-right:200px;"> Gallery </h4></a>
				<a href="our_service.php"><h4 style="color:#b37700;font-size:17px;float:right;margin-right:200px;"> Services </h4></a>
				<a href="who_we_are.php"><h4 style="color:#b37700;font-size:17px;float:right;margin-right:200px;"> Who We Are </h4></a>
				<a href="why_us.php"><h4 style="color:#b37700;font-size:17px;float:right;margin-right:200px;"> Why Us </h4></a>
				<a href="specialist.php"><h4 style="color:#b37700;font-size:17px;float:right;margin-right:200px;"> Specialists </h4></a>
				<a href="testimonial.php"><h4 style="color:#b37700;font-size:17px;float:right;margin-right:200px;"> Testimonial </h4></a>
				
				<a data-toggle="modal" data-target="#myModal1">
				<h4 style="color:#b37700;font-size:17px;float:right;margin-right:200px;cursor: pointer"> Careers </h4>
				</a>
				 <!-- Modal -->	
				<div class="modal fade" id="myModal1" role="dialog">
				    <div class="modal-dialog modal-md">
				      <div class="modal-content" style="background-color: #b37700;">
				        <div class="modal-header">
				          <button type="button" class="close" data-dismiss="modal">&times;</button>
				          <h4 class="modal-title" style="font-weight: bold;">Career</h4>
				        </div>
				        <div class="modal-body">
				        	<h4 style="color:#006080;">Learn about the dental procedure we offer in <a href="#service" style="color:orange">our services </a> : </h4>
				        	<ul>
				        		<li>Crown & Bridges</li>
				        		<li>Dental Implants</li>
				        		<li>Dental Cleaning & Consultation </li>
				        		<li>Composite Filling</li>
				        		<li>Amalgam Filling</li>
				        		<li>Dental Sealents</li>
				        		<li>Tooth Extraction</li>
				        		<li>Root Canals</li>
				        		<li>Denture</li>
				        		<li>Partial Denture</li>
				        		<li>Braces</li>
				        	</ul>
						</div>
				        <div class="modal-footer">
				      	 	<p>You can check in our <a id="one"> Services </a> what you can choose to make our future in dentistry.</p> 
				        </div>
				      </div>
				    </div>
				</div>

			 	<a data-toggle="modal" data-target="#myModal2"><h4 style="cursor: pointer;color:#b37700;font-size:17px;float:right;margin-right:200px;"> Privacy </h4></a>
				 <!-- Modal -->	
				<div class="modal fade" id="myModal2" role="dialog">
				    <div class="modal-dialog modal-md">
				      <div class="modal-content">
				        <div class="modal-header">
				          <button type="button" class="close" data-dismiss="modal">&times;</button>
				          <h4 class="modal-title">Privacy</h4>
				        </div>
				        <div class="modal-body">
				        	No privacy yet
						</div>
				        <div class="modal-footer">
				      	 	
				        </div>
				      </div>
				    </div>
				</div>
			</div>
		
		</div>
		<br><br>
</div>

			<center>
				<div class="container-fluid" style="background-color: black;">
					<p class="h4">Brij Dental Clinic & Implant Service - All right reserved 2019, Develope by Phonix Web Solution</p>
				</div>
			</center>
			


	

<script>
$(document).ready(function(){
 
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {


    event.preventDefault();

    var hash = this.hash;

    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 900, function(){
   
      window.location.hash = hash;
    });
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("uper");
        }
    });
  });
})
</script>

<script type="text/javascript">
	$(document).ready(function()
		{
			$('#one').click(function(){
				$('#two').slidetoggle();
			});
		});
</script>
	</body>
</html>