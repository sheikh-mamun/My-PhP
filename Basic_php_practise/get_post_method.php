<?php 
echo $post['fname'];
?>


<form action="<?php $_SERVER['PHP_SELF']?>" method="POST"> 
        <input type="text" name="fname">
        <input type="submit" value="submit">
</form>