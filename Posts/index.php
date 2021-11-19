<?php

    include ('../partials/header.php');
    include ('../partials/sidebar.php');
/*    include ('../database.php');

    $sql = "SELECT * FROM Articles";
    $results = $pdo->query($sql);
    $rows = $results->fetchAll();
*/
?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">


        <h1 class="h2">Articles</h1>


        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
        </div>
      </div>

      
      <h2>All Articles</h2>

      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Title</th>
              <th scope="col">Content</th>
              <th scope="col">Published Date</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
               <?php foreach($rows as $row) {?>
            <tr>
              <td><?= $row['id'] ?></td>
              <td><?= $row['title'] ?></td>
              <td><?= $row['content'] ?></td>
              <td><?= $row['published_date'] ?></td>
              <td>
                  <a href="#" class="btn btn-primary">Edit</a>
                  <a href="#" class="btn btn-danger">Delete</a>
              </td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </main>
  

    <?php
        include ('../partials/footer.php');
    ?>

