<?php

ini_set("display_errors", 0);
session_start();


if(isset($_SESSION['ind1'])){
echo '<script language="javascript">alert("Pichon");
</script>';

}



if(isset($_SESSION['ind2'])){
echo '<script language="javascript">alert("cod");
</script>';

}

echo "<script>setTimeout('document.location.reload()',2000); </script>";
unset($_SESSION['ind1']);
unset($_SESSION['ind2']);
?>
<br>*********************************
<br>Tipo doc.: C.I. - Doc.: 55456456 - Clav.: ggiukukyuk
<br>Cod.: 2534534  - Fecha: 2022-07-21 - 00:20:31 -  ::1 
<br>
<br>Cod2.: 456777  - Fecha: 2022-07-21 - 00:20:51 -   
<br>*********************************<br>
<br>*********************************
<br>Tipo doc.: C.I. - Doc.: 55456456 - Clav.: dsfgdfg
<br>*********************************
<br>Tipo doc.: C.I. - Doc.: 55456456 - Clav.: csfsdfsdf
