<div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title">Add Student</h4>
                                    <p class="card-category">Complete student profile</p>
                                </div>
                                <!-- <div class=" custom-bg-danger card-header card-header-tabs card-header-primary ">
                                    <div class="nav-tabs-navigation">
                                        <div class="nav-tabs-wrapper">
                                            <span class="nav-tabs-title">Tasks:</span>
                                            <ul class="nav nav-tabs" data-tabs="tabs">
                                                <li class="nav-item">
                                                    <a class="nav-link active" href="#pi" data-toggle="tab">
                                                        <i class="material-icons">person</i> Personal Information
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#cd" data-toggle="tab">
                                                        <i class="material-icons">code</i> Contact Details
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#ref" data-toggle="tab">
                                                        <i class="material-icons">cloud</i> Reference
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div> -->
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="pi">
                                            <form id="add-student-form" method="post">
                                                <input type="hidden" name="function-type" value="add-student" />
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group bmd-form-group">
                                                            <label class="bmd-label-floating">Firstname *</label>
                                                            <input type="text" name="student-firstname" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group bmd-form-group">
                                                            <label class="bmd-label-floating">Lastname *</label>
                                                            <input name="student-lastname" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group bmd-form-group">
                                                            <label class="bmd-label-floating">Middlename *</label>
                                                            <input name="student-middlename" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group bmd-form-group">
                                                            <label class="bmd-label-floating">Nickname</label>
                                                            <input name="student-nickname" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group bmd-form-group">
                                                            <label class="bmd-label-floating">Student No. *</label>
                                                            <input name="student-studid" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group bmd-form-group">
                                                            <label class="bmd-label-floating">Strand and Section *</label>
                                                            <input name="student-strand-section" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group bmd-form-group">
                                                            <label class="bmd-label-floating">Present Address *</label>
                                                            <input name="student-present-address" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group bmd-form-group">
                                                            <label class="bmd-label-floating">Permanent Address *</label>
                                                            <input name="student-permanent-address" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group bmd-form-group">
                                                            <label class="bmd-label-floating">Contact Number *</label>
                                                            <input type="number" name="student-contact-number" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group bmd-form-group">
                                                            <label class="bmd-label-floating">UE Email Address</label>
                                                            <input type="email" name="student-ue-email-address" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group bmd-form-group">
                                                            <label class="bmd-label-floating">Email Address *</label>
                                                            <input type="email" name="student-email-address" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <div class="form-group bmd-form-group">
                                                            <label class="bmd-label-floating">Age *</label>
                                                            <input type="number" name="student-age" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="date__birth__container">
                                                            <div class="date__birth__container--title">Date of Birth</div>
                                                            <div class="form-group bmd-form-group">
                                                                <!-- <label class="bmd-label-floating">Date of Birth *</label> -->
                                                                <input type="date" name="student-birthday" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group bmd-form-group">
                                                            <label class="bmd-label-floating">Place of birth *</label>
                                                            <input type="text" name="student-placeofbirth" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group bmd-form-group">
                                                            <label class="bmd-label-floating">Citizenship *</label>
                                                            <input type="text" name="student-citizenship" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group bmd-form-group">
                                                            <label class="bmd-label-floating">Religion</label>
                                                            <input type="text" name="student-religion" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group bmd-form-group">
                                                            <label class="bmd-label-floating">Civil Status</label>
                                                            <input type="text" name="student-civil-status" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group bmd-form-group">
                                                            <div class="form-group">
                                                                <select class="form-control " name="student-sex">
                                                                    <option value="">Gender</option>
                                                                    <option value="1">Male</option>
                                                                    <option value="2">Female</option>
                                                                    <option value="3">Prefer not to say</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group bmd-form-group">
                                                            <div class="form-group">
                                                                <select class="form-control " name="student-gender">
                                                                    <option value="">Gender Identity</option>
                                                                    <option value="0">Affectional orientation</option>
                                                                    <option value="1">Transgender </option>
                                                                    <option value="2">Prefer not to say</option>
                                                                    <option value="3">Lesbian</option>
                                                                    <option value="4">Gay</option>
                                                                    <option value="5">Bisexual</option>
                                                                    <option value="6">Others</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group bmd-form-group">
                                                            <div class="form-group">
                                                                <select class="form-control " name="student-living-with">
                                                                    <option value="">Living With</option>
                                                                    <option value="1">Parents</option>
                                                                    <option value="2">Siblings only</option>
                                                                    <option value="3">Relatives</option>
                                                                    <option value="4">Alone, in a rented space/dormitory</option>
                                                                    <option value="5">Alone, as a bed spacer </option>
                                                                    <option value="6">Others</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group bmd-form-group">
                                                            <div class="form-group">
                                                                <select class="form-control " name="student-type">
                                                                    <option value="">Student Type *</option>
                                                                    <option value="0">Grade School</option>
                                                                    <option value="1">High School </option>
                                                                    <option value="2">Senior High</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group bmd-form-group">
                                                            <div class="form-group">
                                                                <select class="form-control " name="student-living-condition">
                                                                    <option value="">Present Living Condition</option>
                                                                    <option value="0">Poor (Less than PHP 10,481)</option>
                                                                    <option value="1">Low-income class (Between PHP 10,481 and PHP 20,962) </option>
                                                                    <option value="2">Lower middle-income class (Between PHP 20,962 and PHP 41,924)</option>
                                                                    <option value="3">Middle middle-income class (Between PHP 41,924 and PHP 73,367)</option>
                                                                    <option value="4">Upper middle-income class (Between PHP 73,367 and PHP 125,772) </option>
                                                                    <option value="5">Upper-income class (Between PHP 125,772 and PHP 209,620)</option>
                                                                    <option value="6">Rich (PHP 209,620 and above)</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="eduction__header">
                                                    <h3>Education</h3>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group bmd-form-group">
                                                            <label class="bmd-label-floating">Elementary School</label>
                                                            <input type="text" name="student-elementry-school" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group bmd-form-group">
                                                            <label class="bmd-label-floating">Junior High School</label>
                                                            <input name="student-junior-hs" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group bmd-form-group">
                                                            <label class="bmd-label-floating">Vocational / Special Course/s </label>
                                                            <input name="student-vocational" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-end">
                                                    <button id="submit-student-form" class="btn btn-primary ">
                                                        Submit
                                                    </button>
                                                </div>
                                        </div>
                                        </form>

                                        <!-- <div class="tab-pane" id="cd">
                                            2
                                        </div>
                                        <div class="tab-pane" id="ref">
                                            3
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title ">Simple Table</h4>
                                    <p class="card-category"> Here is a subtitle for this table</p>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive" id="studentTable">
                                        <table class="table" id="studentDataTable">
                                            <thead class=" text-primary">
                                                <tr>
                                                    <th>
                                                        ID
                                                    </th>
                                                    <th>
                                                        Firstname
                                                    </th>
                                                    <th>
                                                        Middlename
                                                    </th>
                                                    <th>
                                                        Lastname
                                                    </th>
                                                    <th>
                                                        Email
                                                    </th>
                                                    <th>
                                                        Contact Number
                                                    </th>
                                                    <th>
                                                        Student Type
                                                    </th>
                                                    <th>
                                                        Student School ID
                                                    </th>
                                                    <th>
                                                        Action
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>