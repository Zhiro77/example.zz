
<li>
<?php


    use model\User;

    //use system\Controller;




    

        $users = new User;
        $data = $users->model('SELECT COUNT(*) as total FROM customers');
    



?>
</li>