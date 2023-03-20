<!-- <html>
    <title>
        Create
    </title>
    <body>
        
    <form action="" method="POST" enctype="multipart/form-data">
    <fieldset>
        <legend>Create Specification</legend>
        <table>
            <tr>
                <td>
                    Specification Name: 
                </td>
                <td>
               <input type="text" name="name" value=""/> <br>
                   
                </td>
            </tr>
            <tr>
                <td>
                

                    Specification Role: 
                </td>
                <td>
                <input type="text" name="role" value=""/> <br>
                    
                </td>
            </tr>
            <tr>
                <td>
                

                    Screen Defination: 
                </td>
                <td>
              

                <input type="text" name="screendefination" value=""/> <br>
                    
                </td>
            </tr>
            <tr>
                <td>
                

                    User Story: 
                </td>
                <td>
               <input type="text" name="story" value=""/> <br>
                    
                </td>
            </tr>
            <tr>
                <td>
               
                    Acceptance Criterea: 

                </td>
                <td>
                 <input type="text" name="criteria" value=""/> <br>
                    
                </td>
            </tr>
            <tr>
                <td>
                
                    UI screen : 

                </td>
                <td>
                 <input type="file" name="file" value="" /> <br>
                   
                </td>
            </tr>
            <tr>
                <td>
                
                    Tags: 

                </td>
                <td>
                <input type="text" name="tags" value=""/> <br>
                </td>
            </tr>
        </table>
                 
                <input type="submit" name="submit" value="Submit"/>
            </fieldset>
            <a href="dashboard.php">Back</a>
    </form>
    </body>
</html> -->




<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <table border="1" width=70% align="center">
        <tr style="height:50px"" >
            <th width=20%> <a href=" home.php"><img src="pic.png" alt="logo"></a> </th>
            <th width=60%></th>
            <th width=20%>
                <a href="login.php">Logged in as </a> |
                <a href="logout">LogOut</a>
            </th>
        </tr>

        <tr style="height:200px">
            <td> <b>Account</b>
                <hr>
                <ul>
                <li><a href="dashboard.php">Dashboard</a></li>
                    <li><a href="createFeature.php">Create Feature</a></li>
                    <li><a href="rmfeature.php">Remove Feature</a></li>
                    <li><a href="updatefeature.php">update Feature</a></li>
                    <li><a href="logout.php">LogOut</a></li>

                </ul>

            </td>

            <td>
            <fieldset>
        <legend><h1>Create Feature</h1></legend>

        <form action="" method="post">
		<label for="">Feature Name:</label>
		<input type="text" id="feature_name" name="feature_name"><br><br>
		<label for="feature_id">Feature ID:</label>
		<input type="text" id="feature_id" name="feature_id"><br><br>
		<label for="feature_details">Feature Details:</label><br>
		<textarea id="feature_details" name="feature_details"></textarea><br><br>
		<input type="submit" name="submit" value="Create">
	</form>
            </td>



        </tr>
        <tr style="height:50px">
            <td colspan=3 align="center">coppy right (C) 2017</td>
        </tr>

    </table>

</body>

</html>