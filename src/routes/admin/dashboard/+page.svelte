<script>
    import Category from "$lib/components/shop/category.svelte";
    import ProductCard from "$lib/components/admin/product-card.svelte";
    import Search from "$lib/components/admin/search.svelte";
  
  </script>
  <section class="h-[70vh] flex justify-between gap-20 items-center rounded-3xl">
      <!-- categories -->
      <div>
          <Category />
      </div>
  
      <!-- main shop -->
      <div class="w-full flex flex-col justify-start h-[65vh]">
          <Search />
          <div class="grid grid-cols-1 sm:grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-4 overflow-auto h-[65vh] scrollbar-none">
              <!-- product item -->
              <ProductCard />
              <!-- <ItemCard />
              <ItemCard />
              <ItemCard />
              <ItemCard />
              <ItemCard />
              <ItemCard />
              <ItemCard />
              <ItemCard />
              <ItemCard />
              <ItemCard />
              <ItemCard />
              <ItemCard />
              <ItemCard />
              <ItemCard />
              <ItemCard /> -->
          </div>
      </div>
  </section>