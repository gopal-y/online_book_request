

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
<style>

.blink{
		width:600px;
		height: 50px;

		  padding-top:100px ;
		  
		text-align: center;
		line-height: 50px;
	}
span{
		font-size: 25px;
		font-family: cursive;
		color: white;
		animation: blink 1s linear infinite;
	}
@keyframes blink{
0%{opacity: 0;}
50%{opacity: .5;}
100%{opacity: 1;}
}
</style>

    <title>Buy or Sell Books</title>

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.0/examples/cover/cover.css" rel="stylesheet">
  </head>

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
<body style="background: linear-gradient(#2c7ac5,black); ">
<div id="mySidenav" class="sidenav">
  <!--<a href="#" id="about">About</a>-->
  <a href="index.php" id="blog">HOME</a>
  <a href="SearchBooks.php" id="projects">Buy</a>
  <a href="EnterBooks.php" id="contact">Sell</a>
</div>


      <div align="center">
      <div style="padding:100px">

		<span>Buy Or Sell BOOKS Online</span></div><br/><br/>
      	<div  class="inner cover">  
        	<p class="alert-heading"></p>
        <p class="lead">
          <a href="SearchBooks.php" class="btn btn-lg btn-success">Buy</a>          <a href="EnterBooks.php" class="btn btn-lg btn-danger">Sell</a>
        </p>

</div>
      


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="https://getbootstrap.com/assets/js/vendor/popper.min.js"></script>
    <script src="https://getbootstrap.com/dist/js/bootstrap.min.js"></script>
  </body>
  <footer>
        <div >
          <p>All rights Reserved 2018</p>
   
        </div>
      </footer>
   
</html>
