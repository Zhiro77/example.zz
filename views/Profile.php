<!doctype html>
<html lang="en">
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>MVC!</title>
  </head>
  <body>
    <div class="form-group col-md-4">
        <label for="inputState">Sort By</label>
        <select id="inputState" class="form-control">
            <option selected>Name</option>
            <option >Email</option>
            <option >Status</option>
        </select>
    </div>

    <table class="table table-bordered" id="table_id">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Ab</td>
                <td>F</td>
                <td>I</td>      
            </tr>
            <tr>
                <td>C</td>
                <td>E</td>
                <td>K</td>
            </tr>
            <tr>
                <td >B</td>
                <td>G</td>
                <td>X</td>
            </tr>
        </tbody>
    </table>

    <nav aria-label="Page navigation example">
    <ul class="pagination">
        <li class="page-item">
            <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
            </a>
        </li>

        <?php
            $j = 3;
            for ($i=0; $i < $j; $i++) { 
                echo '<li class="page-item" data-offset=' . ($i * 3) . ' ><a class="page-link" href="#">'.($i + 1).'</a></li>';
            }

        ?>
 
        <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
            </a>
        </li>
    </ul>
    </nav>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="jquery-3.5.1.min.js"></script>
    <script src="/public/sort_records.js"></script>
  </body>
</html>