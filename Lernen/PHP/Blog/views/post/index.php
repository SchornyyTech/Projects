<?php include __DIR__ . '/../layout/header.php';?>      
      
    <div class="container">
        <h1>Startseite des Blogs</h1>
        <p>Das hier ist die startseite des Blogs.</p>


        <ul>
            <?php foreach($posts AS $post): ?>
            <li>
                <a href="post?id=<?php echo e($post->id);?>">
                    <?php echo e($post->title); ?>
                </a>
            </li>

            <?php endforeach; ?>
        </ul>
    </div>

<?php include __DIR__ . '/../layout/footer.php'; ?>