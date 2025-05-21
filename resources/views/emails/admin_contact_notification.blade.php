<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>New Contact Us Inquiry - Deluxe IT Services</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body style="margin: 0; padding: 0; background-color: #f4f4f4; font-family: Arial, sans-serif;">
  <table cellpadding="0" cellspacing="0" width="100%" style="background-color: #f4f4f4;">
    <tr>
      <td align="center">
        <table cellpadding="0" cellspacing="0" width="600" style="background-color: #ffffff; border-collapse: collapse; margin: 20px 0;">
          
          <!-- Header / Logo -->
          <tr>
            <td align="center" style="background-color: #333333; padding: 20px;">
              <img src="https://deluxe-it-services.co.uk/assets/img/favicon.png" alt="Deluxe IT Services Logo" width="120" style="display: block;">
            </td>
          </tr>

          <!-- Main Content -->
          <tr>
            <td style="padding: 20px; color: #333333;">
              <h2 style="margin-top: 0;">New Contact Us Inquiry</h2>
              <p>Dear Admin,</p>
              <p>You have received a new message via the Contact Us form. Here are the details:</p>

              <table width="100%" cellpadding="0" cellspacing="0" border="1" style="border-collapse: collapse;">
                <tr>
                  <td style="padding: 10px; background-color: #f9f9f9; font-weight: bold;">Name:</td>
                  <td style="padding: 10px;">{{ $user_name }}</td>
                </tr>
                <tr>
                  <td style="padding: 10px; background-color: #f9f9f9; font-weight: bold;">Email:</td>
                  <td style="padding: 10px;">{{ $user_email }}</td>
                </tr>
                <tr>
                  <td style="padding: 10px; background-color: #f9f9f9; font-weight: bold;">Message:</td>
                  <td style="padding: 10px;">{{ $message }}</td>
                </tr>
              </table>

              <p style="margin-top: 20px;">Best regards,<br><strong>Deluxe IT Services Team</strong></p>
            </td>
          </tr>

          <!-- Footer -->
          <tr>
            <td align="center" style="background-color: #333333; color: #ffffff; padding: 15px; font-size: 14px;">
              <p style="margin: 0;">&copy; {{ date('Y') }} Deluxe IT Services. All rights reserved.</p>
              <p style="margin: 5px 0 0;">Website: <a href="https://deluxe-it-services.co.uk" style="color: #5ed8ca; text-decoration: none;">deluxe-it-services.co.uk</a></p>
            </td>
          </tr>

        </table>
      </td>
    </tr>
  </table>
</body>
</html>
