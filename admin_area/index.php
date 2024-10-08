<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
<<<<<<< HEAD
    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- css file -->
    <link rel="stylesheet" href="../style.css">
    <style>
     .admin_image{
      width: 100px;
      object-fit: contain; 
     }
    .footer{
        position:absolute;
        bottom:0;
    }
    </style>
</head>
<body>
    <!-- navbar -->
    <div class="container-fluid p-0">
        <!-- first child-Navigation bar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid">
                <img src="../images/Cartlogo.jpg" alt="" class="logo">
                <nav class="navbar navbar-expand-lg ">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="" class="nav-link">Welcome guest</a>
                        </li>
                    </ul>

                </nav>
            </div>
        </nav>

        <!-- second child-Navigation bar -->
         <div class="bg-light">
            <h3 class="text-center p-2">Manage details</h3>
         </div>

         <!-- third child-->
        <div class="row">
            <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
              <div class="p-3">
                 <a href="#"><img src="../images/tshirt1.jpg" alt="" class="admin_image"></a>
                 <p class="text-light text-center">Admin Name</p>
              </div>
                

               <!-- button*10>a.nav-link.text-light.bg-info.my-1 -->
                <div class="button text-center">
                    <button class="my-3"><a href="insert_product.php" class="nav-link text-light bg-info my-1 p-2">Insert Products</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1 p-2">View Products</a></button>
                    <button><a href="index.php?insert_category" class="nav-link text-light bg-info my-1 p-2">Insert Categories</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1 p-2">View Categories</a></button>
                    <button><a href="index.php?insert_brand" class="nav-link text-light bg-info my-1 p-2">Insert Brands</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1 p-2">View Brands</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1 p-2">All Orders</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1 p-2">All Payments</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1 p-2">List Users</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1 p-2">Logout</a></button>
                </div>
            </div>
        </div>

        <!-- fourth child -->
         <div class="container my-3">
            <?php 
            if(isset($_GET['insert_category'])){
                include('insert_categories.php');
            }

            if(isset($_GET['insert_brand'])){
                include('insert_brands.php');
            }

            ?>
         </div>

        <!--last child-footer -->
        <div class="bg-info p-3 text-center footer">
           <p>All rights reserved @-Designed by Shash-2024</p>
        </div>
    </div>    
              
  

<!-- bootstrap js link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
=======
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <!-- NAVBAR -->
    <div class="container-fluid p-0 ">
        <!-- FIRST CHILD -->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid">
                <img src="../images/logo.png" alt="" class="logo">
                <nav class="navbar navbar-expand-lg">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="" class="nav-link">Welcome Guest</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
        <!-- SECOND CHILD -->
        <div class="bg-light">
            <h3 class="text-center p-2">Manage Details</h3>
        </div>

        <!-- THIRD CHILD -->
        <div class="row">
            <div class="col-md-12 bg-secondary p1 d-flex align-items-center">
                <div class="p-3">
                    <a href="#">
                    <img src="../images/pineapplejuice.jpg" class="admin_image" alt="">
                    </a>
                    <p class="text-light text-center">Admin Name</p>
                </div>

                <div class="button text-center">
                    <button>
                        <a href="" class="nav-link text-light bg-info my-1">Insert Products</a>
                    </button>
                    <button>
                        <a href="" class="nav-link text-light bg-info my-1">View Products</a>
                    </button>
                    <button>
                        <a href="" class="nav-link text-light bg-info my-1">Insert Categories</a>
                    </button>
                    <button>
                        <a href="" class="nav-link text-light bg-info my-1">View Categories</a>
                    </button>
                    <button>
                        <a href="" class="nav-link text-light bg-info my-1">Insert Brands</a>
                    </button>
                    <button>
                        <a href="" class="nav-link text-light bg-info my-1">View Brands</a>
                    </button>
                    <button>
                        <a href="" class="nav-link text-light bg-info my-1">All Orders</a>
                    </button>
                    <button>
                        <a href="" class="nav-link text-light bg-info my-1">All Payments</a>
                    </button>
                    <button>
                        <a href="" class="nav-link text-light bg-info my-1">List users</a>
                    </button>
                    <button>
                        <a href="" class="nav-link text-light bg-info my-1">Logout</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- LAST CHILD -->
    <div class="bg-info p-3 text-center footer">
      <p>All rights reserved  designed by Gaurav</p>
    </div>
</body>
    <!-- BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
>>>>>>> 4ae814bb0bb42cbd6aa2c7b296fff4bb35735236
</html>