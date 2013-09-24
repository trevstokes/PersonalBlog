		<?php require($_SERVER["DOCUMENT_ROOT"] . '/layout/header.php'); ?>
		<div class="hero-unit media">		
			<div class="media-body">
				<script type="text/javascript" src="/js/nicEdit.js"></script>
				<script type="text/javascript">
					bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
				</script>
				<textarea style='width:100%;height:400px'>
				</textarea>
			</div>
		</div>
		<?php require($_SERVER["DOCUMENT_ROOT"] . '/layout/footer.php'); ?>
