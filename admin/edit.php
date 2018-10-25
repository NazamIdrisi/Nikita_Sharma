<html>
    <body>
<?php 
    include("index.php");

    include("../connect.php");

 $edit_id = @$_GET['edit'];

    $query = "select * from posts where post_id='$edit_id'";

    $run = mysql_query($query);
    
while($row=mysql_fetch_array($run)){
            
                
                $edit_id1 = $row['post_id'];
                $title = $row['post_title'];
                
                $author = $row['post_author'];
                
                $content = $row['post_content'];
            
                


?>

<form method="post" action="edit.php?edit_form=<?php echo $edit_id1;?>" enctype="multipart/form-data">
        
            <table align="center" border="10px" width="600px">
                <tr>
                    <td align="center" colspan="5" bgcolor="yellow">
                        <h1>editing post</h1></td>
                </tr>
                
                <tr>
                    <td align="right">Post title</td>
                    <td><input type="text" name="title" size="40" value="<?php echo $title; ?>" ></td>
                </tr>
                
                <tr>
                    <td align="right">Post Author</td>
                    <td><input type="text" name="author" value="<?php echo $author; ?>"></td>
                </tr>
                

                
                <tr>
                    <td align="right">Post contenet</td>
                    <td><textarea name="content" cols="40" rows="20"><?php echo $content; ?></textarea></td>
                </tr>
                
                <tr>
                    
                    <td align="center" colspan="5"><input type="submit" name="update" value="update now"></td>
                </tr>
    
                <?php } ?>
    </table>
            
        </form>
    </body>
</html>

<?php 
    if(isset($_POST['update'])){
        
        $update_id = $_GET['edit_form'];
        
        $post_title = $_POST['title'];
        
        $post_author = $_POST['author'];
        $post_content = $_POST['content'];
        
        
       // move_uploaded_file($image_tmp,"../images/$post_image");
        
            $update_query = "update posts set post_title='$post_title',post_author='$post_author',post_content='$post_content'where post_id='$update_id'";
        
        if(mysql_query($update_query)){
            
            echo "<script>window.open('view.php?updated=post has been updated','_self)</script>'";
            
            
        }
    }
?>