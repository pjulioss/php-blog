<?php

include_once "templates/header.php";

if (isset($_GET['id'])) {
    $postId = $_GET['id'] .
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
        <h1 id="main-title"><?=$currentPost['title']?></h1>
        <p id="post-description"><?=$currentPost['description']?></p>
        <div class="img-container">
            <img src="img/<?=$currentPost['img']?>" alt="<?=$currentPost['title']?>">
        </div>
        <p class="post-content">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum minima dolore quaerat nulla ipsa
            dignissimos possimus numquam, ullam magnam architecto illum tempore nobis natus id at officia accusantium,
            quae esse.
            Totam iusto placeat amet. Alias nostrum voluptates culpa distinctio, porro aliquam repudiandae repellat enim
            sunt eos omnis vel itaque laudantium. Accusamus nihil ex facilis dolor tenetur aliquam expedita ipsam dicta.
            Sunt, illum animi. Saepe nemo quam dignissimos aliquid tempore, exercitationem eligendi iusto enim,
            cupiditate nostrum illo autem soluta asperiores laboriosam atque? Accusamus exercitationem sit ut quaerat
            odio pariatur unde possimus.
            Necessitatibus porro tenetur, asperiores eos enim nam quisquam quas obcaecati. Aspernatur deserunt tempore
            officia rerum autem nemo.
            Eius qui quo modi, distinctio sapiente corrupti animi necessitatibus omnis ad sequi facere minus
            consequatur, earum, ea architecto ducimus accusantium dicta rerum! Impedit ipsum nam unde cumque doloremque
            veniam quos.</p>
        <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus repellat, perferendis
            ab impedit enim, et similique iste at minima voluptatibus qui a. Sed quisquam consequatur doloremque cum
            natus tenetur maiores.
            Neque voluptatibus ad cupiditate commodi soluta voluptatem expedita quod, incidunt vel quo repudiandae eum
            qui dolores natus tempora odio aliquam, corporis modi eligendi labore dignissimos quas reprehenderit fugiat.
            Asperiores, sapiente.
            Earum ratione sint accusantium iure reiciendis qui expedita quos voluptatibus ducimus, vel debitis
            distinctio. Doloribus explicabo quos beatae, sapiente dolores sint ab fugit nulla accusantium maiores
            molestias dolorem modi et.</p>
        <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate tempore nihil vitae!
            Cumque quasi repellendus fugit architecto inventore. Perferendis molestiae impedit odit error et, assumenda
            possimus ullam soluta dolorem facilis.
            Laudantium id nostrum voluptate. Quae veniam est eos deleniti totam aliquam, eveniet recusandae iusto
            laboriosam unde natus qui minus temporibus facilis quas, magnam dolor, nulla odio? Fugiat aspernatur ullam
            ab.
            Perspiciatis provident nostrum, deserunt fugit, tempora laborum laudantium similique accusamus, ipsa
            cupiditate unde maxime fuga. Odit fugiat iusto debitis tempora aliquam excepturi ducimus itaque similique
            dolores? Pariatur ratione deleniti dolorum?
            Totam id suscipit vero est quam quo magni soluta cum similique ipsam, corporis iure porro, optio nesciunt
            voluptate nemo aperiam excepturi voluptas. Qui cupiditate repellat deserunt, veritatis asperiores minus
            aperiam.</p>
    </div>
    <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul id="tags-list">
            <?php foreach ($currentPost['tags'] as $tag): ?>
            <li><a href="#"><?=$tag?></a></li>
            <?php endforeach;?>
        </ul>
        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
            <?php foreach ($categories as $category): ?>
            <li><a href="#"><?=$category?></a></li>
            <?php endforeach;?>
        </ul>
    </aside>
</main>

<?php

include_once "templates/footer.php";

?>