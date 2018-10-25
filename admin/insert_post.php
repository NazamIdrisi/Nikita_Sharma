<html>
    <head>
        <title>Insert New Post</title>
    </head>
    
    <body>
    
        <form method="post" action="insert_post.php" enctype="multipart/form-data">
        
            <table align="center" border="10px" width="600px">
                <tr>
                    <td align="center" colspan="5" bgcolor="yellow">
                        <h1>Insert New Post Here</h1></td>
                </tr>
                
                
                
                <tr>
                    <td align="right">Event Date/Month</td>
                    <td><input type="text" name="title" size="40" placeholder="Enter Date 21/jun" required></td>
                </tr>
                
                <tr>
                    <td align="right">Event Title</td>
                    <td><input type="text" name="author" placeholder="Event title" required></td>
                </tr>
                
                
                <tr>
                    <td align="right">Event Discription</td>
                    <td><textarea name="content" cols="40" rows="20" placeholder="Event Discription" required></textarea></td>
                </tr>
                
                <tr>
                    
                    <td align="center" colspan="5"><input type="submit" name="submit" value="publish now"></td>
                </tr>
            </table>
            
        </form>
    </body>
</html>

<?php
    
    include("connect.php");
    
    if(isset($_POST['submit'])){
       
        $title = $_POST['title'];
        $author = $_POST['author'];
        $content = $_POST['content'];
        
        if($title =='' or $author=='' or $content==""){
            echo "<script>alert('any felid is empty')</script>";
            exit();
        }
   
        $query = "insert into posts (post_title,post_author,post_content) values ('$title','$author','$content')";
    
        if(mysql_query($query)){
            echo "<script>window.open('index.php?published=post has been published','_self')</script>";
        }
    
    }


?>