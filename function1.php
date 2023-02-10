<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form 1</title>
</head>
<body>
   

    <center>
    <form action="function1.php" method="post" class="form1">
        <table class="table">
            <tr class="tt">
                <td colspan="3"><span align="center">TÍNH TỔNG</span></td>
            </tr>      
            <tr>
                <td><span>Số thứ nhất:</span></td>
                <label >
                <td><input type="text" name="Number1" ></td>
                </label>
            </tr>
            <tr>
                <td><span>Số thứ hai:</span></td>
                <label>
                    <td><input type="text" name="Number2" ></td>
                </label>
            </tr>
            <tr>
                <td><span>Tổng:</span></td>
                <label >
                    <td><input type="text" name="Tổng" value='<?php echo add_number($_POST["Number1"],$_POST["Number2"])?>' ></td>
                </label>
            </tr>
            <tr>
                <td><button type="submit"name="Luc">Tính</button></td>
                <td><button type="cancle">Xóa</button>
            </tr>
        </table>
    </form>
    </center>

    <?php 
        function add_number($A,$B){
           echo $Tong = $A + $B;
         }
    ?>

</body>
</html>