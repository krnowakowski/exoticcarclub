<div id="console-debug">

	<?php
	//$all_vars = get_defined_vars();
	//print_r($all_vars);
	?>
	<h3>Cookies Array</h3>
	<pre>
		<?php print_r($_COOKIE); ?>
	</pre>
	<h3>Session Array</h3>
	<pre>
		<?php print_r($_SESSION); ?>
	</pre>
	<h3>GET</h3>
	<pre>
		<?php print_r($_GET); ?>
	</pre>
	<h3>POST</h3>
	<pre>
		<?php print_r($_POST); ?>
	</pre>
	<h3>Path Array</h3>
	<pre>
		<?php print_r($path); ?>
	</pre>
</div>

<script>

	document.getElementById('console-debug').style.display = 'none';
	
	if(document.getElementById('btn-debug') !== null) {
		document.getElementById('btn-debug').onclick = function(e) {
			var e = document.getElementById('console-debug');
	      	if(e.style.display == 'block')
	        	e.style.display = 'none';
	       	else
	        	e.style.display = 'block';
		}
	}
	if(typeof jQuery != 'undefined') {
		document.getElementById('btn-session-unset').onclick = function(e) {
			$.get('/ajax/session_unset.php', {del: 'session'});
		}
		document.getElementById('btn-cookies-unset').onclick = function(e) {
			$.get('/ajax/session_unset.php', {del:'cookies'});
		}
	}
		
	/*$("#btn-debug").click(function(){
		$("#console-debug").toggle();
	});
	$("#btn-session-unset").click(function(){
		$.get('/ajax/session_unset.php');
	});
};*/
</script>