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

  <footer> <span class= "footer-style">Website by &nbsp;</span>Tyler Wilson</footer>
