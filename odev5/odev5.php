<!DOCTYPE html> 
<html lang="en"> 
    <head>
        <meta charset="UTF-8">
        <title> odev5 </title>
    </head>
    <p><h1><b>Registration Form</b></h1></p>
    <body>
        <form action="odev5-onizleme.php" method="POST">
            <table>
                <tr>
                    <td>Name:</td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td>Username:</td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td>Address:</td>
                    <td><input type="address" name="address"></td>
                </tr>
                <tr>
                    <td> Country:</td>
                        <td><select name="country">
                        <option value="Turkey">Turkey</option>
                        <option value="Germany">Germany</option>
                        <option value="America" selected>America</option>
                        <option value="France">France</option>
                        <option value="England">England</option>
                        <option value="other">Other</option>
                        </select><br>
                    </td>
                </tr>
                    <tr>
                        <td>ZIP Code:</td>
                        <td><input type="zipcode" name="zipcode"></td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td><input type="email" name="email"></td>
                    </tr>
                <tr>
                    <td>Sex:</td>
                    <td><input type="radio" name="sex" id="sex" value="Male">Male
                    <input type="radio" name="sex" id="sex" value="Female">Female</td>
                </tr>
                <tr>
                    <td>Language:</td>
                    <td>English<input type ="checkbox" name="langueage" id="langueage" value="English">
                        French<input type="checkbox" name="langueage" id="langueage" value="French">       
                        German<input type="checkbox" name="langueage" id="langueage" value="Germany">       
                    </td>
                </tr>
                <tr>
                    <td>About</td>
                    <td>
                        <textarea rows="3" name="about" id="about"></textarea>
                    </td>    
                </tr>
                <th ROWSPAN="2"><th >
                <tr>
                    <td> <input type="submit" name="submit" id="submit" value="submit"></td>
                </tr>
            </table>
        </form>
    </body>
</html>