<?php
include_once("templates/header.php");

if (isset($_GET['id'])) {

    $postId = $_GET['id'];
    $currentPost;

    foreach ($posts as $post) {

        if ($post['id'] == $postId) {
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
            <img src="/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
        </div>
        <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum facilis vero delectus reiciendis necessitatibus modi reprehenderit pariatur fuga esse! Dicta aperiam voluptas nostrum ex officia nulla pariatur in sint nobis.
            Laboriosam soluta quibusdam fuga dolorum aut sit id commodi distinctio, vitae similique animi earum totam molestias, praesentium quod, deleniti doloremque. Adipisci architecto quo dignissimos eius exercitationem modi impedit, sapiente totam.
            Sed aliquam quam perferendis molestiae maiores voluptatum consequatur est eaque quae, nobis obcaecati, deserunt fuga maxime. Dolores tenetur sequi nostrum molestias. Provident impedit dolorem eius ducimus consectetur, eum veniam laborum.
            Itaque, cumque quasi! Deleniti illum odit iusto doloremque necessitatibus unde, rem quod. Quae quaerat obcaecati, id minima velit neque non accusantium totam odio distinctio, culpa nulla voluptatibus ad, incidunt alias!
            Eos ratione sit sunt voluptatibus. Molestias non aperiam quibusdam velit modi, quam perferendis obcaecati accusamus sunt amet minus, ut, ex iste perspiciatis sint unde ullam cumque provident. Recusandae, et aut?</p>

        <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum facilis vero delectus reiciendis necessitatibus modi reprehenderit pariatur fuga esse! Dicta aperiam voluptas nostrum ex officia nulla pariatur in sint nobis.
            Laboriosam soluta quibusdam fuga dolorum aut sit id commodi distinctio, vitae similique animi earum totam molestias, praesentium quod, deleniti doloremque. Adipisci architecto quo dignissimos eius exercitationem modi impedit, sapiente totam.
            Sed aliquam quam perferendis molestiae maiores voluptatum consequatur est eaque quae, nobis obcaecati, deserunt fuga maxime. Dolores tenetur sequi nostrum molestias. Provident impedit dolorem eius ducimus consectetur, eum veniam laborum.
            Itaque, cumque quasi! Deleniti illum odit iusto doloremque necessitatibus unde, rem quod. Quae quaerat obcaecati, id minima velit neque non accusantium totam odio distinctio, culpa nulla voluptatibus ad, incidunt alias!
            Eos ratione sit sunt voluptatibus. Molestias non aperiam quibusdam velit modi, quam perferendis obcaecati accusamus sunt amet minus, ut, ex iste perspiciatis sint unde ullam cumque provident. Recusandae, et aut?</p>

    </div>
    <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul id="tag-list">
            <?php foreach ($currentPost['tags'] as $tag) : ?>
                <li><a href="#"><?= $tag ?></a></li>
            <?php endforeach; ?>
        </ul>
        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
            <?php foreach ($categories as $category) : ?>
                <li><a href="#"><?= $category ?></a></li>
            <?php endforeach; ?>
        </ul>
    </aside>
</main>

<?php
include_once("templates/footer.php");
?>