<?php
    require_once "identification.php";
    $user_name=$row['name'];
    //$sel_up = "select up_login_id from user_profile where up_login_id=$login_id";
    //$sel_result = mysqli_query($conn, $sel_up);
    //$rowcount= mysqli_num_rows($sel_result);
    //if($rowcount>=1)
    //	header('location:leaderboard.php');
    if(isset($_POST['submit'])){
    	$name = mysqli_real_escape_string($conn, $_POST['name']);
    	$phone = mysqli_real_escape_string($conn, $_POST['phone_number']);
    	$email = mysqli_real_escape_string($conn, $_POST['email_id']);
    	$location = mysqli_real_escape_string($conn, $_POST['location']);
    	$preferred_work_locations	= mysqli_real_escape_string($conn, $_POST['preferred_work_locations']);
    	$objective = mysqli_real_escape_string($conn, $_POST['objective']);

    	$experience = mysqli_real_escape_string($conn, $_POST['experience']);
    	$job_title = mysqli_real_escape_string($conn, $_POST['job_title']);
    	$name_of_the_organisation = mysqli_real_escape_string($conn, $_POST['name_of_the_organisation']);
    	$location = mysqli_real_escape_string($conn, $_POST['up_married']);
    	$starting_from = mysqli_real_escape_string($conn, $_POST['starting_from']);
    	$ending_in = mysqli_real_escape_string($conn, $_POST['ending_in']);
    	$roles_and_responsibilities = mysqli_real_escape_string($conn, $_POST['roles_and_responsibilities']);

    	$education = mysqli_real_escape_string($conn, $_POST['education']);
    	$college_name = mysqli_real_escape_string($conn, $_POST['college_name']);
    	$college_university_autonomous = mysqli_real_escape_string($conn, $_POST['college_university_autonomous']);
    	$college_affiliated_to_university = mysqli_real_escape_string($conn, $_POST['college_affiliated_to_university']);
    	$degree = mysqli_real_escape_string($conn, $_POST['degree']);

    	$pg_degree_details  = mysqli_real_escape_string($conn, $_POST['pg_degree_details']);
    	$ug_degree_details  = mysqli_real_escape_string($conn, $_POST['ug_degree_details']);
    	$specialisation = mysqli_real_escape_string($conn, $_POST['specialisation']);




    	$year_of_passing = mysqli_real_escape_string($conn, $_POST['year_of_passing']);
    	$CGPA_percentage_obtained = mysqli_real_escape_string($conn, $_POST['CGPA_percentage_obtained']);

    	$honors_and_awards = mysqli_real_escape_string($conn, $_POST['honors_and_awards']);
    	$title_of_award = mysqli_real_escape_string($conn, $_POST['title_of_award']);
    	$issued_by = mysqli_real_escape_string($conn, $_POST['issued_by']);
    	$issued_in_year = mysqli_real_escape_string($conn, $_POST['issued_in_year']);

    	$academic_certification = mysqli_real_escape_string($conn, $_POST['academic_certification']);
    	$name_of_the_certificate = mysqli_real_escape_string($conn, $_POST['name_of_the_certificate']);
    	$name_of_the_issuing_organisation = mysqli_real_escape_string($conn, $_POST['name_of_the_issuing_organisation']);
    	$date_of_issue = mysqli_real_escape_string($conn, $_POST['date_of_issue']);

    	$projects_research_experience = mysqli_real_escape_string($conn, $_POST['projects_research_experience']);
    	$project_title = mysqli_real_escape_string($conn, $_POST['project_title']);
    	$project_description = mysqli_real_escape_string($conn, $_POST['project_description']);
    	$year = mysqli_real_escape_string($conn, $_POST['year']);

    	$use_cases = mysqli_real_escape_string($conn, $_POST['use_cases']);
    	$advisor = mysqli_real_escape_string($conn, $_POST['advisor']);
    	$published_in = mysqli_real_escape_string($conn, $_POST['published_in']);
    	$place_of_the_project = mysqli_real_escape_string($conn, $_POST['place_of_the_project']);

    	$journal_papers_accepted = mysqli_real_escape_string($conn, $_POST['journal_papers_accepted']);
    	$journal_papers_review = mysqli_real_escape_string($conn, $_POST['journal_papers_review']);

    	$conference_papers  = mysqli_real_escape_string($conn, $_POST['conference_papers']);
    	$patent = mysqli_real_escape_string($conn, $_POST['patent']);
    	$inventor_lastname = mysqli_real_escape_string($conn, $_POST['inventor_lastname']);
    	$inventor_firstname = mysqli_real_escape_string($conn, $_POST['inventor_firstname']);
    	$up_work_end = mysqli_real_escape_string($conn, $_POST['up_work_end']);
    	$up_work_desc = mysqli_real_escape_string($conn, $_POST['up_work_desc']);

    	$title_of_invention = mysqli_real_escape_string($conn, $_POST['title_of_invention']);
    	$patent_office = mysqli_real_escape_string($conn, $_POST['patent_office']);
    	$patent_no = mysqli_real_escape_string($conn, $_POST['patent_no']);

    	$professional_training = mysqli_real_escape_string($conn, $_POST['professional_training']);
    	$seminar_or_workshop = mysqli_real_escape_string($conn, $_POST['seminar_or_workshop']);
    	$name_of_institution = mysqli_real_escape_string($conn, $_POST['name_of_institution']);
    	$location = mysqli_real_escape_string($conn, $_POST['location']);
    	$date = mysqli_real_escape_string($conn, $_POST['date']);
    	$description = mysqli_real_escape_string($conn, $_POST['description']);
    	$validity = mysqli_real_escape_string($conn, $_POST['validity']);

    	$professional_affiliations = mysqli_real_escape_string($conn, $_POST['professional_affiliations']);
    	$name_of_organization = mysqli_real_escape_string($conn, $_POST['name_of_organization']);
    	$year_to_year = mysqli_real_escape_string($conn, $_POST['year_to_year']);
    	$description_of_role_or_responsibilities = mysqli_real_escape_string($conn, $_POST['description_of_role_or_responsibilities']);


    	$position_of_responsibility  = mysqli_real_escape_string($conn, $_POST['position_of_responsibility']);
    	$extracurricular_activities = mysqli_real_escape_string($conn, $_POST['extracurricular_activities']);
    	$languages = mysqli_real_escape_string($conn, $_POST['languages']);
    	$hobbies = mysqli_real_escape_string($conn, $_POST['hobbies']);

    	// Setting up the timezone.
    	date_default_timezone_set('Asia/Calcutta');
    	$date=date("d M Y");
    	$time=date("H:i A");
    	$up_date = $time." ".$date;


    	if(empty($_FILES['up_image']['tmp_name']) or empty($_FILES['up_work_resume']['tmp_name'])){

    		$up_query = "update user_profile set
    		up_fullname='$up_fullname',up_father='$up_father',up_mother='$up_mother',up_email='$up_email',up_age='$up_age',up_gender='$up_gender',up_height='$up_height',
    		up_dob='$up_dob',up_phone='$up_phone',up_married='$up_married',up_religion='$up_religion',up_about='$up_about',

    		up_address='$up_address',up_city='$up_city',up_state='$up_state',up_postcode='$up_postcode',up_nationality='$up_nationality',
    		up_10_school='$up_10_school',up_10_city='$up_10_city',up_10_state='$up_10_state',up_10_cgpa='$up_10_cgpa',up_10_board='$up_10_board',up_10_yop='$up_10_yop',
    		up_12_school='$up_12_school',up_12_city='$up_12_city',up_12_state='$up_12_state',up_12_cgpa='$up_12_cgpa',up_12_board='$up_12_board',up_12_yop='$up_12_yop',
    		up_ug_college='$up_ug_college',up_ug_city='$up_ug_city',up_ug_state='$up_ug_state',up_ug_cgpa='$up_ug_cgpa',up_ug_university='$up_ug_university',up_ug_yop='$up_ug_yop',
    		up_pg_college='$up_pg_college',up_pg_city='$up_pg_city',up_pg_state='$up_pg_state',up_pg_cgpa='$up_pg_cgpa',up_pg_university='$up_pg_university',up_pg_yop='$up_pg_yop',
    		up_work_designation='$up_work_designation',up_work_company='$up_work_company',up_work_address='$up_work_address',up_work_start='$up_work_start',
    		up_work_end='$up_work_end',up_work_desc='$up_work_desc',

    		up_career='$up_career',up_por='$up_por',up_interest='$up_interest',
    		up_date='$up_date' where up_login_id=$login_id";

    		if(mysqli_query($conn, $up_query)){
    			$query_first_entry = "select entry from login where (email='$email' and password='$password' and role='$role')";
    			$query_first_result = mysqli_query($conn, $query_first_entry);
    			$query_first_row = mysqli_fetch_assoc($query_first_result);
    			$new_entry = $query_first_row['entry']+1;
    			$quer_update = "update login set entry = '$new_entry' where (email='$email' and password='$password' and role='$role')";
    			mysqli_query($conn,$quer_update);
    			header('location:leaderboard.php');
    		}
    	}
    	else{
    		$target_directory = "files/";
    		$target_file = $target_directory.basename($_FILES["up_image"]["name"]);
    		$filetype = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    		$up_image = $target_directory.uniqid('', true).".".$filetype;

    		$target_file = $target_directory.basename($_FILES["up_work_resume"]["name"]);
    		$filetype = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    		$up_work_resume = $target_directory.uniqid('', true).".".$filetype;
    		move_uploaded_file($_FILES["up_image"]["tmp_name"],$up_image);
    		move_uploaded_file($_FILES["up_work_resume"]["tmp_name"],$up_work_resume);

    		$up_query = "update user_profile set
    		up_fullname='$up_fullname',up_father='$up_father',up_mother='$up_mother',up_email='$up_email',up_age='$up_age',up_gender='$up_gender',up_height='$up_height',
    		up_dob='$up_dob',up_phone='$up_phone',up_married='$up_married',up_religion='$up_religion',up_about='$up_about',up_image='$up_image',

    		up_address='$up_address',up_city='$up_city',up_state='$up_state',up_postcode='$up_postcode',up_nationality='$up_nationality',
    		up_10_school='$up_10_school',up_10_city='$up_10_city',up_10_state='$up_10_state',up_10_cgpa='$up_10_cgpa',up_10_board='$up_10_board',up_10_yop='$up_10_yop',
    		up_12_school='$up_12_school',up_12_city='$up_12_city',up_12_state='$up_12_state',up_12_cgpa='$up_12_cgpa',up_12_board='$up_12_board',up_12_yop='$up_12_yop',
    		up_ug_college='$up_ug_college',up_ug_city='$up_ug_city',up_ug_state='$up_ug_state',up_ug_cgpa='$up_ug_cgpa',up_ug_university='$up_ug_university',up_ug_yop='$up_ug_yop',
    		up_pg_college='$up_pg_college',up_pg_city='$up_pg_city',up_pg_state='$up_pg_state',up_pg_cgpa='$up_pg_cgpa',up_pg_university='$up_pg_university',up_pg_yop='$up_pg_yop',
    		up_work_designation='$up_work_designation',up_work_company='$up_work_company',up_work_address='$up_work_address',up_work_start='$up_work_start',
    		up_work_end='$up_work_end',up_work_desc='$up_work_desc',up_work_resume='$up_work_resume',

    		up_career='$up_career',up_por='$up_por',up_interest='$up_interest',
    		up_date='$up_date' where up_login_id=$login_id";

    		if(mysqli_query($conn, $up_query)){
    			$query_first_entry = "select entry from login where (email='$email' and password='$password' and role='$role')";
    			$query_first_result = mysqli_query($conn, $query_first_entry);
    			$query_first_row = mysqli_fetch_assoc($query_first_result);
    			$new_entry = $query_first_row['entry']+1;
    			$quer_update = "update login set entry = '$new_entry' where (email='$email' and password='$password' and role='$role')";
    			mysqli_query($conn,$quer_update);
    			header('location:leaderboard.php');
    		}
    	}
    }
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Registeration | JoBaskit</title>
  <script type="text/javascript" charset="utf-8">
    //Capitalize first letter while typing in side of input field
    jQuery(document).ready(function($) {
        $('#selector').keyup(function(event) {
            var textBox = event.target;
            var start = textBox.selectionStart;
            var end = textBox.selectionEnd;
            textBox.value = textBox.value.charAt(0).toUpperCase() + textBox.value.slice(1);
            textBox.setSelectionRange(start, end);
        });
    });
  </script>
  <?php require_once 'requires/top-scripts.php' ?>
  <style>
    .dz-message {
      padding:2rem 1rem;
    }


  </style>
  <style>
        @import url("https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap");

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            list-style: none;
            font-family: "Montserrat", sans-serif;
        }

        body {
            background: #f3f2f0;
        }

        .wrapper {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .registration_form {
            background: #f78325;
            padding: 56px 96px;
            border-radius: 5px;
            width: 100%;
        }

        .registration_form .title {
            text-align: center;
            font-size: 24px;
            text-transform: uppercase;
            color: #070707;
            letter-spacing: 5px;
            font-weight: 700;
        }

        .form_wrap {
            margin-top: 35px;
        }

        .form_wrap h4 {
            padding-bottom: 15px;
            padding-top: 5px;
        }

        .form_wrap .input_wrap {
            margin-bottom: 15px;
        }

        .form_wrap .input_wrap:last-child {
            margin-bottom: 0;
        }

        .form_wrap .input_wrap label {
            display: block;
            margin-bottom: 3px;
            color: #020202;
        }

        .form_wrap .input_wrap .job {
            padding-bottom: 10px;
        }

        .form_wrap .input_grp1 {
            display: flex;
            justify-content: space-between;
        }

        .input_grp2 {
            display: flex;
            justify-content: space-between;
        }

        .input_grp3 {
            display: flex;
            justify-content: space-between;
        }

        .form_wrap .input_grp1 input[type="text"] {
            width: 220px;
        }

        .form_wrap .input_grp2 input[type="text"] {
            width: 360px;
        }

        .form_wrap .input_grp2 input[type="email"] {
            width: 360px;
        }

        .form_wrap .input_grp2 input[type="radio"] {
            width: 360px;
        }

        .form_wrap .input_grp3 input[type="text"] {
            width: 360px;
        }

        .form_wrap .input_grp3 input[type="date"] {
            width: 360px;
            height: 45px;
        }

        .form_wrap input[type="text"] {
            width: 100%;
            border-radius: 3px;
            border: 1px solid #9597a6;
            padding: 10px;
            outline: none;
        }

        .form_wrap input[type="email"] {
            width: 100%;
            border-radius: 3px;
            border: 1px solid #9597a6;
            padding: 10px;
            outline: none;
        }

        .form_wrap input[type="text"]:focus {
            border-color: #ebd0ce;
        }



        .form_wrap .submit_btn {
            width: 25%;
            background: #380f03;
            padding: 10px;
            border: 0;
            border-radius: 3px;
            text-transform: uppercase;
            letter-spacing: 3px;
            cursor: pointer;
            color: aliceblue;
            opacity: 70%;
        }

        .form_wrap .submit_btn:hover {
            background: #0e0300;
        }
    </style>

</head>
<body>
   <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">

      <!----LOGO CODE or BRAND-->
      <?php require_once 'requires/logo.php' ?>

      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="leaderboard.php">
                <i class="ni ni-tv-2"></i>
                <span class="nav-link-text">Leaderboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="introduction.php">
                <i class="ni ni-single-02"></i>
                <span class="nav-link-text">Self-Introduction</span>
              </a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="aptitude-quizes.php">
                <i class="ni ni-bullet-list-67"></i>
                <span class="nav-link-text">Quizes</span>
              </a>
        </div>
      </div>
    </div>
  </nav>

  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-default border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
            <li class="nav-item d-sm-none">
              <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                <i class="ni ni-zoom-split-in"></i>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ni ni-bell-55"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-xl  dropdown-menu-right  py-0 overflow-hidden">
                <!-- Dropdown header -->
                <div class="px-3 py-3">
                  <h6 class="text-sm text-muted m-0">You have <strong class="text-primary">13</strong> notifications.</h6>
                </div>
                <!-- List group -->
                <div class="list-group list-group-flush">
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="img/theme/team-1.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">Japesh</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>2 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">Let's meet at Starbucks at 11:30. Wdyt?</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="img/theme/team-2.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>3 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">A new issue has been reported for Argon.</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="img/theme/team-3.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>5 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">Your posts have been liked a lot.</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="img/theme/team-4.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>2 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">Let's meet at Starbucks at 11:30. Wdyt?</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="img/theme/team-5.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>3 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">A new issue has been reported for Argon.</p>
                      </div>
                    </div>
                  </a>
                </div>
                <!-- View all -->
                <a href="#!" class="dropdown-item text-center text-primary font-weight-bold py-3">View all</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ni ni-ungroup"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-dark bg-default  dropdown-menu-right ">
                <div class="row shortcuts px-4">
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-red">
                      <i class="ni ni-calendar-grid-58"></i>
                    </span>
                    <small>Calendar</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-orange">
                      <i class="ni ni-email-83"></i>
                    </span>
                    <small>Email</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-info">
                      <i class="ni ni-credit-card"></i>
                    </span>
                    <small>Payments</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-green">
                      <i class="ni ni-books"></i>
                    </span>
                    <small>Reports</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-purple">
                      <i class="ni ni-pin-3"></i>
                    </span>
                    <small>Maps</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-yellow">
                      <i class="ni ni-basket"></i>
                    </span>
                    <small>Shop</small>
                  </a>
                </div>
              </div>
            </li>
          </ul>
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                    <i class="ni ni-single-02"></i>
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold"><?php echo $user_name;?></span>
                  </div>
              </div>
              </a>
              <div class="dropdown-menu  dropdown-menu-right ">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Welcome!</h6>
                </div>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-single-02"></i>
                  <span>My profile</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-settings-gear-65"></i>
                  <span>Settings</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-calendar-grid-58"></i>
                  <span>Activity</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-support-16"></i>
                  <span>Support</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="logout.php" class="dropdown-item">
                  <i class="ni ni-user-run"></i>
                  <span>Logout</span>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <div class="header pb-6 d-flex align-items-center" style="min-height: 150px; background-image: url(img/theme/profile-cover.jpg); background-size: cover; background-position: center top;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-8"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
        <div class="row text-center">
          <div class="col-md-12">
            <h1 class="text-white">Student Proforma</h1>
        <!-- <p class="text-white mt-0 mb-5">This is your profile page. You can see the progress you've made with your work and manage your projects or assigned tasks</p>
            <a href="#!" class="btn btn-neutral">Edit profile</a> -->
          </div>
        </div>
      </div>
    </div>

    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col-xl-12 order-xl-2">
          <div class="card">
            <div class="">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0"></h3>
                </div>
                <!-- <div class="col-4 text-right">
                  <a href="#!" class="btn btn-sm btn-primary">Settings</a>
                </div> -->
              </div>
            </div>


            <div class="">
                <!--<h6 class="heading-small text-muted mb-4">Personal information</h6>-->
                <div class="wrapper">
    <div></div>

        <div class="registration_form">


            <form id="addform" action="" method="post" enctype="multipart/form-data">
                <div class="form_wrap">
                    <h4> <strong> Personal Information</strong></h4>
                    <div class="input_grp3">
                        <div class="input_wrap">
                            <label for="name">Name</label>
                            <input type="text" placeholder="name" id="name" name="name">
                        </div>
                        <div class="input_wrap">
                            <label for="phone_number">Phone Number</label>
                            <input type="number" placeholder="phone_number" id="phone_number" name="phone_number"oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="10" minlength="10">
                        </div>

                    </div>
                    <div class="input_grp2">
                        <div class="input_wrap">
                            <label for="email_id">Email Address</label>
                            <input type="email" placeholder="email_id" id="email_id" name="email_id">
                        </div>
                        <div class="input_wrap">
                            <label for="location">Location</label>
                            <input type="text" placeholder="location" id="location" name="location">
                        </div>
                    </div>
                    <div class="input_grp3">
                        <div class="input_wrap">
                            <label for="location">Preferred Work locations</label>
                            <input type="text" placeholder="preferred_work_locations" id="preferred_work_locations" name="preferred_work_locations">
                        </div>
                        <div class="input_wrap">
                            <label for="objective">Objective</label>
                            <input type="text" placeholder="objective" id="obj" name="objective">
                        </div>
                    </div>

                    <hr class="my-5">

                    <h4><strong>Experience</strong></h4>

                    <div class="input_wrap">
                        <div class="job">
                            <label for="job">Job Title</label>
                            <input type="text" placeholder="job_title" id="job_title" name="job_title">
                        </div>
                        <div class="input_grp3">
                            <div class="input_wrap">
                                <label for="org">Name Of Organisation</label>
                                <input type="text" placeholder="name_of_organisation" id="name_of_the_organisation" name="name_of_the_organisation">
                            </div>
                            <div class="input_wrap">
                                <label for="location">Location</label>
                                <input type="text" placeholder="location" id="location">
                            </div>
                        </div>
                        <div class="input_grp3">
                            <div class="input_wrap">
                                <label for="start">Starting From</label>
                                <input type="date" id="starting_from" name="starting_from">
                            </div>
                            <div class="input_wrap">
                                <label for="end">Ending in</label>
                                <input type="date" id="ending_in" name="ending_in">
                            </div>
                        </div>
                        <div class="input_wrap">
                            <label for="roles">Roles and Responsibilities</label>
                            <textarea name="roles" id="roles_and_responsibilities" placeholder="roles_and_responsibilities" cols="82" rows="3"></textarea>
                        </div>

                    </div>

                    <hr class="my-5">
                    <h4><strong>Education</strong></h4>
                    <div class="input_wrap" id="adding_element">
                        <div class="job">
                            <label for="job">College Name</label>
                            <input type="text" placeholder="college_name" id="college_name">
                        </div>
                        <div class="input_grp3">
                            <div class="input_wrap">
                                <label for="Information">College/University/Autonomous</label>
                                <input type="text" placeholder="college_university_autonomous" id="college_university_autonomous" name="college_university_autonomous">
                            </div>
                            <div class="input_wrap">
                                <label for="college_affiliated_to_university">College – Affiliated to</label>
                                <input type="text" placeholder="university" id="college_affiliated_to_university" name="college_affiliated_to_university">
                            </div>
                        </div>
                        <label for="Information"> <h5> Degree</h5></label>
                        <div class="input_grp3">
                            <div class="input_wrap">
                                <label for="Information">PG Degree Details</label>
                                <input type="text" placeholder="pg_details" id="pg_degree_details" name="pg_degree_details">
                            </div>
                            <div class="input_wrap">
                                <label for="university">UG Degree Details</label>
                                <input type="text" placeholder="ug_details" id="ug_degree_details" name="ug_degree_details">
                            </div>

                        </div>
                        <div class="input_wrap">
                            <div class="job">
                                <label for="job">Specialisation</label>
                                <input type="text" placeholder="specialisation" id="specialisation" name="specialisation">
                            </div>

                        </div>

                        <div class="input_grp3">
                            <div class="input_wrap">
                                <label for="Information">Year of Passing</label>
                                <input type="number" placeholder="year_of_passing" id="year_of_passing" name="year_of_passing" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="4" minlength="4">
                            </div>
                            <div class="input_wrap">
                                <label for="Information">CGPA/Percentage obtained</label>
                                <input type="text" placeholder="" id="CGPA_percentage_obtained" name="CGPA_percentage_obtained">
                            </div>

                        </div>
                        <div class="input_wrap">

                            <button type="button" class="btn btn-dark" id=" addEdu">+ Add new Education</button>
                        </div>
                    </div>
                    <hr class="my-5">
                    <h4><strong>Honors and Awards</strong></h4>
                    <div class="input_wrap">
                        <div class="job">
                            <label for="award">Title of Award</label>
                            <input type="text" placeholder="title" id="title_of_award" name="title_of_award">
                        </div>
                        <div class="input_grp3">
                            <div class="input_wrap">
                                <label for="award">Issued by</label>
                                <input type="text" placeholder="issued_by" id="issued_by" name="issued_by">
                            </div>
                            <div class="input_wrap">
                                <label for="university">Issued In – Year</label>
                                <input type="number" placeholder="year" id="issued_in_year" name="issued_in_year"  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="4" minlength="4">
                            </div>

                        </div>
                        <div class="input_wrap">

                            <button type="button" class="btn btn-dark">+ Add new Award</button>
                        </div>
                    </div>
                    <hr class="my-5">
                    <h4><strong>Academic Certification</strong></h4>
                    <div class="input_wrap">
                        <div class="job">
                            <label for="certification">Name of the Certificate</label>
                            <input type="text" placeholder="name_of_the_certificate" id="name_of_the_certificate" name="name_of_the_certificate">
                        </div>
                        <div class="input_grp3">
                            <div class="input_wrap">
                                <label for="award">Name of the Issuing Organisation</label>
                                <input type="text" placeholder="issued_by" id="name_of_the_issuing_organisation" name="name_of_the_issuing_organisation">
                            </div>
                            <div class="input_wrap">
                                <label for="start">Date of Issue</label>
                                <input type="date" id="date_of_issue" name="start">
                            </div>
                        </div>
                    </div>

                    <hr class="my-5">
                    <h4><strong>Projects/Research Experience</strong></h4>
                    <div class="input_wrap">
                        <div class="job">
                            <label for="title">Project title</label>
                            <input type="text" placeholder="project_title" id="project_title" name="project_title">
                        </div>
                        <div class="input_wrap">
                            <label for="roles">Project Description</label>
                            <textarea name="roles" id="project_description" placeholder="project_description" cols="82" rows="3" name="roles"></textarea>
                        </div>
                        <div class="input_grp3">
                            <div class="input_wrap">
                                <label for="year">Year</label>
                                <input type="number" placeholder="year" id="year" name="year"  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="4" minlength="4">
                            </div>

                            <div class="input_wrap">
                                <label for="advisor">Advisor (Name of Faculty/Researcher)</label>
                                <input type="text" placeholder="advisor" id="advisor" name="advisor">
                            </div>
                        </div>
                        <div class="input_wrap">
                            <label for="roles">Use Cases</label>
                            <textarea name="roles" id="use_cases" placeholder="use_cases" cols="82" rows="3" name="roles"></textarea>
                        </div>
                        <div class="input_grp3">
                            <div class="input_wrap">
                                <label for="Published">Published In</label>
                                <input type="text" placeholder="published_in" id="published_in" name="published_in">
                            </div>

                            <div class="input_wrap">
                                <label for="Place">Place of the Project (Name of Organisation)</label>
                                <input type="text" placeholder="place_of_project" id="place_of_project" name="place_of_project">
                            </div>
                        </div>
                    </div>
                    <hr class="my-5">
                    <h4><strong>Journal Publications (APA format)</strong></h4>
                    <div class="input_wrap">
                        <div class="input_grp3">
                            <div class="input_wrap">
                                <label for="Journal">Journal Papers Accepted</label>
                                <input type="text" placeholder="journal_papers" id="journal_papers_accepted" name="journal_papers_accepted">
                            </div>

                            <div class="input_wrap">
                                <label for="Journal">Journal Papers in Review</label>
                                <input type="text" placeholder="journal_papers_review" id="review" name="journal_papers_review">
                            </div>
                        </div>
                        <div class="input_wrap">
                            <label for="roles">Conference Papers (APA format)</label>
                            <textarea name="roles" id="conference_papers" name="roles" placeholder="conference_papers" cols="82" rows="2"></textarea>
                        </div>
                    </div>
                    <hr class="my-5">
                    <h4><strong>Patents</strong></h4>
                    <div class="input_wrap">
                        <div class="input_grp3">
                            <div class="input_wrap">
                                <label for="lname">Inventor LastName</label>
                                <input type="text" placeholder="last_name" id="inventor_lastname" name="inventor_lastname">
                            </div>

                            <div class="input_wrap">
                                <label for="fname">Inventor FirstName</label>
                                <input type="text" placeholder="first_name" id="inventor_firstname" name="inventor_firstname">
                            </div>
                        </div>
                        <div class="job">
                            <label for="title">“Title of Invention”</label>
                            <input type="text" placeholder="title" id="title_of_invention" name="title_of_invention">
                        </div>
                        <div class="input_grp3">
                            <div class="input_wrap">
                                <label for="Patent">Patent office</label>
                                <input type="text" placeholder="patent_office" id="patent_no" name="patent_no">
                            </div>

                            <div class="input_wrap">
                                <label for="Patent">Patent No.</label>
                                <input type="number" placeholder="patent_no" id="fname" name="fname">
                            </div>
                        </div>
                    </div>
                    <hr class="my-5">
                    <h4><strong>Professional Training</strong></h4>
                    <h5><strong>Seminar or Workshop</strong></h5>
                    <div class="input_wrap">
                        <div class="input_grp3">
                            <div class="input_wrap">
                                <label for="Institution">Name of Institution</label>
                                <input type="text" placeholder="name_of_institution" id="name_of_institution" name="name_of_institution">
                            </div>

                            <div class="input_wrap">
                                <label for="location">Location</label>
                                <input type="text" placeholder="location" id="location" name="location">
                            </div>
                        </div>
                        <div class="input_grp3">
                            <div class="input_wrap">
                                <label for="Validity">Validity</label>
                                <input type="text" placeholder="validity" id="validity" name="validity">
                            </div>
                            <div class="input_wrap">
                                <label for="date">Date</label>
                                <input type="date" id="date" name="date">
                            </div>
                        </div>
                        <div class="input_wrap">
                            <label for="roles">Description</label>
                            <textarea name="roles" id="roles" name="roles" placeholder="description" cols="82" rows="3"></textarea>
                        </div>

                    </div>
                    <hr class="my-5">
                    <h4><strong>Professional Affiliations</strong></h4>

                    <div class="input_wrap">
                        <div class="input_grp3">
                            <div class="input_wrap">
                                <label for="Institution">Name of Organization</label>
                                <input type="text" placeholder="name_of_organisation" id="name_of_organization" name="name_of_organization">
                            </div>

                            <div class="input_wrap">
                                <label for="year">Year to year</label>
                                <input type="text" placeholder="year" id="year_to_year" name="year_to_year">
                            </div>
                        </div>
                        <div class="input_wrap">
                            <label for="roles">Description of role or responsibilities, if applicable.</label>
                            <textarea name="roles" id="roles" name="roles" placeholder="description" cols="82" rows="3"></textarea>
                        </div>
                        <div class="input_wrap">

                            <button type="button" class="btn btn-dark">+ Add new Affiliations</button>
                        </div>
                    </div>

                    <hr class="my-5">
                    <div class="input_wrap">

                            <label for="position">Position of Responsibility</label>
                            <input type="text" placeholder="position_of_responsibility" id="position_of_responsibility" name="position_of_responsibility">

                            <label for="position"><br>Extracurricular Activities</label>
                            <input type="text" placeholder="extracurricular_activities" id="extracurricular_activities" name="extracurricular_activities">

                            <div class="input_grp3">
                                <div class="input_wrap">
                                    <label for="lang"><br>Languages</label>
                                    <input type="text" placeholder="languages" id="languages" name="languages">
                                </div>

                                <div class="input_wrap">
                                    <label for="hobbies"><br>Hobbies</label>
                                    <input type="text" placeholder="hobbies" id="hobbies" name="hobbies">
                                </div>
                            </div>

                    </div>


                    <div class="input_wrap text-right">
                        <input type="submit" value="SUBMIT" class="submit_btn">
                    </div>


        </div></form>
    </div>


            </div>
          </div>
        </div>
      </div>


    </div>

  </div>

<!-- Optional JS -->
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';
        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');
          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>

<?php require_once 'requires/end-scripts.php' ?>
</body>

</html>
