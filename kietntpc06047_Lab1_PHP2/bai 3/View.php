<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="">
        <h1>
            Thông tin 
            <?php if (!empty($user['email']) ? $user['email'] : "")
                echo $user['email'];
            ?>
        </h1>
        <h3>
            Họ:
            <?php if (!empty($user['firstname']) ? $user['firstname'] : "")
                echo $user['firstname'];
            ?>
        </h3>
        <h3>
            Tên:
            <?php if (!empty($user['lastname']) ? $user['lastname'] : "")
                echo $user['lastname'];
            ?>
        </h3>
        <form action="" method="post">
            <label for="email">Email cần tìm:</label>
            <input type="email" name="email">
            <button type="submit">Gửi</button>
        </form>
    </div>
</body>
</html>