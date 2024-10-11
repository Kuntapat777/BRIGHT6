<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moisture Data</title>
    <link rel="stylesheet" href="view_data.css">
</head>
<body>
    
<a href="home.php" class="back-button">&lt;</a>
    <div class="container">
        
        <h1>การอ่านค่าความชื้น</h1>

        <!-- ฟอร์มกรองข้อมูล -->
        <form class="filter-form" method="POST" action="display1_data.php">
            <div class="form-group">
                <label for="start_date">วันที่เริ่มต้น:</label>
                <input type="date" id="start_date" name="start_date" required>
            </div>
            <div class="form-group">
                <label for="end_date">วันที่สิ้นสุด:</label>
                <input type="date" id="end_date" name="end_date" required>
            </div>
            <div class="form-group">
                <label for="min_moisture">ค่าความชื้นขั้นต่ำ (%):</label>
                <input type="number" id="min_moisture" name="min_moisture" min="0" max="100" required>
            </div>
            <div class="form-group">
                <label for="max_moisture">ค่าความชื้นสูงสุด (%):</label>
                <input type="number" id="max_moisture" name="max_moisture" min="0" max="100" required>
            </div>
            <button type="submit" class="submit-button">ค้นหา</button>
        </form>
    </div>
</body>
</html>
