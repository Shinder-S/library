{include file="header.tpl"}

<div class="alert alert-success d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
  <div>
  {if isset($book_id)&&!empty($book_id)}
    You sucesfully edit the {$book_name} registered
  {else}
    You have sucess add new register {$book_name}
  {/if}
  </div>
</div>

<p class="mb-0"><a href="books">BACK</a></p>

{include file="footer.tpl"}