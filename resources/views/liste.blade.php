@extends ('layouts.base')

@section('title', 'liste')

@section('content')
    


<h1 class="titreListe">les livres</h1>
<br>


    <hr>
    <label for="book-select">choisir un livre:</label>

    <select name="books" id="books-select">
        
        <option value="book1">book1</option>
        <option value="book2">book2</option>
        <option value="book3">book3</option>
        <option value="book4">book4</option>
        <option value="book5">book5</option>
        <option value="book6">book6</option>
    </select>
    <button>valider</button>

    <hr>

    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni hic incidunt alias porro corrupti veniam fugiat non est vitae! Ratione, nemo deserunt ducimus cum temporibus tempora molestias. <br>, voluptatum suscipit.</p><br>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni hic incidunt alias porro corrupti veniam fugiat non est vitae! Ratione, nemo deserunt ducimus cum temporibus tempora molestias. <br>, voluptatum suscipit.</p><br>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> Magni hic incidunt alias porro corrupti veniam fugiat non est vitae! Ratione, nemo deserunt ducimus cum temporibus tempora molestias. <br>, voluptatum suscipit.</p><br>
    
<table>
    <tr>
      <td>&nbsp;</td>
      <td>Knocky</td>
      <td>Flor</td>
      <td>Ella</td>
      <td>Juan</td>
    </tr>
    <tr>
      <td>Race</td>
      <td>Jack Russell</td>
      <td>Poodle</td>
      <td>Streetdog</td>
      <td>Cocker Spaniel</td>
    </tr>
    <tr>
      <td>Age</td>
      <td>16</td>
      <td>9</td>
      <td>10</td>
      <td>5</td>
    </tr>
    <tr>
      <td>Propriétaire</td>
      <td>Belle-mère</td>
      <td>Moi</td>
      <td>Moi</td>
      <td>Belle-soeur</td>
    </tr>
    <tr>
      <td>Habitudes alimentaires</td>
      <td>Mange tous les restes</td>
      <td>Grignotte la nourriture</td>
      <td>Mange copieusement</td>
      <td>Mange jusqu'à ce qu'il éclate</td>
    </tr>
  </table>

@endsection