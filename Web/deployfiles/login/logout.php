<?
  include "../session.php";
  session_start();
  unset($_SESSION['userid']);
  unset($_SESSION['username']);
  unset($_SESSION['usernick']);
  unset($_SESSION['hp']);
  unset($_SESSION['e-mail']);
  unset($_SESSION['regist_day']);

  echo("<script>window.alert('로그아웃 되었습니다.');
	location.href='../index.php';</script>");
?>
