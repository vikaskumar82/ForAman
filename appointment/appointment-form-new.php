<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link href="../css/bootstrap-4.2.1.css" rel="stylesheet">
<link href="./appointment.css?i=5" rel="stylesheet" type="text/css">
<script src="./js/form.js?i=20"></script>

<div id="successmessage" style="display:none" class="alert alert-success">
<h2 align="center">Thanks! Your details are successfully submitted.</h2></div>
   <form action="appointment-form-new.php" id="ft-form" method="POST" accept-charset="UTF-8">
     <h1>Make your appointment by filling this form and submitting it.</h1>
     Fields marked with an * are required
     <hr>

     <div class="row">
       <div class="col-sm-6">
                          <label>
                            First Name
                          </label>
                            <input type="text"  Name="fname"  id="fname" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                            <div class="validation"></div>

    </div>
    <div class="col-sm-6">       
                              <label>
                                Last Name
                              </label>
                                <input type="text" name="lname" id="lname"  placeholder="Your Last Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                                <div class="validation"></div>
    </div>
</div>
<div class="row">
       <div class="col-sm-12">
                            <label class="radio-inline">
      <input type="radio" name="patient" value="0" checked>&nbsp;&nbsp;New Patient    </label>&nbsp;&nbsp;
      <label class="radio-inline">
      <input type="radio" name="patient" value="1">&nbsp;&nbsp;Returning Patient    </label>&nbsp;&nbsp;<br><br>

                            </div>
</div>
<div class="row">
<div class="col-sm-6">
                            <label>
                              Email address
                                                          </label>
                             <input type="email" name="email" id="email"  placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email"  required>
                             <div class="validation"></div>

</div>
<div class="col-sm-6">
                            <label>
                              Phone number
                                                          </label>
                             <input type="tel"  name="phone" id="phone" placeholder="Your Number" data-rule="phone" data-msg="Please enter phone Number">
                             <div class="validation"></div>

                          </div>
</div>
<div class="row">
  <div class="col-sm-6">
                          <label>Appointment Request Date:</label>   
                          
                          <input type="date" name="Appointment request" onchange="showTimings(event);" required>
                            <div class="validation"></div>
                           

</div>

</div>
<div class="row">
                            <div id="scheduleTimings" class="col-sm-12" style="display:none">
                               <label> Schedule Request Time: (Chose one of the below slot to request.)</label><br>

  <?php
$timings = array("9AM-12PM", "12PM-3PM", "3PM-6PM");

foreach ($timings as $arr) {
    echo "&nbsp;<button type=button onclick=recordTimings(event) value=". $arr . " class='btn btn-primary'>" . $arr . "</button>";
}


?>
                            </div>
</div>
                            <div class="row">
                              <div class="col-sm-6">
                          <label>
                          Which of our services are you interested in:
                              <select name="reason" id="reasons" onchange="displayDivDemo('hideValuesOnSelect', this)">
                  <option value="0">Select Reason</option>
                 
 </select>
 <div class="validation"></div>
                          </label>
</div>
                           <!-- <div class="col-md-6">
                             <p> Confirmation requested by</p>
                            <label>
                              <input type="radio" name="Confirmation requested by" value="email" checked>
                              Email
                            </label>
                            <label>
                              <input type="radio" name="Confirmation requested by" value="phone">
                              Phone call 
                            </label>
                          </div> -->
                           </div>
                           <div class="row">
                              <div class="col-sm-12">
                           <p>Leave your comment here.</p>
                            		
                  <textarea class="form-control" name="comment" id="comment" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
</div>
</div>
                        <div class="btns">
                          <input type="text" name="_gotcha" value="" style="display:none;">
                          <button class="btn btn-primary" type="submit" value="Submit request" onclick="return SubmitAppointment();">Submit</button>
                        </div>
                      </form>


