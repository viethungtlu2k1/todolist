<?php
include("config.php");
$sql = "SELECT * FROM tasks";
$res = mysqli_query($conn, $sql);
if (mysqli_num_rows($res) > 0) {
    while ($row = mysqli_fetch_assoc($res)) {
?>
        <li>
            <input type="hidden" id="delete" data-id="<?=$row['id']?>">
            <span class="text"><?=$row['title']?></span>
            <i class="icon fa fa-trash" id = "delete-task"></i>
        </li>
<?php
    }
    ?>
    <div class="pending-text" id="count-task">You have <?=mysqli_num_rows($res)?> penging tasks.</div>
    <?php
}else{
    echo "<li><span class='text'>No Record Found.</span></li>";
}

?>