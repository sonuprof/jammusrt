@include('component.head')
@include('component.kusum-header')
<!-- / Navbar -->

<!-- Content wrapper -->
<div class="content-wrapper formBack">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">

    </div>
  </section>
  <section class="content">
    <div class="container-fluid">
      <div class="card card-default borderCard">
        <div class="card-header ">
          <h3 class="card-title text-bold">Jammu Srt Form</h3>
        </div>
        @if(session()->has('status'))
        <div class="alert my-3 p-3 alert-success">
          {{session('status')}}
        </div>
        @endif
        @if ($errors->any())
        @foreach ($errors->all() as $error)
        <div class="alert alert-danger" role="alert">
          {{ $error }}
        </div>
        @endforeach
        @endif
        <form action="{{route('save-jammu-srt')}}" method="Post">
          @csrf
          <div class="card-body">
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label>TimeStamp</label>
                  <input type="text" name="timestamp" class="form-control" >
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-4">
                <div class="form-group">
                  <label>Application Status</label>
                  <select name="app_status" id="applicationStatus" class="form-control">
                    <option value="">Select ...</option>
                    <option value="Application Submitted" >Application Submitted</option>
                    <option value="Subsidy Claimed" >Subsidy Claimed</option>
                    <option value="Design Approved" >Design Approved</option>
                  </select>

                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-4">
                <div class="form-group">
                  <label>Scheme</label>
                  <select name="scheme" id="scheme" class="form-control">
                    <option value="" >Select ...</option>
                    <option value="Jammu Solar City" >Jammu Solar City</option>
                    <option value="JK2021-22" >JK2021-22</option>
                  </select>

                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->


              <div class="col-md-4">
                <div class="form-group">
                  <label>Application No.</label>
                  <input type="text" name="app_no" id="applicationNum" class="form-control" >
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-4">
                <div class="form-group">
                  <label>Registeration No.</label>
                  <input type="text" name="reg_no" id="registerationNum" class="form-control" >
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-4">
                <div class="form-group">
                  <label>Installer Name</label>
                  <select name="installer_name" id="installerName" class="form-control">
                    <option value="" >Select ...</option>
                    <option value="KLK Ventures Pvt. Ltd." >KLK Ventures Pvt. Ltd.</option>
                  </select>

                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->


              <div class="col-md-4">
                <div class="form-group">
                  <label>Installer Category</label>
                  <select name="installer_category" id="installerCategory" class="form-control">
                    <option value="" >Select ...</option>
                    <option value="B" >B</option>
                  </select>

                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-4">
                <div class="form-group">
                  <label>PV Capacity Band</label>
                  <input type="text" name="pv_band" id="PVCapacityBand" class="form-control" >
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-4">
                <div class="form-group">
                  <label>Project Name</label>
                  <input type="text" name="project_name" id="projectName" class="form-control" >
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->


              <div class="col-md-4">
                <div class="form-group">
                  <label>PV Capacity</label>
                  <input type="number" min="0" name="pv_capacity" id="PVCapacity" class="form-control" >
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-4">
                <div class="form-group">
                  <label>Discom Name</label>
                  <select name="discom_name" id="discomName" class="form-control">
                    <option value="" >Select ...</option>
                    <option value="Jammu Power Distribution Corporation Ltd." >Jammu Power Distribution Corporation Ltd.</option>
                  </select>

                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-4">
                <div class="form-group">
                  <label>Consumer No.</label>
                  <input type="number" min="0" name="consumer_no" id="consumerNum" class="form-control" >
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->


              <div class="col-md-4">
                <div class="form-group">
                  <label>Division / Zone</label>
                  <input type="text" name="division" id="divisionZone" class="form-control" >
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-4">
                <div class="form-group">
                  <label>Sub-division</label>
                  <input type="text" name="sub_divison" id="subDivision" class="form-control" >
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-4">
                <div class="form-group">
                  <label>Sanctioned / Contract Load</label>
                  <input type="number" min="0" name="sanction" id="sanctionedLoad" class="form-control" >
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->


              <div class="col-md-4">
                <div class="form-group">
                  <label>Phase of proposed Solar Inverter</label>
                  <select name="phase_inverter"  class="form-control">
                    <option value="" >Select ...</option>
                    <option value="Single Phase" >Single Phase</option>
                    <option value="3 Phase" >3 Phase</option>
                  </select>

                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-4">
                <div class="form-group">
                  <label>Category</label>
                  <select name="category" id="category" class="form-control">
                    <option value="" >Select ...</option>
                    <option value="Residential" >Residential</option>
                  </select>

                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-4">
                <div class="form-group">
                  <label>Who will provide the Net-Meter?</label>
                  <select name="provider"  class="form-control">
                    <option value="">Select ...</option>
                    <option value="Installer / EA" >Installer / EA</option>
                    <option value="Discom" >Discom</option>
                  </select>

                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-4">
                <div class="form-group">
                  <label>Latitude</label>
                  <input type="number" name="lat" id="lat" class="form-control" >
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-4">
                <div class="form-group">
                  <label>Longitude</label>
                  <input type="number" name="long" id="long" class="form-control" >
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-4">
                <div class="form-group">
                  <label>Consumer Email</label>
                  <input type="email" name="consumer_email" id="consumerEmail" class="form-control" >
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->


              <div class="col-md-4">
                <div class="form-group">
                  <label>Consumer Mobile</label>
                  <input type="tel" name="consumer_mobile" id="consumerMobile" class="form-control" >
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-4">
                <div class="form-group">
                  <label>Installer Email</label>
                  <input type="email" name="installer_email" id="installerEmail" class="form-control" >
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-4">
                <div class="form-group">
                  <label>Installer Mobile</label>
                  <input type="tel" name="installer_mobile" id="installerMobile" class="form-control" >
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->


              <div class="col-md-4">
                <div class="form-group">
                  <label>Name Prefix</label>
                  <select name="name_prefix" id="namePrefix" class="form-control">
                    <option value="">Select ...</option>
                    <option value="Mr." >Mr.</option>
                    <option value="Mrs." >Mrs.</option>
                  </select>

                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-4">
                <div class="form-group">
                  <label>First Name</label>
                  <input type="text" name="first_name" id="firstName" class="form-control" >
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-4">
                <div class="form-group">
                  <label>Middle Name</label>
                  <input type="text" name="middle_name" id="middleName" class="form-control" >
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->


              <div class="col-md-4">
                <div class="form-group">
                  <label>Last Name</label>
                  <input type="text" name="last_name" id="lastName" class="form-control" >
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-4">
                <div class="form-group">
                  <label>Landline No.</label>
                  <input type="tel" name="landline_no" id="landlineNum" class="form-control" >
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-4">
                <div class="form-group">
                  <label>Street/ House No.</label>
                  <input type="text" name="street_house_no" id="houseDetails" class="form-control" >
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->


              <div class="col-md-4">
                <div class="form-group">
                  <label>Taluka</label>
                  <input type="text" name="taluka" id="taluka" class="form-control" >
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-4">
                <div class="form-group">
                  <label>District</label>
                  <input type="text" name="district" id="district" class="form-control" >
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-4">
                <div class="form-group">
                  <label>City / Village</label>
                  <input type="text" name="city_village" id="city" class="form-control" >
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->


              <div class="col-md-4">
                <div class="form-group">
                  <label>State</label>
                  <input type="text" name="state" id="state" class="form-control" >
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-4">
                <div class="form-group">
                  <label>Pin</label>
                  <input type="number" name="pin" id="pin" class="form-control" >
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-4">
                <div class="form-group">
                  <label>Communication Address</label>
                  <input type="text" name="comm_address" id="communicationAddress" class="form-control" >
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->


              <div class="col-md-4">
                <div class="form-group">
                  <label>Passport Size Photo</label>
                  <select name="passport_size_photo" id="passportPic" class="form-control">
                    <option value="" >Select ...</option>
                    <option value="Yes" >Yes</option>
                    <option value="No" >No</option>
                  </select>

                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-4">
                <div class="form-group">
                  <label>Whether the Premises is owned or Rented</label>
                  <select name="premises_ownership" id="premiseStatus" class="form-control">
                    <option value="" >Select ...</option>
                    <option value="Owned" >Owned</option>
                    <option value="Rented" >Rented</option>
                  </select>

                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-4">
                <div class="form-group">
                  <label>Electricity Bill</label>
                  <select name="electricity_bill" id="electricityBill" class="form-control" >
                    <option value="">Select ...</option>
                    <option value="Yes" >Yes</option>
                    <option value="No" >No</option>
                  </select>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->



              <div class="col-md-4">
                <div class="form-group">
                  <label>Aadhaar No. Entered</label>
                  <select name="aadhaar_no" id="aadharEntered" class="form-control">
                    <option value="">Select ...</option>
                    <option value="Yes" >Yes</option>
                    <option value="No">No</option>
                  </select>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-4">
                <div class="form-group">
                  <label>Solar PV system Owned by the Consumer</label>
                  <select name="solar_pv_owned_by_consumer" id="solarPVOwned" class="form-control" >
                    <option value="">Select ...</option>
                    <option value="Yes" >Yes</option>
                    <option value="No">No</option>

                  </select>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-4">
                <div class="form-group">
                  <label>Don't Want Subsidy</label>
                  <select name="subsidy" id="subsidyStatus" class="form-control" >
                    <option value="">Select ...</option>
                    <option value="Yes" >Yes</option>
                    <option value="No">No</option>
                 </select>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->


              <div class="col-md-4">
                <div class="form-group">
                  <label>OTP Verified on</label>
                  <input type="date" name="otp_verified_on" id="otpDate" class="form-control" >
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-4">
                <div class="form-group">
                  <label>Signed Document Uploaded Date</label>
                  <input type="date" name="signed_doc_upload_date" id="signedDocUploadDate" class="form-control" >
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-4">
                <div class="form-group">
                  <label>Last Comment Date</label>
                  <input type="date" name="last_comment_date" id="lastCommentDate" class="form-control" >
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->


              <div class="col-12">
                <div class="form-group">
                  <label>Last Comment</label>
                  <textarea name="last_comment" id="lastComment" cols="30" rows="2" class="form-control" value=""></textarea>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->


              <div class="col-md-4">
                <div class="form-group">
                  <label>Last Comment Replied Date</label>
                  <input type="date" name="last_comment_replied_date" id="lastCommentRepliedDate" class="form-control" >
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-4">
                <div class="form-group">
                  <label>Document Verified Date</label>
                  <input type="date" name="doc_verified_date" id="documentVerifiedDate" class="form-control" >
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-4">
                <div class="form-group">
                  <label>Field Report Status Received from DisCom </label>
                  <input type="date" name="field_report_status_received" id="fieldReportStatusDate" class="form-control" >
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->


              <div class="col-md-4">
                <div class="form-group">
                  <label>Quotation No.</label>
                  <input type="text" name="quotation_no" id="quotationNum" class="form-control" >
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-4">
                <div class="form-group">
                  <label>DisCom Estimate Amount</label>
                  <input type="number" name="discom_estimate_amount" id="disComEstimateAmount" class="form-control" >
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-4">
                <div class="form-group">
                  <label>Due Date</label>
                  <input type="date" name="due_date" id="dueDate" class="form-control" >
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->


              <div class="col-md-4">
                <div class="form-group">
                  <label>Payment Received</label>
                  <select name="pay_received"  class="form-control">
                    <option value="">Select ...</option>
                    <option value="Yes">Yes</option>
                    <option value="No" >No</option>
                  </select>
                  
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-4">
                <div class="form-group">
                  <label>Payment Made On</label>
                  <input type="text" name="pay_made_on" id="paymentMadeOn" class="form-control" >
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-4">
                <div class="form-group">
                  <label>Self Certification</label>
                  <select name="self_certify" id="selfCertification" class="form-control">
                    <option value="">Select ...</option>
                    <option value="Yes">Yes</option>
                    <option value="No" >No</option>
                  </select>

                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->


              <div class="col-md-4">
                <div class="form-group">
                  <label>CEI Drawing Application ID</label>
                  <input type="text" name="cei_app_id" id="cei_app_id" class="form-control" >
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-4">
                <div class="form-group">
                  <label>CEI Drawing Application Approval Date</label>
                  <input type="date" name="cei_approval_date" id="CEIApplicationApprovalDate" class="form-control" >
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-4">
                <div class="form-group">
                  <label>Work Order No.</label>
                  <input type="text" name="work_order_no" id="workOrderNum" class="form-control" >
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->


              <div class="col-md-4">
                <div class="form-group">
                  <label>Work Order Date</label>
                  <input type="date" name="work_order_date" id="workOrderDate" class="form-control" >
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-4">
                <div class="form-group">
                  <label>Work Start Date</label>
                  <input type="date" name="work_start_date" id="work_start_date" class="form-control" >
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-4">
                <div class="form-group">
                  <label>Work End Date</label>
                  <input type="date" name="work_end_date" id="work_end_date" class="form-control" >
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->


              <div class="col-md-4">
                <div class="form-group">
                  <label>Bi-directional Meter Make</label>
                  <input type="text" name="bi_meter_make" id="biDirectionalMeterMake" class="form-control" >
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-4">
                <div class="form-group">
                  <label>Bi-directional Meter No.</label>
                  <input type="text" name="bi_meter_no" id="bi_meter_no" class="form-control" >
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-4">
                <div class="form-group">
                  <label>Solar Meter Make</label>
                  <input type="text" name="solar_meter_make" id="solarMeterMake" class="form-control" >
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->


              <div class="col-md-4">
                <div class="form-group">
                  <label>Solar Meter No.</label>
                  <input type="text" name="solar_meter_no" id="solarMeterNum" class="form-control" >
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-4">
                <div class="form-group">
                  <label>Date of Installation of Solar Meter</label>
                  <input type="date" name="install_solar_meter_date" id="dateOfInstallationOfSolarMeter" class="form-control" >
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-4">
                <div class="form-group">
                  <label>Agreement Signing Date</label>
                  <input type="date" name="agreement_signing_date" id="agreementSigningDate" class="form-control" >
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->


              <div class="col-md-4">
                <div class="form-group">
                  <label>Project Estimated Cost</label>
                  <input type="number" name="project_estimated_cost" id="projectEstimatedCost" class="form-control" >
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-4">
                <div class="form-group">
                  <label>PCR Number</label>
                  <input type="number"  min="0" name="pcr_number" id="PCRNumber" class="form-control" >
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-4">
                <div class="form-group">
                  <label>PCR Submitted Date</label>
                  <input type="date" name="pcr_submit_date" id="PCRSubmittedDate" class="form-control" >
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>

          <div class="card-footer">
            <button type="submit" class="btn  text-bold mr-3" style="background-color: yellow; color: black; font-weight: bold;border: None;">Submit</button>
            <button type="reset" class="btn   text-bold" style="color: white;background-color: black;">
              Cancel</button>
          </div>

        </form>
      </div>
  </section>
  <!-- /.content -->
</div>



@include("component.footer");