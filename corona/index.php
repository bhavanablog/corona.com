<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php include ('link/link.php');?>
     <?php include('link/css/style.php');?>
   <title>Hello, world!</title>
  </head>
  <body>
    <!---------------navbar--------------------------------------->
      <nav class="navbar navbar-expand-lg nav-style p-3 sticky-top">
        <a class="navbar-brand pl-4" href="#">COVID-19</a>
        <button class="navbar-toggler text-white " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls=" navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon "><i class="fa fa-bars fa-lg" aria-hidden="true"></i>
</span>
        </button>

       <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto pr-4 text-capitalize">
            <li class="nav-item active">
              <a class="nav-link" href="#">home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#aboutid">about</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="#symptomid">symptom</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#preventionid">prevention</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contactid">contact</a>
            </li>

         </ul>
        </div>
           
     </nav>
     <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
       <ol class="carousel-indicators">
           <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
           <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
         <div class="carousel-inner">
           <div class="carousel-item active">
              <img src="image/slide1.jpg" height="450px" class="d-block w-100 " alt="...">
            </div>
           <div class="carousel-item">
              <img src="image/slide2.jpg" height="450px"class="d-block w-100 " alt="...">
            </div>
           <div class="carousel-item">
               <img src="image/slide3.jpg" height="450px" class="d-block w-100 " alt="...">
           </div>
         </div>
         <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
           <span class="carousel-control-prev-icon" aria-hidden="true"></span>
           <span class="sr-only">Previous</span>
         </a>
         <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
           <span class="carousel-control-next-icon" aria-hidden="true"></span>
           <span class="sr-only">Next</span>
         </a>
      </div>
     <div class="main">
        <div class="row w-100 h-100">
          <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
            <div class="left-side w-100 h-100 d-flex justify-content-center align-items-center">
              <img src="image/coronavirus.jpg" class="img-circle " width="400px" height="400px">
            </div>
          </div>
           <div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
              <div class="right-side w-100 h-100 d-flex justify-content-center align-items-center">
                <h1> Lets Stay Safe & Fight Together Againt Coro<span class="corona-animation"><img src="image/corona1.png" width="100" height="100"></span>na Virus</h1>
                
              </div>
          </div>
        </div>
     </div>
     <!-- corona lattest update-->
     <section class="corona-update">
        <div class="m-3">
          <h3 class="text-uppercase text-center">Corona Lattest Update</h3>
          <hr class="w-50 bg-warning" >
        </div>
        <div class="container">
        <div class="d-flex justify-content-around align-items-center m-2">
          <div>
            <h4 class="count">1,524,23</h4>
            <p> passanger screen on airport</p>
          </div>
           <div>
            <h4 class="count">10,000</h4>
            <p> active COVID-19 Cases</p>
          </div>
           <div>
            <h4 class="count">5,000</h4>
            <p> Recovered cases</p>
          </div>
           <div>
            <h4 class="count">500</h4>
            <p> dead person</p>
          </div>
        </div>
        </div>
     </section>
     <!-- about section-->
     <div class="jumbotron pt-5 pb-2" id="aboutid">
        <h2 class ="text-center text-uppercase sub-section">About</h2>
        <div class="row m-2 mt-5">
          <div class="col-lg-5 col-md-5 col-12">
              <img src="image/aboutimage.jpg" class="img-thumbnail" width="500px" height="400px">
          </div>
           <div class="col-lg-6 col-md-6 col-12 offset-lg-1 offset-md-1">
            <h3 >What is COVID-19(Corona Virus):</h3>
            <p>Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.</p>
            <p>Most people infected with the COVID-19 virus will experience mild to moderate respiratory illness and recover without requiring special treatment.  Older people, and those with underlying medical problems like cardiovascular disease, diabetes, chronic respiratory disease, and cancer are more likely to develop serious illness.</p>
            <p>The best way to prevent and slow down transmission is be well informed about the COVID-19 virus, the disease it causes and how it spreads. Protect yourself and others from infection by washing your hands or using an alcohol based rub frequently and not touching your face</p>
            <p>The COVID-19 virus spreads primarily through droplets of saliva or discharge from the nose when an infected person coughs or sneezes, so it’s important that you also practice respiratory etiquette (for example, by coughing into a flexed elbow).</p>

          </div>
          <p>At this time, there are no specific vaccines or treatments for COVID-19. However, there are many ongoing clinical trials evaluating potential treatments. WHO will continue to provide updated information as soon as clinical findings become available.</p>
        </div>
     </div>
     <!-- corona symptons-->
     <div class="container-fluid" id="symptomid">
        <h2 class ="text-center text-uppercase sub-section"> Covid-19 symptons</h2>
        <div class="container mt-4">
          <p>The virus can cause a range of symptoms, ranging from mild illness to pneumonia. Symptoms of the disease are fever, cough, sore throat and headaches. In severe cases difficulty in breathing and deaths can occur.</p>
          <div class="row pt-3 ml-3">
            <div class="col-lg-4 col-md-4 col-sm-12 mb-2">
              <img src="image/symp1.png"  width="300" height="300">
            </div>
            <div class="col-lg-4 col-md-4 col-sm-11 mb-2">
              <img src="image/symp3.jpg"  width="300" height="300">
            </div>
            <div class="col-lg-4 col-md-4 col-11 mb-2 ">
              <img src="image/symp4.jpg"  width="300" height="300">
            </div>
          </div>
         
        </div>

     </div>
     <div class="container-fluid mt-5 pt-5 pb-4 prevent-back" id="preventionid">
        <h2 class ="text-center text-uppercase sub-section"> Covid-19 prevention</h2>
        <div class="container pt-4">
          <p>To prevent infection and to slow transmission of COVID-19, do the following:</p>
          <ul class="pl-5">
            <li>Wash your hands regularly with soap and water, or clean them with alcohol-based hand rub.</li>
            <li>Maintain at least 1 metre distance between you and people coughing or sneezing</li>
            <li>Avoid touching your face</li>
            <li>Cover your mouth and nose when coughing or sneezing.</li>
            <li>Stay home if you feel unwell.</li>
            <li>Refrain from smoking and other activities that weaken the lungs.</li>
            <li>Practice physical distancing by avoiding unnecessary travel and staying away from large groups of people.</li>
          </ul>
          <div class="row pl-5 pt-3">
            <div class="col-lg-4 col-md-4 col-12">
              <figure>
                <img src="image/COVID-19-handwashing.jpg" width="250" height="250" class="img-thumbnail img-fluid">
                <figcaption class="h4 pt-2">Hand Washing</figcaption>
              </figure>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
              <figure>
                <img src="image/distancing.jpg" width="250" height="250" class="img-thumbnail img-fluid">
                <figcaption class="h4 pt-2">Social distancing</figcaption>
              </figure>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
              <figure>
                <img src="image/face.jpg" width="250" height="250" class="img-thumbnail img-fluid">
                <figcaption class="h4 pt-2">Avoid touching Face</figcaption>
              </figure>
            </div>
          </div>
           <div class="row pl-5 pt-3">
            <div class="col-lg-4 col-md-4 col-12">
              <figure>
                <img src="image/face-cover.png" width="250" height="200" class="img-thumbnail img-fluid">
                <figcaption class="h4 pt-2">cover your face</figcaption>
              </figure>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
              <figure>
                <img src="image/stayhome.jpg" width="250" height="250" class="img-responsive img-fluid">
                <figcaption class="h4 pt-2">Stay Home Stay Safe</figcaption>
              </figure>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
              <figure>
                <img src="image/cover.png" width="250" height="250" class="img-thumbnail img-fluid">
                <figcaption class="h4 pt-2">Cover your face while coughing</figcaption>
              </figure>
            </div>
          </div>
        </div>
     </div>
       <div class="container-fluid mt-5 pt-5 pb-4" id="contactid">
        <h2 class ="text-center text-uppercase sub-section">Contact us</h2>
        <div class="container pt-4">
          <div class="row">
            <div class="col-lg-8 offset-lg-2 col-12">
              <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
                  <div class="form-group">
                   <label for="exampleFormControlInput1">User Name</label>
                   <input type="text" class="form-control" id="exampleFormControlInput1" name="name" required placeholder="enter name" autocomplete="off">
                 </div>
                
                 <div class="form-group">
                   <label for="exampleFormControlInput2">Emailaddress</label>
                   <input type="email" class="form-control" id="exampleFormControlInput2"name="email" required placeholder="email@gmail.com" autocomplete="off">
                 </div>
                 <div class="form-group">
                   <label for="exampleFormControlInput3">Address</label>
                   <input type="text" class="form-control" id="exampleFormControlInput3" name="address" required placeholder="address" autocomplete="off">
                 </div>
                  <div class="form-group">
                   <label for="exampleFormControlInput4">Mobile Number</label>
                   <input type="number" class="form-control" id="exampleFormControlInput4" name="mobile" required placeholder="mobile number" autocomplete="off">
                 </div>
                 <div class="form-group">
                   <label> Select symptons</label><br>
                   <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                        <input type="checkbox" class="custom-control-input" id="checkbox1" name="syptoms[]" value="fever" autocomplete="off">
                        <label class="custom-control-label " for="checkbox1">fever</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                        <input type="checkbox" class="custom-control-input" id="checkbox2" name="syptoms[]" value="cold" autocomplete="off">
                        <label class="custom-control-label " for="checkbox2">cold</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                        <input type="checkbox" class="custom-control-input" id="checkbox3" name="syptoms[]" value="cough" autocomplete="off">
                        <label class="custom-control-label " for="checkbox3">cough</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                        <input type="checkbox" class="custom-control-input" id="checkbox4" name="syptoms[]" value="breathing_problem" autocomplete="off">
                        <label class="custom-control-label " for="checkbox4">difficulty in breathing</label>
                    </div>
                 </div>
                
                
                 <div class="form-group">
                    <label for="exampleFormControlTextarea1">other problem</label>
                    <textarea class="form-control" name="msg"id="exampleFormControlTextarea1" rows="3"></textarea>
                 </div>
                  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="float-right pr-5 mb-5 mt-4">
        <button type="button" class="btn btn-dark btn-animation"><a href="#"class="text-white">scroll top</a></button>

      </div>

      <footer class ="mt-5 pt-5 pb-5 footer-style container-fluid">
        <h3 class="pl-5 pr-5"> Copyrite by bhavana kumari <i class="fa fa-heart" aria-hidden="true"></i><span class="h4 pl-2"><i class="fa fa-heart" aria-hidden="true"></i></span> <span class="float-right icon-color"><i class="fa fa-facebook fa-lg" aria-hidden="true"></i><i class="fa fa-twitter fa-lg pl-3" aria-hidden="true"></i><i class="fa fa-instagram fa-lg pl-3" aria-hidden="true"></i></span></h3>
        
      </footer>

   
  </body>
</html>
<?php
 if(isset($_POST['submit']))
 { print_r($_POST);
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $mobile = $_POST['mobile'];
    $symp1 = $_POST['syptoms'];
    $mess = $_POST['msg'];
    $chk="";
    foreach($symp1 as $chk1){
      $chk .=$chk1 .",";
    }
    include("dbconn.php");
    $query="INSERT INTO coronouser (id, name, email, address, mobile, symp, message) VALUES (null,'$name','$email','$address','$mobile','$chk','$mess')";
    $result=mysqli_query($conn,$query);
    if($result)
    {?>
      <script>
      alert("Data is successful submitted");
    </script><?php
    }
    else{
      ?>
      <script>
        alert("error in submition");
    </script><?php
    }

 
 mysqli_close($conn);
}
?>