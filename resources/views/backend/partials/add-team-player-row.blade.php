<tr class="team-player-{{$player->id}}">
    <td>{{$count}}</td>
    <td>{{$player->name}}</td>
    <td>
        <a href="{{route('player.edit', $player->id)}}"><i class="material-icons">edit</i></a>

        <form method="post" class="delete-form" action="{{ route('player.destroy', $player->id) }}">
            @csrf
            @method('DELETE')

            <a type="button" class="delete-submit-btn"><i class="material-icons">delete</i></a>
        </form>
    </td>
</tr>
