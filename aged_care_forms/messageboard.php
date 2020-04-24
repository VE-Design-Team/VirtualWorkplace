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
<!--include common/nav-->

<head>
    <script>
    if (sessionStorage.getItem('authState') === null) {
        window.location.href = "./agedcareform"
    } else exit()
    </script>
</head>

<body></body>
<div class="content">
    <div class="push mt-5"></div>
    <div class="container p-5 page rounded-lg">
        <div class="row no-gutters">
            <div class="col-12">
                <h3>Messageboard</h3>
            </div>
            <div class="col-12">
                <form class="form-inline float-right row">
                    <div class="col-6"><label class="sm" for="inlineFormInput">From date:</label><input
                            class="form-control mb-2 mr-sm-2 ml-sm-2 form-control-sm" id="inlineFormInput" type="text"
                            disabled="" /></div>
                    <div class="col-6"><label class="sm" for="inlineFormInputGroup">To date:</label><input
                            class="form-control mr-sm-2 ml-sm-2 mb-2 form-control-sm" id="inlineFormInputGroup"
                            type="text" disabled="" /></div>
                </form>
            </div>
            <div class="row ml-0 mr-0 mt-0 mb-4 shadow bg-white rounded-lg p-0 col-12">
                <!-- Table-->
                <table class="table table-striped table-hover mb-0" role="table" id="tablePreview">
                    <!-- Table head-->
                    <thead role="rowgroup">
                        <tr role="row">
                            <th class="w-20" role="columnheader">Mark as read</th>
                            <th class="w-20" role="columnheader">Name</th>
                            <th class="w-40" role="columnheader">Subject</th>
                            <th class="w-10" role="columnheader">Date</th>
                            <th class="w-10" role="columnheader">Time</th>
                        </tr>
                    </thead><!-- Table head-->
                    <!-- Table body-->
                    <tbody class="message" role="rowgroup">
                        <tr class="accordion-toggle" data-toggle="collapse" aria-expanded="true" data-target="#demo1"
                            onclick="messageOne()">
                            <td class="custom-control custom-checkbox mx-0 text-center"><input
                                    class="custom-control-input position-relative" id="customCheck1"
                                    type="checkbox" /><label class="custom-control-label" for="customCheck1"></label>
                            </td>
                            <td>Admin</td>
                            <td>Message#1</td>
                            <td id="inbox1"></td>
                            <td id="time1"></td>
                        </tr>
                        <tr>
                            <td class="hiddenRow p-0" colspan="6">
                                <div class="accordian-body collapse p-4" id="demo1"> Mr. Huang has complained people
                                    have stolen his property, but he has dementia and we can’t find any evidence this
                                    has actually happened. Please make sure you always enter his room with two people so
                                    there is a witness to all activity.</div>
                            </td>
                        </tr>
                        <tr class="accordion-toggle" data-toggle="collapse" aria-expanded="true" data-target="#demo2"
                            onclick="messageTwo()">
                            <td class="custom-control custom-checkbox mx-0 text-center"><input
                                    class="custom-control-input position-relative" id="customCheck2"
                                    type="checkbox" /><label class="custom-control-label" for="customCheck2"></label>
                            </td>
                            <td>Admin</td>
                            <td>Message#2</td>
                            <td id="inbox2"></td>
                            <td id="time2"></td>
                        </tr>
                        <tr>
                            <td class="hiddenRow p-0" colspan="6">
                                <div class="accordian-body collapse p-4" id="demo2"> Dear valued staff
                                    member,<br />There is a compulsory meeting today in the staff room at 14:00.
                                    All staff are required to attend.</div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="row p-0 m-0 float-right"><a class="btn btn-primary float-right" onclick="route()"> Proceed</a>
                <!--a.btn.btn-primary(href='foodrecord.html')  Add New-->
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="messageModal" tabindex="-1" role="dialog" aria-labelledby="MessageBoardErrorModal"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="messageModalLabel">Notice</h5><button class="close" type="button"
                    data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">Please read all messages to proceed</div>
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