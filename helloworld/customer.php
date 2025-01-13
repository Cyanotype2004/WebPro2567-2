<?php
try {
    $username = "root";
    $password = "";
    $host = "localhost";
    $dbname = "restaurant";
    $servername = "mysql:host=$host;dbname=$dbname;charset=utf8";
    $conn = new PDO(
        $servername,
        $username,
        $password
    );

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    echo "Database connection error : ". $e->getMessage();
    exit();
}

// รับค่าจาก URL (Query String) เช่น ?name=John
$name = $_GET['name'] ?? '';

// ดึงข้อมูลลูกค้า
$stm = $conn->prepare("SELECT * FROM customers ");
$stm->execute();
$customers = $stm->fetchAll(PDO::FETCH_ASSOC);

// ดึงข้อมูลเมนู
$menusStmt = $conn->query("SELECT * FROM manus");
$menus = $menusStmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข้อมูลลูกค้าและเมนู</title>
    <style>
        table {
            width: 50%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>ข้อมูลลูกค้า</h2>
<table>
    <tr>
        <th>ID</th>
        <th>ชื่อ</th>
        <th>เมือง</th>
    </tr>
    <?php if (!empty($customers)): ?>
        <?php foreach ($customers as $customer): ?>
            <tr>
                <td><?php echo htmlspecialchars($customer['id']); ?></td>
                <td><?php echo htmlspecialchars($customer['name']); ?></td>
                <td><?php echo htmlspecialchars($customer['city']); ?></td>
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr><td colspan="3">ไม่พบข้อมูลลูกค้า</td></tr>
    <?php endif; ?>
</table>

<h2>เมนู</h2>
<table>
    <tr>
        <th>ID</th>
        <th>ชื่อเมนู</th>
        <th>ราคา</th>
    </tr>
    <?php foreach ($menus as $menu): ?>
    <tr>
        <td><?php echo htmlspecialchars($menu['manu_id']); ?></td>
        <td><?php echo htmlspecialchars($menu['manu_name']); ?></td>
        <td><?php echo number_format($menu['price'], 2); ?> บาท</td>
    </tr>
    <?php endforeach; ?>
</table>

</body>
</html>