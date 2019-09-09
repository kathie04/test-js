<?php
require __DIR__ . "/model.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>Test</title>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/all.css">
    <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous"></script>
    <script src="js/main.js" type="text/javascript"></script>
</head>
<body>
<div class="container">
    <main class="main">
        <section class="product-section">
            <ul class="layout layout-products">
                <?php foreach (getItems(1, 4) as $item): ?>
                    <li>
                        <a href="#" class="product-card">
                            <div class="image">
                                <img src="<?php echo $item['img']; ?>" alt="<?php echo $item['title']; ?>">
                                <?php if ($item['discountCost'] !== null): ?>
                                    <div class="sale">Sale</div>
                                <?php endif; ?>
                                <?php if ($item['new']): ?>
                                    <div class="new">New</div>
                                <?php endif; ?>
                            </div>
                            <h6><?php echo $item['title']; ?></h6>
                            <p><?php echo $item['description']; ?></p>
                            <div class="price">
                                    <span class="cost">$<?php echo $item['discountCost'] ? $item['discountCost'] : $item['cost']; ?>.00
                                    </span>
                                <span class="discount-cost"><?php if ($item['discountCost'] !== null): ?>
                                        $<?php echo $item['cost']; ?>.00
                                    <?php endif; ?></span>
                            </div>
                            <div class="layout layout-button">
                                <button class="button">add to cart</button>
                                <button class="button button-view">view</button>
                            </div>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
            <button class="button button-load-more load-data">Load more</button>
            <div class="spinner-border"></div>
        </section>
    </main>
    <footer class="footer">
        <div class="layout-footer layout">
            <div class="layout-item">
                <h3>hot offers</h3>
                <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae. Suspendisse
                    sollicitudin velit sed leo. Ut pharetra augue nec augue. Nam elit magna, hend.</p>
                <ul class="triangle-list">
                    <li>Vestibulum ante ipsum primis in faucibus orci luctus</li>
                    <li>Nam elit magna hendrerit sit amet tincidunt ac</li>
                    <li>Quisque diam lorem interdum vitae dapibus ac scele</li>
                    <li>Donec eget tellus non erat lacinia fermentum</li>
                    <li>Donec in velit vel ipsum auctor pulvin</li>
                </ul>
            </div>
            <div class="layout-item">
                <h3>hot offers</h3>
                <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae. Suspendisse
                    sollicitudin velit sed leo. Ut pharetra augue nec augue. Nam elit magna, hend.</p>
                <ul class="triangle-list">
                    <li>Vestibulum ante ipsum primis in faucibus orci luctus</li>
                    <li>Nam elit magna hendrerit sit amet tincidunt ac</li>
                    <li>Quisque diam lorem interdum vitae dapibus ac scele</li>
                    <li>Donec eget tellus non erat lacinia fermentum</li>
                    <li>Donec in velit vel ipsum auctor pulvin</li>
                </ul>
            </div>
            <div class="layout-item">
                <h3>Store information</h3>
                <ul class="icon-list">
                    <li>
                        <svg class="icon icon-map-marker" viewBox="0 0 16 28">
                            <path d="M12 10c0-2.203-1.797-4-4-4s-4 1.797-4 4 1.797 4 4 4 4-1.797 4-4zM16 10c0 0.953-0.109 1.937-0.516 2.797l-5.688 12.094c-0.328 0.688-1.047 1.109-1.797 1.109s-1.469-0.422-1.781-1.109l-5.703-12.094c-0.406-0.859-0.516-1.844-0.516-2.797 0-4.422 3.578-8 8-8s8 3.578 8 8z"></path>
                        </svg>
                        <p>Company Inc., 8901 Marmora Road, Glasgow, D04 89GR</p>
                    </li>
                    <li>
                        <svg class="icon icon-phone" viewBox="0 0 22 28">
                            <path d="M22 19.375c0 0.562-0.25 1.656-0.484 2.172-0.328 0.766-1.203 1.266-1.906 1.656-0.922 0.5-1.859 0.797-2.906 0.797-1.453 0-2.766-0.594-4.094-1.078-0.953-0.344-1.875-0.766-2.734-1.297-2.656-1.641-5.859-4.844-7.5-7.5-0.531-0.859-0.953-1.781-1.297-2.734-0.484-1.328-1.078-2.641-1.078-4.094 0-1.047 0.297-1.984 0.797-2.906 0.391-0.703 0.891-1.578 1.656-1.906 0.516-0.234 1.609-0.484 2.172-0.484 0.109 0 0.219 0 0.328 0.047 0.328 0.109 0.672 0.875 0.828 1.188 0.5 0.891 0.984 1.797 1.5 2.672 0.25 0.406 0.719 0.906 0.719 1.391 0 0.953-2.828 2.344-2.828 3.187 0 0.422 0.391 0.969 0.609 1.344 1.578 2.844 3.547 4.813 6.391 6.391 0.375 0.219 0.922 0.609 1.344 0.609 0.844 0 2.234-2.828 3.187-2.828 0.484 0 0.984 0.469 1.391 0.719 0.875 0.516 1.781 1 2.672 1.5 0.313 0.156 1.078 0.5 1.188 0.828 0.047 0.109 0.047 0.219 0.047 0.328z"></path>
                        </svg>
                        <p>Call us now toll free: (800) 2345-6789</p>
                    </li>
                    <li>
                        <svg class="icon icon-envelope-o" viewBox="0 0 28 28">
                            <path d="M26 23.5v-12c-0.328 0.375-0.688 0.719-1.078 1.031-2.234 1.719-4.484 3.469-6.656 5.281-1.172 0.984-2.625 2.188-4.25 2.188h-0.031c-1.625 0-3.078-1.203-4.25-2.188-2.172-1.813-4.422-3.563-6.656-5.281-0.391-0.313-0.75-0.656-1.078-1.031v12c0 0.266 0.234 0.5 0.5 0.5h23c0.266 0 0.5-0.234 0.5-0.5zM26 7.078c0-0.391 0.094-1.078-0.5-1.078h-23c-0.266 0-0.5 0.234-0.5 0.5 0 1.781 0.891 3.328 2.297 4.438 2.094 1.641 4.188 3.297 6.266 4.953 0.828 0.672 2.328 2.109 3.422 2.109h0.031c1.094 0 2.594-1.437 3.422-2.109 2.078-1.656 4.172-3.313 6.266-4.953 1.016-0.797 2.297-2.531 2.297-3.859zM28 6.5v17c0 1.375-1.125 2.5-2.5 2.5h-23c-1.375 0-2.5-1.125-2.5-2.5v-17c0-1.375 1.125-2.5 2.5-2.5h23c1.375 0 2.5 1.125 2.5 2.5z"></path>
                        </svg>
                        <div>
                            <p>Customer support: support@example.com</p>
                            <p>Press: pressroom@example.com</p>
                        </div>
                    </li>
                    <li>
                        <svg class="icon icon-skype" viewBox="0 0 24 28">
                            <path d="M18.328 16.609c0-2.719-2.641-3.656-4.859-4.156l-1.625-0.375c-1.188-0.281-2.078-0.484-2.078-1.391 0-0.828 0.875-1.203 2.25-1.203 2.453 0 2.5 1.797 4.016 1.797 1.016 0 1.625-0.797 1.625-1.703 0-1.797-2.984-2.969-5.938-2.969-2.703 0-5.844 1.172-5.844 4.344 0 2.625 1.75 3.563 4.031 4.109l2.281 0.562c1.391 0.344 2.25 0.5 2.25 1.5 0 0.797-0.891 1.406-2.266 1.406-2.891 0-3.047-2.406-4.719-2.406-1.094 0-1.578 0.781-1.578 1.641 0 1.922 2.938 3.484 6.453 3.484 2.938 0 6-1.469 6-4.641zM24 20c0 3.313-2.688 6-6 6-1.375 0-2.641-0.469-3.656-1.25-0.75 0.156-1.547 0.25-2.344 0.25-6.078 0-11-4.922-11-11 0-0.797 0.094-1.594 0.25-2.344-0.781-1.016-1.25-2.281-1.25-3.656 0-3.313 2.688-6 6-6 1.375 0 2.641 0.469 3.656 1.25 0.75-0.156 1.547-0.25 2.344-0.25 6.078 0 11 4.922 11 11 0 0.797-0.094 1.594-0.25 2.344 0.781 1.016 1.25 2.281 1.25 3.656z"></path>
                        </svg>
                        <p>Skype: sample-username</p>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
</div>
</body>
</html>