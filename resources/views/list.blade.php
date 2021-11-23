<html>
    <head>
        <title>종목별 호가정보</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <body>
        <table class="table table-striped table-sm">
            <tr>    
                <th scope="col">시간</th>
                <th scope="col">종목</th>
                <th scope="col">매도 합계</th>            
                <th scope="col">매수 합계</th>
                <th scope="col">메리트</th>
                <th scope="col">가격</th>
                <th scope="col">등락 가격 </th>
                <th scope="col">현재 등락률</th>
            </tr>
            
            @foreach ($rows as $row)
                <tr>
                    <td>{{ $row->created_at }}</td>
                    <td>{{ $row->name }}</td>
                    <td>{{ $row->medo_total }}</td>
                    <td>{{ $row->mesu_total }}</td>
                    <td>{{ $row->merit }}</td>
                    <td>{{ $row->price }}</td>
                    <td>{{ $row->cur_price }}</td>
                    <td>{{ $row->cur_percent }}</td>
                </tr>
            @endforeach
        </table>
    </body>
</html>