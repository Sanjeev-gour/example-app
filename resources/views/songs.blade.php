<table>
    <tr>
    <th>Title</th>
    <th>Artist</th>
    </tr>
    <tr>
    <td>{{ $song->getTitle() }}</td>
    <td>{{ $song->getArtist() }}</td>
    </tr>
    </table><table>
        <tr>
        <th>Title</th>
        <th>Artist</th>
        </tr>
        @foreach ($songs as $song)
        <tr>
        <td>{{ $song->getTitle() }}</td>
        <td>{{ $song->getArtist() }}</td>
        </tr>
        @endforeach
        </table>