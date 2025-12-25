


<form method="post" action="insert.php" enctype="multipart/form-data">
        <table border="1" align="center">
            <tr>
                <td>Username:</td>
                <td><input type="text" name="uname"></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="email" name="email"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="password"></td>
            </tr>
           <tr>
                <td>Bio:</td>
                <td><textarea name="bio"></textarea></td>
            </tr>
            <tr>
                <td>Photo:</td>
                <td><input type="file" name="photo"></td>
            </tr>
            <tr>
                <td>Gender:</td>
                <td><input type="radio" name="gender" value="male">Male
                    <input type="radio" name="gender" value="female">Female
                </td>
            </tr>
            <tr>
                <td>Language:</td>
                <td><input type="checkbox" name="lan[]" value="english">English
                    <input type="checkbox" name="lan[]" value="Hindi">Hindi
                    <input type="checkbox" name="lan[]" value="gujarati">Gujarati
                </td>
            </tr>
          
            <tr>
                <td align="center" colspan="2">
                    <input type="submit" name="submit" value="submit">
                    <input type="reset" name="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>
    <br>

