<!DOCTYPE html>
<html>
<head>
	<title>Image Upload Using PHP</title>
	<style>
		body {
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
			min-height: 100vh;
		}
	</style>
</head>
<body>
	<?php if (isset($_GET['error'])): ?>
		<p><?php echo $_GET['error']; ?></p>
	<?php endif ?>
  
  <section id="pricing">
    <div class="container">
      <div class="pricing-header col-lg-4 p-3 pb-md-4 mx-auto text-center">

        <form action="upload.php"
              method="post"
              enctype="multipart/form-data">

              <input type="file" 
                      name="my_image">

              <input type="submit" 
                      name="submit"
                      value="Upload">       
        </form>
      </div>
    </div>
  </section>
</body>
</html>