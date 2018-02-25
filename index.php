<?php
    session_start();

    require 'connection.php';

    if (isset($_SESSION['user_id'])) {
        $records = $connection->prepare('SELECT id, password FROM users WHERE id = :id');
        $records->bindParam(':id', $_SESSION['user_id']);
        $records->execute();
        $results = $records->fecth(PDO::FETCH_ASSOC);

        $user = null;

        if (count($results) > 0) {
            $user = $results;
        }
    }
?>

<?php include('header.php'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 col-12">
                <?php include('sidebar.php'); ?>
            </div>
            <div class="col-md-9 col-12">
                
            </div>
        </div>
    </div>
<?php include('footer.php'); ?>









