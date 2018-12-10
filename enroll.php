CTYPE HTML>

<html>
<body>

<?php
    header("content-type:text/html;charset=utf-8");
  session_start();
    //接收表单传递的用户名和密码
    $name=$_POST['name'];
        $class=$_POST['class'];
        $id=$_POST['id'];
        $phonenum=$_post['phonenum'];
        $email=$_POST['email'];
        $wechat=$_POST['wechat'];
        $first=$_post['first'];
        $second=$_POST['second'];
        $third=$_POST['third'];

print("it is right");
        //通过php连接到mysql数据库
 
$dbhost = '';  // mysql服务器主机地址
$dbuser = '';            // mysql用户名
$dbpass = '';          // mysql用户名密码
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
    die('Could not connect: ' . mysqli_error());
}
echo '数据库连接成功！';

        mysqli_select_db($conn,"test") or die("Unable to select database!");
        echo "我们会尽快处理您的请求并将反馈结果发送至您的邮箱，请耐心等待，谢谢！";
  echo $name,' ',$class,' ',$id,' ',$phonenum,' ',$email,' ',$wechat,' ',$first,' ',$second,' ',$third;

mysqli_query($conn , "set names utf8");

$sql = "INSERT INTO test ".
"(name,class,id,phonenum,email,wechat,first,second,third) ".
        "VALUES ".
        "('$name','$class','$id','$phonenum','$email','$wechat','$first','$second','$third')";

$result = mysqli_query( $conn, $sql );
    if (! $result){
   die("data insert error");}

echo "数据插入成功\n";
mysqli_close($conn);

?>

</body>
</html>
                                                                                                                             72,2          Bot

