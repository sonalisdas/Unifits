<html>
    <body>
    <?php
        $servername="localhost";
        $username="root";
        $password="123456";
        $dbname="unifits";
        $conn=new mysqli($servername,$username,$password,$dbname);
        if($conn->connect_error)
        {
            die("connection failed:".$conn->connect_error);
        }
        $v=$_GET["fullname"];
        $w=$_GET["email"];
        $x=$_GET["uname"];
        $y=$_GET["pass"];
        $z=$_GET["rpass"];
        $sql="INSERT INTO registration(fullname,email,uname, pass,rpass) VALUES('$v','$w','$x','$y','$z')";
        
        if($conn->query($sql)==TRUE)
        {
        echo"new record created successfully";
        }
        else
        {
        echo "error:".$sql."<br>".$conn->error;
        }
        $conn->close();
        
    ?>
    </body>
</html>