<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gestion du parc informatique </title>

    <!-- Bootstrap core CSS -->

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="css/custom.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/maps/jquery-jvectormap-2.0.1.css" />
    <link href="css/icheck/flat/green.css" rel="stylesheet" />
    <link href="css/floatexamples.css" rel="stylesheet" type="text/css" />

    <script src="js/jquery.min.js"></script>
    <script src="js/nprogress.js"></script>
    <script>
        NProgress.start();
    </script>
    

</head>


<body class="nav-md">

    <div class="container body">


        <div class="main_container">

            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">

                    <div class="navbar nav_title" style="border: 0;">
                        <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Parc Informatique</span></a>
                    </div>
                    <div class="clearfix"></div>

                    <!-- menu prile quick info -->
                    <div class="profile">
                        <div class="profile_pic">
                            <img src="images/img.jpg" alt="..." class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Bienvenue,</span>
                            
                        </div>
                    </div>
                    <!-- /menu prile quick info -->

                    <br />

                  <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <h3>General</h3>
                            <ul class="nav side-menu">
    						<li><a>Materiel <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="GestionMateriel.php"><font style="color: aqua;">Gestion Materiels</font></a>
                                        </li>
                                        <li><a href="AjoutMateriel.php">Ajouter un Materiel</a>
                                        </li>
										<li><a href="AjouterMarque.html">Ajouter une  Marque</a>
                                        </li>
										<li><a href="AjouterType.html">Ajouter un type Materiel</a>
                                        </li>
                                        <li><a href="GestionFournisseur.php"><font style="color: aqua;">Gestion Fournisseurs</font></a>
                                        </li>
										<li><a href="AjouterFournisseur.html">Ajouter un Fournisseur</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a> Maintenance <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="ListeMaintenance.php"><font style="color: aqua;">Gestion Maintenances</font></a>
                                        </li>
                                        <li><a href="AjouterMaintenance.php">Ajouter une Maintenance</a>
                                        </li>
                                        <li><a  href="GestionMainteneur.php"><font style="color: aqua;">Gestion mainteneurs</font></a>
                                        </li>
                                        <li><a href="AjouterMainteneur.html">Ajouter un mainteneur</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a> Affectation & Utilisateurs <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="ListeAffectaion.php"><font style="color: aqua;">Gestion Affectations</font></a>
                                        </li>
                                        <li><a href="AjouterAffectation.php">Ajouter une Affectation</a>
                                        </li>
                                        <li><a href="ListeUtilisateur.php"><font style="color: aqua;">Gestoin Utilisateurs</font></a>
                                        </li>
                                        <li><a href="AjouterUtilisateur.php">Ajouter un Utilisateur</a>
                                        </li>
                                        <li><a href="AjouterDivision.html">Ajouter un Poste Utilisateur</a>
                                        </li>
                                    </ul>
                                </li>
                                                                                                         
                        </div>
                    </div>
                    
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">

                <div class="nav_menu">
                    <nav class="" role="navigation">
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>

                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <img src="images/img.jpg" alt="">Service d'information
                                    <span class=" fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                                    
                                        
                                    </li>
                                   
                                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Deconnexion</a>
                                    </li>
                                </ul>
                            </li>

                            <li role="presentation" class="dropdown">
                              
                                    <li>
                                        
                                    </li>
                                    <li>
                                        
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </nav>
                </div>

            </div>            

            <!-- page content -->
            <div class="right_col" role="main">
                <div class="">
                    
                    <div class="clearfix"></div>

                    <div class="row">

                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Modifier Maintenance</h2>
                                    
                                    <div class="clearfix"></div>
                                </div>
                                <div class="">
                            <?php
							$NUMMAINTENANCE = $_GET["NUMMAINTENANCE"];
							 
							  try
							     {              
							     $db=new PDO('mysql:host=localhost;dbname=parcinfo','root','');
							     }
							     catch(Exception $e)
							     {
							      die('Erreur : '.$e->getMessage());
							      } 
							      $result = $db->query("SELECT * FROM MAINTENANCE WHERE NUMMAINTENANCE = $NUMMAINTENANCE");
							        
							while($affiche_commentaire =$result->fetch(PDO::FETCH_ASSOC))
							 {
							 ?>
							 
							<form method="post" class="form-horizontal form-label-left" novalidate>
							<div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">NumMaintenance<span class="required"/>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input  class="form-control col-md-7 col-xs-12" name="NUMMAINTENANCE" size="22" value="<?php echo ''.$affiche_commentaire["NUMMAINTENANCE"].'
							 ';?>" type="text"/ >
                            </div>
                            </div>
							
							<div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">NumInventaire<span class="required"/>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input  class="form-control col-md-7 col-xs-12" name="NUMINVENTAIRE" size="22" value="<?php echo ''.$affiche_commentaire["NUMINVENTAIRE"].' 
							';?>" type="text"/ >
                            </div>
                            </div> 
							    
							<div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nom Mainteneur<span class="required"/>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input  class="form-control col-md-7 col-xs-12" name="NOMMAINTENEUR" size="22" value="<?php echo ''.$affiche_commentaire["NOMMAINTENEUR"].'
							 ';?>" type="text"/ >
                            </div>
                            </div>  
							 
							<div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Date envoie maint<span class="required"/>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="date" class="form-control col-md-7 col-xs-12" name="DATEENVOIEMAINT" size="22" value="<?php echo ''.$affiche_commentaire["DATEENVOIEMAINT"].' 
							';?>" type="text"/ >
                            </div>
                            </div>   
							
						 
                            
                            <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Type Pannne<span class="required"/>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input  class="form-control col-md-7 col-xs-12" name="TYPEPANNE" size="22" value="<?php echo ''.$affiche_commentaire["TYPEPANNE"].' 
							';?>" type="text"/ >
                            </div>
                            </div>   
                            
                              
                            
                            <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Type Maint<span class="required"/>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input  class="form-control col-md-7 col-xs-12" name="TYPEMAINTENANCE" size="22" value="<?php echo ''.$affiche_commentaire["TYPEMAINTENANCE"].' 
							';?>" type="text"/ >
                            </div>
                            </div>     
							  
							  
							  <div class="ln_solid"></div>
                               <div class="form-group">
                               <div class="col-md-6 col-md-offset-3">
                               <button name="Modifier" value="Modifier" id="send" type="submit" class="btn btn-success">Valider</button>
                               </div>
                               </div>
							   
							</form>
							 
							<?php
							 }
							$result->closeCursor();
							?>
							<?php 
							if(isset($_POST["Modifier"]))
								{
								try
					            {              
					             $db=new PDO('mysql:host=localhost;dbname=parcinfo','root','');
					            }
								catch(Exception $e)
								{
								die('Erreur : '.$e->getMessage());
								}
								$NUMMAINTENANCE= $_POST["NUMMAINTENANCE"];
								$NUMINVENTAIRE = $_POST["NUMINVENTAIRE"];
								$NOMMAINTENEUR = $_POST["NOMMAINTENEUR"];
								$DATEENVOIEMAINT = $_POST["DATEENVOIEMAINT"];
								$TYPEPANNE = $_POST["TYPEPANNE"];
								$TYPEMAINTENANCE = $_POST["TYPEMAINTENANCE"];
								
								
								$requete="UPDATE MAINTENANCE set NUMMAINTENANCE='$NUMMAINTENANCE',NUMINVENTAIRE='$NUMINVENTAIRE',NOMMAINTENEUR='$NOMMAINTENEUR',DATERETOURMAINT='$DATERETOURMAINT',TYPEPANNE='$TYPEPANNE',TYPEMAINTENANCE='$TYPEMAINTENANCE' where NUMMAINTENANCE='$NUMMAINTENANCE'";
								$result = $db->query($requete);
								if (!$result) 
								{
								    die('Requete invalide ');
								}
								else 
								{
								?>
									<?php
									sleep(0);
									header('Location:ListeMaintenance.php');
									?>
								<?php
								}
							$result->closeCursor();
								
								}
								?>
                                </div>
                            </div>
                        </div>

                        <br />
                        <br />
                        <br />

                    </div>
                </div>
                   <!-- footer content -->
					<footer>
                    <div class="">
                        <p class="pull-right">Gestion de parc informatique AL Omrane by <a>IK</a>. |
                        </p>
                    </div>
                    <div class="clearfix"></div>
                </footer
                
                <!-- /footer content -->
                    
                </div>
                <!-- /page content -->
            </div>

        </div>

        <div id="custom_notifications" class="custom-notifications dsp_none">
            <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
            </ul>
            <div class="clearfix"></div>
            <div id="notif-group" class="tabbed_notifications"></div>
        </div>

        <script src="js/bootstrap.min.js"></script>

        <!-- chart js -->
        <script src="js/chartjs/chart.min.js"></script>
        <!-- bootstrap progress js -->
        <script src="js/progressbar/bootstrap-progressbar.min.js"></script>
        <script src="js/nicescroll/jquery.nicescroll.min.js"></script>
        <!-- icheck -->
        <script src="js/icheck/icheck.min.js"></script>

        <script src="js/custom.js"></script>


        <!-- Datatables -->
        <script src="js/datatables/js/jquery.dataTables.js"></script>
        <script src="js/datatables/tools/js/dataTables.tableTools.js"></script>
        <script>
            $(document).ready(function () {
                $('input.tableflat').iCheck({
                    checkboxClass: 'icheckbox_flat-green',
                    radioClass: 'iradio_flat-green'
                });
            });

            var asInitVals = new Array();
            $(document).ready(function () {
                var oTable = $('#example').dataTable({
                    "oLanguage": {
                        "sSearch": "Rechercher:"
                    },
                    "aoColumnDefs": [
                        {
                            'bSortable': false,
                            'aTargets': [0]
                        } //disables sorting for column one
            ],
                    'iDisplayLength': 12,
                    "sPaginationType": "full_numbers",
                    "dom": 'T<"clear">lfrtip',
                    "tableTools": {
                        "sSwfPath": "<?php echo base_url('assets2/js/Datatables/tools/swf/copy_csv_xls_pdf.swf'); ?>"
                    }
                });
                $("tfoot input").keyup(function () {
                    /* Filter on the column based on the index of this element's parent <th> */
                    oTable.fnFilter(this.value, $("tfoot th").index($(this).parent()));
                });
                $("tfoot input").each(function (i) {
                    asInitVals[i] = this.value;
                });
                $("tfoot input").focus(function () {
                    if (this.className == "search_init") {
                        this.className = "";
                        this.value = "";
                    }
                });
                $("tfoot input").blur(function (i) {
                    if (this.value == "") {
                        this.className = "search_init";
                        this.value = asInitVals[$("tfoot input").index(this)];
                    }
                });
            });
        </script>
        
             <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  $(function() {
    $( "#datepicker" ).datepicker();
    $('#date').datepicker({dateFormat: 'yy-mm-dd'});
  });
  </script>
</body>

</html>
