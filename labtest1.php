<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
	<form>
		<table border="1" width="500px" align="center">
			<tr height="100px">
				<td colspan="3" align="center"><h2>PERSON PROFILE</h2></td>
			</tr>
			<tr height="40px">
				<td width="100px"><b>Name</b></td>
				<td width="250px"> <input id="id1" type="text" name=""></td>
				
				<td><p id="demo1"></p></td>
			</tr>
			<tr height="40px">
				<td><b>Email</b></td>
				<td> <input id="id2" type="text" name=""></td>
				<p id="demo2"></p>
				<td></td>
			</tr>
			<tr height="40px">
				<td><b>Gender</b></td>
				<td>
				 	<input type="radio" name="Gender">Male
				 	<input type="radio" name="Gender">Female
				 	<input type="radio" name="Gender">Other
				</td>
				<td></td>
			</tr>
			<tr height="40px">
				<td><b>Date of Berth</b></td>
				<td>
					<input type="number" name="" style="width: 45px">/
					<input type="number" name="" style="width: 45px">/
					<input type="number" name="" style="width: 45px"><i>(dd/mm/yyy)</i>
				</td>
				<td></td>
			</tr>
			<tr height="40px">
				<td><b>Blood Group</b></td>
				<td>
					<select>
						<option>A+</option>
						<option>A-</option>
						<option>B+</option>
						<option>B-</option>
					</select>
				</td>
				<td></td>
			</tr>
			<tr height="40px">
				<td><b>Degree</b></td>
				<td>
					<input type="checkbox" name="">SSC
					<input type="checkbox" name="">HSC
					<input type="checkbox" name="">BSc.
					<input type="checkbox" name="">MSc.
				</td>
				<td></td>
			</tr>
			<tr height="40px">
				<td><b>Photo</b></td>
				<td> <input type="file" name=""></td>
				<td></td>
			</tr>
			<tr>
				<td colspan="3" height="40px"></td>
			</tr>
			<tr>
				<td colspan="3" height="40px" align="right">
					<!-- <input type="submit" name="" value="Submit"> -->
					<button type="button" onclick="myFunction()">Submit</button>
					<input type="reset" name="" value="Reset">
				</td>
			</tr>
		</table>
	</form>
	<script>
		function myFunction(){
			var x,text="";
			var text1 = document.getElementById("id1").value;
			if (document.getElementById("id1").value != ""){
				
				if(text1.trim().includes(" ")){
					
				return;
				}
				text="Enter Atlist Two Words";
				document.getElementById("demo1").innerHTML = text;
				return;	
			}	
			text="NULL Input";
			document.getElementById("demo1").innerHTML = text;		
			
			
			if (document.getElementById("id2").value != ""){
				text = document.getElementById("id2").value;
				
				if(text.trim().includes(" ")){
					
				return;
				}
				text="Enter Atlist Two Words";
				document.getElementById("demo2").innerHTML = text;
				return;	
			}	
			text="NULL Input";
			document.getElementById("demo2").innerHTML = text;	
		}
	</script>
</body>
</html>