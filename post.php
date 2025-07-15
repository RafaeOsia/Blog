<?php

include_once("templates/header.php");

if(isset($_GET['id'])){

    $postId = $_GET['id'];
    $currentPost;

    foreach($posts as $post){
        if($post['id'] == $postId){
            $currentPost = $post;
        }
    }
}

?>
<main id="post-container">
<div class="content-container">
    <h1 id="main-title"><?= $currentPost['title'] ?></h1>
    <p id="post-description"><?= $currentPost['description'] ?></p>
    <div class="img-container">
    <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
</div>
<p class="post-content">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos fuga quasi aut perspiciatis eius. Ea consequatur, vitae blanditiis libero laudantium, dolore molestias nam error itaque harum explicabo, deserunt quasi nihil.
Accusamus sit saepe dolor aliquid, atque culpa sapiente ex error fugit facilis eos ipsa quos expedita beatae explicabo obcaecati! Quaerat rerum fugiat veniam labore distinctio quae fuga, sint modi ipsam.
Id, repellat. Nesciunt ratione deleniti consectetur distinctio non doloribus ea incidunt illum, error dolor! Id velit magni dolores veritatis facilis placeat excepturi? Deserunt iste modi autem, voluptate nostrum consectetur placeat!
Veritatis ex eius suscipit, nesciunt perferendis ipsa sed dolore, enim labore corrupti eum rem quos ab autem, consectetur vero aut blanditiis nihil? Omnis consectetur, molestias beatae consequatur error sit neque.
Molestias atque blanditiis, sed vel ratione ipsa unde necessitatibus nihil laborum quam illum nobis eaque inventore officiis earum magni? Alias voluptas distinctio autem animi dignissimos quisquam voluptates molestiae non. Inventore!</p>
</div>
</main>
<aside id="nav-container">
    <h3 id="tags-title">Tags</h3>
    <ul id="tag-list">
                    <?php foreach($post['tags'] as $tag): ?>  <!-- Aqui estava o erro -->
                     <li><a href='#'><?= $tag ?></a></li>
                    <?php endforeach; ?>
                    </ul>
                    <h3 id="categories-title">Categorias</h3>
                    <ul id="categories-list">
                    <?php foreach($categories as $category): ?>  <!-- Aqui estava o erro -->
                     <li><a href='#'><?= $category ?></a></li>
                    <?php endforeach; ?>
                    </ul>
</aside>

<?php
include_once("templates/footer.php")
?>