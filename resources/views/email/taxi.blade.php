<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!--[if !mso]><!-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!--<![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title></title>
    <style type="text/css">

        body {
            background: rgba(255, 255, 255, 0);
        }

        .leftColumnContent{
            font-size:16px !important;
            line-height:125% !important;
        }

        .rightColumnContent{
            font-size:16px !important;
            line-height:125% !important;
            font-weight: lighter !important;
        }

        @media only screen and (max-width: 480px){
            #templateColumns{
                width:100% !important;
            }

            .templateColumnContainer{
                display:block !important;
                width:100% !important;
            }

            .columnImage{
                height:auto !important;
                max-width:480px !important;
                width:100% !important;
            }

            .leftColumnContent{
                font-size:16px !important;
                line-height:125% !important;
            }

            .rightColumnContent{
                font-size:12px !important;
                line-height:125% !important;
                font-weight: lighter !important;
            }
        }
    </style>
</head>

<body>

<table border="0" cellpadding="0" cellspacing="0" width="600" id="templateColumns">
    <tr>
        <td align="center" valign="top" width="50%" class="templateColumnContainer">
            <table border="0" cellpadding="10" cellspacing="0" width="100%" style="font-weight: bold;">
                <tr>
                    <td valign="top" class="leftColumnContent">
                        PICK UP:
                    </td>
                    <td valign="top" class="rightColumnContent">
                        {{$pick_up}}
                    </td>
                </tr>
                <tr>
                    <td valign="top" class="leftColumnContent">
                        DROP OFF:
                    </td>
                    <td valign="top" class="rightColumnContent">
                        {{$drop_off}}
                    </td>

                </tr>
                <tr>
                    <td valign="top" class="leftColumnContent">
                        DROP OFF ADDRESS:
                    </td>
                    <td valign="top" class="rightColumnContent">
                        {{$dropoff_address}}
                    </td>
                </tr>
                <tr>
                    <td valign="top" class="leftColumnContent">
                        DATE_TIME:
                    </td>
                    <td valign="top" class="rightColumnContent">
                        {{$date_time}}
                    </td>
                </tr>
                <tr>
                    <td valign="top" class="leftColumnContent">
                        FLIGHT NUMBER:
                    </td>
                    <td valign="top" class="rightColumnContent">
                        {{$flight_number}}
                    </td>
                </tr>
                <tr>
                    <td valign="top" class="leftColumnContent">
                        NUMBER OF PASSENGERS:
                    </td>
                    <td valign="top" class="rightColumnContent">
                        {{$num_of_passengers}}
                    </td>
                </tr>
                <tr>
                    <td valign="top" class="leftColumnContent">
                        NUMBER OF BAGGAGE:
                    </td>
                    <td valign="top" class="rightColumnContent">
                        {{$num_of_baggage}}
                    </td>
                </tr>
                <tr>
                    <td valign="top" class="leftColumnContent">
                        TRANSFER CLASS:
                    </td>
                    <td valign="top" class="rightColumnContent">
                        {{$transfer_class}}
                    </td>
                </tr>
                <tr>
                    <td valign="top" class="leftColumnContent">
                        NAME:
                    </td>
                    <td valign="top" class="rightColumnContent">
                        {{$name}}
                    </td>
                </tr>

                <tr>
                    <td valign="top" class="leftColumnContent">
                        EMAIL:
                    </td>
                    <td valign="top" class="rightColumnContent">
                        {{$email}}
                    </td>
                </tr>
                <tr>
                    <td valign="top" class="leftColumnContent">
                        PHONE NUMBER:
                    </td>
                    <td valign="top" class="rightColumnContent">
                        {{$phone_number}}
                    </td>
                </tr>
                <tr>
                    <td valign="top" class="leftColumnContent">
                        NOTES:
                    </td>
                    <td valign="top" class="rightColumnContent">
                        {{$notes}}
                    </td>
                </tr>
            </table>
        </td>
        {{--<td align="center" valign="top" width="50%" class="templateColumnContainer">--}}
            {{--<table border="0" cellpadding="10" cellspacing="0" width="100%">--}}

                {{--<tr>--}}
                    {{--<td valign="top" class="rightColumnContent">--}}
                        {{--{{$pick_up}}--}}
                    {{--</td>--}}
                {{--</tr>--}}
                {{--<tr>--}}
                    {{--<td valign="top" class="rightColumnContent">--}}
                        {{--{{$drop_off}}--}}
                    {{--</td>--}}
                {{--</tr>--}}
                {{--<tr>--}}
                    {{--<td valign="top" class="rightColumnContent">--}}
                        {{--{{$dropoff_address}}--}}
                    {{--</td>--}}
                {{--</tr>--}}
                {{--<tr>--}}
                    {{--<td valign="top" class="rightColumnContent">--}}
                        {{--{{$date_time}}--}}
                    {{--</td>--}}
                {{--</tr>--}}
                {{--<tr>--}}
                    {{--<td valign="top" class="rightColumnContent">--}}
                        {{--{{$flight_number}}--}}
                    {{--</td>--}}
                {{--</tr>--}}
                {{--<tr>--}}
                    {{--<td valign="top" class="rightColumnContent">--}}
                        {{--{{$num_of_passengers}}--}}
                    {{--</td>--}}
                {{--</tr>--}}
                {{--<tr>--}}
                    {{--<td valign="top" class="rightColumnContent">--}}
                        {{--{{$num_of_baggage}}--}}
                    {{--</td>--}}
                {{--</tr>--}}
                {{--<tr>--}}
                    {{--<td valign="top" class="rightColumnContent">--}}
                        {{--{{$transfer_class}}--}}
                    {{--</td>--}}
                {{--</tr>--}}
                {{--<tr>--}}
                    {{--<td valign="top" class="rightColumnContent">--}}
                        {{--{{$name}}--}}
                    {{--</td>--}}
                {{--</tr>--}}
                {{--<tr>--}}
                    {{--<td valign="top" class="rightColumnContent">--}}
                        {{--{{$email}}--}}
                    {{--</td>--}}
                {{--</tr>--}}
                {{--<tr>--}}
                    {{--<td valign="top" class="rightColumnContent">--}}
                        {{--{{$phone_number}}--}}
                    {{--</td>--}}
                {{--</tr>--}}
                {{--<tr>--}}
                    {{--<td valign="top" class="rightColumnContent">--}}
                        {{--{{$notes}}--}}
                    {{--</td>--}}
                {{--</tr>--}}

            {{--</table>--}}
        {{--</td>--}}
    </tr>
</table>
</body>
</html>
