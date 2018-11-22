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
					text = document.getElementById("id1").value;
					if(text.charAt(0)=='a' || text.charAt(0)=='b' || text.charAt(0)=='c' || text.charAt(0)=='d' || text.charAt(0)=='e' || text.charAt(0)=='f' || text.charAt(0)=='g' || text.charAt(0)=='h' || text.charAt(0)=='i' || text.charAt(0)=='j' || text.charAt(0)=='k' || text.charAt(0)=='l' || text.charAt(0)=='m' || text.charAt(0)=='n' || text.charAt(0)=='o' || text.charAt(0)=='p' || text.charAt(0)=='q' || text.charAt(0)=='r' || text.charAt(0)=='s' || text.charAt(0)=='t' || text.charAt(0)=='u' || text.charAt(0)=='v' || text.charAt(0)=='w' || text.charAt(0)=='x' || text.charAt(0)=='y' || text.charAt(0)=='z' || text.charAt(0)=='A' || text.charAt(0)=='B' || text.charAt(0)=='C' || text.charAt(0)=='D' || text.charAt(0)=='E' || text.charAt(0)=='F' || text.charAt(0)=='G' || text.charAt(0)=='H' || text.charAt(0)=='I' || text.charAt(0)=='J' || text.charAt(0)=='K' || text.charAt(0)=='L' || text.charAt(0)=='M' || text.charAt(0)=='N' || text.charAt(0)=='O' || text.charAt(0)=='P' || text.charAt(0)=='Q' || text.charAt(0)=='R' || text.charAt(0)=='S' || text.charAt(0)=='T' || text.charAt(0)=='U' || text.charAt(0)=='V' || text.charAt(0)=='W' || text.charAt(0)=='X' || text.charAt(0)=='Y' || text.charAt(0)=='Z'){
						for (var x = 0; x < text.length; x++){
	    					if(text.charAt(x)!='a' || text.charAt(x)!='b' || text.charAt(x)!='c' || text.charAt(x)!='d' || text.charAt(x)!='e' || text.charAt(x)!='f' || text.charAt(x)!='g' || text.charAt(x)!='h' || text.charAt(x)!='i' || text.charAt(x)!='j' || text.charAt(x)!='k' || text.charAt(x)!='l' || text.charAt(x)!='m' || text.charAt(x)!='n' || text.charAt(x)!='o' || text.charAt(x)!='p' || text.charAt(x)!='q' || text.charAt(x)!='r' || text.charAt(x)!='s' || text.charAt(x)!='t' || text.charAt(x)!='u' || text.charAt(x)!='v' || text.charAt(x)!='w' || text.charAt(x)!='x' || text.charAt(x)!='y' || text.charAt(x)!='z' || text.charAt(x)!='.' || text.charAt(x)!='-' || text.charAt(x)!='A' || text.charAt(x)!='B' || text.charAt(x)!='C' || text.charAt(x)!='D' || text.charAt(x)!='E' || text.charAt(x)!='F' || text.charAt(x)!='G' || text.charAt(x)!='H' || text.charAt(x)!='I' || text.charAt(x)!='J' || text.charAt(x)!='K' || text.charAt(x)!='L' || text.charAt(x)!='M' || text.charAt(x)!='N' || text.charAt(x)!='O' || text.charAt(x)!='P' || text.charAt(x)!='Q' || text.charAt(x)!='R' || text.charAt(x)!='S' || text.charAt(x)!='T' || text.charAt(x)!='U' || text.charAt(x)!='V' || text.charAt(x)!='W' || text.charAt(x)!='X' || text.charAt(x)!='Y' || text.charAt(x)!='Z' || text.charAt(x)!=' '){
	    						text="enter  a-z or A-Z or dot(.) or dash(-)";
	    						//document.getElementById("demo1").innerHTML = ;
								document.getElementById("demo1").innerHTML = text;
								document.getElementById("demo1").style.fontSize = "small";
								return;
	    					}
						}
					}
					text="Must start with a letter";
 					//document.getElementById("demo1").innerHTML = ;
					document.getElementById("demo1").innerHTML = text;
					document.getElementById("demo1").style.fontSize = "small";	
				return;
				}
				text="Enter Atlist Two Words";
				document.getElementById("demo1").innerHTML = text;
				document.getElementById("demo1").style.fontSize = "small";
				return;	
			}	
			text="NULL Input";
			document.getElementById("demo1").innerHTML = text;
			document.getElementById("demo1").style.fontSize = "small";		
			
			
			// if (document.getElementById("id2").value != ""){
			// 	text = document.getElementById("id2").value;
				
			// 	if(text.trim().includes(" ")){
			// 		text = document.getElementById("id2").value;
			// 		for (var i = 0; i < text.length; i++){
   //  					if(text.charAt(x)!='a' || text.charAt(x)!='b' || text.charAt(x)!='c' || text.charAt(x)!='d' || text.charAt(x)!='e' || text.charAt(x)!='f' || text.charAt(x)!='g' || text.charAt(x)!='h' || text.charAt(x)!='i' || text.charAt(x)!='j' || text.charAt(x)!='k' || text.charAt(x)!='l' || text.charAt(x)!='m' || text.charAt(x)!='n' || text.charAt(x)!='o' || text.charAt(x)!='p' || text.charAt(x)!='q' || text.charAt(x)!='r' || text.charAt(x)!='s' || text.charAt(x)!='t' || text.charAt(x)!='u' || text.charAt(x)!='v' || text.charAt(x)!='w' || text.charAt(x)!='x' || text.charAt(x)!='y' || text.charAt(x)!='z' || text.charAt(x)!='.' || text.charAt(x)!='-' || text.charAt(x)!='A' || text.charAt(x)!='B' || text.charAt(x)!='C' || text.charAt(x)!='D' || text.charAt(x)!='E' || text.charAt(x)!='F' || text.charAt(x)!='G' || text.charAt(x)!='H' || text.charAt(x)!='I' || text.charAt(x)!='J' || text.charAt(x)!='K' || text.charAt(x)!='L' || text.charAt(x)!='M' || text.charAt(x)!='N' || text.charAt(x)!='O' || text.charAt(x)!='P' || text.charAt(x)!='Q' || text.charAt(x)!='R' || text.charAt(x)!='S' || text.charAt(x)!='T' || text.charAt(x)!='U' || text.charAt(x)!='V' || text.charAt(x)!='W' || text.charAt(x)!='X' || text.charAt(x)!='Y' || text.charAt(x)!='Z'){
   //  						text="Enter  a-z or A-Z or dot(.) or dash(-)";
			// 				document.getElementById("demo2").innerHTML = text;
   //  					}
			// 		}
			// 	return;
			// 	}
			// 	text="Enter Atlist Two Words";
			// 	document.getElementById("demo2").innerHTML = text;
			// 	return;	
			// }	
			// text="NULL Input";
			// document.getElementById("demo2").innerHTML = text;	
		}
	</script>
</body>
</html>