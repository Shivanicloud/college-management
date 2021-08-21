<!doctype html>
<html>
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width,initial-scale=1.0">
   <title> HOME,VIVEKANAND EDUCATION SOCIETY'S </title>
   <link rel="stylesheet" href="style.css">
   <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

   <style>
   
    .dispheadermob{
        width:16rem;
    }
    @media  only screen and (max-width: 600px) {
        .topnavphone{
            display: none;
        }
        .dispheadermob{
            width:16rem;
            padding: 5%;
        }
    }
	
	#submitenq{
		display:none;
	}
</style>
<script>
function submitenq(){$(#submitenq).css('display','block'}</script>
     </head>
	 
	 
<body>
<header>
<div class="container">
<div class="abc">
<img src="images/logo.png" width="80px"  height="103"  alt="Institute of Technology Logo">
</div>
                  <h1 class="head">VIVEKANAND EDUCATION SOCIETY</br>
            <em>Institute of Technology</em></h1>
          </div>
</header>
<div id="submitenq">thanks for enquiry!</div>
   <div class="container">
   
  <nav>
     <ul>
     <li><a href="ABOUT US.php">ABOUT US</a></li>
     <li><a href="FACULTY.php">FACULTY</a></li>
     <li><a href="DEPARTMENTsaloni.php">DEPARTMENTS</a></li>
     <li><a href="GALLERY.php">GALLERY</a></li>
      <li><a href="index.php">ATTENDANCE</a></li>

     <li><a href="CONTACT US.php">CONTACT US</a></li>
  <button type="button" class="button_1"><a href="loginsaloni.php">LOGIN</a></button>
    <button type="button" class="button_1"><a href="logout.php">LOGOUT</a></button>
  </ul>
</nav>
</div>


<div class="marquee" >
      <marquee >Welcome to Vivekanand Education's society Institute of Technology &nbsp;&nbsp;&nbsp;.<a href="https://mail.google.com/mail/u/2?ui=2&ik=5d3bebf9fc&attid=0.1&permmsgid=msg-f:1685495911002640983&th=17641599d5af9257&view=att&disp=inline&realattid=1764125eda08c04b8471">Click here for the new guidelines for m.u examinations for the year 20-21</a></marquee>
  </div>
	

<div class="container">
<div class="container" id="popUpmain" style="display:none;">
<div class="pop" id="pop" style="height:1000px;">
     <a class="closepop" id="closepop" onclick="document.getElementById('popUpmain').style.display='none'">x</a>
      <center>
    <img src="images/logo.png" width="80px"  height="103">
        <br>
    <h2 class="soham">For Admission Enquiry</h2>
    </center>
        <div class="content1" style="margin-left:5%;margin-right:10%">
<div id="enquirysuccess"></div>
        <form method="post" id="hp-enquiryform" action="connect.php" onsubmit="alert('Thankyou for your enquiry!');">
        <input type="hidden" name="_token" value="B6Og42CgvIgNgMJhrnrWdxLqcxgh1OYRT3aWO4hi">       
    <div class="form-group">
            <label>Name:</label>
            <input class="form-control" type="text" name="name" id="name" placeholder="Enter Your Name" required="">
        </div>
        <div class="form-group">
            <label>Email:</label>
            <input class="form-control" type="email" name="email" id="email" placeholder="Enter Your Email" required="">
        </div> 
        <div class="form-group">
            <label>Contact No:</label>
            <input class="form-control" type="text" name="contact_no" id="contact_no" pattern=".{10,10}" placeholder="Enter Your Contact No" title="Please Enter Valid phone Number" required="">
        </div>
        <div class="form-group">
            <label> Program of Interest: </label>
            <select class="form-control" name="course_name" required="">
      <option value="B.E in Electronics Engineering - Home">B.E in Electronics Engineering</option>
      <option value="B.E in Computer Engineering - Home">B.E in Computer Engineering</option>
      <option value="B.E in Instrumentation Engineering - Home">B.E in Instrumentation Engineering</option>
      <option value="B.E in Electronics and Telecommunication Engineering - Home">B.E in Electronics and Telecommunication Engineering</option>
      <option value="B.E in Information Technology Engineering - Home">B.E in Information Technology Engineering</option>
      <option value="B.E in Artificial Intelligence and Data Science Engineering - Home">B.E in Artificial Intelligence and Data Science Engineering</option>
      <option value="M.E in Information Technology - Home">M.E in Information Technology</option>
      <option value="M.E in Electronics and Telecommunication Engineering - Home">M.E in Electronics and Telecommunication Engineering</option>
      <option value="M.E in Instrumentation Engineering - Home">M.E in Instrumentation Engineering</option>
      <option value="Master of Computer Applications - Home">Master of Computer Applications</option>
      </select>
    </div>
        <br>
        <div class="button-wrapper">
            <input type="submit" onclick="submitenq()" class="btn" style="background-color: #204a84;color:white" id="formsubmit" value="Submit">
        </div>
    </form>
  </div>
    </div>
  </div>
  </div>
   
 
           <div class="card mt-4" style="background-color:#1B2845;width:250px;float: right;height: 1170px;;margin-top:10px">
            <div class="card-body h-25 m-0 p-2">
                <h4 class="text-light text-center font-weight-bold" style="color:white;">What's New</h4>
                <hr style="border-bottom: 2px solid white;">
                <marquee behavior="scroll" direction="up" scrollamount="6" onmouseover="this.stop();" onmouseout="this.start()">
                    <div style="color:white;linespace">
                        <span class="badge badge-danger blink">NEW</span> <a target = "_blank" href='https://vesit.ves.ac.in/storage/Admission(2020-21).pptx' style="color:white">Admission Intake 2020-21</a><br><br><br>
                        <span class="badge badge-danger blink">NEW</span> <a target = "_blank" href='https://vesit.ves.ac.in/storage/cet cutt off &amp; statastic2019-20.xlsx' style="color:white">CET Cut off and statistics</a><br><br><br>
                        <span class="badge badge-danger blink">NEW</span><a href="http://vesitreach.ves.ac.in" style="color:white">VReach- Alumni Engagement Initiative</a><br><br><br>
                        <span class="badge badge-danger blink">NEW</span> <a href="" style="color:white">Computer Engineering Department in association with IIC presents e-Pradarshini 2019-20</a><br><br><br>
                        <span class="badge badge-danger blink">NEW</span> <a href="" style="color:white">VESIT-IQAC Presents LIVE Sessions on "Yoga for Holistic Health" by Isha Foundation</a><br><br><br>
                        <span class="badge badge-danger blink">NEW</span> <a href="http://theexcelligent.com/magzine-data/" style="color:white">VESIT Selected as one of <b> "India's 10 Best Institutes for Higher Education 2019" </b> by The Excelligent Magazine Team</a><br><br><br>
                        <span class="badge badge-danger blink">NEW</span> <a href="mailto:transcript.vesit@gmail.com" style="color:white">For Transcript Related Matters and Educational Verification -  transcript.vesit@gmail.com </a><br><br><br>
                        <span class="badge badge-danger blink">NEW</span> <a href="mailto:vesit.studentsverfication@gmail.com" style="color:white">For Student's Educational Verification   - vesit.studentsverfication@gmail.com</a><br><br><br>
                    
                    </div>
                </marquee>
            </div>
        </div>


        
                   
                                                    <div class="container1" style="width: 100px;margin-top:20px">
                                <img src="https://vesit.ves.ac.in/storage/index/1597992228winners.jpeg" class="img-fluid image" style="max-height: 70vh">
                                
                            </div>
                                                    
                                
                            
                                                    <div class="container1" style="width: 10px;margin-top:15px">
                                <img src="https://vesit.ves.ac.in/storage/index/1576216329cara3.JPG" class="img-fluid image" style="max-height: 55vh">
                                
                            </div>
                             <div class="container1"style="width: 10px;">
                                <img src="https://vesit.ves.ac.in/storage/index/1576216643cara6.JPG" class="img-fluid image" style="max-height: 50vh">
                                
                            </div>
                             
                                                    <div class="container1"style="margin-top:30px">
                                <img src="https://vesit.ves.ac.in/storage/index/1601208776AI &amp; Data Science (7).png" class="img-fluid image" style="max-height: 80vh">
                                
                            </div>
                                                    <div class="container1"style="margin-top:15px">
                                <img src="https://vesit.ves.ac.in/storage/index/1601208889Nba (4).png" class="img-fluid image" style="max-height: 90vh">
                                
                            </div>

                                                    <div class="container1"style="margin-top:15px">
                                <img src="https://vesit.ves.ac.in/storage/index/1604748602WhatsApp Image 2020-11-03 at 12.01.29 PM.jpeg" class="img-fluid image" style="max-height:70vh">
                                
                            </div>
                                                    <div class="container1"style="margin-top:15px">
                                <img src="https://vesit.ves.ac.in/storage/index/1604748689WhatsApp Image 2020-11-02 at 9.10.08 PM.jpeg" class="img-fluid image" style="max-height: 70vh">
                                
                            </div>
                                            </div>
 <div class="my-2">
            <div class="card" style="background-color: transparent;width:300PX;height:765px;margin-top:-800px;float: right;">
  
                <div class="card-header text-center" style="font-size: 2rem;">
                    <span class="font-weight-bold">
                        Principal's Desk
                    </span>
                </div>
                <div class="card-body overflow-hidden p-2" style="height:32.5rem;">
                    <img src="https://vesit.ves.ac.in/storage/1576036526Principal-photo.jpg" style="height:auto;width: 100%;">
                    <div class="card-text text-justify" style="width: 200PX;height:5PX;font-size:15px;">The year of new A-B-C-D Artificial Intelligence &ndash; Block Chain Technology, Cloud Computing and Data Science, was a year of recognition for our institute. University Grants Commission has included VESIT in the list of colleges under Section 2(f) &amp; 12(B) of UGC Act 1956, which now up scales us to receive Central Assistance. We are proud to announce that VESIT was ranked FIRST in Maharashtra State for Second consecutive year and 29th among the top 100 Engineering Colleges in India by &ldquo;Education World &ndash;India first education-focused ...<a href="Read More.php">Read More</a></div>
                </div>
            </div>
        </div>

   <div class="footer">
  <div class="container">
    <div class="row">
      <div class="footer-col-1">
        <h3>Adress:-</h3>
        <p>Hashu Advani Memorial Complex,<br>
          Collector's Colony<br>
                    Chembur, Mumbai, Maharashtra 400074</p> 
        </div>
      <div class="footer-col-2">
        <h3>Useful Links</h3>
          <a href="">Coupons</a>
          <a href="">Blog Post</a>
          <a href="">Return Policy</a>
          <a href="">Join Affiliate</a>
      </div>
      <div class="footer-col-3">
        <h3>Useful Links</h3>
          <a href="">Coupons</a>
          <a href="">Blog Post</a>
          <a href="">Return Policy</a>
          <a href="">Join Affiliate</a>
      </div>
      <div class="footer-col-4">
        <h3>Follow us</h3>
        <a href="">facebook</a>
          <a href="">twitter</a>
          <a href="">instagram</a>
          <a href="">mail</a>
      </div>
    </div>
    <hr>
    <p class="copyright">Copyright 2020 - VESIT</p>
  </div>
</div>
<script>
     $(document).ready(function(){
                        setTimeout(function(){
                        $('#popUpmain').css('display','block');
                        },2000);
                    }
                      )

<script>
$(document).ready(function() {

// process the form
$('# submission form id').submit(function(event) {

    // get the form data
    // there are many ways to get this data using jQuery (you can use the class or id also)
    if($('input[name=username]').val()!="" && $('input[name=password]').val()!="")
    {
    var formData = {
        'email'              : $('input[name=loginusername]').val(),
        'password'    : $('input[name=loginpwd]').val()
    };

    // process the form
    $.ajax({
        type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
        url         : '(file-name )?action=login', // the url where we want to POST
        data        : formData, // our data object
        success     :function(result){
            if(result == 0)
            {
                $("#enquirysuccess").html("<div class='alert alert-success' role='alert'>thanks for submitting</div>"); 
            }
            else if(result == 1)
            {
                $("#enquirysuccess").html("<div class='alert alert-danger' role='alert'>enquiry failed</div>"); 
            }

        }
    });

    // stop the form from submitting the normal way and refreshing the page
    event.preventDefault();
}
});

});
</script>
</script>
</body>
</html>

                                                                                 
                                                                           
                                       
                                                                                   
