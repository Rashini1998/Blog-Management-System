<?php $this->load->view('adminpanel/header');?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">


    <h2>Add Blog</h2>
    <form enctype="multipart/form-data" action="<?= base_url().'admin/Blog/addblog_post'?>" method="post">

        <div class="form-group">
            <label for="blog_title">Title</label>
            <input type="text" class="form-control" id="blog_title" placeholder="Title" name="blog_title">
        </div>
        <div class="form-group">
            <label for="blog_desc">Image Description</label>
            <!-- <input type="text" class="form-control" id="blog_desc" placeholder="Description"> -->
            <textarea class="form-control" rows="3" id="blog_desc" placeholder="Description" name="blog_desc"></textarea>
        </div>
        <div class="form-group">
            <label for="blog_img">Image</label>
            <input type="file" id="blog_img"  name="blog_img">
        </div>
        <button type="submit" class="btn btn-primary">Add Blog</button>

    </form>
</main>
</div>
</div>

<?php $this->load->view('adminpanel/footer');?>


<!-- check sessions -->
 <script type="text/javascript">
    <?php 
    if (isset($_SESSION['inserted'])) {
        if($_SESSION['inserted']=="yes"){
            echo "alert('Data Inserted Successfully')";
        }else{
            echo "alert('Not Inserted ')";
        }
        
        # code...
    }
    ?>
 </script>