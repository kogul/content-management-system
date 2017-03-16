<div class="col-md-12 contwrap">
    <div class="col-md-offset-1 col-md-10 contarea fullart">
        <img src="<?php echo $target.$post['image']; ?>" class="fullimage">
        <h1><?php echo $post['title']; ?></h1>
        <h3><?php echo $post['author'];?></h3>
        <h5><?php echo $post['data']; ?></h5>
        <hr>
        <p><?php echo nl2br($post['content']); ?></p>
        <?php if(isset($next)) { ?>
        <div class="col-md-6">
            <a class="btn btn-primary" href="/user/readPost/?id=<?php echo $next; ?>" style="float: left">Previous Post</a>
        </div>
        <?php } ?>
        <?php if(isset($prev)) { ?>
        <div class="col-md-offset-6 col-md-6">
            <a class="btn btn-primary" href="/user/readPost/?id=<?php echo $prev; ?>" style="float: right">Next Post</a>
        </div>
 <?php } ?>
    </div>
</div>