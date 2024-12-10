<script lang="ts">
    import { onMount } from 'svelte';
    import { ApiService } from '$lib/services/api.service.js';
    import Category from "$lib/components/shop/category.svelte";
    import ProductCard from "$lib/components/admin/product-card.svelte";
    import Search from "$lib/components/admin/search.svelte";
    
    interface Product {
        productID: string;
        productName: string;
        productImage: string;
        productPrice: number;
        productQuantity: number;
        productCategory: string;
        productDescription?: string;
        productStatus: 'active' | 'inactive';
        productSold: number;
        productSince: string;
    }
    
    let products: Product[] = [];
    let loading = true;
    let error: string | null = null;

    onMount(async () => {
        try {
            products = await ApiService.getProducts();
            loading = false;
        } catch (e) {
            error = e instanceof Error ? e.message : 'An unknown error occurred';
            loading = false;
        }
    });
</script>

<section class="h-[70vh] flex justify-between gap-20 items-center rounded-3xl">
    <div>
        <Category />
    </div>

    <div class="w-full flex flex-col justify-start h-[65vh]">
        <Search />
        {#if loading}
            <p>Loading...</p>
        {:else if error}
            <p class="text-red-500">{error}</p>
        {:else}
            <div class="grid grid-cols-1 sm:grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-4 overflow-auto h-[65vh] scrollbar-none">
                {#each products as product}
                    <ProductCard {product} />
                {/each}
            </div>
        {/if}
    </div>
</section>