@extends('layouts.app')

@section('content')
        <div class="container">
            <div class="row justify-content-center">   
                <a href="{{ route('unos') }}" class="btn btn-outline-primary" role="button" aria-pressed="true">Dodaj novi film</a>
        </div>
        <br/>
        
           <div style = "font-family:Verdana,arial,helvetica;">
          
          

            <?php
            $slova = range('A', 'Z'); 
            ?>
            
            @foreach($slova as $slovo)

            <a href='{{$slovo}}' > {{$slovo}} </a>
                    
              @endforeach

      


            @if(isset($kolekcija))
             
              <table class="table sortable">
            <tr><th>Slika naslovnice</th><th>Naziv filma</th><th>Godina snimanja</th><th>Trajanje [min]</th></tr>
            @foreach ($kolekcija as $k) 
                
                    <tr>
                       <td>@if ($k->image)
                        <img src="{{$k->image}}" height="40px" />
                        @else
                        <p>Ovaj film nema naslovnu sliku.</p>
                        @endif
                        </td>

                        <td>{{$k->naslov}}</td>
                        <td>{{$k->godina}}. godina</td>
                        <td>{{$k->trajanje}} min</td>
                        
                    </tr>
            
             @endforeach
                       
            </table>

            @endif



</div>
    
    
    
    <br/>
    <h3>Popis svih filmova</h3>
   
    <?php
    use Illuminate\Support\Facades\DB;

        $filmovis = DB::table('filmovis')->get();
    ?>
<table class="table sortable">
            <tr><th>Slika naslovnice</th><th>Naziv filma</th><th>Godina snimanja</th><th>Trajanje [min]</th><th>Brisanje filma</th></tr>
            @foreach ($filmovis as $f) 
                 

             <tr>
                        <td>@if ($f->image)
                        <img src="{{$f->image}}" height="40px" />
                        @else
                        <p>Ovaj film nema naslovnu sliku.</p>
                        @endif
                        </td>

                        <td>{{$f->naslov}}</td>
                        <td>{{$f->godina}}. godina</td>
                        <td>{{$f->trajanje}} min</td>
                        
                        
                        <td> 
                        <!-- brisanje određenog filma -->
                        <button type="submit">
                                   
                        <a href="{{ route('unos') }}" onclick="event.preventDefault(); 
                         document.getElementById('delete-form-{{$f->id}}').submit();"> 
                         Obriši film  
                         </a> 
                        
                        <form id="delete-form-{{$f->id}}"  
                         + action="{{route('film.destroy', $f->id)}}" 
                          method="post"> 
                          @csrf @method('DELETE') 
                         </form>

                         </button>

                         </td>
                    </tr>
            
        @endforeach
   
                      
        </table>




</div>
@endsection