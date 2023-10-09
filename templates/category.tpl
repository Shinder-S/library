{include file="header.tpl"}

  <div class="card">
    <img id="category" src="{$category[0]->photo}" class="rounded mx-auto d-block" {*class="card-img-top"*} alt="{$category[0]->name}">
  
    <div class="text-center" class="card-body">
      <h5 class="card-title">{$category[0]->name}</h5>
      <p class="card-text">({$category[0]->brand})</p>
      <h6 class="card-title">Book</h6>
      <p class="card-text">{$category[0]->id_book} - {$category[0]->Book} ({$category[0]->BrandBook})</p>
      <h6 class="card-title">Category</h6>
      <p class="card-text">{$category[0]->id_category} - {$category[0]->name} ({$category[0]->Brand})</p>
      <a href="Category/list/{$category[0]->name}" class="btn btn-primary">Go to {$category[0]->brand} list</a>
      <a href="Category" class="btn btn-primary">Return to Category</a>
    </div>
  </div>

{include file="footer.tpl"}