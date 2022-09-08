<?php
session_start();
?>
<html>
	<head>
        <title>
			Academic_Certificates|Sadman's Portfolio
		</title> 
	<style>
	h1{color:orange;}
	h2{color:red;}
h3{color:skyblue;}
h4{color:skyblue;}
	body {background-image: url("image/back.jpg");
				 height: 160%;
				  background-size: cover;
				background-repeat: no-repeat;}
			 	 .topnav {
		  overflow: hidden;
		  background-color: #333;
		}

		.topnav a {
		  float: left;
		  color: #f2f2f2;
		  text-align: center;
		  padding: 14px 16px;
		  text-decoration: none;
		  font-size: 17px;
		}

		.topnav a:hover {
		  background-color: #ddd;
		  color: black;
		}

		.topnav a.active {
		  background-color: #4CAF50;
		  color: white;
		}
		.button {
				    background-color: blue;
				    border: none;
				    color: white;
				    padding: 5px 70px;
				    text-align: center;
				    text-decoration: none;
				    display: inline-block;
				    font-size: 16px;
				    margin: 4px 2px;
				    cursor: pointer;
				    border-radius: 5px;
				}
				.div {
    border-style: solid;
    border-color: #92a8d1;
		}
		input[type=text] {
    width: 80%;
    padding: 10px 10px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid blue;
    border-radius: 10px;
}
input[type=password] {
    width: 80%;
    padding: 10px 10px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid blue;
    border-radius: 10px;
}
.error{color:red;}
	</style>
	</head>
	<body>
	<table>
			<tr>
				<td>
				<img src="image\Sadman Pic.jpg" width="250" >
			        </td>
		                <td>
                                <h1>Sadman's Portfolio</h1>
                                </td>
		  	
		        </tr>
		
		
                </table><hr/>
	  <div class="topnav">
  			<a class="active" href="main page.php">Main Page</a>
			<a href="Academic_Qualification.php">Academic Qualifications</a>
			<a class="active" href="Academic_Certificates.php">Academic Certificates</a>
                        <a href="CV.php">CV</a>
   			
		</div><hr/>

              <div>
               <i><h2>Undergraduate Certificate- </h2><h3>For showing the undergraduate certificate, Please select the link:</h3> <a href="Undergraduate.php"><b>UNDERGRADUATE</b></a><hr/>
 
               <i><h2>HSC Certificate- </h2><h3>For showing the HSC certificate, Please select the link:</h3> <a href="HSC.php"><b>HSC</b></a><hr/>  

               <i><h2>SSC Certificate- </h2><h3>For showing the SSC certificate, Please select the link: </h3><a href="SSC.php"><b>SSC</b></a><hr/>

               <i><h2>JSC Certificate- </h2><h3>For showing the JSC certificate, Please select the link: </h3><a href="JSC.php"><b>JSC</b></a><hr/>
		
		
	</body>
</html>
