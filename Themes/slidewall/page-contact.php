<?php get_header(); ?>


<div id="tooplate_middle_subpage">
  <h2>Contact Us</h2>
  <p>Suspendisse eu nibh ipsum, vitae lacinia urna. Fusce vulputate venenatis ipsum a euismod. Praesent quis metus turpis. <a href="#">Proin tempor augue</a> non massa malesuada consectetur. Suspendisse feugiat elementum faucibus. Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow"><strong>XHTML</strong></a> and <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow"><strong>CSS</strong></a>.</p>
</div>
<div id="tooplate_main">
  <div class="col_w960 col_w960_last">
    <div class="col_w450 float_l">
      <div id="cp_contact_form"  ng-controller="validateCtrl"  ng-app="myApp">
        <h3>Contact Form</h3>
        <form   name="myForm" ng-submit="submitForm(myForm.$valid)" novalidate>
          <p>Username:<span style="color:red" ng-show="myForm.user.$dirty && myForm.user.$invalid"> 
            <span class="errormsg" ng-show="myForm.user.$error.required && !myForm.user.$pristine">Username is required.</span> </span><br> 
            <input type="text" name="user" ng-model="user" class="input_field" required>
            </p>
          
          <p>Email:<span style="color:red" ng-show="myForm.email.$dirty && myForm.email.$invalid">
            <span class="errormsg" ng-show="myForm.email.$error.required && !myForm.email.$pristine">Email is required.</span> 
            <span class="errormsg" ng-show="myForm.email.$error.email">Invalid email address.</span> </span><br>
            <input type="email" name="email" ng-model="email" class="input_field" required>
             </p>
          
     	<p>Subject:<br>
           <input type="text" name="subject" class="input_field" ng-model="subject" >
        </p>    
       <p>Message:<span style="color:red" ng-show="myForm.message.$dirty && myForm.message.$invalid"> 
        <span class="errormsg" ng-show="myForm.message.$error.required && !myForm.message.$pristine">Message is required.</span> </span><br>
       <textarea type='text' name="message" ng-model="message" required ></textarea>
        
       </p>
       
       <p>
       <input type="submit" class="submit_btn float_l" ng-disabled="myForm.user.$dirty && myForm.user.$invalid || myForm.email.$dirty && myForm.email.$invalid || myForm.message.$dirty && myForm.message.$invalid ">
       </p>
       
        </form>

      </div>
    </div>
    <div class="col_w450 float_r" id="map">
      <h3>Where We Are</h3>
      <iframe class="mapframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3319.292969050496!2d72.98286369999997!3d33.701367299999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38dfbdd018ddbc7b%3A0x27b6963425e271!2sStreet+33%2C+Islamabad%2C+Pakistan!5e0!3m2!1sen!2s!4v1439381379103" width="300" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
      <div class="cleaner h30"></div>
      <h3>Our Address</h3>
      <h5>Digital Studio</h5>
      220-660 Sed pretium urna,<br />
      Nam rhoncus urna at nisi 10200<br />
      Aliquam malesuada<br />
      <br />
      Tel: 050-020-1050<br />
      Fax: 060-010-2040<br />
    </div>
    <div class="cleaner"></div>
  </div>
  <div class="cleaner"></div>
</div>
<!-- end of main -->

<?php get_footer(); ?>
