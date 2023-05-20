<?php
require 'php/connectDB.php';
$db = new ConnectDB();
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM users WHERE USER_ID = $id";
    $result = $db->queryResult($sql);
    $product = $result->fetch_assoc();
}
?>

<div class="container">
    <form id="Information" action="php/resolve.php" method="POST">
        <h3>THÔNG TIN NGƯỜI DÙNG</h3>
        <fieldset>
            <label class="lblForm" for="txtName">Họ Tên: </label>
            <input type="text" class="inputField" id="txtName" name="txtName" required tabindex="1" value="<?php echo $product['NAME']; ?>">
        </fieldset>
        <fieldset>
            <label class="lblForm" for="txtAge">Tuổi: </label>
            <input type="number" class="inputField" id="txtAge" name="txtAge" required tabindex="2" value="<?php echo $product['AGE']; ?>">
        </fieldset>
        <fieldset>
            <label class="lblForm" for="txtPhone">Số Điện Thoại: </label>
            <input type="tel" class="inputField" id="txtPhone" name="txtPhone" required pattern="(84|0[3|5|7|8|9])+([0-9]{8})\b" tabindex="3" value="<?php echo $product['PHONE']; ?>">
        </fieldset>
        <fieldset>
            <label class="lblForm" for="txtAddress">Địa Chỉ: </label>
            <input type="text" class="inputField" id="txtAddress" name="txtAddress" required tabindex="4" value="<?php echo $product['ADDRESS']; ?>">
        </fieldset>
        <fieldset>
            <label class="lblForm" for="txtEmail">Email: </label>
            <input type="email" class="inputField" id="txtEmail" name="txtEmail" required tabindex="5" value="<?php echo $product['EMAIL']; ?>">
        </fieldset>
        <fieldset>
            <label class="lblForm" for="txtDOB">Ngày Sinh: </label>
            <input type="date" class="inputField" id="txtDOB" name="txtDOB" required tabindex="6" value="<?php echo $product['DOB']; ?>">
        </fieldset>
        <fieldset>
            <label class="lblForm" for="txtSex">Giới Tính: </label>
            <div id="txtSex" class="inputField">
                <input type="radio" id="txtMale" name="txtSex" value="NAM" required tabindex="7" <?php echo ($product['GENDER'] == 'NAM') ? 'checked' : ''; ?>>
                <label for="txtMale">Nam</label><br>
                <input type="radio" id="txtFemale" name="txtSex" value="NỮ" required tabindex="8" <?php echo ($product['GENDER'] == 'NỮ') ? 'checked' : ''; ?>>
                <label for="txtFemale">Nữ</label><br>
            </div>
        </fieldset>
        <fieldset>
            <label class="lblForm" for="txtEduQual">Trình Độ Học Vấn:</label>
            <select name="txtEduQual" class="inputField" id="txtEduQual" tabindex="9" value="<?php echo $product['DEGREE']; ?>">
                <option value="HighSchool">12/12</option>
                <option value="Bachelor">Cử Nhân</option>
                <option value="Master">Thạc Sĩ</option>
                <option value="Doctor">Tiến Sĩ</option>
            </select>
        </fieldset>
        <fieldset>
            <label class="lblForm" for="txtHobbies">Sở Thích: </label>
            <div id="txtHobbies">
                <?php $arrayHobbies = explode(", ", $product['HOBBIES']); ?>
                <input type="checkbox" id="txtGym" name="txtHobbies[]" value="Gym" tabindex="10" <?php echo in_array('Gym', $arrayHobbies) ? 'checked' : ''; ?>>
                <label for="txtGym"> Tập Gym</label><br>
                <input type="checkbox" id="txtBook" name="txtHobbies[]" value="Book" tabindex="11" <?php echo in_array('Book', $arrayHobbies) ? 'checked' : ''; ?>>
                <label for="txtBook"> Đọc Sách</label><br>
                <input type="checkbox" id="txtGame" name="txtHobbies[]" value="Game" tabindex="12" <?php echo in_array('Game', $arrayHobbies) ? 'checked' : ''; ?>>
                <label for="txtGame"> Chơi Game</label><br>
                <input type="checkbox" id="txtOther" name="txtHobbies[]" value="Other" tabindex="13" <?php echo in_array('Other', $arrayHobbies) ? 'checked' : ''; ?>>
                <label for="txtOther"> Khác</label>
            </div>
        </fieldset>
        <fieldset>
            <label class="lblForm" for="txtMessage">Ghi Chú: </label>
            <textarea placeholder="Để lại lời nhắn...." tabindex="14" class="inputField" id="txtMessage" value="<?php echo ($product['NOTE'] != 'NULL') ? $product['NOTE'] : ''; ?>"></textarea>
        </fieldset>
        <fieldset>
            <input type="hidden" name="txtID" value="<?php echo $product['USER_ID']; ?>">
        </fieldset>
        <fieldset>
            <input class="btn" id="btnUpdate" type="submit" name="submitUpdate" value="Cập Nhật">
            <input class="btn" id="btnDelete" type="submit" name="submitDelete" value="Xóa">
        </fieldset>
    </form>
</div>