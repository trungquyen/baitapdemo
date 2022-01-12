<?php
    require "view/template/header.php";
?>

    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Sửa thông tin người đăng ký</h2>
                    <div style="color: red">
                        <?php echo $error; ?>
                    </div>
                </div>

                <form method="post" action="">
                    <?php
                        foreach($emps as $isSelect){
                    ?>
                        Họ tên :
                        <input type="text" name="bdName" 
                        value="<?php echo $isSelect['bd_name']?>" />
                        <br />
                        Giới tính :
                        <input type="text" name="bdSex" 
                        value="<?php echo $isSelect['bd_sex']?>" />
                        <br />
                        Ngày sinh :
                        <input type="text" name="bdAge" 
                        value="<?php echo $isSelect['bd_age']?>" />
                        <br />
                        Nhóm máu :
                        <input type="text" name="bdGroup" 
                        value="<?php echo $isSelect['bd_group']?>" />
                        <br />
                        Ngày đăng ký :
                        <input type="text" name="bdRegDate" 
                        value="<?php echo $isSelect['bd_reg_date']?>" />
                        <br />
                        SĐT :
                        <input type="text" name="bdPhone" 
                        value="<?php echo $isSelect['bd_phone']?>" />
                        <br />
                    <?php
                        }
                    ?>
                    <input type="submit" name="btnUpdate" value="Update" />
                </form>
            </div>
        </div>
    </main>
<?php
    require "view/template/footer.php";
?>