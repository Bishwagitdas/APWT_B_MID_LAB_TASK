
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
	<form method="post" >
		@csrf

			<center>
			<fieldset  style="width: 500px">
				<legend><b> CMS Login page</b></legend>
					<table >
						<tr>
							
						 	<td> Email : </td>
							<td> <input type="text" name="email" value="">
							</td>	
						</tr>
						<tr>
							<td> Password : </td>
							<td>
								<input type="Password" name="pass" value="">
							</td>
						</tr>

						
					</table>
					<hr width="100%" align="left">
					<input type="submit" name="submit" value="Login">
					<a href="/signup">Sign Up here</a>	
					</table>
			</fieldset>
			</center>	
	</form>
	<div>
	@foreach($errors->all() as $error)
		{{$error}}<br>
	@endforeach
	</div>
</body>
</html>
