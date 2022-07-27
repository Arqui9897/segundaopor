<div>
    <div>
        <form action="">
           <input type="text" wire:model="buscarnombre">
           <a href="{{url('pdfnombre'.$buscarnombre)}}"  target="_blank"><button type="button" class="btn btn-warning">Buscar por Nombre de persona</button></a>
     </div>
</div>


<br>
<br>
<br>
<div>
    <div>
        <form action="">
           <input type="text" wire:model="buscartipo">
           <a href="{{url('pdftipopersona'.$buscartipo)}}"  target="_blank"><button type="button" class="btn btn-warning">Buscar tipo persona</button></a>
     </div>
</div>



<div>
    <a href="{{url('listapersonaspdf')}}" target="_blank"><button type="button" class="btn btn-primary">Todas Las Personas</button></a>   
 </div>
