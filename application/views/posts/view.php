<h2><?php echo $post['title']; ?></h2>
<small class="post-date"> Posted on:<?php echo $post['created_at']; ?></small><br>
<div class="post-body">
    <?php echo $post['body']; ?>
</div>

<hr>


 <a class="btn btn-primary  " href="/posts/edit/<?php echo $post['slug']; ?>">Edit</a>
<?php echo form_open('/posts/delete/' . $post['id']); ?>

<input type="submit"
       value="delete"
       class="btn btn-danger">
</form>
<p><a class="btn btn-secondary" href="<?php echo site_url('/posts/'); ?>">Back to the posts</a></p>