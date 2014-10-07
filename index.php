<?php
/*
$z=array(
    array(
        'Name' => 'Trixie',
        'Color' => 'Green',
        'Element' => 'Earth',
        'Likes' => 'Flowers'
        ),
    array(
        'Name' => 'Tinkerbell',
        'Element' => 'Air',
        'Likes' => 'Singning',
        'Color' => 'Blue'
        ), 
    array(
        'Element' => 'Water',
        'Likes' => 'Dancing',
        'Name' => 'Blum',
        'Color' => 'Pink'
        ),
);
associative_to_ascii($z);
*/
?>
<?php
function associative_to_ascii($a){
$i=0;
foreach($a as $result){
    foreach($result as $key=>$value){
        if($i==0){
            $headings[]=$key;
            $values[$i][]=$value;
        }
        else{
            for($j=0;$j<sizeof($headings);$j++){
                if($headings[$j]==$key)
                    $values[$i][$j]=$value;
            }
        }
    }
$i++;
}
?>
<table border='1'>
<tr>
<?php
    for($k=0;$k<sizeof($headings);$k++){
     ?>
            <th><?php echo $headings[$k];?></th>
            <?php
        }
        ?>
        </tr>
        <?php
foreach($values as $final_result){
?>
<tr>
    <?php
    for($k=0;$k<sizeof($final_result);$k++){
            ?>
            <td><?php echo $final_result[$k];?></td>
            <?php
    }
  
?>
</tr>
<?php
}
?>
</table>
<?php
}
?>
