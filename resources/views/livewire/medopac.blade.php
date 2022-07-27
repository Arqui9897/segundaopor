<div>
    <h1>Todas Las Personas</h1>
    <table>
        <thead >
            <table class="table" >
                <thead>
                  <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Cedula</th>
                    <th scope="col">edad</th>
                  </tr>
                </thead>
        </thead>
        <tbody>
            @foreach ($btp as $item)
                <tr>
                    <td>
                        {{$item->npersona}}
                    </td>
                    <td>
                        {{$item->apersona}}
                    </td>
                    <td>
                        {{$item->cpersona}}
                    </td>
                    <td>
                        {{$item->epersona}} 
                    </td>
                    <td>
                        {{$item->tper}} 
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div> 