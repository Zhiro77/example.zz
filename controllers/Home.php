<?php
namespace controllers;

use model\User;
use system\Controller;

class Home extends Controller
{

    public function index() {
        $limit = 3;
        $page =  (isset($_GET['page'])) ? (intval($_GET['page'])) : 1;
        if ($page < 1) {
            $page = 1;
        }
        $offset = (($page - 1) * $limit);
        $this->view->li = $this->page_li($page, $offset);
        $users = new User;
        $this->view->users = $users->model('
            SELECT customers.id, customers.name, customers.email,
            tasks.id as tasks_id, tasks.name as tasks_name, tasks.description as tasks_desciption
            FROM customers
            LEFT JOIN tasks
            ON customers.task_id = tasks.id
            LIMIT ' . $limit .  " OFFSET " . $offset
        );
        $this->view->render('home');
    }

    public function create() {

        /* $users = new User; */
        /* $this->view->task = $users->model(' */
        /*     SELECT customers.id, customers.name, customers.email, */
        /*     tasks.id as task_id, tasks.name as task_name, tasks.description as task_desciption */ 
        /*     FROM customers */ 
        /*     LEFT JOIN tasks */ 
        /*     ON customers.task_id = tasks.id */
        /*     WHERE customers.id = '."$id".' */
        /* '); */

        $this->view->render('create_form');
    }


    /**
     * undocumented function
     *
     * @return void
     */
    public function store($id)
    {
        /* $name = $_POST['name']; */
        /* $email = $_POST['email']; */
        /* $task_name = $_POST['task_name']; */
        /* $task_desciption = $_POST['task_desciption']; */

        /* $users = new User; */
        /* $users->model('') */
    }


    private function page_li($page, $offset) {

        $users = new User;
        $result = $users->model("SELECT count(*) as total from customers");
        $result = 10;//$result[0]->{'total'};
        $lis = "";
        $row = $result - $offset;

        $num_of_li = (ceil($row / 3) > 3) ? 3 : ceil($row / 3) ;

        for ($i = 0; $i < $num_of_li; $i++) {
            $lis .= ' <li class="page-item page" data-offset=' . ($page + $i) . ' ><a class="page-link" href="">'.($page + $i).'</a></li> ';

        }

        return $lis;
    }
}




