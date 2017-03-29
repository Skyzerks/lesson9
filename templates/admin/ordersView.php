<?php
//create a CRUD
//
//var_dump($data);
//exit();
?>

<br>
<a href="/admin/orders/?method=create">Create order</a>
<br>



<br>
<table style="border-collapse: collapse;">

    <?php $k=$_page*$_config['items_on_page']; ?>

    <tr  style="border-collapse: collapse;">
        <td style="border: solid 1px black; padding: 10px">
            Number
        </td>
        <td style="border: solid 1px black; padding: 10px">
            Id
        </td>
        <td style="border: solid 1px black; padding: 10px">
            Product id
        </td>
        <td style="border: solid 1px black; padding: 10px">
            Created at
        </td>
        <td style="border: solid 1px black; padding: 10px">
            Delivered at
        </td>
        <td style="border: solid 1px black; padding: 10px">
            Status
        </td>
        <td style="border: solid 1px black; padding: 10px">
            Total price
        </td>
        <td style="border: solid 1px black; padding: 10px">
            Action
        </td>
        <td style="border: solid 1px black; padding: 10px">
            Action
        </td>
    </tr>
    <?php foreach ($data['orders'] as $order){?>
        <?php $k++; ?>

        <tr  style="border-collapse: collapse;">
            <td style="border: solid 1px black; padding: 10px">
                <?= $k ?>
            </td>
            <td style="border: solid 1px black;  padding: 10px">
<!--                <a href="/admin/categories?method=categories&id=--><?//=$category['id']?><!--">--><?//= $category['title'] ?><!--</a>-->
                <?=$order['id']?>
            </td>
            <td style="border: solid 1px black; padding: 10px">
                <?=$order['user_id']?>
            </td>
            <td style="border: solid 1px black; padding: 10px">
                <?=json_decode($order['product_ids'])?>
            </td>
            <td style="border: solid 1px black; padding: 10px">
                <?=$order['created_at']?>
            </td>
            <td style="border: solid 1px black; padding: 10px">
                <?=$order['delivered_at']?>
            </td>
            <td style="border: solid 1px black; padding: 10px">
                <?=$order['status']?>
            </td>
            <td style="border: solid 1px black; padding: 10px">
                <?=$order['total_price']?>
            </td>
            <td style="border: solid 1px black; padding: 10px">
                <a href="/admin/orders?method=edit&id=<?=$order['id']?>">Редагувати</a>
            </td>
            <td style="border: solid 1px black; padding: 10px">
                <a href="/admin/orders?method=delete&id=<?=$order['id']?>">Видалити</a>
            </td>

        </tr>
    <?php } ?>

</table>


<div class="pagination">

    <?php pagination(
        $data['pagination']['pages_count'],
        '/admin/orders'
    ); ?>


</div>
