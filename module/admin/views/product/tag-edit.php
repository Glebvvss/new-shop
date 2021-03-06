<!-- tags block -->
<div id="tag-update-ajax" class="col-md-6" data-id="id_product-<?= $id_product ?>" style="margin-bottom: 80px;">
    <div style="float: left;">
        <div class="form-group">
            <label for="">Add Tag</label>
            <input type="text" class="form-control custom-field" id="tag-value" style="width: 400px; margin-right: 20px;">
        </div>
    </div>

    <div class="btn-tag">
        <div href="" class="btn custom-btn" id="add-tag">Add Tag</div>
    </div>

    <br>
    <p><b>Tag List</b></p>
    <hr>
    <div class="admin-row-list-field">
        <? foreach( $tag_list as $tag ) : ?>
            <div class="admin-row-list">
                <?= $tag['tags'][0]['tag'] ?>
                <span class="delete-tag" id="del_tag-<?= $tag['tags'][0]['id'] ?>">
                                <i class="fas fa-times"></i>
                            </span>
            </div>
        <? endforeach; ?>
    </div>
    <hr>
</div>
<!-- /tags block -->