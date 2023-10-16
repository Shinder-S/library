{include file='templates/header.tpl'}



<div class="border m-4 position absolute top-50">
    
    <ul class="list-group">
    
      <li class="list-group-item list-group-item-light fs-5">Nombre:</li>
      <li class="list-group-item list-group-item-info fs-5">{$book->book_name}</li>
   
      <li class="list-group-item list-group-item-light fs-5">Apellido:</li>
      <li class="list-group-item list-group-item-info fs-5">{$book->book_price}</li>
  
      <li class="list-group-item list-group-item-light fs-5">Edad:</li>
      <li class="list-group-item list-group-item-info fs-5">{$book->book_category}</li>
    
    
    </ul>

</div>

{include file='templates/footer.tpl'}