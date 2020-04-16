{!! Form::open(['route' => ['armes.destroy', $id], 'method' => 'delete']) !!}
<div class='btn-group'>

    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', [
        'type' => 'submit',
        'class' => 'btn btn-danger btn-sm btn-submit',
        'onclick' => "return confirm('هل أنت متأكد من أنك تريد الاستمرار في الحذف؟')"
    ]) !!}

    <a href="{{ route('armes.show', $id) }}" class='btn btn-info btn-sm'>
        <i class="glyphicon glyphicon-eye-open"></i>
    </a>
    <a href="{{ route('armes.edit', $id) }}" class='btn btn-warning btn-sm'>
        <i class="glyphicon glyphicon-edit"></i>
    </a>

</div>
{!! Form::close() !!}
