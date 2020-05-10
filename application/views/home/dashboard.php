{{#if is_show_dashboard}}
<div class="col-xs-12">
    <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="info-box bg-aqua" style="margin-bottom: 5px;padding-left: 10px;min-height: 0px;text-align: center;">
                <label style="font-weight: bold;font-size: 24px;">Establishment</label>
            </div>
            <div class="info-box" style="margin-bottom: 0px;min-height: 0px;">
                <table class="table" style="margin-bottom: 5px;font-size: 16px">
                    <tbody>
                        <tr>
                            <td>Total Registered</td>
                            <td id="total_registered_company_container"><i class="fa fa-refresh fa-spin"></td>
                        </tr>
                        <tr>
                            <td>Total Activated</td>
                            <td id="total_active_company_container"><i class="fa fa-refresh fa-spin"></td>
                        </tr>
                        <tr>
                            <td>Total Deactivated</td>
                            <td id="total_deactivated_company_container"><i class="fa fa-refresh fa-spin"></td>
                        </tr>
                    </tbody>

                </table>
            </div>
            <div class="info-box" style="margin-bottom: 5px;min-height: 0px;">
                <table class="table" style="font-size: 16px">
                    <thead>
                        <tr>
                            <th colspan="2">Approved Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Total Licence Approved by Labour Dept</td>
                            <td id="total_company_licence_approved_status_by_labour_dept_container"><i class="fa fa-refresh fa-spin"></td>
                        </tr>
                        <tr>
                            <td>Total Licence Approved by DC</td>
                            <td id="total_company_licence_approved_status_by_deputy_collector_container"><i class="fa fa-refresh fa-spin"></td>
                        </tr>
                    </tbody>
                </table>
                <table class="table" style="font-size: 16px">
                    <thead>
                        <tr>
                            <th colspan="2">Rejected Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Total Licence Rejected by Labour Dept</td>
                            <td id="total_company_licence_rejected_status_by_labour_dept_container"><i class="fa fa-refresh fa-spin"></td>
                        </tr>
                        <tr>
                            <td>Total Licence Rejected by DC</td>
                            <td id="total_company_licence_rejected_status_by_deputy_collector_container"><i class="fa fa-refresh fa-spin"></td>
                        </tr>
                    </tbody>
                </table>
                <table class="table" style="margin-bottom: 5px;font-size: 16px">
                    <thead>
                        <tr>
                            <th colspan="2">Lock / Unlock Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Total Lock</td>
                            <td id="total_lock_company_container"><i class="fa fa-refresh fa-spin"</td>
                        </tr>
                        <tr>
                            <td>Total Unlock</td>
                            <td id="total_unlock_company_container"><i class="fa fa-refresh fa-spin"</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="info-box bg-aqua" style="margin-bottom: 5px;min-height: 0px;text-align: center;font-size: 12px;">
                <a href="main#companypayment" class="small-box-footer" style="color: #ffffff">View Establishment Details <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="info-box bg-green" style="margin-bottom: 5px;padding-left: 10px;min-height: 0px;text-align: center;">
                <label style="font-weight: bold;font-size: 24px">Contractor</label>
            </div>
            <div class="info-box" style="margin-bottom: 5px;min-height: 0px;">
                <table class="table" style="margin-bottom: 5px;font-size: 16px">
                    <tbody>
                        <tr>
                            <td>Total Registered</td>
                            <td id="total_registered_contractor_container"><i class="fa fa-refresh fa-spin"</td>
                        </tr>
                        <tr>
                            <td>Total Activated</td>
                            <td id="total_active_contractor_container"><i class="fa fa-refresh fa-spin"</td>
                        </tr>
                        <tr>
                            <td>Total Deactivated</td>
                            <td id="total_deactivated_contractor_container"><i class="fa fa-refresh fa-spin"</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="info-box" style="margin-bottom: 5px;min-height: 0px;">
                <table class="table" style="font-size: 16px">
                    <thead>
                        <tr>
                            <th colspan="2">Approved Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Total Licence Approved by Labour Dept</td>
                            <td id="total_contractor_licence_approved_status_by_labour_dept_container"><i class="fa fa-refresh fa-spin"</td>
                        </tr>
                        <tr>
                            <td>Total Licence Approved by DC</td>
                            <td id="total_contractor_licence_approved_status_by_deputy_collector_container"><i class="fa fa-refresh fa-spin"</td>
                        </tr>
                    </tbody>
                </table>
                <table class="table" style="font-size: 16px">
                    <thead>
                        <tr>
                            <th colspan="2">Rejected Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Total Licence Rejected by Labour Dept</td>
                            <td id="total_contractor_licence_rejected_status_by_labour_dept_container"><i class="fa fa-refresh fa-spin"</td>
                        </tr>
                        <tr>
                            <td>Total Licence Rejected by DC</td>
                            <td id="total_contractor_licence_rejected_status_by_deputy_collector_container"><i class="fa fa-refresh fa-spin"</td>
                        </tr>
                    </tbody>
                </table>
                <table class="table" style="margin-bottom: 5px;font-size: 16px">
                    <thead>
                        <tr>
                            <th colspan="2">Lock / Unlock Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Total Lock</td>
                            <td id="total_lock_contractor_container"><i class="fa fa-refresh fa-spin"</td>
                        </tr>
                        <tr>
                            <td>Total Unlock</td>
                            <td id="total_unlock_contractor_container"><i class="fa fa-refresh fa-spin"</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="info-box bg-green" style="margin-bottom: 5px;min-height: 0px;text-align: center;font-size: 12px;">
                <a href="main#contractordetails" class="small-box-footer" style="color: #ffffff">View Contractor Details <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
<!--        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="info-box bg-yellow" style="margin-bottom: 5px;padding-left: 10px;min-height: 0px;text-align: center;">
                <label style="font-weight: bold;font-size: 24px">Overall Orders</label>
            </div>
            <div class="info-box" style="margin-bottom: 5px;min-height: 0px;">
                <table class="table" style="margin-bottom: 5px;font-size: 16px;">
                    <tbody>
                        <tr>
                            <td>Total Orders</td>
                            <td id="total_order_container"></td>
                        </tr>
                        <tr>
                            <td>Total Meals</td>
                            <td id="total_meal_container"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="info-box bg-yellow" style="margin-bottom: 5px;min-height: 0px;text-align: center;font-size: 12px;">
                <a href="main#foodorder" class="small-box-footer" style="color: #ffffff">View All Orders <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>-->

    </div>
</div>
<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 p-l-0px p-r-0px">
    <div class="col-xs-12">

        <!--        <div class="info-box bg-aqua" style="margin-bottom: 5px;padding-left: 10px;min-height: 0px;text-align: center;">
                    <label style="font-weight: bold;font-size: 24px;">Registered Users</label>
                </div>
                <div class="info-box" style="margin-bottom: 0px;min-height: 0px;">
                    <table class="table" style="margin-bottom: 5px;font-size: 16px">
        
                        <tbody>
                            <tr>
                                <td><i class="fa fa-users"></i> Total Registered Users</td>
                                <td id="total_registered_user_container" class="f-w-b"><i class="fa fa-refresh fa-spin"></i></td>
                            </tr>
                            <tr>
                                <td><i class="fa fa-power-off"></i> Total Activated Users</td>
                                <td id="total_activated_users_container" class="f-w-b"><i class="fa fa-refresh fa-spin"></i></td>
                            </tr>
                            <tr>
                                <td><i class="fa fa-power-off"></i> Total Deactivated Users</td>
                                <td id="total_deactivated_users_container" class="f-w-b"><i class="fa fa-refresh fa-spin"></i></td>
                            </tr>
                            <tr>
                                <td><i class="fa fa-user-plus"></i> New User Registrations in this Month</td>
                                <td id="total_new_users_this_month_container" class="f-w-b"><i class="fa fa-refresh fa-spin"></i></td>
                            </tr>
                            <tr>
                                <td><i class="fa fa-lock"></i> Total Unlocked Users</td>
                                <td id="total_unlocked_users_container" class="f-w-b"><i class="fa fa-refresh fa-spin"></i></td>
                            </tr>
                            <tr>
                                <td><i class="fa fa-unlock"></i> Total Locked Users</td>
                                <td id="total_locked_users_container" class="f-w-b"><i class="fa fa-refresh fa-spin"></i></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="info-box bg-aqua" style="margin-bottom: 5px;min-height: 0px;text-align: center;font-size: 15px;">
                    <a href="main#user" class="small-box-footer" style="color: #ffffff">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>-->
    </div>
</div>
<div class="col-lg-9 col-md-8 col-sm-12 col-xs-12 p-l-0px p-r-0px">
    {{/if}}
    {{#if is_company}}
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
        <div class="small-box bg-green">
            <div class="inner">
                <h3 id="total_company_contractor_container"><i class="fa fa-refresh fa-spin"></i></h3>
                <p>Total Contractor</p>
            </div>
            <div class="icon">
                <i class="fa fa-user"></i>
            </div>
            <a href="main#companydetails" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
        <div class="small-box bg-green">
            <div class="inner">
                <h3 id="total_company_success_payment_container"><i class="fa fa-refresh fa-spin"></i></h3>
                <p>Total Success Payment</p>
            </div>
            <div class="icon">
                <i class="fa fa-rupee"></i>
            </div>
            <a href="main#companypayment" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
        <div class="small-box bg-green">
            <div class="inner">
                <h3 id="total_company_pending_payment_container"><i class="fa fa-refresh fa-spin"></i></h3>
                <p>Total Pending Payment</p>
            </div>
            <div class="icon">
                <i class="fa fa-rupee"></i>
            </div>
            <a href="main#companypayment" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    {{/if}}
    {{#if is_contractor}}
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
        <div class="small-box bg-green">
            <div class="inner">
                <h3 id="total_contractor_company_container"><i class="fa fa-refresh fa-spin"></i></h3>
                <p>Total Company</p>
            </div>
            <div class="icon">
                <i class="fa fa-user"></i>
            </div>
            <a href="main#contractordetails" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
        <div class="small-box bg-green">
            <div class="inner">
                <h3 id="total_contractor_success_payment_container"><i class="fa fa-refresh fa-spin"></i></h3>
                <p>Total Success Payment</p>
            </div>
            <div class="icon">
                <i class="fa fa-rupee"></i>
            </div>
            <a href="main#contractordetails" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
        <div class="small-box bg-green">
            <div class="inner">
                <h3 id="total_contractor_pending_payment_container"><i class="fa fa-refresh fa-spin"></i></h3>
                <p>Total Pending Payment</p>
            </div>
            <div class="icon">
                <i class="fa fa-rupee"></i>
            </div>
            <a href="main#contractordetails" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    {{/if}}
</div>
{{#if is_admin}}
</div>
{{/if}}