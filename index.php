<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

    .priceform {
        padding: 60px 0;
    }

    .priceform form {
        max-width: 1140px;
        margin: 0 auto;
        text-align: center;
        font-family: "Poppins", sans-serif;
    }

    .priceform form table {
        width: 100%;
    }

    .priceform form table img {
        width: 100px;
    }

    .priceform table,
    .priceform tr,
    .priceform td {
        border: 1px solid #ddd;
        border-collapse: collapse;
        text-align: center;
        font-size: 14px;
    }

    .priceform td {
        padding: 10px;
    }

    .priceform td.odercol {
        padding: 0;
    }

    .priceform input[type="text"] {
        width: 100%;
        height: 100%;
        padding: 12px;
        border: none;
        outline: none;
    }

    .priceform form table input[type="submit"] {
        background: #3f3d8f;
        padding: 11px 40px;
        color: #fff;
        font-size: 15px;
        border: none;
        text-transform: uppercase;
        border-radius: 4px;
        cursor: pointer;
    }

    .priceform form table strong {
        font-weight: 600;
    }
</style>

<?php
error_reporting(0);
$result = '';
if (isset($_REQUEST["submit"])) {
    $name = $_REQUEST['name'];
    $city = $_REQUEST['city'];
    $state = $_REQUEST['state'];
    $other = $_REQUEST['other'];

    $order1401 = $_REQUEST['order1401'];
    $order1401 = $_REQUEST['order1401'];
    $order1501 = $_REQUEST['order1501'];
    $order1502 = $_REQUEST['order1502'];
    $order1503 = $_REQUEST['order1503'];
    $order1504 = $_REQUEST['order1504'];
    $order1505 = $_REQUEST['order1505'];
    $order1506 = $_REQUEST['order1506'];
    $referrer = $_SERVER['HTTP_REFERER'];

    $to = 'abudanishmd@gmail.com';
    $headers = 'From: info@shabarivisual.com' . "\r\n";
    $headers .= 'Reply-To: ' . $email_field . "\r\n";
    $headers .= 'X-Mailer: PHP/' . phpversion();
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
    $subject = 'Enquiry Received From Product Form';

    $message = '<p><strong>Dear Admin</strong>,</p> 

<table style="border: 1px solid #ddd; border-collapse: collapse; text-align: center; font-size: 14px; width: 100%;">
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd; border-collapse: collapse;"><img src="https://shabarivisual.com/productform/salija-enterprises.png" alt="salija-enterprises"></td>
                <td colspan="4" style="padding: 10px; border: 1px solid #ddd; border-collapse: collapse;">
                    <strong>SHAILJA ENTERPRISES</strong><br>
                    Phase-IIIA, Plot No-16 & 17,Balidih Industrail Area,<br>
                    BOKARO- 827014(JH)<br>
                    Phone.06542-253386 Mob. 7781811811
                </td>
                <td colspan="2" style="padding: 0; text-align: left;">
                    <strong>Name:</strong> ' . $name . '<br><hr style="margin: 0;">
                    <strong>City:</strong> ' . $city . '<br><hr style="margin: 0;">
                    <strong>State:</strong> ' . $state . '<br><hr style="margin: 0;">
                    <strong>Other:</strong> ' . $other . '
                </td>
            </tr>
            <tr>
                <td colspan="6" style="padding: 10px; border: 1px solid #ddd; border-collapse: collapse;"><strong>21 X 29.7 cm</strong> ( Drawing Book )</td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd; border-collapse: collapse;"><strong>CODE</strong></td>
                <td style="padding: 10px; border: 1px solid #ddd; border-collapse: collapse;"><strong>Page</strong></td>
                <td style="padding: 10px; border: 1px solid #ddd; border-collapse: collapse;"><strong>Rulling</strong></td>
                <td style="padding: 10px; border: 1px solid #ddd; border-collapse: collapse;"><strong>MRP</strong></td>
                <td style="padding: 10px; border: 1px solid #ddd; border-collapse: collapse;"><strong>Box Qty.</strong></td>
                <td style="padding: 10px; border: 1px solid #ddd; border-collapse: collapse;"><strong>ORDER</strong></td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd; border-collapse: collapse;">SED1401</td>
                <td style="padding: 10px; border: 1px solid #ddd; border-collapse: collapse;">40</td>
                <td style="padding: 10px; border: 1px solid #ddd; border-collapse: collapse;">Unruled</td>
                <td style="padding: 10px; border: 1px solid #ddd; border-collapse: collapse;">40</td>
                <td style="padding: 10px; border: 1px solid #ddd; border-collapse: collapse;">200</td>
                <td class="odercol" style="padding: 10px; border: 1px solid #ddd; border-collapse: collapse;">' . $order1401 . '</td>
            </tr>
            <tr>
                <td colspan="6" style="padding: 10px; border: 1px solid #ddd; border-collapse: collapse;"><strong>21.5 X 28 cm</strong> ( Project paper )</td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd; border-collapse: collapse;"><strong>CODE</strong></td>
                <td style="padding: 10px; border: 1px solid #ddd; border-collapse: collapse;"><strong>Page</strong></td>
                <td style="padding: 10px; border: 1px solid #ddd; border-collapse: collapse;"><strong>Rulling</strong></td>
                <td style="padding: 10px; border: 1px solid #ddd; border-collapse: collapse;"><strong>MRP</strong></td>
                <td style="padding: 10px; border: 1px solid #ddd; border-collapse: collapse;"><strong>Box Qty.</strong></td>
                <td style="padding: 10px; border: 1px solid #ddd; border-collapse: collapse;"><strong>ORDER</strong></td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd; border-collapse: collapse;">SEPP1501</td>
                <td style="padding: 10px; border: 1px solid #ddd; border-collapse: collapse;">50</td>
                <td style="padding: 10px; border: 1px solid #ddd; border-collapse: collapse;">Single Line</td>
                <td style="padding: 10px; border: 1px solid #ddd; border-collapse: collapse;">35</td>
                <td style="padding: 10px; border: 1px solid #ddd; border-collapse: collapse;">300</td>
                <td class="odercol" style="padding: 10px; border: 1px solid #ddd; border-collapse: collapse;">' . $order1501 . '</td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd; border-collapse: collapse;">SEPP1502</td>
                <td style="padding: 10px; border: 1px solid #ddd; border-collapse: collapse;">50</td>
                <td style="padding: 10px; border: 1px solid #ddd; border-collapse: collapse;">Plain</td>
                <td style="padding: 10px; border: 1px solid #ddd; border-collapse: collapse;">35</td>
                <td style="padding: 10px; border: 1px solid #ddd; border-collapse: collapse;">300</td>
                <td class="odercol" style="padding: 10px; border: 1px solid #ddd; border-collapse: collapse;">' . $order1502 . '</td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd; border-collapse: collapse;">SEPP1503</td>
                <td style="padding: 10px; border: 1px solid #ddd; border-collapse: collapse;">50</td>
                <td style="padding: 10px; border: 1px solid #ddd; border-collapse: collapse;">SL -Int…</td>
                <td style="padding: 10px; border: 1px solid #ddd; border-collapse: collapse;">35</td>
                <td style="padding: 10px; border: 1px solid #ddd; border-collapse: collapse;">300</td>
                <td class="odercol" style="padding: 10px; border: 1px solid #ddd; border-collapse: collapse;">' . $order1503 . '</td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd; border-collapse: collapse;">SEPP1504</td>
                <td style="padding: 10px; border: 1px solid #ddd; border-collapse: collapse;">100</td>
                <td style="padding: 10px; border: 1px solid #ddd; border-collapse: collapse;">Single Line</td>
                <td style="padding: 10px; border: 1px solid #ddd; border-collapse: collapse;">60</td>
                <td style="padding: 10px; border: 1px solid #ddd; border-collapse: collapse;">150</td>
                <td class="odercol" style="padding: 10px; border: 1px solid #ddd; border-collapse: collapse;">' . $order1504 . '</td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd; border-collapse: collapse;">SEPP1505</td>
                <td style="padding: 10px; border: 1px solid #ddd; border-collapse: collapse;">100</td>
                <td style="padding: 10px; border: 1px solid #ddd; border-collapse: collapse;">Plain</td>
                <td style="padding: 10px; border: 1px solid #ddd; border-collapse: collapse;">60</td>
                <td style="padding: 10px; border: 1px solid #ddd; border-collapse: collapse;">150</td>
                <td class="odercol" style="padding: 10px; border: 1px solid #ddd; border-collapse: collapse;">' . $order1505 . '</td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd; border-collapse: collapse;">SEPP1506</td>
                <td style="padding: 10px; border: 1px solid #ddd; border-collapse: collapse;">100</td>
                <td style="padding: 10px; border: 1px solid #ddd; border-collapse: collapse;">SL -Int…</td>
                <td style="padding: 10px; border: 1px solid #ddd; border-collapse: collapse;">60</td>
                <td style="padding: 10px; border: 1px solid #ddd; border-collapse: collapse;">150</td>
                <td class="odercol" style="padding: 10px; border: 1px solid #ddd; border-collapse: collapse;">' . $order1506 . '</td>
            </tr>
        </table>';

    // If there are no errors, send the email
    if (empty($result)) {
        if (mail($to, $subject, $message, $headers)) {
            $result = '<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Thank You! Your message has been successfully sent. We will contact you shortly.</div>';
        } else {
            $result = '<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
        }
    }
}
?>





<div class="priceform">
    <form action="" role="form" method="post">
        <p><?php echo $result; ?> </p>
        <table>
            <tr>
                <td><img src="salija-enterprises.png" alt="salija-enterprises"></td>
                <td colspan="4">
                    <strong>SHAILJA ENTERPRISES</strong><br>
                    Phase-IIIA, Plot No-16 & 17,Balidih Industrail Area,<br>
                    BOKARO- 827014(JH)<br>
                    Phone.06542-253386 Mob. 7781811811
                </td>
                <td colspan="2" style="padding: 0;">
                    <input type="text" placeholder="Your Name" name="name"><br>
                    <hr style="margin: 0;">
                    <input type="text" placeholder="City" name="city"><br>
                    <hr style="margin: 0;">
                    <input type="text" placeholder="State" name="state"><br>
                    <hr style="margin: 0;">
                    <input type="text" placeholder="Other" name="other">
                </td>
            </tr>
            <tr>
                <td colspan="6"><strong>21 X 29.7 cm</strong> ( Drawing Book )</td>
            </tr>
            <tr>
                <td><strong>CODE</strong></td>
                <td><strong>Page</strong></td>
                <td><strong>Rulling</strong></td>
                <td><strong>MRP</strong></td>
                <td><strong>Box Qty.</strong></td>
                <td><strong>ORDER</strong></td>
            </tr>
            <tr>
                <td>SED1401</td>
                <td>40</td>
                <td>Unruled</td>
                <td>40</td>
                <td>200</td>
                <td class="odercol"><input type="text" name="order1401"></td>
            </tr>
            <tr>
                <td colspan="6"><strong>21.5 X 28 cm</strong> ( Project paper )</td>
            </tr>
            <tr>
                <td><strong>CODE</strong></td>
                <td><strong>Page</strong></td>
                <td><strong>Rulling</strong></td>
                <td><strong>MRP</strong></td>
                <td><strong>Box Qty.</strong></td>
                <td><strong>ORDER</strong></td>
            </tr>
            <tr>
                <td>SEPP1501</td>
                <td>50</td>
                <td>Single Line</td>
                <td>35</td>
                <td>300</td>
                <td class="odercol"><input type="text" name="order1501"></td>
            </tr>
            <tr>
                <td>SEPP1502</td>
                <td>50</td>
                <td>Plain</td>
                <td>35</td>
                <td>300</td>
                <td class="odercol"><input type="text" name="order1502"></td>
            </tr>
            <tr>
                <td>SEPP1503</td>
                <td>50</td>
                <td>SL -Int…</td>
                <td>35</td>
                <td>300</td>
                <td class="odercol"><input type="text" name="order1503"></td>
            </tr>
            <tr>
                <td>SEPP1504</td>
                <td>100</td>
                <td>Single Line</td>
                <td>60</td>
                <td>150</td>
                <td class="odercol"><input type="text" name="order1504"></td>
            </tr>
            <tr>
                <td>SEPP1505</td>
                <td>100</td>
                <td>Plain</td>
                <td>60</td>
                <td>150</td>
                <td class="odercol"><input type="text" name="order1505"></td>
            </tr>
            <tr>
                <td>SEPP1506</td>
                <td>100</td>
                <td>SL -Int…</td>
                <td>60</td>
                <td>150</td>
                <td class="odercol"><input type="text" name="order1506"></td>
            </tr>



            <tr>
                <td colspan="6">
                    <input type="submit" name="submit" value="Submit">
                </td>
            </tr>
        </table>
    </form>
</div>