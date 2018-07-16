  <style>
#mySidenav a {
    position: absolute;
    left: -80px;
    transition: 0.3s;
    padding: 15px;
    width: 100px;
    text-decoration: none;
    font-size: 20px;
    color: white;
    border-radius: 0 5px 5px 0;
}

#mySidenav a:hover {
    left: 0;
}

#about {
    top: 20px;
    background-color: #4CAF50;
}

#blog {
    top: 80px;
    background-color: #2196F3;
}

#projects {
    top: 140px;
    background-color: #f44336;
}

#contact {
    top: 200px;
    background-color: #555
}
</style>  

<div id="mySidenav" class="sidenav">
  <!--<a href="#" id="about">About</a>-->
  <a href="index.php" id="blog">HOME</a>
  <a href="SearchBooks.php" id="projects">Buy</a>
  <a href="EnterBooks.php" id="contact">Sell</a>
</div>

