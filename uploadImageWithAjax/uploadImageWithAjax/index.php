<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="" enctype="multipart/form-data" id="form"> 
		<table border="1">
			<tr>
				<td>Document Name :</td>
				<td><input type="text" name= "docname"></td>
			</tr>
			<tr>
				<td>Document Type :</td>
				<td><input type="text" name= "doctype"></td>
			</tr>
			<tr>
				<td>Upload Document :</td>
				<td><input type="file" name= "filename"></td>
			</tr>
			<tr>
				<td colspan="2"><center>
					<input type="hidden" name="Save" value="Save"/>
					<input type="submit" name="Upload" value="Upload" /></center>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
	$("#form").on('submit',(function(e) {
		e.preventDefault();
		$.ajax({
			url: 'Upload.php',
			type: "POST",
			data : new FormData(this),
		   	contentType: false,
		    cache: false,
		   	processData: false,
		   	success:function(data)
		   	{
		   		alert(data);
		   	}
		});
	}));
</script>