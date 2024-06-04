<?php 
    $error = "";

    $successMessage = "";

    if($_POST) {
        if(!$_POST["email"]) {
            $error .= "An email address is required<br>";
        }

        if(!$_POST["userName"]){
          $error.="A name is required.<br>";
      }

        if(!$_POST["content"]) {
            $error .= "The content field is required.<br>";
        }

        if(!$_POST["subject"]) {
            $error .= "The subject is required.<br>";
        }

        if($_POST["email"] && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false) {
            $error .= "The email address is invalid.<br>";
        }

        //check if there are errors

        if($error != "") {
            $error = '<div class="alert alert-danger" role="alert"><p>There were error(s) in your form:</p>' . $error . '</div>';
        }
        else {  //email address is good!
            $emailTo = "roysnigdham@gmail.com";
            $name = $_POST["userName"];
            $subject = $_POST['subject'];
            $content = $_POST['content'];
            $headers = "From: " . $_POST['email'];

            //try sending the mail
            if(mail($emailTo, $subject, $content, $headers)) {
                $successMessage = '<div class="alert alert-success" role="alert">Your message was sent, ' . 
                                'we\'ll get back to you ASAP!</div>';
            }
            else {
                $error = '<div class="alert alert-danger" role="alert">Your message couldn\'t be sent - try again later</div>';
            }//end if mail function succeeded or failed
        }//end else for the if $error != ""

    }//end if $_POST

?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            Snigdham|Portfolio
        </title>
        <link rel="stylesheet" href="index.css">
        <link rel="icon" type="image/x-icon" href="srlogo.jpg">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
        crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
      
      <div id="Background-image">
        <section id="navbar">
          
        <nav class="navbar navbar-expand-lg navbar-dark  sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="srlogo.jpg" alt="" width="60" height="60">
              </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul>
                <li> <a href="#home">Home</a></li>
                <li> <a href="#about">About</a></li>
                <li><a href="#project">Project</a></li>
                <li><a href="#resume">Resume</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
    
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>

          </div>
        </div>
      </nav>
    </section>

    <section id="home">
      <div class="container">
        <div id="text">
          <h1>Hi!</h1>
          <br>
          <p><i>I am Snigdham Roy<br>
          Welcome to my Portfolio</i></p>
        </div>
        <img src="computer guy.jpg" id="text-img" alt="" width="500" height="225px">
      </div>
    </section>

    <div id="space"></div>

    <section id="about">
      <div class="container">
        <div class="aboutme">
        <h3 class="aboutme-heading"><b><i>About</i></b></h3>
        <p id="aboutme-details">Hello, I am Snigdham Roy from Kolkata,West Bengal.<br>
          I am a Final Year Student at Guru Nanak Institute of Technology
          pursuing B.Tech in Computer Science & Engineering.<br>
          My hobbies are mostly around-
        <ul>
          <li id="uli">Fitness(Running + Lifting)</li>
          <li id="uli">Playing Football & Video Games</li>
          <li id="uli">Watching Combat Sports</li>
        </ul>
        </p>
      </div>
      </div>
    </section>


      <div id="resume">
      <h1> Resume </h1>
        <div class="container">
          <div class="container">
            <button id="pdf"><a  href="RESUME.pdf" target="_bank"> View </a></button>

          </div>
        </div>
      </div>

    <div id="project">
      <div class="container">

        <section id="projects">
          <div class="project">
              <h2>Projects</h2>
              <div class="projects">
  
                  <div class="earth-project">
                      <div class="text">
                          <h3 class="project-name">Reaction Test</h3>
                          <div class="content">
                              <p>This game is build using JavaScript.</p>
                              <p>It determines your reaction time.</p>
                          </div>
  
                          <a class="button" href="https://royhost-com.stackstaging.com/timer/timer/" target="_bank"> View </a>
                      </div>
  
                  </div>
  
                  <div class="bbc-project">
                      <div class="text">
                          <h3 class="project-name">Weather App</h3>
                          <div class="content">
                              <p>This app is build using OpenWeatherMap Api and JavaScript</p>
                          </div>
  
                          <a class="button" href="https://royhost-com.stackstaging.com/weather/" target="_bank">View </a>
                      </div>
  
                  </div>
                  <div class="wordpress-project">
                      <div class="text">
                      <h3 class="project-name">WordPress Test</h3>
                          <div class="content">
                          <p>Building portfolio using WordPress</p>
                          </div>
  
                          <a class="button" href="https://royhost-com.stackstaging.com/public.html/" target="_bank"> View </a>
                      </div>
  
                  </div>
                  
              </div>
          </div>
      </section>

      </div>
    </div>

  </div>
</div>

<hr>


<section id="contact">
  <div class="c">
    <div class="contact1">
      <h3>Contact Me</h3>
    </div>
    <div class="container">
            <h1>Fill-Up Form!</h1>
            <div id="error"><?php echo $error.$successMessage; ?></div>

            <form method="post">
                <fieldset class="form-group">
                    <label for="email">Email address </label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                </fieldset>

                <fieldset class="form-group">
                    <label for="userName">Your Name</label>
                    <input type="text" class="form-control" name="userName" id="userName" >
                </fieldset>

                <fieldset class="form-group">
                    <label for="subject">Subject </label>
                    <input type="text" class="form-control" id="subject" name="subject">
                </fieldset>

                <fieldset class="form-group">
                    <label for="content">Message</label>
                    <textarea class="form-control" id="content" name="content" rows="3"></textarea>
                </fieldset>

                <button type="submit" id="submit" class=" btn btn-primary">Submit</button>
            </form><!-- end of the form -->
        </div>
      </form><!-- end of the form -->
    </div>
  </div>
</section>





<footer>
  <div class="container">
      <div class="copyright">
          This site © 2024 Snigdham Roy
      </div>
      <div class="social-media">

          <a href="https://twitter.com/Snigdham07"><i class="fa fa-twitter"></i></a>
          <a href="https://www.linkedin.com/in/snigdham-roy-75b4462a9/"><i class="fa fa-linkedin-square"></i></a>
      </div>

  </div>

</footer>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" 
                integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" 
                crossorigin="anonymous">
        </script>

        <script type="text/javascript">
            $("form").submit(function(e) {
                let error = "";

                if($("#email").val() == "") {
                    error += "The email field is required<br>.";
                }
                if($("#userName").val()==""){
                    error +="The name field is required<br>";
                }

                if($("#subject").val() == "") {
                    error += "The subject field is required.<br>";
                }

                if($("#content").val() == "") {
                    error += "The content field is required.<br>";
                }
                //test if there was an error or not

                if(error != "") {
                    $("#error").html('<div class="alert alert-danger"' +
                    'role="alert"><p><strong>There were error(s) in your form:</strong></p>' + error + '</div>');

                    return false;
                }
                else {  //no errors!
                    return true;
                }//end if-else

            });
        </script>
    </body>
</html>
