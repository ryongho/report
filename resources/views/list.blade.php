<html>
    <head>
        <title>종목별 호가정보</title>
    </head>
    <body>
        <table>
            <th>시간</th>
            <th>종목</th>
            <th>매도 합계</th>            
            <th>매수 합계</th>
            <th>메리트</th>
            <th>가격</th>
            <th>등락 가격 </th>
            <th>현재 등락률</th>
            <th>시간</th>
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
                    <td>{{ $row->created_at }}</td>
                </tr>
            @endforeach
        </table>
    </body>
</html>