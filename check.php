<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information Table</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        table {
            width: 80%;
            border-collapse: collapse;
            margin-top: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            border-radius: 8px;
            overflow: hidden;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #001f3f;
            color: white;
        }

        tr:hover {
            background-color: #f5f5f5;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Blood Type</th>
                <th>City</th>
                <th>State</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>John Doe</td>
                <td>123-456-7890</td>
                <td>john@example.com</td>
                <td>O+</td>
                <td>New York</td>
                <td>NY</td>
            </tr>
            <tr>
                <td>Jane Smith</td>
                <td>987-654-3210</td>
                <td>jane@example.com</td>
                <td>A-</td>
                <td>Los Angeles</td>
                <td>CA</td>
            </tr>
            <tr>
                <td>Bob Johnson</td>
                <td>555-123-4567</td>
                <td>bob@example.com</td>
                <td>B+</td>
                <td>Chicago</td>
                <td>IL</td>
            </tr>
            <!-- Add more rows as needed -->
        </tbody>
    </table>
</body>
</html>
