<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Us Inquiry</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f4f4f4;">
    <table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color: #f4f4f4;">
        <tr>
            <td align="center">
                <table width="600" cellpadding="0" cellspacing="0" border="0" style="background-color: #ffffff; padding: 20px;">
                    <!-- Header -->
                    <tr>
                        <td align="center" style="padding: 20px; background-color: #333;">
                            <img src="https://preowned-luxuries.co.uk/images/main-logo.png" alt="Your Company Logo" width="150" style="display: block;">
                        </td>
                    </tr>

                    <!-- Notification Message -->
                    <tr>
                        <td style="padding: 20px;">
                            <h2 style="color: #333333;">New Contact Us Inquiry</h2>
                            <p>Dear Admin,</p>
                            <p>A new inquiry has been submitted through the Contact Us form. Here are the details:</p>
                            <table width="100%" cellpadding="0" cellspacing="0" border="1" style="border-collapse: collapse; text-align: left;">
                                <tr>
                                    <td style="padding: 8px;"><strong>Name:</strong></td>
                                    <td style="padding: 8px;">{{ $user_name }}</td>
                                </tr>
                                <tr>
                                    <td style="padding: 8px;"><strong>Email:</strong></td>
                                    <td style="padding: 8px;">{{ $user_email }}</td>
                                </tr>
                                <tr>
                                    <td style="padding: 8px;"><strong>Message:</strong></td>
                                    <td style="padding: 8px;">{{ $message }}</td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td style="padding: 20px;">
                            <p>Best regards, <br>Preowned Luxuries Team</p>
                        </td>
                    </tr>

                    <!-- Closing Message -->
                    <tr>
                        <td align="center" style="padding: 10px; background-color: #333; color: #ffffff;">
                            <p>&copy; {{ date('Y') }} Preowned Luxuries. All rights reserved.</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>