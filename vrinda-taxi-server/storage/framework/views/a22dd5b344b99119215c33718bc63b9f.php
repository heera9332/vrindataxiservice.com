<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <h4>Edit Booking</h4>
    </div>

    <div class="card-body">

        <form action="<?php echo e(route('bookings.update', $booking->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>

            <div class="row">

                <div class="col-md-6 mb-3">
                    <label>Name</label>
                    <input type="text"
                           name="name"
                           class="form-control"
                           value="<?php echo e(old('name', $booking->name)); ?>" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label>Email</label>
                    <input type="email"
                           name="email"
                           class="form-control"
                           value="<?php echo e(old('email', $booking->email)); ?>" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label>Mobile</label>
                    <input type="text"
                           name="phone"
                           class="form-control"
                           value="<?php echo e(old('phone', $booking->phone)); ?>" required>
                </div>

               

                 <div class="col-md-6 mb-3">
                    <label>Booking No</label>
                    <input type="text"
                           name="booking_no"
                           class="form-control"
                           value="<?php echo e(old('booking_no', $booking->booking_no)); ?>" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label>Pickup Location</label>
                    <input type="text"
                           name="pickup_location"
                           class="form-control"
                           value="<?php echo e(old('pickup_location', $booking->pickup_location)); ?>" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label>Drop Location</label>
                    <input type="text"
                           name="drop_location"
                           class="form-control"
                           value="<?php echo e(old('drop_location', $booking->drop_location)); ?>" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label>Status</label>
                    <select name="status" class="form-control" required>
                        <option value="pending" <?php echo e($booking->status == 'pending' ? 'selected' : ''); ?>>
                            Pending
                        </option>

                        <option value="confirmed" <?php echo e($booking->status == 'confirmed' ? 'selected' : ''); ?>>
                            Confirmed
                        </option>

                        <option value="cancelled" <?php echo e($booking->status == 'cancelled' ? 'selected' : ''); ?>>
                            Cancelled
                        </option>
                    </select>
                </div>

                <div class="col-md-6 mb-3">
                    <label>Trip Type</label>
                    <select name="trip_type" id="trip_type" class="form-control" required>
                        <option value="one_way" <?php echo e($booking->trip_type == 'one_way' ? 'selected' : ''); ?>>
                            One Way
                        </option>

                        <option value="round_trip" <?php echo e($booking->trip_type == 'round_trip' ? 'selected' : ''); ?>>
                            Round Trip
                        </option>

                        <option value="local" <?php echo e($booking->trip_type == 'local' ? 'selected' : ''); ?>>
                            Local
                        </option>
                    </select>
                </div>

                 <div class="col-md-6 mb-3">
                    <label>Ride Date</label>
                   <input type="datetime-local"
                        name="ride_date"
                        class="form-control"
                        value="<?php echo e($booking->ride_date.'T'.substr($booking->ride_time,0,5)); ?>" required>
                </div>
                
                <div class="col-md-6 mb-3" id="return_date_div" style="display:none;">
                    <label>Return Date</label>
                    <input type="datetime-local"
                           id="return_date"
                           name="return_date"
                           class="form-control"
                           value="<?php echo e(old('return_date', $booking->return_date ? $booking->return_date.'T'.$booking->return_time : '')); ?>" >
                </div>

               

                <div class="col-md-6 mb-3">
                    <label>Distance (KM)</label>
                    <input type="number"
                           step="0.01"
                           name="distance_km"
                           class="form-control"
                           value="<?php echo e(old('distance_km', $booking->distance_km)); ?>" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label>Total Distance</label>
                    <input type="number"
                           step="0.01"
                           name="total_distance"
                           class="form-control"
                           value="<?php echo e(old('total_distance', $booking->total_distance)); ?>"
                           readonly required>
                </div>

                <div class="col-md-6 mb-3">
                    <label>Fare (₹)</label>
                    <input type="number"
                           step="0.01"
                           name="fare"
                           class="form-control"
                           value="<?php echo e(old('fare', $booking->fare)); ?>"
                           readonly required>
                </div>

            </div>

            <button type="submit" class="btn btn-success">
                Update Booking
            </button>

        </form>

    </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script>
document.addEventListener('DOMContentLoaded', function () {

    const tripType = document.getElementById('trip_type');
    const returnDateDiv = document.getElementById('return_date_div');
    const returnDate = document.getElementById('return_date');

    function toggleReturnDate() {

        if (tripType.value === 'round_trip') {
            returnDateDiv.style.display = 'block';
            returnDate.required = true;
        } else {
            returnDateDiv.style.display = 'none';
            returnDate.required = false;
            returnDate.value = '';
        }
    }

    // Page load par
    toggleReturnDate();

    // Dropdown change par
    tripType.addEventListener('change', toggleReturnDate);
});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/u439698974/domains/vrindataxiservice.com/public_html/vrinda-taxi/resources/views/admin/bookings/edit.blade.php ENDPATH**/ ?>