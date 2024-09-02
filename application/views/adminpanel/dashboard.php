<?php $this->load->view("adminpanel/header"); ?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>

    </div>

    <!-- <div class="row">
         <div class="col-md-3 alert alert-primary" role="alert">
          <a href="<?= base_url().'admin/blog/'?>">View Blog</a>
        </div>
        <div class="col-md-1"></div>
         <div class="col-md-3 alert alert-warning" role="alert">
          <a href="<?= base_url().'admin/blog/addblog'?>">Add Blog</a>
        </div>
      </div> -->
      <div div class="card-deck mx-auto"style="width: 50%; " >
           <div class="card" style="width: 18rem; ">
        <img class="card-img-top" src="../assets/upload/blogimg/view.avif" alt="Card image cap" >
        <div class="card-body">
            <h5 class="card-title">View Blogs</h5>
            <p class="card-text">You Can View Blogs here!</p>
                <a href="<?= base_url().'admin/blog/'?>" class="badge badge-success" style="padding: 10px 20px;">View Blog</a>
        </div>
    </div>
    <div class="card" style="width: 18rem; ">
        <img class="card-img-top" src="../assets/upload/blogimg/upload.jpg" alt="Card image cap" >
        <div class="card-body">
            <h5 class="card-title">Add Blogs</h5>
            <p class="card-text">You Can Add Blogs here!</p>
            <a href="<?= base_url().'admin/blog/addblog'?>" class="badge badge-success" style="padding: 10px 20px;">Add Blog</a>
        </div>
    </div>
      </div>
 
    </main>
</main>
</div>
</div>

<?php $this->load->view('adminpanel/footer.php'); ?>