{include file="header.tpl" }
<table class="table">
    <thead>
     <tr>
        <th scope="col">Nombre</th>
        <th scope="col">Price</th>
        <th scope="col">Category</th>
        <th scope="col">Actions</th>
     </tr>
    </thead>
    <tbody>
        {foreach from=$books item=$book}
          <tr>
            <td><a href="books/viewBook/{$book->book_id}">{$book->book_name} </a></td>
            <td>{$book->book_price}</td>
            <td>{$book->book_category}</td>
            {if isset ($smarty.session.IS_LOGGED)&&($smarty.session.IS_LOGGED)}
            <td class="d-flex p-2">
              <a href='books/form/edit/{$book->book_id}' type="button" class="btn btn-succes me-1"><img src="./assets/imgs/edit.png" width="25" height="25"></a>
              <a href="books/confirm-delete/{$book->book_id}" type="button" class="btn btn-succes me-1"><img src="./assets/imgs/delete.png" width="25" height="25"></a>
            </td>
          {/if}
          </tr>
        {/foreach}
    </tbody>
</table>
{if isset ($smarty.session.IS_LOGGED)&&($smarty.session.IS_LOGGED)}

  <a href="books/form/add" type="button" class="btn btn-info float-end me-3">Add</a>
{/if}


{include file="footer.tpl" }
