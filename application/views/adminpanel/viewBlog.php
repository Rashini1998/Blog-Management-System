<?php $this->load->view('adminpanel/header');?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <h2>View Blog</h2>
    <div class="table-responsive">
        <table class="table table-bordered table-sm">
            <thead>
                <tr>
                    <th>Sr No</th>
                    <th>Title</th>
                    <th>Desc</th>
                    <th>Image</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                if($result){
                    $counter = 1;
                    foreach($result as $key => $value){
                        echo "
                        
                    <tr>
                    <td>
                        ".$counter."
                    </td>
                    <td>
                        ".$value['blog_title']."
                    </td>
                    <td>
                        ".$value['blog_desc']."
                    </td>
                    <td>
                         <img src='".base_url().$value['blog_img']."' class='img-fluid' width='100'/>
                    </td>
                    <td>
                        <a class=\"btn btn-success\" href='".base_url().'admin/Blog/editBlog/1'."'>Edit</a>
                </td>
                <td>
                    <a class=\"btn delete btn-danger\" href='#.' data-id = '".$value['blogId']."'>Delete</a>
                </td>
                </tr>
                ";
                $counter++;


                }

                }else{
                echo "<tr>
                    <td colspan='6'>No Records found</td>
                <tr>";
                    }

                    ?>

            </tbody>

        </table>

    </div>

</main>
</div>
</div>

<?php $this->load->view('adminpanel/footer');?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<script>
        $(".delete").click(function(){
            var delete_id = $(this).attr('data-id');
            var bool = confirm("Are You Sure You Want to Delete?");
            if(bool){
                alert("Move to delete functionality using AJAX");
                //AJAX Method to delete.....
                $.ajax({
                    url:'<?= base_url().'admin/blog/deleteBlog/'?>',
                    type:'post',
                    data:{'delete_id': delete_id},
                    success:function(response){
                        console.log(response);
                        if(response=='Deleted'){
                            //reload the page
                            location.reload();
                        }else if(response=='Not Deleted'){
                            alert ("Something went wrong.");

                        }

                    }
                })

            }else{
                alert("Your blog is safe.");
            }
            
        })
</script>
