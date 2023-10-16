{include file="header.tpl"}

<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">To whom concern:</h4>
  <p>Are you sure you want to delete this element?</p>
  <hr>
  <p class="mb-0"><a href="{$param}/delete/{$book_id}"><button type="button" class="btn btn-outline-success">Yes, sure</button></a></p>
  <p class="mb-0"><a type="button" href="books" class="btn btn-outline-success back-list mt-2">No, back to list</a></p>
</div>

{include file="footer.tpl"}