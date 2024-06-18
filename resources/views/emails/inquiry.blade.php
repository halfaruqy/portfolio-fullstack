<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Inquiry has been Submitted</title>
    <style>
        .inquiry {
            padding: 18px 72px;
            margin: 0 auto;
            background: #e2f0fc;
            color: #114169;
        }

        .logo {
            width: 48px;
            height: 48px;
        }

        .inquiry-header {
            background: #114169;
            text-align: center;
            width: 100%;
            color: #e2f0fc;
            padding: 12px;
            font-size: 1.2rem;
        }

        .inquiry-msg {
            width: 100%;
        }

        .msg-head {
            font-size: 24px;
        }

        .msg-content {
            font-size: 18px;
        }

        .inquiry-detail {
            background: #f1f8fe;
            width: 100%;
            padding: 18px;
        }

        .detail-msg {
            display: block;
        }

        .inquiry-signature {
            width: 100%;
        }

        .inquiry-footer {
            text-align: center;
            margin-top: 36px;
            width: 100%;
            padding: 4px 24px;
            background: #bddffa;
            font-size: 12px;
        }
    </style>
</head>

<body class="inquiry">
    <div class="inquiry-header">
        <img class="logo" src="https://alfaruqy.me/images/alfaruqy-logo.png" />
        <h1>YOU HAVE NEW INQUIRY!</h1>
    </div>
    <p style="opacity: 0">{{ date('Y') }}</p>
    <div class="inquiry-msg">
        <p class="msg-head">Good day, <strong>HILMI</strong>!</p>
        <p class="msg-content">New inquiry has been submitted to your website. Work on it ASAP.</p>
    </div>
    <span style="opacity: 0">{{ date('M') }}</span>
    <div class="inquiry-detail">
        <p><strong>Name:</strong> {{ $details['name'] }}</p>
        <p><strong>Email:</strong> {{ $details['email'] }}</p>
        <span style="opacity: 0">{{ date('D') }}</span>
        <p><strong>Subject:</strong>{{ $details['subject'] }}</p>
        <p><strong class="detail-msg">Inquiry:</strong> <br> "{{ $details['message'] }}"</p>
    </div>
    <p style="opacity: 0">{{ date('Y') }}</p>
    <div class="inquiry-signature">
        <p class="msg-head">Regards, </p>
        <p class="msg-content">Yourself.</p>
    </div>
    <strong style="opacity: 0">{{ date('Y') }}</strong>
    <div class="inquiry-footer">
        <p>Copyright © {{ date('Y') }}. Alfaruqy Web Solution. All right reserved.</p>
    </div>
</body>

</html>
