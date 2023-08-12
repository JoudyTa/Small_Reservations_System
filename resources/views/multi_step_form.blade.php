 @extends('layouts.app')

 @section('content')
     <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <h1>Multi-Step Form</h1>
                 <form method="post" action="{{ route('submit_form') }}" enctype="multipart/form-data">
                     @csrf
                     <!--Section 1  -->
                     <div class="section" id="section1">
                         <h3>Please enter your mobile number</h3>
                         <!-- FOR PHONE NUMBER -->
                         <div class="form-group">
                             <label for="dob">Phone Number</label>
                             <select id="country_code" class="form-control number" name="country_code" required>
                                 <option value="+1">+1 (USA)</option>
                                 <option value="+44">+44 (UK)</option>
                                 <option value="+33">+33 (France)</option>
                             </select>
                             <div id="new">
                             </div>
                             <input name="number2" type="text" id="number2" class="form-control">
                             <input type="hidden" id="number" name="number" class="form-control">
                             <script>
                                 function start() {
                                     let num1 = document.getElementById('country_code').value;
                                     let num2 = document.getElementById('number2').value;
                                     let num = num1 + num2;
                                     document.getElementById('number').value = num;
                                     console.log(num);
                                 }
                             </script>
                         </div>
                         <br>
                         <!-- FOR OTP -->
                         <div class="form-group">
                             <label for="otp">OTP</label>
                             <input type="text" class="form-control" id="otp" name="otp" maxlength="4">
                         </div>
                         <br>
                         <button type="button" class="next btn btn-primary" onclick="start()">Next</button>

                     </div>
                     <!-- SECTION 2 -->
                     <div class="section" id="section2">
                         <h3>Please fill below information per to passport</h3>
                         <!-- FIRST NAME -->
                         <div class="form-group">
                             <label class="first_name">First Name </label>
                             <input type="text" class="form-control" id="first_name" name="first_name" lang="en"
                                 required title="Please enter only English letters">
                         </div>
                         <!-- LAST NAME -->
                         <div class="form-group">
                             <label for="last_name">Last Name </label>
                             <input type="text" class="form-control" id="last_name" name="last_name" lang="en"
                                 required pattern="[^\u0600-\u06FF]+" title="Please enter only English letters">
                         </div>
                         <!-- DATE OF BIRTH -->
                         <div class="form-group">
                             <label for="dob">Date of Birth</label>
                             <input type="date" id="dob" class="form-control" name="dob"
                                 max="<?php echo date('Y-m-d'); ?>" required>
                         </div>
                         <!-- GENDER -->
                         <div>
                             <label for="gender">Gender</label>
                             <select id="gender" name="gender" class="form-control" required>
                                 <option value=1>Male</option>
                                 <option value=2>Female</option>
                             </select>
                             <br>
                         </div>
                         <!-- PLACE BIRTH -->
                         <div>
                             <label for="place_birth">Place of Birth</label>
                             <select id="place_birth" name="place_birth" class="form-control" required>
                                 <option value="usa">United States</option>
                                 <option value="uk">United Kingdom</option>
                                 <option value="canada">Canada</option>
                             </select>
                             <br>
                         </div>
                         <!-- country_residency -->
                         <div>
                             <label for="country_residency">Country of Residency</label>
                             <select id="country_residency" class="form-control" name="country_residency" required>
                                 <option value=1>United States</option>
                                 <option value=2>United Kingdom</option>
                                 <option value=3>Canada</option>
                             </select>
                         </div>
                         <!-- Passport Number -->
                         <div>
                             <label for="passport_no">Passport Number</label>
                             <input type="text" id="passport_no" class="form-control" name="passport_no" minlength="6"
                                 required>
                         </div>
                         <!-- Issue Date -->
                         <div>
                             <label for="issue_date">Passport Issue Date</label>
                             <input type="date" id="issue_date" class="form-control" name="issue_date"
                                 max="<?php echo date('Y-m-d'); ?>" required>
                             <br>
                         </div>
                         <!-- Expiry Date -->
                         <div>
                             <label for="expiry_date">Passport Expiry Date</label>
                             <input type="date" id="expiry_date" class="form-control" name="expiry_date"
                                 min="<?php echo date('Y-m-d'); ?>" required>
                             <br>
                         </div>
                         <!-- place_issue-->
                         <div>
                             <label for="place_issue">Passport Place of Issue</label>
                             <select id="place_issue" class="form-control" name="place_issue" required>
                                 <option value=1>United States</option>
                                 <option value=2>United Kingdom</option>
                                 <option value=3>Canada</option>
                             </select>
                             <br>
                         </div>
                         <!-- arrival_date -->
                         <div>
                             <label for="arrival_date">Arrival Date</label>
                             <input type="date" id="arrival_date" class="form-control" name="arrival_date"
                                 min="<?php echo date('Y-m-d'); ?>" required>
                             <br>
                         </div>
                         <!--  profession-->
                         <div>
                             <label for="profession">Profession</label>
                             <input type="text" id="profession" class="form-control" name="profession">
                             <br>
                         </div>
                         <!-- organization -->
                         <div>
                             <label for="organization">Organization</label>
                             <input type="text" id="organization" class="form-control" name="organization">
                             <br>
                         </div>
                         <!-- visa_duration -->
                         <div>
                             <label for="visa_duration">Visa Duration (Days)</label>
                             <input type="number" id="visa_duration" class="form-control" name="visa_duration"
                                 min="1" max="90" required>
                             <br>
                         </div>
                         <!--  -->
                         <div>
                             <label for="visa_status_id">Visa status</label>
                             <select id="visa_status_id" class="form-control" name="visa_status_id" required>
                                 <option value=1>Single</option>
                                 <option value=2>Multiple</option>
                             </select>
                             <br>
                         </div>
                         <!-- passport_picture -->
                         <div>
                             <label for="passport_picture">Passport picture </label>
                             <input type="file" id="passport_picture" class="form-control" name="passport_picture"
                                 required>
                             <br>
                         </div>
                         <!-- personal_picture -->
                         <div>
                             <label for="personal_picture">Personal picture </label>
                             <input type="file" id="personal_picture" class="form-control" method="post"
                                 name="personal_picture" required>
                             <br>
                         </div>
                         <!--options -->
                         <div>
                             <strong> Are you Traveling with companion? </strong>
                             <br>
                             <label for="options">Choose an option</label>
                             <select id="options" class="form-control" name="options" required>
                                 <option value=0 selected>NO </option>
                                 <option value=1>Yes</option>
                             </select>
                             <br>
                             <div id="additional_fields" style="display: none;">
                                 <!-- first_name2 -->
                                 <div class="form-group">
                                     <label class="first_name2">First Name </label>
                                     <input type="text" class="form-control" id="first_name2" name="first_name2"
                                         lang="en">
                                 </div>
                                 <!-- last_name2 -->
                                 <div class="form-group2">
                                     <label for="last_name2">Last Name </label>
                                     <input type="text" class="form-control" id="last_name2" name="last_name2"
                                         lang="en">
                                 </div>
                                 <!-- dob2 -->
                                 <div class="form-group">
                                     <label for="dob2">Date of Birth</label>
                                     <input type="date" id="dob2" class="form-control" name="dob2"
                                         max="<?php echo date('Y-m-d'); ?>">
                                 </div>
                                 <!-- gender2 -->
                                 <div>
                                     <label for="gender2">Gender:</label>
                                     <select id="gender2" name="gender2" class="form-control">
                                         <option value="male">Male</option>
                                         <option value="female">Female</option>
                                     </select>
                                     <br>
                                 </div>
                                 <!-- place_birth2 -->
                                 <div>
                                     <label for="place_birth2">Place of Birth:</label>
                                     <select id="place_birth2" name="place_birth2" class="form-control">
                                         <option value="usa">United States</option>
                                         <option value="uk">United Kingdom</option>
                                         <option value="canada">Canada</option>
                                         <!-- add more options for other countries -->
                                     </select>
                                     <br>
                                 </div>
                                 <!-- country_residency2 -->
                                 <div>
                                     <label for="country_residency2">Country of Residency:</label>
                                     <select id="country_residency2" class="form-control" name="country_residency2">
                                         <option value="usa">United States</option>
                                         <option value="uk">United Kingdom</option>
                                         <option value="canada">Canada</option>
                                     </select>
                                     <br>

                                 </div>
                                 <!--  -->
                                 <div>
                                     <label for="passport_no2">Passport Number</label>
                                     <input type="text" id="passport_no2" class="form-control" name="passport_no2"
                                         minlength="6">
                                     <br>
                                 </div>
                                 <!-- issue_date2 -->
                                 <div>
                                     <label for="issue_date2">Passport Issue Date</label>
                                     <input type="date" id="issue_date2" class="form-control" name="issue_date2"
                                         max="<?php echo date('Y-m-d'); ?>">
                                     <br>
                                 </div>
                                 <!-- expiry_date2 -->
                                 <div>
                                     <label for="expiry_date2">Passport Expiry Date</label>
                                     <input type="date" id="expiry_date2" class="form-control" name="expiry_date2"
                                         min="<?php echo date('Y-m-d'); ?>">
                                     <br>
                                 </div>
                                 <!-- place_issue2 -->
                                 <div>
                                     <label for="place_issue2">Passport Place of Issue</label>
                                     <select id="place_issue2" class="form-control" name="place_issue2">
                                         <option value="usa">United States</option>
                                         <option value="uk">United Kingdom</option>
                                         <option value="canada">Canada</option>
                                         <!-- add more options for other countries -->
                                     </select>
                                     <br>
                                 </div>
                                 <!-- arrival_date2 -->
                                 <div>
                                     <label for="arrival_date2">Arrival Date</label>
                                     <input type="date" id="arrival_date2" class="form-control" name="arrival_date2"
                                         min="<?php echo date('Y-m-d'); ?>">
                                     <br>
                                 </div>
                                 <!-- profession2 -->
                                 <div>
                                     <label for="profession2">Profession:</label>
                                     <input type="text" id="profession2" class="form-control" name="profession2">
                                     <br>
                                 </div>
                                 <!-- organization2 -->
                                 <div>
                                     <label for="organization2">Organization</label>
                                     <input type="text" id="organization2" class="form-control" name="organization2">
                                     <br>
                                 </div>
                                 <!-- visa_duration2 -->
                                 <div>
                                     <label for="visa_duration2">Visa Duration (Days):</label>
                                     <input type="number" id="visa_duration2" class="form-control"
                                         name="visa_duration2" min="1" max="90">
                                     <br>
                                 </div>
                                 <!-- passport_picture2 -->
                                 <div>
                                     <label for="passport_picture2">Passport picture </label>
                                     <input type="file" id="passport_picture2" class="form-control"
                                         name="passport_picture2">
                                     <br>
                                 </div>
                                 <!-- personal_picture2 -->
                                 <div>
                                     <label for="personal_picture2">Personal picture </label>
                                     <input type="file" id="personal_picture2" class="form-control"
                                         name="personal_picture2">
                                     <br>
                                 </div>
                             </div>
                             <br>
                             <button type="button" class="previous btn btn-secondary">Previous</button>
                             <button type="button" class="next btn btn-primary">Next</button>
                         </div>
                         <!--  -->
                     </div>
                     <!--SECTION 3 -->
                     <div class="section" id="section3">
                         <h3>Please chose your accommodation preference as you are eligible for (5-night) </h3>
                         <!-- -	Check in date  -->
                         <div>
                             <label for="Check_in_date">Check in Date</label>
                             <input type="date" id="Check_in_date" class="form-control" name="Check_in_date"
                                 min="<?php echo date('Y-m-d'); ?>" required>
                             <br>
                         </div>
                         <!---Check out date   -->
                         <div>
                             <label for="Check_out_date">Check out Date</label>
                             <input type="date" id="Check_out_date" class="form-control" name="Check_out_date">
                             <br>
                         </div>
                         <!-- Rom_type -->
                         <div>
                             <label for="Rom_type ">Rom Type</label>
                             <select id="Rom_type" name="Rom_type" class="form-control" required>
                                 <option value=1>king bed</option>
                                 <option value=2>twin bed</option>
                             </select>
                             <br>
                         </div>
                         <!-- BUTTON -->
                         <button type="button" class="previous btn btn-secondary">Previous</button>
                         <!-- <button type="button" class="next btn btn-primary" onclick='show()'>Next</button> -->
                         <button type="button" class="next btn btn-primary" onclick='showData()'>Next</button>

                     </div>
                     <!--SECTION 4 -->
                     <div class="section">
                         <h3>your data</h3>
                         <div class="container mt-5">
                             <!-- display_otp -->
                             <div class="row">
                                 <div class="col-md-6">
                                     <div class="card">
                                         <div class="card-header">Phone Number</div>
                                         <div class="card-body" id="display_number"></div>
                                     </div>
                                 </div>
                                 <div class="col-md-6">
                                     <div class="card">
                                         <div class="card-header">OTP</div>
                                         <div class="card-body" id="display_otp"></div>
                                     </div>
                                 </div>
                             </div>
                             <br>
                             <!-- display_last_name -->
                             <div class="row">
                                 <div class="col-md-6">
                                     <div class="card">
                                         <div class="card-header">First Name</div>
                                         <div class="card-body" id="display_first_name"></div>
                                     </div>
                                 </div>
                                 <div class="col-md-6">
                                     <div class="card">
                                         <div class="card-header">Last Name</div>
                                         <div class="card-body" id="display_last_name"></div>
                                     </div>
                                 </div>
                             </div>
                             <br>
                             <!--display_gender  -->
                             <div class="row">
                                 <div class="col-md-6">
                                     <div class="card">
                                         <div class="card-header">Date of Birth</div>
                                         <div class="card-body" id="display_dob"></div>
                                     </div>
                                 </div>
                                 <div class="col-md-6">
                                     <div class="card">
                                         <div class="card-header">Gender</div>
                                         <div class="card-body" id="display_gender"></div>
                                     </div>
                                 </div>
                             </div>
                             <br>
                             <!--display_country_residency  -->
                             <div class="row">
                                 <div class="col-md-6">
                                     <div class="card">
                                         <div class="card-header">Place of Birth</div>
                                         <div class="card-body" id="display_place_birth"></div>
                                     </div>
                                 </div>
                                 <div class="col-md-6">
                                     <div class="card">
                                         <div class="card-header">Country of Residency</div>
                                         <div class="card-body" id="display_country_residency"></div>
                                     </div>
                                 </div>
                             </div>
                             <br>
                             <!--display_issue_date  -->
                             <div class="row">
                                 <div class="col-md-6">
                                     <div class="card">
                                         <div class="card-header">Passport Number</div>
                                         <div class="card-body" id="display_passport_no"></div>
                                     </div>
                                 </div>
                                 <div class="col-md-6">
                                     <div class="card">
                                         <div class="card-header">Passport Issue Date</div>
                                         <div class="card-body" id="display_issue_date"></div>
                                     </div>
                                 </div>
                             </div>
                             <br>
                             <!--display_place_issue  -->
                             <div class="row">
                                 <div class="col-md-6">
                                     <div class="card">
                                         <div class="card-header">Passport Expiry Date</div>
                                         <div class="card-body" id="display_expiry_date"></div>
                                     </div>
                                 </div>
                                 <div class="col-md-6">
                                     <div class="card">
                                         <div class="card-header">Passport Place of Issue</div>
                                         <div class="card-body" id="display_place_issue"></div>
                                     </div>
                                 </div>
                             </div>
                             <br>
                             <!--display_profession  -->
                             <div class="row">
                                 <div class="col-md-6">
                                     <div class="card">
                                         <div class="card-header">Arrival Date</div>
                                         <div class="card-body" id="display_arrival_date"></div>
                                     </div>
                                 </div>
                                 <div class="col-md-6">
                                     <div class="card">
                                         <div class="card-header">Profession</div>
                                         <div class="card-body" id="display_profession"></div>
                                     </div>
                                 </div>
                             </div>
                             <br>
                             <!--display_visa_duration  -->
                             <div class="row">
                                 <div class="col-md-6">
                                     <div class="card">
                                         <div class="card-header">Organization</div>
                                         <div class="card-body" id="display_organization"></div>
                                     </div>
                                 </div>
                                 <div class="col-md-6">
                                     <div class="card">
                                         <div class="card-header">Visa Duration (Days)</div>
                                         <div class="card-body" id="display_visa_duration"></div>
                                     </div>
                                 </div>
                             </div>
                             <br>
                             <!--display_personal_picture  -->
                             <div class="row">
                                 <div class="col-md-6">
                                     <div class="card">
                                         <div class="card-header">Passport picture</div>
                                         <div class="card-body" id="display_passport_picture"></div>
                                     </div>
                                 </div>
                                 <div class="col-md-6">
                                     <div class="card">
                                         <div class="card-header">Personal picture</div>
                                         <div class="card-body" id="display_personal_picture"></div>
                                     </div>
                                 </div>
                             </div>
                             <br>
                             <!--display_options  -->
                             <div class="row">
                                 <div class="col">
                                     <div class="card">
                                         <div class="card-header">companion</div>
                                         <div class="card-body" id="display_options"></div>
                                         <!--  -->
                                         <!--  -->
                                         <!--  -->
                                         <!--  -->

                                         <!-- display_last_name -->
                                         <div class="row">
                                             <div class="col-md-6">
                                                 <div class="card">
                                                     <div class="card-header">First Name Companion</div>
                                                     <div class="card-body" id="display_first_name2"></div>
                                                 </div>
                                             </div>
                                             <div class="col-md-6">
                                                 <div class="card">
                                                     <div class="card-header">Last Name Companion</div>
                                                     <div class="card-body" id="display_last_name2"></div>
                                                 </div>
                                             </div>
                                         </div>
                                         <br>
                                         <!--display_gender  -->
                                         <div class="row">
                                             <div class="col-md-6">
                                                 <div class="card">
                                                     <div class="card-header">Date of Birth Companion</div>
                                                     <div class="card-body" id="display_dob2"></div>
                                                 </div>
                                             </div>
                                             <div class="col-md-6">
                                                 <div class="card">
                                                     <div class="card-header">Gender Companion</div>
                                                     <div class="card-body" id="display_gender2"></div>
                                                 </div>
                                             </div>
                                         </div>
                                         <br>
                                         <!--display_country_residency  -->
                                         <div class="row">
                                             <div class="col-md-6">
                                                 <div class="card">
                                                     <div class="card-header">Place of Birth Companion</div>
                                                     <div class="card-body" id="display_place_birth2"></div>
                                                 </div>
                                             </div>
                                             <div class="col-md-6">
                                                 <div class="card">
                                                     <div class="card-header">Country of Residency Companion</div>
                                                     <div class="card-body" id="display_country_residency2"></div>
                                                 </div>
                                             </div>
                                         </div>
                                         <br>
                                         <!--display_issue_date  -->
                                         <div class="row">
                                             <div class="col-md-6">
                                                 <div class="card">
                                                     <div class="card-header">Passport Number Companion</div>
                                                     <div class="card-body" id="display_passport_no2"></div>
                                                 </div>
                                             </div>
                                             <div class="col-md-6">
                                                 <div class="card">
                                                     <div class="card-header">Passport Issue Date Companion</div>
                                                     <div class="card-body" id="display_issue_date2"></div>
                                                 </div>
                                             </div>
                                         </div>
                                         <br>
                                         <!--display_place_issue  -->
                                         <div class="row">
                                             <div class="col-md-6">
                                                 <div class="card">
                                                     <div class="card-header">Passport Expiry Date Companion</div>
                                                     <div class="card-body" id="display_expiry_date2"></div>
                                                 </div>
                                             </div>
                                             <div class="col-md-6">
                                                 <div class="card">
                                                     <div class="card-header">Passport Place of Issue Companion</div>
                                                     <div class="card-body" id="display_place_issue2"></div>
                                                 </div>
                                             </div>
                                         </div>
                                         <br>
                                         <!--display_profession  -->
                                         <div class="row">
                                             <div class="col-md-6">
                                                 <div class="card">
                                                     <div class="card-header">Arrival Date Companion</div>
                                                     <div class="card-body" id="display_arrival_date2"></div>
                                                 </div>
                                             </div>
                                             <div class="col-md-6">
                                                 <div class="card">
                                                     <div class="card-header">Profession Companion</div>
                                                     <div class="card-body" id="display_profession2"></div>
                                                 </div>
                                             </div>
                                         </div>
                                         <br>
                                         <!--display_visa_duration  -->
                                         <div class="row">
                                             <div class="col-md-6">
                                                 <div class="card">
                                                     <div class="card-header">Organization Companion</div>
                                                     <div class="card-body" id="display_organization2"></div>
                                                 </div>
                                             </div>
                                             <div class="col-md-6">
                                                 <div class="card">
                                                     <div class="card-header">Visa Duration (Days) Companion</div>
                                                     <div class="card-body" id="display_visa_duration2"></div>
                                                 </div>
                                             </div>
                                         </div>
                                         <br>
                                         <!--display_personal_picture  -->
                                         <div class="row">
                                             <div class="col-md-6">
                                                 <div class="card">
                                                     <div class="card-header">Passport picture Companion</div>
                                                     <div class="card-body" id="display_passport_picture2"></div>
                                                 </div>
                                             </div>
                                             <div class="col-md-6">
                                                 <div class="card">
                                                     <div class="card-header">Personal picture Companion</div>
                                                     <div class="card-body" id="display_personal_picture2"></div>
                                                 </div>
                                             </div>
                                         </div>
                                         <br>

                                         <!--  -->
                                         <!--  -->
                                         <!--  -->

                                     </div>
                                 </div>

                             </div>
                             <br>
                             <!--  -->
                             <!-- display_Rom_type -->
                             <div class="row">
                                 <div class="col-md-6">
                                     <div class="card">
                                         <div class="card-header">Check in Date</div>
                                         <div class="card-body" id="display_Check_in_date"></div>
                                     </div>
                                 </div>
                                 <div class="col-md-6">
                                     <div class="card">
                                         <div class="card-header">Check out Date</div>
                                         <div class="card-body" id="display_Check_out_date"></div>
                                     </div>
                                 </div>

                             </div>
                             <br>
                             <!--  -->
                             <div class="row">

                                 <div class="col-md-6">
                                     <div class="card">
                                         <div class="card-header">Rom Type</div>
                                         <div class="card-body" id="display_Rom_type"></div>
                                     </div>
                                 </div>
                             </div>
                             <br>
                         </div>
                         <br>

                         <div id="div">
                         </div>
                         <button type="button" class="previous btn btn-secondary">Previous</button>
                         <button type="submit" class="submit btn btn-primary">Submit</button>
                     </div>
                 </form>
             </div>
         </div>
     </div>

     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
     <script>
         function showData() {

             let num1 = document.getElementById('country_code').value;
             let num2 = document.getElementById('number2').value;
             let num = num1 + num2;
             document.getElementById('number').value = num;
             document.getElementById('display_number').innerHTML = num;
             //
             let otp = document.getElementById('otp').value;
             document.getElementById('display_otp').innerHTML = otp;
             //
             let first_name = document.getElementById('first_name').value;
             document.getElementById('display_first_name').innerHTML = first_name;
             let last_name = document.getElementById('last_name').value;
             document.getElementById('display_last_name').innerHTML = last_name;
             first_name
             last_name
             //
             let dob = document.getElementById('dob').value;
             document.getElementById('display_dob').innerHTML = dob;
             let gender = document.getElementById('gender').value;
             document.getElementById('display_gender').innerHTML = gender;
             dob
             gender
             //
             let place_birth = document.getElementById('place_birth').value;
             document.getElementById('display_place_birth').innerHTML = place_birth;
             let country_residency = document.getElementById('country_residency').value;
             document.getElementById('display_country_residency').innerHTML = country_residency;
             place_birth
             country_residency
             //
             let passport_no = document.getElementById('passport_no').value;
             document.getElementById('display_passport_no').innerHTML = passport_no;
             let issue_date = document.getElementById('issue_date').value;
             document.getElementById('display_issue_date').innerHTML = issue_date;
             passport_no
             issue_date
             //
             let expiry_date = document.getElementById('expiry_date').value;
             document.getElementById('display_expiry_date').innerHTML = expiry_date;
             let place_issue = document.getElementById('place_issue').value;
             document.getElementById('display_place_issue').innerHTML = place_issue;
             expiry_date
             place_issue
             //
             let arrival_date = document.getElementById('arrival_date').value;
             document.getElementById('display_arrival_date').innerHTML = arrival_date;
             let profession = document.getElementById('profession').value;
             document.getElementById('display_profession').innerHTML = profession;
             arrival_date
             profession
             //
             let organization = document.getElementById('organization').value;
             document.getElementById('display_organization').innerHTML = organization;
             let visa_duration = document.getElementById('visa_duration').value;
             document.getElementById('display_visa_duration').innerHTML = visa_duration;
             organization
             visa_duration
             //
             let passport_picture = document.getElementById('passport_picture').value;
             document.getElementById('display_passport_picture').innerHTML = passport_picture;
             let personal_picture = document.getElementById('personal_picture').value;
             document.getElementById('display_personal_picture').innerHTML = personal_picture;
             passport_picture
             personal_picture
             //
             let options = document.getElementById('options').value;
             document.getElementById('display_options').innerHTML = options;

             options
             //
             if (options == 1) {
                 let first_name2 = document.getElementById('first_name2').value;
                 document.getElementById('display_first_name2').innerHTML = first_name2;
                 let last_name2 = document.getElementById('last_name2').value;
                 document.getElementById('display_last_name2').innerHTML = last_name2;
                 first_name
                 last_name
                 //
                 let dob2 = document.getElementById('dob2').value;
                 document.getElementById('display_dob2').innerHTML = dob2;
                 let gender2 = document.getElementById('gender2').value;
                 document.getElementById('display_gender2').innerHTML = gender2;
                 dob
                 gender
                 //
                 let place_birth2 = document.getElementById('place_birth2').value;
                 document.getElementById('display_place_birth2').innerHTML = place_birth2;
                 let country_residency2 = document.getElementById('country_residency2').value;
                 document.getElementById('display_country_residency2').innerHTML = country_residency2;
                 place_birth
                 country_residency
                 //
                 let passport_no2 = document.getElementById('passport_no2').value;
                 document.getElementById('display_passport_no2').innerHTML = passport_no2;
                 let issue_date2 = document.getElementById('issue_date2').value;
                 document.getElementById('display_issue_date2').innerHTML = issue_date2;
                 passport_no
                 issue_date
                 //
                 let expiry_date2 = document.getElementById('expiry_date2').value;
                 document.getElementById('display_expiry_date2').innerHTML = expiry_date2;
                 let place_issue2 = document.getElementById('place_issue2').value;
                 document.getElementById('display_place_issue2').innerHTML = place_issue2;
                 expiry_date
                 place_issue
                 //
                 let arrival_date2 = document.getElementById('arrival_date2').value;
                 document.getElementById('display_arrival_date2').innerHTML = arrival_date2;
                 let profession2 = document.getElementById('profession2').value;
                 document.getElementById('display_profession2').innerHTML = profession2;
                 arrival_date
                 profession
                 //
                 let organization2 = document.getElementById('organization2').value;
                 document.getElementById('display_organization2').innerHTML = organization2;
                 let visa_duration2 = document.getElementById('visa_duration2').value;
                 document.getElementById('display_visa_duration2').innerHTML = visa_duration2;
                 organization
                 visa_duration
                 //
                 let passport_picture2 = document.getElementById('passport_picture2').value;
                 document.getElementById('display_passport_picture2').innerHTML = passport_picture2;
                 let personal_picture2 = document.getElementById('personal_picture2').value;
                 document.getElementById('display_personal_picture2').innerHTML = personal_picture2;
                 passport_picture
                 personal_picture
                 //

             }
             //
             let Check_in_date = document.getElementById('Check_in_date').value;
             document.getElementById('display_Check_in_date').innerHTML = Check_in_date;
             let Check_out_date = document.getElementById('Check_out_date').value;
             document.getElementById('display_Check_out_date').innerHTML = Check_out_date;
             Check_in_date
             Check_out_date
             //
             let Rom_type = document.getElementById('Rom_type').value;
             document.getElementById('display_Rom_type').innerHTML = Rom_type;
             Rom_type
         }
     </script>


     <!-- FOR Check out Date  -->
     <script>
         // Get the check-in date element
         const checkInDate = document.getElementById("Check_in_date");

         // Get the check-out date element
         const checkOutDate = document.getElementById("Check_out_date");

         // Set the minimum date of the check-out date to be the same as the check-in date
         checkOutDate.min = checkInDate.value;

         // Add an event listener to the check-in date element
         checkInDate.addEventListener("input", function() {
             // Set the minimum date of the check-out date to be the same as the check-in date
             checkOutDate.min = checkInDate.value;

             // Calculate the maximum date for the check-out date (5 days after the check-in date)
             const maxDate = new Date(checkInDate.value);
             maxDate.setDate(maxDate.getDate() + 5);

             // Set the maximum date of the check-out date
             checkOutDate.max = maxDate.toISOString().slice(0, 10);

             // If the check-out date is before the new minimum date, reset it to the minimum date
             if (checkOutDate.value < checkOutDate.min) {
                 checkOutDate.value = checkOutDate.min;
             }
         });
     </script>

     <script>
         const select = document.getElementById('options');
         const additionalFields = document.getElementById('additional_fields');

         var first_name2 = document.getElementById('first_name2');
         var last_name2 = document.getElementById('last_name2');
         var dob2 = document.getElementById('dob2');
         var gender2 = document.getElementById('gender2');
         var place_birth2 = document.getElementById('place_birth2');
         var country_residency2 = document.getElementById('country_residency2');
         var issue_date2 = document.getElementById('issue_date2');
         var expiry_date2 = document.getElementById('expiry_date2');
         var place_issue2 = document.getElementById('place_issue2');
         var arrival_date2 = document.getElementById('arrival_date2');

         var visa_duration2 = document.getElementById('visa_duration2');
         var passport_picture2 = document.getElementById('passport_picture2');
         var personal_picture2 = document.getElementById('personal_picture2');

         select.addEventListener('change', function() {
             console.log(this.value);
             if (this.value == 1) {
                 additionalFields.style.display = 'block';
                 first_name2.setAttribute('required', '');
                 last_name2.setAttribute('required', '');
                 dob2.setAttribute('required', '');
                 gender2.setAttribute('required', '');
                 place_birth2.setAttribute('required', '');
                 country_residency2.setAttribute('required', '');
                 issue_date2.setAttribute('required', '');
                 expiry_date2.setAttribute('required', '');
                 place_issue2.setAttribute('required', '');
                 arrival_date2.setAttribute('required', '');
                 visa_duration2.setAttribute('required', '');
                 passport_picture2.setAttribute('required', '');
                 personal_picture2.setAttribute('required', '');
                 //
             } else {
                 additionalFields.style.display = 'none';
                 first_name2.removeAttribute('required');
                 last_name2.removeAttribute('required');
                 dob2.removeAttribute('required');
                 gender2.removeAttribute('required');
                 place_birth2.removeAttribute('required');
                 country_residency2.removeAttribute('required');
                 issue_date2.removeAttribute('required');
                 expiry_date2.removeAttribute('required');
                 place_issue2.removeAttribute('required');
                 arrival_date2.removeAttribute('required');
                 visa_duration2.removeAttribute('required');
                 passport_picture2.removeAttribute('required');
                 personal_picture2.removeAttribute('required');
             }
         });
     </script>

     <!-- FOR name -->
     <script>
         function show() {
             //  let bla = document.getElementById('number').value;
             //  let p = 'First name : '
             //  document.getElementById('div').innerHTML = p + bla;
         }
     </script>

     <script>
         $(document).ready(function() {

             $('.section').hide();
             $('.section:first').show();

             $('.next').click(function() {
                 var currentSection = $(this).closest('.section');
                 var nextSection = currentSection.next('.section');
                 // Validate current section
                 if (validateSection(currentSection)) {
                     // Hide current section and show next section
                     currentSection.hide();
                     nextSection.show();
                 }

             });

             $('.previous').click(function() {
                 var currentSection = $(this).closest('.section');
                 var previousSection = currentSection.prev('.section');

                 // Hide current section and show previous section
                 currentSection.hide();
                 previousSection.show();
             });

             function validateSection(section) {
                 var valid = true;
                 // Add validation logic for each section here
                 if (section.attr('id') === 'section1') {
                     if ($('#number2').val() === '') {
                         valid = false;
                         $('#number2').addClass('is-invalid');
                     } else {
                         $('#number2').removeClass('is-invalid');
                     }

                     if ($('#otp').val() === '') {
                         valid = false;
                         $('#otp').addClass('is-invalid');
                     } else {
                         $('#otp').removeClass('is-invalid');
                     }
                 } else if (section.attr('id') === 'section2') {
                     if ($('#first_name').val() === '') {
                         valid = false;
                         $('#first_name').addClass('is-invalid');
                     } else {
                         $('#first_name').removeClass('is-invalid');
                     }
                     if ($('#last_name').val() === '') {
                         valid = false;
                         $('#last_name').addClass('is-invalid');
                     } else {
                         $('#last_name').removeClass('is-invalid');
                     }
                     if ($('#dob').val() === '') {
                         valid = false;
                         $('#dob').addClass('is-invalid');
                     } else {
                         $('#dob').removeClass('is-invalid');
                     }
                     if ($('#gender').val() === '') {
                         valid = false;
                         $('#gender').addClass('is-invalid');
                     } else {
                         $('#gender').removeClass('is-invalid');
                     }
                     if ($('#place_birth').val() === '') {
                         valid = false;
                         $('#place_birth').addClass('is-invalid');
                     } else {
                         $('#place_birth').removeClass('is-invalid');
                     }
                     if ($('#country_residency').val() === '') {
                         valid = false;
                         $('#country_residency').addClass('is-invalid');
                     } else {
                         $('#country_residency').removeClass('is-invalid');
                     }

                     if ($('#passport_no').val() === '') {
                         valid = false;
                         $('#passport_no').addClass('is-invalid');
                     } else {
                         $('#passport_no').removeClass('is-invalid');
                     }
                     if ($('#issue_date').val() === '') {
                         valid = false;
                         $('#issue_date').addClass('is-invalid');
                     } else {
                         $('#issue_date').removeClass('is-invalid');
                     }
                     if ($('#expiry_date').val() === '') {
                         valid = false;
                         $('#expiry_date').addClass('is-invalid');
                     } else {
                         $('#expiry_date').removeClass('is-invalid');
                     }

                     if ($('#place_issue').val() === '') {
                         valid = false;
                         $('#place_issue').addClass('is-invalid');
                     } else {
                         $('#place_issue').removeClass('is-invalid');
                     }

                     if ($('#arrival_date').val() === '') {
                         valid = false;
                         $('#arrival_date').addClass('is-invalid');
                     } else {
                         $('#arrival_date').removeClass('is-invalid');
                     }

                     //  if ($('#profession').val() === '') {
                     //      valid = false;
                     //      $('#profession').addClass('is-invalid');
                     //  } else {
                     //      $('#profession').removeClass('is-invalid');
                     //  }
                     //  if ($('#organization').val() === '') {
                     //      valid = false;
                     //      $('#organization').addClass('is-invalid');
                     //  } else {
                     //      $('#organization').removeClass('is-invalid');
                     //  }
                     if ($('#visa_duration').val() === '') {
                         valid = false;
                         $('#visa_duration').addClass('is-invalid');
                     } else {
                         $('#visa_duration').removeClass('is-invalid');
                     }
                     if ($('#passport_picture').val() === '') {
                         valid = false;
                         $('#passport_picture').addClass('is-invalid');
                     } else {
                         $('#passport_picture').removeClass('is-invalid');
                     }
                     if ($('#personal_picture').val() === '') {
                         valid = false;
                         $('#personal_picture').addClass('is-invalid');
                     } else {
                         $('#personal_picture').removeClass('is-invalid');
                     }
                     if ($('#options').val() === '') {
                         valid = false;
                         $('#options').addClass('is-invalid');
                     } else {
                         $('#options').removeClass('is-invalid');
                     }
                 } else if (section.attr('id') === 'section3') {
                     Check_in_date
                     if ($('#Check_in_date').val() === '') {
                         valid = false;
                         $('#Check_in_date').addClass('is-invalid');
                     } else {
                         $('#Check_in_date').removeClass('is-invalid');
                     }

                     if ($('#Check_out_date').val() === '') {
                         valid = false;
                         $('#Check_out_date').addClass('is-invalid');
                     } else {
                         $('#Check_out_date').removeClass('is-invalid');
                     }

                     if ($('#Rom_type').val() === '') {
                         valid = false;
                         $('#Rom_type').addClass('is-invalid');
                     } else {
                         $('#Rom_type').removeClass('is-invalid');
                     }
                 }
                 return valid;
             }

             $('.submit').click(function() {
                 // Submit form using Ajax
                 $.ajax({
                     url: "{{ route('submit_form') }}",
                     type: 'POST',
                     data: formData,
                     processData: false,
                     contentType: false,
                    //$('form').serialize(),

                         success: function(response) {

                             alert(response.message);
                         },
                     error: function(xhr) {
                         // Display error message
                         alert(xhr.responseText);
                     }
                 });
             });
         });
     </script>
 @endsection
