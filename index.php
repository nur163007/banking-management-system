<?php
include 'complain.php';
?>
<!DOCTYPE html>
<html>
<head>   
   <title>BMS</title>
    <meta charset="utf-8">
				<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                <link rel="shortcut icon" href="card.jpg"/>
                
				<!-- Bootstrap CSS -->
				<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700|PT+Sans:400,700&display=swap" rel="stylesheet">
				<link rel="stylesheet" href="bootstrap.min.css">
				<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" />
				
				<link rel="stylesheet" href="animate.min.css">
				<link rel="stylesheet" href="style2.css">
				<title>BMS</title>
</head>
<body> 
<section class="one">
	<!--header1 part start-->
<div class="header1 bg-dark">
  <div class="row">
    <div class="col-lg-6 col-sm-3 col-12 m-auto d-block topheaderpart">
	<div class="row">
    <div class=" col-lg-10 offset-lg-1">
      <div class="navbar nav"style="padding:10px 30px;">	  
 <a class="active" href="#map"><i class="fa fa-map-marker"></i> Branch & ATMs </a>  
 <a href="emi.html"><i class="fa fa-calculator"></i> EMI Calculator</a> 
  <a href="rm1.html"><i class="fa fa-user-circle"></i> Agent Banking</a>
 
    </div>
    </div>
    </div>
	</div>
	
    <div class="col-lg-4 col-sm-12 col-12 d-block m-auto">
    <div class="navbar bg-info navtop"style="padding:12px 48px;">
      <a href="openaccount.php"><i class="fa fa-address-book"></i> Account opening </a> 
      <a href="loginres.php"><i class="fa fa-user-circle-o"></i> Admin</a>
      <a href="customerlogin.php"><i class="fa fa-users"></i> Customer</a>
    </div>
    </div>
     <div class="col-lg-1 col-md-4 col-sm-10 d-none d-lg-block m-auto">
    
    </div>
  </div>
</div>
<!--header1 part End-->


<!--header2 part start-->
<div class="header2">

<div class="container mt-2">
<div class="row">
  <div class="col-lg-3 col-10">
  <img src="logo.png" width="100%" height="80px">
  </div>
  <div class="col-2 d-lg-none mt-3">
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"><i class="fa fa-reorder" style="font-size:33px;"></i></span>
  </button>
</div>
    <div class="col-lg-3 col-md-4 col-sm-10 col-7 d-block mr-auto mt-3 topnavbar">
	<div class="row">
    <div class=" col-lg-2 col-3 mr-auto mt-3">
       <i class="fa fa-envelope text-dark" style="font-size:32px;"></i> 
	  </div>
	  <div class="navbar col-lg-10 col-9 ml-auto">
   <p class="text-dark">Send Us Message <br><a href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox?compose=new" target="_blank"class="text-success">infofmdbms@gmail.com</a></p>
    </div>
    
    </div>
    </div>
	
	
	<div class="col-lg-3 col-md-4 col-sm-10 col-5 d-block mr-auto mt-3">
	<div class="row">
    <div class=" col-lg-2 col-3 ml-auto mt-3">
       <i class="fa fa-phone text-dark" style="font-size:32px;"></i> 
	  </div>
       <div class="navbar col-lg-10 col-9 ml-auto">
   <p class="text-dark">	
	<a href="tel:16243"class="text-success">16243(local)</a><br><a href="tel:+880 1609072754"class="text-success">+015448487858</a></p>

    </div>
    </div>
    </div>

    <div class="col-lg-3 col-md-4 col-sm-10 d-none d-lg-block">
	<img src="virus.gif" alt="not found"style="height:90px;width:160px;">
    </div>
</div>
</div>

</div>
<!--header2  End-->
</section>
<!--section one End-->

<section class ="two">
<!--sction two  start-->
<nav class="navbar navbar-expand-lg bg-success navbar-dark justify-content-center">
 <!--navbar  start-->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav m-auto">
    <li class="nav-item active">
      <a class="nav-link active" href="index.php"><i class="fa  fa-bank"></i> Home</a>
    </li>
	
    <li class="nav-item">
	<div class="dropdown">
      <a class="nav-link active" href="#"><i class="fa fa-money text-white"></i> Retail</a>
	   <div class="dropdown-content bg-success">
	    <a class="dropdown-item" href="deposit_products.html"><i class="fa fa-database text-white"></i> Deposit products</a>
	    <a class="dropdown-item" href="loan1.html"><i class="fa fa-database text-white"></i> Loan products</a>
	    <a class="dropdown-item" href="student.html"><i class="fa fa-database text-white"></i> Student Banking</a>
	    <a class="dropdown-item" href="others.html"><i class="fa fa-database text-white"></i> Others</a>
     </div>
	  </div>
	 
    </li>
	 
   <li class="nav-item">
   <div class="dropdown">
      <a class="nav-link active" href="#"><i class="fa fa-usd text-white"></i> wholesale</a>
	   <div class="dropdown-content bg-success">
	   <a class="dropdown-item" href="term_finance.html"><i class="fa fa-usd text-white"></i> Term Finance</a>
	   <a class="dropdown-item" href="capital.html"><i class="fa fa-usd text-white"></i> Working capital Finance </a>
	   <a class="dropdown-item" href="trade.html"><i class="fa fa-usd text-white"></i> Trade Finance </a>
	   <a class="dropdown-item" href="off-shor.html"><i class="fa fa-usd text-white"></i> Off-Shore Banking</a>
	   <a class="dropdown-item" href="sn.html"><i class="fa fa-usd text-white"></i> Syndications & structured</a>
	   <a class="dropdown-item" href="cash_mange.html"><i class="fa fa-usd text-white"></i> BMS cash Managenment</a>

  </div>
	  </div>
	 
    </li>
    <li class="nav-item">
	 <div class="dropdown">
      <a class="nav-link active" href="#"><i class="fa fa-cubes text-white"></i> SME</a>
	   <div class="dropdown-content bg-success">
	   <a class="dropdown-item" href="SME.html"><i class="fa fa-hdd-o text-white"></i> SME Products</a>
	   <a class="dropdown-item" href="women.html"><i class="fa fa-hdd-o text-white"></i> Women enterprenure</a>
	   <a class="dropdown-item" href="agri.html"><i class="fa fa-hdd-o text-white"></i> Agri Finance </a>
	   <a class="dropdown-item" href="green.html"><i class="fa fa-hdd-o text-white"></i> Green energy Finance</a>
	   <a class="dropdown-item" href="client.html"><i class="fa fa-hdd-o text-white"></i> Clients stories</a>
      
	  </div>
	  </div>
    </li>
	<li class="nav-item">
	 <div class="dropdown">
      <a class="nav-link active" href="#"><i class="fa fa-edit text-white"></i> NRB</a>
	     <div class="dropdown-content bg-success">
		 <a class="dropdown-item" href="nrb.html"><i class="fa fa-user-circle text-white"></i> NRB Saving A/C</a>
		 <a class="dropdown-item" href="dpd.html"><i class="fa fa-user-circle text-white"></i> NRB DPS A/C</a>
		 <a class="dropdown-item" href="fdr.html"><i class="fa fa-user-circle text-white"></i> NRB FDR</a>
  
  </div>
	  </div>
    </li>
	<li class="nav-item">
      
	  	 <div class="dropdown">
      <a class="nav-link active" href="#"><i class="fa fa-diamond text-white"></i> Treasury</a>
	   <div class="dropdown-content bg-success">
	   <a class="dropdown-item" href="market.html"><i class="fa fa-gift text-white"></i> Money Market</a>
	   <a class="dropdown-item" href="dibor.html"><i class="fa fa-gift text-white"></i> DIBOR</a>
	   <a class="dropdown-item" href="foren.html"><i class="fa fa-gift text-white"></i> Foreign Exchange</a>
	   <a class="dropdown-item" href="pr.html"><i class="fa fa-gift text-white"></i> Primary Dealers</a>
 
  </div>
	  </div>
    </li>
	<li class="nav-item">
    
	  
	  	 <div class="dropdown">
      <a class="nav-link active" href="#"><i class="fa fa-universal-access text-white"></i> priviledge Bakning</a>
	   <div class="dropdown-content bg-success">
	   <a class="dropdown-item" href="priv.html"><i class="fa fa-shopping-bag text-white"></i> Benifits & Service</a>
	   <a class="dropdown-item" href="member.html"><i class="fa fa-user-circle text-white"></i> Becoming a Member</a>
	   <a class="dropdown-item" href="partners.html"><i class="fa fa-users text-white"></i> priviledge Partners</a>
	   <a class="dropdown-item" href="faq.html"><i class="fa fa-question-circle text-white"></i> priviledge FAQ</a>
 
  </div>
	  </div>
    </li>
	<li class="nav-item">
 
	  	 <div class="dropdown">
      <a class="nav-link active" href="#"><i class="fa fa-credit-card-alt text-white"></i> Cards</a>
	   <div class="dropdown-content bg-success">
	    <a class="dropdown-item" href="card.html"><i class="fa fa-cc-mastercard text-white"></i> Debit Cards</a>
	    <a class="dropdown-item" href="card1.html"><i class="fa fa-cc-visa text-white"></i> Credit Cards</a>
	    <a class="dropdown-item" href="prepaid.html"><i class="fa fa-cc-amex text-white"></i> prepaid Card</a>
	    
   </div>
	  </div>
    </li>
	<li class="nav-item active">
      <a class="nav-link" href="rm2.html"><i class="fa fa-send text-white"></i> Air Lounge</a>
    </li>
	<li class="nav-item active">
      <a class="nav-link" href="career.html"><i class="fa fa-handshake-o text-white"></i> Career</a>
    </li>
	<li class="nav-item active">
      <a class="nav-link" href="about us.html"><i class="fa fa-address-card text-white"></i> About us</a>
    </li>
  </ul>
  </div>
</nav>
<!--navbar End-->
</section>

<!--sction two  End-->

<section class="three bg-info">
<!--sction three  start-->
<div class="bg1">
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active text-center hearderset">
      <img src="n.jpg" class="d-block w-100" alt="not found">
    </div>
	
    <div class="carousel-item">
      <img src="bank1.jpg" class="d-block w-100" alt="not found">
    </div>
	
	<div class="carousel-item">
      <img src="l.jpg" class="d-block w-100" alt="not found">
    </div>
	
    <div class="carousel-item">
      <img src="r.jpg" class="d-block w-100" alt="not found">
    </div>
	
	<div class="carousel-item">
      <img src="bank2.jpg" class="d-block w-100" alt="not found">
    </div>
	
	<div class="carousel-item">
      <img src="bank3.jpg" class="d-block w-100" alt="not found">
    </div>
	
	<div class="carousel-item">
      <img src="card1.jpg" class="d-block w-100" alt="not found">
    </div>
	
	
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
</section>
<!--sction three  End-->
<section class="five">
<marquee>
<p><span class="running">--Monetary Policy Statement for FY2020-21 has been published ---</span>         করোনার লক্ষণ দেখা দিলে গোপন না করে ৩৩৩ অথবা ১৬২৬৩ নম্বরে ফ্রি কল করে ডাক্তারের পরামর্শ নিন। করোনা ঝুঁকি যাচাই করতে ডাউনলোড করুন CoronaBD অ্যাপ। করোনা সংক্রান্ত সকল তথ্য পেতে ভিজিট করুন corona.gov.bd । ৩৩৩ নম্বরে অপ্রয়োজনে কল করা থেকে বিরত থাকুন।</p>
</marquee>
</section><br>

  <section class="Four">
  <!--sction four start-->
<div class="container  ">

<div class="card-deck">
<!--card1  start-->
  <div class="card">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
	<div class="row">
	<div class="card-top col-lg-12 col-5">
      <img src="1.png" class="d-block w-100" alt="not found">
	 </div>
	 <div class="card-body col-lg-12 col-7">
      <p class="card-title">Agent Banking</p>
      <p class="card-text"style="font-size:18px;">Agent Banking refers to providing financial services to the underserved population <a  href="rm1.html"class="text-success">Read more</a></p> 
	  
    </div>
    </div>
    </div>
	<div class="carousel-item">
	<div class="row">
	<div class="card-top col-lg-12 col-5">
      <img src="ag1.jpg" class="d-block w-100" alt="not found">
	  </div>
	   <div class="card-body col-lg-12 col-7">
      <p class="card-title">Agent Banking</p>
      <p class="card-text"style="font-size:18px;">Agent Banking refers to providing financial services to the underserved population <a  href="rm1.html"class="text-success">Read more</a></p> 
	  
     
    </div>
    </div>
    </div>
	<div class="carousel-item">
	<div class="row">
	<div class="card-top col-lg-12 col-5">
      <img src="ag2.jpg" class="d-block w-100" alt="not found">
	   </div>
	   <div class="card-body col-lg-12 col-7">
      <p class="card-title">Agent Banking</p>
      <p class="card-text"style="font-size:18px;">Agent Banking refers to providing financial services to the underserved population <a  href="rm1.html"class="text-success">Read more</a></p> 

     
    </div>
    </div>
    </div>
	<div class="carousel-item">
	<div class="row">
	<div class="card-top col-lg-12 col-5">
      <img src="ag3.jpg" class="d-block w-100" alt="not found">
	   </div>
	   <div class="card-body col-lg-12 col-7">
      <p class="card-title">Agent Banking</p>
      <p class="card-text"style="font-size:18px;">Agent Banking refers to providing financial services to the underserved population <a  href="rm1.html"class="text-success">Read more</a></p> 
     
    </div>
    </div>
    </div>
  </div>
 </div>
  
 
  
  </div>
  <!--card1  End--> 
  
  
  <!--card2  Start--> 
   <div class="card">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
	<div class="row">
	<div class="card-top col-lg-12 col-5">
      <img src="2.png" class="d-block w-100" alt="not found">
	 </div>
	 <div class="card-body col-lg-12 col-7">
      <p class="card-title">Air Lounge</p>
      <p class="card-text"style="font-size:18px;">The bank’s Privilege Clients and MTB Premium Credit Card Holders can get access <a  href="rm2.html"class="text-success">Read more</a></p>
    </div>
    </div>
    </div>
	
	<div class="carousel-item">
	<div class="row">
	<div class="card-top col-lg-12 col-5">
      <img src="air1.jpg" class="d-block w-100" alt="not found">
	  </div>
	  <div class="card-body col-lg-12 col-7">
      <p class="card-title">Air Lounge</p>
      <p class="card-text"style="font-size:18px;">The bank’s Privilege Clients and MTB Premium Credit Card Holders can get access <a  href="rm2.html"class="text-success">Read more</a></p>

    </div>
    </div>
    </div>
	<div class="carousel-item">
	<div class="row">
	<div class="card-top col-lg-12 col-5">
      <img src="air2.jpg" class="d-block w-100" alt="not found">
	  </div>
	  <div class="card-body col-lg-12 col-7">
      <p class="card-title">Air Lounge</p>
      <p class="card-text"style="font-size:18px;">The bank’s Privilege Clients and MTB Premium Credit Card Holders can get access <a  href="rm2.html"class="text-success">Read more</a></p>

    </div>

    </div>
    </div>
	<div class="carousel-item">
	<div class="row">
	<div class="card-top col-lg-12 col-5">
      <img src="air3.jpg" class="d-block w-100" alt="not found">
	   </div>
	   <div class="card-body col-lg-12 col-7">
      <p class="card-title">Air Lounge</p>
      <p class="card-text"style="font-size:18px;">The bank’s Privilege Clients and MTB Premium Credit Card Holders can get access <a  href="rm2.html"class="text-success">Read more</a></p>

    </div>
    </div>
    </div>
  </div>
 </div>
   
  </div>
    <!--card2  End--> 
	
	
	  <!--card3  Start--> 
   <div class="card">
   <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
	<div class="row">
	<div class="card-top col-lg-12 col-5">
      <img src="3.png" class="d-block w-100" alt="not found">
	  </div>
	 <div class="card-body col-lg-12 col-7">
      <p class="card-title">Privilege</p>
      <p class="card-text"style="font-size:18px;">The privileges like queue less banking in a comfortable environment where the system <a  href="rm3.html"class="text-success">Read more</a></p>

    </div>
    </div>
    </div>
	<div class="carousel-item">
	<div class="row">
	<div class="card-top col-lg-12 col-5">
      <img src="f.png" class="d-block w-100" alt="not found">
	  </div>
	   <div class="card-body col-lg-12 col-7">
      <p class="card-title">Privilege</p>
      <p class="card-text"style="font-size:18px;">The privileges like queue less banking in a comfortable environment where the system <a  href="rm3.html"class="text-success">Read more</a></p>

    </div>
    </div>
    </div>
	
	
  </div>
 </div>
 </div>
    <!--card3 	End--> 
	
	   <!--card4  Start--> 
    <div class="card">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
	<div class="row">
	<div class="card-top col-lg-12 col-5">
      <img src="4.png" class="d-block w-100" alt="not found">
	 </div>
	 <div class="card-body col-lg-12 col-7">
      <p class="card-title">Cards</p>
      <p class="card-text"style="font-size:18px;">The use of cards is rapidly increasing as cards minimize the risks of <a  href="rm4.html"class="text-success">Read more</a></p>
    </div>
    </div>
    </div>
	
	<div class="carousel-item">
	<div class="row">
	<div class="card-top col-lg-12 col-5">
      <img src="11.png" class="d-block w-100" alt="not found">
	  </div>
	  <div class="card-body col-lg-12 col-7">
      <p class="card-title">Cards</p>
      <p class="card-text"style="font-size:18px;">The use of cards is rapidly increasing as cards minimize the risks of <a  href="rm4.html"class="text-success">Read more</a></p>

    </div>
    </div>
    </div>
	
	<div class="carousel-item">
	<div class="row">
	<div class="card-top col-lg-12 col-5">
      <img src="16.png" class="d-block w-100" alt="not found">
	 </div>
	 <div class="card-body col-lg-12 col-7">
      <p class="card-title">Cards</p>
      <p class="card-text"style="font-size:18px;">The use of cards is rapidly increasing as cards minimize the risks of <a  href="rm4.html"class="text-success">Read more</a></p>

    </div>
    </div>
    </div>
	
	<div class="carousel-item">
	<div class="row">
	<div class="card-top col-lg-12 col-5">
      <img src="17.png" class="d-block w-100" alt="not found">
	   </div>
       <div class="card-body col-lg-12 col-7">
      <p class="card-title">Cards</p>
      <p class="card-text"style="font-size:18px;">The use of cards is rapidly increasing as cards minimize the risks of <a  href="rm4.html"class="text-success">Read more</a></p>

    </div>
    </div>
    </div>
  </div>
 </div>
</div>
 <!--card4 	End--> 

</div>
</div>
<br>






<div class="container  ">

<div class="card-deck">
<!--card5  start-->
  <div class="card">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
	<div class="row">
	<div class="card-top col-lg-12 col-5">
      <img src="5.png" class="d-block w-100" alt="not found">
	 </div>
	 <div class="card-body col-lg-12 col-7">
      <p class="card-title">Retail</p>
      <p class="card-text"style="font-size:18px;">At MTB we have designed various retail banking products to meet <a  href="rm5.html"class="text-success">Read more</a></p> 
     
    </div>
    </div>
    </div>
	<div class="carousel-item">
     <div class="row">
	<div class="card-top col-lg-12 col-5">
      <img src="a.png" class="d-block w-100" alt="not found">
	 </div>
	 <div class="card-body col-lg-12 col-7">
      <p class="card-title">Retail</p>
      <p class="card-text"style="font-size:18px;">At MTB we have designed various retail banking products to meet <a  href="rm5.html"class="text-success">Read more</a></p> 
     
    </div>
    </div>
    </div>
	<div class="carousel-item">
      <div class="row">
	<div class="card-top col-lg-12 col-5">
      <img src="d.png" class="d-block w-100" alt="not found">
	 </div>
	 <div class="card-body col-lg-12 col-7">
      <p class="card-title">Retail</p>
      <p class="card-text"style="font-size:18px;">At MTB we have designed various retail banking products to meet <a  href="rm5.html"class="text-success">Read more</a></p> 
     
    </div>
    </div>
    </div>
	<div class="carousel-item">
      <div class="row">
	<div class="card-top col-lg-12 col-5">
      <img src="15.png" class="d-block w-100" alt="not found">
	 </div>
	 <div class="card-body col-lg-12 col-7">
      <p class="card-title">Retail</p>
      <p class="card-text"style="font-size:18px;">At MTB we have designed various retail banking products to meet <a  href="rm5.html"class="text-success">Read more</a></p> 
     
    </div>
    </div>
    </div>
  </div>
 </div>
  
  </div>
  <!--card5  End--> 
  
  
  <!--card6  Start--> 
   <div class="card">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="row">
	<div class="card-top col-lg-12 col-5">
      <img src="7.png" class="d-block w-100" alt="not found">
	 </div>
	 <div class="card-body col-lg-12 col-7">
      <p class="card-title">SME</p>
      <p class="card-text"style="font-size:18px;">The bank wants to be a proud partner of implementation of the nation’s dream <a  href="rm6.html"class="text-success">Read more</a></p> 
     
    </div>
    </div>
    </div>
	<div class="carousel-item">
      <div class="row">
	<div class="card-top col-lg-12 col-5">
      <img src="e.png" class="d-block w-100" alt="not found">
	 </div>
	 <div class="card-body col-lg-12 col-7">
      <p class="card-title">SME</p>
      <p class="card-text"style="font-size:18px;">The bank wants to be a proud partner of implementation of the nation’s dream <a  href="rm6.html"class="text-success">Read more</a></p> 
     
    </div>
    </div>
    </div>
	<div class="carousel-item">
      <div class="row">
	<div class="card-top col-lg-12 col-5">
      <img src="15.png" class="d-block w-100" alt="not found">
	 </div>
	 <div class="card-body col-lg-12 col-7">
      <p class="card-title">SME</p>
      <p class="card-text"style="font-size:18px;">The bank wants to be a proud partner of implementation of the nation’s dream <a  href="rm6.html"class="text-success">Read more</a></p> 
     
    </div>
    </div>
    </div>
	<div class="carousel-item">
      <div class="row">
	<div class="card-top col-lg-12 col-5">
      <img src="b.png" class="d-block w-100" alt="not found">
	 </div>
	 <div class="card-body col-lg-12 col-7">
      <p class="card-title">SME</p>
      <p class="card-text"style="font-size:18px;">The bank wants to be a proud partner of implementation of the nation’s dream <a  href="rm6.html"class="text-success">Read more</a></p> 
     
    </div>
    </div>
    </div>
  </div>
 </div>
 
  </div>
    <!--card6  End--> 
	
	
	  <!--card7  Start--> 
   <div class="card">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
     <div class="row">
	<div class="card-top col-lg-12 col-5">
      <img src="8.png" class="d-block w-100" alt="not found">
	 </div>
	 <div class="card-body col-lg-12 col-7">
      <p class="card-title">NRB</p>
      <p class="card-text"style="font-size:18px;">MTB offers an array of deposit products in local currency for the NRBs who <a  href="rm7.html"class="text-success">Read more</a></p> 
     
    </div>
    </div>
    </div>
	<div class="carousel-item">
      <div class="row">
	<div class="card-top col-lg-12 col-5">
      <img src="c.png" class="d-block w-100" alt="not found">
	 </div>
	 <div class="card-body col-lg-12 col-7">
      <p class="card-title">NRB</p>
      <p class="card-text"style="font-size:18px;">MTB offers an array of deposit products in local currency for the NRBs who <a  href="rm7.html"class="text-success">Read more</a></p> 
     
    </div>
    </div>
    </div>
	
  </div>
 </div>
 </div>
    <!--card7 	End--> 
	
	   <!--card8  Start--> 
    <div class="card">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="row">
	<div class="card-top col-lg-12 col-5">
      <img src="9.png" class="d-block w-100" alt="not found">
	 </div>
	 <div class="card-body col-lg-12 col-7">
      <p class="card-title">Internet Bakning</p>
      <p class="card-text"style="font-size:18px;">The significant features you will enjoy with our new version are: <a  href="rm8.html"class="text-success">Read more</a></p> 
     
    </div>
    </div>
    </div>
	<div class="carousel-item">
      <div class="row">
	<div class="card-top col-lg-12 col-5">
      <img src="in1.jpg" class="d-block w-100" alt="not found">
	 </div>
	 <div class="card-body col-lg-12 col-7">
      <p class="card-title">Internet Bakning</p>
      <p class="card-text"style="font-size:18px;">The significant features you will enjoy with our new version are: <a  href="rm8.html"class="text-success">Read more</a></p> 
     
    </div>
    </div>
    </div>
	<div class="carousel-item">
      <div class="row">
	<div class="card-top col-lg-12 col-5">
      <img src="in2.jpg" class="d-block w-100" alt="not found">
	 </div>
	 <div class="card-body col-lg-12 col-7">
      <p class="card-title">Internet Bakning</p>
      <p class="card-text"style="font-size:18px;">The significant features you will enjoy with our new version are: <a  href="rm8.html"class="text-success">Read more</a></p> 
     
    </div>
    </div>
    </div>
	<div class="carousel-item">
      <div class="row">
	<div class="card-top col-lg-12 col-5">
      <img src="in3.jpg" class="d-block w-100" alt="not found">
	 </div>
	 <div class="card-body col-lg-12 col-7">
      <p class="card-title">Internet Bakning</p>
      <p class="card-text"style="font-size:18px;">The significant features you will enjoy with our new version are: <a  href="rm8.html"class="text-success">Read more</a></p> 
     
    </div>
    </div>
	
    </div>
  </div>
 </div>
</div>
 <!--card8 	End--> 

</div>
</div>
</section>
<!--sction Four  start-->


<!--bank baranches start-->
<section class="project-work col-lg-12 col-12">
				<div class="container work text-center">
				<p class="text-center font-weight-bold">Our Services</p>
				</div>
				<div class="container d-flex justify-content-around align-items-center text-center">
				<div class="deep">
				<h3 class="count">29</h3>
				<p>Branches</p>
				</div>
				<div class="deep">
				<h3 class="count">90</h3>
				<p>Sub Branches</p>
				</div>
				<div class="deep">
				<h3 class="count">23</h3>
				<p>Years</p>
				</div>
				<div class="deep">
				<h3 class="count">1862250</h3>
				<p>Happy Clients</p>
				</div>
				</div>
				</section>
<!--ank baranches end-->


<!--google map  start-->

<section class="branch-atm-section">   
    <div class="title-area"><h3 class="section-title d-flex justify-content-center font-weight-bold"style="margin-top:40px;">Branches and ATMs</h3></div>
	<div class="row">
<div class="col-md-12" id="gmap-location">
    <div class="gmap-heading text-left">
       <div class="branch-atm-tab-content">
        <div class="row" style="margin-bottom:15px;">
          <div class="col-md-4"style="margin-left:40px;margin-top:28px;">
           <select class="form-control" id="division_filter_type" name="division_filter_type">
             <option value="" description="23.6943117,90.344352" selected="selected">-- Select Your Division --</option>
             <option description="22.6953831,90.3538043" value="barisal">Barishal Division</option><option description="22.3282207,91.8232795" value="chattogram">Chattogram Division</option><option description="23.7806364,90.4193257" value="dhaka">Dhaka Division</option><option description="22.8453019,89.5325017" value="khulna">Khulna Division</option><option description="24.3747995,88.6059702" value="rajshahi">Rajshahi Division</option><option description="25.6246831,89.232502" value="rangpur">Rangpur Division</option><option description="24.8997635,91.8619037" value="sylhet">Sylhet Division</option>         </select>
       </div>
       <div id="branch-list" class="total-branch-list text-left col-md-8">

       </div>
     </div>
    </div>
    <div class="clear"></div>
  </div>
  <div id="map" class="map" style="width:100%;height:400px;">
  <script>
    function initMap(){
      // Map options
      var options = {
        zoom:7,
        center:{lat: 23.800, lng: 90.438}
      }

      // New map
      var map = new google.maps.Map(document.getElementById('map'), options);

      // Listen for click on map
      google.maps.event.addListener(map, 'click', function(event){
        // Add marker
        addMarker({coords:event.latLng});
      });

      /*
      // Add marker
      var marker = new google.maps.Marker({
        position:{lat:42.4668,lng:-70.9495},
        map:map,
        icon:'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png'
      });

      var infoWindow = new google.maps.InfoWindow({
        content:'<h1>Lynn MA</h1>'
      });

      marker.addListener('click', function(){
        infoWindow.open(map, marker);
      });
      */

      // Array of markers
      var markers = [
        {
          coords:{lat: 24.740, lng: 90.430},
          //iconImage:'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
          content:'<h6>mymensingh</h6>'
        },
        {
          coords:{lat: 23.800, lng: 90.414},
          content:'<h6>dhaka</h6>'
        },
        {
          coords:{lat: 24.370, lng: 88.598},
		  content:'<h6>Rajshahi</h6>'
		  
        },
		{
          coords:{lat: 22.697, lng: 90.365},
		  content:'<h6>barisal</h6>'
		  
        },
		{
          coords:{lat: 22.350, lng: 91.798},
		  content:'<h6>chattagram</h6>'  
        },
		{
          coords:{lat: 24.895, lng: 91.880},
		  content:'<h6>shylet</h6>'
        },
		{
          coords:{lat: 22.850, lng: 89.542},
		  content:'<h6>khulna</h6>'
        }
		
      ];

      // Loop through markers
      for(var i = 0;i < markers.length;i++){
        // Add marker
        addMarker(markers[i]);
      }

      // Add Marker Function
      function addMarker(props){
        var marker = new google.maps.Marker({
          position:props.coords,
          map:map,
          //icon:props.iconImage
        });

        // Check for customicon
        if(props.iconImage){
          // Set icon image
          marker.setIcon(props.iconImage);
        }

        // Check content
        if(props.content){
          var infoWindow = new google.maps.InfoWindow({
            content:props.content
          });

          marker.addListener('click', function(){
            infoWindow.open(map, marker);
          });
        }
      }
    }
  </script>
    <!--Load the API from the specified URL
    * The async attribute allows the browser to render the page while the API loads
    * The key parameter will contain your own API key (which is not needed for this tutorial)
    * The callback parameter executes the initMap() function
    -->
    <script defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDzmDZkYL_jnBJGPY61vnHaFiUgQk8tmPY&callback=initMap">
    </script>
  </div>        
</div>
</div>
</section>
<!--google map  end-->


                         <!--footer part start-->
				<footer class="footer"id="footerdiv">
				<div class="container">
				<div class="row">
				<div class="col-lg-4 col-md-6 col-12 footer-div top1">
				<div>
				<h3>Hotline Numbers</h3>
				<ul class="footer-hotline-list-new">						   
<li><a href="tel:16236"><img src="bdbank.jpg" alt="" class="img-responsive"></a></li>
<li><a href="tel:106"><img src="dodok.jpg" alt="" class="img-responsive"></a></li>
<li><a href="tel:333"><img src="ict.jpg" alt="" class="img-responsive"></a></li>
<li><a href="tel:999"><img src="999.jpg" alt="" class="img-responsive"></a></li>
<li><a href="tel:109"><img src="wnc.jpg" alt="" class="img-responsive"></a></li>						   
<li><a href="tel:1090"><img src="dorjok.jpg" alt="" class="img-responsive"></a></li>
</ul>
               </div>
				</div>
				
				<div class="col-lg-4 col-md-6 col-12 footer-div top2">
				<h3>Stay Up To Date</h3>
				<div class="container newsletter-main">
				<div class="row">
				<div class="col-lg-12 col-12">

				<form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="post">
				<div class="input-field">
			  <i class="fa fa-user"></i>
			  <input type="text" name="name"id="id"required autocomplete="off"placeholder="Enter Your Name">
			  </div>
				
				<div class="input-field">
			  <i class="fa fa-envelope"></i>
			  <input type="email" name="email"id="email"required autocomplete="off"placeholder="Enter Your Email">
              </div>
				
				<div class="input-group mb-3">
				<textarea name="message" rows="3"cols="43"required autocomplete="off"placeholder="Your Message"></textarea>
                 </div>

				<div class="input-group">
                 <button type="submit" name="submit" class="input-group-text btn btn-primary">Send Message</button>
                </div>
				</form>
				</div>
				</div>
				</div>
				
				</div>
				
				<div class="col-lg-4 col-md-12 col-12 footer-div top3">
				<div>
				<h3>Connect With Us</h3>
				<p>Talk to us about anything</p>
				<div class="social-media">
			  <a href="#"class="social-icon fb"><i class="fa fa-facebook-f"></i></a>
			  <a href="#"class="social-icon whatsapp"><i class="fa fa-whatsapp"></i></a>
			  <a href="#"class="social-icon google"><i class="fa fa-google"></i></a>
			  <a href="#"class="social-icon insta"><i class="fa fa-linkedin"></i></a>
			  </div>
				</div>
				</div>
				</div>
				<div class="scrolltop float-right">
				<i class="fa fa-arrow-up" onclick="topFunction()" id="mybtn"> </i>
				</div>
				</div>
				
				</footer>
				<div class="text-center footer-bottom justify-content-center text-white"style="padding:4px 0;">
				<p>© Copyright 2020 All Rights Reserved.This site made by <span style="color:red;font-size:20px;">BMS</span> group</p>
				</div>
                        <!--footer part  end-->


                        

               <script src="jquery-1.12.4.min.js"></script>
			   <script src="popper.min.js"></script>
			   <script src="bootstrap.min.js"></script>
			   <script src="jquery.waypoints.min.js"></script>
			   <script src="jquery.counterup.min.js"></script>
			   
			    <script>
						 $('.count').counterUp({
				            delay:10,
				             time:200
				                 })
								 
			    mybutton=document.getElementById("mybtn");
				window.onscroll=function(){scrollFunction()};
				function scrollFunction()
				{
				if(document.body.scrollTop>20 || document.documentElement.scrollTop>20){
				mybtn.style.display="block";
				}
				else{
				mybtn.style.display="none";
				}
				}
				function topFunction(){
				document.body.scrollTop=0;
				document.documentElement.scrollTop=0;
				}
                        </script>
			   
</body>
</html>