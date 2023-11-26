<?php
  $servername='localhost';
  $username='root';
  $password='';
  $dbname='itbasket';

  $conn= mysqli_connect($servername,$username,$password,$dbname);

  if(!$conn){
    die("faild".mysqli_connect_error());
   }
?>

<?php

    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql="SELECT * FROM form WHERE email='$email'";
    
    $result=mysqli_query($conn,$sql);
    //$conn->query($sql)

    if($result->num_rows>0)
    {
        $row=$result->fetch_assoc();

        if($password===$row['password'])
        {
            echo "login sucessful";
        }
        else
        {
            echo "invalid password";
        }
    }
    else{
        echo "your data is not found signup";
    }
    
    mysqli_close($conn);
?>


 
