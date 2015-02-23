<?php
  include('generator.php');
  generate_header();
?>
  
  <!-- Jumbotron -->
	<div class="jumbotron nhp-header contact-header">
	  <h1>Contact Us</h1>
    <p>We love our customers. Whether you have a question, general inquiry, or partnership <br> proposal, we’re always more than happy to help you out.</p>
	  <div class="container">
	    <form action="mysql-admin/add-submission.php" method="post">
	      <div class="row">
	        <div class="col-md-3">
	          <input type="text" class="form-control" name="name" id="messageName" placeholder="Name">
	        </div>
	        <div class="col-md-3">
	          <select class="form-control" name="inquiry">
	            <option value="General Inquiry">General Inquiry</option>
	            <option value="Partnership">Partnership</option>
	            <option value="Support">Support</option>
	            <option value="Other">Other</option>
	          </select>
	        </div>
	      </div>
	      <div class="row">
	        <div class="col-md-6">
	          <?php if($page_error==='contact_no_info'){ ?><p>Please include a message to send.</p><?php } ?>
	          <textarea class="form-control" name="text" rows="12" placeholder="Enter your message here - we’d love to help!" required></textarea>
	        </div>
	      </div>
	      <div class="row">
	        <div class="col-md-2 col-md-offset-4">
	          <button type="submit" class="btn btn-success btn-lg form-control" role="button">Send Message</button>
	        </div>
	      </div>
	    </form>
		    
		</div>
	</div><!--/Jumbotron -->
    
<?php generate_footer(); ?>
