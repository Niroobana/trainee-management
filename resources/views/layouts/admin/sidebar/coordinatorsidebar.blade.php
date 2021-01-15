<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item nav-profile">
        <a href="#" class="nav-link">
          <div class="nav-profile-image">
            <img src="assets/images/faces/face1.jpg" alt="profile">
            <span class="login-status online"></span>
            <!--change to offline or busy as needed-->
          </div>
          <div class="nav-profile-text d-flex flex-column">
            <span class="font-weight-bold mb-2">MDTU</span>
            <span class="text-secondary text-small">Coordinator</span>
          </div>
          <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
        </a>
      </li>
      <body data-spy="scroll" data-target="navbar" data-offset="50">
      <li class="nav-item">
          <a class="nav-link" href="../../dashboard">
            <span class="menu-title">Dashboard</span>
            <i class="mdi mdi-home menu-icon"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../../Payment">
            <span class="menu-title">Payment</span>
            <i class="mdi mdi-format-list-bulleted menu-icon"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../../Facilities_payment">
            <span class="menu-title">Facilities_payment</span>
            <i class="mdi mdi-calendar menu-icon"></i>
          </a>
        </li>
     <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
          <span class="menu-title">User_Account</span>
          <i class="menu-arrow"></i>
          <i class="mdi mdi-medical-bag menu-icon"></i>
        </a>
        <div class="collapse" id="general-pages">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="../../users"> Users </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/login"> Login </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/register"> Register </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404"> 404 </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500"> 500 </a></li>
          </ul>
        </div>
      </li>
    </ul>
  </nav>
