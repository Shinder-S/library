{include file="header.tpl"}

<form action="books/{if $param === 'add'}add{else}edit/{$id}{/if}" method="POST" class="my-4" enctype="multipart/form-data">
    <div class="row">
        <div class="col-9">
            <div class="form-group">
                <label>Name</label>
                <input name="book_name" {if isset($book_id)}value="{$book->book_name}"{/if} type="text" class="form-control w-50" required>
                <label>Price</label>
                <input name="book_price" {if isset($book_id)}value="{$book->book_price}"{/if} type="number" class="form-control w-50" required>
                <label>Category</label>
                <input name="book_category" {if isset($book_id)}value="{$book->book_category}"{/if} type="text" class="form-control w-50" required>    
            </div>
        </div>
    <button type="submit" class="btn btn-primary mt-2 w-25">Save</button>
</form>
<a type="button" href='books' class="btn btn-primary ms-2 mt-2 w-25 back-list">Back</a>

{include file="footer.tpl"}