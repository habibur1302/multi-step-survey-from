<?php
include('header.php');
include('multi_form_action.php');
?>
    <script type="text/javascript" src="script/form.js"></script>
    <style>
        textarea
        {
            width:100%;
        }
        .box {
            width: 800px;
            margin: 0 auto;
        }

        .active_tab1 {
            background-color: #fff;
            color: #333;
            font-weight: 600;
        }

        .inactive_tab1 {
            background-color: #f5f5f5;
            color: #333;
            cursor: not-allowed;
        }

        .has-error {
            border-color: #cc0000;
            background-color: #ffff99;
        }
    </style>
    <br/>
    <div class="container box">
        <br/>
        <h2 align="center">Multi Step Survey From</h2><br/>
        <?php
        if (isset($_SESSION['message'])): ?>
            <div class="alert alert-success">
                <?php
                echo $_SESSION['message'];
                unset($_SESSION['message']);
                ?>
            </div>
        <?php endif;
        if (isset($_SESSION['error_message'])): ?>
            <div class="alert alert-danger">
                <?php
                echo $_SESSION['error_message'];
                unset($_SESSION['error_message']);
                ?>
            </div>
        <?php endif; ?>
        <form method="post" action="multi_form_action.php" id="register_form">
            <div class="tab-content" style="margin-top:16px;">
                <div class="tab-pane active" id="step1">
                    <div class="panel panel-default">
                        <div class="panel-heading">Step 1 :</div>
                        <div class="panel-body">
                            <div align="center">
                                <button type="button" name="btn_step1" id="btn_step1"
                                        class="btn btn-info btn-lg">Lets Start
                                </button>
                            </div>
                            <br/>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="step2">
                    <div class="panel panel-default">
                        <div class="panel-heading">Step 2 :</div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label>Enter Your Name *</label>
                                <input type="text" name="name" id="name" placeholder="Enter Your Name" class="form-control"/>
                                <span id="error_name" class="text-danger"></span>
                            </div>
                            <br/>
                            <div align="center">
                                <button type="button" name="previous_btn_step1"
                                        id="previous_btn_step1" class="btn btn-default btn-lg">Previous
                                </button>
                                <button type="button" name="btn_step2" id="btn_step2"
                                        class="btn btn-info btn-lg">Next
                                </button>
                            </div>
                            <br/>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="step3">
                    <div class="panel panel-default">
                        <div class="panel-heading">Step 3 :</div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label>Enter Your Email *</label>
                                <input type="text" name="email" id="email" placeholder="Enter Your Email" class="form-control"/>
                                <span id="error_email" class="text-danger"></span>
                            </div>
                            <br/>
                            <div align="center">
                                <button type="button" name="previous_btn_step2"
                                        id="previous_btn_step2" class="btn btn-default btn-lg">Previous
                                </button>
                                <button type="button" name="btn_step3" id="btn_step3"
                                        class="btn btn-info btn-lg">Next
                                </button>
                            </div>
                            <br/>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="step4">
                    <div class="panel panel-default">
                        <div class="panel-heading">Step 4 :</div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label>Select Your Profession *</label>
                                <label class="radio-inline">
                                    <input type="radio" id="profession" name="profession" value="developer"> Developer
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" id="profession" name="profession" value="designer"> Designer
                                </label>
                                <span id="error_profession" class="text-danger"></span>
                            </div>
                            <br/>
                            <div align="center">
                                <button type="button" name="previous_btn_step3"
                                        id="previous_btn_step3" class="btn btn-default btn-lg">Previous
                                </button>
                                <button type="button" name="btn_step4" id="btn_step4"
                                        class="btn btn-info btn-lg">Next
                                </button>
                            </div>
                            <br/>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="step5">
                    <div class="panel panel-default">
                        <div class="panel-heading">Step 5 :</div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label>Which Programing Language Are You Using *</label>
                                <textarea rows="5" placeholder="PHP,OOP," id="language" name="language"></textarea><br />
                                <span id="error_language" class="text-danger"></span>
                            </div>
                            <br/>
                            <div align="center">
                                <button type="button" name="previous_btn_step4"
                                        id="previous_btn_step4" class="btn btn-default btn-lg">Previous
                                </button>
                                <button type="button" name="btn_step5" id="btn_step5"
                                        class="btn btn-info btn-lg">Next
                                </button>
                            </div>
                            <br/>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="step6">
                    <div class="panel panel-default">
                        <div class="panel-heading">Step 5 :</div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label>Which Design Tools Are You Using *</label>
                                <textarea id="design" name="design" rows="5" placeholder="Photoshop,Sketch,XD"></textarea><br />
                                <span id="error_design" class="text-danger"></span>
                            </div>
                            <br/>
                            <div align="center">
                                <button type="button" name="previous_btn_step5"
                                        id="previous_btn_step5" class="btn btn-default btn-lg">Previous
                                </button>
                                <button type="button" name="btn_step6" id="btn_step6"
                                        class="btn btn-info btn-lg">Next
                                </button>
                            </div>
                            <br/>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="step7">
                    <div class="panel panel-default">
                        <div class="panel-heading">Step 6 :</div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label>Total Year Of Experience *</label>
                                <input type="number" name="experience" id="experience" placeholder="Enter Your Experience" class="form-control"/>
                                <span id="error_experience" class="text-danger"></span>
                            </div>
                            <br/>
                            <div align="center">
                                <button type="button" name="previous_btn_step5_6"
                                        id="previous_btn_step5_6" class="btn btn-default btn-lg">Previous
                                </button>
                                <button type="button" name="btn_step7" id="btn_step7"
                                        class="btn btn-info btn-lg">Submit
                                </button>
                            </div>
                            <br/>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
<?php include('../footer.php'); ?>