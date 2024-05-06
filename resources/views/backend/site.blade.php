@extends('backend.layouts.main')
@section('page-title', 'Site Details')
<style>
    .extra_cabinat_info {
        padding: 10px 15px;
        border: 1px solid #f2e5e5;
        margin-bottom: 20px;
    }
    .extra_cabinat_info_header{
        padding: 0px 5px 5px 5px;
        border-bottom: 1px solid #969494;
        margin-bottom: 16px;
    }
</style>
@section('content')
<div class="contentbar">
    <h3>Site Detail Create</h3>
    <div class="row mt-3">
        <div class="col-sm-12">
            <form action="">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="card-title text-hug"><strong>Basic Site Info</strong></div>
                        <div class="form-group row">
                            <label class="col-md-3 form-control-label" for="site_id">Site ID</label>
                            <div class="col-md-9">
                                <select id="site_id" name="site_id" class="form-control">
                                    <option>Please Select</option>
                                    <option value="0">NPW2011</option>
                                    <option value="1">NPW2012</option>
                                    <option value="2">NPW2013</option>
                                    <option value="3">NPW2014</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 form-control-label" for="power_model">Power Model</label>
                            <div class="col-md-9">
                                <select id="power_model" name="power_model" class="form-control">
                                    <option>Please Select</option>
                                    <option value="2">DG+Battery</option>
                                    <option value="0">Grid+Battery</option>
                                    <option value="3">Grid+DG+Battery</option>
                                    <option value="1">Solar+DG+Batery</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="grid_type" class="col-md-3 form-control-label">Grid Type</label>
                            <div class="col-md-9">
                                <input type="text" id="grid_type" name="grid_type" class="form-control" value="" placeholder="off grid">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 form-control-label">Solor Status</label>
                            <div class="col-md-9">
                                <div class="row">
                                    <label class="radio-inline col-6" for="solor_status_enable">
                                        <input type="radio" id="solor_status_enable" name="solor_status" checked> Enable
                                    </label>
                                    <label class="radio-inline col-6" for="solor_status_disable">
                                        <input type="radio" id="solor_status_disable" name="solor_status"> Disable
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="no_of_solor" class="col-md-3 form-control-label">No of Solor</label>
                            <div class="col-md-9">
                                <input type="number" id="no_of_solor" name="no_of_solor" class="form-control" value="" placeholder="1">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="solor_capacity" class="col-md-3 form-control-label">Solor Capacity <strong>(KW)</strong></label>
                            <div class="col-md-9">
                                <input type="number" id="solor_capacity" name="solor_capacity" class="form-control" value="" placeholder="1">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 form-control-label">DG Status</label>
                            <div class="col-md-9">
                                <div class="row">
                                    <label class="radio-inline col-6" for="dg_status_enable">
                                        <input type="radio" id="dg_status_enable" name="dg_status" checked> Enable
                                    </label>
                                    <label class="radio-inline col-6" for="dg_status_disable">
                                        <input type="radio" id="dg_status_disable" name="dg_status"> Disable
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="dg_restriction" class="col-md-3 form-control-label">DG Restriction</label>
                            <div class="col-md-9">
                                <input type="text" id="dg_restriction" name="dg_restriction" class="form-control" value="" placeholder="DGNR (10:00PM to 6:00AM)">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="card-title"><strong>DG Info</strong></div>
                        <div class="form-group row">
                            <label class="col-md-3 form-control-label">DG Condition</label>
                            <div class="col-md-9">
                                <div class="row">
                                    <label class="radio-inline col-6" for="dg_good">
                                        <input type="radio" id="dg_good" name="dg_condition" checked> Good
                                    </label>
                                    <label class="radio-inline col-6" for="dg_damaged">
                                        <input type="radio" id="dg_damaged" name="dg_condition"> Damaged
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="dg_name" class="col-md-3 form-control-label">Name</label>
                            <div class="col-md-9">
                                <input type="text" id="dg_name" name="dg_name" class="form-control" value="" placeholder="Delta">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="dg_capacity" class="col-md-3 form-control-label">Capacity <strong>(KVA)</strong></label>
                            <div class="col-md-9">
                                <input type="text" id="dg_capacity" name="dg_capacity" class="form-control" value="" placeholder="20">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="battery_types" class="col-md-3 form-control-label">Battery Types</label>
                            <div class="col-md-9">
                                <select id="battery_types" name="battery_types" class="form-control">
                                    <option>Please Select</option>
                                    <option value="0">CU</option>
                                    <option value="1">VRLA 12 V</option>
                                    <option value="2">DG Battery</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="battery_status" class="col-md-3 form-control-label">DG Battery Status</label>
                            <div class="col-md-9">
                                <input type="text" id="battery_status" name="battery_status" class="form-control" value="" placeholder="Good">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="automation" class="col-md-3 form-control-label">Automation</label>
                            <div class="col-md-9">
                                <input type="text" id="automation" name="automation" class="form-control" value="" placeholder="AVTM(Auto)">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-right mb-3">
                    <a href="#" type="button" class="btn btn-primary">More DG <i class="fa fa-plus"></i> </a>
                </div>
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="card-title"><strong>Cabinet Info</strong></div>
                        <div class="form-group row">
                            <label class="col-md-3 form-control-label">Cabinet Condition</label>
                            <div class="col-md-9">
                                <div class="row">
                                    <label class="radio-inline col-6" for="cabinet_good">
                                        <input type="radio" id="cabinet_good" name="cabinet_condition" checked> Good
                                    </label>
                                    <label class="radio-inline col-6" for="cabinet_damaged">
                                        <input type="radio" id="cabinet_damaged" name="cabinet_condition"> Damaged
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="cabinet_name" class="col-md-3 form-control-label">Name</label>
                            <div class="col-md-9">
                                <input type="text" id="cabinet_name" name="cabinet_name" class="form-control" value="" placeholder="Delta">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="cabinet_capacity" class="col-md-3 form-control-label">Capacity <strong>(KW)</strong></label>
                            <div class="col-md-9">
                                <input type="text" id="cabinet_capacity" name="cabinet_capacity" class="form-control" value="" placeholder="100">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 form-control-label">6th RMS</label>
                            <div class="col-md-9">
                                <div class="row">
                                    <label class="radio-inline col-6" for="6th_rms_enable">
                                        <input type="radio" id="6th_rms_enable" name="6th_rms" checked> Enable
                                    </label>
                                    <label class="radio-inline col-6" for="6th_rms_disable">
                                        <input type="radio" id="6th_rms_disable" name="6th_rms"> Disable
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 form-control-label" for="6th_rms_status">6th RMS Status</label>
                            <div class="col-md-9">
                                <select id="6th_rms_status" name="6th_rms_status" class="form-control">
                                    <option>Please Select</option>
                                    <option value="0">Online</option>
                                    <option value="1">Offline</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 form-control-label">Invendis RMS</label>
                            <div class="col-md-9">
                                <div class="row">
                                    <label class="radio-inline col-6" for="invendis_rms_enable">
                                        <input type="radio" id="invendis_rms_enable" name="invendis_rms" checked> Enable
                                    </label>
                                    <label class="radio-inline col-6" for="invendis_rms_disable">
                                        <input type="radio" id="invendis_rms_disable" name="invendis_rms"> Disable
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 form-control-label" for="invendis_rms_status">Invendis RMS Status</label>
                            <div class="col-md-9">
                                <select id="invendis_rms_status" name="invendis_rms_status" class="form-control">
                                    <option>Please Select</option>
                                    <option value="0">Online</option>
                                    <option value="1">Offline</option>
                                </select>
                            </div>
                        </div>
                        <div class="extra_cabinat_info">
                            <div class="extra_cabinat_info_header">
                                <strong>Cabinet Battery Info</strong>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 form-control-label" for="cabinet_battery_type">Cabinet Battery Brand</label>
                                <div class="col-md-9">
                                    <select id="cabinet_battery_type" name="cabinet_battery_type" class="form-control">
                                        <option>Please Select</option>
                                        <option value="0">Lithium</option>
                                        <option value="1">VRLA</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="battery_voltage" class="col-md-3 form-control-label">Battery Voltage <strong>(V)</strong></label>
                                <div class="col-md-9">
                                    <input type="number" id="battery_voltage" name="battery_voltage" class="form-control" value="" placeholder="48">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="battery_capacity" class="col-md-3 form-control-label">Battery Capacity <strong>(AH)</strong></label>
                                <div class="col-md-9">
                                    <input type="number" id="battery_capacity" name="battery_capacity" class="form-control" value="" placeholder="100">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="battery_quantity" class="col-md-3 form-control-label">Battery Quantity</label>
                                <div class="col-md-9">
                                    <input type="number" id="battery_quantity" name="battery_quantity" class="form-control" value="" placeholder="1">
                                </div>
                            </div>
                            <div class="text-right mb-3">
                                <a href="#" type="button" class="btn btn-primary">More Cabinet Battery <i class="fa fa-plus"></i> </a>
                            </div>
                        </div>
                        <div class="extra_cabinat_info">
                            <div class="extra_cabinat_info_header">
                                <strong>Rectifier Info</strong>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 form-control-label" for="cabinet_battery_type">Rectifier Brand</label>
                                <div class="col-md-9">
                                    <input type="text" id="rectifier_brand" name="rectifier_brand" class="form-control" value="" placeholder="Delta">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="rectifier_capacity" class="col-md-3 form-control-label">Rectifier Capacity <strong>(KW)</strong></label>
                                <div class="col-md-9">
                                    <input type="number" id="rectifier_capacity" name="rectifier_capacity" class="form-control" value="" placeholder="100">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="rectifier_quantity" class="col-md-3 form-control-label">Rectifier Quantity</label>
                                <div class="col-md-9">
                                    <input type="number" id="rectifier_quantity" name="rectifier_quantity" class="form-control" value="" placeholder="1">
                                </div>
                            </div>
                            <div class="text-right mb-3">
                                <a href="#" type="button" class="btn btn-primary">More Rectifier <i class="fa fa-plus"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <strong>Cabinet Battery Info</strong>
                        </div>
                        <div class="form-group row">
                            <label for="cabinet_battery_type" class="col-md-3 form-control-label">Battery Type</label>
                            <div class="col-md-9">
                                <input type="text" id="cabinet_battery_type" name="cabinet_battery_type" class="form-control" value="" placeholder="Delta">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="cabinet_capacity" class="col-md-3 form-control-label">Capacity</label>
                            <div class="col-md-9">
                                <input type="text" id="cabinet_capacity" name="cabinet_capacity" class="form-control" value="" placeholder="Good">
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="text-right mb-3">
                    <a href="#" type="button" class="btn btn-primary">More Cabinet <i class="fa fa-plus"></i> </a>
                </div>
            </form>
        </div>
    </div>
    <div class="row mt-5 mb-3">
        <div class="text-center lg-offset-4 col-lg-4">
            <a href="#" type="button" class="btn btn-primary">Back</a>
        </div>
    </div>
</div>


@endsection
