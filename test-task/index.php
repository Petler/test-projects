<?php
require __DIR__ . "/model.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Title</title>
    <link media="all" rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,700" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" defer></script>
    <script>window.jQuery || document.write('<script src="js/jquery-3.2.1.min.js" defer><\/script>')</script>
    <script src="js/jquery.main.js" defer></script>
    <link rel="stylesheet" href="scss/main.scss">
</head>
<body>
<div id="wrapper">
    <main id="main">
        <div class="container">
            <div class="row-holder">
                <?php foreach (getItems(1, 8) as $item): ?>
                    <div class="col-3">
                        <div class="holder">
                            <div class="img-block">
                                <img src="<?php echo $item['img']; ?>" alt="<?php echo $item['title']; ?>">
                                <?php if ($item['discountCost'] !== null): ?>
                                    <span class="label label-old">sale</span>
                                <?php endif; ?>
                                <?php if ($item['new']): ?>
                                    <span class="label label-new">new</span>
                                <?php endif; ?>

                            </div>

                            <div class="text">
                                <h3><?php echo $item['title']; ?></h3>
                                <p><?php echo $item['description']; ?></p>
                                <?php if ($item['discountCost'] !== null): ?>
                                    <span class="value"><?php echo $item['cost']; ?></span>
                                    <span class="old-value"><?php echo $item['discountCost']; ?></span>

                                    <?php elseif ($item['discountCost'] == null): ?>
                                        <span class="value"><?php echo $item['cost']; ?></span>
                                    <?php endif; ?>
                            </div>
                            <div class="btn-holder">
                                <a href="#" class="btn add">add to cart</a>
                                <a href="" class="btn view">view</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <a href="#" class="btn align-center">load more</a>
            </div>
        </div>
    </main>
    <footer id="footer">
        <div class="container">
            <div class="row-holder">
                <div class="col-4">
                    <div class="holder">
                        <h2>hot offers</h2>
                        <div class="text">
                            <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae. Suspendisse sollicitudin velit sed leo. Ut pharetra augue nec augue. Nam elit magna, hend.</p>
                            <ul class="footer-list">
                                <li>Vestibulum ante ipsum primis in faucibus orci luctus</li>
                                <li>Nam elit magna hendrerit sit amet tincidunt ac</li>
                                <li>Quisque diam lorem interdum vitae dapibus ac scele</li>
                                <li>Donec eget tellus non erat lacinia fermentum</li>
                                <li>Donec in velit vel ipsum auctor pulvin</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="holder">
                        <h2>hot offers</h2>
                        <div class="text">
                            <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae. Suspendisse sollicitudin velit sed leo. Ut pharetra augue nec augue. Nam elit magna, hend.</p>
                            <ul class="footer-list">
                                <li>Vestibulum ante ipsum primis in faucibus orci luctus</li>
                                <li>Nam elit magna hendrerit sit amet tincidunt ac</li>
                                <li>Quisque diam lorem interdum vitae dapibus ac scele</li>
                                <li>Donec eget tellus non erat lacinia fermentum</li>
                                <li>Donec in velit vel ipsum auctor pulvin</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="holder">
                        <h2 class="address-title">Store information</h2>
                        <div class="text">
                            <address>
                                <ul class="address">
                                    <li><i class="icon icon-map-marker"></i><a href="#">Company Inc., 8901 Marmora Road, Glasgow, D04 89GR</a></li>
                                    <li><i class="icon icon-phone"></i><a href="tel:(800) 2345-6789">Call us now toll free: (800) 2345-6789</a></li>
                                    <li class="mail"><i class="icon icon-envelope"></i>
                                        <a href="mailto:support@example.com">Customer support: support@example.com</a>
                                        <a href="mailto:pressroom@example.com">Press: pressroom@example.com</a>
                                    </li>
                                    <li><i class="icon icon-skype"></i><a href="#">Skype: sample-username</a></li>
                                </ul>
                            </address>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
</body>
</html>
