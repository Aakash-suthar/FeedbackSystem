<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
            <div clas="container"  style = "min-height: 400px;margin-left:40px;margin-right:40px;">
                    <br><br><br>
            <p align="right">{{$date2}}</p><br>
                    <p align="left"><b>{{$Faculty}}</b></p><br>
                    <p>This is with regard to the students feedback form filled up by the students last year.
                        Satisfaction percentage is derived from the analysis of five point performance parameter of individual teacher.
                        Following is the overall rating after the analysis.
                    </p><br>
                    <p align="left">Excellent<label style="padding-left:95px;padding-right:20px">-</label><label><b>{{$totalQ5}}</b></label></p>
                    <p align="left">Very Good<label style="padding-left:84px;padding-right:20px;">-</label><label><b>{{$totalQ4}}</b></label></p>
                    <p align="left">Good<label style="padding-left:120px;padding-right:20px;">-</label><label><b>{{$totalQ3}}</b></label></p>
                    <p align="left">Satisfactory<label style="padding-left:80px;padding-right:20px;">-</label><label><b>{{$totalQ2}}</b></label></p>
                    <p align="left">Needs Improvement<label style="padding-left:25px;padding-right:20px;">-</label><label><b>{{$totalQ1}}</b></label></p>
                    <br>
                    <p>You are instructed to take corrective action so as to improve your
                    overall rating which is <label><b>{{$all}}</b></label></p><br><br><br>
                    <p align="right"><b>Dr. L.Bhushan</b></p>
                    <p align="right"><b>Principal</b></p>
                </div>
    </body>
</html>