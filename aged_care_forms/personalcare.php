<div class="content">
   
    <div class="container p-5 page rounded-lg">
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