<style type="text/css">

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

}


<header>

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

  <footer> <span class= "footer-style">Website by &nbsp;</span>Tyler Wilson</footer>
