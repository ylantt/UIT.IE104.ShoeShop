<?php
include "template/header.php";
include "template/nav.php"; ?>
    <div class="register" align="center">
            <form action="#" >
                <div class="reg_form">
                        <h2 class="reg_title">Register</h2>
                        <p class="p-reg">
                            <label for="reg_username" class="reg-lab">Username</label>
                            <input type="text" id="reg_username" required>
                        </p>
                        <p class="p_reg">
                            <label for="reg_fname" class="reg_lab">First name</label>
                            <input type="text" id="reg_fname" required>
                        </p>
                        <p class="p_reg">
                            <label for="reg_lname" class="reg_lab">Last name</label>
                            <input type="text" id="reg_lname" required>
                        </p>
                        <p class="p_reg">
                            <label for="reg_email" class="reg_lab">Email address</label>
                            <input type="text" id="reg_email" required>
                        </p>
                        <p class="p_reg">
                            <label for="reg_phone" class="reg_lab">Phone</label>
                            <input type="tel" id="reg_phone" required>
                        </p>
                        <p class="p_reg">
                            <label for="reg_address" class="reg_lab">Address</label>
                            <input type="text" id="reg_address" required>
                        </p>
                        <p class="p_reg">
                            <label for="reg_pass" class="reg_lab">Password</label>
                            <input type="password" id="reg_pass" required>
                        </p>
                        <p class="p_reg">
                            <label for="reg_copass" class="reg_lab">Confirm Password</label>
                            <input type="password" id="reg_copass" required>
                        </p>
                </div>
                    <div class="reg__act">
                        <button type="submit" class="reg_but">Register</button>
                    </div>
             </form>
        </div>
<?php
include "template/footer.php";
