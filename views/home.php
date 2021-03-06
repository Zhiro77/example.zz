<div class="mt-5">
    <div class="form-group col-md-4">
        <label for="inputState">Sort By</label>
        <select id="inputState" class="form-control">
            <option selected>Name</option>
            <option >Email</option>
            <option >Task Description</option>
        </select>
    </div>
    <h1>Todo List<h1>
    <div class="mt-4 mb-4 text-right">
        <a href="/home/create" class="btn btn-lg btn-success">Add Task</a>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="responsive">
                <table class="table table-bordered table-responsive w-100 d-block d-md-table" id="table-id">
                <thead>
                    <tr class="text-center">
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Task description</th>
                    </tr>
                </thead>
                <tbody>
                <?php if (is_iterable($this->users)) {?>
                <?php foreach ($this->users as $key => $user) {?>
                    <tr class="text-center">
                        <th scope="row"><?=$key+1?></th>
                        <td><?=$user->name?></td>
                        <td><?=$user->email?></td>
                        <td><?= substr($user->tasks_desciption, 0, 30)."..."?></td>
                    </tr>
                <?php }?>
                <?php }?>
                </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<nav aria-label="Page navigation example">
    <ul class="pagination">
        <li class="page-item prev-page">
            <a class="page-link" href="" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
            </a>
        </li>

    <?php
        // $j = 3;
        // for ($i = 0; $i < $j; $i++) {
            echo $this->li;
    ?>

        <li class="page-item next-page" >
            <a class="page-link next-link" href="" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
            </a>
        </li>
    </ul>

</nav>

