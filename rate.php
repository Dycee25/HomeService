<?php

include_once "./include/header.php";
include_once "./scripts/DB.php";

if (!isset($_GET['provider'])) {
    header('Location: ratings.php');
    exit();
}

$provider = DB::query("SELECT * FROM providers WHERE id=?", [$_GET['provider']])->fetch(PDO::FETCH_OBJ);

if ($provider === false) {
    header('Location: ratings.php');
    exit();
}

include_once "msg/rating.php";

?>

<div class="container" style="margin-top: 30px;">
    <div class="card text-center">
        <div class="card-header">
            <h3>Details about <?= $provider->name; ?></h3>
        </div>
        <div class="container" style="margin-top: 30px;">
            <div class="row">
                <div class="col">
                    <img style="height: 250px"
                        src="images/<?= $provider->photo; ?>">
                </div>
            </div>
        </div>

        <div class="card-body">
            <table class="table">
                <tr>
                    <th>Name</th>
                    <td>
                        <?= $provider->name; ?>
                    </td>
                    <th>Profession</th>
                    <td>
                        <?= $provider->profession;?>
                    </td>
                    <th>Price</th>
                    <td>
                        Ksh. <?= $provider->price;?>
                    </td>
                </tr>
                <tr>
                    <th>Address</th>
                    <td>
                        <?= $provider->adder1; ?>
                    </td>
                    <th>City</th>
                    <td>
                        <?= $provider->city; ?>
                    </td>
                </tr>
            </table>
        </div>

    </div>
</div>


<div class="container" style="margin-bottom: 60px;margin-top: 20px;">
    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <h3 class="text-center">Review <?= $provider->name; ?>
                </h3>
            </div>
            <hr>

            <form action="scripts/rating.php" method="post">
                <input type="hidden" name="provider"
                    value="<?= $provider->id; ?>">

                <div class="form-group">
                    <label for="">Choose Rating</label>
                    <select class="form-control" name="rating" id="rating" required>
                        <option value="5">5</option>
                        <option value="4">4</option>
                         <option value="3">3</option>
                         <option value="2">2</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="">Review</label>
                    <textarea id="review" name="review" class="form-control" maxlength="255"
                        placeholder="Write your review.."></textarea>
                </div>

                <button style="margin-top: 30px" class="btn btn-block btn-primary" type="submit" name="rate"
                    id="rate">Rate
                    </button>
            </form>

        </div>
    </div>
</div>

<?php include_once "include/footer.php";
