@include('client/header')
<style>
        .main {
            box-shadow: 0 0 5px rgba(0, 0, 0, .30);
            ;
            padding: 20px;
            position: relative;
            left: 10%;
            margin-top: 20px;
            width: 75%;
            margin-top: -90px;
            margin-left: 54px;
            background-color: #FFFFFF;
        }

        .image-with-text {
            box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
            ;
            height: 80px;
        }

        .name-pic {
            position: relative;
            top: 20px;
            background: rgb(131,177,235);
        }

        .name-pic img {
            width: 40px;
            height: 40px;
        }

        .span-tags {
            color: #365899;
            font-size: 25px;
            position: absolute;
        }

        .all-contain {
            padding: 10px;
            border-bottom: 1px solid black;
            border-left: 1px solid black;
            border-right: 1px solid black;
            height: 400px;
        }

        .social {
            display: flex;
        }

        .comment,
        .share {
            margin-left: 30px;
        }
    </style>
</br></br></br></br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="main">
    @foreach($postArtical as $val)
        <div class="image-with-text">
            <div class="name-pic">
                <img
                    src="http://127.0.0.1:8000/images/2.png">
                <span class="span-tags">{{ $val['client_name'] }}</span></br>
                <small>{{ date('d-M-Y', strtotime($val['updated_at'])) }}</small>
            </div>
        </div>

        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque, qui?</p>
        <div class="all-contain">
            <h3>{{ $val['case_details']}}</h3>
            <p>{{ $val['case_type']}}</p>
            <p>{{ $val['case_title']}}</p>
        </div>
        <td><a href="{{ route('registrations')}}">
            <button class="btn btn-primary">Apply Now</button></a>
        </td>
        <!-- <div class="social">
            <div class="like">
            <i class="fa fa-thumbs-up"><p>like</p></i>
            </div>
            <div class="comment">
            <i class="fa fa-comment"><p>Comment</p></i>
            </div>
            <div class="share">
            <i class="fa fa-share"><p>Share</p></i>
            </div>
        </div> -->
  @endforeach
    </div>
  </body>
</html>
@include('client/footer')
