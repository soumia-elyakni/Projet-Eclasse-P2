<?php

echo '<div class="sidebar flex-row flex-sm-column flex-shrink-1 flex-grow-1 p-3 vh-100">

<a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
    <h1 class="border-start px-1 m-4 border-info border-5 text-dark fw-bolder fs-6">E-classe</h1>
</a>

<div class="text-center">
    <img class="rounded-circle w-50" src="images/youcode.png">
    <h3 class="text-dark ">Admin name</h3>
    <p class="text-info ">Admin</p>
</div>

<section>
<div class="btns ">
  <div class="buttons d-flex flex-column flex-shrink-0">
      
    <button class="bu">
        <a href="Dashboard.php" class="text-decoration-none text-dark d-flex">
        <div class="center">
            <i class="fas fa-home"></i>
        </div>
        <div class="center0">
            Home
        </div>
        </a>
    </button>
    </form>
    
    <button class="bu">
        <div class="center">
            <i class="far fa-bookmark"></i>
        </div>
        <div class="center0">
            Courses
        </div>
    </button>

    <div>
    <button class="bu">
        <a href="students.php" class="text-decoration-none text-dark d-flex">
        <div class="center">
            <i class="fas fa-graduation-cap"></i>
        </div>
        <div class="center0">
            Students
        </div>
        </a>
    </button>
    </div>
    
    <button class="bu">
        <a href="payments.php" class="text-decoration-none text-dark d-flex">
        <div class="center">
            <i class="fas fa-dollar-sign"></i>
        </div>
        <div class="center0">
            Payment
        </div>
        </a>
    </button>
    </form>

    <button class="bu">
        <div class="center">
            <img class="icons" src="images/report.png" alt="">
        </div>
        <div class="center0">
            Report
        </div>
    </button>
    <button class="bu">
        <div class="center">
            <i class="fas fa-sliders-h"></i>
        </div>
        <div class="center0">
            Settings
        </div> 
    </button>

    
    <button class="buLogout">
        <a href="index.php" class="text-decoration-none text-dark d-flex">
        <div class="center0">
            Logout
        </div>
        <div class="logicon">
            <i><i class="fas fa-sign-out-alt"></i></i>
        </div>
        </a>
    </button>
    
</div>

</div>
</section>
</div>'

?>