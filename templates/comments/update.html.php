<form action="index.php?type=comment&action=change" method="post">

    <input type="hidden" name="id" value="<?= $comment->getId()?>">
    <input type="text" name="content" value="<?= $comment->getContent() ?>" id="">
    <button type="submit" class="btn btn-success">update</button>

</form>
