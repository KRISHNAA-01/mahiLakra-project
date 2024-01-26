<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="./mahiLakraLogo.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <title>CONTACT US</title>
    <style>
        .contact{
            z-index: 1;
        }
        .navbar {
            z-index: 2;
        }
    </style>
    <script>
        // Function to close the alert after 5 seconds
        document.addEventListener("DOMContentLoaded", function () {
            var alertElement = $(".alert");
            if (alertElement.length > 0) {
                setTimeout(function () {
                    alertElement[0].style.transition = "opacity 1s";
                    alertElement[0].style.opacity = "0";

                    setTimeout(function () {
                        alertElement[0].style.display = "none";
                    }, 1000);
                }, 5000);
            }
        });
    </script>

       
</head>
<body>
<?php include('header.php');?>

<?php
if(isset($_POST["send"])){
  $name=$_POST['name'];
$subject=$_POST['subject'];
$email=$_POST['email'];
$message=$_POST['message'];
$conn=mysqli_connect("localhost","root","","mahilakra_db") or die("Connection error");
$sql= "insert into contact_query (query_name,query_mail,query_subject,query_message) values('{$name}','{$email}','{$subject}','{$message}')";
$result=mysqli_query($conn,$sql) or die("query unsuccessful.");
  echo '<div class="alert alert-success alert_dismissible">
            <b>
                <button type="button" class="close" data-dismiss="alert">
                    &times;
                </button>
            </b>
            <b> 
                Query Sent, We will contact you shortly. 
            </b>
        </div>';
}?>


<div class="contact">
    <section class="mb-4">
        <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
        <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
            a matter of hours to help you.</p>
        <div class="row">
            <div class="col-md-9 mb-md-0 mb-5">
                <form id="contact-form" name="contact-form"  method="POST">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <label for="name" class="">Your name</label>
                                <input type="text" id="name" name="name" class="form-control" placeholder="enter your name" required>
                            </div>
                        </div>
                        <br>
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <label for="email" class="">Your email</label>
                                <input type="email" id="email" name="email" class="form-control" placeholder="enter your email-id" required >
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="md-form mb-0">
                                <label for="subject" class="">Subject</label>
                                <input type="text" id="subject" name="subject" class="form-control" placeholder="enter a brief about your message">
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="md-form">
                                <label for="message">Your message</label>
                                <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea" placeholder="enter your message here !" required></textarea>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="text-center text-md-left">
                    <button type="submit" name="send"  class="btn btn-primary">Send Message</button>
                    </div>
                </form>
                
                <div class="status"></div>
            </div>
            <div class="col-md-3 text-center">
                <ul class="list-unstyled mb-0">
                    <li><i class="fas fa-map-marker-alt fa-2x"></i>
                    <p>Plot No 145 & 146 Flat No, 403 Ambika Enclave, Kakrola, South West Delhi, New Delhi, Delhi, India, 110078</p>
                    </li>
                    <li><i class="fas fa-phone mt-4 fa-2x"></i>
                        <p>+ 11 22 33 44 55 
                    <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                    <p>mahilakraa@gmail.com</p>
                </li>
                </ul>
            </div>
        </div>
    </section>
</div>
<?php include('footer.php');?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
