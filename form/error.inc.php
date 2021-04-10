<style type="text/css">

/*
-----------------------------------------

Universal Styling CSS

-----------------------------------------
 */

@font-face{
  font-family: 'Acme', sans-serif;
  font-family: 'Josefin Sans', sans-serif;}

* {
  border: 0;
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

p {
  font-family: 'Josefin Sans', sans-serif;
  line-height: 25px;
  padding: 10px;
  font-size: 17px;
}

h1 {
  color: white;
  font-family: 'Acme', sans-serif;
  text-align: center;
  font-size: 40px;
  margin: 12px 0 30px;
}

h2 {
  color: white;
  font-family: 'Acme', sans-serif;
  text-align: center;
  font-size: 40px;
  margin: 12px 0 30px;
}

a {
	text-decoration: none;
	color: #cce4b3;
}

 .button {
  display: inline-block;
  margin-top: 100px;
  font-family: 'Acme', sans-serif;
  color: black;
  background-color: #edc7df;
  border-radius: 6px;
  padding: 10px;
  max-width: 145px;
  min-width: 145px;
  text-align: center;
  margin: 100px 30px;
  border: 4px solid black;
  text-decoration: none;
  transition: .3s;
 }

.button:hover {
  background-color: #6fc9c1;
  transition: .3s;
}

.button:active {
  background-color: #03adbf;

}

header {
  background-color: #111111;
  padding: 10px;
  width: 100vw;
  height: 18%;
  z-index: 999;
  position: fixed;

}

.content {
  background-color: #333333;
  color: white;
  margin: 0 auto;
  max-width: 78%;
  padding: 10px;
  min-height: 100vh;
  position: relative;

}

main {
  background-color: #6fc9c1;
  padding-top: 120px; /* I removed the break tags and adding padding to move the main content down */
}

footer {
  background-color: #111111;
  color: white;
  text-align: center;
  z-index: 5;
  padding: 25px;
  font-family: 'Acme', sans-serif;
}

.footer-style {
  color: #7c5da7;
}
 /*
 -----------------------------------------

 Navigation Bar Styling CSS

 -----------------------------------------
  */

.menu { /*changed the width to 80% and removed the max width. Displayed it inline-block so it shows up on the same line as your logo */
  width: 130%;
  font-family: 'Acme', sans-serif;
  font-size: 20px;
  margin: 0 auto;
  display: inline-block;
  text-align: center;
  }

.menu ul {
  list-style: none;
  }

.sub-menu {
  position: absolute;
  top: 37px;
  width: 100%;
  z-index: 9999;
  display: none;
}

.menu ul li a:hover {
  background-color: #817fbc;
  transition: .3s;
}

.menu ul li a:active {
  background-color: #03adbf; }

.menu-item:hover .sub-menu {
  display: block;
}

.menu > ul > li {
  display: inline-block;
  width: 10%;
  color: white;
  transition: .3s;
  margin-bottom: 1px;
  position: relative;
  vertical-align: top;
  }

.menu ul li a {
  text-decoration: none;
  background-color: #111111;
  color: white;
  display: block;
  padding: 10px;
  }

.logo { /* Removed float left. Changed the width to 5% */
  width: 5%;
  float: left;
  margin: 5px 120px;
  display: inline-block;
  }

</style>

<header>

<main>



  <img class="logo" src="images/logo.png" alt="Tyler's logo">

  <nav class="menu">
    <ul>
      <li class="menu-item"><a href="portfolio.html">Portfolio</a>
        <ul class="sub-menu">
          <li class="menu-item"><a href="portfolio.html#film">Film</a></li>
          <li class="menu-item"><a href="portfolio.html#writing">Writing</a></li>
          <li class="menu-item"><a href="portfolio.html#graphics">Graphics</a></li>
        </ul>
      </li>
      <li class="menu-item"><a href="blog.html">Blog</a></li>
      <li class="menu-item"><a href="about.html">About Me</a></li>
      <li class="menu-item"><a href="contact.html">Contact</a></li>
    </ul>
  </nav>
</header>

<section class="content">

<h1>Missing fields</h1>
<p>Sorry, you have not completed all of the required fields.</p>
<p>Please hit <a href="#" onClick="history.go(-1)">back</a> and complete the following required fields.</p>

<ul>
<?php
	for($i=0; $i<count($this->missing_required_fields); $i++){
		echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
	}
?>
</ul>

<p><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></p>

<p>(Shoutout to <a href="http://www.inventpartners.com">Invent Partners Web Design York</a> for their handy form processing tool!</p>

</section>

</main>

  <footer> <span class= "footer-style">Website by &nbsp;</span>Tyler Wilson</footer>
