<?php include ('header.html');?>
<div class="table-responsive">
    <table class="table wy-table-bordered">

        <tr><td>email</td>
        <td>password</td></tr>
<?php
if ($b->num_rows()>0){
//Access them like so
    foreach ($b->result() as $row){?>
        <tr><td> <?php echo $row->emai ;?></td>
            <td><?php echo $row->password;?></td>
        </tr>
    <?php }}?>
</table>
</div>
<?php include ('footer.html');?>