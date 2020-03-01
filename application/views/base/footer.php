</section><!-- /.Left col -->

</div><!-- /.row (main row) -->

</section><!-- /.content -->
</div><!-- /.content-wrapper -->
<!-- / CONTENT -->


<footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> Beta 1.0
        </div>
        <strong><a href="http://github.com/mboldrini">Matheus Boldrini</a> - </strong> MIT License.
      </footer>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.3 -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jQuery-2.1.3.min.js"></script>
    <!-- jQuery UI 1.11.2 -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

    <!-- Bootstrap 3.3.2 JS -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js" ></script>  
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/app.min.js" ></script>

    <!--algumas customizações visuais no site -->
    <link href="<?php echo base_url();?>assets/css/visual.css" rel="stylesheet" type="text/css" />

    <?php
	if( isset($scripts) ){
		foreach( $scripts as $script_name ){
			$href = base_url() . "assets/js/" . $script_name; ?>
			<script src="<?= $href ?>"></script>
<?php		
	}
} ?>

<?php
	if( isset($styles) ){
		foreach( $styles as $styles_name ){
			$href = base_url() . "assets/css/" . $styles_name; 
?>
			<link href="<?= $href ?>" rel="stylesheet">
<?php		
		}
} ?>

  </body>
</html>


