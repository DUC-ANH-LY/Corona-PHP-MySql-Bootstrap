<?php include('./config.php') ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title></title>
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,400;0,600;1,200;1,300&family=Roboto:wght@300;400;500&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
      crossorigin="anonymous"
    ></script>
  </head>

  <body>
    <!-- --------------Nav Bar----------- -->
    <nav class="navbar navbar-expand-lg p-3 nav-style">
      <div class="container-fluid">
        <a class="navbar-brand ps-5" href="#">COVID 19</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse pe-5" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto text-capitalize">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">about</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">symptoms</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">prevention</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="main-header">
      <div class="row w-100 h-100">
        <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
          <div
            class="leftside d-flex justify-content-center align-items-center"
          >
            <img
              src="./img/vector-stop-covid-19-sign-symbol-white-background-novel-coronavirus-outbreak-easy-editable-layered-vector-illustration_132416-1846.png"
              width="300"
              height="300"
              alt=""
            />
          </div>
        </div>
        <div class="col-lg-5 col-md-5 col-12 order-lg-2 order-1">
          <div
            class="rightside w-100 h-100 d-flex justify-content-center align-items-center"
          >
            <h1>
              Let's Stay Safe & Fight Together Against Cor
              <span class="corona-rot"
                ><img src="./img/corona1122.png" width="60" height="60" alt=""
              /></span>
              na Virus
            </h1>
          </div>
        </div>
      </div>
    </div>

    <!--  *********corona lastest update ********-->
    <section class="corona-update">
      <div class="mb-3">
        <h3 class="text-uppercase text-center">covid-19 updates</h3>
        <div class="d-flex justify-content-around align-items-center">
          <div>
            <h1 class="count">1,524,266</h1>
            <p>Passengers screened at airpot</p>
          </div>

          <div>
            <h1 class="count">512</h1>
            <p>Active COVID19 cases*</p>
          </div>

          <div>
            <h1 class="count">40</h1>
            <p>Cured/discharged cases</p>
          </div>
          <div>
            <h1 class="count">9</h1>
            <p>Death cases</p>
          </div>
        </div>
      </div>
    </section>

    <!-- ************about section ********** -->
    <div class="container-fluid sub-section pt-5 pb-5" id="aboutid">
      <div class="section_header text-center mb-5 mt-4">
        <h1>About COVID-19</h1>
      </div>
      <div class="row pt-5">
        <div class="col-lg-5 col-md-6 col-12 ms-5">
          <img src="./img/virus-corona.jpg" alt="" class="img-fluid" />
        </div>
        <div class="col-lg-6 col-md-6 col-12">
          <h2>What is COVID-19 (Corona Virus)</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam,
            est voluptatibus ducimus soluta, architecto pariatur temporibus
            provident officia vero ut illo rem vitae placeat iusto dolores iure.
            Doloribus, tempora accusantium.
          </p>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore
            aliquam, accusantium accusamus impedit nostrum pariatur eligendi
            eos, quam temporibus illum asperiores atque! Voluptates accusamus
            optio, tempora ut modi dolorem aliquid?
          </p>
        </div>
      </div>
    </div>
    <!-- **********about symptoms********** -->
    <div class="container-fluid sub-section pt-5 pb-5" id="aboutid">
      <div class="section-header text-center mb-5 mt-4">
        <h1>Coronavirus symptoms</h1>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-4 mt-5">
            <figure class="text-center">
              <img
                src="./img/corona1122.png"
                alt=""
                class="img-fluid"
                width="120"
                height="120"
              />
              <figcaption>Cough</figcaption>
            </figure>
          </div>
          <div class="col-lg-4 col-md-4 col-12 mt-5">
            <figure class="text-center">
              <img
                src="./img/corona1122.png"
                alt=""
                class="img-fluid"
                width="120"
                height="120"
              />
              <figcaption>Cough</figcaption>
            </figure>
          </div>

          <div class="col-lg-4 col-md-4 col-12 mt-5">
            <figure class="text-center">
              <img
                src="./img/corona1122.png"
                alt=""
                class="img-fluid"
                width="120"
                height="120"
              />
              <figcaption>Cough</figcaption>
            </figure>
          </div>

          <div class="col-lg-4 col-md-4 col-12 mt-5">
            <figure class="text-center">
              <img
                src="./img/corona1122.png"
                alt=""
                class="img-fluid"
                width="120"
                height="120"
              />
              <figcaption>Cough</figcaption>
            </figure>
          </div>

          <div class="col-lg-4 col-md-4 col-12 mt-5">
            <figure class="text-center">
              <img
                src="./img/corona1122.png"
                alt=""
                class="img-fluid"
                width="120"
                height="120"
              />
              <figcaption>Cough</figcaption>
            </figure>
          </div>

          <div class="col-lg-4 col-md-4 col-12 mt-5">
            <figure class="text-center">
              <img
                src="./img/corona1122.png"
                alt=""
                class="img-fluid"
                width="120"
                height="120"
              />
              <figcaption>Cough</figcaption>
            </figure>
          </div>
        </div>
      </div>
    </div>

    <!-- *******prevent section******** -->
    <div class="container-fluid sub-section pt-5 pb-5" id="aboutid">
      <div class="section-header text-center mb-5 mt-4">
        <h1>6 Steps Prevention Against Coronavirus</h1>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12 mt-5">
            <div class="row">
              <div class="col-lg-4 col-md-4 col-12">
                <figure class="text-center">
                  <img
                    src="./img/corona1122.png"
                    alt=""
                    class="img-fluid"
                    width="90"
                    height="90"
                  />
                </figure>
              </div>
              <div class="col-lg-8 col-md-8 col-12">
                <p>
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                  Atque architecto laborum porro ab ullam autem nobis doloribus
                  quas libero, rerum aut voluptate eius quaerat sequi similique
                  odit totam id hic?
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-12 mt-5">
            <div class="row">
              <div class="col-lg-4 col-md-4 col-12">
                <figure class="text-center">
                  <img
                    src="./img/corona1122.png"
                    alt=""
                    class="img-fluid"
                    width="90"
                    height="90"
                  />
                </figure>
              </div>
              <div class="col-lg-8 col-md-8 col-12">
                <p>
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                  Atque architecto laborum porro ab ullam autem nobis doloribus
                  quas libero, rerum aut voluptate eius quaerat sequi similique
                  odit totam id hic?
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-12 mt-5">
            <div class="row">
              <div class="col-lg-4 col-md-4 col-12">
                <figure class="text-center">
                  <img
                    src="./img/corona1122.png"
                    alt=""
                    class="img-fluid"
                    width="90"
                    height="90"
                  />
                </figure>
              </div>
              <div class="col-lg-8 col-md-8 col-12">
                <p>
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                  Atque architecto laborum porro ab ullam autem nobis doloribus
                  quas libero, rerum aut voluptate eius quaerat sequi similique
                  odit totam id hic?
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-lg-4 col-md-4 col-12">
            <div class="row">
              <div class="col-lg-4 col-md-4 col-12">
                <figure class="text-center">
                  <img
                    src="./img/corona1122.png"
                    alt=""
                    class="img-fluid"
                    width="90"
                    height="90"
                  />
                </figure>
              </div>
              <div class="col-lg-8 col-md-8 col-12">
                <p>
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                  Atque architecto laborum porro ab ullam autem nobis doloribus
                  quas libero, rerum aut voluptate eius quaerat sequi similique
                  odit totam id hic?
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-12">
            <div class="row">
              <div class="col-lg-4 col-md-4 col-12">
                <figure class="text-center">
                  <img
                    src="./img/corona1122.png"
                    alt=""
                    class="img-fluid"
                    width="90"
                    height="90"
                  />
                </figure>
              </div>
              <div class="col-lg-8 col-md-8 col-12">
                <p>
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                  Atque architecto laborum porro ab ullam autem nobis doloribus
                  quas libero, rerum aut voluptate eius quaerat sequi similique
                  odit totam id hic?
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-4 col-12">
            <div class="row">
              <div class="col-lg-4 col-md-4 col-12">
                <figure class="text-center">
                  <img
                    src="./img/corona1122.png"
                    alt=""
                    class="img-fluid"
                    width="90"
                    height="90"
                  />
                </figure>
              </div>
              <div class="col-lg-8 col-md-8 col-12">
                <p>
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                  Atque architecto laborum porro ab ullam autem nobis doloribus
                  quas libero, rerum aut voluptate eius quaerat sequi similique
                  odit totam id hic?
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- **********Contact Us******** -->
    <div class="container-fluid sub-section pt-5 pb-5" id="aboutid">
      <div class="section-header text-center mb-5 mt-4">
        <h1>6 Steps Prevention Against Coronavirus</h1>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 offset-lg-2 col-12 mt-5">
            <form method="POST" action="">
              <div class="mb-3">
                <label class="form-label">Username</label>
                <input
                  type="text"
                  class="form-control"
                  name="username"
                  placeholder="name"
                />
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"
                  >Email address</label
                >
                <input
                  type="email"
                  class="form-control"
                  id="exampleFormControlInput1"
                  placeholder="name@example.com" name="email"
                />
              </div>
              <div class="mb-3">
                <label class="form-label">Mobile</label>
                <input
                  type="text"
                  class="form-control"
                  name="mobile"
                  placeholder="mobile"
                />
              </div>

              <label class="form-label">Select Symptoms</label>
              <div class="form-check">
                <input
                name="symp[]"
                  class="form-check-input"
                  type="checkbox"
                  value="cold"
                  id="flexCheckDefault"
                />
          
                  Cold
               
              </div>
              <div class="form-check">
                <input
                name="symp[]"
                  class="form-check-input"
                  type="checkbox"
                  value="fever"
                  id="flexCheckChecked"
            
                />
               
                  Fever
               
              </div>
              <div class="form-check">
                <input
                name="symp[]"
                  class="form-check-input"
                  type="checkbox"
                  value="Difficulty in Breath"
                  id="flexCheckChecked"
                  
                />
                
                  Difficulty in Breath
               
              </div>
              <div class="form-check">
                <input
                 name="symp[]"
                  class="form-check-input"
                  type="checkbox"
                  value="Felling Weak"
                  
                  
                /> Felling Weak
                
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label"
                  >Example textarea</label
                >
                <textarea
                  class="form-control"
                  id="exampleFormControlTextarea1"
                  rows="3"
                  name ="comm"
                ></textarea>
              </div>
              <button type="submit" name="submit" class="btn btn-primary" value = "submit">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- *********Footer******** -->
    <footer class="mt-5">
      <div class="footer-style  text-center container-fluid">
        <p>© Copyright by DucAnh</p>
      </div>
    </footer>
  </body>
</html>

<?php 
  if(isset($_POST['submit'])) {
      $username  = $_POST['username'];
      $email  = $_POST['email'];
      $mobile  = $_POST['mobile'];
      $symp  = $_POST['symp'];
      $comm  = $_POST['comm'];
      $s  = "";
 
      foreach($symp as $chk1) $s .= $chk1.",";
      $sql = "INSERT INTO survey(username, email,mobile,symp,message) VALUES('$username','$email','$mobile','$s','$comm')";
      $res = mysqli_query($conn,$sql);
      if($res ){
        echo "<div>good</div>";
      }
      else{
        echo "<div>failed</div>";
      }
  }


?>
