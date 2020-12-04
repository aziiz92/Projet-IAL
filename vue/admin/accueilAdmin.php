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
                                        <h5>Article </h5>

                                    </div>

                                    <div class="card-body">
	 <ol class="list-type1">
	 <li><a href="../../diop/index.php?a=formulaireAjout">ajouter article</a>
        </li>
		<li><a href="../../diop/index.php?a=lister">lister articles</a></li>
		<li><a class ="button" href="../../diop/index.php?a=addcategorie">ajouter Categorie</a></li>
		<li><a  class ="button"href="../../diop/?a=listercategorie">lister Categories</a></li>
		<li>
         <a href="../../diop/index.php?a=ajouterutilisateur">creer utilisateur</a></li>
		
        <li><a href="../../diop/index.php?a=listerUtilisateur">lister utilisateurs</a></li>
		</ol>
<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
				
				</div>
			</div>
			<table class="table table-striped table-hover" id="table_id">
				<thead>
					<tr>
						<th>
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
						</th>
						<th>Titre</th>
						<th>Contenu</th>
						
						
						
					</tr>
				</thead>
				<tbody>
					<tr>
						<?php foreach ($articles as $article): 

							?>
							
			
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="1">
								<label for="checkbox1"></label>
							</span>
						</td>
						<td><a href="index.php?a=article&id=<?= $article->id ?>"><?= $article->titre ?></a></td>
						<td><p><?= substr($article->contenu, 0, 100) . '...' ?></p></td>
						
						
						
					</tr>
					<?php endforeach ?>
				</tbody>
			</table>
			
		</div>
	</div>        
</div>
<!-- Edit Modal HTML -->
<div id="addEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="/diop/index.php" method="POST">
				<div class="modal-header">						
					<h4 class="modal-title">Ajouter articles</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Titre</label>
						<input type="text" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Contenu</label>
						<input type="text" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Categorie</label>
						<select class="form-control" required>
							<option>politique</option>
							<option>Religion</option>
							<option>Societe</option>
						</select>
					</div>
									
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-success" value="Add">
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Edit Modal HTML -->
<div id="editEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">						
					<h4 class="modal-title">Editer article/h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Titre</label>
						<input type="text" class="form-control" value="<?php echo $article->titre ?>" required>
					</div>
					<div class="form-group">
						<label>Contenu</label>
						<input type="email" class="form-control" value="<?php echo $article->contenu ?>" required>
					</div>
					<div class="form-group">
						<label>Categorie</label>
						<select class="form-control" required>
						<?php foreach ($categories as $category) {
			
							if($category->id === $categorie->id){

								echo "<option value=$category->id selected>$category->libelle</option>";

							}else{

								echo "<option value=$category->id>$category->libelle</option>";

							}


						} 

						?>
					</select>
					</div>
								
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" name="modifier" class="btn btn-info" value="Save">
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Delete Modal HTML -->
<div id="deleteEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">						
					<h4 class="modal-title">Delete Employee</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<p>Are you sure you want to delete these Records?</p>
					<p class="text-warning"><small>This action cannot be undone.</small></p>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-danger" value="Delete">
				</div>
			</form>
		</div>
	</div>
</div>
<script>
$(document).ready(function(){

    $('#table_id').DataTable();
	// Activate tooltip
	$('[data-toggle="tooltip"]').tooltip();
	
	// Select/Deselect checkboxes
	var checkbox = $('table tbody input[type="checkbox"]');
	$("#selectAll").click(function(){
		if(this.checked){
			checkbox.each(function(){
				this.checked = true;                        
			});
		} else{
			checkbox.each(function(){
				this.checked = false;                        
			});
		} 
	});
	checkbox.click(function(){
		if(!this.checked){
			$("#selectAll").prop("checked", false);
		}
	});
});
</script>
</body>
</html>