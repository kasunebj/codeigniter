<?php if ($this->session->flashdata('msg')){
    echo $this->session->flashdata('msg');
}?>
<?php include ('header.html');?>

<?php echo form_open('Home/add');?>
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
    </div>
    <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php echo form_close();?>
<a href="<?php echo base_url('index.php/Home/get')?>"> search</a>


<?php echo form_open('Home/search');?>
<div class="form-group">
    <label for="exampleInputPassword1">email</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password" name="email">
</div>
<button type="submit" class="btn btn-primary">Submit</button>
<?php echo form_close();?>