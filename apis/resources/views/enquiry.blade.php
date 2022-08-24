<!DOCTYPE html>
<html lang="en">

<head>
    <title>Feedback/ Enquiry</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <!-- Latest compiled and minified CSS -->

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,700,800,800i&display=swap" rel="stylesheet">
</head>

<body class="cnt-home">
    <section class="bg_verification" style="background: #fff;font-family: 'Open Sans', sans-serif;padding: 100px 0px;">

        <div class="box_main" style="width: 40%;margin: auto;">
            <div class="verification_box text-center" style="box-shadow: 0 8px 17px 2px rgba(255, 255, 255, 0.14), 0 3px 14px 2px rgba(140, 118, 118, 0.12), 0 5px 5px -3px rgba(154, 134, 134, 0.2);padding: 30px 60px;border-top: 4px solid #341c5f;border-radius: 0px 0px 5px 5px;text-align: center;">
                <p style="font-size: 14px;font-weight: 600;color: #444;">
                    Someone contacted our team. Below are details
                </p>
                <p style="font-size: 14px;font-weight: 600;color: #444;"><strong>Name : </strong>
                    {{$data['userName']}}
                </p>
                <p style="font-size: 14px;font-weight: 600;color: #444;"><strong>Email : </strong>
                    {{$data['userEmail']}}
                </p>
                <p style="font-size: 14px;font-weight: 600;color: #444;"><strong>Phone : </strong>
                    (+{{$data['extension']}}) {{$data['userPhone']}}</p>
                <p style="font-size: 14px;font-weight: 600;color: #444;"><strong>Country : </strong>
                    {{$data['userCountry']}}
                </p>
                <p style="font-size: 14px;font-weight: 600;color: #444;"><strong>City : </strong>
                    {{$data['userCity']}}
                </p>
                <p style="font-size: 14px;font-weight: 600;color: #444;"><strong>Address : </strong>
                    {{$data['userAddress']}}
                </p>
                <p style="font-size: 14px;font-weight: 600;color: #444;"><strong>Message : </strong>
                    {{$data['userMessage']}}
                </p>
                <div class="footer_verification" style="padding: 30px 0px;">
                    <h1 style="font-size: 23px;font-weight: 600;">Need Help?</h1>
                    <p style="font-size: 14px;font-weight: 600;color: #444;">
                        Please send any feedback or bug info
                        to <a href="mailto:{{env('ADMIN_EMAIL')}}" style="color: #6b87b5;">{{env('ADMIN_EMAIL')}}</a>
                    </p>
                </div>
            </div>
        </div>


    </section>


</body>

</html>