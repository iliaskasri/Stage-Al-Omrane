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
                                    <div class="title_right">
                            		<form action="GestionFournisseur.php" name="search_form" method="post">
                            		Chercher:<input type="text" name="search_box" value=""/>
                            		<input type="submit" name="search" value="Chercher dans la table"></input>
                            		</form>
                            		</div>
                            </div>
                        </div>
                               <div class="clearfix"></div>
                                <div class="">
                                    <table id="example" class="table table-striped responsive-utilities jambo_table">
                                        <thead>
                                            <tr class="headings">
                                                <th>Id </th>
                                                <th>Nom Mainteneur </th>
                                                <th>Adresse </th>
                                                <th>Code Postal</th>
                                                <th>Ville </th>
                                                <th>Tel</th>
                                                <th>Email </th>
                                                
                                                <th>Suppression</th>
                                                <th >Modification</th>

                                            </tr>
                                        </thead>

                                        <tbody>
                                          <?php
               									 try
                									{              
                    								$db=new PDO('mysql:host=localhost;dbname=parcinfo','root','');
                    							
                									}
                								catch(Exception $e)
                									{
                    									die('Erreur : '.$e->getMessage());
                									}
                									
                									$sql ="SELECT * FROM MAINTENEUR ";
                								
                								if(isset($_POST['search'])){
                									$search_term= $_POST['search_box'];
                									$sql .= "WHERE ID LIKE '%{$search_term}%' ";
                									$sql .= "OR NOMMAINTENEUR LIKE '%{$search_term}%' ";
													$sql .= "OR ADRESSE LIKE '%{$search_term}%' ";
													$sql .= "OR CODEPOSTAL LIKE '%{$search_term}%' ";
													$sql .= "OR VILLE LIKE '%{$search_term}%' ";
													$sql .= "OR TEL LIKE '%{$search_term}%' ";
													$sql .= "OR EMAIL LIKE '%{$search_term}%' ";
													
                								}	
        										$reponse = $db->query($sql);
                									?>

                									<?php 
                									while ($donnees = $reponse->fetch(PDO::FETCH_ASSOC))
                									{
                									echo '<tbody>';
                									echo '<td>'.$donnees['ID'].'</td>';
                									echo '<td>'.$donnees['NOMMAINTENEUR'].'</td>';
                									echo '<td>'.$donnees['ADRESSE'].'</td>';
                									echo '<td>'.$donnees['CODEPOSTAL'].'</td>';
                									echo '<td>'.$donnees['VILLE'].'</td>';
                									echo '<td>'.$donnees['TEL'].'</td>';
                									echo '<td>'.$donnees['EMAIL'].'</td>';
                									
                									
                									?>
                									
                									<td>
                									<form method="post" action="GestionMainteneur.php">
                									<input type="image" name="sup" value="<?php echo $donnees['ID']; ?>" src="images/del.png" />
                									</form>
                          							<td><?php echo '<a style="color:#0000FF;" href="ModifierMainteneur.php?ID='.$donnees['ID'].'">'; ?> Modifier</a></td>
                									
                									
                									<?php
 													   if (isset($_POST['sup'])) {
    												   $db->query("DELETE  FROM MAINTENEUR WHERE ID =".$_POST['sup']);
    												   header("Refresh:0; url=GestionMainteneur.php");
    												   }            									
    												 ?>   													
    												</td>
    												<?php echo'</tbody>';
    												?>
    												
                									<?php
                									}
                									?>
                									<?php 
                									$reponse->closeCursor();
                									?>                                              
                                        </tbody>

                                    </table>
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
                </footer>
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
</body>

</html>
