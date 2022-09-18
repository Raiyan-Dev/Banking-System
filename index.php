<!doctype html >
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">

    <title>Sparks GRIP Bank</title>
  </head>

  <body style="background-image: linear-gradient(62deg, #e2e078 0%, #E0C3FC 100%);">
  <?php
  include 'navbar.php';
  ?>
  
      <div class="container-fluid mt-5">
      <!-- Introduction section -->
            <div class="" >
              <div class="col-sm-12 col-md" >
                <div class="heading text-center my-5">
                  <h3>Welcome to</h3>
                  <h1 class="mb-2 mt-4">GRIP BANK</h1><br><br>
                  <img src="img/bank.png" class="OP img-fluid mt-2 pt-2">
                </div>
              </div>
            </div><br><br>
      <!-- End Intro -->

      
      <!-- Services section -->
      <section class="container mb-5" id="services">
      <hr><br><br>
      <h2 class="heading " style="color:black"><b> Services we provide</b></h2><br>
            <div class="row activity text-center"  >
                  <div class="col-md act">
                    <img src="img/makeTransaction.png" class="img-fluid">
                      <br/>
                    <a href="transfermoney.php"><button class="mt-3" style="background-color : #2785C4;box-shadow: 5px 10px 10px rgb(0 0 0 / 25%);">Make a Transaction</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/viewCust.png" class="img-fluid">
                      <br/>
                    <a href="viewcustomers.php"><button class="mt-3" style="background-color : #2785C4;box-shadow: 5px 10px 10px rgb(0 0 0 / 25%);">View Customers</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/transHistory.png" class="img-fluid">
                      <br/>
                    <a href="transactionhistory.php"><button class="mt-3" style="background-color : #2785C4; box-shadow: 5px 10px 10px rgb(0 0 0 / 25%);">Transaction History</button></a>
                  </div>
            </div>
      </div><br>
      <!-- </div> -->
      <!-- End Service Section -->


  <!-- About -->
  <section id="about" class="container mt-5" >
  <hr><br/><br><br>
    <h2 class="heading" style="color: black" >All you need to know About Us!</h2><br><br>
    <div class="container mb-5">
      <div class="row">
        <div class="col-md-6 mx-auto mb-5 mt-2">
          <img class=" mt-3 " style="width:400px; box-shadow: 5px 10px 10px rgb(0 0 0 / 25%);" src="img/banksys.jpg" alt="TSF Bank">
        </div>
        <div class="col-md-6 mx-auto mt-4">
          <div>
            <span class="text" style="color: black"><b>GRIP Bank </b></span>
          </div><br>
          <div class="mt-2">
            <span class="sub-content">It is a Basic Banking System where transactions take place
              between users.You can create a account in the bank.It can transfer Money between multiple accounts, view all Customer's data 
              and view all the past transactions and you can also contact us.</span>
          </div><br>
          <a href="#services" class="btn btn-outline-primary mt-3">Learn More</a>
        </div>
      </div>
    </div>
  </section><br>
  <!-- </div> -->
  <!-- End About -->


  <!-- Contact -->
  <!-- <div style="background-color : #82E0AA;" > -->
  <section class="mx-auto " id="contact" >
  <hr>
    <h2 class="heading mt-5" >Contact Us</h2><br><br>
    <form >
      <div class="row mb-3" >
        <div class="col">
          <input type="text" class="form-control" placeholder="First name" aria-label="First name">
        </div>
        <div class="col">
          <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
        </div>
      </div>
      <div class="mb-3">
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
          placeholder="example@gmail.com">
      </div>
      <div class="mb-3">
        <input type="text" class="form-control" placeholder="Enter your Place" aria-label="City">
      </div>
      <div class="mb-3">
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
          placeholder="Leave your comments here...."></textarea>
      </div>
      <button type="submit" class="btn btn-primary mb-5" style="box-shadow: 5px 10px 10px rgb(0 0 0 / 25%);">Submit</button>
    </form>
  </section>
  <!-- </div> -->
  <!-- End Contact -->
  

      <footer class="text-center mt-5 py-2 bg-light" >
        <p>&copy 2022. Made by <b>Raiyan Khan 😎</b> 
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>