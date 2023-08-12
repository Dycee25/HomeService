<?php
    include_once "scripts/checklogin.php";
    include_once "include/header.php";
    include_once "scripts/DB.php";

    // if (!check("admin")) {
    //     header('Location: logout.php');
    //     exit();
    // }

    $stmt = DB::query("SELECT * FROM reviews");

    $reviews = $stmt->fetchAll(PDO::FETCH_OBJ);

    include_once "msg/managehall.php";
?>
<div class="container" style="margin-top: 30px; margin-bottom: 60px;">
    <h1> Reviews and Ratings </h1> <br>
    <div class="table-responsive">
        <table class="table">
            <tr>
                <th>Photo</th>
                <th>Name</th>
                <th>Profession</th>
                <th>Price</th>
                <th>Rating</th>
                <th>Review</th>
            </tr>
            <?php foreach ($reviews as $review): ?>
            <tr>
                <td>
                    <img style="height: 150px"
                        src="images/<?= $review->photo; ?>"
                        alt="photo">
                </td>
                <td><?= $review->name; ?>
                </td>
                <td><?= $review->profession; ?>
                </td>
                <td><?= $review->price; ?>
                </td>
                <td><?= $review->rating; ?>
                </td>
                <td>
                    <?= $review->review; ?>,<br>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>

<?php include_once "include/footer.php";
