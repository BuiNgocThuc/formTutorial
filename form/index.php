<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/form.css">
    <link rel="stylesheet" href="style/table.css">
    <title>Document</title>
</head>

<body>
    <?php
        if(isset($_GET['page'])) {
            switch($_GET['page']) {
                case 'Information':
                    include 'php/includes/form_Information.php';
                    break;
                case 'Login':
                    include 'php/includes/form_Login.php';
                    break;
                case 'Register':
                    include 'php/includes/form_Register.php';
                    break;
                case 'List':
                    include 'php/includes/form_List.php';
                    break;  
            }
        }
        else {
            include "php/formSelection.php";
        }
    ?>
</body>

</html>