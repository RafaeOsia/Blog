<?php 
include_once("templates/header.php");
include_once("data/posts.php");  // Garante que os posts são carregados antes de usá-los
?>
<main>
    <div id="title-container">
        <h1>Blog Codar</h1>
        <p>O seu blog de programação</p>
    </div>
    <div id="post-container">
        <?php foreach($posts as $post): ?>
            <div class="post-box">
                <img src="<?= $BASE_URL ?>/img/<?= $post['img'] ?>" alt="<?= $post['title'] ?>">
                <h2 class="post-title">
                    <a href="<?= $BASE_URL ?>post.php?id=<?= $post['id'] ?>"><?= $post['title'] ?></a>
                </h2>
                <p class="post-description"><?= $post['description'] ?></p>
                <div class="tags-container">
                    <?php foreach($post['tags'] as $tag): ?>  <!-- Aqui estava o erro -->
                        <a href='#'><?= $tag ?></a>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</main>
<?php include_once("templates/footer.php"); ?>

