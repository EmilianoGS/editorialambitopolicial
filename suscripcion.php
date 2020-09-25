<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8" />
<title>Formulario</title>
<link href="https://fonts.googleapis.com/css2?family=Heebo:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Monofett&family=Strait&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  #textoctro{
  font-family: 'Heebo', sans-serif;
   font-size: 20px;
   
   box-sizing: border-box;
   padding:10px;
   height: auto;
   width: 490px;
  margin-top: 140px;
  margin-left: auto;
  margin-right: auto;
  background-color: rgba(208,141,24,1);
  text-decoration: none;
 }
#gratuito p{
  width: 390px;
    font-family: 'Heebo', sans-serif;
text-align: left;
margin: 0 auto;
font-size:20px;
}
 #textoctro p{
  text-align: center;
  margin-top:0;
  margin-right:auto;
  margin-left: auto;
  height: auto;
   width: 450px;
   box-sizing: border-box;
} 
  #ctro{
  height: 120px;
   width: 490px;
    color: #ffffff;
  text-decoration: none;
 }
 #textoctro:hover{
  width:500px;
  
  background-color: rgba(208,141,24,0.6);;
}
#suscripcion{

margin-top: 30px;
margin-left: auto;
margin-right:auto;
border: 2px solid #dedede;

width: 390px;
height:auto;
box-sizing: border-box;
padding: 20px 20px 40px 20px;
 font-family: 'Heebo', sans-serif;
}
#suscripcion p{
  width: 300px;
  margin:0 0 20px 22px;
}

#suscripcion input{

 font-family: 'Heebo', sans-serif;
  box-sizing: border-box;
  margin-left: 22px;
  padding:5px 3px;
    background-color: rgba(255,255,255,0);
  border: 2px solid #dedede;

  width: 300px;

  }
#suscripcion input[type=submit]{

  margin-top: 20px;
  background-color: #333333;
    border:none;
 font-family: 'Heebo', sans-serif;
    font-size: 18px;
  color:#fafafa ;
  width: 300px;
  height: 45px;
  padding: 8px 5px;
  box-sizing: border-box;
}
#suscripcion input[type=submit]:hover{
  background-color: #b5b5b5;
}
#sushidden{
  display:none;
}
#datos_ingresados{
  
  width: 500px;
  margin: 40px auto 50px auto;
}
#datos_ingresados h2{
padding: 30px;
border: 1px solid #dedede;
  font-family: 'Heebo', sans-serif;
  text-align:center;

}
#datos_ingresados2{
  width: 390px;
  margin: 40px auto 50px auto;
}
#datos_ingresados2 h2{
padding: 10px;
border: 1px solid #dedede;
  font-family: 'Heebo', sans-serif;
  text-align:center;
}
#ocultar{
  display: none;
}
@media all and (max-width: 599px) { 

#suscripcion{
padding:10px;
width: 90%;

}
#suscripcion input[type=submit]{
font-size: 13px;
width:90%;
  height: 45px;
  margin: 0 auto;
  padding: 8px 5px;
  box-sizing: border-box;
}
#suscripcion input{
margin-left: 0;
width: 100%;

  }
#suscripcion p{
  width: 200px;
  margin:0 0 20px 0px;
}
}
</style>
</head>
<body>

	   <div id="gratuito"><p>Suscripción gratuita para el personal de la PFA, en servicio y retirado.</p></div>
	     <form id="<?php if(isset($_GET['suscr'])){if(($_GET['suscr'])==1){echo 'ocultar';}else{echo 'suscripcion';}}else{echo 'suscripcion';}?>" action="mailer2.php" method="post"><!--#textoctro-->
          <p>Por favor complete el siguiente formulario: </p>
          <input type="text" name="nombre" placeholder="Nombre*" required><br/><br/>
          
          <input type="email" name="email" placeholder="Email*" required><br/><br/>
          <input type="submit" value="Suscribirse">
       </form>
       <?php 
       
      ?>

       <div id="<?php if(isset($_GET['suscr'])){if(($_GET['suscr'])==1){echo "datos_ingresados";}else{echo "ocultar";}}else{echo "ocultar";} ?>"><h2>Suscripción realizada con exito. Recibirá un e-mail en su casilla
del correo <?php echo $_GET['email']; ?></h2></div>
           <div id="<?php if(isset($_GET['suscr'])){if(($_GET['suscr'])==2){echo "datos_ingresados2";}else{echo "ocultar";}}else{echo "ocultar";} ?>"><h2 style="color:#eb4034";>Ingrese un e-mail válido.</h2></div>

       
  </body>
  </html>