<?php
include_once "../base.php";
$id=$_POST['id'];
$row=$Stu->find($id);
?>
<h5>編輯學生</h5>
  <form action="api/insert.php" method="post">
    <div>姓名<input type="text" id="edit_name" name="name" value="<?=$row['name'];?>"></div>
    <div>班級<input type="text" id="edit_classes" name="classes" value="<?=$row['classes'];?>"></div>
    <div>座號<input type="text" id="edit_num" name="num" value="<?=$row['num'];?>"></div>
    <div>成績<input type="text" id="edit_score" name="score" value="<?=$row['score'];?>"></div>
    <input type="button" onclick="update(<?=$row['id'];?>)" value="編輯">
    <input type="button" onclick="cl()" value="取消">