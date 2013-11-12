<form method="post" action="http://localhost/demo/index.php/index/update_data">
  <input type="hidden" name="id" value="<?=$content[0]->id?>">
    title : <input type="text" name="title" value="<?=$content[0]->title?>">
    content : <textarea name="content"><?=$content[0]->content?></textarea>
    <input type="submit" value="luu">
</form>