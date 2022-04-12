<?php include("header.php")?>
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
            <form class="mg-b-20">
                <div class="row gutters-8">
                    <div class="col-3-xxxl col-xl-3 col-lg-3 col-12 form-group">
                        <input type="text" onkeyup="myFunction()" placeholder="Search by Roll ..." class="form-control"
                            id="myInput">
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <input type="text" placeholder="dd/mm/yy" class="form-control air-datepicker"
                            data-position="bottom right">
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
            </form>
            <div class="table-responsive">
                <table class="table display data-table text-nowrap">
                    <thead>
                        <tr>
                            <th>Roll</th>
                            <th>Name</th>
                            <th>Batch</th>
                            <th>Dept.</th>
                            <th>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input checkAll">
                                    <label class="form-check-label">status</label>
                                </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        <?php for ($i=0; $i < 10; $i++) { ?>
                        <tr>
                            <td>200130</td>
                            <td>Dhrubo Raj Roy</td>
                            <td>04 batch</td>
                            <td>CE</td>
                            <td>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input">
                                    <label class="form-check-label">On</label>
                                </div>
                            </td>
                        </tr>
                        <?php }?>
                        <tr>
                            <td>200101</td>
                            <td>Nazmul</td>
                            <td>04 batch</td>
                            <td>CE</td>
                            <td>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input">
                                    <label class="form-check-label">On</label>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="row">
                    <div class="col-xl-5 col-lg-5 col-5 form-group"></div>
                    <div class="col-xl-2 col-lg-2 col-12 form-group">
                        <button type="button" class="modal-trigger" data-toggle="modal" data-target="#standard-modal">
                            Save
                        </button>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="standard-modal" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Are You sure?</h5>
                                    <!-- <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button> -->
                                </div>
                                <div class="modal-body">
                                    Do you want to pay Dhrubo Raj roy & amount 2500$ for the month January?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="footer-btn bg-dark-low"
                                        data-dismiss="modal">Cancel</button>
                                    <a href="mealCheck.php"><button type="button" class="footer-btn bg-linkedin">Save
                                            & Print</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5 col-5 form-group"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Student Table Area End Here -->
    <?php include("footer.php")?>

    <script>
    function myFunction() {
        var input, filter, ul, li, a, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        ul = document.getElementById("myUL");
        li = ul.getElementsByTagName("li");
        for (i = 0; i < li.length; i++) {
            a = li[i].getElementsByTagName("a")[0];
            txtValue = a.textContent || a.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                li[i].style.display = "";
            } else {
                li[i].style.display = "none";
            }
        }
    }
    </script>