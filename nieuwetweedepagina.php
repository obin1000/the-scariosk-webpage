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


.fullwindow {
		border-top: 5px solid red;
		position: absolute;
		left: 40%;
		bottom: 4%;
		background-color: #FFFFFF;
		box-shadow: 1px 1px 5px;
		width: 30%;
		height: 80vh;
}

.footer {
	position: absolute;
	bottom: -10%;
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
  filter: blur(8px);
 }
  
  .logocorendon{
    width:30%;
}

table {
	position: absolute;
	top: 22.5%;
	left: 17.5%;
	width: 20%;
	}
table, th, td {
    border: 10px solid white;
    border-collapse: collapse;
		box-shadow: 1px 1px 5px;
}

.tabelplaatjes {
	display: block;
	width: 100%;
	height: 20vh;
	padding: 0;
	margin 0;

}

.tabelplaatjes:hover {
    cursor: pointer;
	}

.grootplaatje {
	width: 27%;
	height: 72.5vh;
	position: absolute;
	left: 41.5%;
	bottom: 8%;
	box-shadow: 1px 1px 5px;
	display: none;
}
</style>
</head>
<body>
<div class="inhoud">
<img class="logocorendon" src="logocorendon.png">
</div>
<table>
  <tr>
    <td><img id="foto1" src="<?php echo $foto_path; ?>" alt="Foto 1" class="tabelplaatjes"></td>
    <td><img id="foto2" src="<?php echo $foto_path; ?>" alt="Foto 1" class="tabelplaatjes"></td>
  </tr>
  <tr>
    <td><img id="foto3" src="<?php echo $foto_path; ?>" alt="Foto 1" class="tabelplaatjes"></td>
    <td><img id="foto4" src="<?php echo $foto_path; ?>" alt="Foto 1" class="tabelplaatjes"></td>
  </tr>
  <tr>
    <td><img id="foto5" src="<?php echo $foto_path; ?>" alt="Foto 1" class="tabelplaatjes"></td>
    <td><img id="foto6" src="<?php echo $foto_path; ?>" alt="Foto 1" class="tabelplaatjes"></td>
  </tr>
</table>
<div class="fullwindow"></div>
<div id="test">
<img src="<?php echo $foto_path; ?>" alt="Foto1" class="grootplaatje" id="grotefoto">
</div>
<footer class="footer">
<p>Copyrights Corendon - 2017</p>
</footer>
<script>
	var grotefoto = document.getElementById('grotefoto');
	document.getElementById('foto1').onclick = function() {eersteFoto()}
function eersteFoto(){
	grotefoto.display.style = "block;
	}
</script>
</body>
</html>