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
            class="text-white float-right mt-3" href="./agedcareforms"> Logout</a></div>
</div>


<div class="content">
    <div class="push mt-5"></div>
    <div class="container p-5 mb-5 page rounded-lg">
        <legend>Food and Fluids record <table class="table table-striped table-hover" role="table" id="tablePreview">
                <thead role="rowgroup">
                    <tr role="row">
                        <th class="w-15" role="columnheader">Date<i class="fas fa-question-circle btn-sm"
                                data-container="body" data-toggle="popover" data-trigger="hover" data-placement="top"
                                data-content="Select the large triangle to open the calendar and use today’s date."></i>
                        </th>
                        <th class="w-10" role="columnheader">Time<i class="fas fa-question-circle btn-sm"
                                data-container="body" data-toggle="popover" data-trigger="hover" data-placement="top"
                                data-content="Enter the hours or minutes input (HH:MM). Use 24 hour time."></i></th>
                        <th role="columnheader">Food item<i class="fas fa-question-circle btn-sm" data-container="body"
                                data-toggle="popover" data-trigger="hover" data-placement="top"
                                data-content="List all the food items offered and specify items the resident did not eat."></i>
                        </th>
                        <th role="columnheader">Amount taken<i class="fas fa-question-circle btn-sm"
                                data-container="body" data-toggle="popover" data-trigger="hover" data-placement="top"
                                data-content="The amount eaten of the total amount of food offered."></i></th>
                        <th role="columnheader">Time taken<i class="fas fa-question-circle btn-sm" data-container="body"
                                data-toggle="popover" data-trigger="hover" data-placement="top"
                                data-content="How long it took to eat the amount of food they finally consumed."></i>
                        </th>
                        <th role="columnheader">Role<i class="fas fa-question-circle btn-sm" data-container="body"
                                data-toggle="popover" data-trigger="hover" data-placement="top"
                                data-content="Your role is set by your login credentials."></i></th>
                    </tr>
                </thead>
                <tbody class="food" id="tableToModify">
                    <tr role="row" id="rowToClone">
                        <td role="cell"><input class="foodrecord form-control form-control-sm" type="date"
                                placeholder="dd/mm/yyyy" min="1990-01-01" max="2040-12-31" /></td>
                        <td role="cell"><input class="foodrecord form-control form-control-sm" id="time" type="text"
                                pattern="d{1,2}:d{1,2}" maxlength="5" name="time" placeholder="HH:MM" min="00:00"
                                max="23:59" required="required" /></td>
                        <td role="cell"><input class="foodrecord form-control form-control-sm" type="text"
                                placeholder="Enter food item here" /></td>
                        <td role="cell"><select
                                class="foodrecord align-top continOption contrecord form-control-sm form-control d-inline">
                                <option disabled="" selected="" value="">select </option>
                                <option> None</option>
                                <option> Quarter</option>
                                <option> Half</option>
                                <option> Three quarter</option>
                                <option>Full</option>
                            </select></td>
                        <td role="cell"><select
                                class="foodrecord align-top continOption contrecord form-control-sm form-control d-inline">
                                <option disabled="" selected="" value="">select </option>
                                <option value="00:00">00:00</option>
                                <option value="00:15">00:15</option>
                                <option value="00:30">00:30</option>
                                <option value="00:45">00:45</option>
                                <option value="01:00">01:00</option>
                                <option value="01:15">01:15</option>
                                <option value="01:30">01:30</option>
                                <option value="01:45">01:45</option>
                                <option value="02:00">02:00</option>
                            </select></td>
                        <td role="cell"><input class="foodrecord form-control form-control-sm" type="text" name="role"
                                value="PCA" disabled="" /></td>
                    </tr>
                </tbody>
            </table>
        </legend><a class="btn btn-sm btn-primary mr-3" href="./patientrecord"><i class="fas fa-arrow-left"> </i>
            Back</a><a class="btn btn btn-sm btn-primary" onclick="checkInput()"> Download to PDF</a><i
            class="fas fa-question-circle btn-sm pb-3" data-container="body" data-toggle="popover" data-trigger="hover"
            data-placement="top" data-content="Prints the information you recorded into a document"></i>
        <!--a#submit.btn.btn.btn-sm.btn-primary(href='foodrecord.html')  Submit Entries-->
        <!--a#submit.btn.btn.btn-sm.btn-primary Submit Entries-->
        <!--input(type='button', onclick='tableToJson()', value='Submit Entries')--><a
            class="btn btn btn-sm btn-primary ml-4" onclick="addRow()">Add row</a><i
            class="fas fa-question-circle btn-sm pb-3" data-container="body" data-toggle="popover" data-trigger="hover"
            data-placement="top" data-content="Creates another row if you are recording more than one meal"></i>
    </div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="errorModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Error message</h5><button class="close" type="button"
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