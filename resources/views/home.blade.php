@extends('layouts.app')

@section('content')

<div class="container">
    <!-- BEGIN CONTAINER -->
    <div class="page-container">

        @include('layouts.app.sidebar')

        <!-- BEGIN CONTENT -->
        <div class="page-content-wrapper">
            <div class="page-content">

                <!-- CONFIGURATION MODALS GO HERE -->

                <div class="modal fade" id="inovice-modal" tabindex="-1" role="dialog" aria-labelledby="invoice" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                <h4 class="modal-title">Print Invoice</h4>
                            </div>
                            <div class="modal-body">
                                 @include('layouts.app.invoice')
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>

                <div class="modal fade" id="inovice-modal2" tabindex="-1" role="dialog" aria-labelledby="invoice" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                <h4 class="modal-title">Print Invoice</h4>
                            </div>
                            <div class="modal-body">
                                 @include('layouts.app.invoice')
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>




                <!-- BEGIN PAGE HEADER-->
                <h3 class="page-title">
                Products <small>pick products to order</small>
                </h3>
                
                <!-- END PAGE HEADER-->
                <!-- BEGIN PAGE CONTENT-->
                <div class="row">
                <div class="tiles col-sm-6 col-md-6 col-xl-5">

                @foreach($products as $product)

                    @if(!$product->image)
                    <!-- IF THE PRODUCT HAS NO PICTURE -->

                    <div class="tile bg-blue-steel">
                        <div class="tile-body">
                            <i class="fa fa-coffee"></i>
                        </div>
                        <div class="tile-object">
                            <div class="id" style="display:none">
                                <input value="{{$product->id}}" />
                            </div>
                            <div class="price" style="display:none">
                                {{$product->price}}
                            </div>
                            <div class="name">
                                 {{$product->name}}
                            </div>
                            <div class="number">
                                 {{$product->quantity}}
                            </div>
                        </div>
                    </div>
                    <!-- ENDIF -->
                    @else

                    <div class="tile image">
                        <div class="tile-body">
                            <img src="{{$product->image}}" alt="">
                        </div>
                        <div class="tile-object">
                            <div class="id" style="display:none">
                                <input value="{{$product->id}}" />
                            </div>
                            <div class="price" style="display:none">
                                {{$product->price}}
                            </div>
                            <div class="name">
                                 {{$product->name}}
                            </div>
                            <div class="number">
                                 {{$product->quantity}}
                            </div>
                        </div>
                    </div>
                    
                    @endif
                    @endforeach
                </div>
                <!-- END PAGE CONTENT-->

                <div class="col-sm-6 col-md-6 col-xl-7">
                            <!-- BEGIN ORDER TABLE PORTLET-->
                            <div class="portlet">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-shopping-cart"></i>Order
                                    </div>
                                    <div class="tools">
                                        <a href="javascript:;" class="collapse">
                                        </a>
                                        <a href="javascript:;" class="fullscreen">
                                        </a>
                                        <a href="javascript:;" class="remove">
                                        </a>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="table-scrollable">
                                        <table class="table table-striped table-bordered table-advance table-hover">
                                        <thead>
                                        <tr>
                                            <th>
                                                <i class="fa fa-circle-thin"></i>
                                            </th>
                                            <th>
                                                <i class="fa fa-windows"></i> Product
                                            </th>
                                            <th>
                                                <i class="fa fa-plus-circle"></i> Quantity
                                            </th>
                                            <th>
                                                <i class="fa fa-tag"></i> Price
                                            </th>
                                            <th>
                                                <i class="fa fa-bookmark"></i> Total
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody id="orders">
                                        <div id="counter" style="display:none;">0</div>

                                        
                                        </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="portlet-title">
                                    <div class="caption">
                                        
                                    </div>
                                    <div class="tools">
                                    Total: 
                                       <button value="0" href="#" class="sum btn default blue-stripe">TOTAL</button>
                                    </div>
                                </div>

                                <div class="portlet-body">
                                    <a href="javascript:;" class="btn green"><i class="fa fa-dollar"></i> Cash</a>
                                    <a href="javascript:;" class="btn yellow"><i class="fa fa-cc"></i> Credit Card</a>
                                    <a href="javascript:;" class="btn red"><i class="fa fa-gift"></i> Other</a>
                                </div>
                            </div>
                        <!-- END ORDER TABLE PORTLET-->

                        <div class="portlet box yellow">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="fa fa-table"></i>Tables
                                </div>
                                <div class="actions">
                                    <a href="javascript:;" class="btn btn-default btn-sm">
                                    <i class="fa fa-plus"></i> New </a>
                                    <div class="btn-group">
                                        <a class="btn btn-default btn-sm" href="javascript:;" data-toggle="dropdown">
                                        <i class="fa fa-cogs"></i> Manage <i class="fa fa-angle-down"></i>
                                        </a>
                                        <ul class="dropdown-menu pull-right">
                                            <li>
                                                <a href="javascript:;">
                                                <i class="fa fa-pencil"></i> Edit </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                <i class="fa fa-trash-o"></i> Delete </a>
                                            </li>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <table class="table table-striped table-bordered table-hover" id="sample_2">
                                <thead>
                                <tr>
                                    <th class="table-checkbox">
                                        <input type="checkbox" class="group-checkable" data-set="#sample_2 .checkboxes"/>
                                    </th>
                                    <th>
                                         Table Name
                                    </th>
                                    <th>
                                         Table Number
                                    </th>
                                    <th>
                                         Status
                                    </th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($tables as $table)

                                <tr class="odd gradeX">
                                    <td>
                                        <input type="checkbox" class="checkboxes" value="1"/>
                                    </td>
                                    <td>
                                         <a href="javascript:;">{{$table->name}}</a>
                                    </td>
                                    <td>
                                        {{$table->number}}
                                    </td>

                                    @if($table->status == 'Active')
                                    <td>
                                        <span class="label label-sm label-success">
                                        {{$table->status}} </span>
                                    </td>
                                    @else 
                                     <td>
                                        <span class="label label-sm label-warning">
                                        {{$table->status}} </span>
                                    </td>
                                    @endif
                                </tr>

                                @endforeach

                                </tbody>
                                </table>
                            </div>

                            

                            <div class="portlet-body">
                                <a href="#inovice-modal" data-toggle="modal" class="btn green"><i class="fa fa-print"></i> Print</a>
                                <a href="javascript:;" class="btn yellow"><i class="fa  fa-history"></i> Storno</a>
                                
                            </div>

                        </div>


                    </div>

                </div>
            </div>
                

        </div>
        <!-- END CONTENT -->
        <!-- BEGIN QUICK SIDEBAR -->
        <!--Cooming Soon...-->
        <!-- END QUICK SIDEBAR -->
    </div>
    <!-- END CONTAINER -->
    <!-- BEGIN FOOTER -->
    <div class="page-footer">
        <div class="page-footer-inner">
             2018 &copy; CRMS by Hadzic Ismar.
        </div>
        <div class="scroll-to-top">
            <i class="icon-arrow-up"></i>
        </div>
    </div>
    <!-- END FOOTER -->
</div>

@endsection
