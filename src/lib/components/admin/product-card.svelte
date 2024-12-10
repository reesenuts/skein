<script lang="ts">
    import type { Product } from '$lib/types/product';
    
    export let product: Product;

    let currentImageIndex = 0;
    const images = [
        product.productImage,
        "/assets/takoyaki.jpg" // fallback image
    ];

    const nextImage = () => {
        currentImageIndex = (currentImageIndex + 1) % images.length;
    };

    const prevImage = () => {
        currentImageIndex = (currentImageIndex - 1 + images.length) % images.length;
    };
</script>

<!-- whole card -->
<div class="h-full rounded-xl flex flex-col w-full">
    <!-- upper section -->
    <div class="relative">
        <!-- sold out or in stock label -->
        <div class="absolute top-2 right-2 bg-darkPurple/70 backdrop-blur-md text-xs p-2 px-2 text-white rounded-full w-20 text-center">
            Stock {product.productQuantity}
        </div>

        <!-- image display -->
        <!-- svelte-ignore a11y-img-redundant-alt -->
        <img 
            src={images[currentImageIndex]} 
            alt={product.productName} 
            class="rounded-tl-3xl rounded-tr-3xl w-full h-[310px] object-cover" 
        />

        <!-- carousel buttons -->
        {#if images.length > 1}
            <div class="absolute top-1/2 transform -translate-y-1/2 w-full flex justify-between px-4">
                <button class="text-darkPurple text-2xl" on:click={prevImage}>&lt;</button>
                <button class="text-darkPurple text-2xl" on:click={nextImage}>&gt;</button>
            </div>
        {/if}
    </div>

    <!-- below section -->
    <div class="bg-purple/70 backdrop-blur-lg rounded-bl-3xl rounded-br-3xl h-[180px] p-4 flex flex-col justify-between">
        <!-- product name and sold count -->
        <div class="flex flex-col">
            <div class="flex justify-between">
                <p class="text-lg text-white font-semibold">{product.productName}</p>
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-flame">
                        <path d="M8.5 14.5A2.5 2.5 0 0 0 11 12c0-1.38-.5-2-1-3-1.072-2.143-.224-4.054 2-6 .5 2.5 2 4.9 4 6.5 2 1.6 3 3.5 3 5.5a7 7 0 1 1-14 0c0-1.153.433-2.294 1-3a2.5 2.5 0 0 0 2.5 2.5z"/>
                    </svg>
                    <p class="text-xs text-light font-medium pl-1">{product.productSold}</p>
                </div>
            </div>
            <p class="text-xs text-light/70 font-dmSans">PHP {product.productPrice}</p>

            <!-- categories -->
            <div class="mt-5 flex gap-1 text-xs text-light/50 font-medium">
                <div class="bg-lightPurple/20 p-1 px-3 rounded-full">{product.productCategory}</div>
            </div>
        </div>

        <!-- actions button -->
        <div class="flex gap-1">
            <button class="bg-light p-2 w-full rounded-xl text-xs text-purple font-medium">
                Edit Product
            </button>

            <button class="bg-light p-3 rounded-xl text-xs flex items-center justify-center text-white w-auto" aria-label="delete">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#352F44" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trash-2">
                    <path d="M3 6h18"/>
                    <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"/>
                    <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"/>
                    <line x1="10" x2="10" y1="11" y2="17"/>
                    <line x1="14" x2="14" y1="11" y2="17"/>
                </svg>
            </button>
        </div>
    </div>
</div>
  