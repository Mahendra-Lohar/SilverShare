<!DOCTYPE html>

<html lang="en" >
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name = "viewport" content ="width-device-width, initial-scale-1.0">
    <title>Animated registration Form | CodingNepal</title>
   
    <!---css-->
    <link rel="stylesheet" href="./registration_style.css">

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

  </head>
  <body>
    <div class="container">
        <header>Registration</header>     
        
        <form action="./php/reg.php" method="post">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Personal Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Full Name(This will also be your username)</label>
                            <input type="text" name="name" placeholder="Enter your name" required>
                        </div>
                        <div class="input-field">
                          <label>Password</label>
                          <input type="password" name="password" placeholder="Enter Password" required>
                        </div>
                        <div class="input-field">
                          <label>Date Of Birth</label>
                          <input type="date" name="DOB" placeholder="Enter birth date" required>
                        </div>
                        <div class="input-field">
                          <label>Email</label>
                          <input type="text" name="email" placeholder="Enter your email" required>
                        </div>
                        <div class="input-field">
                          <label>Mobile No</label>
                          <input type="number" name="mobile" placeholder="Enter mobile number" required>
                      </div>
                      <div class="input-field">
                        <label>Gender</label>
                        <input type="text" name="gender" placeholder="Enter your gender" required>
                      </div>
                      
                    </div>
                    
                </div>
                <div class="details ID">
                  <div class="fields">
                      
                     
                    
                    
                  </div>
                  <button class="nextBtn">
                    <span class="btnText">Next</span>
                    <i class="uil uil-navigator"></i>
                  </button>
                  
              </div>
            </div>
         

        <!-- <form action="#"> -->
              <div class="form second">
                  <div class="details address">
                      <span class="title">Schedule Details</span>
  
                      <div class="fields">
                        <div class="input-field">
                          <label>State</label>
                          <select name="state" required>
                              <option value="">Select a state</option>
                              <option value="Maharashtra">Maharashtra</option>
                              <option value="Kerala">Kerala</option>
                              <option value="Goa">Goa</option>
                              <option value="Gujarat">Gujarat</option>
                              <option value="MadhyaPradesh">MadhyaPradesh</option>
                          </select>
                      </div>
                      <div class="input-field">
                        <label>Language</label>
                        <select name="language" required>
                            <option value="">Select language</option>
                            <option value="Marathi">Marathi</option>
                            <option value="Gujarati">Gujarati</option>
                            <option value="Punjabi">Punjabi</option>
                            <option value="Hindi">Hindi</option>
                            <option value="Telugu">Telugu</option>
                        </select>
                      </div>
                      <div class="input-field">
                        <label>Age</label>
                        <input type="number" name="age" placeholder="Enter Age" required>
                      </div>
                      <div class="input-field">
                        <label>Hobby</label>
                        <input type="text" name="hobby" placeholder="Enter your hobby" required>
                      </div>
                      <div class="input-field">
                        <label>Do you have any Diseases?</label>
                        <input type="text" name="disease" placeholder="If not then enter NA" required>
                      </div>
                      <div class="input-field">
                        <label>Volunteer's Name</label>
                        <select name="vol_name" required>
                            <option value="">Select Volunteer</option>
                            <option value="Manasi Madkar">Manasi Madkar (Maharashtra)</option>
                            <option value="Shruti Jaganiya">Shruti Jaganiya (Goa)</option>
                            <option value="Bhakti Gada">Bhakti Gada (Gujarat)</option>
                            <option value="Mahendra Lohar">Mahendra Lohar (Punjab)</option>
                            <option value="Kalpesh Kadam">Kalpesh Kadam (Kerala)</option>
                            <option value="Swedel Corda">Swedel Corda (MadhyaPradesh)</option>
                            <option value="Swayam Mane">Swayam Mane (Karnataka)</option>

                        </select>
                      </div>

                          
                      
                  </div>
                  
                    <div class="buttons">
                      <button class="backBtn">
                        <span class="btnText">Back</span>
                        <i class="uil uil-navigator"></i>
                      </button>
                      <button class="nextBtn" type="submit">
                        <span class="btnText">Submit</span>
                        <i class="uil uil-navigator"></i>
                      </button>
                    </div>
                    
                </div>
              </div>

        </form>
    </div>

    <script src="script.js"></script>
  </body>
</html>



