<?php 
include('header.php');
$id="";
$name='';
$fname='';
$fOccupation='';
$mname='';
$mOccupation='';
$phoneNumber='';
$presentAddress='';
$permanentAddress='';
$required='required';
$paymentStatus='';
$dob='';
$gender='';
$religion='';
$birthId='';
$bloodGroup='';
$examRoll='';
$legalGuardianName='';
$legalGuardianRelation='';
$image='';
$email='';
$merit='';
$deptId="";
if(isset($_GET['id']) && $_GET['id']!=""){
	$id=get_safe_value($_GET['id']);
    $res=mysqli_query($con,"select * from users where md5(id)='$id'");
	if(mysqli_num_rows($res)>0){
        $row=mysqli_fetch_assoc($res);
        $name=$row['name'];
        $roll=$row['roll'];
        $fname=$row['fName'];
        $fOccupation=$row['fOccupation'];
        $mname=$row['mName'];
        $mOccupation=$row['mOccupation'];
        $phoneNumber=$row['phoneNumber'];
        $presentAddress=$row['presentAddress'];
        $permanentAddress=$row['permanentAddress'];
        $dob=$row['dob'];
        $gender=$row['gender'];
        $religion=$row['religion'];
        $birthId=$row['birthId'];
        $height=$row['height'];
        $ffQuata=$row['ffQuata'];
        $bloodGroup=$row['bloodGroup'];
        $merit=$row['merit'];
        $legalGuardianName=$row['legalGuardianName'];
        $legalGuardianRelation=$row['legalGuardianRelation'];
        $image=$row['image'];
        $email=$row['email'];
        $dept_id=$row['dept_id'];
        $examRoll=$row['examRoll'];
        $required='';
    }else{
        redirect('index.php');
    }
}
if(isset($_POST['submit'])){
	$name=get_safe_value($_POST['name']);
	$roll=get_safe_value($_POST['roll']);
	$fName=get_safe_value($_POST['fName']);
	$fOccupation=get_safe_value($_POST['fOccupation']);
	$mName=get_safe_value($_POST['mName']);
	$mOccupation=get_safe_value($_POST['mOccupation']);
	$phoneNumber=get_safe_value($_POST['phoneNumber']);
	$presentAddress=get_safe_value($_POST['presentAddress']);
	$permanentAddress=get_safe_value($_POST['permanentAddress']);
	$dob=get_safe_value($_POST['dob']);
	$gender=get_safe_value($_POST['gender']);
	$religion=get_safe_value($_POST['religion']);
	$birthId=get_safe_value($_POST['birthId']);
	$bloodGroup=get_safe_value($_POST['bloodGroup']);
	$examRoll=get_safe_value($_POST['examRoll']);
	$merit=get_safe_value($_POST['merit']);
	$legalGuardianName=get_safe_value($_POST['legalGuardianName']);
	$legalGuardianRelation=get_safe_value($_POST['legalGuardianRelation']);
	$email=get_safe_value($_POST['email']);
    $ffQuata=get_safe_value($_POST['ffQuata']);
    $dept_id=get_safe_value($_POST['dept_id']);
   if($id==''){
        $image=rand(111111111,999999999).'_'.$_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'],UPLOAD_STUDENT_IMAGE.$image);
        $sql="INSERT INTO `users` (`name`, `roll`,`fName`, `fOccupation`, `mName`, `mOccupation`, `phoneNumber`, `presentAddress`, `permanentAddress`, `dob`, `gender`, `religion`, `birthId`,`ffQuata`, `bloodGroup`,  `examRoll`, `merit`, `legalGuardianName`, `legalGuardianRelation`, `image`,`email`,`dept_id`, `status`)
                                VALUES ( '$name', '$roll','$fName', '$fOccupation', '$mName', '$mOccupation', '$phoneNumber','$presentAddress','$permanentAddress','$dob','$gender','$religion','$birthId','$ffQuata','$bloodGroup','$examRoll','$merit', '$legalGuardianName','$legalGuardianRelation','$image','$email','$dept_id', 1)";
        
        mysqli_query($con,$sql);
        $_SESSION['INSERT']=1;
   }else{
        if($_FILES['image']['name']!=''){
            $image=rand(111111111,999999999).'_'.$_FILES['image']['name'];
            move_uploaded_file($_FILES['image']['tmp_name'],UPLOAD_STUDENT_IMAGE.$image);
            $sql="update `users` set  `name`='$name',`roll`='$roll', `fName`='$fName',`fOccupation`='$fOccupation',`mName`='$mName',`mOccupation`='$mOccupation',`phoneNumber`='$phoneNumber',`permanentAddress`='$permanentAddress',`dob`='$dob',`gender`='$gender',`religion`='$religion',`birthId`='$birthId',`ffQuata`='$ffQuata',`bloodGroup`='$bloodGroup',`examRoll`='$examRoll',`merit`='$merit',`legalGuardianName`='$legalGuardianName',`legalGuardianRelation`='$legalGuardianRelation',`image`='$image', `email`='$email', `dept_id`='$dept_id'  where md5(id)='$id'";
            mysqli_query($con,$sql);
        }else{
            $sql="update `users` set  `name`='$name', `roll`='$roll',`fName`='$fName',`fOccupation`='$fOccupation',`mName`='$mName',`mOccupation`='$mOccupation',`phoneNumber`='$phoneNumber',`permanentAddress`='$permanentAddress',`dob`='$dob',`gender`='$gender',`religion`='$religion',`birthId`='$birthId',`ffQuata`='$ffQuata',`bloodGroup`='$bloodGroup',`examRoll`='$examRoll',`merit`='$merit',`legalGuardianName`='$legalGuardianName',`legalGuardianRelation`='$legalGuardianRelation',`image`='$image', `email`='$email' , `dept_id`='$dept_id' where  md5(id)='$id'";
            mysqli_query($con,$sql);
        }
        $_SESSION['UPDATE']=1;
    }
    echo $sql;
    // redirect('./users.php');
}
?>
<div class="dashboard-content-one">
    <!-- Breadcubs Area Start Here -->
    <div class="breadcrumbs-area">
        <h3>Books</h3>
        <ul>
            <li>
                <a href="index.php">Home</a>
            </li>
            <li>Manage Books</li>
        </ul>
    </div>
    <!-- Breadcubs Area End Here -->

    <!-- Admit Form Area Start Here -->
    <div class="card height-auto">
        <div class="card-body">
            <div class="heading-layout1">
                <div class="item-title">
                    <h3>Books Details</h3>
                </div>
            </div>
            <form class="new-added-form validate" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Title *</label>
                        <input type="text" class="form-control book-field-title tooltipstered" id="book-title"
                            autocomplete="off" name="title" value="">
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Subtitle *</label>
                        <input type="text" class="form-control book-field-title tooltipstered" id="book-title"
                            autocomplete="off" name="sub_title" value="">
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>ISBN 10 *</label>
                        <input type="text" class="form-control book-field-title tooltipstered" id="book-title"
                            autocomplete="off" name="isbn10" value="">
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>ISBN 13 *</label>
                        <input type="text" class="form-control book-field-title tooltipstered" id="book-title"
                            autocomplete="off" name="isbn13" value="">
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Department *</label>
                        <input type="text" class="form-control book-field-title tooltipstered" id="book-title"
                            autocomplete="off" name="department" value="">
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Publisher *</label>
                        <input type="text" class="form-control book-field-title tooltipstered" id="book-title"
                            autocomplete="off" name="publisher" value="">
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Gender *</label>
                        <!-- <select name="publisherId" id="publisherId" class="form-control select-2">
                        </select> -->
                        <!-- <select class="js-data-example-ajax"></select> -->
                        <select id="mySelect2"></select>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Authors *</label>
                        <select name="authors" id="authors" class="form-control select-2">
                        </select>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Genres *</label>
                        <input type="text" class="form-control book-field-title tooltipstered" id="book-title"
                            autocomplete="off" name="genres" value="">
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Tags *</label>
                        <input type="text" class="form-control book-field-title tooltipstered" id="book-title"
                            autocomplete="off" name="tags" value="">
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Edition *</label>
                        <input type="text" class="form-control book-field-title tooltipstered" id="book-title"
                            autocomplete="off" name="edition" value="">
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Published Year *</label>
                        <input type="text" class="form-control book-field-title tooltipstered" id="book-title"
                            autocomplete="off" name="published_year" value="">
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Pages *</label>
                        <input type="text" class="form-control book-field-title tooltipstered" id="book-title"
                            autocomplete="off" name="pages" value="">
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Store *</label>
                        <input type="text" class="form-control book-field-title tooltipstered" id="book-title"
                            autocomplete="off" name="sub_title" value="">
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Price *</label>
                        <input type="text" class="form-control book-field-title tooltipstered" id="book-title"
                            autocomplete="off" name="price" value="">
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Langauge *</label>
                        <input type="text" class="form-control book-field-title tooltipstered" id="book-title"
                            autocomplete="off" name="language" value="">
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12 note-editing-area">
                        <label>Description *</label>
                        <textarea id="summernote" name="editordata"></textarea>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Notes *</label>
                        <textarea id="summernote" name="editordata"></textarea>
                    </div>
                    <!-- <div class="col-lg-6 col-12 form-group">
                        <div class="col-sm-12 img-body">
                            <div class="center">
                                <div class="form-input">
                                    <div class="preview">
                                        <img id="file_ip_1-preview" <?php if($image!=''){
                                                    echo 'src="'.STUDENT_IMAGE.$image.'"';}
                                                    ?> style="width:200px;height: 200px">
                                    </div>
                                    <label for="file_ip_1">Upload Image</label>
                                    <input type="file" name="image" id="file_ip_1" accept="image/*"
                                        onchange="showPreview(event);" <?php echo $required?>
                                        value="<?php echo $image?>">
                                </div>
                            </div>
                            <script type="text/javascript">
                            function showPreview(event) {
                                if (event.target.files.length > 0) {
                                    var src = URL.createObjectURL(event.target.files[0]);
                                    var preview = document.getElementById("file_ip_1-preview");
                                    preview.src = src;
                                    preview.style.display = "block";
                                }
                            }
                            </script>
                        </div>

                    </div> -->
                    <div class="col-12 form-group mg-t-8">
                        <button type="submit" name="submit"
                            class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Save</button>
                        <!-- <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button> -->
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Admit Form Area End Here -->
    <?php include('footer.php');?>


    <script>
    $('#mySelect2').select2({
        ajax: {
            url: 'https://api.github.com/orgs/select2/repos',
            data: function(params) {
                var query = {
                    search: params.term,
                    type: 'public'
                }
                // Query parameters will be ?search=[term]&type=public
                return query;
            }
        }
    });
    </script>