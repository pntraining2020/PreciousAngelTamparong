<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
    <style>
    .card{
            margin-top:100px;
    }
    .container{
            height:800px;
            width:300px;
            margin-top:20px;
            text-align:left;
    }
    #about-us{
        width:350px;
    }
    .time{
        margin-left:20px;
    }
    .time1{
        border:solid 2px black;
        padding:50px;
    }
    .findings{
        margin-left:20px;
    }
    </style>
</head>
<body>
    <div class="card">
        <div class="container">
        <form action="{{url('time')}}" method="get">
        <div class="container-fluid">
		
        <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" type="button" id="about-us" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        choose name
        </button>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="about-us">
        <a class="dropdown-item" href="timeHome">Irish</a>
        <a class="dropdown-item" href="timeHome">Warren</a>
        </div>
        </div>
        
        </div>
        </form>
        <!-- script dropdown code -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        
        <!-- Popper -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        
        <!-- Latest compiled and minified Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        
        <!-- Initialize Bootstrap functionality -->
        <script>
        // Initialize tooltip component
        $(function () {
          $('[data-toggle="tooltip"]').tooltip()
        })
        
        // Initialize popover component
        $(function () {
          $('[data-toggle="popover"]').popover()
        })
        </script>

        <!-- clock in -->
        <br>
        <div class="time">
            <form action="{{url('insert_time')}}" method="post">
            @csrf
            <span><input type="time" name="time_start" value="time"></span>
            <button type="submit" action="submit">Clock In</button>
            </form>
            <form action="{{url('insert')}}" method="get">
            @csrf
                @foreach($times as $time)
                <table>
                <tr><td>{{$time['time_start']}}</td></tr>
                </table>
                @endforeach
            </form>
        </div>
        
        <!-- break -->
        <br>
        <div class="time">
            <div class="time1">
            <div>
                <form action="">
                <button>START</button>
                <span><input type="time"  value="time"></span>
                </form>
                <input type="text">
            </div><br>
            <div>
                <form action="">
                <button>END</button>
                <span><input type="time"  value="time"></span>
                </form>
                <input type="text">
            </div>
            </div>
        </div>

        <!-- clock out -->
        <br>
        <div class="time">
            <form action="{{url('insert_timeEnd')}}" method="post">
            @csrf
            <button  type="submit" action="submit">Clock out</button>
            <span><input name="time_end" type="time" value="time"></span>
            </form>

            <form action="{{url('timeEnd')}}" method="get">
            @csrf
            @foreach($times as $time)
                <table>
                <tr><td>{{$time['time_end']}}</td></tr>
                </table>
            @endforeach
            </form>
        </div>
        
        <!-- findings -->
        <br>
        <div class="findings">
        <h3>TOTAL TIME WORKED:<input type="text" placeholder="time"></h3><br>
        <h3>HOURS LEFT BEFORE TIMEOUT:<input type="text" placeholder="time"></h3><br>
        <h3>TOTAL BREAKS USED:<input type="text" placeholder="time"></h3>
        </div>


        </div>
    </div>
</body>
</html>