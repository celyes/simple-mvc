<?php require 'partials/header.view.php'; ?>
<?php require 'partials/navbar.view.php'; ?>


<div class="container">
  <div class="row">
    <div class="col-12">
      <h1 class="my-4">Home page</h1>
      <code>
          <?php foreach($tasks as $task): ?>
          <p>Name: <?= $task->name; ?></p>
          <p>Description: <?= $task->description; ?></p>
          <hr>
          <?php endforeach; ?>
      </code>
    </div>
  </div>
</div>
<?php require 'partials/footer.view.php'; ?>
