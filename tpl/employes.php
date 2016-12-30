
<?
//print_r($this->arr);
$arr = $this->arr;
$i=1;
?>


<div>
    <table>
        <tr class="center">
            <th>Index</th>
            <th>ФИО</th>
            <th>дата рожд.</th>
            <th>отдел</th>
            <th>должность</th>
            <th>тип сотрудника</th>
            <th>оплата/мес.</th>
            <th></th>
        </tr>
    <? foreach ($arr as $key => $val){?>

            <tr>
                <td class="center"><?=$i?></td>
                <td><?=$val['FIO']?></td>
                <td class="center"><?=$val['date_b']?></td>
                <td class="center"><?=$val['name_dep']?></td>
                <td class="center"><?=$val['position']?></td>
                <td class="center"><?=$val['type_pay']?></td>
                <td class="center"><?=$val['type_pay']=="fixed_pay" ? $val['pay']: $val['pay'] * 200?></td>
                <td class="center"><a href="#">detail</a></td>
            </tr>


    <?$i++;}?>
    </table>
</div>