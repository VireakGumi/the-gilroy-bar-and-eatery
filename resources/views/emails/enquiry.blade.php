<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>New Event Enquiry</title>
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #212529;
            margin: 0;
            padding: 0;
        }

        .email-container {
            max-width: 600px;
            margin: 30px auto;
            background-color: #ffffff;
            border: 1px solid #dee2e6;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        }

        .email-header {
            background-color: #000000;
            color: #ffffff;
            padding: 20px;
            text-align: center;
        }

        .email-header h2 {
            margin: 0;
            font-size: 22px;
            letter-spacing: 1px;
        }

        .email-body {
            padding: 25px 30px;
        }

        .info-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 25px;
        }

        .info-table th {
            text-align: left;
            padding: 10px;
            background-color: #f1f1f1;
            width: 40%;
            font-weight: 600;
            border-bottom: 1px solid #dee2e6;
        }

        .info-table td {
            padding: 10px;
            border-bottom: 1px solid #dee2e6;
        }

        .email-footer {
            background-color: #f8f9fa;
            padding: 15px;
            text-align: center;
            font-size: 13px;
            color: #6c757d;
            border-top: 1px solid #dee2e6;
        }

        .btn {
            display: inline-block;
            background-color: #000000;
            color: #ffffff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 14px;
            font-weight: 500;
        }

        .btn:hover {
            background-color: #333333;
        }

        .text-decoration-none {
            text-decoration: none !important;
            color: #dee2e6 !important;
        }
    </style>
</head>

<body>
    <div class="email-container">
        <div class="email-header">
            <h2>New Event Enquiry</h2>
        </div>

        <div class="email-body">
            <p>Dear Admin,</p>
            <p>You’ve received a new enquiry from <strong>{{ $first_name }} {{ $last_name }}</strong>.</p>

            <table class="info-table">
                <tr>
                    <th>Full Name</th>
                    <td>{{ $first_name }} {{ $last_name }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ $email }}</td>
                </tr>
                <tr>
                    <th>Phone</th>
                    <td>{{ $mobile }}</td>
                </tr>
                <tr>
                    <th>Enquiry Type</th>
                    <td>{{ $enquiry_type }}</td>
                </tr>
                <tr>
                    <th>Message</th>
                    <td>{{ $description }}</td>
                </tr>
            </table>

            <p>You can reply directly to this email to contact the client.</p>

            <p style="text-align:center;">
                <a href="mailto:{{ $email }}" class="btn text-decoration-none">Reply to {{ $first_name }}</a>
            </p>
        </div>

        <div class="email-footer">
            <p>© {{ date('Y') }} The Gilroy Events. All Rights Reserved.</p>
        </div>
    </div>
</body>

</html>
