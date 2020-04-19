<?php function mailTemplate(
    $subject,
    $logoImage,
    $companyName,
    $mainColTitle = "Main Col Title",
	$mainColText = "Main Col Text",
	$logoStyle = "height: 5rem !important; width: auto !important;",
    $twitterURL = "https://www.twitter.com/",
    $facebookURL = "https://www.facebook.com/",
    $col2 = FALSE,
    $col2Image = FALSE,
    $col2Text = FALSE,
    $col3 = FALSE,
    $col3Image = FALSE,
    $col3Text = FALSE,
    $unsubscribe = FALSE,
    $headerBGColor = "#70bbd9",
    $footerBGColor = "#ee4c50"
){ ob_start(); ?>

<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title><?php echo $subject; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body style="margin: 0; padding: 0;">
    <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr>
            <td style="padding: 10px 0 30px 0;">
                <table align="center" border="0" cellpadding="0" cellspacing="0" width="600"
                    style="border: 1px solid #cccccc; border-collapse: collapse;">
                    <tr>
                        <td align="center" bgcolor="<?php echo $headerBGColor; ?>"
                            style="padding: 40px 0 30px 0; color: #153643; font-size: 28px; font-weight: bold; font-family: Arial, sans-serif;">
                            <img src="<?php echo $logoImage; ?>"
                                alt="Logo" style="display: block; <?php echo $logoStyle; ?>" />
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor="#ffffff" style="padding: 40px 30px 40px 30px;">
                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                <tr>
                                    <td style="color: #153643; font-family: Arial, sans-serif; font-size: 24px;">
                                        <b><?php echo $mainColTitle ?></b>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="padding: 20px 0 30px 0; color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;">
                                        <?php echo $mainColText; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                            <tr>
                                                <?php if($col2){ ?>
                                                <td width="260" valign="top">
                                                    <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                        <tr>
                                                            <td>
                                                                <img src="<?php echo $col2Image; ?>"
                                                                    alt="" width="100%" height="140"
                                                                    style="display: block;" />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="padding: 25px 0 0 0; color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;">
                                                                <?php echo $col2Text; ?>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                                <?php } ?>
                                                <?php if($col3){ ?>
                                                <td style="font-size: 0; line-height: 0;" width="20">
                                                    &nbsp;
                                                </td>
                                                <td width="260" valign="top">
                                                    <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                        <tr>
                                                            <td>
                                                                <img src="<?php echo $col3Image; ?>"
                                                                    alt="" width="100%" height="140"
                                                                    style="display: block;" />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="padding: 25px 0 0 0; color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;">
                                                                <?php echo $col3Text; ?>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                                <?php } ?>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor="<?php echo $footerBGColor; ?>" style="padding: 30px 30px 30px 30px;">
                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                <tr>
                                    <td style="color: #ffffff; font-family: Arial, sans-serif; font-size: 14px;"
                                        width="75%">
                                        &reg; <?php echo $companyName; ?> <?php echo date("Y"); ?><br />
                                        <?php 
                                        if($unsubscribe){
                                        ?>
                                        <a href="#" style="color: #ffffff;">
                                            <font color="#ffffff">Unsubscribe</font>
                                        </a> to this newsletter instantly
                                        <?php
                                        }
                                        ?>
                                    </td>
                                    <td align="right" width="25%">
                                        <table border="0" cellpadding="0" cellspacing="0">
                                            <tr>
                                                <td
                                                    style="font-family: Arial, sans-serif; font-size: 12px; font-weight: bold;">
                                                    <a href="<?php echo $twitterURL; ?>" style="color: #ffffff;">
                                                        <img src="data:image/gif;base64,R0lGODlhJgAmANUAAOVITLMxNbw1OedJTe1LT7QxNepKTsU5PeZITLgzN7EwNLAwNOtLT+xLT9A+Qsc6PttDR+JHS7AvM7UyNu1MUN5FSbIwNME3O+BGSsA3O+FGSsg7P99FSdhCRuhJTc09QeNHS9VARN5ESLk0OL42OtlCRtpDR7YyNr01OdxESNE/Q+lKTsQ5Pb83O8Y6PtRARLo0OMo8QNM/Q9NARNdBRbs0OLczN849QeRHS8M4PNZBRdI/Q8I4PM8+Qq8vM+5MUCH/C1hNUCBEYXRhWE1QPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4gPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNS4wLWMwNjAgNjEuMTM0Nzc3LCAyMDEwLzAyLzEyLTE3OjMyOjAwICAgICAgICAiPiA8cmRmOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPiA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ1M1IE1hY2ludG9zaCIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDo1QjcwQTA5QkJFMTUxMUUyQjUwQ0YzRjY0Nzg2NURGMCIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDo1QjcwQTA5Q0JFMTUxMUUyQjUwQ0YzRjY0Nzg2NURGMCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjExNzUxNzUwQkUxNTExRTJCNTBDRjNGNjQ3ODY1REYwIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjVCNzBBMDlBQkUxNTExRTJCNTBDRjNGNjQ3ODY1REYwIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+Af/+/fz7+vn49/b19PPy8fDv7u3s6+rp6Ofm5eTj4uHg397d3Nva2djX1tXU09LR0M/OzczLysnIx8bFxMPCwcC/vr28u7q5uLe2tbSzsrGwr66trKuqqainpqWko6KhoJ+enZybmpmYl5aVlJOSkZCPjo2Mi4qJiIeGhYSDgoGAf359fHt6eXh3dnV0c3JxcG9ubWxramloZ2ZlZGNiYWBfXl1cW1pZWFdWVVRTUlFQT05NTEtKSUhHRkVEQ0JBQD8+PTw7Ojk4NzY1NDMyMTAvLi0sKyopKCcmJSQjIiEgHx4dHBsaGRgXFhUUExIREA8ODQwLCgkIBwYFBAMCAQAAIfkEAAAAAAAsAAAAACYAJgAABv/An3BILAojGoyGYWw6mwzTIeCrWiWX2eDJHRpiCqt47MtEuk2Cg2pdCHibjUtQGB+2aCFC0D6YmEYVH3VVARB5GhNWBwhoDWtWMl0gbAUVeUMrJFY7Tx4nVTB4mEIED1aHTS1VCQakRqc+AY1FJYU4r0YEmz4HRQQJVR25TSsWVWdDIVUCRa5NIjU+EzcUOCJEDlUtRCNVl0McMM9EHGMBAQMNQwygPnggrEU6PgK0Q3xjIzkURDdVL4SoqPKhSIoqCnYAIkDGBwlyQuL5uCAkRxUORRoQ8mHhQQgMDSUZUbSgnzcfgIYgKLGgIZkQTS5UaUSlgBEILhumaLLh4g/+CT4S6FKUUwzEIR+qHApzookGNkVJOIlRZWedAE0oqNjosoQTF1Uw/EBRxUPMoj5q9GtC9t2PWF6NGMiQU0EyIw3CYP1Br9cTEy3HSKDxREQVHkIGAA1AwIgHB8fGWEjlJBZMIXR9BByigYXLO1wQtFRADue0lEIAOJjTYoOKUU8OVHlQJF8MYkY4AF1wTwgGoD6G4U5MqKCRHgjF4jYAg1njJp59KBD+CkAwHydWPGnQ1kcM1F06RA4AokuD6D4KvHj+pEK+oAAwabMSwA/sBoJsiMlwtEsEmWQUcN0YCVCXiwiZFWXDDOwN5wENG5AgQEsjCPCAA3cNp2ETQQAAOw=="
                                                            alt="Twitter" width="38" height="38" style="display: block;"
                                                            border="0" />
                                                    </a>
                                                </td>
                                                <td style="font-size: 0; line-height: 0;" width="20">&nbsp;</td>
                                                <td
                                                    style="font-family: Arial, sans-serif; font-size: 12px; font-weight: bold;">
                                                    <a href="<?php echo $facebookURL; ?>" style="color: #ffffff;">
                                                        <img src="data:image/gif;base64,R0lGODlhJgAmANUAAMs8QLMxNeNHS+pKTuFGSrw1OdtDR7YyNudJTbIwNLEwNO1MULAwNMg7P+1LT7AvM7s0ONhCRuxLT8Q5PelKTtxESLUyNutLT782OuVITLgzN99FSehJTbk0OMk7P9lCRsI4PMo7P9A+QrczN+RITNZBRcc6Pr83O701OcE3O9RARMY6PuZITN5ESOBGSr42OtpDR7kzN9dBRbo0OM09QcM4PNI/Q9M/Q8A3O9NARORHS91ESLQxNd5FSa8vM+5MUCH/C1hNUCBEYXRhWE1QPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4gPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNS4wLWMwNjAgNjEuMTM0Nzc3LCAyMDEwLzAyLzEyLTE3OjMyOjAwICAgICAgICAiPiA8cmRmOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPiA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ1M1IE1hY2ludG9zaCIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDo1QjcwQTA5RkJFMTUxMUUyQjUwQ0YzRjY0Nzg2NURGMCIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDo1QjcwQTBBMEJFMTUxMUUyQjUwQ0YzRjY0Nzg2NURGMCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjVCNzBBMDlEQkUxNTExRTJCNTBDRjNGNjQ3ODY1REYwIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjVCNzBBMDlFQkUxNTExRTJCNTBDRjNGNjQ3ODY1REYwIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+Af/+/fz7+vn49/b19PPy8fDv7u3s6+rp6Ofm5eTj4uHg397d3Nva2djX1tXU09LR0M/OzczLysnIx8bFxMPCwcC/vr28u7q5uLe2tbSzsrGwr66trKuqqainpqWko6KhoJ+enZybmpmYl5aVlJOSkZCPjo2Mi4qJiIeGhYSDgoGAf359fHt6eXh3dnV0c3JxcG9ubWxramloZ2ZlZGNiYWBfXl1cW1pZWFdWVVRTUlFQT05NTEtKSUhHRkVEQ0JBQD8+PTw7Ojk4NzY1NDMyMTAvLi0sKyopKCcmJSQjIiEgHx4dHBsaGRgXFhUUExIREA8ODQwLCgkIBwYFBAMCAQAAIfkEAAAAAAAsAAAAACYAJgAABv/An3BILP4WBIKL4DA6n85BpJbwWa8KUIkC7Q4Rpqt4bJ1kvM4LQCFOFCaNxqQQEDM8A/SQoLkmGgZNRQsVIXVWBxt6FWw+Dx5cXgNrVgwfXi0MVhoCekMZM1YPMFA6jRh5nkMXKZUETg4dViiCqkMLOFYjqUQiiJFdJEm8QwN9PjRFA4cuXjRVVgZOAg8+CQhEAGVeJWPSTg1WJkMSdQ9nXQVXHQWKTghsCqkGViBoh99dK1YyQh5WEe5Z6eSFno8JQtT54CDQB8EuF6qNEFIlQBeDZCp0OSZhgJUCF8lYYdGllQ8ECKzgCEkmgZcJAzlYwdBlQBJoHwg8fALCConGC1Yg6Dm0EwoGK9gsWBs6UM8BHwwW/DjR1AtRNCl9CP1Bw4qNhkWddPMBQAiBj2DRUPWhUUiMaFarQtlgxYJUISqC3n1ytcsLKyKISHjq40aXvk8iWAlA7IdiqD1sGSHQSIWTMD54kJD8hXCNJw7++gjQgjMBpVolQKHw1pGIWl4W3NDk4wC2mkd1BfQCQ9ZHhmgchBBjARCwHwN2hCBsZYVqVRsUjjnAXAyEtpw/oBA5ZkY/zkVY5GhQQCGEAg1soAPPvksQADs="
                                                            alt="Facebook" width="38" height="38"
                                                            style="display: block;" border="0" />
                                                    </a>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>
<?php return ob_get_clean(); } ?>