<script lang="ts">
    import { base } from '$app/paths';
    import { goto } from '$app/navigation';

    const navigate = (path: string): void => {
        goto(`${base}${path}`);
    }
</script>

<header class="flex flex-col gap-2 mt-2">

    <!-- free shipping text -->
    <p class="text-xs text-center p-2 font-inter font-medium text-lightPurple rounded-full"><span class="pr-2">✦</span>Free Shipping on All Orders over ₱1000<span class="pl-2">✦</span></p>
    <div class="flex justify-between bg-lightPurple p-4 rounded-2xl">
        <!-- reese.art logo -->
        <div class="flex items-center gap-1">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#ffffff" viewBox="0 0 256 256"><path d="M228,120c0,22.63-6,36.72-17.93,41.87a27.3,27.3,0,0,1-11,2.13,41.75,41.75,0,0,1-8.4-.93,4.05,4.05,0,0,1-2.52-1.64,368.49,368.49,0,0,0-47.75-55.26,8,8,0,0,0-11,11.62c14.84,13.91,64.13,63.49,78.32,120.27a8,8,0,0,1-5.82,9.7A8.13,8.13,0,0,1,200,248a8,8,0,0,1-7.75-6.06c-4.12-16.47-11.65-32.48-20.46-47.09a25.85,25.85,0,0,1-1.9,7.21C164.72,214,150.63,220,128,220s-36.72-6-41.88-17.94c-5.45-12.58-.39-30.82,15-54.21.68-1,1.36-2,2-3l-3,2C82.84,158.27,68.35,164,56.89,164a27.3,27.3,0,0,1-11-2.13C34,156.72,28,142.63,28,120s6-36.72,17.93-41.88c12.59-5.45,30.83-.39,54.22,15l3,2q-1-1.5-2-3c-15.41-23.39-20.47-41.63-15-54.22C91.28,26,105.37,20,128,20s36.72,6,41.88,17.93c5.45,12.59.39,30.83-15,54.22q-1,1.53-2,3l3-2c23.39-15.41,41.63-20.47,54.22-15C222,83.28,228,97.37,228,120Z"></path></svg>
            <p class=" text-white font-black text-lg">reese.art</p>
        </div>
        <!-- navbar -->
        <nav class="flex gap-6 items-center text-white font-medium text-center text-xs p-2">
            <a href="{base}/" on:click|preventDefault={() => navigate('/')} class="hover:text-darkPurple">Home</a>
            <a href="/" class="hover:text-darkPurple">Commission</a>
            <a href="{base}/contact" on:click|preventDefault={() => navigate('/contact')} class="hover:text-darkPurple">Contact</a>  
            <a href="{base}/faq" on:click|preventDefault={() => navigate('/faq')} class="hover:text-darkPurple">FAQ</a>
        </nav>
        <!-- buttons -->
        <div class="flex gap-2">
            <!-- shop button -->
            <button class="flex items-center text-center text-light p-2 px-8 rounded-xl border-2 hover:bg-purple">
                <a href="#shop" class="font-semibold text-xs">Shop</a>
            </button>
            <!-- likes -->
            <button class="flex items-center gap-1 border-2 p-2 rounded-xl hover:bg-purple hover:text-lightPurple" aria-label="liked product">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#dbd8e3" viewBox="0 0 256 256"><path d="M178,36c-20.09,0-37.92,7.93-50,21.56C115.92,43.93,98.09,36,78,36a66.08,66.08,0,0,0-66,66c0,72.34,105.81,130.14,110.31,132.57a12,12,0,0,0,11.38,0C138.19,232.14,244,174.34,244,102A66.08,66.08,0,0,0,178,36Zm-5.49,142.36A328.69,328.69,0,0,1,128,210.16a328.69,328.69,0,0,1-44.51-31.8C61.82,159.77,36,131.42,36,102A42,42,0,0,1,78,60c17.8,0,32.7,9.4,38.89,24.54a12,12,0,0,0,22.22,0C145.3,69.4,160.2,60,178,60a42,42,0,0,1,42,42C220,131.42,194.18,159.77,172.51,178.36Z"></path></svg>
            </button>
        </div>
    </div>

</header>

<style>
    button:hover {
        box-shadow: 0 0 0 1px #DBD8E3, 0 0 0 4px rgba(255, 255, 255, 0); 
        transition: box-shadow 0.2s ease;
    }
</style>