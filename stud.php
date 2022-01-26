<?php
include 'studentstable.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/3a3f417346.js" crossorigin="anonymous" defer></script>
    <link rel="stylesheet" href="main.css">
    
</head>
<body class="m-0 p-0 w-100 h-100 bg-light">

    <?php 
    require 'dash.php'
    ?>
    <main>
                <!--avanttable-->
      <section class="nav_bar d-flex align-items-center px-3">
            <h2 class="tabtitle col-9 align-self-center mt-1">Students list</h2> 
            <div class="col-3 align-self-center d-flex">
              <button style="border: transparent; background: transparent; align-self: center;"> 
                 <img src="images/svg/buttonpay.svg">
              </button>
              <button class="addns text-white" style="border : none; background:#00C1FE; border-radius: 4px;">
             ADD NEW STUDENT
             </button>
             </div>
      </section>

                   <!--table-->
          
      <div class="m-3 mt-1">
        <table class="table table-responsive>
          <thead class="text-muted" style="background: transparent;">
            <tr>
              <td class="d-none"></td>
              <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Phone</th>
              <th scope="col">Enroll Number</th>
              <th scope="col" colspan="2">Date of admission</th>
              <td></td>
            </tr>
          </thead>
          <tbody>
          
          <?php

          foreach($students as $key)
           echo "
              <tr>
              <td class='pt-3'><img src='images/img_table.png' class='rounded-circle' alt='img'></td>
              <td class='pt-3'>$key[name]</td>
              <td class='pt-3'>$key[mail]</td>
              <td class='pt-3'>$key[phone]</td>
              <td class='pt-3'>$key[Enrlnbr]</td>
              <td class='pt-3'>$key[Addate]</td> 
              <td class='pt-3'><button style='background-color: transparent; border:transparent'><i class='fas fa-pen' style='color: turquoise;'></i></td></button>
              <td class='pt-3'><button style='background-color: transparent; border:transparent'><i class='fas fa-trash' style='color: turquoise;'></i></td></button>
            </tr>"
          
          ?>
          
         </tbody>
        </table> 
    </main>
</body>
</html>