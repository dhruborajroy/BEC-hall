<?php include("header.php")?>
<div class="dashboard-content-one">
    <!-- Breadcubs Area Start Here -->
    <div class="breadcrumbs-area">
        <h3>UI Elements</h3>
        <ul>
            <li>
                <a href="index.php">Home</a>
            </li>
            <li>
                Meal On off Request
            </li>
        </ul>
    </div>
    <!-- Breadcubs Area End Here -->
    <!-- Button Area Start Here -->
    <div class="card height-auto">
        <div class="card-body">
            <div class="heading-layout1 mg-b-25">
                <div class="item-title">
                    <h3>Meal On off Request</h3>
                </div>
            </div>
            <div class="ui-alart-box">
                <div class="icon-color-alart">
                    <div class="alert icon-alart bg-dark-pastel-green" role="alert">
                        <i class="fas fa-exclamation bg-dark-pastel-green"></i>
                        Your Meal is ON. Please Pay your due amount(If Any). 
                    </div>
                    <div class="alert icon-alart bg-pink2" role="alert">
                        <i class="fas fa-times bg-pink3"></i>
                        Your Meal is off. Please Pay your due amount(If Any). 
                    </div>
                </div>
            </div>
            <div class="ui-btn-wrap">
                <ul>
                    <li><button type="button" class="btn-fill-md text-light bg-dark-pastel-green">Meal On/Request Meal Off</button></li>
                    <li><button type="button" class="btn-fill-md radius-4 text-light bg-orange-red">Meal Off/Request Meal On</button></li>
                </ul>
            </div>
        </div>
    </div>
    <?php include("footer.php")?>