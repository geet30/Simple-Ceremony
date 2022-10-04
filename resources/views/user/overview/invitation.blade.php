@extends('layouts.panels')
@section('content')
<div class="container-fluid">
   <div class="row">
      <div class="col-md-3 col-lg-2 p-0">
         @include('elements.common.user-sidebar')
      </div>
      <div class="col-md-9 col-lg-10 px-md-4">
         @include('elements.common.panel-header')
         <a href="{{url('user/overview')}}" class="theme-btn secondary-btn-border d-inline-flex admin-back-btn mb-4"><img class="me-2" src="/images/icons/back.svg" alt="Back Icon">Back</a>
            <div class="col-md-6 col-lg-6 px-md-4">
                <style>
                    @import url('https://fonts.googleapis.com/css2?family=Great+Vibes&family=Montserrat&display=swap');
                </style>
                <table style="max-width:550px;margin: 0 auto;" width="550">
                    <tbody>
                        <tr>
                            <td style="background: url(https://t2494231.p.clickup-attachments.com/t2494231/1ce8155f-e28f-47fd-969e-fead99a31cd3/email-head.png); background-size:contain; background-repeat: no-repeat;">
                            <table width="100%">
                                <tbody>
                                    <tr>
                                        <td style="font-family: 'Montserrat', sans-serif;font-style: normal;font-weight: 400;font-size: 18px;line-height: 28px;color: #000000;letter-spacing: 4px;text-align: center;padding-top: 110px;">The happiness one</td>
                                    </tr>
                                    <tr>
                                        <td style="font-size: 80px;line-height: 105px;color: #393737;text-align: center;font-family: 'Great Vibes', cursive;padding-top: 40px;">{{$data->first_couple_name}}</td>
                                    </tr>
                                    <tr>
                                        <td style="font-size: 80px;line-height: 105px;color: #393737;text-align: center;font-family: 'Great Vibes', cursive;">&</td>
                                    </tr>
                                    <tr>
                                        <td style="font-size: 80px;line-height: 105px;color: #393737;text-align: center;font-family: 'Great Vibes', cursive;">{{$data->second_couple_name}}</td>
                                    </tr>
                                </tbody>
                            </table>
                            </td>
                        </tr>
                        <tr>
                            <td style="font-family: 'Montserrat', sans-serif;font-style: normal;font-weight: 400;font-size: 18px;line-height: 28px;color: #000000;letter-spacing: 2px;text-align: center;padding-bottom: 5px;padding-top: 20px;">You're invited to our wedding on</td>
                        </tr>
                        <tr>
                            <td style="font-family: 'Montserrat', sans-serif;font-style: normal;font-weight: 400;font-size: 18px;line-height: 28px;color: #000000;text-align: center;padding-bottom: 35px;"><img src="https://t2494231.p.clickup-attachments.com/t2494231/4158da8a-8460-43b4-b5f9-75e1e5b16b48/invitation-date-icon.png" alt="Date" style="margin-right: 10px;">{{date('M d, Y',strtotime($data->booking_date))}} | {{$data->booking_start_time}}</td>
                        </tr>
                        <tr>
                            <td style="background: url(https://t2494231.p.clickup-attachments.com/t2494231/ec1e3b6d-92a0-47cf-9037-df4318dbfdad/image.png); background-size:contain; background-repeat: no-repeat;background-position: right;">
                            <table width="100%">
                                <tbody>
                                    <tr>
                                        <td style="font-family: 'Montserrat', sans-serif;font-style: normal;font-weight: 400;font-size: 18px;line-height: 28px;color: #000000;text-align: center;"><img src="https://t2494231.p.clickup-attachments.com/t2494231/9e4352e9-acc5-4733-a7fc-be7818ae122b/invitation-location-icon.png" alt="Location" style="margin-right: 10px;">at {{$data->location->name}}</td>
                                    </tr>
                                    <tr>
                                        <td style="font-family: 'Montserrat', sans-serif;font-style: normal;font-weight: 400;font-size: 13px;line-height: 21px;color: #000000;text-align: center;padding-bottom: 5px;padding-top: 5px;">{{$data->location->address}} &nbsp;{{$data->location->town}} &nbsp;{{$data->location->post_code}}  &nbsp; {{config('env.COUNTRY')}}</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:center;">
                                            <a style="font-family: 'Montserrat', sans-serif;font-style: normal;font-weight: 400;font-size: 14px;line-height: 18px;color: #62CBC9;text-decoration: none;" target="_blank" href="https://goo.gl/maps/CayixMLhsC2y2h7v6">https://goo.gl/maps/CayixMLhsC2y2h7v6</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="font-family: 'Montserrat', sans-serif;font-style: normal;font-weight: 400;font-size: 12px;line-height: 19px;color: #000000;text-align: center;padding-top: 35px;">please arrive 15 minutes prior<br>to the ceremony time</td>
                                    </tr>
                                </tbody>
                            </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
      </div>
   </div>
</div>
@endsection
