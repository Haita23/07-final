<?php
$tv="select *from menu_doc order by id";
$tv_1= mysqli_query($mysqli,$tv);
echo "<div class='menu_doc'>";
while($tv_2=mysqli_fetch_array($tv_1))
{
    echo "<a href=''>";
        echo $tv_2['ten'];
    echo "</a>";
}
echo "</div>";
?>