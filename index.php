<!DOCTYPE html>
<html lang="en">
    <?php
    session_start();
    include('admin/db_connect.php');
    ob_start();
    $query = $conn->query("SELECT * FROM system_settings limit 1")->fetch_array();
     foreach ($query as $key => $value) {
      if(!is_numeric($key))
        $_SESSION['setting_'.$key] = $value;
    }
    ob_end_flush();
    include('header.php');

	
    ?>
  
  <link rel="stylesheet" href="contact.css" />
    <style>
    	header.masthead {
		  /* background: url(admin/assets/img/recruitment.jpg); */
      background: url(https://www.classycareergirl.com/wp-content/uploads/2018/04/SSS-Cozy-Entrepreneur-18.jpg);
		  background-repeat: no-repeat;
		  background-size: cover;
		}
    </style>
    <body id="page-top">
        <!-- Navigation-->
        <div class="toast" id="alert_toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-body text-white">
        </div>
      </div>
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="./"><?php echo "Student Job Recruitment System" ?></a>
                
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php?page=home">Home</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php?page=about">About</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="admin/login.php">Sign In</a></li>
                        
                     
                    </ul>
                </div>
            </div>
        </nav>
       
        <?php 
        $page = isset($_GET['page']) ?$_GET['page'] : "home";
        include $page.'.php';
        ?>
       

<div class="modal fade" id="confirm_modal" role='dialog'>
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title">Confirmation</h5>
      </div>
      <div class="modal-body">
        <div id="delete_content"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id='confirm' onclick="">Continue</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="uni_modal" role='dialog'>
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title"></h5>
      </div>
      <div class="modal-body">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id='submit' onclick="$('#uni_modal form').submit()">Save</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="uni_modal_right" role='dialog'>
    <div class="modal-dialog modal-full-height  modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span class="fa fa-arrow-righ t"></span>
        </button>
      </div>
      <div class="modal-body">
      </div>
      </div>
    </div>
  </div>

  <div class="cont" style="width: 70%;height: 400px;margin:30px 10%; position: relative;">
                <div class="imgbx">
                <img src="https://www.simplyhired.co.in/static/home/img/jobsearch-tailored.webp" style="width: 400px;float:right;"></div>
                <h1 style="position: absolute;top: 100px;left: 20px; font-family: 'Times New Roman', Times, serif;">A job search tailored for you</h1>
              <p style="position: absolute;bottom: 90px;width: 300px; margin: 6%;">We helps millions of people find great jobs and love what they do every day.
              </p>
              </div>

<h2 style="text-align: center">Who can use?</h2>
              <div class="stat" style="display: flex;justify-content: center;align-items: center;margin-bottom:20px">
        <div class="box" style="width: 180px;height: 160px; border:2px solid black;margin: 20px;box-shadow: 10px 10px 10px  black;">
           
         <img src="./admin/assets/img/jobseeker.svg" style="max-width: 90px;">
         <p style="text-align: center;margin-top:15px">job seeker</p> 
        </div>
        <div class="box" style="width: 180px;height: 160px; border:2px solid black; margin: 20px; box-shadow: 10px 10px 10px  black;">
           
            <img src="./admin/assets/img/employee.png" style="max-width: 90px;">
            <p style="text-align: center;margin-top:15px">Employee</p> 
           </div>
           <!-- <div class="box" style="width: 180px;height: 160px; border:2px solid black; margin: 20px;box-shadow: 10px 10px 10px  black;">
           
            <img src="./admin/assets/img/active.svg" style="max-width: 90px;">
            <p style="text-align: center;margin-top:15px">Active Jobs</p> 
           </div> -->
           <div class="box" style="width: 180px;height: 160px; border:2px solid black;margin: 20px;box-shadow: 10px 10px 10px  black;">
           
            <img src="./admin/assets/img/company.svg" style="max-width: 90px;">
            <p style="text-align: center;margin-top:15px">Company</p> 
           </div>
    </div>
<div id="preloader"></div>


<footer >
<div class="contact-form">
       <div class="first-container">
        <div class="info-container">
          <div> 
            <h3>Address</h3>
            <p style="color:#00ad5f">GLA UNIVERSITY,MATHURA, India</p>
          </div>
          <div> 
            <h3>Contact Number</h3>
            <p>+91 1234560789</p>
          </div>
          <div> 
            <h3>General Support</h3>
            <p>contact@example.com</p>
          </div>
        </div>
       </div>
       <div class="second-container">
         <h2>Send Us A Message</h2>
         <form>
           <div class="form-group">
             <label for="name-input">Tell us your name*</label>
             <input id="name-input" type="text" placeholder="First name" required="">
             <input type="text" placeholder="Last name" required="">
           </div>
           <div class="form-group">
             <label for="email-input">Enter your email</label>
             <input id="email-input" type="text" placeholder="Eg. example@gmail.com" required="">
           </div>
           <div class="form-group">
             <label for="phone-input">Enter phone number</label>
             <input id="phone-input" type="text" placeholder="Eg. _1800 000000" required="">
           </div>
           <div class="form-group">
             <label for="message-textarea">Message</label>
             <input class="textarea" id="message-textarea" placeholder="Write us a message"></input>
           </div>
           <a class="btn">Send message</button>
         </form>
       </div>
        
</footer>
        
        <?php include('footer.php') ?>
    </body>

    <?php $conn->close() ?>
    
 
</html>
