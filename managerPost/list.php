<?php
    $data = file_get_contents('data/post.txt');
    $arrList = explode("\n", $data);
    // echo '<pre>';
    // print_r ($arrList);
    // echo '</pre>';

?>
<form action="#" method="POST" id="frmSubmit">
    <table>        
        <tr>
            <th><input id= 'checkAll' type="checkbox"></th>
            <th>ID</th>
            <th>Tieu de</th>
            <th>Mo Ta</th>
            <th>Thứ tự</th>
            <th>Action</th>
        </tr>
        <?php 
            if(count($arrList) > 0){
                foreach ($arrList as $key => $value) {
                    $row = explode("|", $value);
                    $id = $row[0];
                    $tieuDe = $row[1];
                    $moTa = $row[2];
                    $thutu = $row[3];
        ?>
                <tr>
                    <td><input name ="id[]" value = "<?php echo $id ?>" class='checkBox' type="checkbox"></td>
                    <td><?php echo $id?></td>
                    <td><?php echo $tieuDe?></td>
                    <td><?php echo $moTa?></td>
                    <td><input name="order[<?php echo $id?>]" class="inp_oder" type="text" value="<?php echo $thutu ?>"></td>
                    <td><a class = 'btn-delete' href="delete.php?id=<?php echo $id?>" >Xoa</a>  <a class = 'btn-edit' href="form.php?id=<?php echo $id?>">Sua</a></td>
                </tr>
        <?php }} else {?>
            <h1>Du Lieu Rong</h1>
        <?php } ?>
    </table>
</form>