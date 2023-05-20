<div class="container">
    <form action="php/resolve.php" method="POST" id="Register">
        <h3>ĐĂNG KÝ</h3>
        <fieldset>
            <input type="text" placeholder="Tên Đăng Nhập" id="txtUsername" name="txtUsername" required>
            <input type="tel" placeholder="Số Điện Thoại" id="txtPhone" name="txtPhone" required pattern="(84|0[3|5|7|8|9])+([0-9]{8})\b">
            <input type="text" placeholder="Địa Chỉ" id="txtAddress" name="txtAddress" required>
            <input type="email" placeholder="Email" id="txtEmail" name="txtEmail" required>
            <input type="password" placeholder="Mật Khẩu" id="txtPassword" name="txtPassword" required>
            <input type="password" placeholder="Xác Nhận Mật Khẩu" id="txtConfirmPassword" required>
        </fieldset>
        <input id="btnRegister" name="submitRegister" type="submit" value="Đăng Ký">
    </form>
</div>