<?php

    include("./config.php")
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web bán hàng</title>
    <style>
        div.menu-ngang a{
            color: blue;
            margin-left: 10px;
            margin-right: 10px;
            text-decoration: none;
            font-size: 20px;
        }
        div.menu-ngang a:hover{
            color: red;
        }
        div.menu_doc a{
            color: blue;
            text-decoration: none;
            display: block;
        }
        div.menu_doc a:hover{
            color: red;
        }
    </style>
</head>
<body>
    <center>
    <table width="990px">
    <tr>
        <td colspan="3"><img src="./img/banner1.jpg" alt=""></td>
    </tr>
    <tr>
        <td colspan="3" height="50px">
            <div class="menu-ngang">
                <?php
                    include("./function/menu_ngang/menu_ngang.php")

                ?>
            </div>
        </td>
    </tr>
    <tr>
        <div class="menu_doc">
        <td width="170px">
            <?php
                include("./function/menu_doc/menu_doc.php");
            ?>
        </td>
        <td width="650px">Cột giữa</td>
        <td width="170px">Cột phải</td>
    </tr>
        </div>
    <tr>
        <td colspan="3">Footer</td>
    </tr>
    </table>
    </center>
</body>
</html>