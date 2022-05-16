<?php include("header.php");


$roll="";
$date="";
if(isset($_POST['submit']) ){
    $date=$_POST['date'];
    $time=time();
    // echo count($_POST['roll']);
    for($i=0;$i<=count($_POST['roll'])-1;$i++){
        for($i=0;$i<=count($_POST['meal_value'])-1;$i++){
            $meal_value= $_POST['meal_value'];
            $roll= $_POST['roll'];
            $swl="INSERT INTO `meal_table` ( `roll`, `meal_value`, `date`, `added_on`,`updated_on`, `status`) VALUES ( '$roll[$i]', '$meal_value[$i]', '$date', '$time','$time', '1')";
            mysqli_query($con,$swl);
        }
    }
    redirect('mealStatus.php');
}


$sql="select * from users order by id desc";
$res=mysqli_query($con,$sql);
?>
<div class="dashboard-content-one">
    <!-- Breadcubs Area Start Here -->
    <div class="breadcrumbs-area">
        <h3>Students</h3>
        <ul>
            <li>
                <a href="index.php">Home</a>
            </li>
            <li>All Students</li>
        </ul>
    </div>
    <!-- Breadcubs Area End Here -->
    <!-- Student Table Area Start Here -->
    <div class="card height-auto">
        <div class="card-body">
            <div class="heading-layout1">
                <div class="item-title">
                    <h3>Meal Data</h3>
                </div>
                <div class="dropdown">
                    <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                        aria-expanded="false">...</a>

                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Close</a>
                        <a class="dropdown-item" href="#"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                        <a class="dropdown-item" href="#"><i class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                    </div>
                </div>
            </div>
            <form class="mg-b-20" method="post">
                <div class="row gutters-8">
                    <div class="col-3-xxxl col-xl-3 col-lg-3 col-12 form-group">
                        <input type="text" onkeyup="myFunction()" placeholder="Search by Roll ..." class="form-control"
                            id="myInput">
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <input name="date" type="date" placeholder="dd/mm/yy" class="form-control air-datepicker"
                            data-position="bottom right" required>
                    </div>
                    <!-- <div class="col-4-xxxl col-xl-4 col-lg-3 col-12 form-group">
                        <input type="text" placeholder="Search by Name ..." class="form-control">
                    </div>
                    <div class="col-4-xxxl col-xl-3 col-lg-3 col-12 form-group">
                        <input type="text" placeholder="Search by Class ..." class="form-control">
                    </div> -->
                    <div class="col-1-xxxl col-xl-2 col-lg-3 col-12 form-group">
                        <button type="submit" class="fw-btn-fill btn-gradient-yellow">SEARCH</button>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table display data-table text-nowrap">
                        <thead>
                            <tr>
                                <th>Roll</th>
                                <th>Name</th>
                                <th>Batch</th>
                                <th>Dept.</th>
                                <th><input type="number" id="number_value" min="0" onkeyup="checkAll()"></th>
                                <!-- <th>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input checkAll">
                                    <label class="form-check-label">status</label>
                                </div>
                            </th> -->
                                <th></th>
                            </tr>
                        </thead>
                        <tbody id="myTable">
                            <?php if(mysqli_num_rows($res)>0){
                            $i=1;
                            while($row=mysqli_fetch_assoc($res)){
                            ?>
                            <tr>
                                <td><?php echo $row['roll']?></td>
                                <input type="hidden" name="roll[]" value="<?php echo $row['roll']?>">
                                <td><?php echo $row['name']?></td>
                                <td><?php echo $row['batch']?> batch</td>
                                <td>CE</td>
                                <!-- <div class="form-check">
                                    <input type="checkbox" class="form-check-input">
                                </div> -->
                                <td><input type="number" name="meal_value[]" class="number" required></td>
                            </tr>
                            <?php 
                           $i++;
                           } } else { ?>
                            <tr>
                                <td colspan="5">No data found</td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <div class="row">
                        <div class="col-xl-5 col-lg-5 col-5 form-group"></div>
                        <div class="col-xl-2 col-lg-2 col-12 form-group">
                            <button type="button" class="modal-trigger" data-toggle="modal"
                                data-target="#standard-modal">
                                Save
                            </button>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="standard-modal" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Are You sure?</h5>
                                    </div>
                                    <div class="modal-body">
                                        Do you want to pay Dhrubo Raj roy & amount 2500$ for the month January?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="footer-btn bg-dark-low"
                                            data-dismiss="modal">Cancel</button>
                                        <button type="submit" name="submit" class="footer-btn bg-linkedin">Save
                                            & Print</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 col-5 form-group"></div>
            </form>
        </div>
    </div>
</div>
</div>
<!-- Student Table Area End Here -->
<?php include("footer.php")?>

<script>
function checkAll() {
    var number = document.getElementsByClassName("number");
    var number_value = document.getElementById("number_value").value;
    for (let i = 0; i < number.length; i++) {
        number[i].value = number_value;
    }
}
</script>