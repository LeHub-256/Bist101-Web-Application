<?PHP

	session_start();

	if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {
		header ("Location: http://localhost/");
	}

?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>bist101 - about</title>
<link href="css/aboutPageStyle.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap-3.3.7.css" rel="stylesheet" type="text/css">

<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.-->

<body style="padding-top: 50px;">
<?php include "nav.html"; ?>

<!-- Header content -->
<header>
  <div class="profileLogo"> 
    <!-- Profile logo. Add a img tag in place of <span>. -->
    <p class="logoPlaceholder"><!-- <img src="logoImage.png" alt="sample logo"> --><span>SzHUDDEA</span></p>
  </div>
  <div class="profilePhoto"> 
    <!-- Profile photo --> 
    <img src="../allimgs/bist101.png" alt="sample" class="profilePhoto"> </div>
  <!-- Identity details -->
  <section class="profileHeader">
    <h1>BIST101</h1>
    <h3>A SZHUDDEA INC. PRODUCT</h3>
    <hr>
    <p>Bist101 is a critical student companion technology intended to help and assist university students in the computing and information sciences faculty by providing all the necessary information required to archieve fundamental and even expert knowledge to succeed as IT personnels in the best environment possible yet with the least effort.</p>
  </section>
  <!-- Links to Social network accounts -->
  <aside class="socialNetworkNavBar">
    <div class="socialNetworkNav"> 
      <!-- Add a Anchor tag with nested img tag here --> 
      <img src="AboutPageAssets/images/social.png" alt="facebook"> </div>
    <div class="socialNetworkNav"> 
      <!-- Add a Anchor tag with nested img tag here --> 
      <img src="AboutPageAssets/images/social.png"  alt="twitter"> </div>
    <div class="socialNetworkNav"> 
      <!-- Add a Anchor tag with nested img tag here --> 
      <img src="AboutPageAssets/images/social.png"  alt="linkedIn"> </div>
    <div class="socialNetworkNav"> 
      <!-- Add a Anchor tag with nested img tag here --> 
      <img src="AboutPageAssets/images/social.png"  alt="whatsApp"> </div>
  </aside>
</header>
<!-- content -->
<section class="mainContent"> 
  <!-- Contact details -->
  <section class="section1">
    <h2 class="sectionTitle">contact info</h2>
    <hr class="sectionTitleRule">
    <hr class="sectionTitleRule2">
    <div class="section1Content">
      <p><span>Email :</span> judevercetti@gmail.com</p>
      <p><span>Website :</span> szhuddea.orgfree.com</p>
      <p><span>Phone :</span> +256 778-955-346</p>
      <p><span>Address :</span> Makerere University, Kla</p>
    </div>
  </section>
  <!-- Previous experience details -->
  <section class="section2">
    <h2 class="sectionTitle">Szhuddea inc.</h2>
    <hr class="sectionTitleRule">
    <hr class="sectionTitleRule2">
    <!-- First Title & company details  -->
    <article class="section2Content">
      <h2 class="sectionContentTitle">Jude vercetti</h2>
      <h3 class="sectionContentSubTitle">Founder | CEO</h3>
      <p class="sectionContent">  </p>
    </article>
    <!-- Second Title & company details  -->
    <article class="section2Content">
      <h2 class="sectionContentTitle"> Malcolm mark</h2>
      <h3 class="sectionContentSubTitle">Co-founder</h3>
      <p class="sectionContent">  </p>
    </article>
    <!-- Replicate the above Div block to add more title and company details --> 
  </section>
  <!-- Links to expore your past projects and download your CV -->
  <aside class="externalResourcesNav">
    <div class="externalResources"> <a href="#" title="Download CV Link">Visit szhuddea.com</a> </div>
    <span class="stretch"></span>
    <div class="externalResources"><a href="#" title="Behance Link">Contact us</a> </div>
    <span class="stretch"></span>
    <div class="externalResources"><a href="#" title="Github Link">GITHUB</a> </div>
  </aside>
</section>
<footer>
  <hr>
  <p class="footerDisclaimer">2019  Copyrights - <span>All Rights Reserved</span></p>
  <p class="footerNote">Bist101 - <span>bist101@live.com</span></p>
</footer>

<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap-3.3.7.js"></script>
</body>
</html>
