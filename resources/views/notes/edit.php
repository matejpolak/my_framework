<form method="post" action="">
    <div class="field">
        <label>Title</label>
        <input type="text" name="title" value="<?= htmlspecialchars($note->title);?>">
    </div>

    <div class="field">
        <label>Text</label>
        <textarea name="text" value="<?= htmlspecialchars($note->text);?>"></textarea>
    </div>

    <div class="field">
        <label>Short summary</label>
        <textarea name="short_summary" value="<?= htmlspecialchars($note->short_summary);?>"></textarea>
    </div>

    <button class="btn btn-primary" type="submit">Submit</button>
</form>