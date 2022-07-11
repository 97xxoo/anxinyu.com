<?php include'header.php';?>
<?php require_once "conn.php";?>
<!-- banner -->
<div class="inside-banner">
  <div class="container"> 
    <span class="pull-right"><a href="#">首页</a> / 联系我们</span>
    <h2>意向商家请联系我们</h2>
</div>
</div>
<!-- banner -->


<div class="container">
<div class="spacer">
<div class="row contact">
  <div class="col-lg-6 col-sm-6 ">

  <form id="add_user" name="add_user" method="post" action="contact_upload.php">
                <input type="text" class="form-control" name="client_name" placeholder="姓名">
                <input type="text" class="form-control" name="client_corpname" placeholder="公司名称">
                <input type="text" class="form-control" name="client_email" placeholder="邮箱">
                <input type="text" class="form-control" name="client_tel" placeholder="联系电话">
                <textarea rows="6" class="form-control" name="client_msg" placeholder="留言"></textarea>
      <button type="submit" class="btn btn-success" name="Submit">发送</button>
  </form>        

<?php
if(isset($_GET['message'])){
 echo $_GET['message'];
}
?>
<!-- 提交信息提示 -->   

             
        </div>
<!--   <div class="col-lg-6 col-sm-6 ">
  <div class="well"><iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Pulchowk,+Patan,+Central+Region,+Nepal&amp;aq=0&amp;oq=pulch&amp;sll=37.0625,-95.677068&amp;sspn=39.371738,86.572266&amp;ie=UTF8&amp;hq=&amp;hnear=Pulchowk,+Patan+Dhoka,+Patan,+Bagmati,+Central+Region,+Nepal&amp;ll=27.678236,85.316853&amp;spn=0.001347,0.002642&amp;t=m&amp;z=14&amp;output=embed"></iframe></div>
  </div> -->
</div>
</div>
</div>

<?php include'footer.php';?>