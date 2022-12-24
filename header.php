<? 
  session_start(); 
  error_reporting(E_ERROR); //убирает видимость ошибок на стр

?>  
<div class='header'>
  <div class='nav'>
    <ul>
      <li><img class="browser" src="animated/browser.gif"></li>
      <li><a class="active active_glav" href="/index.php?0">Главная</a></li>
      <li><a class="active" href="/products.php?6">Товары</a></li>
      <li><a class="active" href="/korzina.php?7">Корзина</a></li>
      <li><a class="active" href="/registr.php?2">Reg</a></li>
      <li><a class="active" href="/authen.php?4">Auth</a></li>

      <?
        if(!$_SESSION['user']) {

        } else {
      ?>
        <li><a class="active" href="/account.php?3">Account</a></li>
        <li><a class="active" href="lib/logout.php">Logout</a></li>
      <?
        }
      ?>

      <?
        if(!$_SESSION['user'] || $_SESSION['user']['pravo'] == 'user') {

        } else {
      ?>
        <li><a class="active" href="/users.php?5">Users</a></li>
        <li><a class="active" href="/admin.php?8">Admin panel</a></li>
      <?
        }
      ?>
    </ul>
  </div>
</div>

<h1 class="smen_nazv"> 
<? 
  if(isset($_GET['0']))
  { ?> <img class="cheliki" src="animated/cheliki.gif" alt="cheliki"> <p> Главная</p> <?}
  elseif(isset($_GET['1']))
  { ?> <p>Info</p> <? } 
  elseif(isset($_GET['2']))
  { ?> <p>Reg</p> <? }
  elseif(isset($_GET['3']))
  { ?> <img class="account" src="animated/account.gif" alt="account"> <p>Account</p> <? } 
  elseif(isset($_GET['4']))
  { ?> <p>Auth</p> <? }
  elseif(isset($_GET['5']))
  { ?> <p>Users</p> <? }
  elseif(isset($_GET['6']))
  { ?> <p>Товары</p> <? }
  elseif(isset($_GET['7']))
  { ?> <p>Корзина</p> <? }
  elseif(isset($_GET['8']))
  { ?> <p>Admin panel</p> <? } 
?>

</h1>
