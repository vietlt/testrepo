<table>
    <?php
    foreach($content->result() as $ct){

    ?>
    <tr>
        <td>Tiêu đề = <?=$ct->title?></td>
        <td>Nội dung = <?=$ct->content?></td>
        <td>xóa = <a href="http://localhost/demo/index.php/index/delete/<?=$ct->id?>">Xóa</a></td>
    </tr>
    <?php }?>
</table>
<a href="index/add_data">Thêm cái</a>
<select>abcd
    <?php
    foreach($content->result() as $ct){

    ?>
<option value="<?=$ct->id?>"><?=$ct->title?></option>
    <?php }?>
</select>