<form role="form" method="post" name="site_form" id="site_form">
    <input type="hidden" name="site_id" id="site_id" class="form-control" value="{{site_data.site_id}}" >
    <!--  <input type="hidden" name="temp_id" id="temp_id" class="form-control" value="{{site_data.temp_id}}">
    --><h4 style="text-align: center;"><U>  FORM S-1 </U> </h4>
    <h4 style="text-align: center;"> FORM OF FAPPLICATION FOR REGISTRATION UNDER THE SCHEME OF SPARSH  </h4>
    <h4 style="text-align: center;"> (SCHEME FOR PROMOTION OF AFFORDABLE RENDTAL SMART HOUSING) </h4>
    &nbsp;
    <div class="box-body">
     <center>   <h3>Choose A Propery Type</h3>
        <div class="form-group col-md-6 col-sm-6">
            <label>  <input type="radio" name="tab" value="Chawl_Owner" onclick="show1();" /> Chawl_Owner </label>
        </div>
        <div class="form-group col-md-6 col-sm-6">
            <label>  <input type="radio" name="tab" value="Promoters" onclick="show2();" />Promoters </label>
        </div></center>
    </div>

    <div class="box-body">
        <div class="row">
            <div class="form-group col-md-6 col-sm-6">
                <label for="name_applicant_occupant">Full Name of the Applicant / Occupant <span style="color: red;">*</span></label>
                <input type="text" id="name_applicant_occupant" name="name_applicant_occupant" class="form-control" placeholder="Name"
                value="{{site_data.name_applicant_occupant}}">
            </div>
            <div class="form-group col-md-6 col-sm-6">
                <label for="contractor_name">Gender <span style="color: red;">*</span></label>
                <select id="registration_category" name="registration_category" class="form-control">
                    <option value="">Select Registration Category</option>
                    <option value="<?php echo 'Male' ?>">Male</option>
                    <option value="<?php echo 'Female' ?>">Female</option>
                </select>
            </div>
        </div>
        
        <div class="row">
            <div class="form-group col-md-6 col-sm-6">
                <label for="Occupation">Occupation <span style="color: red;">*</span></label>
                <input type="text" id="Occupation" name="Occupation" class="form-control" placeholder="Occupation"
                value="{{site_data.Occupation}}" >
            </div>
            <div class="form-group col-md-6 col-sm-6">
                <label for="aadhar_card">Aadhar Card Number <span style="color: red;">*</span></label>
                <input type="text" id="aadhar_card" name="aadhar_card" class="form-control" placeholder="Enter Aadhar Card Number"
                value="{{site_data.aadhar_card}}" >
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6 col-sm-6">
                <label for="dob">Date Of Birth
                    <span style="color: red;">*</span></label>
                    <input type="text" id="dob" name="dob" class="form-control" placeholder="Date of Birth"
                    value="{{site_data.dob}}" >
                </div>
                <div class="form-group col-md-6 col-sm-6">
                    <label for="mobile_number">Mobile Number
                        <span style="color: red;">*</span></label>
                        <input type="text" id="mobile_number" name="mobile_number" class="form-control" placeholder="Enter your Mobile Number"
                        value="{{site_data.mobile_number}}" >
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-6 col-sm-6">
                        <label for="email_id">Email-ID
                            <span style="color: red;">*</span></label>
                            <input type="text" id="email_id" name="email_id" class="form-control" placeholder="Enter Email-ID"
                            value="{{site_data.email_id}}" >
                        </div>
                        <div class="form-group col-md-6 col-sm-6">
                            <label for="land_type">Land (Agriculture /Non-Agriculture )
                                <span style="color: red;">*</span></label>
                                <select id="land_type" name="land_type" class="form-control">
                                    <option value="">Select Land Type</option>
                                    <option value="<?php echo 'Agriculture'; ?>">Agriculture</option>
                                    <option value="<?php echo 'Non-Agriculture'; ?>">Non-Agriculture</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="area">Area<span style="color: red;">*</span></label>
                                <input type="text" id="area" name="area" class="form-control" placeholder="Enter Area."
                                value="{{site_data.area}}">
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="postal_address">Full Postal Address<span style="color: red;">*</span></label>
                                <input type="text" id="postal_address" name="postal_address" class="form-control" placeholder="Enter Full Postal Address. " value="{{site_data.postal_address}}" >
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="land_owner">Land Owner<span style="color: red;">*</span></label>
                                <input type="text" id="land_owner" name="land_owner" class="form-control" placeholder="Name of Land Owner"
                                value="{{site_data.land_owner}}">
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="whether_plan_approved">Whether Plan Approved.
                                    <span style="color: red;">*</span></label>
                                    <input type="text" id="whether_plan_approved" name="whether_plan_approved" class="form-control" placeholder="Enter Whether Plan Approved or Not" value="{{site_data.whether_plan_approved}}" >
                                </div>
                            </div>

                            <div id="div1" class="hide">
                                <div class="form-group col-md-6 col-sm-6">
                                    <label for="occupancy_obtained">Whether Occupancy Obtained <span style="color: red;">*</span></label>
                                    <input type="text" id="occupancy_obtained" name="occupancy_obtained" class="form-control" placeholder="Whether Occupancy Obtained" value="{{site_data.occupancy_obtained}}">
                                </div>
                            </div>

                            
                            <u> <div class="row" style="margin-left: 0.5%">
                                <h3>Details of Land:-</h3>
                                
                            </div></u>

                            <div class="row">
                                <div class="form-group col-md-6 col-sm-6">
                                    <label for="land_situated_details_of_land">(A)Village and exact place where the land is situated.
                                    </label>
                                    <span style="color: red;">*</span>
                                    <input type="text"  name="land_situated_details_of_land" id="land_situated_details_of_land" class="form-control" data-date-format="DD-MM-YYYY" value="{{site_data.land_situated_details_of_land}}">
                                </div>
                                <div class="form-group col-md-6 col-sm-6">
                                    <label for="area_details_of_land">(B) Survey No.  Hissan No. and  its area in Square Meter<span style="color: red;">*</span></label>
                                    <input type="text" name="area_details_of_land" id="area_details_of_land" class="form-control" data-date-format="DD-MM-YYYY" value="{{site_data.area_details_of_land}}">
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-6 col-sm-6">
                                    <label for="road_details_of _land">(C) Is There a road from Where the land is easily accessible? If there is no road adjoining the land hot is it proposed to provide access to the site.<span style="color: red;">*</span></label>
                                    <input type="text" name="road_details_of_land" id="road_details_of_land" class="form-control" data-date-format="DD-MM-YYYY" value="{{site_data.road_details_of_land}}">
                                </div>
                            </div>

                            <div>
                                <input type="checkbox" name="information" value="1"> I solemnly affirm that the information given above is true to the best of my knowledge and belief no facts are concealed.<span style="color: red;">*</span><br>
                                <input type="checkbox" name="information" value="1"> I further undertake that i have read all the conditions prescribed for the scheme of SPARSH (SCHEME FOR PROMOTION OF AFFORDABLE RENDTAL SMART HOUSING) and I fulfill / shall comply with all the conditions.<span style="color: red;">*</span>
                            </div>

                            <div class="box-footer">
                                <div class="row">
                                    <button type="button" class="btn btn-xs btn-primary" id="submit_btn_for_contractor_details" onclick="ContractorDetails.listview.submitContractorDetails($(this));">
                                        <label class="fa fa-check label-btn-icon"></label>
                                        &nbsp;<label class="label-btn-fonts">Submit</label>
                                    </button>
                                    <button type="button" class="btn btn-xs btn-default" onclick="$('#contractor_details_form_container').html('');
                                    $('#contractor_details_table_container').show();">
                                    <label class="fa fa-close label-btn-icon"></label>
                                    &nbsp;<label class="label-btn-fonts">Cancel</label>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>