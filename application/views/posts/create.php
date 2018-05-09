<h2><?= $title; ?></h2>
<?php echo validation_errors()?>

<?php echo form_open("posts/create");?>
    <div class="form-group">
        <label><b>Title</b></label>
        <input type="text" class="form-control" name="title" placeholder="Add Title">
    </div>
    <div class="form-group">
        <label><b>Body</b></label>

        <textarea name="body" id="editor1" class="form-control"  placeholder="Add Body"></textarea>
    </div>

<div class="g-recaptcha" data-sitekey="6LcJTVgUAAAAAAkyTIz0j38094rQU7hWZx51jfHq"></div>
    <button type="submit" class="btn btn-secondary">Submit</button>

</form>
