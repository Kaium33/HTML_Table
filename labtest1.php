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
					// text = document.getElementById("id1").value;
					if(text1.charAt(0)=='a' || text1.charAt(0)=='b' || text1.charAt(0)=='c' || text1.charAt(0)=='d' || text1.charAt(0)=='e' || text1.charAt(0)=='f' || text1.charAt(0)=='g' || text1.charAt(0)=='h' || text1.charAt(0)=='i' || text1.charAt(0)=='j' || text1.charAt(0)=='k' || text1.charAt(0)=='l' || text1.charAt(0)=='m' || text1.charAt(0)=='n' || text1.charAt(0)=='o' || text1.charAt(0)=='p' || text1.charAt(0)=='q' || text1.charAt(0)=='r' || text1.charAt(0)=='s' || text1.charAt(0)=='t' || text1.charAt(0)=='u' || text1.charAt(0)=='v' || text1.charAt(0)=='w' || text1.charAt(0)=='x' || text1.charAt(0)=='y' || text1.charAt(0)=='z' || text1.charAt(0)=='A' || text1.charAt(0)=='B' || text1.charAt(0)=='C' || text1.charAt(0)=='D' || text1.charAt(0)=='E' || text1.charAt(0)=='F' || text1.charAt(0)=='G' || text1.charAt(0)=='H' || text1.charAt(0)=='I' || text1.charAt(0)=='J' || text1.charAt(0)=='K' || text1.charAt(0)=='L' || text1.charAt(0)=='M' || text1.charAt(0)=='N' || text1.charAt(0)=='O' || text1.charAt(0)=='P' || text1.charAt(0)=='Q' || text1.charAt(0)=='R' || text1.charAt(0)=='S' || text1.charAt(0)=='T' || text1.charAt(0)=='U' || text1.charAt(0)=='V' || text1.charAt(0)=='W' || text1.charAt(0)=='X' || text1.charAt(0)=='Y' || text1.charAt(0)=='Z'){
						for (var x = 0; x < text1.length; x++){
	    					if(text1.charAt(x)!='a' && text1.charAt(x)!='b' && text1.charAt(x)!='c' && text1.charAt(x)!='d' && text1.charAt(x)!='e' && text1.charAt(x)!='f' && text1.charAt(x)!='g' && text1.charAt(x)!='h' && text1.charAt(x)!='i' && text1.charAt(x)!='j' && text1.charAt(x)!='k' && text1.charAt(x)!='l' && text1.charAt(x)!='m' && text1.charAt(x)!='n' && text1.charAt(x)!='o' && text1.charAt(x)!='p' && text1.charAt(x)!='q' && text1.charAt(x)!='r' && text1.charAt(x)!='s' && text1.charAt(x)!='t' && text1.charAt(x)!='u' && text1.charAt(x)!='v' && text1.charAt(x)!='w' && text1.charAt(x)!='x' && text1.charAt(x)!='y' && text1.charAt(x)!='z' && text1.charAt(x)!='.' && text1.charAt(x)!='-' && text1.charAt(x)!='A' && text1.charAt(x)!='B' && text1.charAt(x)!='C' && text1.charAt(x)!='D' && text1.charAt(x)!='E' && text1.charAt(x)!='F' && text1.charAt(x)!='G' && text1.charAt(x)!='H' && text1.charAt(x)!='I' && text1.charAt(x)!='J' && text1.charAt(x)!='K' && text1.charAt(x)!='L' && text1.charAt(x)!='M' && text1.charAt(x)!='N' && text1.charAt(x)!='O' && text1.charAt(x)!='P' && text1.charAt(x)!='Q' && text1.charAt(x)!='R' && text1.charAt(x)!='S' && text1.charAt(x)!='T' && text1.charAt(x)!='U' && text1.charAt(x)!='V' && text1.charAt(x)!='W' && text1.charAt(x)!='X' && text1.charAt(x)!='Y' && text1.charAt(x)!='Z' && text1.charAt(x)!=" "){
	    						text="enter  a-z or A-Z or dot(.) or dash(-)";
	    						//document.getElementById("demo1").innerHTML = ;
								document.getElementById("demo1").innerHTML = text;
								document.getElementById("demo1").style.fontSize = "small";
								return;
								//break;
	    					}
						}
						document.getElementById("demo1").innerHTML = "";
						return;
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