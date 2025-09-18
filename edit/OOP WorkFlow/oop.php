<?php
#---------------------------------------------------#
#--------------⚙️ How OOP Works -------------------#
#---------------------------------------------------#
# We separate our project into: 
# - model/   (Classes, OOP logic, DB handling)
# - admin/   (Admin dashboard, CRUD pages)
# - page/    (Client-facing forms, booking, etc.)
#---------------------------------------------------#

#---------------------------------------------------#
#--📌 Step 1: Database Connection (Reusable Class)--#
#---------------------------------------------------#
// 📄 model/db_connection.php
class Database {
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $db   = "rdbms_db";
    private $conn;

    public function connect() {
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->db);
        if ($this->conn->connect_error) {
            die("❌ DB Connection failed: " . $this->conn->connect_error);
        }
        return $this->conn;
    }
}

#---------------------------------------------------#
#--📌 Step 2: Booking Class (Encapsulation CRUD) --#
#---------------------------------------------------#
// 📄 model/booking-class.php
class Booking {
    private $conn;
    private $table = "booking_tb";

    public function __construct($db) {
        $this->conn = $db;
    }

    # CREATE (Insert)
    public function add($customer_id, $service_id, $vehicle_id, $date, $time) {
        $query = "INSERT INTO $this->table (customer_id, service_id, vehicle_id, booking_date, booking_time) 
                  VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("iiiss", $customer_id, $service_id, $vehicle_id, $date, $time);
        return $stmt->execute();
    }

    # READ (Select All)
    public function getAll() {
        $query = "SELECT * FROM $this->table";
        return $this->conn->query($query);
    }

    # UPDATE (Modify)
    public function update($id, $service_id, $date, $time) {
        $query = "UPDATE $this->table SET service_id=?, booking_date=?, booking_time=? WHERE id=?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("issi", $service_id, $date, $time, $id);
        return $stmt->execute();
    }

    # DELETE (Remove)
    public function delete($id) {
        $query = "DELETE FROM $this->table WHERE id=?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}

#---------------------------------------------------#
#--📌 Step 3: Admin Insert Page -------------------#
#---------------------------------------------------#
// 📄 admin/add-booking.php
include "../model/db_connection.php";
include "../model/booking-class.php";

$db = (new Database())->connect();
$booking = new Booking($db);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $customer_id = $_POST['customer_id'];
    $service_id  = $_POST['service_id'];
    $vehicle_id  = $_POST['vehicle_id'];
    $date        = $_POST['booking_date'];
    $time        = $_POST['booking_time'];

    if ($booking->add($customer_id, $service_id, $vehicle_id, $date, $time)) {
        echo "✅ Booking Added Successfully!";
    } else {
        echo "❌ Failed to Add Booking!";
    }
}
?>
<form method="POST">
    Customer ID: <input type="number" name="customer_id"><br>
    Service ID: <input type="number" name="service_id"><br>
    Vehicle ID: <input type="number" name="vehicle_id"><br>
    Date: <input type="date" name="booking_date"><br>
    Time: <input type="time" name="booking_time"><br>
    <button type="submit">Save Booking</button>
</form>

<?php
#---------------------------------------------------#
#--📌 Step 4: Admin List Page ---------------------#
#---------------------------------------------------#
// 📄 admin/all-bookings.php
include "../model/db_connection.php";
include "../model/booking-class.php";

$db = (new Database())->connect();
$booking = new Booking($db);
$result = $booking->getAll();
?>
<h2>All Bookings</h2>
<table border="1">
<tr><th>ID</th><th>Customer</th><th>Service</th><th>Date</th><th>Time</th><th>Action</th></tr>
<?php while($row = $result->fetch_assoc()) { ?>
<tr>
    <td><?= $row['id'] ?></td>
    <td><?= $row['customer_id'] ?></td>
    <td><?= $row['service_id'] ?></td>
    <td><?= $row['booking_date'] ?></td>
    <td><?= $row['booking_time'] ?></td>
    <td>
        <a href="edit-booking.php?id=<?= $row['id'] ?>">Edit</a> | 
        <a href="delete-booking.php?id=<?= $row['id'] ?>">Delete</a>
    </td>
</tr>
<?php } ?>
</table>

<?php
#---------------------------------------------------#
#--📌 Step 5: Admin Update Page -------------------#
#---------------------------------------------------#
// 📄 admin/edit-booking.php
include "../model/db_connection.php";
include "../model/booking-class.php";

$db = (new Database())->connect();
$booking = new Booking($db);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id        = $_POST['id'];
    $service_id= $_POST['service_id'];
    $date      = $_POST['booking_date'];
    $time      = $_POST['booking_time'];

    if ($booking->update($id, $service_id, $date, $time)) {
        echo "✅ Booking Updated!";
    }
}
$id = $_GET['id'];
?>
<form method="POST">
    <input type="hidden" name="id" value="<?= $id ?>">
    Service ID: <input type="number" name="service_id"><br>
    Date: <input type="date" name="booking_date"><br>
    Time: <input type="time" name="booking_time"><br>
    <button type="submit">Update</button>
</form>

<?php
#---------------------------------------------------#
#--📌 Step 6: Admin Delete Page -------------------#
#---------------------------------------------------#
// 📄 admin/delete-booking.php
include "../model/db_connection.php";
include "../model/booking-class.php";

$db = (new Database())->connect();
$booking = new Booking($db);

$id = $_GET['id'];
if ($booking->delete($id)) {
    echo "✅ Booking Deleted!";
}
?>
<a href="all-bookings.php">⬅ Back to All Bookings</a>

<?php
#---------------------------------------------------#
#---------- 🚀 Summary (OOP Flow) -----------------#
#---------------------------------------------------#
/*
    📂 model/   → Contains reusable classes (Database, Booking, Customer, etc.)
    📂 admin/   → Uses those classes for CRUD (Insert, Select, Update, Delete).
    📂 page/    → Client-facing pages, can also use same model classes.
    ⚙️ Benefit  → Reusability, Encapsulation, Cleaner Code.
*/
?>
