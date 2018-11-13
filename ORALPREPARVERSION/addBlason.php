<?php require_once('controllers/functions/control-session.php');
include ('controllers/classes/Blason.php');
include ('controllers/functions/functions.php');

?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Nouveau Blason</title>
        
        <link rel="stylesheet" href="assets/css/header.css">
        <link rel="stylesheet" href="assets/css/addArc.css">
        <link rel="stylesheet" href="assets/css/navbar.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
        <link rel="sylesheet" href="assets/css/addArc.css">
		
        <script src="js/bootstrap.min.js"></script>
    </head>
    
    <body>
        <div class="container-fluid" id="mainBox">
            <div class="container-fluid header" id="headerBox">
                <div id="titleBox">
                    <h1>Nouveau Blason</h1>
              </div>
               <div id="line">
			   
			   <form method="POST">
			   
                 <div class="sousline">
				<h3>Nom du Blason</h3><input type="text" max="20"  min="1" value="" name="NomBlason">
                </div>
                 <div class="sousline">
				<h3>Taille du Blason</h3><input type="text" value="" max="127" min="40"  name="TailleBlason">
                </div>
                 <div class="sousline">
				<h3>Photo du Blason</h3><input type="text" value="" max="1024"  min="1" name="PhotoBlason">
                </div>
						<input type="submit" name="envoyerCreateBlas"> </input>
				</form>
				
				
			
				
				
				
			</div>
						<?php  if (isset($_POST['envoyerCreateBlas']))  {
					
					$nom=$_POST['NomBlason'];
					$taille=$_POST['TailleBlason'];
					$idUser=$_SESSION['ID'];
					
					
					if (checkNom($nom)==true){
					
					if(!empty($nom)&&!empty($taille)&&!empty($idUser)){
						
						
					if (is_numeric($taille) and $taille <=300 ){
						
						if (checkNom($nom)==true ){
						
						
					
					
					$photo=null;
					
					
					
					
					$blason = new Blason($nom, $taille, $photo,$idUser);
			
			
			
			
				}}	else{
				
				echo '<p> Merci de remplir et verifier tous les champs </p>';
				
			}}}}
			
		
			
			
			
			
			?>

			
            </div>
            
            <div class="container-fluid footer" id="footerBox">
                <div class="container" id="homeBox">
                    <button id="homeBtn">
                        <a href="index.html">
                            <i class="far fa-list-alt fa-2x" style="color: rgba(179, 179, 179, 0.9)"></i>
                        </a>
                    </button>
                    <button id="homeBtn2">
                        <a href="index.html">
                            <i class="far fa-list-alt fa-lg" style="color: rgba(179, 179, 179, 0.9)"></i>
                        </a>
                    </button>
                    <button id="homeBtn3">
                        <a href="index.html">
                            <i class="far fa-list-alt fa-3x" style="color: rgba(179, 179, 179, 0.9)"></i>
                        </a>
                    </button>
                </div>
                <div class="container" id="statsBox">
                    <button id="statsBtn">
                        <a href="stats.html">
                            <i class="fas fa-chart-line fa-2x" style="color: rgba(179, 179, 179, 0.9)"></i>
                        </a>
                    </button>
                    <button id="statsBtn2">
                        <a href="stats.html">
                            <i class="fas fa-chart-line fa-lg" style="color: rgba(179, 179, 179, 0.9)"></i>
                        </a>
                    </button>
                    <button id="statsBtn3">
                        <a href="stats.html">
                            <i class="fas fa-chart-line fa-3x" style="color: rgba(179, 179, 179, 0.9)"></i>
                        </a>
                    </button>
                </div>
                <div class="container" id="addBox">
                    <button id="addBtn">
                        <a href="add.html">
                            <i class="fas fa-plus fa-2x" style="color: white"></i>
                        </a>
                    </button>
                    <button id="addBtn2">
                        <a href="add.html">
                            <i class="fas fa-plus fa-lg" style="color: white"></i>
                        </a>
                    </button>
                    <button id="addBtn3">
                        <a href="add.html">
                            <i class="fas fa-plus fa-3x" style="color: white"></i>
                        </a>
                    </button>
                </div>
                <div class="container" id="editBox">
                        <button id="editBtn">
                            <a href="edit.html">
                                <i class="far fa-edit fa-2x" style="color: rgba(179, 179, 179, 0.9)"></i>
                            </a>
                        </button>
                        <button id="editBtn2">
                            <a href="edit.html">
                                <i class="far fa-edit fa-lg" style="color: rgba(179, 179, 179, 0.9)"></i>
                            </a>
                        </button>
                        <button id="editBtn3">
                            <a href="edit.html">
                                <i class="far fa-edit fa-3x" style="color: rgba(179, 179, 179, 0.9)"></i>
                            </a>
                        </button>
                </div>
                <div class="container" id="accountBox">
                    <button id="accountBtn">
                        <a href="account.html">
                            <i class="far fa-user fa-2x" style="color: rgba(179, 179, 179, 0.9)"></i>
                        </a>
                    </button>
                    <button id="accountBtn2">
                        <a href="account.html">
                            <i class="far fa-user fa-lg" style="color: rgba(179, 179, 179, 0.9)"></i>
                        </a>
                    </button>
                    <button id="accountBtn3">
                        <a href="account.html">
                            <i class="far fa-user fa-3x" style="color: rgba(179, 179, 179, 0.9)"></i>
                        </a>
                    </button>
                </div>
            </div>
        </div>
    
    
    </body>
</html>