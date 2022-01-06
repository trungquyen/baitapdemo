<?php
    require_once 'model/EmployeeModel.php';
    class EmployeeController{
        // Điều khiển về mặt logic giữa UserModel và User View
        function index(){
            // Tôi sẽ cần gọi UserModel để truy vấn dữ liệu
            $empModel = new EmployeeModel();
            $emps = $empModel->getAllEmps();
            // Sau khi truy vấn được dữ liệu, tôi sẽ đổ ra UserView/index.php tương ứng
            require_once 'view/employee/index.php';
        }

        function add(){
            // Tôi sẽ cần gọi UserModel để truy vấn dữ liệu
            
            // Sau khi truy vấn được dữ liệu, tôi sẽ đổ ra UserView/add.php tương ứng
        }

        function edit(){
            // Tôi sẽ cần gọi UserModel để truy vấn dữ liệu

            // Sau khi truy vấn được dữ liệu, tôi sẽ đổ ra UserView/edit.php tương ứng
        }

        function delete(){
            $bdID = $_GET['id'];
            if (!is_numeric($bdID)){
                header("Location: index.php?controller=employee&action=index");
                exit();
            }
            // Tôi sẽ cần gọi UserModel để truy vấn dữ liệu
            $empModel = new EmployeeModel();
            $result4 = $empModel->DeleteEmps($bdID);
            // Sau khi truy vấn được dữ liệu, tôi sẽ đổ ra UserView/edit.php tương ứng
            // require_once 'view/employee/index.php';
            header("Location: index.php?controller=employee&action=index");
        }
    }



?>