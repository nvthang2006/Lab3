<form action="<?= BASE_URL . '?act=category-update&id=' . $_GET['id'] ?>" method="POST">
    <div>
        <label for="name">name</label>
        <input type="text" name="name" value="<?= $detail['name'] ?>" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary btn-sm">Sửa</button>
</form>
