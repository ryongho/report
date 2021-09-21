<html>
    <head>
        <title>리포트 리스트</title>
        <style>
            .list td{
                border-bottom:1px solid black;
                border-right:1px solid black;
            }
        </style>
    </head>
    <body>
        <table class="list">
            <th>종목(코드명)</th>     
            <th>제목</th>
            <th>목표가</th>
            <th>요약</th>
            <th>추천업체</th>
            <th>리포트 링크</th>
            <th>의견</th>
            <th>작성일</th>
            <th>수집일</th>

            
            @foreach ($reports as $row)
                <tr>
                    <td>{{ $row->item }} ({{ $row->item_code }})</td>
                    <td><a href={{ $row->report_url }}>{{ $row->title }}</a></td>
                    <td>{{ $row->target_price }}</td>
                    <td>{{ $row->summary }}</td>
                    <td>{{ $row->company }}</td>
                    <td><a href={{ $row->report_url }}>리포트 보러가기</a></td>
                    <td>{{ $row->comment }}</td>
                    <td>{{ $row->reg_date }}</td>
                    <td>{{ $row->collect_date }}</td>
                </tr>
            @endforeach
        </table>
    </body>
</html>