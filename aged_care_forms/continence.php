<div class="content">

    <div class="container p-5 page rounded-lg">
        <form class="form-horizontal">
            <fieldset>
                <!-- Form Name-->
                <legend>Urinary continence</legend>
            </fieldset>
        </form>
        <!--a.btn.btn-sm.btn-primary(href='continence.html')  Urinary record-->
        <table class="table table-striped table-hover" role="table" id="tablePreview">
            <thead role="rowgroup">
                <tr role="row">
                    <th class="w-10" role="columnheader">Time<i class="fas fa-question-circle btn-sm"
                            data-container="body" data-toggle="popover" data-trigger="hover" data-placement="top"
                            data-content="This column is already filled with times, you don’t have input anything. Just go to the time you want to record information on and work across from them"></i>
                    </th>
                    <th class="w-30" role="columnheader">Date<i class="fas fa-question-circle btn-sm"
                            data-container="body" data-toggle="popover" data-trigger="hover" data-placement="top"
                            data-content="Select the large triangle to open the calendar and use today’s date."></i>
                    </th>
                    <th class="w-30" role="columnheader">Date<i class="fas fa-question-circle btn-sm"
                            data-container="body" data-toggle="popover" data-trigger="hover" data-placement="top"
                            data-content="Select the large triangle to open the calendar and use today’s date."></i>
                    </th>
                    <th class="w-30" role="columnheader">Date<i class="fas fa-question-circle btn-sm"
                            data-container="body" data-toggle="popover" data-trigger="hover" data-placement="top"
                            data-content="Select the large triangle to open the calendar and use today’s date."></i>
                    </th>
                </tr>
            </thead>
            <tbody class="continence" role="rowgroup" id="tableToModify">
                <tr role="row">
                    <td role="cell"></td>
                    <td role="cell"><input class="contrecord form-control-sm form-control" type="date"
                            placeholder="dd/mm/yyyy" min="1990-01-01" max="2040-12-31" /></td>
                    <td role="cell"><input class="contrecord form-control-sm form-control" type="date"
                            placeholder="dd/mm/yyyy" min="1990-01-01" max="2040-12-31" /></td>
                    <td role="cell"><input class="contrecord form-control-sm form-control" type="date"
                            placeholder="dd/mm/yyyy" min="1990-01-01" max="2040-12-31" /></td>
                </tr>
                <div class="highlight">
                    <tr role="row" id="rowToClone"></tr>
                    <td role="cell"><input class="contrecord form-control-sm form-control" id="continTime" type="text"
                            value="00:00" disabled="disabled" /></td>
                    <td role="cell"><select
                            class="col-9 align-top continOption contrecord form-control-sm form-control d-inline">
                            <option disabled="" selected="" value=""> select</option>
                            <option value="1">1 Incontinent of urine</option>
                            <option value="2">2 Pad change for incontinence of urine </option>
                            <option value="3">3 Pad has increased wetness</option>
                            <option value="4">4 Passed urine</option>
                            <option value="4b">4b Dry</option>
                            <option value="c">4c Resident continent</option>
                        </select><textarea class="float-right col-2 contrecord form-control form-control-sm"
                            name="story" placeholder="ID" rows="1" cols="16"></textarea></td>
                    <td role="cell"><select
                            class="col-9 align-top continOption contrecord form-control-sm form-control d-inline">
                            <option disabled="" selected="" value=""> select</option>
                            <option value="1">1 Incontinent of urine</option>
                            <option value="2">2 Pad change for incontinence of urine </option>
                            <option value="3">3 Pad has increased wetness</option>
                            <option value="4">4 Passed urine</option>
                            <option value="4b">4b Dry</option>
                            <option value="c">4c Resident continent</option>
                        </select><textarea class="float-right col-2 contrecord form-control form-control-sm"
                            name="story" placeholder="ID" rows="1" cols="16"></textarea></td>
                    <td role="cell"><select
                            class="col-9 align-top continOption contrecord form-control-sm form-control d-inline">
                            <option disabled="" selected="" value=""> select</option>
                            <option value="1">1 Incontinent of urine</option>
                            <option value="2">2 Pad change for incontinence of urine </option>
                            <option value="3">3 Pad has increased wetness</option>
                            <option value="4">4 Passed urine</option>
                            <option value="4b">4b Dry</option>
                            <option value="c">4c Resident continent</option>
                        </select><textarea class="float-right col-2 contrecord form-control form-control-sm"
                            name="story" placeholder="ID" rows="1" cols="16"></textarea></td>
                    <tr role="row"></tr>
                    <td role="cell"><input class="contrecord form-control form-control-sm" id="continTime" type="text"
                            value="01:00" disabled="disabled" /></td>
                    <td role="cell"><select
                            class="col-9 align-top continOption contrecord form-control-sm form-control d-inline">
                            <option disabled="" selected="" value=""> select</option>
                            <option value="1">1 Incontinent of urine</option>
                            <option value="2">2 Pad change for incontinence of urine </option>
                            <option value="3">3 Pad has increased wetness</option>
                            <option value="4">4 Passed urine</option>
                            <option value="4b">4b Dry</option>
                            <option value="c">4c Resident continent</option>
                        </select><textarea class="float-right col-2 contrecord form-control form-control-sm"
                            name="story" placeholder="ID" rows="1" cols="16"></textarea></td>
                    <td role="cell"><select
                            class="col-9 align-top continOption contrecord form-control-sm form-control d-inline">
                            <option disabled="" selected="" value=""> select</option>
                            <option value="1">1 Incontinent of urine</option>
                            <option value="2">2 Pad change for incontinence of urine </option>
                            <option value="3">3 Pad has increased wetness</option>
                            <option value="4">4 Passed urine</option>
                            <option value="4b">4b Dry</option>
                            <option value="c">4c Resident continent</option>
                        </select><textarea class="float-right col-2 contrecord form-control form-control-sm"
                            name="story" placeholder="ID" rows="1" cols="16"></textarea></td>
                    <td role="cell"><select
                            class="col-9 align-top continOption contrecord form-control-sm form-control d-inline">
                            <option disabled="" selected="" value=""> select</option>
                            <option value="1">1 Incontinent of urine</option>
                            <option value="2">2 Pad change for incontinence of urine </option>
                            <option value="3">3 Pad has increased wetness</option>
                            <option value="4">4 Passed urine</option>
                            <option value="4b">4b Dry</option>
                            <option value="c">4c Resident continent</option>
                        </select><textarea class="float-right col-2 contrecord form-control form-control-sm"
                            name="story" placeholder="ID" rows="1" cols="16"></textarea></td>
                    <tr></tr>
                    <td><input class="form-control contrecord form-control-sm" id="continTime" type="text" value="02:00"
                            disabled="disabled" /></td>
                    <td><select class="col-9 align-top continOption contrecord form-control-sm form-control d-inline">
                            <option disabled="" selected="" value=""> select</option>
                            <option value="1">1 Incontinent of urine</option>
                            <option value="2">2 Pad change for incontinence of urine </option>
                            <option value="3">3 Pad has increased wetness</option>
                            <option value="4">4 Passed urine</option>
                            <option value="4b">4b Dry</option>
                            <option value="c">4c Resident continent</option>
                        </select><textarea class="float-right col-2 contrecord form-control form-control-sm"
                            name="story" placeholder="ID" rows="1" cols="16"></textarea></td>
                    <td><select class="col-9 align-top continOption contrecord form-control-sm form-control d-inline">
                            <option disabled="" selected="" value=""> select</option>
                            <option value="1">1 Incontinent of urine</option>
                            <option value="2">2 Pad change for incontinence of urine </option>
                            <option value="3">3 Pad has increased wetness</option>
                            <option value="4">4 Passed urine</option>
                            <option value="4b">4b Dry</option>
                            <option value="c">4c Resident continent</option>
                        </select><textarea class="float-right col-2 contrecord form-control form-control-sm"
                            name="story" placeholder="ID" rows="1" cols="16"></textarea></td>
                    <td><select class="col-9 align-top continOption contrecord form-control-sm form-control d-inline">
                            <option disabled="" selected="" value=""> select</option>
                            <option value="1">1 Incontinent of urine</option>
                            <option value="2">2 Pad change for incontinence of urine </option>
                            <option value="3">3 Pad has increased wetness</option>
                            <option value="4">4 Passed urine</option>
                            <option value="4b">4b Dry</option>
                            <option value="c">4c Resident continent</option>
                        </select><textarea class="float-right col-2 contrecord form-control form-control-sm"
                            name="story" placeholder="ID" rows="1" cols="16"></textarea></td>
                    <tr></tr>
                    <td><input class="form-control contrecord form-control-sm" id="continTime" type="text" value="03:00"
                            disabled="disabled" /></td>
                    <td><select class="col-9 align-top continOption contrecord form-control-sm form-control d-inline">
                            <option disabled="" selected="" value=""> select</option>
                            <option value="1">1 Incontinent of urine</option>
                            <option value="2">2 Pad change for incontinence of urine </option>
                            <option value="3">3 Pad has increased wetness</option>
                            <option value="4">4 Passed urine</option>
                            <option value="4b">4b Dry</option>
                            <option value="c">4c Resident continent</option>
                        </select><textarea class="float-right col-2 contrecord form-control form-control-sm"
                            name="story" placeholder="ID" rows="1" cols="16"></textarea></td>
                    <td><select class="col-9 align-top continOption contrecord form-control-sm form-control d-inline">
                            <option disabled="" selected="" value=""> select</option>
                            <option value="1">1 Incontinent of urine</option>
                            <option value="2">2 Pad change for incontinence of urine </option>
                            <option value="3">3 Pad has increased wetness</option>
                            <option value="4">4 Passed urine</option>
                            <option value="4b">4b Dry</option>
                            <option value="c">4c Resident continent</option>
                        </select><textarea class="float-right col-2 contrecord form-control form-control-sm"
                            name="story" placeholder="ID" rows="1" cols="16"></textarea></td>
                    <td><select class="col-9 align-top continOption contrecord form-control-sm form-control d-inline">
                            <option disabled="" selected="" value=""> select</option>
                            <option value="1">1 Incontinent of urine</option>
                            <option value="2">2 Pad change for incontinence of urine </option>
                            <option value="3">3 Pad has increased wetness</option>
                            <option value="4">4 Passed urine</option>
                            <option value="4b">4b Dry</option>
                            <option value="c">4c Resident continent</option>
                        </select><textarea class="float-right col-2 contrecord form-control form-control-sm"
                            name="story" placeholder="ID" rows="1" cols="16"></textarea></td>
                    <tr></tr>
                    <td><input class="form-control contrecord form-control-sm" id="continTime" type="text" value="04:00"
                            disabled="disabled" /></td>
                    <td><select class="col-9 align-top continOption contrecord form-control-sm form-control d-inline">
                            <option disabled="" selected="" value=""> select</option>
                            <option value="1">1 Incontinent of urine</option>
                            <option value="2">2 Pad change for incontinence of urine </option>
                            <option value="3">3 Pad has increased wetness</option>
                            <option value="4">4 Passed urine</option>
                            <option value="4b">4b Dry</option>
                            <option value="c">4c Resident continent</option>
                        </select><textarea class="float-right col-2 contrecord form-control form-control-sm"
                            name="story" placeholder="ID" rows="1" cols="16"></textarea></td>
                    <td><select class="col-9 align-top continOption contrecord form-control-sm form-control d-inline">
                            <option disabled="" selected="" value=""> select</option>
                            <option value="1">1 Incontinent of urine</option>
                            <option value="2">2 Pad change for incontinence of urine </option>
                            <option value="3">3 Pad has increased wetness</option>
                            <option value="4">4 Passed urine</option>
                            <option value="4b">4b Dry</option>
                            <option value="c">4c Resident continent</option>
                        </select><textarea class="float-right col-2 contrecord form-control form-control-sm"
                            name="story" placeholder="ID" rows="1" cols="16"></textarea></td>
                    <td><select class="col-9 align-top continOption contrecord form-control-sm form-control d-inline">
                            <option disabled="" selected="" value=""> select</option>
                            <option value="1">1 Incontinent of urine</option>
                            <option value="2">2 Pad change for incontinence of urine </option>
                            <option value="3">3 Pad has increased wetness</option>
                            <option value="4">4 Passed urine</option>
                            <option value="4b">4b Dry</option>
                            <option value="c">4c Resident continent</option>
                        </select><textarea class="float-right col-2 contrecord form-control form-control-sm"
                            name="story" placeholder="ID" rows="1" cols="16"></textarea></td>
                    <tr></tr>
                    <td><input class="contrecord form-control form-control-sm" id="continTime" type="text" value="05:00"
                            disabled="disabled" /></td>
                    <td><select class="col-9 align-top continOption contrecord form-control-sm form-control d-inline">
                            <option disabled="" selected="" value=""> select</option>
                            <option value="1">1 Incontinent of urine</option>
                            <option value="2">2 Pad change for incontinence of urine </option>
                            <option value="3">3 Pad has increased wetness</option>
                            <option value="4">4 Passed urine</option>
                            <option value="4b">4b Dry</option>
                            <option value="c">4c Resident continent</option>
                        </select><textarea class="float-right col-2 contrecord form-control form-control-sm"
                            name="story" placeholder="ID" rows="1" cols="16"></textarea></td>
                    <td><select class="col-9 align-top continOption contrecord form-control-sm form-control d-inline">
                            <option disabled="" selected="" value=""> select</option>
                            <option value="1">1 Incontinent of urine</option>
                            <option value="2">2 Pad change for incontinence of urine </option>
                            <option value="3">3 Pad has increased wetness</option>
                            <option value="4">4 Passed urine</option>
                            <option value="4b">4b Dry</option>
                            <option value="c">4c Resident continent</option>
                        </select><textarea class="float-right col-2 contrecord form-control form-control-sm"
                            name="story" placeholder="ID" rows="1" cols="16"></textarea></td>
                    <td><select class="col-9 align-top continOption contrecord form-control-sm form-control d-inline">
                            <option disabled="" selected="" value=""> select</option>
                            <option value="1">1 Incontinent of urine</option>
                            <option value="2">2 Pad change for incontinence of urine </option>
                            <option value="3">3 Pad has increased wetness</option>
                            <option value="4">4 Passed urine</option>
                            <option value="4b">4b Dry</option>
                            <option value="c">4c Resident continent</option>
                        </select><textarea class="float-right col-2 contrecord form-control form-control-sm"
                            name="story" placeholder="ID" rows="1" cols="16"></textarea></td>
                    <tr></tr>
                    <td><input class="contrecord form-control form-control-sm" id="continTime" type="text" value="06:00"
                            disabled="disabled" /></td>
                    <td><select class="col-9 align-top continOption contrecord form-control-sm form-control d-inline">
                            <option disabled="" selected="" value=""> select</option>
                            <option value="1">1 Incontinent of urine</option>
                            <option value="2">2 Pad change for incontinence of urine </option>
                            <option value="3">3 Pad has increased wetness</option>
                            <option value="4">4 Passed urine</option>
                            <option value="4b">4b Dry</option>
                            <option value="c">4c Resident continent</option>
                        </select><textarea class="float-right col-2 contrecord form-control form-control-sm"
                            name="story" placeholder="ID" rows="1" cols="16"></textarea></td>
                    <td><select class="col-9 align-top continOption contrecord form-control-sm form-control d-inline">
                            <option disabled="" selected="" value=""> select</option>
                            <option value="1">1 Incontinent of urine</option>
                            <option value="2">2 Pad change for incontinence of urine </option>
                            <option value="3">3 Pad has increased wetness</option>
                            <option value="4">4 Passed urine</option>
                            <option value="4b">4b Dry</option>
                            <option value="c">4c Resident continent</option>
                        </select><textarea class="float-right col-2 contrecord form-control form-control-sm"
                            name="story" placeholder="ID" rows="1" cols="16"></textarea></td>
                    <td><select class="col-9 align-top continOption contrecord form-control-sm form-control d-inline">
                            <option disabled="" selected="" value=""> select</option>
                            <option value="1">1 Incontinent of urine</option>
                            <option value="2">2 Pad change for incontinence of urine </option>
                            <option value="3">3 Pad has increased wetness</option>
                            <option value="4">4 Passed urine</option>
                            <option value="4b">4b Dry</option>
                            <option value="c">4c Resident continent</option>
                        </select><textarea class="float-right col-2 contrecord form-control form-control-sm"
                            name="story" placeholder="ID" rows="1" cols="16"></textarea></td>
                    <tr></tr>
                    <td><input class="contrecord form-control form-control-sm" id="continTime" type="text" value="07:00"
                            disabled="disabled" /></td>
                    <td><select class="col-9 align-top continOption contrecord form-control-sm form-control d-inline">
                            <option disabled="" selected="" value=""> select</option>
                            <option value="1">1 Incontinent of urine</option>
                            <option value="2">2 Pad change for incontinence of urine </option>
                            <option value="3">3 Pad has increased wetness</option>
                            <option value="4">4 Passed urine</option>
                            <option value="4b">4b Dry</option>
                            <option value="c">4c Resident continent</option>
                        </select><textarea class="float-right col-2 contrecord form-control form-control-sm"
                            name="story" placeholder="ID" rows="1" cols="16"></textarea></td>
                    <td><select class="col-9 align-top continOption contrecord form-control-sm form-control d-inline">
                            <option disabled="" selected="" value=""> select</option>
                            <option value="1">1 Incontinent of urine</option>
                            <option value="2">2 Pad change for incontinence of urine </option>
                            <option value="3">3 Pad has increased wetness</option>
                            <option value="4">4 Passed urine</option>
                            <option value="4b">4b Dry</option>
                            <option value="c">4c Resident continent</option>
                        </select><textarea class="float-right col-2 contrecord form-control form-control-sm"
                            name="story" placeholder="ID" rows="1" cols="16"></textarea></td>
                    <td><select class="col-9 align-top continOption contrecord form-control-sm form-control d-inline">
                            <option disabled="" selected="" value=""> select</option>
                            <option value="1">1 Incontinent of urine</option>
                            <option value="2">2 Pad change for incontinence of urine </option>
                            <option value="3">3 Pad has increased wetness</option>
                            <option value="4">4 Passed urine</option>
                            <option value="4b">4b Dry</option>
                            <option value="c">4c Resident continent</option>
                        </select><textarea class="float-right col-2 contrecord form-control form-control-sm"
                            name="story" placeholder="ID" rows="1" cols="16"></textarea></td>
                    <tr></tr>
                    <td><input class="contrecord form-control form-control-sm" id="continTime" type="text" value="08:00"
                            disabled="disabled" /></td>
                    <td><select class="col-9 align-top continOption contrecord form-control-sm form-control d-inline">
                            <option disabled="" selected="" value=""> select</option>
                            <option value="1">1 Incontinent of urine</option>
                            <option value="2">2 Pad change for incontinence of urine </option>
                            <option value="3">3 Pad has increased wetness</option>
                            <option value="4">4 Passed urine</option>
                            <option value="4b">4b Dry</option>
                            <option value="c">4c Resident continent</option>
                        </select><textarea class="float-right col-2 contrecord form-control form-control-sm"
                            name="story" placeholder="ID" rows="1" cols="16"></textarea></td>
                    <td><select class="col-9 align-top continOption contrecord form-control-sm form-control d-inline">
                            <option disabled="" selected="" value=""> select</option>
                            <option value="1">1 Incontinent of urine</option>
                            <option value="2">2 Pad change for incontinence of urine </option>
                            <option value="3">3 Pad has increased wetness</option>
                            <option value="4">4 Passed urine</option>
                            <option value="4b">4b Dry</option>
                            <option value="c">4c Resident continent</option>
                        </select><textarea class="float-right col-2 contrecord form-control form-control-sm"
                            name="story" placeholder="ID" rows="1" cols="16"></textarea></td>
                    <td><select class="col-9 align-top continOption contrecord form-control-sm form-control d-inline">
                            <option disabled="" selected="" value=""> select</option>
                            <option value="1">1 Incontinent of urine</option>
                            <option value="2">2 Pad change for incontinence of urine </option>
                            <option value="3">3 Pad has increased wetness</option>
                            <option value="4">4 Passed urine</option>
                            <option value="4b">4b Dry</option>
                            <option value="c">4c Resident continent</option>
                        </select><textarea class="float-right col-2 contrecord form-control form-control-sm"
                            name="story" placeholder="ID" rows="1" cols="16"></textarea></td>
                    <tr></tr>
                    <td><input class="contrecord form-control form-control-sm" id="continTime" type="text" value="09:00"
                            disabled="disabled" /></td>
                    <td><select class="col-9 align-top continOption contrecord form-control-sm form-control d-inline">
                            <option disabled="" selected="" value=""> select</option>
                            <option value="1">1 Incontinent of urine</option>
                            <option value="2">2 Pad change for incontinence of urine </option>
                            <option value="3">3 Pad has increased wetness</option>
                            <option value="4">4 Passed urine</option>
                            <option value="4b">4b Dry</option>
                            <option value="c">4c Resident continent</option>
                        </select><textarea class="float-right col-2 contrecord form-control form-control-sm"
                            name="story" placeholder="ID" rows="1" cols="16"></textarea></td>
                    <td><select class="col-9 align-top continOption contrecord form-control-sm form-control d-inline">
                            <option disabled="" selected="" value=""> select</option>
                            <option value="1">1 Incontinent of urine</option>
                            <option value="2">2 Pad change for incontinence of urine </option>
                            <option value="3">3 Pad has increased wetness</option>
                            <option value="4">4 Passed urine</option>
                            <option value="4b">4b Dry</option>
                            <option value="c">4c Resident continent</option>
                        </select><textarea class="float-right col-2 contrecord form-control form-control-sm"
                            name="story" placeholder="ID" rows="1" cols="16"></textarea></td>
                    <td><select class="col-9 align-top continOption contrecord form-control-sm form-control d-inline">
                            <option disabled="" selected="" value=""> select</option>
                            <option value="1">1 Incontinent of urine</option>
                            <option value="2">2 Pad change for incontinence of urine </option>
                            <option value="3">3 Pad has increased wetness</option>
                            <option value="4">4 Passed urine</option>
                            <option value="4b">4b Dry</option>
                            <option value="c">4c Resident continent</option>
                        </select><textarea class="float-right col-2 contrecord form-control form-control-sm"
                            name="story" placeholder="ID" rows="1" cols="16"></textarea></td>
                    <tr></tr>
                    <td><input class="contrecord form-control form-control-sm" id="continTime" type="text" value="10:00"
                            disabled="disabled" /></td>
                    <td><select class="col-9 align-top continOption contrecord form-control-sm form-control d-inline">
                            <option disabled="" selected="" value=""> select</option>
                            <option value="1">1 Incontinent of urine</option>
                            <option value="2">2 Pad change for incontinence of urine </option>
                            <option value="3">3 Pad has increased wetness</option>
                            <option value="4">4 Passed urine</option>
                            <option value="4b">4b Dry</option>
                            <option value="c">4c Resident continent</option>
                        </select><textarea class="float-right col-2 contrecord form-control form-control-sm"
                            name="story" placeholder="ID" rows="1" cols="16"></textarea></td>
                    <td><select class="col-9 align-top continOption contrecord form-control-sm form-control d-inline">
                            <option disabled="" selected="" value=""> select</option>
                            <option value="1">1 Incontinent of urine</option>
                            <option value="2">2 Pad change for incontinence of urine </option>
                            <option value="3">3 Pad has increased wetness</option>
                            <option value="4">4 Passed urine</option>
                            <option value="4b">4b Dry</option>
                            <option value="c">4c Resident continent</option>
                        </select><textarea class="float-right col-2 contrecord form-control form-control-sm"
                            name="story" placeholder="ID" rows="1" cols="16"></textarea></td>
                    <td><select class="col-9 align-top continOption contrecord form-control-sm form-control d-inline">
                            <option disabled="" selected="" value=""> select</option>
                            <option value="1">1 Incontinent of urine</option>
                            <option value="2">2 Pad change for incontinence of urine </option>
                            <option value="3">3 Pad has increased wetness</option>
                            <option value="4">4 Passed urine</option>
                            <option value="4b">4b Dry</option>
                            <option value="c">4c Resident continent</option>
                        </select><textarea class="float-right col-2 contrecord form-control form-control-sm"
                            name="story" placeholder="ID" rows="1" cols="16"></textarea></td>
                    <tr></tr>
                    <td><input class="contrecord form-control form-control-sm" id="continTime" type="text" value="11:00"
                            disabled="disabled" /></td>
                    <td><select class="col-9 align-top continOption contrecord form-control-sm form-control d-inline">
                            <option disabled="" selected="" value=""> select</option>
                            <option value="1">1 Incontinent of urine</option>
                            <option value="2">2 Pad change for incontinence of urine </option>
                            <option value="3">3 Pad has increased wetness</option>
                            <option value="4">4 Passed urine</option>
                            <option value="4b">4b Dry</option>
                            <option value="c">4c Resident continent</option>
                        </select><textarea class="float-right col-2 contrecord form-control form-control-sm"
                            name="story" placeholder="ID" rows="1" cols="16"></textarea></td>
                    <td><select class="col-9 align-top continOption contrecord form-control-sm form-control d-inline">
                            <option disabled="" selected="" value=""> select</option>
                            <option value="1">1 Incontinent of urine</option>
                            <option value="2">2 Pad change for incontinence of urine </option>
                            <option value="3">3 Pad has increased wetness</option>
                            <option value="4">4 Passed urine</option>
                            <option value="4b">4b Dry</option>
                            <option value="c">4c Resident continent</option>
                        </select><textarea class="float-right col-2 contrecord form-control form-control-sm"
                            name="story" placeholder="ID" rows="1" cols="16"></textarea></td>
                    <td><select class="col-9 align-top continOption contrecord form-control-sm form-control d-inline">
                            <option disabled="" selected="" value=""> select</option>
                            <option value="1">1 Incontinent of urine</option>
                            <option value="2">2 Pad change for incontinence of urine </option>
                            <option value="3">3 Pad has increased wetness</option>
                            <option value="4">4 Passed urine</option>
                            <option value="4b">4b Dry</option>
                            <option value="c">4c Resident continent</option>
                        </select><textarea class="float-right col-2 contrecord form-control form-control-sm"
                            name="story" placeholder="ID" rows="1" cols="16"></textarea></td>
                    <tr></tr>
                    <td><input class="contrecord form-control form-control-sm" id="continTime" type="text" value="12:00"
                            disabled="disabled" /></td>
                    <td><select class="col-9 align-top continOption contrecord form-control-sm form-control d-inline">
                            <option disabled="" selected="" value=""> select</option>
                            <option value="1">1 Incontinent of urine</option>
                            <option value="2">2 Pad change for incontinence of urine </option>
                            <option value="3">3 Pad has increased wetness</option>
                            <option value="4">4 Passed urine</option>
                            <option value="4b">4b Dry</option>
                            <option value="c">4c Resident continent</option>
                        </select><textarea class="float-right col-2 contrecord form-control form-control-sm"
                            name="story" placeholder="ID" rows="1" cols="16"></textarea></td>
                    <td><select class="col-9 align-top continOption contrecord form-control-sm form-control d-inline">
                            <option disabled="" selected="" value=""> select</option>
                            <option value="1">1 Incontinent of urine</option>
                            <option value="2">2 Pad change for incontinence of urine </option>
                            <option value="3">3 Pad has increased wetness</option>
                            <option value="4">4 Passed urine</option>
                            <option value="4b">4b Dry</option>
                            <option value="c">4c Resident continent</option>
                        </select><textarea class="float-right col-2 contrecord form-control form-control-sm"
                            name="story" placeholder="ID" rows="1" cols="16"></textarea></td>
                    <td><select class="col-9 align-top continOption contrecord form-control-sm form-control d-inline">
                            <option disabled="" selected="" value=""> select</option>
                            <option value="1">1 Incontinent of urine</option>
                            <option value="2">2 Pad change for incontinence of urine </option>
                            <option value="3">3 Pad has increased wetness</option>
                            <option value="4">4 Passed urine</option>
                            <option value="4b">4b Dry</option>
                            <option value="c">4c Resident continent</option>
                        </select><textarea class="float-right col-2 contrecord form-control form-control-sm"
                            name="story" placeholder="ID" rows="1" cols="16"></textarea></td>
                    <tr></tr>
                    <td><input class="contrecord form-control form-control-sm" id="continTime" type="text" value="13:00"
                            disabled="disabled" /></td>
                    <td><select class="col-9 align-top continOption contrecord form-control-sm form-control d-inline">
                            <option disabled="" selected="" value=""> select</option>
                            <option value="1">1 Incontinent of urine</option>
                            <option value="2">2 Pad change for incontinence of urine </option>
                            <option value="3">3 Pad has increased wetness</option>
                            <option value="4">4 Passed urine</option>
                            <option value="4b">4b Dry</option>
                            <option value="c">4c Resident continent</option>
                        </select><textarea class="float-right col-2 contrecord form-control form-control-sm"
                            name="story" placeholder="ID" rows="1" cols="16"></textarea></td>
                    <td><select class="col-9 align-top continOption contrecord form-control-sm form-control d-inline">
                            <option disabled="" selected="" value=""> select</option>
                            <option value="1">1 Incontinent of urine</option>
                            <option value="2">2 Pad change for incontinence of urine </option>
                            <option value="3">3 Pad has increased wetness</option>
                            <option value="4">4 Passed urine</option>
                            <option value="4b">4b Dry</option>
                            <option value="c">4c Resident continent</option>
                        </select><textarea class="float-right col-2 contrecord form-control form-control-sm"
                            name="story" placeholder="ID" rows="1" cols="16"></textarea></td>
                    <td><select class="col-9 align-top continOption contrecord form-control-sm form-control d-inline">
                            <option disabled="" selected="" value=""> select</option>
                            <option value="1">1 Incontinent of urine</option>
                            <option value="2">2 Pad change for incontinence of urine </option>
                            <option value="3">3 Pad has increased wetness</option>
                            <option value="4">4 Passed urine</option>
                            <option value="4b">4b Dry</option>
                            <option value="c">4c Resident continent</option>
                        </select><textarea class="float-right col-2 contrecord form-control form-control-sm"
                            name="story" placeholder="ID" rows="1" cols="16"></textarea></td>
                    <tr></tr>
                    <td><input class="contrecord form-control form-control-sm" id="continTime" type="text" value="14:00"
                            disabled="disabled" /></td>
                    <td><select class="col-9 align-top continOption contrecord form-control-sm form-control d-inline">
                            <option disabled="" selected="" value=""> select</option>
                            <option value="1">1 Incontinent of urine</option>
                            <option value="2">2 Pad change for incontinence of urine </option>
                            <option value="3">3 Pad has increased wetness</option>
                            <option value="4">4 Passed urine</option>
                            <option value="4b">4b Dry</option>
                            <option value="c">4c Resident continent</option>
                        </select><textarea class="float-right col-2 contrecord form-control form-control-sm"
                            name="story" placeholder="ID" rows="1" cols="16"></textarea></td>
                    <td><select class="col-9 align-top continOption contrecord form-control-sm form-control d-inline">
                            <option disabled="" selected="" value=""> select</option>
                            <option value="1">1 Incontinent of urine</option>
                            <option value="2">2 Pad change for incontinence of urine </option>
                            <option value="3">3 Pad has increased wetness</option>
                            <option value="4">4 Passed urine</option>
                            <option value="4b">4b Dry</option>
                            <option value="c">4c Resident continent</option>
                        </select><textarea class="float-right col-2 contrecord form-control form-control-sm"
                            name="story" placeholder="ID" rows="1" cols="16"></textarea></td>
                    <td><select class="col-9 align-top continOption contrecord form-control-sm form-control d-inline">
                            <option disabled="" selected="" value=""> select</option>
                            <option value="1">1 Incontinent of urine</option>
                            <option value="2">2 Pad change for incontinence of urine </option>
                            <option value="3">3 Pad has increased wetness</option>
                            <option value="4">4 Passed urine</option>
                            <option value="4b">4b Dry</option>
                            <option value="c">4c Resident continent</option>
                        </select><textarea class="float-right col-2 contrecord form-control form-control-sm"
                            name="story" placeholder="ID" rows="1" cols="16"></textarea></td>
                    <tr></tr>
                    <td><input class="contrecord form-control form-control-sm" id="continTime" type="text" value="15:00"
                            disabled="disabled" /></td>
                    <td><select class="col-9 align-top continOption contrecord form-control-sm form-control d-inline">
                            <option disabled="" selected="" value=""> select</option>
                            <option value="1">1 Incontinent of urine</option>
                            <option value="2">2 Pad change for incontinence of urine </option>
                            <option value="3">3 Pad has increased wetness</option>
                            <option value="4">4 Passed urine</option>
                            <option value="4b">4b Dry</option>
                            <option value="c">4c Resident continent</option>
                        </select><textarea class="float-right col-2 contrecord form-control form-control-sm"
                            name="story" placeholder="ID" rows="1" cols="16"></textarea></td>
                    <td><select class="col-9 align-top continOption contrecord form-control-sm form-control d-inline">
                            <option disabled="" selected="" value=""> select</option>
                            <option value="1">1 Incontinent of urine</option>
                            <option value="2">2 Pad change for incontinence of urine </option>
                            <option value="3">3 Pad has increased wetness</option>
                            <option value="4">4 Passed urine</option>
                            <option value="4b">4b Dry</option>
                            <option value="c">4c Resident continent</option>
                        </select><textarea class="float-right col-2 contrecord form-control form-control-sm"
                            name="story" placeholder="ID" rows="1" cols="16"></textarea></td>
                    <td><select class="col-9 align-top continOption contrecord form-control-sm form-control d-inline">
                            <option disabled="" selected="" value=""> select</option>
                            <option value="1">1 Incontinent of urine</option>
                            <option value="2">2 Pad change for incontinence of urine </option>
                            <option value="3">3 Pad has increased wetness</option>
                            <option value="4">4 Passed urine</option>
                            <option value="4b">4b Dry</option>
                            <option value="c">4c Resident continent</option>
                        </select><textarea class="float-right col-2 contrecord form-control form-control-sm"
                            name="story" placeholder="ID" rows="1" cols="16"></textarea></td>
                    <tr></tr>
                    <td><input class="contrecord form-control form-control-sm" id="continTime" type="text" value="16:00"
                            disabled="disabled" /></td>
                    <td><select class="col-9 align-top continOption contrecord form-control-sm form-control d-inline">
                            <option disabled="" selected="" value=""> select</option>
                            <option value="1">1 Incontinent of urine</option>
                            <option value="2">2 Pad change for incontinence of urine </option>
                            <option value="3">3 Pad has increased wetness</option>
                            <option value="4">4 Passed urine</option>
                            <option value="4b">4b Dry</option>
                            <option value="c">4c Resident continent</option>
                        </select><textarea class="float-right col-2 contrecord form-control form-control-sm"
                            name="story" placeholder="ID" rows="1" cols="16"></textarea></td>
                    <td><select class="col-9 align-top continOption contrecord form-control-sm form-control d-inline">
                            <option disabled="" selected="" value=""> select</option>
                            <option value="1">1 Incontinent of urine</option>
                            <option value="2">2 Pad change for incontinence of urine </option>
                            <option value="3">3 Pad has increased wetness</option>
                            <option value="4">4 Passed urine</option>
                            <option value="4b">4b Dry</option>
                            <option value="c">4c Resident continent</option>
                        </select><textarea class="float-right col-2 contrecord form-control form-control-sm"
                            name="story" placeholder="ID" rows="1" cols="16"></textarea></td>
                    <td><select class="col-9 align-top continOption contrecord form-control-sm form-control d-inline">
                            <option disabled="" selected="" value=""> select</option>
                            <option value="1">1 Incontinent of urine</option>
                            <option value="2">2 Pad change for incontinence of urine </option>
                            <option value="3">3 Pad has increased wetness</option>
                            <option value="4">4 Passed urine</option>
                            <option value="4b">4b Dry</option>
                            <option value="c">4c Resident continent</option>
                        </select><textarea class="float-right col-2 contrecord form-control form-control-sm"
                            name="story" placeholder="ID" rows="1" cols="16"></textarea></td>
                    <tr></tr>
                    <td><input class="contrecord form-control form-control-sm" id="continTime" type="text" value="17:00"
                            disabled="disabled" /></td>
                    <td><select class="col-9 align-top continOption contrecord form-control-sm form-control d-inline">
                            <option disabled="" selected="" value=""> select</option>
                            <option value="1">1 Incontinent of urine</option>
                            <option value="2">2 Pad change for incontinence of urine </option>
                            <option value="3">3 Pad has increased wetness</option>
                            <option value="4">4 Passed urine</option>
                            <option value="4b">4b Dry</option>
                            <option value="c">4c Resident continent</option>
                        </select><textarea class="float-right col-2 contrecord form-control form-control-sm"
                            name="story" placeholder="ID" rows="1" cols="16"></textarea></td>
                    <td><select class="col-9 align-top continOption contrecord form-control-sm form-control d-inline">
                            <option disabled="" selected="" value=""> select</option>
                            <option value="1">1 Incontinent of urine</option>
                            <option value="2">2 Pad change for incontinence of urine </option>
                            <option value="3">3 Pad has increased wetness</option>
                            <option value="4">4 Passed urine</option>
                            <option value="4b">4b Dry</option>
                            <option value="c">4c Resident continent</option>
                        </select><textarea class="float-right col-2 contrecord form-control form-control-sm"
                            name="story" placeholder="ID" rows="1" cols="16"></textarea></td>
                    <td><select class="col-9 align-top continOption contrecord form-control-sm form-control d-inline">
                            <option disabled="" selected="" value=""> select</option>
                            <option value="1">1 Incontinent of urine</option>
                            <option value="2">2 Pad change for incontinence of urine </option>
                            <option value="3">3 Pad has increased wetness</option>
                            <option value="4">4 Passed urine</option>
                            <option value="4b">4b Dry</option>
                            <option value="c">4c Resident continent</option>
                        </select><textarea class="float-right col-2 contrecord form-control form-control-sm"
                            name="story" placeholder="ID" rows="1" cols="16"></textarea></td>
                    <tr></tr>
                    <td><input class="contrecord form-control form-control-sm" id="continTime" type="text" value="18:00"
                            disabled="disabled" /></td>
                    <td><select class="col-9 align-top continOption contrecord form-control-sm form-control d-inline">
                            <option disabled="" selected="" value=""> select</option>
                            <option value="1">1 Incontinent of urine</option>
                            <option value="2">2 Pad change for incontinence of urine </option>
                            <option value="3">3 Pad has increased wetness</option>
                            <option value="4">4 Passed urine</option>
                            <option value="4b">4b Dry</option>
                            <option value="c">4c Resident continent</option>
                        </select><textarea class="float-right col-2 contrecord form-control form-control-sm"
                            name="story" placeholder="ID" rows="1" cols="16"></textarea></td>
                    <td><select class="col-9 align-top continOption contrecord form-control-sm form-control d-inline">
                            <option disabled="" selected="" value=""> select</option>
                            <option value="1">1 Incontinent of urine</option>
                            <option value="2">2 Pad change for incontinence of urine </option>
                            <option value="3">3 Pad has increased wetness</option>
                            <option value="4">4 Passed urine</option>
                            <option value="4b">4b Dry</option>
                            <option value="c">4c Resident continent</option>
                        </select><textarea class="float-right col-2 contrecord form-control form-control-sm"
                            name="story" placeholder="ID" rows="1" cols="16"></textarea></td>
                    <td><select class="col-9 align-top continOption contrecord form-control-sm form-control d-inline">
                            <option disabled="" selected="" value=""> select</option>
                            <option value="1">1 Incontinent of urine</option>
                            <option value="2">2 Pad change for incontinence of urine </option>
                            <option value="3">3 Pad has increased wetness</option>
                            <option value="4">4 Passed urine</option>
                            <option value="4b">4b Dry</option>
                            <option value="c">4c Resident continent</option>
                        </select><textarea class="float-right col-2 contrecord form-control form-control-sm"
                            name="story" placeholder="ID" rows="1" cols="16"></textarea></td>
                    <tr></tr>
                    <td><input class="contrecord form-control form-control-sm" id="continTime" type="text" value="19:00"
                            disabled="disabled" /></td>
                    <td><select class="col-9 align-top continOption contrecord form-control-sm form-control d-inline">
                            <option disabled="" selected="" value=""> select</option>
                            <option value="1">1 Incontinent of urine</option>
                            <option value="2">2 Pad change for incontinence of urine </option>
                            <option value="3">3 Pad has increased wetness</option>
                            <option value="4">4 Passed urine</option>
                            <option value="4b">4b Dry</option>
                            <option value="c">4c Resident continent</option>
                        </select><textarea class="float-right col-2 contrecord form-control form-control-sm"
                            name="story" placeholder="ID" rows="1" cols="16"></textarea></td>
                    <td><select class="col-9 align-top continOption contrecord form-control-sm form-control d-inline">
                            <option disabled="" selected="" value=""> select</option>
                            <option value="1">1 Incontinent of urine</option>
                            <option value="2">2 Pad change for incontinence of urine </option>
                            <option value="3">3 Pad has increased wetness</option>
                            <option value="4">4 Passed urine</option>
                            <option value="4b">4b Dry</option>
                            <option value="c">4c Resident continent</option>
                        </select><textarea class="float-right col-2 contrecord form-control form-control-sm"
                            name="story" placeholder="ID" rows="1" cols="16"></textarea></td>
                    <td><select class="col-9 align-top continOption contrecord form-control-sm form-control d-inline">
                            <option disabled="" selected="" value=""> select</option>
                            <option value="1">1 Incontinent of urine</option>
                            <option value="2">2 Pad change for incontinence of urine </option>
                            <option value="3">3 Pad has increased wetness</option>
                            <option value="4">4 Passed urine</option>
                            <option value="4b">4b Dry</option>
                            <option value="c">4c Resident continent</option>
                        </select><textarea class="float-right col-2 contrecord form-control form-control-sm"
                            name="story" placeholder="ID" rows="1" cols="16"></textarea></td>
                    <tr></tr>
                    <td><input class="contrecord form-control form-control-sm" id="continTime" type="text" value="20:00"
                            disabled="disabled" /></td>
                    <td><select class="col-9 align-top continOption contrecord form-control-sm form-control d-inline">
                            <option disabled="" selected="" value=""> select</option>
                            <option value="1">1 Incontinent of urine</option>
                            <option value="2">2 Pad change for incontinence of urine </option>
                            <option value="3">3 Pad has increased wetness</option>
                            <option value="4">4 Passed urine</option>
                            <option value="4b">4b Dry</option>
                            <option value="c">4c Resident continent</option>
                        </select><textarea class="float-right col-2 contrecord form-control form-control-sm"
                            name="story" placeholder="ID" rows="1" cols="16"></textarea></td>
                    <td><select class="col-9 align-top continOption contrecord form-control-sm form-control d-inline">
                            <option disabled="" selected="" value=""> select</option>
                            <option value="1">1 Incontinent of urine</option>
                            <option value="2">2 Pad change for incontinence of urine </option>
                            <option value="3">3 Pad has increased wetness</option>
                            <option value="4">4 Passed urine</option>
                            <option value="4b">4b Dry</option>
                            <option value="c">4c Resident continent</option>
                        </select><textarea class="float-right col-2 contrecord form-control form-control-sm"
                            name="story" placeholder="ID" rows="1" cols="16"></textarea></td>
                    <td><select class="col-9 align-top continOption contrecord form-control-sm form-control d-inline">
                            <option disabled="" selected="" value=""> select</option>
                            <option value="1">1 Incontinent of urine</option>
                            <option value="2">2 Pad change for incontinence of urine </option>
                            <option value="3">3 Pad has increased wetness</option>
                            <option value="4">4 Passed urine</option>
                            <option value="4b">4b Dry</option>
                            <option value="c">4c Resident continent</option>
                        </select><textarea class="float-right col-2 contrecord form-control form-control-sm"
                            name="story" placeholder="ID" rows="1" cols="16"></textarea></td>
                    <tr></tr>
                    <td><input class="contrecord form-control form-control-sm" id="continTime" type="text" value="21:00"
                            disabled="disabled" /></td>
                    <td><select class="col-9 align-top continOption contrecord form-control-sm form-control d-inline">
                            <option disabled="" selected="" value=""> select</option>
                            <option value="1">1 Incontinent of urine</option>
                            <option value="2">2 Pad change for incontinence of urine </option>
                            <option value="3">3 Pad has increased wetness</option>
                            <option value="4">4 Passed urine</option>
                            <option value="4b">4b Dry</option>
                            <option value="c">4c Resident continent</option>
                        </select><textarea class="float-right col-2 contrecord form-control form-control-sm"
                            name="story" placeholder="ID" rows="1" cols="16"></textarea></td>
                    <td><select class="col-9 align-top continOption contrecord form-control-sm form-control d-inline">
                            <option disabled="" selected="" value=""> select</option>
                            <option value="1">1 Incontinent of urine</option>
                            <option value="2">2 Pad change for incontinence of urine </option>
                            <option value="3">3 Pad has increased wetness</option>
                            <option value="4">4 Passed urine</option>
                            <option value="4b">4b Dry</option>
                            <option value="c">4c Resident continent</option>
                        </select><textarea class="float-right col-2 contrecord form-control form-control-sm"
                            name="story" placeholder="ID" rows="1" cols="16"></textarea></td>
                    <td><select class="col-9 align-top continOption contrecord form-control-sm form-control d-inline">
                            <option disabled="" selected="" value=""> select</option>
                            <option value="1">1 Incontinent of urine</option>
                            <option value="2">2 Pad change for incontinence of urine </option>
                            <option value="3">3 Pad has increased wetness</option>
                            <option value="4">4 Passed urine</option>
                            <option value="4b">4b Dry</option>
                            <option value="c">4c Resident continent</option>
                        </select><textarea class="float-right col-2 contrecord form-control form-control-sm"
                            name="story" placeholder="ID" rows="1" cols="16"></textarea></td>
                    <tr></tr>
                    <td><input class="contrecord form-control form-control-sm" id="continTime" type="text" value="22:00"
                            disabled="disabled" /></td>
                    <td><select class="col-9 align-top continOption contrecord form-control-sm form-control d-inline">
                            <option disabled="" selected="" value=""> select</option>
                            <option value="1">1 Incontinent of urine</option>
                            <option value="2">2 Pad change for incontinence of urine </option>
                            <option value="3">3 Pad has increased wetness</option>
                            <option value="4">4 Passed urine</option>
                            <option value="4b">4b Dry</option>
                            <option value="c">4c Resident continent</option>
                        </select><textarea class="float-right col-2 contrecord form-control form-control-sm"
                            name="story" placeholder="ID" rows="1" cols="16"></textarea></td>
                    <td><select class="col-9 align-top continOption contrecord form-control-sm form-control d-inline">
                            <option disabled="" selected="" value=""> select</option>
                            <option value="1">1 Incontinent of urine</option>
                            <option value="2">2 Pad change for incontinence of urine </option>
                            <option value="3">3 Pad has increased wetness</option>
                            <option value="4">4 Passed urine</option>
                            <option value="4b">4b Dry</option>
                            <option value="c">4c Resident continent</option>
                        </select><textarea class="float-right col-2 contrecord form-control form-control-sm"
                            name="story" placeholder="ID" rows="1" cols="16"></textarea></td>
                    <td><select class="col-9 align-top continOption contrecord form-control-sm form-control d-inline">
                            <option disabled="" selected="" value=""> select</option>
                            <option value="1">1 Incontinent of urine</option>
                            <option value="2">2 Pad change for incontinence of urine </option>
                            <option value="3">3 Pad has increased wetness</option>
                            <option value="4">4 Passed urine</option>
                            <option value="4b">4b Dry</option>
                            <option value="c">4c Resident continent</option>
                        </select><textarea class="float-right col-2 contrecord form-control form-control-sm"
                            name="story" placeholder="ID" rows="1" cols="16"></textarea></td>
                    <tr></tr>
                    <td><input class="contrecord form-control form-control-sm" id="continTime" type="text" value="23:00"
                            disabled="disabled" /></td>
                    <td><select class="col-9 align-top continOption contrecord form-control-sm form-control d-inline">
                            <option disabled="" selected="" value=""> select</option>
                            <option value="1">1 Incontinent of urine</option>
                            <option value="2">2 Pad change for incontinence of urine </option>
                            <option value="3">3 Pad has increased wetness</option>
                            <option value="4">4 Passed urine</option>
                            <option value="4b">4b Dry</option>
                            <option value="c">4c Resident continent</option>
                        </select><textarea class="float-right col-2 contrecord form-control form-control-sm"
                            name="story" placeholder="ID" rows="1" cols="16"></textarea></td>
                    <td><select class="col-9 align-top continOption contrecord form-control-sm form-control d-inline">
                            <option disabled="" selected="" value=""> select</option>
                            <option value="1">1 Incontinent of urine</option>
                            <option value="2">2 Pad change for incontinence of urine </option>
                            <option value="3">3 Pad has increased wetness</option>
                            <option value="4">4 Passed urine</option>
                            <option value="4b">4b Dry</option>
                            <option value="c">4c Resident continent</option>
                        </select><textarea class="float-right col-2 contrecord form-control form-control-sm"
                            name="story" placeholder="ID" rows="1" cols="16"></textarea></td>
                    <td><select class="col-9 align-top continOption contrecord form-control-sm form-control d-inline">
                            <option disabled="" selected="" value=""> select</option>
                            <option value="1">1 Incontinent of urine</option>
                            <option value="2">2 Pad change for incontinence of urine </option>
                            <option value="3">3 Pad has increased wetness</option>
                            <option value="4">4 Passed urine</option>
                            <option value="4b">4b Dry</option>
                            <option value="c">4c Resident continent</option>
                        </select><textarea class="float-right col-2 contrecord form-control form-control-sm"
                            name="story" placeholder="ID" rows="1" cols="16"></textarea></td>
                </div>
            </tbody>
        </table><a class="btn btn-sm btn-primary" onclick="checkInputCont()"> Download to PDF</a><i
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