<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="/css/dashboard/profile.css">

     <!--- start of adding the boostrap links ---->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
   <!-- Include Bootstrap JavaScript (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" defer></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" defer></script>
    <!--- End of adding the boostrap links ---->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Portfolio</title>
</head>
<body>
    <div class="d-flex">
        <div class="p-2 flex-grow-1">DASHBOARD</div>
        <div class="p-2"><a href="">Essential</a></div>
        <div class="p-2">/</div>
        <div class="p-2">Dashboard</div>
      </div>

      <br><br>

      <h1>CREATE NEW PORTFOLIO</h1>

      <div class="form-portfolio">
        <form action="" method="post">

           <div class="user-data">
                <div class="full-name">
                    <label for="full-name">Full Name: <span>*</span> </label> 
                    <input type="text" id="full-name" name="full-name" required>
                </div>
                
                <div class="email">
                    <label for="email">Email: <span>*</span></label>
                    <input type="email" id="email" name="email" required>
                </div>
        
            <div class="phone-number">
                    <label for="phone-number">Phone Number: <span>*</span></label>
                    <input type="tel" id="phone-number" name="phone-number" required>
            </div>
        
           
            
           </div> <br>
           <!-- end of user-data class -->

           <div class="user-data">
                <label for="gender">Gender:</label>
                <select id="gender" name="gender" required>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select><br>

                <label for="image" style="margin-left: 60px">Choose Image:</label>
                <input type="file" id="image" name="image"><br>


                    <label for="marital-status" style="margin-left: 60px">Marital Status:</label>
                    <select id="marital-status" name="marital-status" required>
                        <option value="single">Single</option>
                        <option value="married">Married</option>
                        <option value="divorced">Divorced</option>
                        <option value="widowed">Widowed</option>
                        <option value="relationship">Relationsip</option>
                        <option value="separated">Separated</option>
                        <option value="complicated">Complicated</option>
                        <option value="full-house-wife">Widowed</option>
                        <option value="single-parent">Single Parent</option>
                    </select><br>
           </div>
           

           <div class="user-data">
                    <div class="account-number">
                        <label for="account-number">Account Number (For Verfication): <span>*</span></label>
                        <input type="number" id="acount-number" name="account-number" required>
                    </div>

                    <div class="bank-number">
                        <label for="bank-number">Bank Account Number: <span>*</span></label>
                        <input type="number" id="bank-number" name="bank-number" required>
                    </div>

                    <div class="occupation">
                        <label for="occupation">Occupation: <span>*</span></label>
                        <input type="text" id="occupation" name="occupation" required>
                    </div>
                <br>
           </div> 
           
    
            <div class="user-data">
                
                        <label for="proficiency" style="margin-left: 60px">Proficiency:</label>
                    <select id="proficiency" name="proficiency" required>
                        <option value="proficiency">Professional</option>
                        <option value="non-proficiency">Non Professional</option>
                    </select><br>
                   
              

                
                    <label for="employment-status" >Employment Status:</label>
                    <select id="employment-status" name="employment-status" required>
                        <option value="student">Student </option>
                        <option value="employed">Employed </option>
                        <option value="enemployed">Unemployed</option>
                        <option value="job-seeker">Job Seeker</option>
                        <option value="self-employed">Self Employed </option>
                    </select><br>
                

                    <label for="artisan" >Artisan:</label>
                    <select id="artisans" name="artisans" required>
                        <option value="yes-artisan">Yes</option>
                        <option value="no-artisans">No </option>
                    </select><br>

            </div>


            <div class="user-data">
                <div class="children">
                    <label for="children">How many children do you have? <span>*</span></label>
                    <input type="number" id="children" name="children" required>
                </div>

                <div class="neighbours">
                    <label for="neighbours">How many children do you have? <span>*</span></label>
                    <input type="text" id="neighbours" name="neighbours" placeholder="please seperate with comma" required>
                </div>

                <div class="current-address">
                    <label for="current-address">Current Address <span>*</span></label>
                    <input type="text" id="current-address" name="current-address"  required>
                </div>
        </div>
          
    
        <div class="user-data">
            <div class="previous-address">
                <label for="previous-address">Previous Address (if current address less than 3 years)</label>
            <input type="text" name="previous-address" id="previous-address" >
            </div>

            
                <label for="property-info">Property Info</label>
                <select name="property-info" id="property-info">
                    <option value="select">Please select an option</option>
                    <option value="tenant">Shared</option>
                    <option value="tenant">Tenant</option>
                    <option value="living-with-parent">Living with parent</option>
                    <option value="rent">Rent</option>
                    <option value="home-owner">Home Owner</option>
                </select>
            
                <div class="" style="margin-left: 52px">
                    <label for="help">Which support would you need from government?</label>
                <input type="text" name="help" id="help" >
                </div>
            
        </div>
        
           <div class="user-data">

            <div class="language" >
                <label for="language">Language (You can select multiple option)</label> <br><br>
            
                <div>
                    <input type="checkbox" name="english" id="english">
                    <label for="english">English</label> 
                </div>
                
                <div>
                    <input type="checkbox" name="yoruba" id="yoruba"> 
                    <label for="yoruba">Yoruba</label>
                </div>
                
                <div>
                    <input type="checkbox" name="igbo" id="igbo">
                    <label for="igbo">Igbo</label>
                </div>
                
    
                <div>
                    <input type="checkbox" name="hausa" id="hausa">
                    <label for="hausa">Hausa</label>
                </div>
                
                <div>
                    <input type="checkbox" name="other-language" id="other-language">
                     <label for="other-language">Other Language(s)</label>
                </div>
            </div>


           <div>
            <label for="voter-reg">Are you disabled?</label> <br>

            <div>
                <label for="yes-disabled">Yes</label>
                <input type="radio" name="yes-disabled" id="yes-disabled">
            </div>

            <div>
                <label for="no-disabled">No</label>
                <input type="radio" name="no-disabled" id="no-disabled">
            </div>
           </div>

           <div>
            <label for="voter-reg">Voter's Registration</label> <br>

            <div>
                <label for="yes-reg">Yes</label>
                <input type="radio" name="yes-reg" id="yes-reg">
            </div>

            <div>
                <label for="no-reg">No</label>
                <input type="radio" name="no-reg" id="no-reg">
            </div>
           </div>

           </div>

           <div class="user-data">
            <div>
                <label for="senior-citizen">Are you a senior citizen?</label> <br>
    
                <div>
                    <label for="yes-scit">Yes</label>
                    <input type="radio" name="yes-scit" id="yes-scit">
                </div>
    
                <div>
                    <label for="no-scit">No</label>
                    <input type="radio" name="no-scit" id="no-scit">
                </div>
               </div>


               <div>
                <label for="medical-condition">Do you have any medical condition?</label> <br>
    
                <div>
                    <label for="yes-medical-condition">Yes</label>
                    <input type="radio" name="medical-condition" id="medical-condition">
                </div>
    
                <div>
                    <label for="no-medical-condition">No</label>
                    <input type="radio" name="no-medical-condition" id="no-medical-condition">
                </div>
               </div>

               <div>
                <label for="">TODO: If the repsonse if yes to medical condition show a text for</label>
               </div>
           </div>
    
           <div class="face-capture">
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <button>Please, click to capture</button>
           </div>

           <div class="user-data">
            <label for="image" class="file-label">
                <span>To skip this process. Select image for face verification</span>
                <input type="file" id="image" name="image" onchange="displaySelectedFile()">
            </label>
            <img id="selected-image" src="" alt="Selected Image">

            <script>
                function displaySelectedFile() {
                 const fileInput = document.getElementById('image');
                 const selectedFile = fileInput.files[0];
                 const selectedImageElement = document.getElementById('selected-image');
             
                 if (selectedFile) {
                     const objectURL = URL.createObjectURL(selectedFile);
                     selectedImageElement.src = objectURL;
                 } else {
                     selectedImageElement.src = ''; // Clear the image if no file is selected
                 }
             }   
             </script>
        </div>


        <div class="user-data">
            
                <label for="income-type">Income Type</label>
                <select name="income-type" id="income-type">
                    <option value="monthly-income"> Monthly Income</option>
                    <option value="yearly-income">Yearly Income</option>
                </select>
            

                <div class="income-value">
                    <label for="account-number">Income Value: <span>*</span></label>
                    <input type="number" id="income-value" name="income-value" required>
                </div>

                <label for="date-of-birth">Date of Birth:</label>
                <input type="date" id="date-of-birth" name="date-of-birth" required>

        </div>
        

        <div class="user-data">
            <div class="primary-edu">
                <label for="primary-edu">Primary School Attended <span>*</span> </label> 
                <input type="text" id="primary-edu" name="primary-edu" required>
            </div>

            <div class="secondary-edu">
                <label for="secondary-edu">Secondary School Attended <span>*</span> </label> 
                <input type="text" id="secondary-edu" name="secondary-edu" required>
            </div>

            <div class="tertiary-edu">
                <label for="tertiary-edu">Tertiary Attended <span>*</span> </label> 
                <input type="text" id="tertiary-edu" name="tertiary-edu" required>
            </div>
        </div>

        
        <div class="user-data">
            <div class="state">
                <label for="state">State <span>*</span> </label> 
                <input type="text" id="state" name="state" required>
            </div>
            
            <div class="lga">
                <label for="lga">Local Government <span>*</span></label>
                <input type="text" id="lga" name="lga" required>
            </div>
    
        <div class="country">
                <label for="country">Country <span>*</span></label>
                <input type="text" id="country" name="country" required>
        </div>
       </div> <br>

       <div class="user-data">
            <div class="current-country">
                <label for="courrent-country">Current Country <span>*</span></label>
                <input type="text" id="current-country" name="current-country" required>
            </div>


            <div class="current-state">
                <label for="current-state">Current State <span>*</span> </label> 
                <input type="text" id="current-state" name="current-state" required>
            </div>

            <div>
                <label for="website">Facebook URL:</label>
                <input type="url" id="facebook" name="facebook" placeholder="https:/facebook.com/example" required>
            </div>
            
       </div>

       <div class="user-data">
            <div>
                <label for="twitter">Twitter URL:</label>
                <input type="url" id="twitter" name="twitter" placeholder="https://twitter.com/example" required>
            </div>

            <div>
                <label for="instagram">Instagram URL:</label>
                <input type="url" id="instagram" name="instagram" placeholder="https://instagram.com/example" required>
            </div>

             <div>
                <label for="linkedin">Linkeldin URL:</label>
                <input type="url" id="linkedin" name="linkedin" placeholder="https://linkeldin.com/example" required>
            </div>
            
       </div>
        
            <button type="submit">Submit</button> 
        </form>
    </div>
    

</body>
</html>
