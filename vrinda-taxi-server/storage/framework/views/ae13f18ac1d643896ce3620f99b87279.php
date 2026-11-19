<h2>New Booking Received</h2>

<p><strong>Name:</strong> <?php echo e($booking->name); ?></p>
<p><strong>Email:</strong> <?php echo e($booking->email); ?></p>
<p><strong>Phone:</strong> <?php echo e($booking->phone); ?></p>
<p><strong>Pickup:</strong> <?php echo e($booking->pickup_location); ?></p>
<p><strong>Drop:</strong> <?php echo e($booking->drop_location); ?></p>
<p><strong>Date:</strong> <?php echo e($booking->ride_date); ?></p>
<p><strong>Time:</strong> <?php echo e($booking->ride_time); ?></p>
<p><strong>Return Date:</strong> <?php echo e($booking->return_date); ?></p>
<p><strong>Return Time:</strong> <?php echo e($booking->return_time); ?></p>

<?php /**PATH /home/u439698974/domains/vrindataxiservice.com/public_html/vrinda-taxi/resources/views/emails/booking-notification.blade.php ENDPATH**/ ?>