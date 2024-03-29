@extends('admin.layouts.master')
@section('content') 
<div class="m-content">
        <div class="m-portlet">
            <div class="m-portlet__head">
                <div class="m-portlet__head-wrapper">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                Dashboard
                            </h3>
                        </div>
                    </div>
                    <div class="m-portlet__head-tools">
                        <a href="/"
                           class="btn btn-success m-btn m-btn--icon m-btn--wide m-btn--md m--margin-right-10">
                            <span>
                                <i class="fa fa-plus"></i>
                                <span>Create</span>
                            </span>                         
                        </a>

                        <!-- import button-->>
                        <a href="/"
                           class="btn btn-primary m-btn m-btn--icon m-btn--wide m-btn--md m--margin-right-10">
                            <span>
                                <i class="fa fa-upload"></i>
                                <span>Import</span>
                            </span>
                        </a>
                        
                        <!-- Delete button-->>
                        <a href = "/"                              
                              class="btn btn-danger m-btn m-btn--icon m-btn--wide m-btn--md m--margin-right-10">
                              <span>
                                <i class="fa fa-trash-alt"></i>
                                <span>Delete</span>
                            </span>
                        </a>


                    </div>







                </div>
            </div>
            <div class="m-portlet__body">
                <!--begin::Section-->
                <div class="m-section">
                    <div class="m-section__content">
                        <table class="table table-bordered table-hover" id="sport-table">
                            <thead>
                                <tr>
                                    <th>Name/Team</th>
                                    <th>Section</th>
                                    <th>Phone</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!--end::Section-->
            </div>

            <!--end::Form-->
        </div>
</div>
@endsection    