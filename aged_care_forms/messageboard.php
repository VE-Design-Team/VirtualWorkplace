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