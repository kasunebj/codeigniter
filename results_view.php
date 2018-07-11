<div class="table-responsive">
    <table class="table table-bordered">

        <tr><td>email</td>
        <td>password</td></tr>
<?php
if ($a->num_rows()>0){
//Access them like so
foreach ($a->result() as $row){?>
   <tr><td> <?php echo $row->emai ;?></td>
   <td><?php echo $row->password;?></td>
    </tr>
<?php }}?>
        </table>
    </div>
