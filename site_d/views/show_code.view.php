<?php require_once'../inc/haut.inc.php'; ?>
		
		<div id="main-content">
			
			<div id="main-content-share-code">
			
			<pre class="prettyprint linenums"><?= e($data->code);?></pre>

				<div class="btn-group nav">	
					<a class="btn btn-warning" href="share_code.php?id=<?= $_GET['id']?>">Cloner</a>
					<a  class="btn btn-info" href="share_code.php">Nouveau</a>
				</div>
			</div>

		</div>
		
<?php require_once'../inc/bas.inc.php'; ?>
<script src="../assets/js/google-code-prettify/src/prettify.js"></script>
<script>
	prettyPrint();
</script>