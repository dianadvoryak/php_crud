<div class="container">
  <div class="card">
    <div class="card-header">
      <h3>
        <?php if ($user['id']): ?>
          Update user <b><?php echo $user['name']?></b>
        <?php else: ?>
          Create new user
        <?php endif ?>
      </h3>
    </div>
    <div class="card-body">

      <form method="POST" enctype="multipart/form-data" action="">
        <div class="form-group">
          <label for="name">Name</label>
          <input 
            name="name" 
            value="<?php echo $user['name']?>" 
            class="form-control <?php echo $errors['name'] ? 'is-invalid' : '' ?>" 
            type="text"
          >
          <div class="invalid-feedback">
            <?php echo $errors['name'] ?>
          </div>
        </div>
        <div class="form-group">
          <label for="username">Username</label>
          <input 
            name="username" 
            value="<?php echo $user['username']?>" 
            class="form-control <?php echo $errors['username'] ? 'is-invalid' : '' ?>" 
            type="text"
          >
          <div class="invalid-feedback">
            <?php echo $errors['username'] ?>
          </div>
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input 
            name="email" 
            value="<?php echo $user['email']?>" 
            class="form-control <?php echo $errors['email'] ? 'is-invalid' : '' ?>" 
            type="text"
          >
          <div class="invalid-feedback">
            <?php echo $errors['email'] ?>
          </div>
        </div>
        <div class="form-group">
          <label for="phone">Phone</label>
          <input 
            name="phone" 
            value="<?php echo $user['phone']?>" 
            class="form-control <?php echo $errors['phone'] ? 'is-invalid' : '' ?>" 
            type="text"
          >
          <div class="invalid-feedback">
            <?php echo $errors['phone'] ?>
          </div>
        </div>
        <div class="form-group">
          <label for="website">Website</label>
          <input 
            name="website" 
            value="<?php echo $user['website']?>" 
            class="form-control <?php echo $errors['website'] ? 'is-invalid' : '' ?>" 
            type="text"
          >
          <div class="invalid-feedback">
            <?php echo $errors['website'] ?>
          </div>
        </div>
        <div class="form-group">
          <label for="website">Image</label>
          <input 
            name="picture" 
            value="<?php echo $user['website']?>" 
            class="form-control-file" 
            type="file"
          >
        </div>

        <button class="btn btn-success">Submit</button>
      </form>
      
    </div>
  </div>
</div>