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
            $error = '';
            // Tôi sẽ cần gọi UserModel để truy vấn dữ liệu
            if (isset($_POST['btnSave'])){
                $bdName = $_POST['bdName'];
                $bdSex = $_POST['bdSex'];
                $bdAge = $_POST['bdAge'];
                $bdGroup = $_POST['bdGroup'];
                $bdRegDate = $_POST['bdRegDate'];
                $bdPhone = $_POST['bdPhone'];
                if (empty($bdName)) {
                    $error = "Tên không được để chống";
                }else{
                    $empModel = new EmployeeModel();
                    $empsArr = [
                        'bdName' => $bdName,
                        'bdSex' => $bdSex,
                        'bdAge' => $bdAge,
                        'bdGroup' => $bdGroup,
                        'bdRegDate' => $bdRegDate,
                        'bdPhone' => $bdPhone
                    ];
                    $isInsert = $empModel->AddEmps($empsArr);
                    header("Location: index.php?controller=employee&action=index");
                }
            }
            // Sau khi truy vấn được dữ liệu, tôi sẽ đổ ra UserView/add.php tương ứng
            require_once 'view/employee/add.php';
            //header("Location: index.php?controller=employee&action=index");
        }

        function edit(){
            // Tôi sẽ cần gọi UserModel để truy vấn dữ liệu
            $bdID = $_GET['id'];
            //gọi model để lấy ra đối tượng sách theo id
            $empModel = new EmployeeModel();
            $emps = $empModel->getBookById($bdID);
            echo 'Hello';

            //xử lý submit form, lặp lại thao tác khi submit lúc thêm mới
            $error = '';
            if (isset($_POST['btnUpdate'])) {
                $bdName = $_POST['bdName'];
                $bdSex = $_POST['bdSex'];
                $bdAge = $_POST['bdAge'];
                $bdGroup = $_POST['bdGroup'];
                $bdRegDate = $_POST['bdRegDate'];
                $bdPhone = $_POST['bdPhone'];
                //check validate dữ liệu
                if (empty($name)) {
                    $error = "Name không được để trống";
                }
                else {
                    //xử lý update dữ liệu vào hệ thống
                    $empModel = new EmployeeModel();
                    $empsArr = [
                        'bdName' => $bdName,
                        'bdSex' => $bdSex,
                        'bdAge' => $bdAge,
                        'bdGroup' => $bdGroup,
                        'bdRegDate' => $bdRegDate,
                        'bdPhone' => $bdPhone
                    ];
                    $isUpdate = $empModel->UpdateEmps($empsArr);
                    // if ($isUpdate) {
                    //     $_SESSION['success'] = "Update bản ghi #$id thành công";
                    // }
                    // else {
                    //     $_SESSION['error'] = "Update bản ghi #$id thất bại";
                    // }
                    header("Location: index.php?controller=book&action=index");
                }
            }
            //truyền ra view
            require_once 'view/employee/edit.php';
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