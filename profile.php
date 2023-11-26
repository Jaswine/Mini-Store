<?php
    include 'config.php';
    include 'blocks/main.php';
?>
<link rel="stylesheet" href="/styles/profile.css">

<div class="page">
    <div class='page__item'>
    <?php
        $userId = $_GET['username'];

        $sql = "SELECT * FROM User WHERE id='$userId'";
        $result = $conn->query($sql);
        
        ?>

        <div class="page__item__right">
            
        </div>
   </div>
</div>

<?php
    include 'blocks/footer.php';
?>