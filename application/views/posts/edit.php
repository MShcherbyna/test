<h2><?= $title; ?></h2>
<?php echo validation_errors()?>
<?php echo form_open("posts/update");?>
<input type="hidden" name="id" value="<?php echo  $post['id'];?>">
<div class="form-group">
    <label><b>Title</b></label>
    <input type="text" class="form-control" name="title" placeholder="Add Title" value="<?php echo $post["title"] ?>">
</div>
<div class="form-group">
    <label><b>Body</b></label>
    <textarea name="body"  id="editor1" class="form-control"  placeholder="Add Body"><?php echo $post["body"] ?></textarea>
</div>
<button type="submit" class="btn btn-secondary">Submit</button>
</form>