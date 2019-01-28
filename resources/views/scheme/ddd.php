<?php

session_start();

//include("includes/header_file.inc");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Registration System</title>
    <link rel="stylesheet" href="styles/style.css"media="screen" />
    <!--[if IE 6]><link rel="stylesheet" href="style.ie6.css" type="text/css" media="screen" /><![endif]-->
    <!--[if IE 7]><link rel="stylesheet" href="style.ie7.css" type="text/css" media="screen" /><![endif]-->
    <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>-->

    <!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->

    <!-- Bootstrap Date-Picker Plugin -->

    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <!--Add Button Scripts-->
    <!--<script type="text/javascript" src="javascript/datetimepicker.js"></script>-->
    <!--<script type="text/javascript" src="javascript/jquery-1.3.2.min.js"></script>-->

    <link rel="stylesheet" href="styles/datepicker.css">
    <link rel="stylesheet" href="styles/bootstrap.css">

    <link rel="stylesheet" href="styles/jquery-ui.css">


</head>
<body>
<div id="art-page-background-glare">
    <div id="art-page-background-glare-image">
        <div id="art-main">
            <div class="art-sheet">
                <div class="art-sheet-tl"></div>
                <div class="art-sheet-tr"></div>
                <div class="art-sheet-bl"></div>
                <div class="art-sheet-br"></div>
                <div class="art-sheet-tc"></div>
                <div class="art-sheet-bc"></div>
                <div class="art-sheet-cl"></div>
                <div class="art-sheet-cr"></div>
                <div class="art-sheet-cc"></div>
                <div class="art-sheet-body">
                    <div class="art-header">
                        <div class="art-header-center">
                            <div class="art-header-png"></div>
                        </div>
                    </div>
                    <?php
                    include("includes/top-menu-default.inc");
                    ?>
                    <h2 class="art-postheader">ESP :: Register : New Manager</h2>
                    <hr />
                    <div class="art-postcontent">
                        <div class="art-layout-cell art-content">

                            <!--Mkeka wa Form-->

                            <table width="1000" border="0" align="center">
                                <tr>
                                    <td>&nbsp;
                                        <!--LOGIN FORM-->

                                        <div class="art-post">
                                            <div class="art-post-tl"></div>
                                            <div class="art-post-tr"></div>
                                            <div class="art-post-bl"></div>
                                            <div class="art-post-br"></div>
                                            <div class="art-post-tc"></div>
                                            <div class="art-post-bc"></div>
                                            <div class="art-post-cl"></div>
                                            <div class="art-post-cr"></div>
                                            <div class="art-post-cc"></div>
                                            <div class="art-post-body-inner">
                                                <div class="art-post-inner art-article">
                                                    <?php
                                                    if(isset($_SESSION['ERRMSG_ARR'])){
                                                        echo $_SESSION['ERRMSG_ARR'];

                                                        unset($_SESSION['ERRMSG_ARR']);

                                                    }
                                                    ?>
                                                    <form action="executions/register_manager_exec.php" method="post" id="registration_manager" name="registration_manager" enctype="multipart/form-data">
                                                        <input name="nodirects" id="nodirects" type="hidden" value="1" />
                                                        <input name="notopmanagers" id="notopmanagers" type="hidden" value="1" />
                                                        <input name="nopaidupshares" id="nopaidupshares" type="hidden" value="1" />
                                                        <input name="noauthorizedshares" id="noauthorizedshares" type="hidden" value="1" />
                                                        <div id="accordion">
                                                            <h3>GENERAL</h3>
                                                            <div>
                                                                <table width="820px" border="0" align="center">
                                                                    <br />
                                                                    <tr height="40px">
                                                                        <td width="25%"><span  style="float:right">Manager's Name:</span></td>
                                                                        <td width="200px"><span  style="float:right">
                                      <input required="required" name="manager_name" type="text" size="27"/>
                                      </span></td>
                                                                        <td rowspan="7" width="2%"><img src="images/strip separator.png" width="15" alt="ssra" height="100%"/></td>
                                                                        <td width="30px" rowspan="7">&nbsp;</td>
                                                                        <td width="25%"><h1  style="float:right; padding-right:20px">Address:</h1></td>
                                                                        <td width="200px">&nbsp;</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><h1  style="float:right; padding-right:20px">Registered Office:</h1></td>
                                                                        <td>&nbsp;</td>
                                                                        <td><span  style="float:right">Postal No.:</span></td>
                                                                        <td><span  style="float:right">
                                      <input required="required" name="manager_postal" type="text" size="25" onkeypress="return numbersonly(this, event)" maxlength="8"/>
                                      </span></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><span  style="float:right">Town:</span></td>
                                                                        <td><span  style="float:right">
                                      <input required="required" name="manager_town" type="text" size="27"/>
                                      </span></td>
                                                                        <td><span  style="float:right">Phone No.:</span></td>
                                                                        <td><span  style="float:right">
                                      <input required="required" name="manager_phone" type="text" size="25" onkeypress="return phonefield(this, event)" maxlength="16"/>
                                      </span></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><span  style="float:right">Road:</span></td>
                                                                        <td><span  style="float:right">
                                      <input required="required" name="manager_road" type="text" size="27"/>
                                      </span></td>
                                                                        <td><span  style="float:right">Fax:</span></td>
                                                                        <td><span  style="float:right">
                                      <input required="required" name="manager_fax" type="text" size="25" onkeypress="return phonefield(this, event)" maxlength="16"/>
                                      </span></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><span  style="float:right">House No:</span></td>
                                                                        <td><span  style="float:right">
                                      <input required="required" name="manager_house_no" type="text" size="27"/>
                                      </span></td>
                                                                        <td><span  style="float:right">E-mail:</span></td>
                                                                        <td><span  style="float:right">
                                      <input required="required" name="manager_email" type="email" size="25"/>
                                      </span></td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                            <h3>MANAGEMENT</h3>

                                                            <div>
                                                                <table width="820px" border="0" align="center">
                                                                    <br />
                                                                    <tr height="40px">
                                                                        <td width="25%"><span  style="float:right">Date Of Incorporation:</span></td>
                                                                        <td width="200px"><span  style="float:right">
                                      <input required="required" name="manager_date_incorporation" type="text" size="25" class="datepicker"/>
                                      </span></td>
                                                                        <td rowspan="2" width="2%"><img src="images/strip separator.png" width="15" alt="ssra" height="100%"/></td>
                                                                        <td width="20px" rowspan="2">&nbsp;</td>
                                                                        <td><span  style="float:right">Incorporation Certificate. No.:</span></td>
                                                                        <td><span  style="float:right">
                                      <input required="required" name="manager_cert_incorporation" type="text" size="25"/>
                                      </span></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><span  style="float:right">Income Tax PIN No.:</span></td>
                                                                        <td><span  style="float:right">
                                      <input required="required" name="manager_tin" type="text" size="25"/>
                                      </span></td>
                                                                        <td><span  style="float:right">Income Tax Reference No.:</span></td>
                                                                        <td><span  style="float:right">
                                      <input required="required" name=" manager_ref_no_income" type="text" size="25"/>
                                      </span></td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                            <h3>BOARD OF DIRECTORS</h3>
                                                            <div>
                                                                <table width="1150" border="0" align="center">
                                                                    <tr>
                                                                        <td width="200">Director (Full Name)</td>
                                                                        <td width="120">Nationality</td>
                                                                        <td width="300">Permanent Address</td>
                                                                        <td width="120">Occupation</td>
                                                                        <td width="140">Date of Appointment</td>
                                                                        <td width="140">No. of Shares held</td>
                                                                        <td rowspan="3"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan="6"><div id='divDirectorsGroup'>
                                                                                <div id="divDirectors1">
                                                                                    <table width="100%" border="0">
                                                                                        <tr>
                                                                                            <td width="14%"><input required="required" type="text" size="27" name="director_name1"/></td>
                                                                                            <td width="10%"><select name="director_nationality_id1">
                                                                                                    <option value="1">Tanzania</option>
                                                                                                    <option value="2">Kenya</option>
                                                                                                    <option value="3">Uganda</option>
                                                                                                    <option value="4">Rwanda</option>
                                                                                                    <option value="5">Burundi</option>
                                                                                                    <option value="6">South Africa</option>
                                                                                                    <option value="7">British</option>
                                                                                                    <option value="8">American</option>
                                                                                                    <option value="9">Italian</option>
                                                                                                    <option value="10">Chinese</option>
                                                                                                    <option value="12">Yemen</option>
                                                                                                    <option value="12">Zambia</option>
                                                                                                    <option value="12">Zimbabwe</option>
                                                                                                    <option value="12">Venezuele</option>
                                                                                                    <option value="12">Uruguay</option>
                                                                                                    <option value="12">Turkey</option>
                                                                                                    <option value="12">Tunisia</option>
                                                                                                    <option value="12">Thailand</option>
                                                                                                    <option value="12">Syria</option>
                                                                                                    <option value="12">Sweden</option>
                                                                                                    <option value="12">Swaziland</option>
                                                                                                    <option value="12">Sudan</option>
                                                                                                    <option value="12">Spain</option>
                                                                                                    <option value="12">Senegal</option>
                                                                                                    <option value="12">Russia</option>
                                                                                                    <option value="12">Pakistan</option>
                                                                                                    <option value="12">Nigeria</option>
                                                                                                    <option value="12">Maxico</option>
                                                                                                    <option value="12">Mali</option>
                                                                                                    <option value="12">Malawi</option>
                                                                                                    <option value="12">India</option>

                                                                                                </select></td>
                                                                                            <td width="22%"><input required="required" type="text" size="45" name="director_address1"/></td>
                                                                                            <td width="12%"><input required="required" type="text" size="15" name="director_occupation1"/></td>
                                                                                            <td width="10%"><input required="required" type="text" size="20" name="director_date_of_appointment1" id="director_date_of_appointment1" onkeypress="return nowriting(this, event)" class="datepicker"/></td>
                                                                                            <td width="10%"><input required="required" type="text" size="15" name="director_no_of_shares1" onkeypress="return numbersonly(this, event)"/></td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </div>
                                                                            </div></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><span class="classname" id='addButtonDirectors'>+ Add More</span></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                            <h3>PARTICULARS OF THE TOP MANAGEMENT OF THE MANAGER</h3>
                                                            <div>
                                                                <table width="1320px" border="0" align="center">
                                                                    <tr>
                                                                        <td width="200">Executive (Full Name)</td>
                                                                        <td width="150">Designation</td>
                                                                        <td width="120">Nationality</td>
                                                                        <td width="200">Permanent Address</td>
                                                                        <td width="130">Date of Appointment</td>
                                                                        <td width="260">Academic and Professional Qualifications</td>
                                                                        <td width="130">Years of Experience</td>
                                                                        <td width="20"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan="8"><div id='divManagerParticularsGroup'>
                                                                                <div id="divManagerParticulars1">
                                                                                    <table width="100%" border="0">
                                                                                        <tr>
                                                                                            <td width="190"><input required="required" type="text" size="30" name="top_fullname1"/></td>
                                                                                            <td width="153"><input required="required" type="text" name="top_designation1"/></td>
                                                                                            <td width="120"><select name="top_nationality1">
                                                                                                    <option value="1">Tanzania</option>
                                                                                                    <option value="2">Kenya</option>
                                                                                                    <option value="3">Uganda</option>
                                                                                                    <option value="4">Rwanda</option>
                                                                                                    <option value="5">Burundi</option>
                                                                                                    <option value="6">South Africa</option>
                                                                                                    <option value="7">British</option>
                                                                                                    <option value="8">American</option>
                                                                                                    <option value="9">Italian</option>
                                                                                                    <option value="10">Chinese</option>
                                                                                                    <option value="12">Yemen</option>
                                                                                                    <option value="12">Zambia</option>
                                                                                                    <option value="12">Zimbabwe</option>
                                                                                                    <option value="12">Venezuele</option>
                                                                                                    <option value="12">Uruguay</option>
                                                                                                    <option value="12">Turkey</option>
                                                                                                    <option value="12">Tunisia</option>
                                                                                                    <option value="12">Thailand</option>
                                                                                                    <option value="12">Syria</option>
                                                                                                    <option value="12">Sweden</option>
                                                                                                    <option value="12">Swaziland</option>
                                                                                                    <option value="12">Sudan</option>
                                                                                                    <option value="12">Spain</option>
                                                                                                    <option value="12">Senegal</option>
                                                                                                    <option value="12">Russia</option>
                                                                                                    <option value="12">Pakistan</option>
                                                                                                    <option value="12">Nigeria</option>
                                                                                                    <option value="12">Maxico</option>
                                                                                                    <option value="12">Mali</option>
                                                                                                    <option value="12">Malawi</option>
                                                                                                    <option value="12">India</option>
                                                                                                </select></td>
                                                                                            <td width="207"><input required="required" type="text" size="35" name="top_address1"/></td>
                                                                                            <td width="130"><input required="required" type="text" size="18" name="top_date_of_appointment1" id="top_date_of_appointment1" onkeypress="return nowriting(this, event)"class="datepicker"/>
                                                                                            </td>
                                                                                            <td width="260"><input required="required" type="text" size="42" name="top_academic1"/></td>
                                                                                            <td width="130"><input required="required" type="text" name="top_experience1" onkeypress="return numbersonly(this, event)" maxlength="2"/></td>
                                                                                            <td width="20"></td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </div>
                                                                            </div></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><span class="classname" id='addButtonTopManagers'>+ Add More</span></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                            <h3>PARTICULARS OF AUDITOR, LEGAL ADVISORS AND BANKERS</h3>
                                                            <div>
                                                                <table width="1400px" border="0" align="center" style="margin-right:20px">
                                                                    <tr>
                                                                        <td width="100px"></td>
                                                                        <td>Name of Firm/Institution</td>
                                                                        <td>Income Tax PIN No.</td>
                                                                        <td>Postal Address</td>
                                                                        <td>Telephone No.</td>
                                                                        <td>Fax No.</td>
                                                                        <td>Affiliated Professional Body</td>
                                                                        <td>Date of Appointment</td>
                                                                        <td width="20px"></td>
                                                                    </tr>
                                                                    <tr height="40px">
                                                                        <td>Auditors:</td>
                                                                        <td><input required="required" name="name_firm_auditors" type="text" size="32"/></td>
                                                                        <td><input required="required" name="pin_income_auditors" type="text" size="25"/></td>
                                                                        <td><input required="required" name="postal_auditors" type="text" size="25"/></td>
                                                                        <td><input required="required" name="phone_auditors" type="text" size="25"/></td>
                                                                        <td><input required="required" name="fax_auditors" type="text" size="25"/></td>
                                                                        <td><input required="required" name="aff_prof_body_auditors" type="text" size="30"/></td>
                                                                        <td><input required="required" name="date_appointment_auditors" type="text" size="25" id="datepicker_auditors_1" onkeypress="return nowriting(this, event)"class="datepicker"/>
                                                                        </td>
                                                                    </tr>
                                                                    <tr height="40px">
                                                                        <td>Bankers:</td>
                                                                        <td><input required="required" name="name_firm_bankers" type="text" size="32"/></td>
                                                                        <td><input required="required" name="pin_income_bankers" type="text" size="25"/></td>
                                                                        <td><input required="required" name="postal_bankers" type="text" size="25"/></td>
                                                                        <td><input required="required" name="phone_bankers" type="text" size="25"/></td>
                                                                        <td><input required="required" name="fax_bankers" type="text" size="25"/></td>
                                                                        <td><input required="required" name="aff_prof_body_bankers" type="text" size="30"/></td>
                                                                        <td><input required="required" name="date_appointment_bankers" type="text" size="25" id="datepicker_bankers_1" onkeypress="return nowriting(this, event)"class="datepicker"/>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Legal Advisors:</td>
                                                                        <td><input required="required" name="name_firm_legal" type="text" size="32"/></td>
                                                                        <td><input required="required" name="pin_income_legal" type="text" size="25"/></td>
                                                                        <td><input required="required" name="postal_legal" type="text" size="25"/></td>
                                                                        <td><input required="required" name="phone_legal" type="text" size="25"/></td>
                                                                        <td><input required="required" name="fax_legal" type="text" size="25"/></td>
                                                                        <td><input required="required" name="aff_prof_body_legal" type="text" size="30"/></td>
                                                                        <td><input required="required" name="date_appointment_legal" type="text" size="25" id="datepicker_legal_1" onkeypress="return nowriting(this, event)"class="datepicker"/>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                            <h3>SHARE CAPITAL</h3>
                                                            <div>
                                                                <h1>Total Authorized Capital</h1>
                                                                <hr/>
                                                                <input required="required" name="manager_share_autho" type="text" size="40" id="manager_share_autho" onkeypress="return numbersonly(this, event)" placeholder="In TZ Shillings"/>

                                                                <br/>
                                                                <br/>
                                                                <br/>
                                                                <h1>Total Paid-up Capital</h1>
                                                                <hr/>
                                                                <input required="required" name="manager_share_paid" type="text" size="40" id="manager_share_paid" onkeypress="return numbersonly(this, event)" placeholder="In TZ Shillings"/>

                                                            </div>
                                                            <h3>BUSINESS PARTICULARS</h3>
                                                            <div>
                                                                <table width="820px" border="0" align="center">
                                                                    <br />
                                                                    <tr>
                                                                        <td><br />
                                                                            <br />
                                                                            <span style="float:right">State Briefly the main objective of the manager:</span></td>
                                                                        <td width="30%"><span style="float:right">
                                      <textarea required="required" name="manager_main_objective" cols="35" rows="7" style="resize:none"></textarea>
                                      </span></td>
                                                                        <td width="2%">&nbsp;</td>
                                                                    </tr>
                                                                    <tr height="40px">
                                                                        <td><span style="float:right">Date of last Annual General Meeting:</span></td>
                                                                        <td><span style="float:right">
                                      <input required="required" name="manager_date_annual_meeting" type="text" size="10" id="manager_date_annual_meeting" onkeypress="return nowriting(this, event)" class="datepicker"/>
                                      </span></td>
                                                                        <td>&nbsp;</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><span style="float:right"> List the Social Security which the manager has managed their funds within three years, incase of more than one, press <strong>Add</strong>. </span></td>
                                                                        <td><div id='divSocialSecurityGroup'>
                                                                                <div id="divSocialSecurity1">
                                                                                    <table width="100%" border="0">

                                                                                        <td width="10%"><span style="float:right">
                                                <input required="required" type="text" size="35" name="manager_social_security1"/>
                                                </span></td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </div>
                                                                            </div></td>
                                                                        <td>&nbsp;</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td><span style="float:right" class="classname" id='addButtonSocialSecurity'>+ Add</span></td>
                                                                        <td>&nbsp;</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                            <h3>ATTACHMENTS</h3>
                                                            <div>
                                                                <table width="820px" border="0" align="center">
                                                                    <br />

                                                                    <tr>
                                                                        <td width="10%">&nbsp;</td>
                                                                        <td colspan="3"><h1> Please attach the scanned copies of the following: </h1></td>
                                                                    </tr>

                                                                    <tr height="30px">
                                                                        <td colspan="2"><span style="float:right">Latest Audited report and accounts:</span></td>
                                                                        <td><span style="float:right">
                                      <input required="required" name="file_audited_report" type="file" size="40" />
                                      </span></td>
                                                                        <td>&nbsp;</td>
                                                                    </tr>

                                                                    <tr height="50px">
                                                                        <td colspan="2"><span style="float:right">Certificate of Incorporation:</span></td>
                                                                        <td><span style="float:right">
                                      <input required="required" name="file_cert_incorporation" type="file" size="40" />
                                      </span></td>
                                                                        <td>&nbsp;</td>
                                                                    </tr>


                                                                    <tr height="50px">
                                                                        <td colspan="2"><span style="float:right">Other Attachment:</span></td>
                                                                        <td><span style="float:right">
                                      <input name="link_other" type="file" size="40" />
                                      </span></td>
                                                                        <td>&nbsp;</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>&nbsp;</td>
                                                                        <td colspan="2"><span style="padding-left:30px">

                                      </span></td>
                                                                        <td>&nbsp;</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div align="center"> <span class="art-button-wrapper"> <span class="art-button-l"> </span> <span class="art-button-r"> </span>
                              <input type="submit" name="register" id="register" class="art-button" value="&nbsp; &nbsp; &nbsp;Register &nbsp; &nbsp;" />
                              </span> </div>

                                                    </form>
                                                    <div class="cleared"></div>
                                                </div>
                                                <div class="cleared"></div>
                                            </div>
                                        </div>

                                        <!--/END LOGIN FORM--></td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                            </table>

                            <!--Mwisho wa Mkeka wa Form-->

                            <div class="cleared"></div>
                        </div>
                    </div>
                    <div class="cleared"></div>
                </div>
                <div class="cleared"></div>
            </div>
        </div>
        <div class="cleared"></div>
    </div>

    <script src="styles/jquery.js"></script>
    <script src="styles/jsDatePick.min.1.4.js"></script>
    <script src="styles/jquery-ui.js"></script>




    <script type="text/javascript">

        function calculate(){
            var authorizedFields = document.getElementsByClassName('authorized_value_total');
            var authorizedtotal = 0;

            for(var i in authorizedFields){
                if(authorizedFields[i].value){
                    authorizedtotal += parseFloat(authorizedFields[i].value);
                }
            }

            document.getElementById('total_authorized_share').value = authorizedtotal/2;

            var sharedFields = document.getElementsByClassName('share_value_total');
            var sharedtotal = 0;

            for(var i in sharedFields){
                if(sharedFields[i].value){
                    sharedtotal += parseFloat(sharedFields[i].value);
                }
            }
            document.getElementById('total_paid_up_share').value = sharedtotal/2;
        }

        //window.onclick = function(){ calculate(); };
        //window.onmousemove = function(){ calculate(); };


        var countDirectors = 1;
        var countTopManager= 1;
        var countAuthorizedShareCapitals = 1;
        var countPaidUpShareCapitals = 1;
        var countManagerSocialSecurities = 1;


        $(document).ready(function(){
            $('.datepicker').datepicker({
                format: 'mm/dd/yyyy',

                autoclose:true
            });

            $('.share_number').keyup(function() {

                var share_number = $(this).val();

                var nominal_share = $(this).parent().next().children().val();

                if(nominal_share < 1){
                    nominal_share = 0;
                }
                if(share_number < 1){
                    share_number = 0;
                }
                var total_value = parseInt(share_number)*parseInt(nominal_share);

                $(this).parent().next().next().children().children().val(total_value);



            });


            $('.share_value_nominal').keyup(function() {
                var  nominal_share = $(this).val();

                var share_number = $(this).parent().prev().children().val();

                if(nominal_share < 1){
                    nominal_share = 0;
                }
                if(share_number < 1){
                    share_number = 0;
                }

                var total_value = parseInt(share_number)*parseInt(nominal_share);

                $(this).parent().next().children().children().val(total_value);
            });

            $('#nodirects').val(countDirectors);

            $share_total = $('#nodirects').val();

            $("#addButtonDirectors").click(function () {


                countDirectors++;                       //ongeza idadi ya directors
                $('#nodirects').val(countDirectors);

                $share_total = $('#nodirects').val();
                $('#share_value_total_1').val($share_total);


                var divDirectorsNew = $(document.createElement('div'))
                    .attr("id", 'divDirectors' + countDirectors);

                divDirectorsNew.after().html('<table width="100%" border="0"><tr><td width="14%"><input required="required" type="text" size="27" name="director_name'+ countDirectors +'"/></td><td width="10%"><select name="director_nationality_id'+ countDirectors +'"><option value="1">Tanzania</option><option value="2">Kenya</option><option value="3">Uganda</option><option value="4">Rwanda</option><option value="5">Burundi</option> <option value="6">South Africa</option><option value="7">British</option><option value="8">American</option><option value="9">Italian</option><option value="10">Chinese</option></select></td><td width="22%"><input required="required" type="text" size="45" name="director_address'+ countDirectors +'"/></td><td width="12%"><input required="required" type="text" size="15" name="director_occupation'+ countDirectors +'"/></td><td width="10%"><input required="required" type="text" size="20" name="director_date_of_appointment'+ countDirectors +'" id="director_datepicker'+ countDirectors +'"  onkeypress="return nowriting(this, event)"class="datepicker"/></td><td width="10%"><input required="required" type="text" size="15" name="director_no_of_shares'+ countDirectors +'" onkeypress="return numbersonly(this, event)"/></td></tr></table>');

                divDirectorsNew.appendTo("#divDirectorsGroup");
                $( ".datepicker" ).datepicker({ maxDate: 0, dateFormat: 'dd/mm/yy' });
            });



            //TOP MANAGEMENT
            $('#notopmanagers').val(countTopManager);

            $("#addButtonTopManagers").click(function () {


                countTopManager++;                      //ongeza idadi ya Top Managers
                $('#notopmanagers').val(countTopManager);

                var divTopManagerNew = $(document.createElement('div'))
                    .attr("id", 'divManagerParticulars' + countTopManager);

                divTopManagerNew.after().html('<table width="100%" border="0"><tr><td width="190"><input required="required" type="text" size="30" name="top_fullname'+ countTopManager +'"/></td><td width="153"><input required="required" type="text" name="top_designation'+ countTopManager +'"/></td><td width="120"><select name="top_nationality'+ countTopManager +'"><option value="1">Tanzania</option><option value="2">Kenya</option><option value="3">Uganda</option><option value="4">Rwanda</option><option value="5">Burundi</option> <option value="6">South Africa</option><option value="7">British</option><option value="8">American</option><option value="9">Italian</option><option value="10">Chinese</option></select></td><td width="207"><input required="required" type="text" size="35" name="top_address'+ countTopManager +'"/></td><td width="130"><input required="required" type="text" size="18" name="top_date_of_appointment'+ countTopManager +'" id="top_date_of_appointment'+ countTopManager +'" onkeypress="return nowriting(this, event)"class="datepicker"/></td><td width="260"><input required="required" type="text" size="42" name="top_academic'+ countTopManager +'"/></td><td width="130"><input required="required" type="text" name="top_experience'+ countTopManager +'" onkeypress="return numbersonly(this, event)" maxlength="2"/></td><td width="20"></td></tr></table>');

                divTopManagerNew.appendTo("#divManagerParticularsGroup");
                $( ".datepicker" ).datepicker({ maxDate: 0, dateFormat: 'dd/mm/yy' });


            });



            //AUTHORIZED SHARE
            $('#noauthorizedshares').val(countAuthorizedShareCapitals);

            $("#addButtonAuthorizedShareCapitals").click(function () {


                countAuthorizedShareCapitals++;                         //ongeza idadi ya Authorized Shares
                $('#noauthorizedshares').val(countAuthorizedShareCapitals);

                var divAuthorizedShareCapitalsNew = $(document.createElement('div'))
                    .attr("id", 'divAuthorizedShareCapital' + countAuthorizedShareCapitals);

                divAuthorizedShareCapitalsNew.after().html('<table width="100%" border="0"><tr><td width="35%"><input required="required" name="authorized_share_type'+ countAuthorizedShareCapitals +'" type="text" size="40" id="authorized_share_type'+ countAuthorizedShareCapitals +'"/></td><td width="15%"><input required="required" name="authorized_share_number'+ countAuthorizedShareCapitals +'" type="text" size="10" id="authorized_share_number'+ countAuthorizedShareCapitals +'" onkeypress="return numbersonly(this, event)" class="share_number"/></td><td width="25%"><input required="required" name="authorized_share_nominal_value'+ countAuthorizedShareCapitals +'" type="text" size="20" id="authorized_share_nominal_value'+ countAuthorizedShareCapitals +'" onkeypress="return numbersonly(this, event)" class="share_value_nominal'+ countAuthorizedShareCapitals +'"/></td><td><span style="float:right"><input required="required" name="authorized_share_value_total'+ countAuthorizedShareCapitals +'" type="text" size="24" id="authorized_share_value_total'+ countAuthorizedShareCapitals +'" disabled="true" class="authorized_value_total"/></span></td></tr></table>');

                divAuthorizedShareCapitalsNew.appendTo("#divAuthorizedShareCapitalsGroup");



                $('.share_number').keyup(function() {

                    var share_number = $(this).val();

                    var nominal_share = $(this).parent().next().children().val();

                    if(nominal_share < 1){
                        nominal_share = 0;
                    }
                    if(share_number < 1){
                        share_number = 0;
                    }
                    var total_value = parseInt(share_number)*parseInt(nominal_share);

                    $(this).parent().next().next().children().children().val(total_value);

                });

                $('.share_value_nominal').keyup(function() {
                    var  nominal_share = $(this).val();

                    var share_number = $(this).parent().prev().children().val();

                    if(nominal_share < 1){
                        nominal_share = 0;
                    }
                    if(share_number < 1){
                        share_number = 0;
                    }

                    var total_value = parseInt(share_number)*parseInt(nominal_share);

                    $(this).parent().next().children().children().val(total_value);
                })


            });



            //PAID-UP SHARE
            $('#nopaidupshares').val(countPaidUpShareCapitals);

            $("#addButtonPaidUpShareCapitals").click(function () {


                countPaidUpShareCapitals++;                         //ongeza idadi ya Paid-Up Shares
                $('#nopaidupshares').val(countPaidUpShareCapitals);

                var divPaidUpShareCapitalsNew = $(document.createElement('div'))
                    .attr("id", 'divPaidUpShareCapital' + countPaidUpShareCapitals);

                divPaidUpShareCapitalsNew.after().html('<table width="100%" border="0"><tr><td width="25%"><select name="paidup_share_type'+ countPaidUpShareCapitals +'"><option value="local">Local</option> <option value="foreign">Foreign</option></select></td><td width="15%"><input required="required" name="no_shareholders'+ countPaidUpShareCapitals +'" type="text" size="10" id="no_shareholders'+ countPaidUpShareCapitals +'" onkeypress="return numbersonly(this, event)"/></td><td width="15%"><input required="required" name="paidup_share_number'+ countPaidUpShareCapitals +'" type="text" size="10" id="paidup_share_number'+ countPaidUpShareCapitals +'" onkeypress="return numbersonly(this, event)" class="share_number"/></td><td width="25%"><input required="required" name="paidup_share_nominal_value'+ countPaidUpShareCapitals +'" type="text" size="20" id="paidup_share_nominal_value'+ countPaidUpShareCapitals +'" onkeypress="return numbersonly(this, event)" class="share_value_nominal'+ countPaidUpShareCapitals +'"/></td><td><span style="float:right"><input required="required" name="paidup_share_value_total'+ countPaidUpShareCapitals +'" type="text" size="24" id="paidup_share_value_total'+ countPaidUpShareCapitals +'" disabled="true" class="share_value_total"/></span></td></tr></table>');

                divPaidUpShareCapitalsNew.appendTo("#divPaidUpShareCapitalsGroup");



                $('.share_number').keyup(function() {

                    var share_number = $(this).val();

                    var nominal_share = $(this).parent().next().children().val();

                    if(nominal_share < 1){
                        nominal_share = 0;
                    }
                    if(share_number < 1){
                        share_number = 0;
                    }
                    var total_value = parseInt(share_number)*parseInt(nominal_share);

                    $(this).parent().next().next().children().children().val(total_value);

                });

                $('.share_value_nominal').keyup(function() {
                    var  nominal_share = $(this).val();

                    var share_number = $(this).parent().prev().children().val();

                    if(nominal_share < 1){
                        nominal_share = 0;
                    }
                    if(share_number < 1){
                        share_number = 0;
                    }

                    var total_value = parseInt(share_number)*parseInt(nominal_share);

                    $(this).parent().next().children().children().val(total_value);
                });


            });


            //MANAGER SOCIAL SECURITY LISTS
            $('#nomanagersocialsecuritylists').val(countManagerSocialSecurities);

            $("#addButtonSocialSecurity").click(function () {


                countManagerSocialSecurities++;                         //ongeza idadi ya Social Security
                $('#nomanagersocialsecuritylists').val(countManagerSocialSecurities);

                var divManagerSocialSecurityNew = $(document.createElement('div'))
                    .attr("id", 'divSocialSecurity1' + countManagerSocialSecurities);

                divManagerSocialSecurityNew.after().html('<table width="100%" border="0"><td width="10%"><span style="float:right"><input required="required" type="text" size="35" name="manager_social_security'+ countManagerSocialSecurities +'"/></span></td></tr></table>');

                divManagerSocialSecurityNew.appendTo("#divSocialSecurityGroup");
                $( ".datepicker" ).datepicker({ maxDate: 0, dateFormat: 'dd/mm/yy' });


            });




        });
    </script>

    <!--    <script>-->
    <!--        $( function() {-->
    <!--            $( "#date_incorporate" ).datepicker({ dateFormat: 'yy-mm-dd' }).val();-->
    <!---->
    <!--//            var date = $('#datepicker').datepicker({ dateFormat: 'dd-mm-yy' }).val();-->
    <!---->
    <!--        } );-->
    <!--    </script>-->

    <!--End Add Button Scripts-->

    <!--<script type="text/javascript" src="javascript/interface.js"></script>-->

    <!--Numbers Only-->

    <script>

        $(function() {
            $( "#accordion" ).accordion({
                heightStyle: "content"
            });
        });
        //      $(function() {
        //          $( ".datepicker" ).datepicker({ maxDate: 0, dateFormat: 'dd/mm/yy' });
        //      });
    </script>
    <script>



        function nowriting(myfield, e){
            var key;
            var keychar;

            if (window.event)
                key = window.event.keyCode;
            else if (e)
                key = e.which;
            else
                return true;
            keychar = String.fromCharCode(key);

// control keys
            if ((key==null) || (key==0) || (key==8) ||
                (key==9) || (key==13) || (key==27) )
                return true;
            else
                return false;
        }

        function numbersonly(myfield, e, dec){
            var key;
            var keychar;

            if (window.event)
                key = window.event.keyCode;
            else if (e)
                key = e.which;
            else
                return true;
            keychar = String.fromCharCode(key);

// control keys
            if ((key==null) || (key==0) || (key==8) ||
                (key==9) || (key==13) || (key==27) )
                return true;

// numbers
            else if ((("0123456789").indexOf(keychar) > -1))
                return true;

// decimal point jump
            else if (dec && (keychar == "."))
            {
                myfield.form.elements[dec].focus();
                return false;
            }
            else
                return false;
        }

        function phonefield(myfield, e, dec)
        {

            var key;
            var keychar;
            if (window.event)
                key = window.event.keyCode;
            else if (e)
                key = e.which;
            else
                return true;
            keychar = String.fromCharCode(key);

// control keys
            if ((key==null) || (key==0) || (key==8) ||
                (key==9) || (key==43) || (key==13) || (key==27) )
                return true;

// numbers
            else if ((("0123456789").indexOf(keychar) > -1))
                return true;

// decimal point jump
            else if (dec && (keychar == "."))
            {
                myfield.form.elements[dec].focus();
                return false;
            }
            else
                return false;
        }

    </script>
    <!--End Numbers Only-->

    <!--Validation Script-->
    <script src="styles/input_validation.js"></script>
    <!--End Validation Script-->
    <?php include("includes/footer_file.inc");?>


