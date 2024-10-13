<?php
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blood Harbor</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/modern-business.css" rel="stylesheet">
    <style>
    .navbar-toggler {
        z-index: 1;
    }
    
    @media (max-width: 576px) {
        nav > .container {
            width: 100%;
        }
    }
    .carousel-item.active,
    .carousel-item-next,
    .carousel-item-prev {
        display: block;
    }
    </style>

</head>

<body>

    <!-- Navigation -->
<?php include('includes/header.php');?>
<?php include('includes/slider.php');?>
   
    <!-- Page Content -->
    <div class="container">

        <h1 class="my-4">Welcome to Blood Harbor</h1>

        <!-- Marketing Icons Section -->
        
        <div class="row">
        <div class="col-lg-4 mb-4">
                <div class="card">
                    <h4 class="card-header">Donation Eligibilty</h4>
                   
                        <p class="card-text" style="padding-left:2%">1. Donors are required to be within a certain age range of 18 to 65 years old and a minimum weight requirement of 50 kilograms. Donors should be in good health at the time of donation and must have adequate hemoglobin levels. Individuals with certain medical conditions or infections and individuals who have recently visited regions with a high prevalence of infectious diseases, Pregnant and breastfeeding individuals, individuals engaging in high-risk behaviors, such as unprotected sex or intravenous drug use,smoking and alcohol consumption may be deferred from donating blood. Male donors can donate again after 90 days and female donors can donate again after 120 days.</p>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <h4 class="card-header">Blood Tips</h4>
                   
                        <p class="card-text" style="padding-left:2%">1. Red cells can be stored for 42 days at 2-6 degree celsius.</br>
</br>
                    2.It just takes 15-30 minutes to donate blood including the pre-donation check-up.</br>
</br>
                3. The World blood donor day is celebrated on June 14 by WHO to thank blood donors and to raise awareness about the need for regular blood donations. </p>
                </div>
            </div>
            <div class="col-lg-4 mb-4"> 
                <div class="card">
                    <h4 class="card-header">Procedures</h4>
                   
                        <p class="card-text" style="padding-left:2%"><b>Before Blood donation</b></br>
                    Drink plenty of water to ensure well-hydrated.Have a nutritious meal rich in iron and don't donate blood on an empty stomach having a meal helps to prevent lightheadedness.</br>
</br>
                <b>After Blood donation</b></br>
                Take the provided snacks and drinks to help restore energy levels.Sit and relax for a short period to avoid feeling lightheaded or dizzy.Continue to drink plenty of fluids throughout the day.
            </p>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Section -->
        <h2>Some of the Donar</h2>

        <div class="row">
                   <?php 
$status=1;
$sql = "SELECT * from tblblooddonars where status=:status order by rand() limit 6";
$query = $dbh -> prepare($sql);
$query->bindParam(':status',$status,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{ ?>

            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top img-fluid" src="images/banner1.jpg" alt="" ></a>
                    <div class="card-block">
                        <h4 class="card-title"><a href="#"><?php echo htmlentities($result->FullName);?></a></h4>
<p class="card-text"><b>  Gender :</b> <?php echo htmlentities($result->Gender);?></p>
<p class="card-text"><b>Blood Group :</b> <?php echo htmlentities($result->BloodGroup);?></p>
<p class="card-text"><b>Contact No :</b> <?php echo htmlentities($result->MobileNumber);?></p>

                    </div>
                </div>
            </div>

            <?php }} ?>
          
 



        </div>
        <!-- /.row -->

        <!-- Features Section -->
        <div class="row">
            <div class="col-lg-6">
                <h2>BLOOD GROUPS</h2>
          <p>  Blood group of any human being will mainly fall in any one of the following groups.</p>
                <ul>
                
                
<li>A positive or A negative</li>
<li>B positive or B negative</li>
<li>O positive or O negative</li>
<li>AB positive or AB negative.</li>
                </ul>
                <p>A healthy diet helps ensure a successful blood donation, and also makes you feel better! Check out the following recommended foods to eat prior to your donation.</br>
                   1. Iron rich foods:</br>
                      ->Red meat,poultry and fish</br>
                      ->Beans and lentils</br>
                      ->Fortified cereals</br>
                      ->Spinach and other dark leafy greens</br>
                   2. Vitamin C-Rich Foods:</br>
                      ->Citrus fruits (oranges, grapefruits)</br>
                      ->Strawberries</br>
                      ->Bell peppers</br>
                      ->Tomatoes</br>
                   3. Whole Grains:</br>
                      ->Brown rice</br>
                      ->Quinoa</br>
                      ->Whole wheat bread or pasta</br>
                      ->Whole grains provide a slow-release source of energy.</br>
                </p>
            </div>          
            <div class="col-lg-6">
              <img class="img-fluid rounded" src="images\compatible blood type.jpg" alt="">
            </div>
        </div>
        <!-- /.row -->
        
        <hr>

        <!-- Call to Action Section -->
        <div class="row mb-4">
            <div class="col-md-8">
            <h4>UNIVERSAL DONORS AND RECIPIENTS</h4>
                <p>
The most common blood type is O, followed by type A.

Type O individuals are often called "universal donors" since their blood can be transfused into persons with any blood type. Those with type AB blood are called "universal recipients" because they can receive blood of any type.</p>
            </div>
            <div class="col-md-4">
                <a class="btn btn-lg btn-secondary btn-block" href="donor-signin.php">Become a Donar</a>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <!-- Footer -->
  <?php include('includes/footer.php');?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/tether/tether.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
