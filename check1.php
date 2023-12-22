<head>
    <body>
        <?php
            //session_start();
            $servername="localhost";
            $username="root";
            $password="123456";
            $dbname="unifits";
            $conn=new mysqli($servername,$username,$password,$dbname);
            if($conn->connect_error)
            {
                die("connection failed:".$conn->connect_error);
            }
            if(isset($_POST['login'])){
            $x=$_POST["user"];
            $y=$_POST["pass"];
            //$sql="SELECT * FROM registration";
            //
            $sql="SELECT * FROM registration WHERE uname= '$x' AND pass='$y'";
            $result = $conn->query($sql);

            if($result->num_rows>0){
                echo "login successful";
                echo'<script>alert("You have Logged in Successfully!!")</script>';
            }
            else{
                echo "error:".$sql."<br>".$conn->error;
            }
            }
            $conn->close();
        ?>
    </body>
</head>