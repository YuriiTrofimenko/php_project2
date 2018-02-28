<h2>Gallery</h2>
<form action='index.php?page=3' method='post'>
    <p>Select graphics extension to display:</p>
    <select name='ext'>
        <?php
        $path = 'images/';
        //$dir = opendir($path);
        //var_dump($dir);
        //die();
        if ($dir = opendir($path)) {
            
            $extArr = [];
            while (($file = readdir($dir)) !== false) {
                $fullname = $path . $file;
                $pos = strrpos($fullname, '.');
                $ext = substr($fullname, $pos + 1);
                $ext = strtolower($ext);
                if (!in_array($ext, $extArr)) {
                    $extArr[] = $ext;
                    echo "<option>" . $ext . "</option>";
                }
            }
            closedir($dir);
        }
        ?>
    </select>
    <input type="submit" name="submit" value="Show Pictures" class="btn btn-primary"/>
</form>
<br/>
<?php
if (isset($_POST['submit'])) {
    $ext = $_POST['ext'];
    $imgsArr = glob($path . "*." . $ext);
    echo "<div class='panel panelprimary'>";
    echo '<div class="panel-heading">';
    echo '<h3 class="panel-title">Gallery content</h3>'
        .'</div>';
    foreach ($imgsArr as $a) {
        echo "<a href='" . $a . "' target='_blank'><img id='gallery-img' src='" . $a . "'height='250px' border='0' alt='picture' class='img-polaroid'/></a>";
    }
    echo "</div>";
}