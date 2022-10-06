<!DOCTYPE html>
<html>

<head>
    <title>Pdf</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">

</head>
@php
$person1 = isset($person) && isset($person[0]) ? $person[0] : null;
$person2 = isset($person) && isset($person[1]) ? $person[1] : null;
@endphp

<body>
    <table align="left" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%"
        style="font-family: 'Roboto', sans-serif;    height: 100vh">
        <tbody>
            <tr>
                <td>
                    <table align="center" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%"
                        style="justify-content: space-around;display: flex;align-items: center; width: 100%;height: 100vh;">
                        <tr>
                            <td>
                                <p style="text-align:center ; font-size: 16px; font-weight: normal;">Michael John Teulon
                                </p>
                                <p style="text-align:center ; font-size: 20px; font-weight: normal; ">
                                    {{ $person ? $person1->booking->location->address : '' }}</p>
                                <div style=" margin:80px 0px ">
                                    <p style="text-align:center ; font-size: 20px; font-weight: normal; ">
                                        {{ $person1 ? $person1->preferred_name : '' }}
                                    </p>
                                    <p style="text-align:center ; font-size: 20px; font-weight: normal; ">
                                        {{ $person2 ? $person2->preferred_name : '' }}
                                    </p>
                                </div>
                                <div style="display: flex;justify-content: space-between; width: 80%; margin: 0 auto;">
                                    <div style="text-align:center ; font-size: 20px; font-weight: normal;">
                                        {{ $person ? date('d', strtotime($person1->booking->booking_date)) : '' }}</div>
                                    <div style="text-align:center ; font-size: 20px; font-weight: normal;">
                                        {{ $person ? date('F', strtotime($person1->booking->booking_date)) : '' }}
                                    </div>
                                    <div style="text-align:center ; font-size: 20px; font-weight: normal; ">
                                        {{ $person ? date('Y', strtotime($person1->booking->booking_date)) : '' }}</div>
                                </div>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
</body>

</html>
