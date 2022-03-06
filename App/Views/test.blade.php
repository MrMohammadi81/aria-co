<?php
/*echo 'hello<br/>';
echo "<pre/>";
var_dump( $items);
    // var_dump($items);
echo "<pre/>";
// echo $param['title'];
// echo $items->firstName;
foreach ($items as $item) {
    // echo $item['firstName']."<br/>";
    echo "<p>".$item->firstName."</p>";
}
*/
?>
<ul style="background-color: aqua; padding: 2em">
@foreach ($items as $item)
    
        <li style="color: {{ ($item->firstName == "mahdi") ? "red" : "blue" }}">This is user <a href="edit"> {{ $item->firstName }}</a></li>
    
@endforeach
</ul>