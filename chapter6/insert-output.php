<?php require '../header.php';?>
<?php
$pdo=new PDO( 'mysql:host=localhost;dbname=kodama_keiko_shop;charset=utf8',
'kodama_keiko','Asdf3333-');
$sql=$pdo->prepare( 'insert into product values(null, ?, ?)');
if ($sql->execute( [$_REQUEST['name'], $_REQUEST['price']])) {
    echo '追加に成功しました。';
} else {
    echo '追加に失敗しました。';
}
?>
<?php require '../footer.php';?>