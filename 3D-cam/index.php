<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Unbenanntes Dokument</title>
</head>
<body>
	
	<img src="https://i1.adis.ws/s/canon/web-360-0032-4000D_set/20?$low_quality$" id="img" alt="20"></img>
	
	<script type="application/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script>
		
		$('#img').on('mousewheel', function(e){
			var id = $('img').attr('alt');
			if(e.originalEvent.wheelDelta > 0) {
				id++;
				if(id>32){
					id=2;
					$("#img").attr("src","https://i1.adis.ws/s/canon/web-360-0032-4000D_set/2?$low_quality$");
					$("#img").attr("alt",id);
				}else{
				$("#img").attr("src","https://i1.adis.ws/s/canon/web-360-0032-4000D_set/"+ id +"?$low_quality$");
				$("#img").attr("alt",id);
				}
			}
			else {
				id--;
				if(id<2){
					id=32;
					$("#img").attr("src","https://i1.adis.ws/s/canon/web-360-0032-4000D_set/2?$low_quality$");
					$("#img").attr("alt",id);
				}else{
				$("#img").attr("src","https://i1.adis.ws/s/canon/web-360-0032-4000D_set/"+ id +"?$low_quality$");
				$("#img").attr("alt",id);
				}
			}
		});

	</script>
</body>
</html>