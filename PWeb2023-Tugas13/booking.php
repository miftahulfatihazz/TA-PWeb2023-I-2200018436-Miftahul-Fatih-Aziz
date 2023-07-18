<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
    <link rel="stylesheet" type="text/css" href="booking.css">
<body>
    <?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $package = $_POST['package'];

    $bookingData = "Nama: " . $name . "\n" .
                   "Email: " . $email . "\n" .
                   "Paket: " . $package . "\n\n";

    $file = fopen("bookings.txt", "a");
    fwrite($file, $bookingData);
    fclose($file);

    echo "Booking berhasil disimpan. Terima kasih!";
    ?>
</body>
</html>