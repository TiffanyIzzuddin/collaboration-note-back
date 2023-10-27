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
                <td>{{ $data['title'] }}</td>
                <td>{{ $data['link'] }}</td>
                <td>{{ $data['text'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
