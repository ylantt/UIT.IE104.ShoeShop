<?php 
include "login-first.php";
include "template/header.php";
include "template/nav.php"; 

if (isset($data["status"])) {
  if ($data["status"] === "success") {
    echo '<div>Change user info successfully!</div>';
  } else {
    echo '<div>Something went wrong! Please try again</div>';
  } 
} ?>
<div class = "flex_container">
    <div class = "left_flex_container">
        <img src="./public/images/undraw_personalization.svg"/>
    </div>
    
    <div class = "right_flex_container">
        <div class ="account__text">
            <h3>My account</h3>
        </div>
        <hr/>
        <form method="POST" action="/account/updateDB/<?= $data["info"]["UserID"] ?>" class = "info_container_flex">
                <div class = "info_container_style">
                    <label for="username">Username:</label></br>
                    <input type="text" id="UsrName" name="Username" class ="text_info_style" value="<?= $data["info"]["Username"] ?>" readonly>
                </div>
                <div class = "info_container_style">
                    <label for="FullName">Full name:</label></br>
                    <input type="text" id="FullName" value="<?= $data["info"]["FullName"] ?>"  name="FullName" class ="text_info_style">
                </div>
                <div class = "info_container_style">
                    <label for="Phone_number">Phone number:</label></br>
                    <input type="text" id="PhoneNum" value="<?= $data["info"]["Phone"] ?>" name="PhoneNum" onkeypress="return isNumberKey(event);" class ="text_info_style">
                </div>
                <div class = "info_container_style">
                    <label for="email_info">Email:</label></br>
                    <input type="hidden" name="oEmail" value="<?= $data["info"]["Email"] ?>">
                    <input type="text" id="Email" name="Email" value="<?= $data["info"]["Email"] ?>" class ="text_info_style">
                </div>
                <div class = "info_container_style">
                    <label for="addr_info">Address:</label></br>
                    <input type = "text" id="AddrInfo" name="AddrInfo" value="<?= $data["info"]["Address"] ?>" class ="address_info_style" >
                </div>
                <input class="account__SaveBtn" type="submit" name="submit" value="Save changes"/>     
        </div>
    </div>
</div>
<script>
    function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : evt.keyCode
    return !(charCode > 31 && (charCode < 48 || charCode > 57));
}
</script>

<?php
include "template/footer.php";
?>

