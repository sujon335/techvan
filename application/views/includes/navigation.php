<div class="navbar">
    <div class="navbar-inner">
        <a class="brand" href="<?php echo site_url(); ?>">Techvan Properties limited</a>
        <ul class="nav">
            <li id="home_navbar"><a href="<?php echo site_url(); ?>">Home</a></li>
            <li id="project_navbar"><a href="">Project list</a></li>

            <?php
            $is_logged_in_admin = $this->session->userdata('is_logged_in_admin');
            $is_logged_in_employee = $this->session->userdata('is_logged_in_employee');

            if ((!isset($is_logged_in_admin) || $is_logged_in_admin != true) && (!isset($is_logged_in_employee) || $is_logged_in_employee != true)) {
                //NOT LOGGED  IN admin and employee
            ?>
                <li class="dropdown"  id="login_navbar">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      Login Panel
                      <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a tabindex="-1" href="<?php echo site_url('admin_auth/login'); ?>">Admin Login</a></li>
                          <li class="divider"></li>
                          <li><a tabindex="-1" href="<?php echo site_url('employee_auth/login'); ?>">Employee Login</a></li>

                    </ul>

                </li>


                
            <?php
            } else {
                //LOGGED IN
            ?>

              <?php   if (!isset($is_logged_in_admin) || $is_logged_in_admin != true)
                {
                  //emploee is logged in employee nabbars
                    ?>
                  <li id="meeting_navbar"><a href="">meeting</a></li>
                  <li id="create_client_navbar"><a href="">Create Client Profile</a></li>
                  <li id="suggestion_navbar"><a href="">Suggestions of admin</a></li>

                  <?php } else  {
                      //admin is logged in
                      ?>

            <li id="employee_navbar"><a href="">Employee list</a></li>
            <li id="client_navbar"><a href="">Client list</a></li>
            <li id="setting_navbar"><a href=""> Settings </a></li>
            <li id="suggestion_giving"><a href="">Give suggestion</a></li>
                  <?php  }?>

                <li><a href="<?php echo site_url('admin_auth/logout'); ?>"> Log Out!! </a></li>



            <?php
            }
            ?>


        </ul>
    </div>
</div>

