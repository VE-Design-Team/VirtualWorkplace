<form class="form-horizontal">
    <fieldset>
        <!-- Form Name-->
        <legend>Personal details (of injured):</legend>
    </fieldset>
</form>
<!--a.btn.btn-sm.btn-primary(href='continence.html')  Urinary record-->
<table class="table table-striped table-hover" role="table" id="tablePreview">
    <thead role="rowgroup">
        <tr role="row">
            <th class="w-30" role="columnheader">First name<i class="fas fa-question-circle btn-sm"
                    data-container="body" data-toggle="popover" data-trigger="hover" data-placement="top"
                    data-content="Enter the first name of the person inovled in the incident"></i>
            </th>
            <th class="w-30" role="columnheader">Surname<i class="fas fa-question-circle btn-sm"
                    data-container="body" data-toggle="popover" data-trigger="hover" data-placement="top"
                    data-content="Enter the surname of the person inovled in the incident."></i>
            </th>
            <th class="w-30" role="columnheader">Postcode<i class="fas fa-question-circle btn-sm"
                    data-container="body" data-toggle="popover" data-trigger="hover" data-placement="top"
                    data-content="Select the large triangle to open the calendar and use today’s date."></i>
            </th>
            <th class="w-10" role="columnheader">Date of birth<i class="fas fa-question-circle btn-sm"
                    data-container="body" data-toggle="popover" data-trigger="hover" data-placement="top"
                    data-content="Select the large triangle to open the calendar and use today’s date."></i>
            </th>
        </tr>
    </thead>
    <tbody class="continence" role="rowgroup" id="tableToModify">
        <tr role="row">
            <td role="cell"><input class="form-control form-control-sm" type="text" placeholder="First name"/></td>
            <td role="cell"><input class="form-control form-control-sm" type="text" placeholder="Surname"/></td>
            <td role="cell"><input class="form-control form-control-sm" type="text" placeholder="Postcode"/></td>
            <td role="cell"><input class="form-control-sm form-control" type="date"
                    placeholder="dd/mm/yyyy" min="1900-01-01" max="2040-12-31" /></td>
        </tr>
</tbody>
<table class="table table-striped table-hover" role="table" id="tablePreview">
<legend>Incident details:</legend>
<thead>
  <tr>
    <th class="w-30">The person involved in the incident was a:</th>
      <th class="w-30">Position</th>
        <th class="w-30">Supervisor's name</th>
        </tr>
  </thead>
<tbody class="" role="rowgroup">
  <tr>
    <td><select class="form-control-sm form-control d-inline">
      <option disabled="" selected="" value=""> select</option>
      <option value="Staff memeber">Staff member </option>
      <option value="Contractor">Contractor</option>
      <option value="Volunteer">Volunteer</option>
      <option value="General public">General public</option>
      <option value="Patient">Patient</option>
</select></td>
    <td role="cell"><input class="form-control form-control-sm" type="text" placeholder="Position"/></td>
    <td role="cell"><input class="form-control form-control-sm" type="text" placeholder="Supervisor's name"/></td>
</tr>
</tbody>

</table>

<table class="table table-striped table-hover" role="table" id="tablePreview">
<legend>Incident details:</legend>
<thead>
  <tr>
    <th class="w-30">The person involved in the incident was a:</th>
      <th class="w-30">Position</th>
        <th class="w-30">Supervisor's name</th>
        </tr>
  </thead>
<tbody class="" role="rowgroup">
  <tr>
    <td><select class="form-control-sm form-control d-inline">
      <option disabled="" selected="" value=""> select</option>
      <option value="Staff memeber">Staff member </option>
      <option value="Contractor">Contractor</option>
      <option value="Volunteer">Volunteer</option>
      <option value="General public">General public</option>
      <option value="Patient">Patient</option>
</select></td>
    <td role="cell"><input class="form-control form-control-sm" type="text" placeholder="Position"/></td>
    <td role="cell"><input class="form-control form-control-sm" type="text" placeholder="Supervisor's name"/></td>
</tr>
</tbody>

</table>
  <a class="btn btn-sm btn-primary" onclick="checkInputCont()"> Download to PDF</a><i
    class="fas fa-question-circle btn-sm pb-3" data-container="body" data-toggle="popover" data-trigger="hover"
    data-placement="top" data-content="Prints the information you have recorded into a PDF document"></i>
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
    <div class="modal-body">Please enter all the fields correctly</div>
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
