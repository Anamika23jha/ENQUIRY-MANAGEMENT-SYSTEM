<?php
include "../indexx/config.php";


session_start();
$query_id = $_SESSION['query_id'];

if (!isset($query_id)) {
    header('location:login2.php');
};

if (isset($_GET['logout'])) {
    unset($query_id);
    session_destroy();
    header('location:login2.php');
};

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user-profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/user.css">
    <!-- custom css file link  -->

</head>
<body>

    <?php
    include "../indexx/header.html";
    ?>

    <?php
    if (isset($message)) {
        foreach ($message as $message) {
            echo '<div class="message" onclick="this.remove();">' . $message . '</div>';
        }
    }
    ?>
    <div class="">
        <div class="container">

            <div class="user-profile">

                <?php
                $qid = $_SESSION['query_id'];
                $select_user = mysqli_query($conn, "SELECT * FROM `users1` WHERE query_id = '{$qid}'") or die('query failed');
                if (mysqli_num_rows($select_user) > 0) {
                    $fetch_user = mysqli_fetch_assoc($select_user);
                }
                ?>

                <p> Enquery_id : <span><?php echo $fetch_user['query_id']; ?></span> </p>
                <p> Email : <span><?php echo $fetch_user['Email']; ?></span> </p>
                <div class="flex">

                    <a href="../indexx/askagain.php" class="option-btn">Ask Again</a>
                    <a href="index.php?logout=<?php echo $query_id; ?>" onclick="return confirm('are your sure you want to logout?');" class="logout-btn">logout</a>
                </div>

            </div>
        </div>

         <div class="row">
            <div class="col-md-12">
                <div class="card">

                    <div class="cards-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr style="color: black;">
                                   <th>Query</th>
                                    <th>Answered At</th>
                                    <th>Answer</th>
                                    <th>action</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include_once "../admin_panel/config/dbconnect.php";
                                $sql = "SELECT * from users2 WHERE query_id = '{$qid}' AND status=0";
                                $result = $conn->query($sql);
                                $count = 1;
                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                            ?>
                                        <tr> 

                                           <td><?= $row['Query']; ?></td>
                                            <td><?= $row['answered_at']; ?>
                                            <td><?= $row['Answer']; ?></td>
                                            </td>
                                            <td>
                                                <a href=<?= $row['id']; ?> class="btn btn-info btn-sm">Thanks</a>
                                                <a href="editenquiry.php?id=<?= $row['id']; ?>" class="btn btn-success btn-sm">Not Satisfied</a>
                                                <form action="feedback.php" method="POST" class="d-inline">
                                                    <button type="submit" name="delete_query" <?= $row['id']; ?> class="btn btn-danger btn-sm">Give Feedback</button>

                                                </form>
                                            </td>
                                        </tr>
                                <?php
                                    }
                                } else {
                                    echo "<h5> No Record Found </h5>";
                                }
                                ?>

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <?php
    include "../indexx/footer.html";

    ?>
</body>
</html>