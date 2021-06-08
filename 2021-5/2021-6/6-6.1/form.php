
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="form.php" method="POST">
        <table>
            <tr>
                <td>员工姓名</td>
                <td>
                    <input type="text" name="p_name">
                </td>
            </tr>
            <tr>
                <td>密码</td>
                <td>
                    <input type="password" name="pass1">
                </td>
            </tr>
            <tr>
                <td>确认密码</td>
                <td>
                    <input type="password" naem="pass2">
                </td>
            </tr>
            <tr>
                <td>年龄</td>
                <td>
                    <select name="p_age">
                    <?php for($i=18;$i<36;$i++){ ?>
                        
                        <option name="<?php echo $i; ?>"><?php echo $i; ?></option>

                    <?php } ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>性别</td>
                <td>
                    <input type="radio" name="p_sex" value="男" checked>男
                    <input type="radio" name="p_sex" value="女">女
                </td>
            </tr>
            <tr>
                <td>邮箱</td>
                <td>
                    <input type="email" name="p_email">
                </td>
            </tr>
            <tr>
                <td>电话号码</td>
                <td>
                    <input type="text" name="p_tel">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="添加">
                </td>
                <td></td>
            </tr>
        </table>
    </form>
</body>
</html>