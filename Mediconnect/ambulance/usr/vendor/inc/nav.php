
<nav class="navbar navbar-expand navbar-dark static-top" style="background-color: #FFC38C;">

    <a class="navbar-brand mr-1" href="user-dashboard.php" style="color: black;">Online Ambulance Booking System</a>

   
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
       
    </form>

 
    <ul class="navbar-nav ml-auto ml-md-0">
    <li class="nav-item active">
        <a class="nav-link" href="../../home.php" style="color: black;">
            <!-- <i class="fas fa-fw fa-tachometer-alt"></i> -->
            <span>Home</span>
        </a>
    </li>

    <li class="nav-item active">
        <a class="nav-link" href="user-dashboard.php" style="color: black;">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: black;">
            <i class="fas fa-fw fa-bus"></i>
            <span>Ambulances</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <!-- <h6 class="dropdown-header">Available Ambulances:</h6> -->
            <a class="dropdown-item" href="usr-book-vehicle.php" style="color: black;">Book</a>
        </div>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: black;">
            <i class="fas fa-fw fa-book"></i>
            <span>Bookings</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <!-- <h6 class="dropdown-header">Bookings:</h6> -->
            <a class="dropdown-item" href="usr-book-vehicle.php"style="color: black;">Add</a>
            <a class="dropdown-item" href="user-view-booking.php" style="color: black;">View</a>
            <a class="dropdown-item" href="user-manage-booking.php" style="color: black;">Manage</a>
        </div>
    </li>

    

    <li class="nav-item">
        <a class="nav-link" href="user-view-profile.php" style="color: black;">
            <i class="fas fa-fw fa-user"></i>
            <span>Setting</span>
        </a>
        
    </li>




    <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user-circle fa-fw" style="color: black;"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="user-view-profile.php" style="color: black;">Profile</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal" style="color: black;">Logout</a>
            </div>
        </li>
    </ul>



</nav>