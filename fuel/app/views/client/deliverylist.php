<ol>
    <?php foreach ($deliverylist as $delivery): ?>
        <li><a href=<?php echo 'client/detail/' .$delivery['orderid']?>><?php echo $delivery['address']?></a></li>
    <?php endforeach;?>
</ol>
