<script type="text/javascript">
	$(document).ready(function  () {
		$("#submit").click(function  () {
			var nama=$("#nama").val();
			$.post('<?php echo site_url('proses') ;?>',{nama:nama}, function  (data){
				$('#hasil').html(data);
			});
			
		});
	});	
</script>
<div id="form">
	<input id="nama">
	<input type="submit" id="submit">
</div>
<div id="hasil"></div>