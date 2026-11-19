<!DOCTYPE html>
<html>
<head>
    <title>Booking <?php echo e($booking->status); ?></title>
</head>
<body>
    <h2>Your Booking Has Been <?php echo e($booking->status); ?></h2>

    <p>Dear <?php echo e($booking->name); ?>,</p>

    <p>Thank you for choosing us. Your booking has been <?php echo e($booking->status); ?>.</p>

    <p><strong>Booking Details:</strong></p>

    <ul>
        <li>Booking ID: <?php echo e($booking->id); ?></li>
        <li>Booking Number: <?php echo e($booking->booking_no); ?></li>
        <li>Pickup: <?php echo e($booking->pickup_location); ?></li>
        <li>Drop: <?php echo e($booking->drop_location); ?></li>
        <li>Trip Type : <?php echo e($booking->trip_type); ?></li>
        <li>Ride Date: <?php echo e($booking->ride_date); ?></li>
        <li>Ride Time: <?php echo e($booking->ride_time); ?></li>
        <li>Return Date: <?php echo e($booking->return_date); ?></li>
        <li>Return Time: <?php echo e($booking->return_time); ?></li>
        <li>Status: <?php echo e($booking->status); ?></li>
    </ul>

    <p>We look forward to serving you.</p>

    <p>Regards,<br>Vrinda Taxi Service</p>
</body>
</html><?php /**PATH /home/u439698974/domains/vrindataxiservice.com/public_html/vrinda-taxi/resources/views/emails/booking-confirmed.blade.php ENDPATH**/ ?>