<?php $__env->startSection('title', 'Tour Bookings'); ?>

<?php $__env->startSection('page_header'); ?>

<div class="row mb-2">

    <div class="col-sm-6">
        <h1>Tour Bookings</h1>
    </div>

    <div class="col-sm-6">
        <div class="float-sm-right">
            <a href="<?php echo e(route('tour-bookings.create')); ?>" class="btn btn-primary">
                <i class="fas fa-plus"></i> Add Booking
            </a>
        </div>
    </div>

</div>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<?php if(session('success')): ?>
<div class="alert alert-success alert-dismissible fade show">
    <button type="button" class="close" data-dismiss="alert">
        <span>&times;</span>
    </button>

    <?php echo e(session('success')); ?>

</div>
<?php endif; ?>

<div class="card">

    <div class="card-header">
        
        <h3 class="card-title">
            <i class="fas fa-suitcase mr-2"></i>
            Booking List
        </h3>

        <div class="card-tools">
            <a href="<?php echo e(route('tour-bookings.pdf')); ?>" class="btn btn-danger btn-sm">
                <i class="fas fa-file-pdf"></i> Download All Bookings PDF
            </a>
        </div>

    </div>

    <div class="card-body">

        <div class="table-responsive">

            <table id="bookingTable" class="table table-bordered table-hover table-striped">

                <thead>

                    <tr>
                        <th>ID</th>
                        <th>Client Name</th>
                        <th>Contact</th>
                        <th>City</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Enquiry Date</th>
                        <th>Package Details</th>
                          <th>Trip Start Date</th>
                            <th>Trip End Date</th>
                              <th>Pickup Location</th>
                                <th>Pickup Time</th>
                                  <th>Drop Location</th>
                                    <th>Drop Time</th>
                                      <th>No of Adults</th>
                                        <th>Car Type</th>
                                        <th>Car Charges</th>
                                        <th>Car Number</th>
                                        <th>Driver Name </th>
                                        <th>Driver Contact </th>
                                        <th>Hotel Room Type </th>
                                        <th>Hotel Charges </th>
                                        <th>Guide Service </th>
                                        <th>Guide Charges </th>
                                         <th>Advance Payment Received </th>
                                          <th>Total Balance Amount </th>
                                          <th>First Followup Date </th>
                                           <th>Second Followup Date </th> 
                                           <th>Last Followup Date </th>
                                            <th>Review </th>
                                              <th>Status</th>
                                               <th>Total Amount</th>
                      
                    </tr>

                </thead>

                <tbody>

                    <?php $__empty_1 = true; $__currentLoopData = $bookings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $booking): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                    <tr>

                        <td><?php echo e($booking->id); ?></td>

                        <td><?php echo e($booking->client_name); ?></td>

                        <td><?php echo e($booking->contact_number); ?></td>

                        <td><?php echo e($booking->client_city); ?></td>

                        <td><?php echo e($booking->trip_start_date); ?></td>

                        <td><?php echo e($booking->trip_end_date); ?></td>

                        <td><?php echo e($booking->enquiry_date); ?></td>

                        <td><?php echo e($booking->package_details); ?></td>

                        <td><?php echo e($booking->trip_start_date); ?></td>


                        <td><?php echo e($booking->trip_end_date); ?></td>
                        <td><?php echo e($booking->pickup_location); ?></td>
                        <td><?php echo e($booking->pickup_time); ?></td>

                        <td><?php echo e($booking->drop_location); ?></td>
                        <td><?php echo e($booking->drop_time); ?></td>
                        <td><?php echo e($booking->no_of_adults); ?></td>

                        <td><?php echo e($booking->car_type); ?></td>
                        <td><?php echo e($booking->car_charges_per_day); ?></td>
                         <td><?php echo e($booking->car_number); ?></td>
                         
                        <td><?php echo e($booking->driver_name); ?></td>
                        <td><?php echo e($booking->driver_contact); ?></td>
                         <td><?php echo e($booking->hotel_room_type); ?></td>

                          <td><?php echo e($booking->hotel_charges); ?></td>
                        <td><?php echo e($booking->guide_service); ?></td>
                         <td><?php echo e($booking->guide_charges); ?></td>

                         <td><?php echo e($booking->advance_payment_received); ?></td>

                        <td>  ₹ <?php echo e(number_format($booking->total_balance_amount ?? 0, 2)); ?>

                        </td>
                         <td><?php echo e($booking->first_followup_date); ?></td>
                         <td><?php echo e($booking->second_followup_date); ?></td>
                        <td><?php echo e($booking->last_followup_date); ?></td>
                         <td><?php echo e($booking->review); ?></td>

                        <td>

                            <?php if($booking->booking_status == 'Confirmed'): ?>
                                <span class="badge badge-success">
                                    Confirmed
                                </span>

                            <?php elseif($booking->booking_status == 'Pending'): ?>
                                <span class="badge badge-warning">
                                    Pending
                                </span>

                            <?php elseif($booking->booking_status == 'Cancelled'): ?>
                                <span class="badge badge-danger">
                                    Cancelled
                                </span>

                            <?php else: ?>
                                <span class="badge badge-info">
                                    <?php echo e($booking->booking_status); ?>

                                </span>
                            <?php endif; ?>

                        </td>

                        <td>
                            ₹ <?php echo e(number_format($booking->total_amount ?? 0, 2)); ?>

                        </td>
                        <td>

                            <!-- <a href="<?php echo e(route('tour-bookings.show', $booking->id)); ?>"
                               class="btn btn-info btn-sm"
                               title="View">

                                <i class="fas fa-eye"></i>

                            </a> -->

                            <a href="<?php echo e(route('tour-bookings.edit', $booking->id)); ?>"
                               class="btn btn-warning btn-sm"
                               title="Edit">

                                <i class="fas fa-edit"></i>

                            </a>

                            <form action="<?php echo e(route('tour-bookings.destroy', $booking->id)); ?>"
                                  method="POST"
                                  style="display:inline-block">

                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>

                                <button type="submit"
                                        class="btn btn-danger btn-sm"
                                        title="Delete"
                                        onclick="return confirm('Are you sure you want to delete this booking?')">

                                    <i class="fas fa-trash"></i>

                                </button>

                            </form>

                        </td>

                    </tr>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                    <tr>
                        <td colspan="10" class="text-center">
                            No Bookings Found
                        </td>
                    </tr>

                    <?php endif; ?>

                </tbody>

            </table>

        </div>

    </div>

</div>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>

<script>
$(document).ready(function () {

    if ($.fn.DataTable) {

        $('#bookingTable').DataTable({
            responsive: true,
            autoWidth: false,
            pageLength: 10
        });

    }

});
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/u439698974/domains/vrindataxiservice.com/public_html/vrinda-taxi/resources/views/admin/tour-bookings/index.blade.php ENDPATH**/ ?>