<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/3a3f417346.js" crossorigin="anonymous" defer></script>
    <link rel="stylesheet" href="main.css">
</head>

<body class="m-0 p-0 w-100 h-100 bg-light">
    <?php include_once('dash.php');?>
    <main>
    <section class="cards row-cols-lg-12 d-lg-flex row-cols-md-12 d-md-block ms-2 ps-2 mt-4 justify-content-center row-cols-sm-11"> 
            <div class="row gap-3 col-lg-6 col-md-12 col-sm-11 d-md-flex d-sm-block mb-sm-3 ps-md-1 ps-sm-1 justify-content-lg-center justify-content-md-left justify-content-sm-left">
                <div class="card col-lg-5 col-md-5 col-sm-10 rounded-3 mb-md-2 pt-1 mb-sm-3" style="background: #F0F9FF;">
                  <div>
                    <i class="fas fa-graduation-cap"></i>
                      <p>Students</p>
                  </div>
                  <div>
                      <p class="nbr">243</p>
                  </div>
                </div>
                <div class="card col-lg-5 col-md-5 col-sm-10 rounded-3 mb-md-2 pt-1 mb-sm-3" id="" style="background:#FEF6FB;">
                    <div>
                        <i class="far fa-bookmark"></i>
                        <p>Course</p>
                    </div>
                    <div>
                        <p class="nbr">13</p>
                    </div>
                </div>
            </div>
            <div class="row gap-3 col-lg-6 col-md-12 col-sm-11 d-md-flex mb-sm-3 ps-md-1 ps-sm-1 justify-content-left ps-1">
                <div class="card col-lg-5 col-md-5 col-sm-10 rounded-3 mb-md-2 pt-1 mb-sm-3" id="payment" style="background:#FEFBEC;">
                    <div>
                        <i class="fas fa-dollar-sign"></i>
                        <p>Payment</p>
                    </div>
                    <div>
                        <p class="nbr"><span>DHS</span>556,000</p>
                    </div>
                </div>
                <div class="card col-lg-5 col-md-5 col-sm-10 bg-info rounded-3 mb-md-2 pt-1 mb-sm-3" id="user" style="background: linear-gradient(to right bottom, #0e9ef7, #00bde9, #36d1c5, #a0dea9, #e8e6aa);">
                    <div>
                        <i class="fas fa-user"></i>
                        <p>Users</p>
                    </div>
                    <div>
                        <p class="nbr">3</p>
                    </div>
                </div>
            </div>
                      
          </section>
        </section>
    </main>
</body>
</html>