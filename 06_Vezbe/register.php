<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Register</title>
</head>
<body>
    <form action="#" method="post">
        <p>
            Name:
            <input type="text" name="name">
        </p>
        <p>
            Surname:
            <input type="text" name="surname">
        </p>
        <p>
            Gender:
            <input type="radio" name="gender" value="m">>Male
            <input type="radio" name="gender" value="f">Female
            <input type="radio" name="gender" value="o">Other
        </p>
        <p>
            Data of birth:
            <input type="date" name="dob">
        </p>
        <p>
            Username:
            <input type="text" name="username">
        </p>
        <p>
            Password:
            <input type="password" name="password">
        </p>
        <p>
            Retype password:
            <input type="password" name="retypePassword">
        </p>
        <p>
            <input type="submit" value="Submit">
        </p>
    </form>
</body>
</html>