
<html>
    <head>
        <title>Calculator</title>
    </head>
    <body>
        <form action="calculator.php" method="post">
        <table border="1" align="center">
            <tr>
                <td>First Number</td>
                <td>
                    <input type="text" name="first_number" value="<?php 
                                                                   if(isset($_POST['first_number']))                                                         
                                                                    echo $_POST['first_number'];?>"> 
                </td>
            </tr>
            
            <tr>
                <td>Second Number</td>
                <td>
                    <input type="text" name="second_number" value="<?php if(isset($_POST['second_number']))                                                         
                                                                    echo $_POST['second_number'];?>"> 
                </td>
            </tr>
            <tr>
                
                <td colspan="2" align="center">
                    <input type="submit" name="btn" value="+"> 
                    <input type="submit" name="btn" value="-"> 
                    <input type="submit" name="btn" value="*"> 
                    <input type="submit" name="btn" value="/"> 
                    <input type="submit" name="btn" value="%"> 
                </td>
            </tr>
            <?php
                echo '<pre>';
                print_r($_POST);
                $result='';
                if(isset($_POST['btn']))
                {
                    if($_POST['btn']=='+')
                    {
                        $result=$_POST['first_number']+$_POST['second_number'];
                    }
                    if($_POST['btn']=='-')
                    {
                        $result=$_POST['first_number']-$_POST['second_number'];
                    }
                    if($_POST['btn']=='*')
                    {
                        $result=$_POST['first_number']*$_POST['second_number'];
                    }
                    if($_POST['btn']=='/')
                    {
                        $result=$_POST['first_number']/$_POST['second_number'];
                    }
                    if($_POST['btn']=='%')
                    {
                        $result=$_POST['first_number']%$_POST['second_number'];
                    }
                }
            ?>
            <tr>
                <td>Full Name</td>
                <td>
                    <input type="text" value="<?php echo $result;?>" > 
                </td>
            </tr>
        </table>
        </form>
    </body>
</html>