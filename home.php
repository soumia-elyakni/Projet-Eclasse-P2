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
    <main class=" mx-2">
       <div class="d-lg-flex d-md-flex gap-md-2 d-sm-block justify-content-around">
           <div class="card mt-2" style="width: 13rem; background: #F0F9FF;">
                <div class="card-body">
                   <img src="images/svg/Stud2.svg">
                   <h5 class="card-title">Students</h5>
                   <p class="card-text" style="text-align:end">243</p>
                </div>
           </div>

           <div class="card mt-2" style="width: 13rem; background:#FEF6FB;">
    
                <div class="card-body">
                   <img src="images/svg/Crs2.svg">
                   <h5 class="card-title">Course</h5>
                   <p class="card-text" style="text-align:end">13</p>
                </div>
           </div>

           <div class="card mt-2" style="width: 13rem; background:#FEFBEC;">
    
                <div class="card-body">
                   <img src="images/svg/pay2.svg">
                   <h5 class="card-title">Payements</h5>
                   <p class="card-text" style="text-align:end"><span>DHS</span>556,000</p>
                </div>
           </div>

           <div class="card mt-2" style="width: 13rem; background: linear-gradient(to right bottom, #0e9ef7, #00bde9, #36d1c5, #a0dea9, #e8e6aa);">
    
                <div class="card-body">
                   <img src="images/svg/user.svg">
                   <h5 class="card-title">Users</h5>
                   <p class="card-text" style="text-align:end">3</p>
                </div>
           </div>
         </div>
    </main>
</body>
</html>