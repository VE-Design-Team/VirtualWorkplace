<!DOCTYPE html.no-js(lang='en-au' )>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="author" content="RMITs Vocational Education Design Team" />
    <meta name="description" content="A training resource for teaching digital literacy in health care delivery" />
    <meta name="keywords" content="Aged Care, Digital Literacy" />
    <meta charset="UTF-8" />
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png" />
    <link rel="manifest" href="/site.webmanifest" />
    <link type="text/plain" rel="author" href="/humans.txt" />
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5" />
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="theme-color" content="#ffffff" />
    <title>Bagwan Aged Care Facility</title>&#x9;
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/aged_care_forms/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/aged_care_forms/css/all.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/aged_care_forms/css/sumoselect.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/aged_care_forms/css/main.css" />
</head><!-- Header-->
<div class="row p-2 mb-5 ml-0 mr-0 header position-absolute w-100">
    <div class="container"> <img class="logo" src="<?php echo get_stylesheet_directory_uri(); ?>/aged_care_forms/img/logo_white.png" alt="Bagwan Aged Care Facility" /><a
            class="text-white float-right mt-3" href="login.html"> Logout</a></div>
</div>


<div class="content">
    <div class="push mt-5"></div>
    <div class="container p-5 mb-5 page rounded-lg">
        <div id="error-message"> </div>
        <legend>Personal care<table class="table table-striped table-hover" role="table" id="tablePreview">
                <thead role="rowgroup">
                    <tr role="row">
                        <th role="columnheader">Date<i class="fas fa-question-circle btn-sm" data-container="body"
                                data-toggle="popover" data-trigger="hover" data-placement="top"
                                data-content="Select the large triangle to open the calendar and use today’s date."></i>
                        </th>
                        <th role="columnheader">Time <i class="fas fa-question-circle btn-sm" data-container="body"
                                data-toggle="popover" data-trigger="hover" data-placement="top"
                                data-content="Enter the hours or minutes input (HH:MM) "></i></th>
                        <th role="columnheader">ADL<i class="fas fa-question-circle btn-sm" data-container="body"
                                data-toggle="popover" data-trigger="hover" data-placement="top"
                                data-content="Check the Activities of Daily Living performed"></i></th>
                        <th role="columnheader">Comments<i class="fas fa-question-circle btn-sm" data-container="body"
                                data-toggle="popover" data-trigger="hover" data-placement="top"
                                data-content="Include any additional information or changes to the care plan"></i></th>
                        <th role="columnheader">Role<i class="fas fa-question-circle btn-sm" data-container="body"
                                data-toggle="popover" data-trigger="hover" data-placement="top"
                                data-content="This uses your login details to fill automatically "></i></th>
                    </tr>
                </thead>
                <tbody class="personal" role="rowgroup" id="tableToModify">
                    <tr role="row" id="rowToClone">
                        <td role="cell"><input class="dtPicker personalcare form-control form-control-sm" type="date"
                                placeholder="dd/mm/yyyy" min="1990-01-01" max="2040-12-31" /></td>
                        <td role="cell"><input class="personalcare form-control form-control-sm" id="time" type="text"
                                pattern="d{1,2}:d{1,2}" maxlength="5" name="time" placeholder="HH:MM" min="00:00"
                                max="23:00" required="required" /></td>
                        <td role="cell"><select class="testselect2 personalcare form-control form-control-sm SlectBox"
                                multiple="multiple" data-live-search="true" name="test[]">
                                <option value="Shower">Shower</option>
                                <option value="Wash">Wash</option>
                                <option value="Hair washed">Hair Washed</option>
                                <option value="Oral care">Oral care</option>
                                <option value="Shave">Shave</option>
                                <option value="Fingernails">Fingernails</option>
                                <option value="Toenails">Toenails</option>
                                <option value="Trolley bath">Trolley bath</option>
                                <option value="Moisturizer">Moisturizer</option>
                            </select></td>
                        <td role="cell"><textarea class="personalcare form-control" name="story" rows="3"
                                cols="33"></textarea></td>
                        <td role="cell"><input class="personalcare form-control form-control-sm" type="text" name="role"
                                value="PCA" disabled="disabled" /></td>
                    </tr>
                </tbody>
            </table>
        </legend><a class="btn btn-sm btn-primary mr-3" href="./patientrecord"><i class="fas fa-arrow-left"> </i>
            Back</a><a class="btn btn btn-sm btn-primary" onclick="checkInputPC()">Download to PDF</a><i
            class="fas fa-question-circle btn-sm pb-3 mr-3" data-container="body" data-toggle="popover"
            data-trigger="hover" data-placement="top"
            data-content="Prints the information you recorded into a document"></i>
        <!--a#submit.btn.btn.btn-sm.btn-primary(href='foodrecord.html')  Submit Entries--><a
            class="btn btn btn-sm btn-primary" onclick="addRows()">Add row</a><i
            class="fas fa-question-circle btn-sm pb-3" data-container="body" data-toggle="popover" data-trigger="hover"
            data-placement="top"
            data-content="Creates another row to record activities you performed at another time"></i>
    </div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="errorModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Error Message</h5><button class="close" type="button"
                    data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">Please enter all the fields correctly</div>
            <div class="modal-footer"><button class="btn btn-secondary" type="button"
                    data-dismiss="modal">Close</button></div>
        </div>
    </div>
</div>
<div class="modal fade" id="rowModal" tabindex="-1" role="dialog" aria-labelledby="rowAlertModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="rowModalLabel">Error message</h5><button class="close" type="button"
                    data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">Row limit exceeded</div>
            <div class="modal-footer"><button class="btn btn-secondary" type="button"
                    data-dismiss="modal">Close</button></div>
        </div>
    </div>
</div>
<!--footer-->
<div id="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <!--span footer-->
            </div>
        </div>
    </div>
</div>
<!--Footer scripts, delete as required-->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/aged_care_forms/js/vendor/jquery-2.2.4.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/aged_care_forms/js/popper.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/aged_care_forms/js/vendor/bootstrap.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/aged_care_forms/js/easing.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/aged_care_forms/js/hoverIntent.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/aged_care_forms/js/superfish.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/aged_care_forms/js/jquery.ajaxchimp.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/aged_care_forms/js/jquery.magnific-popup.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/aged_care_forms/js/jquery-ui.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/aged_care_forms/js/owl.carousel.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/aged_care_forms/js/jquery.nice-select.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/aged_care_forms/js/mail-script.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/aged_care_forms/js/main.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/aged_care_forms/js/script.js"> </script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/aged_care_forms/js/save_localstorage.js"> </script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/aged_care_forms/js/personalcare.js"> </script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/aged_care_forms/js/continence.js"> </script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/aged_care_forms/js/abbeyscale.js"> </script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/aged_care_forms/js/messageboard.js"> </script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/aged_care_forms/js/jquery.sumoselect.min.js"> </script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/aged_care_forms/js/bootstrap.min.js"> </script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/aged_care_forms/js/jspdf.min.js"> </script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/aged_care_forms/js/jspdf.plugin.autotable.js"> </script>
<footer class="footer p-3 bottom">Copyright @ Bagwan Aged Care Facility 2019 All right reserved. Address: Building 11,
    127 Latrobe Street, Melbourne. Email:<a
        href="emailto:support@bagwanagecare.com.au">support@bagwanagecare.com.au</a>. Tel:<a href="tel:+610000000">+61 1
        234 5678</a></footer>