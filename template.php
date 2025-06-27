<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>template</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.rtl.min.css" >
</head>
<body>
    <img  class="cover"src="blogs.jpg" alt="cover page">
 <nav class="navbar navbar-expand-lg fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand d-flex align-items-center" href="#">
      <img src="logo.jpg" alt="Logo" width="40" height="40" class="me-2" style="object-fit: contain;">
      <span class="fs-4 fw-bold">BlogHome</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button><br><a href="manage.php" class="btn btn-warning">Manage Profile</a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">ContactUs</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="index.php">LOGOUT</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
        <button class="btn btn-outline-success bg-body-primary" type="submit"  >Search</button>
      </form>
    </div>
  </div>
</nav>
 <a href="manage.php" class="btn btn-warning">Manage Profile</a>
<div class="my-container">
  <div class="my-row1">
    <div class="box">
      <img src="business.jpg" alt="Cover 1" class="box-img" href="small.html">
     <a href="small.html" class="box-heading">Small Businesses</a> 
    </div>
    <div class="box">
       <img src="baker.jpg" alt="Cover 1" class="box-img">
     <a href="" class="box-heading">Lawyer turned Baker</a> 
    </div>
    <div class="box">
       <img src="pros.jpeg" alt="Cover 1" class="box-img">
     <a href="" class="box-heading">21st century many 
                                              Profession
     </a> 
    </div>
  </div>
  <br>
  <div class="my-row2">
    <div class="box">
       <img src="poonam.jpg" alt="Cover 1" class="box-img">
     <a href="actor.html" class="box-heading">Actor & Pharmachist
     </a> 
    </div>
    <div class="box">
      <img src="home.jpg" alt="Cover 1" class="box-img">
     <a href="" class="box-heading">Work from Home</a> 
    </div>
    <div class="box">
       <img src="Bookworm.jpg" alt="Cover 1" class="box-img">
     <a href="" class="box-heading">Bookworms</a> 
    </div>
  </div>
</div>

<!--div class="mainimg">
</div-->

</body>
</html>
