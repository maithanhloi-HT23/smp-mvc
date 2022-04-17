<?php
session_start();
error_reporting(0);
include('../controllers/UpdateIssues.php');
if (strlen($_SESSION['alogin']) == 0) {
  header('location:../index.php');
} else {
  if (isset($_POST['submit2'])) {   
    $issues = new UpdateIssues();
    if($issues->updateIssues($iid, $remark) == true){
      $msg = "Đã cập nhật thành công nhận xét ";
    }else{
      $error = "Cập nhật không thành công nhận xét ";
    }    
  }

?>
  <script language="javascript" type="text/javascript">
    function f2() {
      window.close();
    }
    ser

    function f3() {
      window.print();
    }
  </script>
  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
  <html xmlns="http://www.w3.org/1999/xhtml">

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Cập nhật Tuân thủ </title>
    <link href="../css/style.css" rel="stylesheet" type="text/css" />
    <link href="../css/anuj.css" rel="stylesheet" type="text/css">
  </head>

  <body>

    <div style="margin-left:50px;">
      <form name="updateticket" id="updateticket" method="post">
        <table width="100%" cellspacing="0" cellpadding="0">
          <tr height="50">
            <td colspan="2" class="fontkink2" style="padding-left:0px;">
              <div class="fontpink2"> <b>Cập nhật ghi chú !</b></div>
            </td>
          </tr>
          <tr>
            <td colspan="2"> <?php if ($error) { ?><div class=" errorWrap"><strong>Lỗi</strong>: <?php echo htmlentities($error); ?>
                </div>
              <?php } else if ($msg) { ?><div class="succWrap"><strong>Thành công</strong>: <?php echo htmlentities($msg); ?> </div><?php } ?></td>
          </tr>        
           <?php include "../controllers/ShowUpdateIssues.php"; ?>
        </table>
      </form>
    </div>

  </body>

  </html>
<?php } ?>