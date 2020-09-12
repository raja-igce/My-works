<?php if( !empty( $error )){ ?>
	<div class="alert alert-danger">
		<p class="text-center"> <?php echo $error; ?> </p>
	</div>
<?php } ?>

<?php if( !empty( $success )){ ?>
	<div class="alert alert-success">
		<p class="text-center"> <?php echo $success; ?> </p>
	</div>
<?php } ?>

<?php if( !empty( $success ) || !empty( $error ) ){ ?>
	<script>
		$(document).ready(function(){
			$('.alert').delay(5000).slideUp();
		});
    </script>
<?php } ?>