<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Page</title>
</head>
<body>
    <form>

        <table>
            <td>Logged in as  <?php

                echo $_COOKIE["userName"]


                ?> </td>

            <tr>
                <td><a href="">profile</a></td>
            </tr>
            <tr>
                <td><a href="">change password</a></td>
            </tr>
            <tr>
                <td><a href="">view users</a></td>
            </tr>
            <tr>
                <td><a href="">log out</a></td>
            </tr>
            <tr>
                <td></td>
                <td>Welcome <?php echo $_COOKIE["userName"]; ?> </td>
            </tr>

        </table>
    </form>

</body>
</html>