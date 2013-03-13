<?php $this->load->view('includes/header') ?>
<script>
    $(document).ready(

    function()
    {

<?php $data['selected_nav'] = "login_navbar";
$this->load->view('includes/nav_helper', $data) ?>

    });
</script>
</head>
<body>

    <?php $this->load->view('includes/navigation') ?>


    <?php echo validation_errors(); ?>
    <div id="login">


        <?php
        echo form_open('employee_auth/login');
        ?>
        <div class="row-fluid">
            <div class="span4"></div>
                <div class="span5">

        <fieldset>
            <legend>Log In</legend>
            <label>Name</label>
            <input type="text" placeholder="type name here" name="name">
            <label>Password</label>
            <input type="password" placeholder="Write you password here!!" name="password">
            <br/>

        </fieldset>
                   <input type="submit" class="btn btn-success"  value="Login" />

                            </div>
             <div class="span3"></div>

        </div>

</div>

<?php $this->load->view('includes/footer') ?>
