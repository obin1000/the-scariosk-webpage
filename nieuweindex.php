<!DOCTYPE html>
<html>
<head>
<style>

@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 100;
  src: local('Roboto Light'), local('Roboto-Light'), url(https://fonts.gstatic.com/s/roboto/v18/2tsd397wLxj96qwHyNIkxPesZW2xOQ-xsNqO47m55DA.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;
}

.formsubmitbutton {
	position: absolute;
	left: 14%;
	bottom: 15%;
    width: 70%;
    background-color: #FF0000;
	box-shadow: 2px 2px 5px;
    color: white;
    font-size: 25px;
    padding: 1% 1%;
    text-decoration: none;
}

.formsubmitbutton:hover {
      box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}



.forminput{
	position: absolute;
	bottom: 50%;
	left: 13%;
    width: 70%;
    font-size: 30px;
    padding: 1% 1%;
	border: 5px;
    border-style: groove;
	border-color: #FF0000;
    text-align: center;
	font-family: Roboto;
	box-shadow: 1px 1px 5px;
}


.window {
		position: absolute;
		left: 25%;
		bottom: 35%;
		background-color: #ffffff;
		border-radius: 5px;
		box-shadow: 1px 1px 5px;
		width: 50%;
		height: 230px;
		
}

.footer {
	position: absolute;
	bottom: 0%;
	left: 0%;
    font-size: 100%;
	font-family: Roboto;
    text-align: center;
	background-color: #FFFFFF;
	width: 100%;
	height: 70px;
	border-top: 5px solid red;
	box-shadow: 1px 1px 5px;
}

.inhoud {
  overflow: auto;
  position: relative;
}

.inhoud:before {
  content: "";
  position: fixed;
  left: -5%;
  top: -5%;
  right: 0;
  z-index: -1;

  display: block;
  background-image: url('achtergrond.jpg');
  background-size:cover;
  width: 110%;
  height: 110%;

  -webkit-filter: blur(8px);
  -moz-filter: blur(8px);
  -o-filter: blur(8px);
  -ms-filter: blur(8px);
  filter: blur(8px); }
  
  .logocorendon{
    width:30%;
}

ul {
	position: absolute;
	bottom: 85%;
	left: 70%;
	font-family: Roboto;
	list-style-type: none;
	margin: 0;
	padding: 0;
	overflow: hidden;
    background-color: #ffffff;
	border-radius: 5px;
	box-shadow: 1px 1px 5px;
}

li {
	float: left;
}

li a {
	display: block;
	font-family: Roboto;
	text-align: center;
	padding: 14px 16px;
	text-decoration: none; 
	}
li a:hover {
	background-color: #FF0000;	
	}
	

</style>
</head>
<body>
<nav>
<ul>
<li><a href="blank.php">HOMEPAGE CORENDON</a></li>
<li><a href="https://www.w3schools.com">OVER GROEP 4</a></li>
<li><a href="https://www.w3schools.com">GITLAB</a></li>
</ul>
</nav>
<div class="inhoud">
<img class="logocorendon" src="logocorendon.png">
</div>
<article class="window">
<center><form action="/tweedepagina.php" method="post">
<input class="forminput" type="number" placeholder="Voer code in" name="code">
<input class="formsubmitbutton" type="submit" value="Haal jouw foto's" name="invoer">
</form></center>
</article>
<footer class="footer">
<p>Gemaakt door IT-103-4 voor het project Fasten Your Seatbelts - 2017/2018</p>
</footer>

</body>
</html>