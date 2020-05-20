<?php require 'partials/header.view.php'; ?>
<?php require 'partials/navbar.view.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="my-4">Add new task</h1>
            <form action="/new" method="post">
              <div class="form-group">
                 <label for="nameField">Task name: </label>
                 <input type="text" name="name" class="form-control" id="nameField" placeholder="name">
               </div>
               <div class="form-group">
                 <label for="descriptionField">Description: </label>
                 <textarea name="description" class="form-control" id="descriptionField" rows="3"></textarea>
               </div>
               <button type="submit" class="btn btn-primary">Add task</button>
            </form>
          </div>
      </div>
  </div>


  <?php require 'partials/footer.view.php'; ?>
