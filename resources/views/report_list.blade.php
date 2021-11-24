<html>
    <head>
        <title>리포트 리스트</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
        
    </head>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript">
    
    $().ready(function(){

        $("#datepicker").datepicker({
            format:'yyyy-mm-dd'
        });

        $("#search_btn").on('click',function(){
            const date = $("#datepicker").val();
            location.href="/report/list/"+date;
        });
    });
    
    
    </script>
    <body>
        <div>
        <input type="text" data-provide="datepicker" id="datepicker" value="{{$date}}"/>
        <input type="button" id="search_btn" value="검색" />
        </div>
        <table class="table table-striped table-sm">
            <th scope="col">종목(코드명)</th>     
            <th scope="col">제목</th>
            <th scope="col">목표가</th>
            <th scope="col" style="width:50%;">요약</th>
            <th scope="col">추천업체</th>
            <th scope="col">의견</th>
            <th scope="col">작성일</th>

            
            @foreach ($reports as $row)
                <tr>
                    <td>{{ $row->item }} ({{ $row->item_code }})</td>
                    <td><a target="blank" href={{ $row->report_url }}>{{ $row->title }}</a></td>
                    <td>{{ $row->target_price }}</td>
                    <td style="padding:10;">{{ $row->summary }}</td>
                    <td>{{ $row->company }}</td>
                    <td>{{ $row->comment }}</td>
                    <td>{{ $row->reg_date }}</td>
                </tr>
            @endforeach
        </table>
    </body>
</html>