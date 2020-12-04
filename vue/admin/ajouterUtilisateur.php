<!DOCTYPE html>
<html lang="en">

<head>
    <title>Projet AL</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Datta Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="admin templates, bootstrap admin templates, bootstrap 4, dashboard, dashboard templets, sass admin templets, html admin templates, responsive, bootstrap admin templates free download,premium bootstrap admin templates, datta able, datta able bootstrap admin template, free admin theme, free dashboard template"/>
    <meta name="author" content="CodedThemes"/>

    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="assets/fonts/fontawesome/css/fontawesome-all.min.css">
    <!-- animation css -->
    <link rel="stylesheet" href="assets/plugins/animation/css/animate.min.css">
    <!-- vendor css -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
    <!-- [ Pre-loader ] start -->
  
    <!-- [ Pre-loader ] End -->

    <!-- [ navigation menu ] start -->
    <nav class="pcoded-navbar">
        <div class="navbar-wrapper">
            <div class="navbar-brand header-logo">
               <a href="index.html" class="b-brand">
                   <div class="b-bg">
                       <i class="feather icon-trending-up"></i>
                   </div>
                   <span class="b-title">ProjetAL</span>
               </a>
               <a class="mobile-menu" id="mobile-collapse" href="javascript:"><span></span></a>
           </div>
            <div class="navbar-content scroll-div">
                <ul class="nav pcoded-inner-navbar">
                    <li class="nav-item pcoded-menu-caption">
                        <label> Liste des Categories</label>
                    </li>

					<li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project" class="nav-item">
                        <a href="index.php" class="nav-link "><span class="pcoded-micon">
                           </span><span class="pcoded-mtext">Accueil</span></a>
                    </li>
                    <?php foreach ($categories as $categorie): ?>
            
            <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project" class="nav-item">
                        <a href="#" class="nav-link "><span class="pcoded-micon">
                           </span><span class="pcoded-mtext"><?= $categorie->libelle ?></span></a>
                    </li>
        <?php endforeach ?>
                    
                </ul>
            </div>
        </div>

    </nav>
    <!-- [ navigation menu ] end -->

    <!-- [ Header ] start -->
    <header class="navbar pcoded-header navbar-expand-lg navbar-light">
        <div class="m-header">
            <a class="mobile-menu" id="mobile-collapse1" href="javascript:"><span></span></a>
            <a href="index.html" class="b-brand">
                   <div class="b-bg">
                       <i class="feather icon-trending-up"></i>
                   </div>
                   <span class="b-title">ProjetAL</span>
               </a>
        </div>
        <a class="mobile-menu" id="mobile-header" href="javascript:">
            <i class="feather icon-more-horizontal"></i>
        </a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
          
                 
            </ul>
        </div>
    </header>
    <!-- [ Header ] end -->
    <!-- [ Header ] end -->

    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <!-- [ breadcrumb ] start -->
                    <div class="page-header">
                        <div class="page-block">
                            <div class="row align-items-center">
                                <div class="col-md-12">
                                    <div class="page-header-title">
                                        <h5 class="m-b-10">ProjetAL</h5>
                                    </div>
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                        <li class="breadcrumb-item"><a href="javascript:"> Actualités dans le monde</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- [ breadcrumb ] end -->
                    <div class="main-body">
                        <div class="page-wrapper">
						<div class="card">
                                    <div class="card-header">
                                        <h5>User </h5>

                                    </div>

                                    <div class="card-body">

        <div id="container">
            <!-- zone de connexion -->
            
            <form id="ajout" role="form" action="/diop/index.php" method="POST"  >
            <div class="form-group">
            <label><b>Nom</b></label>
            <input type="text" name="nom" id="titre">
            </div>
            <div class="form-group">
            <label><b>Prenom</b></label>
            <input type="text" name="prenom" id="prenom">
            </div>

        
            <div class="form-group">
            <label for="login">Nom d'utilisateur</label>
            <input type="text" name="login" id="login">
            </div>

        
            <div class="form-group">
            <label for="mdp">Mot de passe</label>
            <input type="text" name="mdp" id="mdp">
            </div>

           <input type="submit"  name="creer_utilisateur" value="Créer utilisateur">

       </form>
        </div>

         
        <center>
            </body>

</html> 
<!-- //////////////////////////////////////// -->
      <!--   <form id="ajout" role="form" action="/projetDiop/index.php" method="POST"  >

            <label for="nom">Nom</label>
            <input type="text" name="nom" id="titre">
            
            <label for="prenom">Prenom</label>
            <input type="text-area" name="prenom" id="prenom">
        
            <label for="login">Login</label>
            <input type="text-area" name="login" id="login">
        
            <label for="mdp">Mot de passe</label>
            <input type="text-area" name="mdp" id="mdp">

            <button type="submit"  name="creer_utilisateur" >Créer utilisateur</button>

        </form>
        
    