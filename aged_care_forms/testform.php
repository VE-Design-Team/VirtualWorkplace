hello world
<div class="content">

    <div class="container p-5  page rounded-lg">
        <div class="row">
            <h3 class="pb-4 pl-3">Test form</h3>
        </div>
        <form class="form-horizontal">
  <fieldset>

  <!-- Form Name -->
  <legend>Wound chart</legend>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="Family name">Family name</label>
    <div class="col-md-4">
    <input id="Family name" name="Family name" type="text" placeholder="Family name" class="form-control input-md">
    <span class="help-block">Type in patient family name</span>
    </div>
  </div>

  <!-- Button Drop Down -->
  <div class="form-group">
    <label class="col-md-4 control-label" for="Gender">Gender</label>
    <div class="col-md-4">
      <div class="input-group">
        <input id="Gender" name="Gender" class="form-control" placeholder="Gender" type="text">
        <div class="input-group-btn">
          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
            Action
            <span class="caret"></span>
          </button>
          <ul class="dropdown-menu pull-right">
            <li><a href="#">Male</a></li>
            <li><a href="#">Female</a></li>
            <li><a href="#">Not listed</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="URN">URN</label>
    <div class="col-md-4">
    <input id="URN" name="URN" type="text" placeholder="URN" class="form-control input-md">
    <span class="help-block">Type in URN</span>
    </div>
  </div>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="Date of birth">Date of birth</label>
    <div class="col-md-4">
    <input id="Date of birth" name="Date of birth" type="text" placeholder="Date of birth" class="form-control input-md">
    <span class="help-block">Date of birth</span>
    </div>
  </div>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="Given name">Given name</label>
    <div class="col-md-4">
    <input id="Given name" name="Given name" type="text" placeholder="Given name" class="form-control input-md">
    <span class="help-block">help</span>
    </div>
  </div>

  <!-- Button -->
  <div class="form-group">
    <label class="col-md-4 control-label" for="Download to PDF">Download to PDF</label>
    <div class="col-md-4">
      <button id="Download to PDF" name="Download to PDF" class="btn btn-primary" class="btn btn btn-sm btn-primary mr-2" onclick="checkInputTestform()">Download to PDF</button>
    </div>
  </div>

  </fieldset>
  </form>

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
