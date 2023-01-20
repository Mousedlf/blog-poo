<div class="mt-3">
    <h3><?= $post->getTitle() ?></h3>
    <p><?= $post->getContent() ?></p>
    <a href="index.php?type=post&action=remove&id=<?= $post->getId() ?>" class="btn btn-danger">supprimer</a>
    <a href="index.php?type=post&action=change&id=<?= $post->getId() ?>" class="btn btn-warning">Update</a>

    <a href="index.php" class="btn btn-success">retour</a>
</div>

<h3 class="mt-5">Comments</h3>
<?php foreach ($comments as $comment): ?>

<div class="d-flex my-3">
    <p><?= $comment->getContent() ?></p>
    <a href="index.php?type=comment&action=remove&id=<?= $comment->getId() ?>" class="btn btn-danger"><strong>X</strong></a>
    <a href="index.php?type=comment&action=change&id=<?= $comment->getId() ?>" class="btn btn-warning"><strong>update</strong></a>

</div>

<?php endforeach; ?>


<form method="post" class="form" action="index.php?type=comment&action=create">
    <input class="form-control"  type="text" name="content" placeholder="add a comment">
    <input name="post_id" class="form-control" type="hidden" value="<?= $post->getId() ?>">
    <button class="btn btn-success" type="submit">Send</button>
</form>