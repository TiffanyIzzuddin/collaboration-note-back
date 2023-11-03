<!DOCTYPE html>
<html>
<head>
    <title>Data dari Supabase</title>
</head>
<body>
    <h1>Data dari Supabase</h1>
    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Link</th>
                <th>Isi Text</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
            <tr>
                <td>{{ $item['title'] }}</td>
                <td>{{ $item['link'] }}</td>
                <td>{{ $item['isi_text'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
