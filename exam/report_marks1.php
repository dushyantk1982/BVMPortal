<html>
<head>
<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/bootstrap-responsive.min.css">
		<link rel="stylesheet" href="css/bootstrap-custom.css">
</head>
<body>
<form action="export.php" method="post" name="export_excel">

			<div class="control-group">
				<div class="controls">
						Course<select name="course">
							<option value="">--Select--</option>
							<option value="MBA">MBA</option>
							<option value="MCA">MCA</option>
							<option value="BCA">BCA</option>
							<option value="BCA(M)">BCA(M)</option>
							<option value="BBA">BBA</option>
							
						</select>
						Sem<select name="sem">
							<option value="">--Select--</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>	
						</select>
						
					<button type="submit" id="export" name="export" class="btn btn-primary button-loading" data-loading-text="Loading...">Export in Excel File</button>
					<!--<button type="submit" id="Display" name="submit" class="btn btn-primary button-loading" data-loading-text="Loading...">Display</button>-->
				</div>
			</div>
		</form>	
		
</body>
</html>