To implement a solid architecture in Vanilla PHP that scales, you must strictly separate your concerns. In a large-scale system, the Controller acts as the "middleman"—it takes data from the Model and hands it off to the View without the Model and View ever speaking to each other.

Here is a clean, professional implementation using a Custom MVC approach.

1. The Model (Models/Student.php)
The Model is the only place where SQL lives. It handles the data logic and interacts with the physicall table.

<?php
class Student {
    private $db;

    public function __construct($dbConn) {
        $this->db = $dbConn;
    }

    public function getClearanceStatus($studentId) {
        // Always use PDO prepared statements for security
        $stmt = $this->db->prepare("SELECT student_name, boardingstatus FROM physicall WHERE id = ?");
        $stmt->execute([$studentId]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>

2. The Controller (Controllers/ClearanceController.php)
The Controller captures the request, asks the Model for data, and then decides which View to load.

PHP
<?php
require_once 'Models/Student.php';

class ClearanceController {
    private $db;

    public function __construct($dbConn) {
        $this->db = $dbConn;
    }

    public function showStatus($id) {
        // 1. Fetch data from Model
        $studentModel = new Student($this->db);
        $studentData = $studentModel->getClearanceStatus($id);

        // 2. Logic Check: If student doesn't exist
        if (!$studentData) {
            $error = "Student records not found.";
            require 'Views/error.php';
            return;
        }

        // 3. Pass data to the View
        // We extract variables so the View can use them directly as $student_name
        extract($studentData); 
        require 'Views/clearance_status.php';
    }
}
?>

3. The View (Views/clearance_status.php)
The View is "dumb." It only knows how to display what the Controller gives it. Notice how we use the variable names from the database columns directly.

PHP
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Clearance Dashboard</title>
    <style>
        .status-box { padding: 20px; border-radius: 8px; }
        .pending { background: #fff3cd; color: #856404; }
        .cleared { background: #d4edda; color: #155724; }
    </style>
</head>
<body>
    <h1>Welcome, <?php echo htmlspecialchars($student_name); ?></h1>
    
    <div class="status-box <?php echo ($boardingstatus === 'pending_physical_payment') ? 'pending' : 'cleared'; ?>">
        <p>Current Boarding Status: <strong><?php echo str_replace('_', ' ', $boardingstatus); ?></strong></p>
    </div>

    <?php if ($boardingstatus === 'pending_physical_payment'): ?>
        <button onclick="initiateStkPush()">Pay via M-Pesa</button>
    <?php endif; ?>
</body>
</html>

How this works in a Large-Scale System


To make this truly professional, you use a Front Controller (usually index.php). Instead of going directly to clearance_status.php, all requests go to index.php, which routes them like this:

Request: User visits [example.com/clearance?id=101](https://example.com/clearance?id=101).

Routing: index.php sees the URL and says "This belongs to ClearanceController."

Execution: The Controller runs, talks to the Model, gets the data from the physicall table.

Response: The Controller pulls in the View file and the user sees the page.

Why this is Secure & Scalable:
Separation: If you want to change your UI (View), you don't touch your database logic (Model).

Security: By keeping SQL in the Model and using PDO, you prevent SQL injection. By using htmlspecialchars() in the View, you prevent XSS attacks.

Maintenance: In a large project, you might have 50 Models and 50 Controllers. Because they are organized into folders, you always know exactly where to find the code you need to fix.