<?php 
//   echo "<pre>";  print_r($result);
//     die();

?>

<?php $this->load->view('adminpanel/header');?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">


    <h2>Edit Blog</h2>
    <form enctype="multipart/form-data" action="<?= base_url().'admin/Blog/editblog_post'?>" method="post">

    <select class="custom-select" name="publish_unpublished">
        <option value="1" <?= ($result[0]['status'] == '1'?"selected":"");?>>Published</option>
        <option value="0" <?= ($result[0]['status'] == '0'?"selected":"");?>>Unpublished</option>
    </select><br>

<input type="hidden" name="blog_id" value="<?= $blog_id?>">
        <div class="form-group" style="margin-top:10px ;">
            <label for="blog_title">Title</label>
            <input value="<?= $result[0]['blog_title']?>" type="text" class="form-control" id="blog_title" placeholder="Title" name="blog_title">
        </div>
        <div class="form-group">
            <label for="blog_desc">Image Description</label>
            <!-- <input type="text" class="form-control" id="blog_desc" placeholder="Description"> -->
            <textarea class="form-control" rows="3" id="blog_desc" placeholder="Description"
                name="blog_desc"><?= $result[0]['blog_desc']?></textarea>
        </div>
        <div class="form-group">
            <label for="blog_img">Image</label><br>
            <img width="100" src="<?= base_url().$result[0]['blog_img']?>"><br><br>
            <input type="file" id="blog_img" name="blog_img">
        </div>
        <button type="submit" class="btn btn-success">Edit Blog</button>

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
      
    }
    ?>
</script>

<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>


<script>
CKEDITOR.replace('blog_desc');
</script>