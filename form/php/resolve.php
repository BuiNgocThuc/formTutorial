<?php
require 'connectDB.php';
$db = new connectDB();

if (isset($_POST['submitLogin'])) {
    $username = $_POST['txtUsername'];
    $password = $_POST['txtPassword'];

    $sql = "SELECT * FROM accounts WHERE STATUS = 1 AND USERNAME = '$username'";
    $result = $db->queryResult($sql);
    if (mysqli_num_rows($result) > 0) {
        $sql1 = "SELECT PASSWORD FROM accounts WHERE USERNAME = '$username' AND PASSWORD = '$password'";
        $result1 = $db->queryResult($sql1);
        if (mysqli_num_rows($result1) > 0) {
            echo "Đăng Nhập Thành Công";
        } else {
            echo '<script>alert("Sai Mật Khẩu")
            window.history.back();</script>';
        }
    } else {
        echo '<script>alert("Không Tồn Tại Tài Khoản")
        window.history.back();</script>';
    }
}

if (isset($_POST['submitRegister'])) {
    $username = $_POST['txtUsername'];
    $phone = $_POST['txtPhone'];
    $address = $_POST['txtAddress'];
    $email = $_POST['txtEmail'];
    $password = $_POST['txtPassword'];

    $sql = "INSERT INTO accounts (username, phone, address, email, password, STATUS)
            VALUES ('$username', '$phone', '$address', '$email', '$password', 1)";
    $respond = $db->queryNonResult($sql);

    if ($respond) {
        echo 'name: ' . $username . '<br>
        phone: ' . $phone . '<br>
        address: ' . $address . '<br>
        email: ' . $email . '<br>
        password: ' . $password . '<br>';
    } else {
        echo "error: " . $sql;
    }
}

if (isset($_POST['submitUpdate'])) {
    $id = $_POST['txtID'];
    $name = $_POST['txtName'];
    $age = $_POST['txtAge'];
    $phone = $_POST['txtPhone'];
    $address = $_POST['txtAddress'];
    $email = $_POST['txtEmail'];
    $DOB = $_POST['txtDOB'];
    $GENDER = $_POST['txtSex'];
    $DEGREE = $_POST['txtEduQual'];
    $selectedHOBBIES = $_POST['txtHobbies'];
    $HOBBIES = implode(", ", $selectedHOBBIES); // Chuyển đổi mảng thành chuỗi ngăn cách bằng dấu phẩy và khoảng trắng
    if (isset($_POST['txtMessage'])) {
        $NOTE = $_POST['txtMessage'];
    } else {
        $NOTE = "NULL";
    }

    $sql = "UPDATE users
        SET NAME = '" . $name . "',
            AGE = " . $age . ",
            PHONE = '" . $phone . "',
            ADDRESS = '" . $address . "',
            EMAIL = '" . $email . "',
            DOB = '" . $DOB . "',
            GENDER = '" . $GENDER . "',
            DEGREE = '" . $DEGREE . "',
            HOBBIES = '" . $HOBBIES . "',
            NOTE = '" . $NOTE . "'
        WHERE USER_ID = " . $id;

    $respond = $db->queryNonResult($sql);
    if ($respond) {
        echo '<script>alert("Cập Nhật Thành Công")
        window.history.back();</script>';
    } else {
        echo 'Error: ' . $sql;
    }
}

if (isset($_POST['submitDelete'])) {
    $id = $_POST['txtID'];

    $sql = "UPDATE users SET STATUS = 'ĐÃ XÓA' WHERE USER_ID = '" . $id . "'";
    $respond = $db->queryNonResult($sql);
    if ($respond) {
        echo '<script>alert("Xóa Thành Công")
        window.history.back();</script>';
    } else {
        echo 'Error: ' . $sql;
    }
}

if (isset($_POST['submitInfo'])) {
    $name = $_POST['txtName'];
    $age = $_POST['txtAge'];
    $phone = $_POST['txtPhone'];
    $address = $_POST['txtAddress'];
    $email = $_POST['txtEmail'];
    $DOB = $_POST['txtDOB'];
    $GENDER = $_POST['txtSex'];
    $DEGREE = $_POST['txtEduQual'];
    $selectedHOBBIES = $_POST['txtHobbies'];
    $HOBBIES = implode(", ", $selectedHOBBIES); // Chuyển đổi mảng thành chuỗi ngăn cách bằng dấu phẩy và khoảng trắng
    if (isset($_POST['txtMessage'])) {
        $NOTE = $_POST['txtMessage'];
    } else {
        $NOTE = "NULL";
    }

    $sql = "INSERT INTO users(NAME, AGE, PHONE, ADDRESS, EMAIL, DOB, GENDER, DEGREE, HOBBIES, NOTE, STATUS)
            VALUES ('$name', '$age', '$phone', '$address', '$email', '$DOB', '$GENDER', '$DEGREE', '$HOBBIES', '$NOTE', 1)";
    $respond = $db->queryNonResult($sql);

    if ($respond) {
        echo 'name: ' . $name . '<br>
        age: ' . $age . '<br>
        phone: ' . $phone . '<br>
        address: ' . $address . '<br>
        email: ' . $email . '<br>
        date of birth: ' . $DOB . '<br>';
    } else {
        echo "error: " . $sql;
    }
}
