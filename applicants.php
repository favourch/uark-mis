<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>UARK MIS | Applicant View</title>
    <link rel="icon" href="./img/favicon.png">

    <!-- Latest Bootstrap compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="./css/style.css">

    <!-- Latest Bootstrap & jQuery compiled and minified JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Font Awesome JavaScript -->
    <script src="https://use.fontawesome.com/2fe8cd2f19.js"></script> 

    <!-- Custom JavaScript -->
    <script type="text/javascript" src="./js/scripts.js"></script>
    <script type="text/javascript" src="./js/bootstrap-filestyle.min.js"></script>

</head>

<body>

<!-- Navigation Bar -->
<nav class="navbar navbar-inverse">
    <div class="container-fluid">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="./index.html"><img src="./img/ualogowhite.png"></a>
        </div>

        <div class="collapse navbar-collapse" id="myNavbar">

            <ul class="nav navbar-nav">
                <li><a href="./application.html">Application</a></li>
                <li class="active"><a href="./applicants.html">Applicants</a></li>
                <li><a href="./advising.html">Advising</a></li>                
                <li><a href="./enrollment.html">Enrollment</a></li>
                <li><a href="./graduation.html">Graduation</a></li>  
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="#signUpModal" data-toggle="modal"><span class="fa fa-user-plus"></span>&nbsp; Sign Up</a></li>
                <li><a href="#loginModal" data-toggle="modal"><span class="fa fa-sign-in"></span>&nbsp; Login</a></li>
            </ul>

            <form class="navbar-form pull-right" style="display:inline;">
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search all applicants">
                        <span class="input-group-addon">
                            <span class="fa fa-search"></span>
                        </span>
                    </div>
                </div>
            </form>

        </div>

    </div>
</nav>

<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <!-- Login Modal Header -->
            <div class="modal-header text-center">
                <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
                <h3 class="modal-title text-info text-center" id="loginModalHeaderLabel">Login</h3>
            </div>

            <!-- Login Modal Body -->
            <div class="modal-body">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                    <input id="loginUsername" type="text" class="form-control" name="loginUsername" placeholder="Username">
                </div><br>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-lock fa-fw"></i></span>
                    <input id="loginPassword" type="password" class="form-control" name="loginPassword" placeholder="Password">
                </div>
            </div>

            <!-- Login Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-block">Login</button><br>
                <button type="button" class="btn btn-danger btn-block" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>

<!-- Sign Up Modal -->
<div class="modal fade" id="signUpModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <!-- Sign Up Modal Header -->
            <div class="modal-header text-center">
                <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
                <h3 class="modal-title text-info text-center" id="signUpModalHeaderLabel">Sign Up</h3>
            </div>

            <!-- Sign Up Modal Body -->
            <div class="modal-body">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                    <input id="signUpName" type="text" class="form-control" name="signUpName" placeholder="Full Name">
                </div><br>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-envelope fa-fw"></i></span>
                    <input id="signUpEmail" type="email" class="form-control" name="signUpEmail" placeholder="Email Address">
                </div><br>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user-plus fa-fw"></i></span>
                    <input id="signUpUsername" type="text" class="form-control" name="signUpUsername" placeholder="Username">
                </div><br>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-lock fa-fw"></i></span>
                    <input id="signUpPassword" type="password" class="form-control" name="signUpPassword" placeholder="Password">
                </div><br>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-lock fa-fw"></i></span>
                    <input id="signUpPasswordConfirm" type="password" class="form-control" name="signUpPasswordConfirm" placeholder="Confirm Password">
                </div>
            </div>

            <!-- Sign Up Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-block">Sign Up</button><br>
                <button type="button" class="btn btn-danger btn-block" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>

<?php

    if(!empty($_GET['appID'])){

?>
<!-- Page Content Container -->
<div class="container-fluid">
    
    <form id="" action="" method="">
        
    <!-- Contact, Personal, & Application Information -->
    <div class="row">

        <h2 class="text-center text-danger">Trevor V. Darby</h2><br>

        <div class="col-md-4 col-sm-12">

            <div class="panel panel-primary">

                <div class="panel-heading">
                    <h2 class="panel-title">Contact Information</h2>
                </div>

                <div class="panel-body">

                    <h4>
                        <b>Primary Email: </b>tvdarby@email.uark.edu                       
                    </h4>

                    <h4>
                        <b>Secondary Email: </b>                
                    </h4>

                    <h4>
                        <b>Primary Phone: </b>(479) 555-5555                        
                    </h4>

                    <h4>
                        <b>Secondary Phone: </b>(479) 555-1234
                    </h4>

                    <h4>
                        <b>Permanent Address: </b>123 Oak Street, Fayetteville, AR 72701
                    </h4>

                    <h4>
                        <b>Mailing Address: </b>123 Oak Street, Fayetteville, AR 72701
                    </h4> 

                </div>

            </div>

        </div>

        <div class="col-md-4 col-sm-12">

            <div class="panel panel-primary">

                <div class="panel-heading">
                    <h2 class="panel-title">Personal Information</h2>
                </div>

                <div class="panel-body">

                    <h4>
                        <b>Social Security Number: </b>123-45-6789
                    </h4>

                    <h4>
                        <b>Date of Birth: </b>09/22/1995
                    </h4>

                    <h4>
                        <b>Race: </b>White, Non-Hispanic
                    </h4>

                    <h4>
                        <b>Gender: </b>Male
                    </h4>

                    <h4>
                        <b>Citizenship: </b>Non-Resident Alien
                    </h4>

                    <h4>
                        <b>Employer: </b>Allied Technologies since 09/2014
                    </h4>

                </div>

            </div>

        </div>

        <div class="col-md-4 col-sm-12">

            <div class="panel panel-primary">

                <div class="panel-heading">
                    <h2 class="panel-title">Application Status</h2>
                </div>

                <div class="panel-body">

                    <h4>
                        <b>Offer Status: </b>
                        <select name="offerStatus" id="offerStatus" class="selectpicker form-control" data-live-search="true">
                            <option>Undecided</option>
                            <option>Accepted</option>
                            <option>Rejected</option>
                            <option>Waitlist</option>
                        </select>
                    </h4>

                    <h4>
                        <b>Assistantship Status: </b>
                        <select name="assistantshipStatus" id="assistantshipStatus" class="selectpicker form-control" data-live-search="true">
                            <option></option>
                            <option>Silver</option>
                            <option>Gold</option>
                        </select>
                    </h4>

                    <h4>
                        <b>Applicant Response: </b>
                        <select name="applicantResponse" id="applicantResponse" class="selectpicker form-control" data-live-search="true">
                            <option></option>
                            <option>Decision Pending</option>
                            <option>Accept Offer</option>
                            <option>Reject OFfer</option>
                        </select>
                    </h4>                   

                </div>

            </div>

        </div>       

    </div>

    <!-- College & Testing -->
    <div class="row">


        <div class="col-md-6 col-sm-12">

            <div class="panel panel-primary">

                <div class="panel-heading">
                    <h2 class="panel-title">Admission Request</h2>
                </div>

                <div class="panel-body">

                    <h4>
                        <b>Term: </b>Fall 2017
                    </h4>

                    <h4>
                        <b>Program: </b>Professional MIS
                    </h4>

                    <h4>
                        <b>Requested Assistantship: </b>Yes
                    </h4>

                    <h4>
                        <b>Previous Application: </b>Yes, Fall 2016
                    </h4>

                    <h4>
                        <b>Previous Enrollment: </b>Yes, Fall 2016 as Undergraduate
                    </h4>                    

                </div>

            </div>

        </div>

        <div class="col-md-6 col-sm-12">

            <div class="panel panel-primary">

                <div class="panel-heading">
                    <h2 class="panel-title">Colleges Attended</h2>
                </div>

                <div class="panel-body">

                    <h4>
                        <b>College Name: </b>University of Arkansas - Fayetteville
                    </h4>

                    <h4>
                        <b>Dates Attended: </b>08/2013 - 05/2017
                    </h4>

                    <h4>
                        <b>GPA: </b>4.00
                    </h4>

                    <h4>
                        <b>Hours Completed: </b>120
                    </h4>

                    <h4>
                        <b>Hours Enrolled: </b>12
                    </h4>

                    <h4>
                        <b>Degree & Major(s): </b>Bachelor's Degree in Information Systems
                    </h4>                  

                </div>

            </div>

        </div>     

    </div>

    <!-- Documents & Interviews -->
    <div class="row">

        <div class="col-md-3 col-sm-12">

            <div class="panel panel-primary">

                <div class="panel-heading">
                    <h2 class="panel-title">Test Scores</h2>
                </div>

                <div class="panel-body">

                    <h4>
                        <b>GMAT Test Date: </b>
                    </h4>

                    <h4>
                        <b>GMAT Quantitative Score: </b>
                    </h4>

                    <h4>
                        <b>GMAT Verbal Score: </b>
                    </h4>

                    <h4>
                        <b>GMAT Total Score: </b>
                    </h4>

                    <h4>
                        <b>GRE Test Date: </b>
                    </h4>

                    <h4>
                        <b>GRE Quantitative Score: </b>
                    </h4>

                    <h4>
                        <b>GRE Verbal Score: </b>
                    </h4>

                    <h4>
                        <b>GRE Total Score: </b>
                    </h4>

                </div>

            </div>

        </div>

        <div class="col-md-3 col-sm-12">

            <div class="panel panel-primary">

                <div class="panel-heading">
                    <h2 class="panel-title">International Test Scores</h2>
                </div>

                <div class="panel-body">

                    <h4>
                        <b>TOEFL Test Date: </b>
                    </h4>

                    <h4>
                        <b>TOEFL Score: </b>
                    </h4>

                    <h4>
                        <b>TSE Test Date: </b>
                    </h4>

                    <h4>
                        <b>TSE Score: </b>
                    </h4>

                </div>

            </div>

        </div>

        <div class="col-md-3 col-sm-12">

            <div class="panel panel-primary">

                <div class="panel-heading">
                    <h2 class="panel-title">Documents</h2>
                </div>

                <div class="panel-body">

                    <h4>
                        <a href="../docs/test.pdf" target="_blank" rel="noopener noreferrer">Resume</a><br>
                        <a href="../docs/test.pdf" target="_blank" rel="noopener noreferrer">Essay Questions</a><br>
                        <a href="../docs/test.pdf" target="_blank" rel="noopener noreferrer">Official Transcript</a><br>
                        <a href="../docs/test.pdf" target="_blank" rel="noopener noreferrer">Recommendation Letter #1</a><br>
                        <a href="../docs/test.pdf" target="_blank" rel="noopener noreferrer">Recommendation Letter #2</a><br>
                        <a href="../docs/test.pdf" target="_blank" rel="noopener noreferrer">Recommendation Letter #3</a><br>
                    </h4>                 

                </div>

            </div>

        </div>

        <div class="col-md-3 col-sm-12">

            <div class="panel panel-primary">

                <div class="panel-heading">
                    <h2 class="panel-title">Interviews</h2>
                </div>

                <div class="panel-body">

                    <h4>
                        <a href="../docs/test.pdf" target="_blank" rel="noopener noreferrer">Standard Interview Guide</a><br><br>
                        <a href="../docs/test.pdf" target="_blank" rel="noopener noreferrer">Interview #1 Notes - Paul Cronan</a><br>
                        <a href="../docs/test.pdf" target="_blank" rel="noopener noreferrer">Interview #1 Notes - Jeff Mullins</a><br>
                        <a href="../docs/test.pdf" target="_blank" rel="noopener noreferrer">Interview #1 Notes - Christina Serrano</a><br>
                        <a href="../docs/test.pdf" target="_blank" rel="noopener noreferrer">Interview #1 Transcript</a><br>
                        <a href="../docs/test.mp3" target="_blank" rel="noopener noreferrer">Interview #1 Audio File</a><br><br>
                        <a href="../docs/test.pdf" target="_blank" rel="noopener noreferrer">Interview #2 Notes - Paul Cronan</a><br>
                        <a href="../docs/test.pdf" target="_blank" rel="noopener noreferrer">Interview #2 Notes - Jeff Mullins</a><br>
                        <a href="../docs/test.pdf" target="_blank" rel="noopener noreferrer">Interview #2 Notes - Christina Serrano</a><br>
                        <a href="../docs/test.pdf" target="_blank" rel="noopener noreferrer">Interview #2 Transcript</a><br>
                        <a href="../docs/test.mp3" target="_blank" rel="noopener noreferrer">Interview #2 Audio File</a><br>
                    </h4>

                </div>

            </div>

        </div>
    </div>

    <!-- Comments -->
    <div class="row">


        <div class="col-md-12 col-sm-12">

            <div class="panel panel-primary">

                <div class="panel-heading">
                    <h2 class="panel-title">Comments</h2>
                </div>

                <div class="panel-body">
               
                <h4>
                    <b>Christina Serrano said: </b>
                    This is a comment about the person who applied to our program!
                </h4>

                <h4>
                    <b>Paul Cronan said: </b>
                    This is another comment about the person who applied to our program!
                </h4>

                <h4>
                    <b>Jeff Mullins said: </b>
                    This is a third comment about the person who applied to our program!
                </h4>

                </div>

            </div>

        </div>

    </div>
        
    </form>
    
</div>
<?php



    }else
        echo "nah";

?>
<div class="container-fluid">

  <h2>List of Applicants</h2>        
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Applicant Name</th>
        <th>Term</th>
        <th>Program</th>
        <th>GPA</th>
        <th>GMAT/GRE Percentile</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Trevor V. Darby</td>
        <td>Fall 2017</td>
        <td>Full-Time MIS</td>
        <td>4.00</td>
        <td>96</td>
      </tr>
      <tr>
        <td>Michael Scott</td>
        <td>Fall 2017</td>
        <td>Professional MIS</td>
        <td>3.82</td>
        <td>91</td>
      </tr>
      <tr>
        <td>Dwight Schrute</td>
        <td>Fall 2017</td>
        <td>Full-Time MIS</td>
        <td>3.96</td>
        <td>99</td>
      </tr>
    </tbody>
  </table>
</div>

</div>

</body>
</html>