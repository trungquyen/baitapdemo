<?php
    require "view/template/header.php";
?>

    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Mã Người đăng ký</th>
                            <th scope="col">Họ tên</th>
                            <th scope="col">Nhóm máu</th>
                            <th scope="col">Ngày dăng ký</th>
                          </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row"><?php
                                    foreach($users as $row){
                                        echo $row['bd_id'];
                                    }                                   
                                ?></th>
                                <td><?php
                                    foreach($users as $row){
                                        echo $row['bd_name'];
                                    }
                                ?></td>
                                <td><?php
                                    foreach($users as $row){
                                        echo $row['bd_group'];
                                    }
                                ?></td>
                                <td><?php
                                    foreach($users as $row){
                                        echo $row['bd_reg_date'];
                                    }
                                ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
<?php
    require "view/template/footer.php";
?>