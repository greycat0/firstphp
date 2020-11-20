<p>type &laquo;okey&raquo;</p>
<?php
if (isset($_GET['i']))
{
    if ($_GET['i'] == 'okey')
        echo 'ooookey';
    else
        echo 'nooo';
}
else
{
    echo '<form>';
    echo '<input name="i">';
    echo '<input type="submit">';
    echo '</form>';
}
