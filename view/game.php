<?php
require_once '..\functionCalls.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BLACKJACK</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1 class="mt-4 text-center">Blackjack Game</h1>
    <div class="row mt-4">
        <div class="col-md-12 bg-success">
            <div class="row">
                <div class="col-md-6 card bg-success text-light border border-light">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $_POST['player'];?></h5><hr>
                        <li>
                            <img src="../public/<?php echo $card1['card']; ?>"width="60"/>
                        </li>
                        <li>
                            <img src="../public/<?php echo $card3['card']; ?>" width="60"/>
                        </li>
                    </div>
                </div>
                <div class="col-md-6 card bg-success text-light border border-light">
                    <div class="card-body">
                        <h5 class="card-title">dealer</h5><hr>
                        <li>
                            <img src="../public/cardDeck/playingCard.png" width="60"/>
                        </li>
                        <li>
                            <img src="../public/<?php echo $card4['card']; ?>" width="60"/>
                        </li>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Hand Card Total</th>
                    <th scope="col">Result</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><?php echo $_POST['player'];?></td>
                    <td><?php echo '<br>' . $you; ?></td>
                    <!--                    <td>kazandı 15 puanla</td>-->
                </tr>
                <tr>
                    <td>Dealer</td>
                    <td><?php echo '<br>' . $dealer; ?></td>
                    <td><?php echo $winner; ?></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-12">
            <form action="../functionCalls.php" method="post">
                <button type="submit" class="btn btn-warning" style="padding-right: 5%;">hit</button>
            </form>
            <button class="btn btn-warning" id="standBtn">stand</button>
        </div>
    </div>
</div>
<script src="../public/js/stand.js" defer></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

