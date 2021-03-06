<div class="row mt-5">
  <div class="col-md-12">
    <h3>Create Task</h3>
    <form method="POST" action="/home/store/<?=$item->id?>" class="must-validate">
      <div class="margin-top-md">
        <label for="name"> Name </label>
        <input class="form-control" id="name" type="text" name="name" value="" >
      </div>
      <div class="mt-2">
        <label for="slug"> Email </label>
        <input class="form-control" id="slug" type="text" name="slug" value="" >
      </div>
      <div class="mt-2">
        <label for="slug"> Task Name </label>
        <input class="form-control" id="slug" type="text" name="slug" value="" >
      </div>
      <div class="mt-2">
        <label for="description">Task Description </label>
        <textarea class="form-control summernote inputs-validate" id="description" rows="4" cols="40" type="text" name="description"></textarea>
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
  </div>
</div>
