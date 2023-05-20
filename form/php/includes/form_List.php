<div class="container">
    <div class="table-wrapper">
        <table id="List_Users">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>AGE</th>
                    <th>PHONE</th>
                    <th>ADDRESS</th>
                    <th>EMAIL</th>
                    <th>DATE OF BIRTH</th>
                    <th>GENDER</th>
                    <th>DEGREE</th>
                    <th>HOBBIES</th>
                    <th>NOTE</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require 'php/connectDB.php';
                $db = new ConnectDB();

                $sql = "SELECT * FROM users WHERE STATUS = 1";
                $result = $db->queryResult($sql);
                if (mysqli_num_rows($result) > 0) {
                    $i = 1;
                    while ($row = mysqli_fetch_array($result)) {
                        echo '<tr>
                        <td>' . $i++ . '</td>
                        <td>' . $row['USER_ID'] . '</td>
                        <td>' . $row['NAME'] . '</td>
                        <td>' . $row['AGE'] . '</td>
                        <td>' . $row['PHONE'] . '</td>
                        <td>' . $row['ADDRESS'] . '</td>
                        <td>' . $row['EMAIL'] . '</td>
                        <td>' . $row['DOB'] . '</td>
                        <td>' . $row['GENDER'] . '</td>
                        <td>' . $row['DEGREE'] . '</td>
                        <td>' . $row['HOBBIES'] . '</td>
                        <td>' . $row['NOTE'] . '</td>
                        <td>
                            <button class="btnDetails"><a href="index.php?page=Information&id=' . $row['USER_ID'] . '">Chi tiết</a></button>
                        </td>
                        </tr>
                        ';
                    }
                }
                ?>
            </tbody>
        </table>
    </div>

</div>