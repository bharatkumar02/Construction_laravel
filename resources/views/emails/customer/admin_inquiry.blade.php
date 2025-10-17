<!DOCTYPE html>
<html lang="en">
  <body style="margin:0; padding:0; background-color:#f4f4f4;">
    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="background-color:#f4f4f4; font-family:Arial, Helvetica, sans-serif;">
      <tr>
        <td align="center" style="padding:20px;">
          <table border="0" cellpadding="0" cellspacing="0" width="600" style="background-color:#ffffff; border-radius:8px; overflow:hidden;">

            {{-- Header --}}
            <tr>
              <td align="left" style="background-color:#002b5b; color:#ffffff; padding:20px 25px;">
                <h1 style="margin:0; font-size:22px; font-weight:600;">
                  New Contact Form Submission
                </h1>
              </td>
            </tr>

            {{-- Body --}}
            <tr>
              <td style="padding:25px; color:#333333; font-size:15px; line-height:1.6;">
                <p style="margin:0 0 15px;">
                  A new message has been submitted on your website. Below are the details:
                </p>

                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse:collapse;">
                  <tr>
                    <td style="padding:8px 0; width:150px; font-weight:bold;">Name:</td>
                    <td style="padding:8px 0;">{{ $formData['first_name'] ?? '' }} {{ $formData['last_name'] ?? '' }}</td>
                  </tr>
                  <tr>
                    <td style="padding:8px 0; font-weight:bold;">Email:</td>
                    <td style="padding:8px 0;">{{ $formData['email'] ?? '' }}</td>
                  </tr>
                  <tr>
                    <td style="padding:8px 0; font-weight:bold;">Phone Number:</td>
                    <td style="padding:8px 0;">{{ $formData['phone'] ?? '' }}</td>
                  </tr>
                  <tr>
                    <td style="padding:8px 0; font-weight:bold; vertical-align:top;">Message:</td>
                    <td style="padding:8px 0;">{{ $formData['message'] ?? '' }}</td>
                  </tr>
                </table>

                <p style="margin-top:25px; font-size:13px; color:#777777;">
                  This email was automatically generated. Please do not reply.
                </p>
              </td>
            </tr>

            {{-- Footer --}}
            <tr>
              <td align="center" style="background-color:#f9f9f9; padding:15px; font-size:12px; color:#999999;">
                &copy; {{ date('Y') }} Construction Co. — All Rights Reserved.
              </td>
            </tr>

          </table>
        </td>
      </tr>
    </table>
  </body>
</html>
