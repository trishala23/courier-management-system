<style type="text/css">
  /* The sidebar menu */
.sidenav {
  height: 100%; /* Full-height: remove this if you want "auto" height */
  width: 70px; /* Set the width of the sidebar */
  position: fixed; /* Fixed Sidebar (stay in place on scroll) */
  z-index: 1; /* Stay on top */
  top: 0; /* Stay at the top */
  left: 0;
  background-color: #660000; /* Black */
  overflow-x: hidden; /* Disable horizontal scroll */
  padding-top: 20px;
}

/* The navigation menu links */
.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 15px;
  color: #ededde;
  display: block;
}

/* When you mouse over the navigation links, change their color */
.sidenav a:hover {
  color: #f1f1f1;
}

/* Style page content */
.main {
  margin-left: 160px; /* Same as the width of the sidebar */
  padding: 0px 10px;
}

/* On smaller screens, where height is less than 450px, change the style of the sidebar (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

</style>
<body>

<!-- Side navigation -->
<div class="sidenav">
  
      
        <a href="home.php"><i class="lnr lnr-home"></i> </a>
  
           
          
          
   <li><a href="Add_consignment.php"><i class="lnr lnr-cog"></i>add courier</a></li>
       <li><a href="view_consignment.php"><i class="lnr lnr-cog"></i>view courier</a></li>
        <li><a href="track.php"><i class="lnr lnr-cog"></i>Track courier</a></li>
            <li> <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
  
</div>
 








