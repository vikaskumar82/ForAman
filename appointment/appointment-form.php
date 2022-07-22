<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link href="../css/bootstrap-4.2.1.css" rel="stylesheet">
<link href="./appointment.css" rel="stylesheet" type="text/css">
<script src="./js/form.js"></script>

<setion>
  <div class="row" style="background-color:#25a79f">
    <div class="col-md-3"></div>
     <div class="col-md-6"  style="background-color:#fff; padding:20px; margin:20px">
     <h1><img src="img/log.png">Check your Appointment Here</h1>
     <hr>
   <form action="appointment-form.php" id="ft-form" method="POST" accept-charset="UTF-8">
                        <fieldset>
                            <div class="two-cols">
                          <label>
                            First Name
                            <input type="text"  Name="fname"  id="fname" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                            <div class="validation"></div>
                          </label>
                          <label>
                            Last Name
                            <input type="text" name="lname" id="lname"  placeholder="Your Last Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required>
                            <div class="validation"></div>
                          </label>
                            </div>
                             <div class="inline">
                            <label class="radio-inline">
      <input type="radio" name="patient" value="0" checked>&nbsp;&nbsp;New Patient    </label>&nbsp;&nbsp;
      <label class="radio-inline">
      <input type="radio" name="patient" value="1">&nbsp;&nbsp;Returning Patient    </label>&nbsp;&nbsp;<br><br>

                            </div>
                          <div class="two-cols">
                            <label>
                              Email address
                             <input type="email" name="email" id="email"  placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email"  required>
                             <div class="validation"></div>
                            </label>
                            <label>
                              Phone number
                             <input type="tel"  name="phone" id="phone" placeholder="Your Number" data-rule="phone" data-msg="Please enter phone Number">
                             <div class="validation"></div>
                            </label>
                          </div>
                          <div class="two-cols">
                           <label>    
                          <legend>Appointment request</legend>                    
                            <input type="date" name="Appointment request" onchange="showTimings(event);" required>
                            <div class="validation"></div>
                            <div style="width:300px; height:200px; margin-left:20px">
                         
                           </div>
                            </label>
                            <div id="scheduleTimings" style="display:none">
                               <legend> Schedule Timings</legend>
                              <table cellpadding="10" cellspacing="10" width="30%" class="td1">
                                  <tr>
                                    <!--<td><a href="javascript: selectTime(this)">09:00</a></td>-->
                                
                                  <td>
                                      <button type="button" onclick="showTimings('09:30');" class="btn btn-secondary" disabled>10:30</button>
                                      <a href="javascript:recordTimings('09:30')">09:30</a>
                                      <input onclick="showTimings("09:30");" type="text" name="time0" id="time0"  placeholder="09:30" style="width:100px;  background-color:#52c5fa; border-radius:10px; border:thin solid #000"></td>
                                    <td><input type="text" name="time2" id="time1"  placeholder="01:30" disabled style="width:100px; background-color:#ccc; border-radius:10px; border:thin solid #000"></td>
                                  </tr>
                                  <tr>
                                  <td><input type="text" name="time1" id="time1"  placeholder="10:30" disabled style="width:100px; background-color:#52c5fa; border-radius:10px; border:thin solid #000"></td>
                                  <td><input type="text" name="time2" id="time2"  placeholder="02:30" disabled style="width:100px; background-color:#52c5fa; border-radius:10px; border:thin solid #000"></td>
                                </tr>
                                  <tr>
                                    <td><input type="text" name="time3" id="time3"  placeholder="11:30" disabled style="width:100px; background-color:#ccc; border-radius:10px; border:thin solid #000"></td>
                                  </td><td><input type="text" name="time4" id="time4"  placeholder="03:30" disabled style="width:100px; background-color:#52c5fa; border-radius:10px; border:thin solid #000"></td></tr>
                                  <tr><td><input type="text" name="time5" id="time5"  placeholder="12:30" disabled style="width:100px; background-color:#ccc; border-radius:10px; border:thin solid #000"></td>
                                </td><td><input type="text" name="time6" id="time6"  placeholder="04:30" disabled style="width:100px; background-color:#52c5fa; border-radius:10px; border:thin solid #000"></td></tr>
                              </table>
                            </div>
                            </div>
                            <div class="two-cols">
                          <label>
                          Which of our services are you interested in:
<select name="reason" id="reasons" onchange="displayDivDemo('hideValuesOnSelect', this)">
                  <option value="0">Select Reason</option>
                  
 </select>
                    <div id="hideValuesOnSelect"><textarea class="form-control" name="reason-other" id="reason-other" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea></div>
                 </div>
                 
 <div class="validation"></div>
                          </label>
                           <div class="inline">
                             <p> Confirmation requested by</p>
                            <label>
                              <input type="radio" name="Confirmation requested by" value="email" checked>
                              Email
                            </label>
                            <label>
                              <input type="radio" name="Confirmation requested by" value="phone">
                              Phone call 
                            </label>
                          </div>
                           </div>
                           <div class="inline">
                           <p>Leave your comment here.</p>
                            		
                  <textarea class="form-control" name="comment" id="comment" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>

                        </fieldset>
                        <div class="btns">
                          <input type="text" name="_gotcha" value="" style="display:none;">
                          <input type="submit" value="Submit request">
                        </div>
                      </form>


</div>
<div class="col-md-3"></div>
</div>
</section>
