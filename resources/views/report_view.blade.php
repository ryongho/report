<html>
    <head>
        <title>리포트 뷰어</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">        
        <style>
            .report{
                width:100%;
                height:100%;
            }
            .pop{
                width:300px;
                height:300px;
                position:fixed;
                right:0px;
                bottom:0px;
                background-color:white;

            }
            .memo{
                width:280px;
                height:200px;
                margin-left:10px;
                margin-top:10px;

            }
            .insert-btn{
                margin-top:20px;
                width:80%;
                margin-left:10%;
            }
        </style>
    </head>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="//mozilla.github.io/pdf.js/build/pdf.js"></script>


    <body>

        <embed src="https://docs.google.com/viewer?embedded=true&url={{$report->report_url}}" class="report" />
        <div class="pop form-group card">
            <textarea class="memo form-control" id="memoTextarea" ></textarea>
            <a class="btn btn-outline-primary insert-btn" href="#" role="button">입 력</a>
            
        </div>
    </body>
</html>