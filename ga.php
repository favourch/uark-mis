<?php
    include 'header.php';
?>

<!-- Page Content Container -->
<div class="container-fluid">
    
    <form id="gaRequestForm" action="/gaRequestSubmit.php" method="post" enctype="multipart/form-data">
        
    <!-- Faculty Information & GA Request -->
    <div class="row">

        <div class="col-md-12 col-sm-12">

            <div class="panel panel-default">

                <div class="panel-heading">
                    <h2 class="panel-title">Faculty Information & Graduate Assistant Request</h2>
                </div>

                <div class="panel-body">

                    <!-- Faculty Information Left Column -->
                    <div class="col-md-6 col-sm-6">

                        <div class="form-group">
                            <label for="firstName">First Name</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input type="text" class="form-control" name="firstName" id="firstName" placeholder="John">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="lastName">Last Name</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input type="text" class="form-control" name="lastName" id="lastName" placeholder="Doe">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="department">Department</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-institution"></i></span>
                                <select name="department" id="department" class="selectpicker show-tick form-control" data-live-search="true">
                                    <option>ACCT</option>
                                    <option>ECON</option>
                                    <option>FINN</option>
                                    <option selected="selected">ISYS</option>
                                    <option>MGMT</option>
                                    <option>MKTG</option>
                                    <option>SCMT</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="email" class="form-control" name="email"  id="email" placeholder="example@domain.com">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                <input type="tel" class="form-control" name="phone" id="phone" placeholder="(800) 555-1234">
                            </div>
                        </div>

                    </div>

                    <!-- GA Duties Right Column -->
                    <div class="col-md-6 col-sm-6">

                        <div class="form-group">
                            <label for="gaHelp">Please describe how a GA would be helpful to you in your professional endeavors (e.g. teaching, research, service, etc.).</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-comment"></i></span>
                                <textarea class="form-control custom-control" rows="4" name="gaHelp" id="gaHelp"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="hoursRequired">On average, how many hours of work is needed each week?</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                                <input type="number" pattern="\d*" class="form-control" name="hoursRequired"  id="hoursRequired" placeholder="20">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="gaDescription">Please provide a brief job description (e.g. duties to be performed).</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-comment"></i></span>
                                <textarea class="form-control custom-control" rows="3" name="gaDescription" id="gaDescription"></textarea>
                            </div>
                        </div>

                        <div class="form-group">                
                            <label>Would you like to request multiple GAs for the same task?&nbsp;&nbsp;
                                <label class="checkbox-inline"><input name="multipleGAs" id="multipleGAs" type="checkbox" value="multipleGAs">Yes</label>
                            </label>
                        </div>

                        <div class="multipleGAs box">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">How many?</span>
                                    <input type="number" class="form-control" name="multipleGAsNumber" value="multipleGAsNumber" placeholder="2">
                                </div>
                            </div><br>
                        </div>

                    </div>

                </div>

            </div>

        </div>       

    </div>

    <!-- GA Skills -->
    <div class="row">        

        <div class="col-md-12 col-sm-12">

            <div class="panel panel-default">

                <div class="panel-heading">
                    <h2 class="panel-title">Graduate Assistant Skills</h2>
                </div>

                <div class="panel-body">

                    <!-- Left Column -->
                    <div class="col-md-6 col-sm-6">

                        <h4 class="text-center"><b>Technical Skills</b></h4>

                        <table class="table">
                            <!-- Table Header -->
                            <thead>
                                <tr>
                                    <th width="32%" class="text-center"></th>
                                    <th width="17%" class="text-center">None</th>
                                    <th width="17%" class="text-center">Low</th>
                                    <th width="17%" class="text-center">Medium</th>
                                    <th width="17%" class="text-center">High</th>
                                </tr>
                            </thead>

                            <!-- Table Body -->
                            <tbody>
                            <form>
                                <tr>
                                    <td><label>Internet <i class="fa fa-info-circle" rel="tooltip" title="skills include..."></i></label></td>
                                    <td class="text-center"><input type="radio" id="internet0" name="internet"></td>
                                    <td class="text-center"><input type="radio" id="internet1" name="internet"></td>
                                    <td class="text-center"><input type="radio" id="internet2" name="internet"></td>
                                    <td class="text-center"><input type="radio" id="internet3" name="internet"></td>
                                </tr>
                                <tr>
                                    <td><label>Word Processing <i class="fa fa-info-circle" rel="tooltip" title="skills include..."></i></label></td>
                                    <td class="text-center"><input type="radio" id="wordprocessing0" name="wordprocessing"></td>
                                    <td class="text-center"><input type="radio" id="wordprocessing1" name="wordprocessing"></td>
                                    <td class="text-center"><input type="radio" id="wordprocessing2" name="wordprocessing"></td>
                                    <td class="text-center"><input type="radio" id="wordprocessing3" name="wordprocessing"></td>
                                </tr>
                                <tr>
                                    <td><label>Spreadsheets <i class="fa fa-info-circle" rel="tooltip" title="skills include..."></i></label></td>
                                    <td class="text-center"><input type="radio" id="spreadsheets0" name="spreadsheets"></td>
                                    <td class="text-center"><input type="radio" id="spreadsheets1" name="spreadsheets"></td>
                                    <td class="text-center"><input type="radio" id="spreadsheets2" name="spreadsheets"></td>
                                    <td class="text-center"><input type="radio" id="spreadsheets3" name="spreadsheets"></td>
                                </tr>
                                <tr>
                                    <td><label>Programming <i class="fa fa-info-circle" rel="tooltip" title="skills include..."></i></label></td>
                                    <td class="text-center"><input type="radio" id="programming0" name="programming"></td>
                                    <td class="text-center"><input type="radio" id="programming1" name="programming"></td>
                                    <td class="text-center"><input type="radio" id="programming2" name="programming"></td>
                                    <td class="text-center"><input type="radio" id="programming3" name="programming"></td>
                                </tr>
                                <tr>
                                    <td><label>Database <i class="fa fa-info-circle" rel="tooltip" title="skills include..."></i></label></td>
                                    <td class="text-center"><input type="radio" id="database0" name="database"></td>
                                    <td class="text-center"><input type="radio" id="database1" name="database"></td>
                                    <td class="text-center"><input type="radio" id="database2" name="database"></td>
                                    <td class="text-center"><input type="radio" id="database3" name="database"></td>
                                </tr>
                                <tr>
                                    <td><label>SAP <i class="fa fa-info-circle" rel="tooltip" title="skills include..."></i></label></td>
                                    <td class="text-center"><input type="radio" id="sap0" name="sap"></td>
                                    <td class="text-center"><input type="radio" id="sap1" name="sap"></td>
                                    <td class="text-center"><input type="radio" id="sap2" name="sap"></td>
                                    <td class="text-center"><input type="radio" id="sap3" name="sap"></td>
                                </tr>
                            </form>
                            </tbody>

                        </table>

                        <div class="form-group">
                            <label for="firstName">Statistical Packages (optional)</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-bar-chart"></i></span>
                                <input type="text" class="form-control" name="statisticalpackages" id="statisticalpackages" placeholder="SAS, R, SPSS, Teradata, Stata, etc.">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="programminglanguages">Desired Programming Languages (optional)</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-code"></i></span>
                                <input type="text" class="form-control" name="programminglanguages" id="programminglanguages" placeholder="Java, Python, C#, SQL, Visual Basic, etc.">
                            </div>
                        </div>

                    </div>

                    <!-- Right Column -->
                    <div class="col-md-6 col-sm-6">

                        <h4 class="text-center"><b>Communication & Other Skills</b></h4>

                        <table class="table">
                            <!-- Table Header -->
                            <thead>
                                <tr>
                                    <th width="32%" class="text-center"></th>
                                    <th width="17%" class="text-center">None</th>
                                    <th width="17%" class="text-center">Low</th>
                                    <th width="17%" class="text-center">Medium</th>
                                    <th width="17%" class="text-center">High</th>
                                </tr>
                            </thead>

                            <!-- Table Body -->
                            <tbody>
                            <form>
                                <tr>
                                    <td><label>Writing <i class="fa fa-info-circle" rel="tooltip" title="skills include..."></i></label></td>
                                    <td class="text-center"><input type="radio" id="internet0" name="internet"></td>
                                    <td class="text-center"><input type="radio" id="internet1" name="internet"></td>
                                    <td class="text-center"><input type="radio" id="internet2" name="internet"></td>
                                    <td class="text-center"><input type="radio" id="internet3" name="internet"></td>
                                </tr>
                                <tr>
                                    <td><label>Editing <i class="fa fa-info-circle" rel="tooltip" title="skills include..."></i></label></td>
                                    <td class="text-center"><input type="radio" id="wordprocessing0" name="wordprocessing"></td>
                                    <td class="text-center"><input type="radio" id="wordprocessing1" name="wordprocessing"></td>
                                    <td class="text-center"><input type="radio" id="wordprocessing2" name="wordprocessing"></td>
                                    <td class="text-center"><input type="radio" id="wordprocessing3" name="wordprocessing"></td>
                                </tr>
                                <tr>
                                    <td><label>English-Speaking <i class="fa fa-info-circle" rel="tooltip" title="skills include..."></i></label></td>
                                    <td class="text-center"><input type="radio" id="spreadsheets0" name="spreadsheets"></td>
                                    <td class="text-center"><input type="radio" id="spreadsheets1" name="spreadsheets"></td>
                                    <td class="text-center"><input type="radio" id="spreadsheets2" name="spreadsheets"></td>
                                    <td class="text-center"><input type="radio" id="spreadsheets3" name="spreadsheets"></td>
                                </tr>
                                <tr>
                                    <td><label>Grading <i class="fa fa-info-circle" rel="tooltip" title="skills include..."></i></label></td>
                                    <td class="text-center"><input type="radio" id="programming0" name="programming"></td>
                                    <td class="text-center"><input type="radio" id="programming1" name="programming"></td>
                                    <td class="text-center"><input type="radio" id="programming2" name="programming"></td>
                                    <td class="text-center"><input type="radio" id="programming3" name="programming"></td>
                                </tr>
                            </form>
                            </tbody>

                        </table>

                        <div class="form-group">
                            <label for="otherskills">Please list any other desired skills not menioned (optional).</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-comment"></i></span>
                                <textarea class="form-control custom-control" rows="2" name="otherskills" id="otherskills"></textarea>
                            </div>
                        </div>
                        
                    </div>

                </div>

            </div>

        </div>       

    </div>

    <!-- Specific Request -->
    <div class="row">        

        <div class="col-md-12 col-sm-12">

            <div class="panel panel-default">

                <div class="panel-heading">
                    <h2 class="panel-title">Request a Specific GA (optional)</h2>
                </div>

                <div class="panel-body">

                    <!-- Admission Request Left Column-->
                    <div class="col-md-6 col-sm-6">

                        <div class="form-group">
                            <label for="firstName">First Name</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input type="text" class="form-control" name="firstName" id="firstName" placeholder="John">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="lastName">Last Name</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input type="text" class="form-control" name="lastName" id="lastName" placeholder="Doe">
                            </div>
                        </div>                                             

                    </div>

                    <!-- Admission Request Right Column -->
                    <div class="col-md-6 col-sm-6">

                        <div class="form-group">
                            <label for="gaComments">Comments:</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-comment-o"></i></span>
                                <textarea class="form-control custom-control" rows="5" name="gaComments" id="gaComments"></textarea>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>
        
    </div>

    <div class="col-md-2 col-sm-4 col-md-offset-5 col-sm-offset-4 text-center">   
        <input type="submit" class="btn btn-success btn-lg" id="submitButton" value="Submit Request"><br>
    </div>

    </form>
    
</div>

<?php
    include 'footer.php';
?>