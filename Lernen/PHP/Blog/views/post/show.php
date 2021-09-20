<?php include __DIR__ . '/../layout/header.php'; ?>

    <div class="container">
        <h1>Startseite des Blogs</h1>
        
        <div class="post">
            <div class="post-title">
                <p><?php echo e($post["title"]);?></p>
            </div>
            <div class="post-content">
                <p><?php echo nl2br(e($post["content"]));?></p>
            </div>
        </div>

    </div>

    <div class="comments">
        <form action="post?id=<?php echo $post['id']; ?>" method="POST">
            <textarea name="content" class="form-content"></textarea>
            <input type="submit" value="Kommentar Hinzufügen!" class="comment-btn">
    
        </form>

        <ul>
            <?php foreach($comments AS $comment):?>
                <li>
                    <?php echo e($comment->content)?>
                </li>
            <?php endforeach;?>
        </ul>
    </div>

<?php include __DIR__ . '/../layout/footer.php'; ?>