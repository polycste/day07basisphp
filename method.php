
<html>
    <head>
        <title>Method</title>
    </head>
    <body>
        <form action="method.php" method="post">
        <table border="1" align="center">
            <tr>
                <td>First Name</td>
                <td>
                    <input type="text" name="first_name" value="<?php 
                                                                   if(isset($_POST['first_name']))                                                         
                                                                    echo $_POST['first_name'];?>"> 
                </td>
            </tr>
            
            <tr>
                <td>Last Name</td>
                <td>
                    <input type="text" name="last_name" value="<?php if(isset($_POST['last_name']))                                                         
                                                                    echo $_POST['last_name'];?>"> 
                </td>
            </tr>
            <tr>
                
                <td colspan="2" align="center">
                    <input type="submit" name="btn" value="Click"> 
                </td>
            </tr>
            <?php
                
                
                $full_name='';
                if(isset($_POST['btn']))
                {
                    $full_name=$_POST['first_name'].' '.$_POST['last_name'];
                }
            ?>
            <tr>
                <td>Full Name</td>
                <td>
                    <input type="text" value="<?php echo $full_name;?>" > 
                </td>
            </tr>
        </table>
        </form>
    </body>
</html>