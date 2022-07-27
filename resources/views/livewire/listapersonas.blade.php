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
                    <th scope="col">sintomas</th>
                    <th scope="col">tipopersona</th>
                    <th scope="col">especialidad</th>
                  </tr>
                </thead>
        </thead>
        <tbody>
            @foreach ($lp as $item)
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
                        {{$item->idsin}} 
                    </td>
                    <td>
                        {{$item->tipoper}} 
                    </td>
                    <td>
                        {{$item->idespe}} 
                        
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div> 