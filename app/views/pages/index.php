<?php require_once '../app/views/inc/header.php' ?>
    <h1><?php echo $data['title'] ?></h1>
        <ul>
            <?php foreach ($data['posts'] as $post ): ?>
                <li><?php echo $post->title ?><br>
                    <?php echo $post->body ?>
                </li>
            <?php endforeach;?>
        </ul>
<?php require_once '../app/views/inc/footer.php' ?>