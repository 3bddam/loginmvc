
<?php 
    include_once 'header.php';
    include_once '../error/flash.php';
?>
    <h1 class="header">Reset Password</h1>

    <?php flash('reset') ?>

    <form method="post" action="../controllers/RestpasswordController.php">
        <input type="hidden" name="type" value="send" />
        <input type="text" name="usersEmail" 
        placeholder="Email...">
        <button type="submit" name="submit">Receive Email</button>
    </form>
    
<?php 
    include_once 'footer.php'
?>