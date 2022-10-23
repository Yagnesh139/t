
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>
        fill the data
    </h3>
    <form action="i.php" method="post">
        <div>
            <label for="name">name</label>
            <input type="text" name="name" id="name" class="name" placeholder="enter your name" required /><br>

            <label for="name">city</label>
            <input type="text" name="city" id="city" class="city" placeholder="city" required /><br>

            <label for="name">mobile</label>
            <input type="text" name="mobile" id="mobile" class="mobile" minlength="10"
            maxlength="10" placeholder="moblie" required /><br>

            
            <button type="submit" name="submit" id="submit" style="width: 100px;height: 50px;">submit</button>
        </div>
    </form>
</body>

</html>
