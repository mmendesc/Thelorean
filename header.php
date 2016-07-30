<header class="masthead">
   <nav class="navbar navbar-static">
      <div class="container">
         <a class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
            <span class="glyphicon glyphicon-chevron-down"></span>
         </a>
         <div class="nav-collapse collase">
            <ul class="nav navbar-nav">  
                  <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                  <li><a href="personList.php"><span class="glyphicon glyphicon-globe"></span> People</a></li>
                  <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-list"></span> Categories <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                      <li><a href="categoryList.php">View categories</a></li>
                      <li><a href="newCategory.php">Create new category</a></li>
                    </ul>
                  </li>
                  <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-book"></span> Histories <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                      <li><a href="historyList.php">View histories</a></li>
                      <li><a href="newHistory.php">Create new history</a></li>
                    </ul>
                  </li>
            </ul>
            <ul class="nav navbar-right navbar-nav">
               <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> Profile <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                     <li><a href="index.php">View Profile</a></li>
                     <li><a href="updatePerson.php">Edit Profile</a></li>                   
                  </ul>
               </li>
               <li><a href="about.php"><span class="glyphicon glyphicon-info-sign"></span> About</a></li>
               <li id="logout_btn"><a href="#"><span class="glyphicon glyphicon-arrow-right"></span> Log Out</a></li>
            </ul>
         </div>      
      </div>
   </nav><!-- /.navbar -->

  <div class="container">
    <div class="row">
      <div class="col col-sm-9">
        <h1><a href="index.php"><img src="images/logomini.png"></a>
          <p class="lead">Back to the events of your life</p></h1>
      </div>
      <div class="col col-sm-3">
         <div class="well pull-right">
            <form class="form-inline" role="search">
               <div class="input-group">
                  <label class="sr-only" for="search">Search</label>
                  <input type="text" class="form-control" placeholder="Search" name="search">
                  <span class="input-group-btn">
                     <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span></button>
                  </span>
               </div>
            </form>
         </div>
      </div>
    </div>
  </div>
</header>