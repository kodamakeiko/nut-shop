<?php require '../header.php';?>
<table>
<tr><th>商品番号</th><th>商品名</th><th>商品価格</th></tr>
<?php
$pdo=new PDO( 'mysql:host=localhost;dbname=kodama_keiko_shop;charset=utf8',
'kodama_keiko','Asdf3333-');
$sql=$pdo->prepare( 'select * from product where name=?');
$sql->execute([$_REQUEST['keyword']]);
foreach ($sql as $row) {
    echo '<tr>';
    echo '<td>', $row[ 'id'],'</td>';
    echo '<td>', $row[ 'name'],'</td>';
    echo '<td>', $row[ 'price'],'</td>';
    echo '</tr>';
    echo "\n";
}
?>
</table>
<?php require '../footer.php';?>