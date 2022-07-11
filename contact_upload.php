<!--已完成-->
<?php require_once "conn.php";?>


<?php
if(empty($_POST['client_name'])||empty($_POST['client_corpname'])
||empty($_POST['client_tel']))
{
    die("请填写姓名，公司和电话");
}
else
{
$clientname=($_POST['client_name']);
$clientcorpname =($_POST['client_corpname']);
$clientemail =($_POST['client_email']);
$clienttel =($_POST['client_tel']);
$clientmsg =($_POST['client_msg']);


$sql = "insert into client(client_name, client_corpname, client_email,tel,client_msg)values('$clientname','$clientcorpname','$clientemail','$clienttel',
'$clientmsg')" ;

//插入数据库
if (!(mysqli_query( $con , $sql )))
{
   echo "<script>alert('数据插入失败');//window.location.href='../'</script>" ;
   $error_message = mysqli_error($con);
   echo "Query Failed: ".$error_message;

}
else
{
echo "<script>alert('提交成功！')</script>" ;

// $q="select * from users where user_name='".$UserName."'";//设置查询指令
// $result=mysqli_query($con,$q);//执行查询
// $row=mysqli_fetch_assoc($result);

// echo "用户编号：".$row['user_id']."<br>";
// echo "用户姓名：".$UserName."<br>";
// echo "用户密码：".$UserPsw."<br>";
// echo "用户性别：".$UserSex."<br>";
// echo "用户年龄：".$UserAge."<br>";
// echo "用户班级：".$UserCls."<br>";
// echo "用户小组：".$UserGrp."<br>";

// }


if(isset($_POST['Submit'])){
$message = urlencode("信息已提交 ");
header("Location:".$_SERVER[HTTP_REFERER]."?message=".$message);
die;}
//stay in current page
}
}
