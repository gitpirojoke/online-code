<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('news/create'); ?>
<label for="title">Title</label>
<input type="text" name="title" /><br />

    <div class="form-group">
        <label for="text">Текст</label>
        <textarea class="form-control" id="text" name="text" rows="3"></textarea>
    </div>

<input type="submit" name="submit" value="Create news item" />

</form>
