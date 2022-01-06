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
                            <th scope="col">Giới tính</th>
                            <th scope="col">Ngày sinh</th>
                            <th scope="col">Nhóm máu</th>
                            <th scope="col">Ngày đăng ký</th>
                            <th scope="col">Số điện thoại</th>
                            <th scope="col">Sửa</th>
                            <th scope="col">Xoá</th>
                          </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row"><?php
                                    foreach($emps as $row){
                                        echo $row['bd_id'];
                                    }                                   
                                ?></th>
                                <td><?php
                                    foreach($emps as $row){
                                        echo $row['bd_name'];
                                    }
                                ?></td>
                                <td><?php
                                    foreach($emps as $row){
                                        echo $row['bd_sex'];
                                    }
                                ?></td>
                                <td><?php
                                    foreach($emps as $row){
                                        echo $row['bd_age'];
                                    }
                                    ?></td>
                                <td><?php
                                    foreach($emps as $row){
                                        echo $row['bd_group'];
                                    }
                                ?></td>
                                <td><?php
                                    foreach($emps as $row){
                                        echo $row['bd_reg_date'];
                                    }
                                ?></td>
                                <td><?php
                                    foreach($emps as $row){
                                        echo $row['bd_phone'];
                                    }
                                ?></td>
                                <td><a href="employee.php?id=<?php 
                                    foreach($emps as $row){
                                        echo $row['bd_id'];
                                    } 
                                ?>"><i class="bi bi-pencil-square"></i></a></td>
                                <td><a href="employee.php?id=<?php
                                    foreach($emps as $row){
                                        echo $row['bd_id'];
                                    }  
                                ?>"><i class="bi bi-trash"></i></a></td>
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