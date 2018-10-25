
<html>
    <head>
        <title>Admin</title>
        
        <link href="admin_style.css" rel="stylesheet" type="text/css"/>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </head>
    
    <body>
    <header>
            <a href="index.php"><h1>Welcome to amin panel</h1></a>
        </header>
        
        <aside><h2>manage Content</h2>
        
        <h2><a href="../index.php">Admin Logout</a></h2>
        
        <h2><a href="index.php?view=view">View Posts</a></h2>
        
        <h2><a href="index.php?insert=insert">Insert New Posts</a></h2>
            
            <h2><a href="index.php?vieww=vieww">Contact</a></h2>
        </aside>
        
        <center>
            <h1>This is your admin panal</h1>
       
        
        <h1><?php echo @$_GET['deleted']; ?></h1></center>
        
        <!-----------------------------------------insert post-------------------------------------------->
        
        <?php
        
            if(isset($_GET['insert'])){
                include("insert_post.php");
            }
        ?>
        
        <!------------------------------------------------------------------------------------->
        
        
    <div class="container" style="margin-left:200px;width:400px" >    
    <?php
            if(isset($_GET['view'])){
        ?>    
        
        <table width="400" align="center" border="3" class="table table-hover" >
            <tr>
                <td align="center" colspan="9"  bgcolor="orange"><h1>View all events</h1></td>
            </tr>
            
            <tr>
                <th>Serial no.</th>
                <th>Event Date</th>
                
                <th>Event Title</th>
                
                <th>Event Discription</th>
                <th>Edit</th>
                <th>Delete</th>
                
                </tr>
            <?php
        
            include("../connect.php");
        
            $i=1;
        if(isset($_GET['view'])){
            
            $query = "select * from posts order by 1 DESC";
            $run = mysql_query($query);
            while($row=mysql_fetch_array($run)){
                
                
                $id = $row['post_id'];
                $title = $row['post_title'];
                
                $author = $row['post_author'];
                
                $content = substr($row['post_content'],0,50);
            
                
        ?>
            
            <tr align="center">
                <td><?php echo $i++;?></td>
                <td><?php echo $title;?></td>
                
                <td><?php echo $author;?></td>
                
                <td><?php echo $content;?></td>
                <td><a href="edit.php?edit=<?php echo $id; ?>">Edit</a></td>
                <td><a href="delete.php?del=<?php echo $id;?>">Delete</a></td>
                
            </tr>
    <?php } } }?>
        </table></div>
    
        
        
    </body>
</html>