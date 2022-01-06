<?php
    require_once 'config/db.php';

    class EmployeeModel{
        private $bdID;
        private $bdName;
        private $bdSex;
        private $bdAge;
        private $bdGroup;
        private $bdRegDate;
        private $bdPhone;

        // Định nghĩa các phương thức để sau này nhận các thao tác tương ứng với các action
        public function getAllEmps(){
            // B1. Khởi tạo kết nối
            $conn = $this->connectDb();
            // B2. Định nghĩa và thực hiện truy vấn
            $sql = "SELECT * FROM blood_bonor";
            $result = mysqli_query($conn,$sql);

            // Tôi khai báo biến lưu kết quả trả về (dạng mảng)
            $arr_emps = [];
            // B3. Xử lý và (KO PHẢI SHOW KẾT QUẢ) TRẢ VỀ KẾT QUẢ
            if(mysqli_num_rows($result) > 0){
                // Lấy tất cả dùng mysqli_fetch_all
                $arr_emps = mysqli_fetch_all($result, MYSQLI_ASSOC); //Sử dụng MYSQLI_ASSOC để chỉ định lấy kết quả dạng MẢNG KẾT HỢP
            }

            return $arr_emps;
        }

        public function AddEmps(){
            // B1. Khởi tạo kết nối
            $conn = $this->connectDb();
            // B2. Định nghĩa và thực hiện truy vấn
            $sql2 = "INSERT INTO blood_bonor(bd_id, bd_name, bd_sex, bd_age, bd_group, bd_reg_date, bd_phone) VALUES ('', '$bdName', '$bdSex', '$bdAge', '$bdGroup', '$bdRegDate', '$bdPhone')";
            $result2 = mysqli_query($conn,$sql2);
        }

        public function UpdateEmps($bdID = null){
            // B1. Khởi tạo kết nối
            $conn = $this->connectDb();
            // B2. Định nghĩa và thực hiện truy vấn
            $sql3 = "UPDATE blood_bonor SET bd_name = '$bdName', bd_sex = '$bdSex', bd_age = '$bdAge', bd_group = '$bdGroup', bd_reg_date = '$bdRegDate', bd_phone = '$bdPhone' WHERE bd_id = '$bdID'";
            $result3 = mysqli_query($conn,$sql3);
        }

        public function DeleteEmps($bdID = null){
            // B1. Khởi tạo kết nối
            $conn = $this->connectDb();
            // B2. Định nghĩa và thực hiện truy vấn
            $sql4 = "DELETE FROM blood_bonor WHERE bd_id = '$bdID'";
            $result4 = mysqli_query($conn,$sql4);

            $this->closeDb($conn);

            return $result4;
        }

        public function connectDb() {
            $connection = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
            if (!$connection) {
                die("Không thể kết nối. Lỗi: " .mysqli_connect_error());
            }
    
            return $connection;
        }
    
        public function closeDb($connection = null) {
            mysqli_close($connection);
        }
    }


?>