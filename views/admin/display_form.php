<div class="row mt-5">
    <div class="col-md-12">
        <h3>Update Task</h3>
            <?php if (is_iterable($this->task)) {?>
                <?php foreach ($this->task as $item) {?>
                    <form method="POST" action="/home/store/<?=$item->id?>" class="must-validate">
                        <div class="margin-top-md">
                            <label for="name"> Name </label>
                            <input class="form-control" id="name" type="text" name="name" value="<?=$item->name?>" readonly>
                        </div>
                        <div class="mt-2">
                            <label for="slug"> Email </label>
                            <input class="form-control" id="slug" type="text" name="slug" value="<?=$item->email?>" readonly>
                        </div>
                        <div class="mt-2">
                            <label for="slug"> Task Name </label>
                            <input class="form-control" id="slug" type="text" name="slug" value="<?=$item->task_name?>" readonly>
                        </div>
                        <div class="mt-2">
                            <label for="description">Task Description </label>
                            <textarea class="form-control summernote inputs-validate" id="description" rows="4" cols="40" type="text" name="description"><?=$item->task_desciption?> </textarea>
                        <div>
                            <span id="description-error"></span>
                        </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6 text-left">
                                <a href="/" class="btn btn-info btn-lg">Cancel</a>
                            </div>
                            <div class="col-md-6 text-right">
                                <button type="submit" class="btn btn-success btn-lg">Save</button>
                            </div>
                        </div>
                    </form>
                <?php }?>
           <?php }?>
    </div>
</div>
