<div class="content">
    <div class="push mt-5"></div>
    <div class="container p-5 mb-5 page rounded-lg">
        <legend> Pain - Abbey scale</legend>
        <div id="reset">
            <table class="table table-striped table-hover" id="tablePreviewAbbey">
                <thead>
                    <tr>
                        <th scope="col">Date<i class="fas fa-question-circle btn-sm" data-container="body"
                                data-toggle="popover" data-trigger="hover" data-placement="top"
                                data-content="Select the large triangle to open the calendar and use today’s date."></i>
                        </th>
                        <th scope="col">Time<i class="fas fa-question-circle btn-sm" data-container="body"
                                data-toggle="popover" data-trigger="hover" data-placement="top"
                                data-content="Enter the hours or minutes input (HH:MM)"></i></th>
                        <th scope="col">Location<i class="fas fa-question-circle btn-sm" data-container="body"
                                data-toggle="popover" data-trigger="hover" data-placement="top"
                                data-content="Which area of the resident’s body is the pain located"></i></th>
                        <th scope="col">Verbal/Non-verbal<i class="fas fa-question-circle btn-sm" data-container="body"
                                data-toggle="popover" data-trigger="hover" data-placement="top"
                                data-content="Is the resident able to speak to assist you with your questions"></i></th>
                        <th scope="col">Comments<i class="fas fa-question-circle btn-sm" data-container="body"
                                data-toggle="popover" data-trigger="hover" data-placement="top"
                                data-content="Record any information which may be of assistance"></i></th>
                    </tr>
                </thead>
                <tbody id="tableToModify2">
                    <tr id="rowToClone2" scope="row">
                        <td class="col date"><label class="title">Date</label><input
                                class="abbeyscale form-control form-control-sm" type="date" placeholder="dd/mm/yyyy"
                                min="1990-01-01" max="2040-12-31" /></td>
                        <td class="col time"><label class="title">Time</label><input
                                class="abbeyscale form-control form-control-sm" id="time" type="text"
                                pattern="d{1,2}:d{1,2}" maxlength="5" name="time" placeholder="HH:MM" min="00:00"
                                max="23:00" required="required" /></td>
                        <td class="col location"><label class="title">Location</label><select
                                class="abbeyscale contrecord form-control-sm form-control d-inline">
                                <option disabled="" selected="" value=""> select</option>
                                <option value="Generalised">Generalised</option>
                                <option value="Head">Head</option>
                                <option value="Upper torso">Upper torso</option>
                                <option value="Lower torso">Lower torso</option>
                                <option value="Right arm">Right arm</option>
                                <option value="Left arm">Left arm</option>
                                <option value="Right leg">Right leg</option>
                                <option value="Left leg">Left leg</option>
                            </select></td>
                        <td class="col verbal"><label class="title">Verbal/Non verbal</label><select
                                class="abbeyscale align-top continOption contrecord form-control-sm form-control d-inline">
                                <option disabled="" selected="" value=""> select</option>
                                <option value="Verbal">Verbal
                                <option value="Non Verbal">Non Verbal</option>
                                </option>
                            </select></td>
                        <td class="col comments"><label class="title">Comments</label><textarea
                                class="abbeyscale form-control" name="story"></textarea></td>
                        <table class="table table-striped table-hover" id="tablePreviewAbbey">
                            <thead>
                                <tr>
                                    <th class="vocalisation" scope="col">
                                        <h3 class="h6">Vocalisation</h3>
                                        <p class="font-weight-normal small"> (e.g whimpering,groaning,crying)</p>
                                    </th>
                                    <th class="physiological" scope="col">
                                        <h3 class="h6">Physiological change</h3>
                                        <p class="font-weight-normal small">(e.g temperature pulse or blood pressure
                                            outside normal limits,perspiring,flushing or pallor)</p>
                                    </th>
                                    <th class="physical" scope="col">
                                        <h3 class="h6">Physical change</h3>
                                        <P class="font-weight-normal small">(e.g skin tears,pressure
                                            areas,arthritis,contractures,previous injuries)</P>
                                    </th>
                                </tr>
                            </thead>
                            <tbody id="tableToModify2">
                                <tr id="rowToClone2" scope="row">
                                    <td><label class="title">Vocalisation<small> (e.g
                                                whimpering,groaning,crying)</small></label><select
                                            class="abbeyscale form-control-sm" name="score[1]">
                                            <option disabled="" selected="" value=""> select</option>
                                            <option value="0">0 - Absent</option>
                                            <option value="1">1 - Mild</option>
                                            <option value="2">2 - Moderate</option>
                                            <option value="3">3 - Severe</option>
                                        </select></td>
                                    <td><label class="title">Physiological change<small> (e.g temperature pulse or blood
                                                pressure outside normal limits,perspiring,flushing or
                                                pallor)</small></label><select class="abbeyscale form-control-sm"
                                            name="score[2]">
                                            <option disabled="" selected="" value=""> select</option>
                                            <option value="0">0 - Absent</option>
                                            <option value="1">1 - Mild</option>
                                            <option value="2">2 - Moderate</option>
                                            <option value="3">3 - Severe </option>
                                        </select></td>
                                    <td><label class="title">Physical change<small>(e.g skin tears,pressure
                                                areas,arthritis,contractures,previous injuries) </small></label><select
                                            class="abbeyscale form-control-sm" name="score[3]">
                                            <option disabled="" selected="" value=""> select</option>
                                            <option value="0">0 - Absent</option>
                                            <option value="1">1 - Mild</option>
                                            <option value="2">2 - Moderate</option>
                                            <option value="3">3 - Severe</option>
                                        </select></td>
                                </tr>
                            </tbody>
                            <table class="table table-striped table-hover" id="tablePreviewAbbey">
                                <thead>
                                    <tr scope="row">
                                        <th scope="col">
                                            <h3 class="h6">Facial expression</h3>
                                            <p class="font-weight-normal small">(e.g looking
                                                tense,frowning,grimacing,looking frightened)</p>
                                        </th>
                                        <th scope="col">
                                            <h3 class="h6">Change in body language</h3>
                                            <p class="font-weight-normal small">(e.g fidgeting,rocking,guarding part of
                                                body,withdrawn)</p>
                                        </th>
                                        <th scope="col">
                                            <h3 class="h6">Behavioural change</h3>
                                            <p class="font-weight-normal small">(e.g fidgeincreased confusion,refusing
                                                to eat,alteration in usual patterns)</p>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody id="tableToModify2">
                                    <tr id="rowToClone2">
                                        <td class="facial" scope="col"><label class="title">Facial expression<small>
                                                    (e.g looking tense,frowning,grimacing,looking frightened)
                                                </small></label><select class="abbeyscale form-control-sm"
                                                name="score[4]">
                                                <option disabled="" selected="" value=""> select</option>
                                                <option value="0">0 - Absent</option>
                                                <option value="1">1 - Mild</option>
                                                <option value="2">2 - Moderate</option>
                                                <option value="3">3 - Severe</option>
                                            </select></td>
                                        <td class="change" scope="col"><label class="title">Change in body language
                                                <small> (e.g fidgeting,rocking,guarding part of
                                                    body,withdrawn)</small></label><select
                                                class="abbeyscale form-control-sm" name="score[5]">
                                                <option disabled="" selected="" value=""> select</option>
                                                <option value="0">0 - Absent</option>
                                                <option value="1">1 - Mild</option>
                                                <option value="2">2 - Moderate</option>
                                                <option value="3">3 - Severe </option>
                                            </select></td>
                                        <td class="behaviour" scope="col"><label class="title">Behavioural change<small>
                                                    (e.g fidgeincreased confusion,refusing to eat,alteration in usual
                                                    patterns)</small></label><select class="abbeyscale form-control-sm"
                                                name="score[6]">
                                                <option disabled="" selected="" value=""> select</option>
                                                <option value="0">0 - Absent</option>
                                                <option value="1">1 - Mild</option>
                                                <option value="2">2 - Moderate</option>
                                                <option value="3">3 - Severe</option>
                                            </select></td>
                                    </tr>
                                </tbody>
                            </table>
                        </table>
                    </tr>
                </tbody>
            </table>
        </div>
        <div id="abb"></div>
        <div class="row">
            <div class="col-12"><br /><strong>Total Pain Score</strong> <input class="abbeyscale form-control-sm"
                    id="total" type="text" maxlength="4" size="4" name="total" disabled="disabled" /><i
                    class="fas fa-question-circle btn-sm" data-container="body" data-toggle="popover"
                    data-trigger="hover" data-placement="top"
                    data-content="This number is automatically generated from the numbers you record above"></i>
                <div class="row pt-4 position-inherit float-none"><a class="btn btn-sm btn-primary mr-3"
                        href="./patientrecord"><i class="fas fa-arrow-left"></i> Back</a><a
                        class="btn btn btn-sm btn-primary mr-2" onclick="checkInputAbbey()"> Download to PDF</a><i
                        class="fas fa-question-circle btn-sm" data-container="body" data-toggle="popover"
                        data-trigger="hover" data-placement="top"
                        data-content="Prints the information you recorded into a document"></i></div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Error Message</h5><button class="close" type="button"
                    data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">Please fill in all fields.</div>
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