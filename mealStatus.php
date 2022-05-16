<?php include("header.php");
$dept_id="";
$display_none='d-none';
if(isset($_GET['dept_id']) || isset($_GET['date'])) {
    $display_none="";
	$dept_id=get_safe_value($_GET['dept_id']);
}
?>
<div class="dashboard-content-one">
    <!-- Breadcubs Area Start Here -->
    <div class="breadcrumbs-area">
        <h3>Student Attendence</h3>
        <ul>
            <li>
                <a href="index.php">Home</a>
            </li>
            <li>Attendence</li>
        </ul>
    </div>
    <!-- Breadcubs Area End Here -->
    <div class="row">
        <!-- Student Attendence Search Area Start Here -->
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="heading-layout1">
                        <div class="item-title">
                            <h3>Student Attendence</h3>
                        </div>
                        <div class="dropdown">
                            <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                aria-expanded="false">...</a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Close</a>
                                <a class="dropdown-item" href="#"><i
                                        class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                <a class="dropdown-item" href="#"><i
                                        class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                            </div>
                        </div>
                    </div>
                    <form class="new-added-form">
                        <div class="row">
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Select Class</label>
                                <select class="form-control select2" name="dept_id">
                                    <option readonly>Select Depertment</option>
                                    <?php
                                    $res=mysqli_query($con,"SELECT * FROM `depts` where status='1'");
                                    while($row=mysqli_fetch_assoc($res)){
                                        if($row['id']==$dept_id){
                                            echo "<option selected='selected' value=".$row['id'].">".$row['name']."</option>";
                                        }else{
                                            echo "<option value=".$row['id'].">".$row['name']."</option>";
                                        }                                                        
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Select Section</label>
                                <select class="select2">
                                    <option value="0">Select Section</option>
                                    <option value="1">A</option>
                                    <option value="2">B</option>
                                    <option value="3">C</option>
                                    <option value="4">D</option>
                                </select>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Select Month</label>
                                <select class="select2">
                                    <option value="0">Select Month</option>
                                    <option value="1">January</option>
                                    <option value="2">February</option>
                                    <option value="3">March</option>
                                    <option value="4">April</option>
                                    <option value="5">May</option>
                                    <option value="6">June</option>
                                    <option value="7">July</option>
                                    <option value="8">August</option>
                                    <option value="9">September</option>
                                    <option value="10">October</option>
                                    <option value="11">November</option>
                                    <option value="12">December</option>
                                </select>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Select Session</label>
                                <select class="select2">
                                    <option value="0">Select Session</option>
                                    <option value="1">2016-2017</option>
                                    <option value="2">2017-20108</option>
                                    <option value="3">2018-2019</option>
                                    <option value="4">2020-2021</option>
                                </select>
                            </div>
                            <div class="col-12 form-group mg-t-8">
                                <button type="submit"
                                    class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Save</button>
                                <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Student Attendence Search Area End Here -->

        <!-- Student Attendence Area Start Here -->
        <div class="col-12 <?php echo $display_none?>">
            <div class="card">
                <div class="card-body">
                    <div class="heading-layout1">
                        <div class="item-title">
                            <h3>Meal Chart- April 2022</h3>
                        </div>
                        <!-- <div class="dropdown">
                            <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                aria-expanded="false">...</a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Close</a>
                                <a class="dropdown-item" href="#"><i
                                        class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                <a class="dropdown-item" href="#"><i
                                        class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                            </div>
                        </div> -->
                    </div>
                    <div class="table-responsive">
                        <table class="table bs-table table-striped table-bordered text-nowrap">
                            <thead>
                                <tr>
                                    <th class="text-left">Students</th>
                                    <?php
                                    $d=cal_days_in_month(CAL_GREGORIAN,2,2020);
                                    $dates=getBetweenDates('2020-2-1','2020-2-'.$d);
                                    for ($i=0; $i < count($dates); $i++) {?>
                                    <th><?php echo $dates[$i]?></th>
                                    <?php }?>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-left">Dhrubo Raj Roy</td>

                                    <?php 
                                    for ($i=0; $i < count($dates); $i++) {
                                    $sql="SELECT meal_value FROM `meal_table` WHERE `meal_table`.`roll`=200130 and `meal_table`.`date`='2022-05-".$dates[$i]."'";
                                    $res=mysqli_query($con,$sql);
                                    ;
                                    ?>
                                <tr><?php $row=mysqli_fetch_assoc($res); print_r($row);?> </tr>
                                <?php }?>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Student Attendence Area End Here -->
    <?php include("footer.php")?>