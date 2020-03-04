<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <base href="{{asset('')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}" />


    <title>Test ajax</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <style>
        .mgt-5{
            margin-top: 5vw;
        }
    </style>
    <!-- CSFR token for ajax call -->
    <script type="text/javascript" src="js/jquery1.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mgt-5">
                    <div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Address</label>
                            <input type="text" name="address" id="address" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
                        <button id="btn_submit" type="submit" class="btn btn-primary">Submit</button>
                    </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('#btn_submit').off('click').on('click', function (e) {
                e.preventDefault();
                var name= $('#name').val();
                var address = $('#address').val();

                $.ajax({
                    type: 'post',
                    dataType: 'json',
                    url: '{{ route('ajaxRequestPost') }}',
                    data: { name: name,
                        address:address},
                    success: function (response) {
                        console.log(response.success);
                    }
                })
            });
        });
    </script>
</body>
</html>