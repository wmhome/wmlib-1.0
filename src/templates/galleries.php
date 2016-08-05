<?php
include("../libs/php/funcions.php");
session_start();
ob_start();

$link=conecta();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WMLiB</title>

    <!-- WM CSS Lib -->
    <link href="../css/wmcsslib.css" rel="stylesheet">
    <link href="../css/jasny-bootstrap.min.css" rel="stylesheet" media="screen">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  	<div id="wrapper">
  	<header>
  		<div class="js-include" title="nav.html" data-class="js"></div>
  	</header>
  	<div class="page-wrap">
  	<div class="container">
  		<div class="bradcrumb">
  			<ol class="breadcrumb">
			  <li><a href="home.html"><i class="fa fa-home"></i> Home</a></li>
			  <li><a href="pages.html">Pages</a></li>
			  <li class="active">Galleries</li>
			</ol>
  		</div>
  		<h1>Galleries</h1>
  		<h2>Gallery Masonry</h2>
  		<hr>
  		<a class="btn btn-default mtm mbm" href="uploadfiles_3.html"><span class="fa fa-cloud-upload"></span> Upload more files</a>
  		<div class="content">
  			<div id="trabajos" class="masonry">
  				<?php
  				$sql="select * from files";
	        	$res=busqueda($sql,$link);
	        	while($row=recibir_array($res)){
	        		?>
	        		<div class="item"><img class="img-responsive" src="../php/upload/files/<?php echo $row['name'];?>"></div>	
	        		<?php
	        	}
	        	?>
  			</div>
  			
  			<div class="back-home mbm">
				<a href="home.html" class="btn btn-icon"><i class="fa fa-chevron-circle-left"></i> back to home</a>
			</div>
  		</div>
  	</div>
  	</div>
  	</div>
  	<footer class="footer">
  		<div class="container">
  			<p class="text-muted">Create by WhiteMind.es</p>
  		</div>
  	</footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/components/jasny/jasny-bootstrap.min.js"></script>
    <script src="../js/components/galleries/masonry.pkgd.min.js"></script>
    <script>
    $(document).ready(function(){
    	//Script to include files and components
	    $(".js-include").each(function(){
		    var inc=$(this);
		    $.get(inc.attr("title"), function(data){
		        inc.replaceWith(data);
		    });
		});
	
		var $container = $('#trabajos');
		// initialize
		$container.masonry();
	});
    </script>
  </body>
</html>