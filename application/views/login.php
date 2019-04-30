<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>

	<link href="<?php base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php base_url(); ?>assets/css/datepicker3.css" rel="stylesheet">
	<link href="<?php base_url(); ?>assets/css/styles.css" rel="stylesheet">

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	<div class="row">
		<div class="col-lg-12">
			<?php if ($this->session->flashdata('alert')) 
			{ ?>	
				<div class="alert bg-danger" role="alert"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> <?php  echo $this->session->flashdata('alert'); ?>
				<a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
			</div>
		<?php } else{ ?>
			<div class="alert bg-warning" role="alert"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg><?php 
			$alert ='Anda Harus Login !!!';
			echo $alert;
		}?>
	</div>
</div>
</div>

<div class="row">
	<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
		<div class="login-panel panel panel-default">
			<div class="panel-heading">Log in</div>
			<div class="panel-body">
				<form method="post">
					<fieldset>
						<div class="form-group">
							<input class="form-control" placeholder="User ID" name="id_user" type="text" autofocus="">
						</div>
						<div class="form-group">
							<input class="form-control" placeholder="Password" name="password" type="password">
						</div>
						<button type="submit" name="submit" value="Submit"  class="btn btn-primary">Login</button>
					</fieldset>
				</form>
			</div>
		</div>
	</div><!-- /.col-->
</div><!-- /.row -->	



<script src="<?php base_url(); ?>assets/js/jquery-1.11.1.min.js"></script>
<script src="<?php base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="<?php base_url(); ?>assets/js/chart.min.js"></script>
<script src="<?php base_url(); ?>assets/js/chart-data.js"></script>
<script src="<?php base_url(); ?>assets/js/easypiechart.js"></script>
<script src="<?php base_url(); ?>assets/js/easypiechart-data.js"></script>
<script src="<?php base_url(); ?>assets/js/bootstrap-datepicker.js"></script>
<script src="<?php base_url(); ?>assets/js/lumino.glyphs.js"></script>
<script>
	!function ($) {
		$(document).on("click","ul.nav li.parent > a > span.icon", function(){		  
			$(this).find('em:first').toggleClass("glyphicon-minus");	  
		}); 
		$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
	}(window.jQuery);

	$(window).on('resize', function () {
		if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
	})
	$(window).on('resize', function () {
		if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
	})
</script>
<script type="text/javascript">
	$('.alert').alert().delay(2000).slideUp('slow');
</script>	
</body>

</html>
