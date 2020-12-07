<h2>Price matrix</h2>
<div class="table-responsive">
    <table class="table table-bordered">
        <tr>
            <td></td>
            <th>Policy</th>
            <?php for($i = 1; $i <= $instalments; $i++):?>
                <th><?=$i?> instalment</th>
            <?php endfor;?>
        </tr>
        <tr>
            <td>Value</td>
            <td><?=$value;?></td>
            <?php for($i = 1; $i <= $instalments; $i++):?>
                <td></td>
            <?php endfor;?>
        </tr>
        <tr>
            <td>Base premium(<?=$basePricePercent;?>%)</td>
            <td><?=$basePrice;?></td>
            <?php for($i = 1; $i <= $instalments; $i++):?>
                <td><?=number_format($basePrice / $instalments, 2, '.', ' ');?></td>
            <?php endfor;?>
        </tr>
        <tr>
            <td>Commission(17%)</td>
            <td><?=$commission;?></td>
            <?php for($i = 1; $i <= $instalments; $i++):?>
                <td><?=number_format($commission / $instalments, 2, '.', ' ');?></td>
            <?php endfor;?>
        </tr>
        <tr>
            <td>Tax(<?=$taxPercent;?>%)</td>
            <td><?=$tax;?></td>
            <?php for($i = 1; $i <= $instalments; $i++):?>
                <td><?=number_format($tax / $instalments, 2, '.', ' ');?></td>
            <?php endfor;?>
        </tr>
        <tr>
            <th>Total cost</th>
            <th><?=$total;?></th>
            <?php for($i = 1; $i <= $instalments; $i++):?>
                <td><?=number_format($total / $instalments, 2, '.', ' ');?></td>
            <?php endfor;?>
        </tr>
    </table>
</div>