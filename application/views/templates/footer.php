</div><!--container-->
<footer class="footer">
<div class="container">
<div class="row">
	<div class="col-sm-3">
	    <h3>Who we are</h3>
		<p align="justify">A toolkit - for people who build web sites using PHP.
		Its goal is to enable you to develop projects much faster than you could if you were writing code
		from scratch, by providing a rich set of libraries for commonly needed tasks, as well as a simple interface and
		logical structure to access these libraries. CodeIgniter lets you creatively focus on your project by
		minimizing the amount of code needed for a given task.</p>
   	</div>
	<div class="col-sm-3">
	    <h3>Latest News</h3>
		<p>Site is created,designed and developed by Dharmvir Patel.</br>All rights are reserved.</br>Thanks for the visit.</p>
	</div>
	<div class="col-sm-3">
	<h3>Quick Links</h3>
       <div>
		  <ul class="nav navbar-nav">
			<li><a href="#">Home</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">News</a></li> 
			<li><a href="#">Create News</a></li> 
		  </ul>
     </div>
	</div>
	<div class="col-sm-3">
	<h3>Contact Us</h3>
        <?php 
		 $attributes = array('class' => 'contact-form', 'id' => 'myform');
         echo form_open('email/send', $attributes); 		 
		 $name_input = array(
              'name'        => 'username',
              'id'          => 'username',
              'value'       => 'Name',
              'maxlength'   => '100',
              'size'        => '50',
              'class'       => 'form-control',
            );

          echo'<div class="form-group">'.form_input($name_input).'</div>';
		  $email_input = array(
              'name'        => 'email',
              'id'          => 'email',
              'value'       => 'Email',
              'maxlength'   => '100',
              'size'        => '50',
              'class'       => 'form-control',
            );

          echo'<div class="form-group">'.form_input($email_input).'</div>';
		   $message_input = array(
			  'name'        => 'txt_area',
			  'id'          => 'txt_area',
			  'value'       => 'Message',
			  'rows'        => '2',
			  'cols'        => '10',
			  'class'       => 'form-control',
			);
		
		  echo '<div class="form-group">'.form_textarea($message_input).'</div>';
		  echo '<div class="form-group">'.form_submit('mysubmit', 'Submit', "class='form-control'").'</div>';
          echo form_close();
        ?>
	</div>
</div>
</div>
</footer>
<div class="footer-bottom">
	<div class="container">
   		<div class="row">
   			<div class="col-md-6"><p><strong>Copyright &copy; 2014-15 <a href="#">MVC Site.</a></strong></p></div>
			<div class="col-md-6 text-right"><a href="#">Privacy Policy</a> | <a href="#">Terms and Conditions</a></div>
 		</div>
	</div>
</div>
</body>
</html>