<form action="index.php?type=comment&action=change" method="post">

    <input type="hidden" name="idUpdate" value="<?= $comment->getId()?>">
    <input type="text" name="contentUpdate" value="<?= $comment->getContent() ?>" id="">
    <button type="submit" class="btn btn-success">update</button>

</form>
