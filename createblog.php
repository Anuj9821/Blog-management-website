<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create New Post</title>
  <link rel="stylesheet" href="style.css"> </head>
<body>
  <header>
    <h1>Create New Post</h1>
  </header>
  <main>
    <?php if (isset($error_message)): ?>
      <div class="error"><?php echo $error_message; ?></div>
    <?php endif; ?>

    <form action="" method="post">
      <label for="title">Title:</label>
      <input type="text" id="title" name="title" required>

      <label for="content">Content:</label>
      <textarea id="content" name="content" rows="10" required></textarea>

      <button type="submit">Create Post</button>
    </form>
  </main>
</body>
</html>
