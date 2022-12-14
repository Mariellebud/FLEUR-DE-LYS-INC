
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>Nouvelle commande</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="assets/img/logoi.png" rel="apple-touch-icon">

	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div bgcolor="#f6f6f6" style="color: #333; height: 100%; width: 100%;" height="100%" width="100%">
    <table bgcolor="#f6f6f6" cellspacing="0" style="border-collapse: collapse; padding: 40px; width: 100%;" width="100%">
        <tbody>
            <tr>
                <td width="5px" style="padding: 0;"></td>
                <td style="clear: both; display: block; margin: 0 auto; max-width: 600px; padding: 10px 0;">
                    <table width="100%" cellspacing="0" style="border-collapse: collapse;">
                        <tbody>
                            <tr>
                                <td style="padding: 0;">
                                    <a
                                        href="#"
                                        style="color: #348eda;"
                                        target="_blank"
                                    >
                                    <img
                                        src="admin/assets/images/logo/fdla.png"
                                            alt="FDL market"
                                            style="height: 100px; max-width: 100%; width: 100px;"
                                            height="50"
                                            width="50"
                                        />
                                    </a>
                                </td>
                                <td style="color: #999; font-size: 12px; padding: 0; text-align: right;" align="right">
                                    <br />
                                     <br />
                                     
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <td width="5px" style="padding: 0;"></td>
            </tr>

            <tr>
                <td width="5px" style="padding: 0;"></td>
                <td bgcolor="#FFFFFF" style="border: 1px solid #000; clear: both; display: block; margin: 0 auto; max-width: 600px; padding: 0;">
                    <table width="100%" style="background: #f9f9f9; border-bottom: 1px solid #eee; border-collapse: collapse; color: #999;">
                        <tbody>
                            <tr>
                                <td width="50%" style="padding: 20px;"><strong style="color: #333; font-size: 24px;">Nouvelle commande</strong> </td>
                                <td align="right" width="50%" style="padding: 20px;"> <span class="il"></span></td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <td style="padding: 0;"></td>
                <td width="5px" style="padding: 0;"></td>
            </tr>
            <tr>
                <td width="5px" style="padding: 0;"></td>
                <td style="border: 1px solid #000; border-top: 0; clear: both; display: block; margin: 0 auto; max-width: 600px; padding: 0;">
                    <table cellspacing="0" style="border-collapse: collapse; border-left: 1px solid #000; margin: 0 auto; max-width: 600px;">
                        <tbody>
                            <tr>
                                <td valign="top"  style="padding: 20px;">
                                    <h3
                                        style="
                                            border-bottom: 1px solid #000;
                                            color: #000;
                                            font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif;
                                            font-size: 18px;
                                            font-weight: bold;
                                            line-height: 1.2;
                                            margin: 0;
                                            margin-bottom: 15px;
                                            padding-bottom: 5px;
                                        "
                                    >
                                    Nouvelle commande
                                    </h3>
                                    <table cellspacing="0" style="border-collapse: collapse; margin-bottom: 40px;">
                                        <tbody>
                                            <tr>
                                                <td style="padding: 5px 0;">Nom :........................... </td>
                                                <td align="right" style="padding: 5px 0;">{{$data['nom']}}</td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 5px 0;">Pr??nom :...........................  </td>
                                                <td align="right" style="padding: 5px 0;">{{$data['prenom']}}</td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 5px 0;">Adresse :...........................   </td>
                                                <td align="right" style="padding: 5px 0;">{{$data['adresse']}}</td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 5px 0;">Email :...........................   </td>
                                                <td align="right" style="padding: 5px 0;"><a href ="{{$data['email']}}">{{$data['email']}}</a></td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 5px 0;">Ville :...........................   </td>
                                                <td align="right" style="padding: 5px 0;">{{$data['ville']}}</td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 5px 0;">T??l??phone :...........................   </td>
                                                <td align="right" style="padding: 5px 0;">{{$data['phone']}}</td>
                                            </tr>
                                          
                                            <tr>
                                                <td style="padding: 5px 0;">Quartier :...........................   </td>
                                                <td align="right" style="padding: 5px 0;">{{$data['quartier']}}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <td width="5px" style="padding: 0;"></td>
            </tr>

            <tr style="color: #666; font-size: 12px;">
                <td width="5px" style="padding: 10px 0;"></td>
                <td style="clear: both; display: block; margin: 0 auto; max-width: 600px; padding: 10px 0;">
                    <table width="100%" cellspacing="0" style="border-collapse: collapse;">
                        <tbody>
                            <tr>
                                <td width="40%" valign="top" style="padding: 10px 0;">
                                    <h4 style="margin: 0;"></h4>
                                    <p style="color: #666; font-size: 12px; font-weight: normal; margin-bottom: 10px;">
                                        <a
                                            href="#"
                                            style="color: #666;"
                                            target="_blank"
                                        >
                                        </a>
                                    </p>
                                </td>
                                <td width="10%" style="padding: 10px 0;">&nbsp;</td>
                                <td width="40%" valign="top" style="padding: 10px 0;">
                                    <h4 style="margin: 0;"><span class="il"></span> </h4>
                                    <p style="color: #666; font-size: 12px; font-weight: normal; margin-bottom: 10px;">
                                        <a href="#"></a>
                                    </p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <td width="5px" style="padding: 10px 0;"></td>
            </tr>
        </tbody>
    </table>
</div>


<style type="text/css">
body{margin-top:20px;}
</style>

<script type="text/javascript">

</script>
</body>
</html>