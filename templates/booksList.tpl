{include file="header.tpl" }
<table class="table">
    <thead>
     <tr>
        <th scope="col">Id</th>
        <th scope="col">Nombre</th>
        <th scope="col">Price</th>
        <th scope="col">Category</th>
     </tr>
    </thead>
    <tbody>
        {foreach from=$books item=$book}
          
          
          
          <tr>
          <td>{$book->book_id}</td> <!-- Muestra el ID del libro en una celda oculta -->
            <td>{$book->book_name}</td>
            <td>{$book->book_price}</td>
            <td>{$book->book_category}</td>
            {if isset($smarty.session.IS_LOGGED)&&($smarty.session.IS_LOGGED)}
                <td class="d-flex p-2">
                    <a href="" type="button" class="btn btn-succes me-1"><img src="./assets/imgs/edit.png" width="25" height="25"></a>
                    <a href="" type="button" class="btn btn-succes me-1"><img src="./assets/imgs/delete.png" width="25" height="25"></a>
                </td>

            {{/if}}  
          </tr>
        {/foreach}
    </tbody>
</table>


{include file="footer.tpl" }
